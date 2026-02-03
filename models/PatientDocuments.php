<?php

namespace Model;

class PatientDocuments extends ActiveRecord {
    protected static $tabla = 'patient_documents';
    
    protected static $columnasDB = [
        'id', 'patient_id', 'date', 
        'description', 'file'
    ];

    public $id;
    public $patient_id;
    public $date;
    public $description;
    public $file;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->patient_id = $args['patient_id'] ?? null;
        $this->date = $args['date'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->file = $args['file'] ?? '';
    }
}
