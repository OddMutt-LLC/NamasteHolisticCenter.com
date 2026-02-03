<?php

namespace Model;

class PatientHerbals extends ActiveRecord {
    protected static $tabla = 'herbals';

    protected static $columnasDB = [
        'id', 'date', 'herb_name', 'instructions', 
        'vendor', 'delivery_method', 'status', 
        'patient_id'
    ];

    public $id;
    public $date;
    public $herb_name;
    public $instructions;
    public $vendor;
    public $delivery_method;
    public $status;
    public $patient_id;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->date = $args['date'] ?? null;
        $this->herb_name = $args['herb_name'] ?? '';
        $this->instructions = $args['instructions'] ?? '';
        $this->vendor = $args['vendor'] ?? '';
        $this->delivery_method = $args['delivery_method'] ?? '';
        $this->status = $args['status'] ?? '';
        $this->patient_id = $args['patient_id'] ?? null;
    }
}
