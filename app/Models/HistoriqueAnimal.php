<?php

namespace App\Models;

use CodeIgniter\Model;

class HistoriqueAnimal extends Model
{
    protected $table      = 'h_animal';
    protected $primaryKey = ['idAnimal','Date_Histo'];

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['NomAnimal','DateNaissanceAnimal','SexeAnimalAnimal','EspeceAnimal','RaceAnimal','DescriptionAnimal','EtatAnimal','ImgAnimal','idAnimal'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'Date_Creation';
    protected $updatedField  = 'Date_Modification';
    protected $deletedField  = 'Date_Suppresion';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}