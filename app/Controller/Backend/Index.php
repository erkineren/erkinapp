<?php

namespace Application\Controller\Backend;


use ErkinApp\Controller\BackendAuthController;
use Symfony\Component\HttpFoundation\Response;

class Index extends BackendAuthController
{

    public function index()
    {
        return new Response('backend');
    }

}