<?php

namespace Admin\NewsBundle\Controller;
use Admin\NewsBundle\Entity\News;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function ajouterAction()
    {
        $news = new News();
        $form = $this->createFormBuilder($news)
                ->add('titre','text')
                ->add('text','textarea')
                ->add('auteur','text')
                ->getForm();
        
        $request = $this->get('request');
        
        if($request->getMethod() == 'POST'){
            $form->bind($request);
            
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($news);
                $em->flush();
                
                $flashbag = $this->get('session')->getFlashBag();
                $flashbag->set('info',"la news a ete correctement enregistrée");
                return $this->redirect($this->generateUrl('visiteurs_accueil_homepage'));
            }
        }
                        
        return $this->render('AdminNewsBundle:Default:ajouter.html.twig',array(
            'form' => $form->createView()
        ));
    }
}
