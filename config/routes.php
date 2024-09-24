<?php
// config/routes.php

$routes = [

    // Route pour la page d'accueil
    '' => [
        'controller' => 'AccueilController',
        'action' => 'index'
    ],

    // Route pour la page de connexion
    'login' => [
        'controller' => 'LoginController',
        'action' => 'index'
    ],

    // Route pour la page d'enregistrement
    'register' => [
        'controller' => 'RegisterController',
        'action' => 'index'
    ],

    // Route pour la page de colocation
    'colocation' => [
        'controller' => 'ColocationController',
        'action' => 'index'
    ],


    // Route par défaut pour les pages non trouvées (404)
    '404' => [
        'controller' => 'ErrorController',
        'action' => 'notFound'
    ]
];