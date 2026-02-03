<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function current_page($path ) : bool {
    return str_contains( $_SERVER['PATH_INFO'] ?? '/', $path  ) ? true : false;
}


function isAuth() : void {
    if(!isset($_SESSION['login'])){
        header('Location: /');
    }
}

function isAdmin() : bool {
    if(!isset($_SESSION)) {
        session_start();
    }
    return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}

function isStaff(): bool {
    return isset($_SESSION['staff']);
}

function isOwner(): bool {
    return isset($_SESSION['email']) && $_SESSION['email'] === 'fg_alarcon@hotmail.com';
}


// Images Procesor

function uploadImage($customFolder = '/public/uploads/profile-images/', $customFileName = null) {
    ini_set('upload_max_filesize', '2M');
    ini_set('post_max_size', '2M');
    ini_set('max_file_uploads', '1');

    $fileTmpPath = $_FILES['file-input']['tmp_name'];
    $fileName = $_FILES['file-input']['name'];

    if (!defined('BASE_PATH')) {
        define('BASE_PATH', dirname(__DIR__));
    }

    $uploadPath = BASE_PATH . $customFolder;

    // Crear la carpeta si no existe
    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }

    // Usar el nombre personalizado o generar uno único si no se pasa
    $uniqueIdentifier = $customFileName ?? md5(time() . $fileName) . '.webp';
    $destPath = $uploadPath . $uniqueIdentifier;

    // Comprimir y guardar como WebP
    compressAndSaveAsWebP($fileTmpPath, $destPath);

    return $uniqueIdentifier; // Devuelve el nombre del archivo WebP
}

function compressAndSaveAsWebP($tmp_name, $outputPath) {
    $info = getimagesize($tmp_name);

    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($tmp_name);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($tmp_name);
    } else {
        // Si no es JPEG ni PNG, no se convierte a WebP
        return;
    }

    imagewebp($image, $outputPath, 50); // Puedes ajustar el nivel de compresión (0-100)

    imagedestroy($image);
}
