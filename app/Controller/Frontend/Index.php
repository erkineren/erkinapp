<?php

namespace Application\Controller\Frontend;


use ErkinApp\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class Index extends Controller
{
    /**
     * @Route({
     * "tr" : "/anasayfa",
     * "en" : "/home",
     * "de" : "/startseite"
     * })
     */
    public function index()
    {
        return $this->renderView();
    }

}