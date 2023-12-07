<?php

namespace App\Controllers;

use App\Models\Proprietaire;



class Proprietaires extends BaseController
{
    //Page créer Propriétaire
    public function newProprietaire()
    {
        return view('/proprietaires/newproprietaire');
    }
    //Post créer Propriétaire
    public function newProprietairePost()
    {
        $proprietaire = new Proprietaire();
        $form = [
            'NomProprio' => $this->request->getPost('nom'),
            'PrenomProprio' => $this->request->getPost('prenom'),
            'EmailProprio' => $this->request->getPost('mail'),
            'AdresseProprio' => $this->request->getPost('adresse'),
            'VilleProprio' => $this->request->getPost('ville'),
            'CodePostalProprio' => $this->request->getPost('cp'),
            'TelephoneProprio' => $this->request->getPost('phone'),
            'IdUtilisateur' => $_SESSION['IdUtilisateur']
        ];
        $proprietaire->insert($form);
        echo "Proprietaire créé";

        return redirect()->to(base_url('/proprietaires/newproprietaire'));
        
    }
    //Page gestion Propriétaire
    public function gestionProprietaires()
    {
        $proprietaire = new Proprietaire();
        $data['listeProprietaires'] = $proprietaire->where('idUtilisateur', $_SESSION['IdUtilisateur'])->findAll();
        return view('/proprietaires/gestionproprietaires', $data);
    }
    

    public function editProprietaire($id)
    {
        $proprietaire = new Proprietaire();
        $data['Proprietaire'] = $proprietaire->where('IDPROPRIETAIRE', $id)->first();
        if ($data['Proprietaire']['IDUTILISATEUR'] == $_SESSION['IdUtilisateur']) {
            return view('/proprietaires/modifierproprietaire', $data);
        }
        $data['listeProprietaires'] = $proprietaire->where('idUtilisateur', $_SESSION['IdUtilisateur'])->findAll();
        return view('/proprietaires/gestionproprietaires', $data);
    }

    public function editProprietairePost()
    {
        $proprietaire = new Proprietaire();
        $idProprio = $this->request->getPost('IdProprio');
        $form = [
            'NomProprio' => $this->request->getPost('NomProprio'),
            'PrenomProprio' => $this->request->getPost('PrenomProprio'),
            'EmailProprio' => $this->request->getPost('EmailProprio'),
            'AdresseProprio' => $this->request->getPost('AdresseProprio'),
            'VilleProprio' => $this->request->getPost('VilleProprio'),
            'CodePostalProprio' => $this->request->getPost('CodePostalProprio'),
            'TelephoneProprio' => $this->request->getPost('TelephoneProprio'),
        ];

        $proprietaire->update($idProprio, $form);

        return redirect()->to(base_url('/proprietaires'));

    }

    public function deleteProprietaire() {
        
        $proprietaire = new Proprietaire();
        $idProprietaire = $this->request->getPost('supprimer');
        $proprietaire->delete($idProprietaire);
        return redirect()->to(base_url('/proprietaires'));



    }
}