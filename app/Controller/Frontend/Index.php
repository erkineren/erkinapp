<?php

namespace Application\Controller\Frontend;


use ErkinApp\Controller\Controller;
use function ErkinApp\Helpers\ln;

class Index extends Controller
{
    public function index()
    {
        return $this->renderView(['hello' => ln('hello')]);
    }

}