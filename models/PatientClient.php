<?php

namespace Model;

class PatientClient extends ActiveRecord {
    protected static $tabla = 'patients';
    protected static $columnasDB = [
        'id', 'client_id', 'pet_name', 'pet_species', 
        'pet_birth', 'pet_weight', 'pet_breed_color', 'pet_sex', 
        'appointment_reason', 'previous_veterinarian', 'pet_insurance', 'agree_privacy', 'client_first_name', 'added', 'last_update'
    ];

    public $id;
    public $client_id;
    public $pet_name;
    public $pet_species;
    public $pet_birth;
    public $pet_weight;
    public $pet_breed_color;
    public $pet_sex;
    public $appointment_reason;
    public $previous_veterinarian;
    public $pet_insurance;
    public $agree_privacy;
    public $client_first_name;
    public $added;
    public $last_update;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->client_id = $args['client_id'] ?? '';
        $this->pet_name = $args['pet_name'] ?? '';
        $this->pet_species = $args['pet_species'] ?? '';
        $this->pet_birth = $args['pet_birth'] ?? '';
        $this->pet_weight = $args['pet_weight'] ?? '';
        $this->pet_breed_color = $args['pet_breed_color'] ?? '';
        $this->pet_sex = $args['pet_sex'] ?? '';
        $this->appointment_reason = $args['appointment_reason'] ?? '';
        $this->previous_veterinarian = $args['previous_veterinarian'] ?? '';
        $this->pet_insurance = $args['pet_insurance'] ?? '';
        $this->agree_privacy = $args['agree_privacy'] ?? '';
        $this->client_first_name = $args['client_first_name'] ?? '';
        $this->added = $args['added'] ?? ''; // Inicializando el campo 'added'
        $this->last_update = $args['last_update'] ?? ''; // Inicializando el campo 'last_update'
    }
}
