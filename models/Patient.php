<?php

namespace Model;

class Patient extends ActiveRecord {
    protected static $tabla = 'patients';
    protected static $columnasDB = [
        'id', 'client_id', 'pet_name', 'pet_species', 
        'pet_birth', 'pet_weight', 'pet_breed_color', 'pet_sex', 
        'appointment_reason', 'previous_veterinarian', 'pet_insurance','pet_insurance_policy_number', 'agree_privacy',
        'added', 'last_update', 'pet_image'
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
    public $pet_insurance_policy_number;
    public $agree_privacy;
    public $added;
    public $last_update;
    public $pet_image;

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
        $this->pet_insurance_policy_number = $args['pet_insurance_policy_number'] ?? '';
        $this->agree_privacy = $args['agree_privacy'] ?? '';
        $this->added = $args['added'] ?? null;  // Asignar valor de added
        $this->last_update = $args['last_update'] ?? null;
        $this->pet_image = $args['pet_image'] ?? '';
    }
}
