<?php

use App\Controller\HomeController;
use App\Controller\AuthController;
use App\Controller\DashboardController;
use App\Controller\AchatController;
use App\Controller\ClientController;
use App\Controller\CompteurController;
use App\Controller\LogAchatController;

$routes = [

        '/' => [
        'controller' => HomeController::class,
        'method' => 'index',
        'middlewares' => []
    ],


    '/login' => [
        'controller' => AuthController::class,
        'method' => 'login',
        'middlewares' => []
    ],

    '/auth' => [
        'controller' => AuthController::class,
        'method' => 'index',
        'middlewares' => []
    ],

    '/logout' => [
        'controller' => AuthController::class,
        'method' => 'logout',
        'middlewares' => ['auth']
    ],

    '/register' => [
        'controller' => AuthController::class,
        'method' => 'create',
        'middlewares' => []
    ],

    '/register/store' => [
        'controller' => AuthController::class,
        'method' => 'store',
        'middlewares' => []
    ],

    '/profile' => [
        'controller' => AuthController::class,
        'method' => 'show',
        'middlewares' => ['auth']
    ],

    '/profile/edit' => [
        'controller' => AuthController::class,
        'method' => 'edit',
        'middlewares' => ['auth']
    ],
    
    '/dashboard' => [
        'controller' => DashboardController::class,
        'method' => 'index',
        'middlewares' => ['auth']
    ],

    '/dashboard/create' => [
        'controller' => DashboardController::class,
        'method' => 'create',
        'middlewares' => ['auth']
    ],

    '/dashboard/store' => [
        'controller' => DashboardController::class,
        'method' => 'store',
        'middlewares' => ['auth']
    ],

    '/dashboard/edit' => [
        'controller' => DashboardController::class,
        'method' => 'edit',
        'middlewares' => ['auth']
    ],

    '/dashboard/show' => [
        'controller' => DashboardController::class,
        'method' => 'show',
        'middlewares' => ['auth']
    ],

    
    '/clients' => [
        'controller' => ClientController::class,
        'method' => 'index',
        'middlewares' => ['auth']
    ],

    '/clients/create' => [
        'controller' => ClientController::class,
        'method' => 'create',
        'middlewares' => ['auth']
    ],

    '/clients/store' => [
        'controller' => ClientController::class,
        'method' => 'store',
        'middlewares' => ['auth']
    ],

    '/clients/show' => [
        'controller' => ClientController::class,
        'method' => 'show',
        'middlewares' => ['auth']
    ],

    
    '/clients/edit' => [
        'controller' => ClientController::class,
        'method' => 'edit',
        'middlewares' => ['auth']
    ],

    '/compteurs' => [
        'controller' => CompteurController::class,
        'method' => 'index',
        'middlewares' => ['auth']
    ],

    '/compteurs/create' => [
        'controller' => CompteurController::class,
        'method' => 'create',
        'middlewares' => ['auth']
    ],

    '/compteurs/store' => [
        'controller' => CompteurController::class,
        'method' => 'store',
        'middlewares' => ['auth']
    ],

    '/compteurs/show' => [
        'controller' => CompteurController::class,
        'method' => 'show',
        'middlewares' => ['auth']
    ],

    '/compteurs/edit' => [
        'controller' => CompteurController::class,
        'method' => 'edit',
        'middlewares' => ['auth']
    ],

    '/compteurs/verifier' => [
        'controller' => CompteurController::class,
        'method' => 'verifier',
        'middlewares' => []
    ],

    '/achats' => [
        'controller' => AchatController::class,
        'method' => 'index',
        'middlewares' => ['auth']
    ],

    '/achats/create' => [
        'controller' => AchatController::class,
        'method' => 'create',
        'middlewares' => ['auth']
    ],

    '/achats/store' => [
        'controller' => AchatController::class,
        'method' => 'store',
        'middlewares' => ['auth']
    ],

    '/achats/show' => [
        'controller' => AchatController::class,
        'method' => 'show',
        'middlewares' => ['auth']
    ],

    '/achats/edit' => [
        'controller' => AchatController::class,
        'method' => 'edit',
        'middlewares' => ['auth']
    ],

    '/api/achats' => [
        'controller' => AchatController::class,
        'method' => 'store',
        'middlewares' => []
    ],
    
    '/api/acheter' => [
        'controller' => AchatController::class,
        'method' => 'acheter',
        'middlewares' => []
    ],

    '/api/historique' => [
        'controller' => AchatController::class,
        'method' => 'historique',
        'middlewares' => []
    ],

    '/logs' => [
        'controller' => LogAchatController::class,
        'method' => 'index',
        'middlewares' => ['auth']
    ],

    '/logs/create' => [
        'controller' => LogAchatController::class,
        'method' => 'create',
        'middlewares' => ['auth']
    ],

    '/logs/store' => [
        'controller' => LogAchatController::class,
        'method' => 'store',
        'middlewares' => ['auth']
    ],

    '/logs/show' => [
        'controller' => LogAchatController::class,
        'method' => 'show',
        'middlewares' => ['auth']
    ],

    '/logs/edit' => [
        'controller' => LogAchatController::class,
        'method' => 'edit',
        'middlewares' => ['auth']
    ],

    '/logs/consulter' => [
        'controller' => LogAchatController::class,
        'method' => 'consulter',
        'middlewares' => ['auth']
    ],

    '/logs/statistiques' => [
        'controller' => LogAchatController::class,
        'method' => 'statistiques',
        'middlewares' => ['auth']
    ],


    '/create' => [
        'controller' => HomeController::class,
        'method' => 'create',
        'middlewares' => ['auth']
    ],

    '/store' => [
        'controller' => HomeController::class,
        'method' => 'store',
        'middlewares' => ['auth']
    ],

    '/edit' => [
        'controller' => HomeController::class,
        'method' => 'edit',
        'middlewares' => ['auth']
    ],

    '/show' => [
        'controller' => HomeController::class,
        'method' => 'show',
        'middlewares' => ['auth']
    ],

];
