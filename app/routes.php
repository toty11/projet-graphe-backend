<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

include '../fonction/data.php';

return function (App $app) {
    $app->get('/mathematiques', function (Request $request, Response $response) {
        $response->getBody()->write(getNotes("Mathématiques"));
        return $response;
    });

    $app->get('/mathematiques/{id}', function (Request $request, Response $response, $args) {
        $response->getBody()->write(getNotesEtudiant("Mathématiques",$args['id']));
        return $response;
    });

    $app->get('/svt', function (Request $request, Response $response) {
        $response->getBody()->write(getNotes("SVT"));
        return $response;
    });

    $app->get('/svt/{id}', function (Request $request, Response $response, $args) {
        $response->getBody()->write(getNotesEtudiant("SVT",$args['id']));
        return $response;
    });

    $app->get('/français', function (Request $request, Response $response) {
        $response->getBody()->write(getNotes("Français"));
        return $response;
    });

    $app->get('/français/{id}', function (Request $request, Response $response, $args) {
        $response->getBody()->write(getNotesEtudiant("Français",$args['id']));
        return $response;
    });
};
