<?php
// config/routes.php

$routes = [

    // Route pour la page d'accueil
    '' => [
        'controller' => 'HomePageController',
        'action' => 'index'
    ],
    
    // Route pour la page de colocation
    'colocation' => [
        'controller' => 'ColocationController',
        'action' => 'index'
    ],

    // Route pour la page d'enregistrement
    'register' => [
        'controller' => 'RegisterController',
        'action' => 'index'
    ],

    // Route pour la page de connexion
    'connection' => [
        'controller' => 'ConnectionController',
        'action' => 'index'
    ],

    // Route pour la page de profil
    'profile' => [
        'controller' => 'ProfileController',
        'action' => 'index'
    ],

    // Route pour la page de deconnexion
    'signout' => [
        'controller' => 'SignOutController',
        'action' => 'index'
    ],

    // Route par défaut pour les pages non trouvées (404)
    '404' => [
        'controller' => 'ErrorController',
        'action' => 'notFound'
    ]
];