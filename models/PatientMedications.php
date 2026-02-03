<?php

namespace Model;

class PatientMedications extends ActiveRecord {
    protected static $tabla = 'medications';

    protected static $columnasDB = [
        'id', 'date', 'dosage', 'medication_name', 
        'instructions', 'vendor', 'delivery_method', 
        'status', 'patient_id'
    ];

    public $id;
    public $date;
    public $medication_name;
    public $dosage;
    public $instructions;
    public $vendor;
    public $delivery_method;
    public $status;
    public $patient_id;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->date = $args['date'] ?? null;
        $this->medication_name = $args['medication_name'] ?? '';
        $this->dosage = $args['dosage'] ?? '';
        $this->instructions = $args['instructions'] ?? '';
        $this->vendor = $args['vendor'] ?? '';
        $this->delivery_method = $args['delivery_method'] ?? '';
        $this->status = $args['status'] ?? '';
        $this->patient_id = $args['patient_id'] ?? null;
    }
}
