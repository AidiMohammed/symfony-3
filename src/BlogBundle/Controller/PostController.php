<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /** 
     * @Route("/posts/index",name="posts_index")
     */
    public function indexAction()
    {
        return $this->render('BlogBundle:Post:index.html.twig');
    }

    /**
     * @Route("/posts/show/{id}/{year}/{title}.{ext}",
     * name="posts_show",
     * requirements={
     * "id": "\d+",
     * "year": "\d{4}",
     * "title": "[a-zA-Z]+",
     * "ext": "php|html"
     * })
     */
    public function showAction($id,$year,$title,$ext="php")
    {
        return new Response("
            <h2>Show Post</h2>
            <br>
            <h2>Id : $id</h2>
            <br>
            <h2>year : $year</h2>
            <br>
            <h2>year : $title</h2>
            <br>
            <h2>ext : $ext</h2>
        ");
    }

}
