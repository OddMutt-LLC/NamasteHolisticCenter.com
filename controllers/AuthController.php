<?php

namespace Controllers;

use Classes\Email;
use Model\User;
use MVC\Router;

class AuthController {
    public static function login(Router $router) {

        $alertas = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user = new User($_POST);

            $alertas = $user->validarLogin();

            if (empty($alertas)) {
                // Verificar que el User exista
                $user = User::where('email', $user->email);

                if (!$user || !$user->confirm) {
                    User::setAlerta('error', 'El User No Existe o no está confirm');
                } else {
                    // El User existe
                    if (password_verify($_POST['password'], $user->password)) {
                        
                        // Verificar si la sesión ya está iniciada
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }

                        // Asignar valores a la sesión
                        $_SESSION['id'] = $user->id;
                        $_SESSION['name'] = $user->name;
                        $_SESSION['last_name'] = $user->last_name;
                        $_SESSION['email'] = $user->email;
                        $_SESSION['admin'] = $user->admin ?? null;

                        // Redirigir basado en el tipo de usuario
                        if ($user->admin === "1") {
                            $_SESSION['admin'] = $user->admin ?? null;
                            header('Location: /admin/dashboard');
                        } else {
                            header('Location: /');
                        }
                        exit(); // Terminar el script después de la redirección

                    } else {
                        User::setAlerta('error', 'Password Incorrecto');
                    }
                }
            }
        }


        $alertas = User::getAlertas();
        
        // Render a la vista 
        $router->render('auth/login', [
            'titulo' => 'Login',
            'alertas' => $alertas
        ]);
    }

    public static function logout() {
        $_SESSION = [];
        
        header('Location: /');
       
    }

    public static function create(Router $router) {
        $alertas = [];
        $user = new User;

        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user->sincronizar($_POST);
            
            $alertas = $user->validar_cuenta();


            if(empty($alertas)) {
                $existeUser = User::where('email', $user->email);

                

                if($existeUser) {
                    User::setAlerta('error', 'El User ya esta registrado');
                    $alertas = User::getAlertas();
                } else {
                    // Hashear el password
                    $user->hashPassword();

                    // Eliminar password2
                    unset($user->password2);

                    // Generar el Token
                    $user->crearToken();

                    // Crear un nuevo User
                    $resultado =  $user->guardar();

                    // Enviar email
                    $email = new Email($user->email, $user->name, $user->token);
                    $email->enviarConfirmacion();
                    

                    if($resultado) {
                        header('Location: /message');
                    }
                }
            }
        }

        // Render a la vista
        $router->render('auth/create-account', [
            'titulo' => 'Crea tu cuenta en Truebalance',
            'User' => $user, 
            'alertas' => $alertas
        ]);
    }

    public static function forgot(Router $router) {
        $alertas = [];
        
        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            $user = new User($_POST);

            $alertas = $user->validarEmail();

            if(empty($alertas)) {
                // Buscar el User
                $user = User::where('email', $user->email);

                if($user && $user->confirm) {

                    // Generar un nuevo token
                    $user->crearToken();
                    unset($user->password2);

                    // Actualizar el User
                    $user->guardar();

                    // Enviar el email
                    $email = new Email( $user->email, $user->name, $user->token );
                    $email->enviarInstrucciones();



                    $alertas['success'][] = 'Hemos enviado las instrucciones a tu email';
                } else {
                 

                    $alertas['error'][] = 'El User no existe o no esta confirm';
                }
            }
        }

        // Muestra la vista
        $router->render('auth/forgot', [
            'titulo' => 'Olvide mi Password',
            'alertas' => $alertas
        ]);
    }

    public static function recover(Router $router) {

        $token = s($_GET['token']);

        $token_valido = true;

        if(!$token) header('Location: /');

        // Identificar el User con este token
        $user = User::where('token', $token);

        if(empty($user)) {
            User::setAlerta('error', 'Token No Válido, intenta de nuevo');
            $token_valido = false;
        }


        if($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Añadir el nuevo password
            $user->sincronizar($_POST);

            // Validar el password
            $alertas = $user->validarPassword();

            if(empty($alertas)) {
                // Hashear el nuevo password
                $user->hashPassword();

                // Eliminar el Token
                $user->token = null;

                // Guardar el User en la BD
                $resultado = $user->guardar();

                // Redireccionar
                if($resultado) {
                    header('Location: /');
                }
            }
        }

        $alertas = User::getAlertas();
        
        // Muestra la vista
        $router->render('auth/recover', [
            'titulo' => 'recover Password',
            'alertas' => $alertas,
            'token_valido' => $token_valido
        ]);
    }

    public static function message(Router $router) {

        $router->render('auth/message', [
            'titulo' => 'Cuenta Creada Exitosamente'
        ]);
    }

    public static function confirm(Router $router) {
        
        $token = s($_GET['token']);

        if(!$token) header('Location: /');

        // Encontrar al User con este token
        $user = User::where('token', $token);

        if(empty($user)) {
            // No se encontró un User con ese token
            User::setAlerta('error', 'Token No Válido');
        } else {
            // confirm la cuenta
            $user->confirm = 1;
            $user->token = '';
            unset($user->password2);
            
            // Guardar en la BD
            $user->guardar();

            User::setAlerta('exito', 'Cuenta Comprobada Correctamente');
        }

     

        $router->render('auth/confirm', [
            'titulo' => 'Confirma tu cuenta DevWebcamp',
            'alertas' => User::getAlertas()
        ]);
    }
}