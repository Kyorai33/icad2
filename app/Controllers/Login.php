<?php

namespace App\Controllers;

use App\Models\Utilisateur;


class Login extends BaseController
{
    public function connexion(): string
    {

        return view('connexion/login.php');

    }
    private function hash_password($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public function connexionPost(): string
    {
        $utilisateur = new Utilisateur();
        $session = session();
        $email = $this->request->getPost(('email'));
        $password = $this->request->getPost(('password'));
        $data = $utilisateur->where('EmailUser', $email)->first();

        if ($data) {

            if (password_verify($password, $data['MOTDEPASSEUSER'])) {
                $sessionData = [
                    'NomUser' => $data['NOMUSER'],
                    'PrenomUser' => $data['PRENOMUSER'],
                    'EmailUser' => $data['EMAILUSER'],
                    'FonctionUser' => $data['FONCTIONUSER'],
                    'AdresseUser' => $data['ADRESSEUSER'],
                    'VilleUser' => $data['VILLEUSER'],
                    'CodePostalUser' => $data['CODEPOSTALUSER'],
                    'TelephoneUser' => $data['TELEPHONEUSER'],
                    'IdUtilisateur' => $data['IDUTILISATEUR'],
                    'isLogged' => TRUE
                ];
                $session->set($sessionData);
                echo "Vous êtes connecté";
                return view('connexion/login');
            } else {
                $session->setFlashdata('msg', 'Erreur utilisateur ou mot de passe');
                echo "Mauvais mot de passe";
                return view('connexion/login');

            }
        } else {
            echo "Mauvaise adresse Email";
            return view('connexion/login');


        }
    }
    public function signOut()
    {
        $session = session();
        $session->destroy();
        echo "Vous êtes deconnecté";
        return view ('connexion/login');
    }

}
?>