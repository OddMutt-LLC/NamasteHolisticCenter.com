<?php

namespace Model;

class Client extends ActiveRecord {
    protected static $tabla = 'clients';
    protected static $columnasDB = [
        'id', 'client_first_name', 'client_last_name', 'email', 'contact_phone', 'address', 
        'city', 'state', 'zipcode', 'client_birth', 'prefer_contact', 
        'additional_contact', 'additional_contact_relationship', 'additional_contact_phone', 
        'days_available', 'pharmacy', 'pharmacy_phone_number', 'know_about_us'
    ];

    public $id;
    public $client_first_name;
    public $client_last_name;
    public $email;
    public $contact_phone;
    public $address;
    public $city;
    public $state;
    public $zipcode;
    public $client_birth; // Agregado el campo faltante
    public $prefer_contact;
    public $additional_contact;
    public $additional_contact_relationship;
    public $additional_contact_phone;
    public $days_available;
    public $pharmacy;
    public $pharmacy_phone_number;
    public $know_about_us;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->client_first_name = $args['client_first_name'] ?? '';
        $this->client_last_name = $args['client_last_name'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->contact_phone = $args['contact_phone'] ?? '';
        $this->address = $args['address'] ?? '';
        $this->city = $args['city'] ?? '';
        $this->state = $args['state'] ?? '';
        $this->zipcode = $args['zipcode'] ?? '';
        $this->client_birth = $args['client_birth'] ?? ''; // Inicialización del nuevo campo
        $this->prefer_contact = $args['prefer_contact'] ?? '';
        $this->additional_contact = $args['additional_contact'] ?? '';
        $this->additional_contact_relationship = $args['additional_contact_relationship'] ?? '';
        $this->additional_contact_phone = $args['additional_contact_phone'] ?? '';
        $this->days_available = $args['days_available'] ?? '';
        $this->pharmacy = $args['pharmacy'] ?? '';
        $this->pharmacy_phone_number = $args['pharmacy_phone_number'] ?? '';
        $this->know_about_us = $args['know_about_us'] ?? '';
    }
}
