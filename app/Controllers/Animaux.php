<?php

namespace App\Controllers;

use App\Models\Animal;
use App\Models\Proprietaire;


class Animaux extends BaseController
{
    //Page créer Animal
    public function newAnimal()
    {
        $proprietaire = new Proprietaire;
        $data['ListeProprietaires'] = $proprietaire->where('idUtilisateur', $_SESSION['IdUtilisateur'])->findAll();
        return view('/animaux/newanimal', $data);
    }
    //Post créer Animal
    public function newAnimalPost()
    {
        $animal = new Animal;
        $imageAnimal = file_get_contents($_FILES['img']['tmp_name']);
        $form = [
            'NumeroIcad' => $this->request->getPost('icad'),
            'NomAnimal' => $this->request->getPost('nom'),
            'DateNaissanceAnimal' => $this->request->getPost('date'),
            'SexeAnimalAnimal' => $this->request->getPost('sexe'),
            'EspeceAnimal' => $this->request->getPost('espece'),
            'RaceAnimal' => $this->request->getPost('race'),
            'DescriptionAnimal' => $this->request->getPost('description'),
            'ImgAnimal' => $imageAnimal,
            'EtatAnimal' => "RAS",
            'IdProprietaire' => $this->request->getPost('proprietaire'),
            'IdUtilisateur' => $_SESSION['IdUtilisateur'],
        ];
        $animal->insert($form);
        echo "Animal créé";
        return redirect()->to(base_url('/animaux/newanimal'));

    }
    //Page gestion Animal

    public function gestionAnimaux()
    {
        $animal = new Animal;
        $data['listeAnimaux'] = $animal->where('idUtilisateur', $_SESSION['IdUtilisateur'])->findAll();
        return view('/animaux/gestionanimaux', $data);
    }

    public function etatAnimalPost()
    {
        $animal = new Animal;
        $idAnimal = $this->request->getPost('IdAnimal');
        $data['Animal'] = $animal->where('idAnimal', $idAnimal)->first();
        $etat = ['EtatAnimal' => $this->request->getPost('etat')];
        $animal->update($idAnimal, $etat);
        return redirect()->to(base_url('/animaux'));

    }


    public function deleteAnimal()
    {

        $animal = new Animal();
        $idanimal = $this->request->getPost('supprimer');
        $animal->delete($idanimal);
        return redirect()->to(base_url('/animaux'));



    }
    public function editAnimal($id)
    {
        $animal = new Animal();
        $data['Animal'] = $animal->where('IDANIMAL', $id)->first();
        $proprietaire = new Proprietaire;
        $dataProprietaire['ProprietaireAnimal'] = $proprietaire->where('IDPROPRIETAIRE', $data['Animal']['IDPROPRIETAIRE'])->first();

        $data['ListeProprietaires'] = $proprietaire->where('idUtilisateur', $_SESSION['IdUtilisateur'])->findAll();
        if ($data['Animal']['IDUTILISATEUR'] == $_SESSION['IdUtilisateur']) {
            return view('/animaux/modifieranimaux', $data, $dataProprietaire);
        } else {

            $data['Animal'] = $animal->where('IDUTILISATEUR', $_SESSION['IdUtilisateur'])->findAll();
            return view('/animaux/gestionanimal', $data);

        }
    }
    public function editAnimalPost()
    {
        $animal = new Animal;
        $idAnimal = $this->request->getPost('IdAnimal');
        $form = [
            'NomAnimal' => $this->request->getPost('NomAnimal'),
            'DescriptionAnimal' => $this->request->getPost('DescriptionAnimal'),
            'ImgAnimal' => $this->request->getPost('img'),
            'IdProprietaire' => $this->request->getPost('proprietaire'),
            'IdUtilisateur' => $_SESSION['IdUtilisateur']
        ];
        $animal->update($idAnimal, $form);
        // return redirect($_SERVER['HTTP_REFERER']);
        return redirect()->to(base_url('/animaux'));

    }

}