<?php

namespace App\Controllers;

use App\Models\Utilisateur;

class NewUser extends BaseController
{
    public function newUser(): string
    {

        return view('admin/newuser');

    }
    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function newUserPost(): string
    {
        $utilisateur = new Utilisateur();
        $password = $this->hash_password(($this->request->getPost('password')));
        $data = $utilisateur->where('EMAILUSER', $this->request->getPost('mail'))->first();
        if ($data) {
            echo "Adresse Email déjà utilisée";
            return view('admin/newuser');
        } else {
            $form = [
                'NomUser' => $this->request->getPost('nom'),
                'PrenomUser' => $this->request->getPost('prenom'),
                'MotDePasseUser' => $password,
                'EmailUser' => $this->request->getPost('mail'),
                'FonctionUser' => $this->request->getPost('fonction'),
                'AdresseUser' => $this->request->getPost('adresse'),
                'VilleUser' => $this->request->getPost('ville'),
                'CodePostalUser' => $this->request->getPost('cp'),
                'TelephoneUser' => $this->request->getPost('phone'),
            ];
            $utilisateur->insert($form);
            return view('admin/newuser');
        }


    }
 

}