<?php
/**
 * Created by PhpStorm.
 * User: erkin
 * Date: 21.11.2018
 * Time: 00:04
 */

namespace Application\Controller\Api;


use ErkinApp\Controller\ApiAuthController;
use ErkinApp\Response\AjaxResponse;

class Index extends ApiAuthController
{

    public function index()
    {
        return AjaxResponse::Success('Ok');
    }


}