<?php
/**
 * Created by PhpStorm.
 * User: erkin
 * Date: 18.11.2018
 * Time: 19:37
 */

namespace Application\Controller\Frontend;

use ErkinApp\Controller;
use Symfony\Component\Routing\Annotation\Route;


class Index extends Controller
{
    /**
     * @Route("welcome")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index()
    {
        // renderView
        return $this->renderView();
    }

}