<?php

use ErkinApp\Event\ApiBasicAuthEvent;
use ErkinApp\Event\CheckLoggedInStatusEvent;
use ErkinApp\Event\ControllerActionEvent;
use ErkinApp\Event\Events;
use ErkinApp\Event\NotFoundEvent;
use ErkinApp\Event\RequestEvent;
use ErkinApp\Event\ResponseEvent;
use ErkinApp\Event\RoutingEvent;
use Symfony\Component\HttpFoundation\Response;
use function ErkinApp\Helpers\getView;


ErkinApp()->on(Events::NOT_FOUND, function (NotFoundEvent $notFoundEvent) {
    $response = new Response(getView('_includes/notfound', ['error' => $notFoundEvent->getMessage()]));
    $response->setStatusCode(Response::HTTP_NOT_FOUND);
    $notFoundEvent->setResponse($response);
});

ErkinApp()->on('Application_Controller_Frontend::before', function (ControllerActionEvent $controllerActionEvent) {

    $template = ErkinApp()->TemplateManager()->getTemplate();
    if ($template instanceof \ErkinApp\Template\Smarty\SmartyTemplate) {
        $template->getSmarty()->setCaching(false);
        $template->getSmarty()->setCompileCheck(true);
    }

});

ErkinApp()->on(Events::ROUTING, function (RoutingEvent $routingEvent) {
//    $routingEvent->mapControllerLanguages(['tr' => '/anasayfa','de' => '/startseite'], [\Application\Controller\Frontend\Index::class, 'index']);
//    \ErkinApp\Helpers\debugPrint(ErkinApp()->AppRoutes()->all());
});

ErkinApp()->on(Events::REQUEST, function (RequestEvent $requestEvent) {
//    $requestEvent->setResponse(new Response('Intercept Request'));
});


ErkinApp()->on(Events::RESPONSE, function (ResponseEvent $event) {
//    $event->getResponse()->setContent('Override Response');
});

ErkinApp()->on(Events::API_BASIC_AUTHENTICATION, function (ApiBasicAuthEvent $event) {
    if ($event->getAuthUser() == 'erkin') $event->setAuthenticated(true);
});

/**
 * Fire whenever login status check
 */
ErkinApp()->on(Events::CHECK_LOGGED_IN_STATUS, function (CheckLoggedInStatusEvent $event) {
//    if ($event->isAreaFrontend() || $event->isAreaBackend()) {
//        if ($cookie = ErkinApp()->Request()->cookies->get(SESSION_FRONTEND_AUTH)) {
//
//            $cookie = unserialize($cookie);
//            $user = ErkinApp()->DB('default')->from('panel_user', $cookie['user_id'])->fetch();
//            if ($user && $user['password'] == base64_decode($cookie['hash'])) {
//                $event->setIsAuthenticated(true);
//                ErkinApp()->Session()->set(SESSION_FRONTEND_AUTH, $user);
//                if ($user['user_type'] == 1)
//                    ErkinApp()->Session()->set(SESSION_BACKEND_AUTH, $user);
//            }
//        }
//
//    }

});

