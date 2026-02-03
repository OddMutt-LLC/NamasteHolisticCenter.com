<?php

namespace Model;

class PatientTreatments extends ActiveRecord {
    protected static $tabla = 'treatments';

    protected static $columnasDB = [
        'id', 'date', 'modalities_used', 'doctor', 
        'rehabilitation_exercises', 'laser_therapy_class', 
        'activity_level_allowed', 'acupuncture_treatment', 
        'acupuncture_vitamin_b12', 'acupuncture_subcutaneous_fluids', 
        'exercises_file', 'diet_file', 'patient_id'
    ];

    public $id;
    public $date;
    public $modalities_used;
    public $doctor;
    public $rehabilitation_exercises;
    public $laser_therapy_class;
    public $activity_level_allowed;
    public $acupuncture_treatment;
    public $acupuncture_vitamin_b12;
    public $acupuncture_subcutaneous_fluids;
    public $exercises_file;
    public $diet_file;
    public $patient_id;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->date = $args['date'] ?? null;
        $this->modalities_used = $args['modalities_used'] ?? '';
        $this->doctor = $args['doctor'] ?? '';
        $this->rehabilitation_exercises = $args['rehabilitation_exercises'] ?? '';
        $this->laser_therapy_class = $args['laser_therapy_class'] ?? '';
        $this->activity_level_allowed = $args['activity_level_allowed'] ?? '';
        $this->acupuncture_treatment = $args['acupuncture_treatment'] ?? '';
        $this->acupuncture_vitamin_b12 = $args['acupuncture_vitamin_b12'] ?? '';
        $this->acupuncture_subcutaneous_fluids = $args['acupuncture_subcutaneous_fluids'] ?? '';
        $this->exercises_file = $args['exercises_file'] ?? '';
        $this->diet_file = $args['diet_file'] ?? '';
        $this->patient_id = $args['patient_id'] ?? null;
    }
}
