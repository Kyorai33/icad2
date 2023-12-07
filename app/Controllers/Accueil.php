<?php

namespace App\Controllers;


class Accueil extends BaseController
{
    public function index()
    {
        echo view('accueil/accueil');
    
    } 
}
?>