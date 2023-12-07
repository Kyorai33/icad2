<?php

namespace App\Models;

use CodeIgniter\Model;

class Animal extends Model
{
    protected $table      = 'animal';
    protected $primaryKey = 'idAnimal';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['NumeroIcad','NomAnimal','DateNaissanceAnimal','SexeAnimalAnimal','EspeceAnimal','RaceAnimal','DescriptionAnimal','EtatAnimal','ImgAnimal','IdProprietaire','IdUtilisateur'];

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