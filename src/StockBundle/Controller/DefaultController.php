<?php

namespace StockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($id,$year,$title,$ext)
    {
        return new Response("
            <h1>page index stock</h1>
            <h2>id : $id</h2>
            <h2>year : $year</h2>
            <h2>title : $title</h2>
            <h2>ext : $ext</h2>
        ");
    }
}
