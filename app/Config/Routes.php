<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//Admin
$routes->get('/newuser','NewUser::newUser');
$routes->post('/newuserpost','NewUser::newUserPost');

//Accueil
$routes->get('/', 'Accueil::index');


//Utilisateurs
//Login
$routes->get('/login', 'Login::connexion');
$routes->post('/loginpost', 'Login::connexionPost');

//Deconnexion
$routes->post('/login/deconnexion','Login::signOut');


//Profesionnel
//Gestion Propriétaires
$routes->get('/proprietaires','Proprietaires::gestionProprietaires',['filter' => 'authGuard']);

//Nouveau Propriétaire
$routes->get('/proprietaires/newproprietaire', 'Proprietaires::newProprietaire',['filter' => 'authGuard']);
$routes->post('/proprietaires/newproprietairepost','Proprietaires::newProprietairePost',['filter' => 'authGuard']);

//Edit
$routes->get('/proprietaires/edit/(:any)','Proprietaires::editProprietaire/$1',['filter' => 'authGuard']);
$routes->post('/proprietaires/editpost/','Proprietaires::editProprietairePost/$1',['filter' => 'authGuard']);

//Delete
$routes->post('/proprietaires/delete','Proprietaires::deleteProprietaire',['filter' => 'authGuard']);


//Animaux
//Gestion Animaux
$routes->get('/animaux','Animaux::gestionAnimaux',['filter' => 'authGuard']);

//Post Etat Animal 
$routes->post('/animaux/etatpost','Animaux::etatAnimalPost',['filter' => 'authGuard']);

//Nouvel Animal
$routes->get('/animaux/newanimal', 'Animaux::newAnimal',['filter' => 'authGuard']);
$routes->post('/animaux/newanimalpost','Animaux::newAnimalPost',['filter' => 'authGuard']);

//Edit Animal
$routes->get('/animaux/edit/(:any)','Animaux::editAnimal/$1',['filter' => 'authGuard']);
$routes->post('/animaux/editpost','Animaux::editAnimalPost/$1',['filter' => 'authGuard']);

//Delete Animal
$routes->post('/animaux/delete','Animaux::deleteAnimal',['filter' => 'authGuard']);


