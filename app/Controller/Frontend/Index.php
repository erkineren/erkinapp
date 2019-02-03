<?php
/**
 * Created by PhpStorm.
 * User: erkin
 * Date: 18.11.2018
 * Time: 19:37
 */

namespace Application\Controller\Frontend;

use ErkinApp\Controller;


class Index extends Controller
{
    public function index()
    {
        // renderView
        return $this->renderView();
    }

}