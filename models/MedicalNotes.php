<?php

namespace Model;

class MedicalNotes extends ActiveRecord {
    protected static $tabla = 'medical_notes';

    protected static $columnasDB = [
        'id', 'date', 'presenting_complaint', 'bcs', 'mucus_membranes', 'mucus_membranes_feel', 
        'tcvm_pulse', 'tcvm_tongue', 'shen', 'hr', 'rr', 'temp', 'crt', 
        'heart_auscultation', 'blood_preasure', 'grade', 'rythm', 
        'lung_auscultation', 'abdomen', 'coat', 'body_map', 'body_map_notes', 
        'affected_limb', 'affected_joint', 'spine', 'lameness_walk', 
        'lameness_trot', 'pain_on_manipulation', 'range_of_motion', 
        'functional_disability', 'lameness_additional_findings', 
        'mental_status', 'behavior', 'posture', 'gait', 
        'proprioceptive_positioning_thoracic_l', 'proprioceptive_positioning_pelvic_l', 
        'hopping_thoracic_l', 'hopping_pelvic_l', 'placing_thoracic_l', 
        'placing_plevic_l', 'proprioceptive_positioning_thoracic_r', 
        'proprioceptive_positioning_pelvic_r', 'hopping_thoracic_r', 
        'hopping_pelvic_r', 'placing_thoracic_r', 'placing_plevic_r', 
        'hemiwalking_thoracic_l', 'hemiwalking_plevic_l', 'hemiwalking_thoracic_r', 
        'hemiwalking_plevic_r', 'hyperesthesia', 'patellar_l', 'patellar_r', 
        'withdrawal_thoracic_l', 'withdrawal_plevic_l', 'withdrawal_thoracic_r', 
        'withdrawal_plevic_r', 'crossed_extensor_thoracic_l', 'crossed_extensor_plevic_l', 
        'crossed_extensor_thoracic_r', 'crossed_extensor_plevic_r', 
        'cutaneous_trunci_normal_l', 'cutaneous_trunci_cut_off_l', 
        'cutaneous_trunci_normal_r', 'cutaneous_trunci_cut_off_r', 
        'perineal_l', 'perineal_r', 'neuromatic_patellar_l', 'neuromatic_patellar_r', 
        'neuromatic_withdrawal_thoracic_l', 'neuromatic_withdrawal_plevic_l', 
        'neuromatic_withdrawal_thoracic_r', 'neuromatic_withdrawal_plevic_r', 
        'neuromatic_crossed_extensor_thoracic_l', 'neuromatic_crossed_extensor_plevic_l', 
        'neuromatic_crossed_extensor_thoracic_r', 'neuromatic_crossed_extensor_plevic_r', 
        'neuromatic_cutaneous_trunci_normal_l', 'neuromatic_cutaneous_trunci_cut_off_l', 
        'neuromatic_cutaneous_trunci_normal_r', 'neuromatic_cutaneous_trunci_cut_off_r', 
        'neuromatic_perineal_l', 'neuromatic_perineal_r', 'assesment', 
        'superficial_pain_tail', 'superficial_pain_pelvic_limb_l', 
        'superficial_pain_pelvic_limb_r', 'deep_pain_tail', 'deep_pain_pelvic_limb_l', 
        'deep_pain_pelvic_limb_r', 'patient_id'
    ];

    public $id;
    public $date;
    public $presenting_complaint;
    public $bcs;
    public $mucus_membranes;
    public $mucus_membranes_feel;
    public $tcvm_pulse;
    public $tcvm_tongue;
    public $shen;
    public $hr;
    public $rr;
    public $temp;
    public $crt;
    public $heart_auscultation;
    public $blood_preasure;
    public $grade;
    public $rythm;
    public $lung_auscultation;
    public $abdomen;
    public $coat;
    public $body_map;
    public $body_map_notes;
    public $affected_limb;
    public $affected_joint;
    public $spine;
    public $lameness_walk;
    public $lameness_trot;
    public $pain_on_manipulation;
    public $range_of_motion;
    public $functional_disability;
    public $lameness_additional_findings;
    public $mental_status;
    public $behavior;
    public $posture;
    public $gait;
    public $proprioceptive_positioning_thoracic_l;
    public $proprioceptive_positioning_pelvic_l;
    public $hopping_thoracic_l;
    public $hopping_pelvic_l;
    public $placing_thoracic_l;
    public $placing_plevic_l;
    public $proprioceptive_positioning_thoracic_r;
    public $proprioceptive_positioning_pelvic_r;
    public $hopping_thoracic_r;
    public $hopping_pelvic_r;
    public $placing_thoracic_r;
    public $placing_plevic_r;
    public $hemiwalking_thoracic_l;
    public $hemiwalking_plevic_l;
    public $hemiwalking_thoracic_r;
    public $hemiwalking_plevic_r;
    public $hyperesthesia;
    public $patellar_l;
    public $patellar_r;
    public $withdrawal_thoracic_l;
    public $withdrawal_plevic_l;
    public $withdrawal_thoracic_r;
    public $withdrawal_plevic_r;
    public $crossed_extensor_thoracic_l;
    public $crossed_extensor_plevic_l;
    public $crossed_extensor_thoracic_r;
    public $crossed_extensor_plevic_r;
    public $cutaneous_trunci_normal_l;
    public $cutaneous_trunci_cut_off_l;
    public $cutaneous_trunci_normal_r;
    public $cutaneous_trunci_cut_off_r;
    public $perineal_l;
    public $perineal_r;
    public $neuromatic_patellar_l;
    public $neuromatic_patellar_r;
    public $neuromatic_withdrawal_thoracic_l;
    public $neuromatic_withdrawal_plevic_l;
    public $neuromatic_withdrawal_thoracic_r;
    public $neuromatic_withdrawal_plevic_r;
    public $neuromatic_crossed_extensor_thoracic_l;
    public $neuromatic_crossed_extensor_plevic_l;
    public $neuromatic_crossed_extensor_thoracic_r;
    public $neuromatic_crossed_extensor_plevic_r;
    public $neuromatic_cutaneous_trunci_normal_l;
    public $neuromatic_cutaneous_trunci_cut_off_l;
    public $neuromatic_cutaneous_trunci_normal_r;
    public $neuromatic_cutaneous_trunci_cut_off_r;
    public $neuromatic_perineal_l;
    public $neuromatic_perineal_r;
    public $assesment;
    public $superficial_pain_tail;
    public $superficial_pain_pelvic_limb_l;
    public $superficial_pain_pelvic_limb_r;
    public $deep_pain_tail;
    public $deep_pain_pelvic_limb_l;
    public $deep_pain_pelvic_limb_r;
    public $patient_id;

    public function __construct($args = []) {
        foreach (self::$columnasDB as $columna) {
            $this->$columna = $args[$columna] ?? "";
        }
    }
}
