<?php
/**
 * Created by PhpStorm.
 * User: erkin
 * Date: 15.12.2018
 * Time: 23:17
 */

use ErkinApp\Events\ApiBasicAuthEvent;
use ErkinApp\Events\CheckLoggedInStatusEvent;
use ErkinApp\Events\ControllerActionEvent;
use ErkinApp\Events\Events;
use ErkinApp\Events\RequestEvent;
use ErkinApp\Events\ResponseEvent;
use Symfony\Component\HttpFoundation\Response;

ErkinApp()->on('Application_Controller_Frontend::after', function (ControllerActionEvent $controllerActionEvent) {

//    $controllerActionEvent->response->setContent($controllerActionEvent->response->getContent() . '<script>alert("asd")</script>');

//    _yaz($controllerActionEvent->controller);


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

