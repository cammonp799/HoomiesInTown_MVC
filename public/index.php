<?php
// public/index.php

require_once '../env.php'; // Pour les variables d'environnement
require_once '../config/db.php'; // Pour la connexion à la base de données
require_once '../config/routes.php'; // Pour les routes
require_once '../app/models/UserModel.php'; // Pour les routes
// Fonction d'autoload pour les classes
function autoload($class_name)
{
    $controllerPath = "../app/controllers/{$class_name}.php";
    $modelPath = "../app/models/{$class_name}.php";

    if (file_exists($controllerPath)) {
        require_once $controllerPath;
        return;
    }

    if (file_exists($modelPath)) {
        require_once $modelPath;
        return;
    }
}
// Enregistrement de l'autoloader
spl_autoload_register('autoload');

// Fonction pour créer des instances de contrôleur avec les dépendances nécessaires
function createController($controllerName, $db = null)
{
    switch ($controllerName) {
        // case 'DiscussionController':
        //     $messageModel = new MessageModel($db);
        //     $utilisateurModel = new UtilisateurModel($db);
        //     return new DiscussionController($messageModel, $utilisateurModel);

        case 'ConnectionController':
            $model = new UserModel($db);
            return new $controllerName($model);

        case 'RegisterController':
            $model = new UserModel($db);
            return new $controllerName($model);

        case 'ProfileController':
            $model = new UserModel($db);
            return new $controllerName($model); 

        default:
            // Création du contrôleur sans dépendances
            return new $controllerName();
    }
}
// Parsing the URL to determine which controller and action to invoke
$request = trim($_SERVER['REQUEST_URI'], '/');
$request = parse_url($request, PHP_URL_PATH);
echo $request;
$routeFound = false;

// Créez une connexion à la base de données

$db = getDatabaseConnection();

foreach ($routes as $route => $params) {
    if (preg_match("#^$route$#", $request, $matches)) {
        $controllerName = $params['controller'];
        $action = $params['action'];

        // Création de l'instance du contrôleur avec les dépendances nécessaires
        $controller = createController($controllerName, $db);

        // Appel de l'action du contrôleur
        call_user_func_array([$controller, $action], array_slice($matches, 1));
        $routeFound = true;
        break;
    }
}

if (!$routeFound) {
    // Affichage de l'erreur 404 si aucune route ne correspond
    http_response_code(404);
    echo "404 Not Found";
}