<?php
/**
 * Created by PhpStorm.
 * User: erkin
 * Date: 21.11.2018
 * Time: 00:04
 */

namespace Application\Controller\Api;


use ErkinApp\ApiAuthController;
use ErkinApp\Responses\AjaxResponse;
use Symfony\Component\HttpFoundation\Session\Session;

class Index extends ApiAuthController
{

    public function index()
    {
        return AjaxResponse::Success('Ok');
    }


}