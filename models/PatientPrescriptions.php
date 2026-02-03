<?php

namespace Model;

class PatientPrescriptions extends ActiveRecord {
    protected static $tabla = 'prescriptions';

    protected static $columnasDB = [
        'id','category', 'medication', 'concentration', 'instructions', 
        'quantity', 'refills', 'pharmacy', 
        'pharmacist', 'date', 'file', 'patient_id'
    ];

    public $id;
    public $date;
    public $category;
    public $medication;
    public $concentration;
    public $instructions;
    public $quantity;
    public $refills;
    public $pharmacy;
    public $pharmacist;
    public $file;
    public $patient_id;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->date = $args['date'] ?? '';
        $this->category = $args['category'] ?? '';
        $this->medication = $args['medication'] ?? '';
        $this->concentration = $args['concentration'] ?? '';
        $this->instructions = $args['instructions'] ?? '';
        $this->quantity = $args['quantity'] ?? 0;
        $this->refills = $args['refills'] ?? '';
        $this->pharmacy = $args['pharmacy'] ?? '';
        $this->pharmacist = $args['pharmacist'] ?? '';
        $this->file = $args['file'] ?? '';
        $this->patient_id = $args['patient_id'] ?? null;
    }
}
