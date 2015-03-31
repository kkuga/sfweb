<?php

namespace Visiteurs\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $news = $this->getDoctrine()->getManager()->getRepository('AdminNewsBundle:News')->findAll();
        return $this->render('VisiteursAccueilBundle:Default:index.html.twig',array(
            'news' => $news,
        ));
    }
}
