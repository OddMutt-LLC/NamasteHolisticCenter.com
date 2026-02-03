<?php

namespace Model;

class PatientFiles extends ActiveRecord {
    protected static $tabla = 'patient_files';
    
    protected static $columnasDB = [
        'id', 'patient_id', 'date','issued', 'category', 
        'description', 'file'
    ];

    public $id;
    public $patient_id;
    public $date;
    public $issued;
    public $category;
    public $description;
    public $file;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->patient_id = $args['patient_id'] ?? null;
        $this->date = $args['date'] ?? '';
        $this->issued = $args['issued'] ?? '';
        $this->category = $args['category'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->file = $args['file'] ?? '';
    }
}
