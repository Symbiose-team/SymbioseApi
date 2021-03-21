<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FieldRepository;
use App\Entity\Field;


class FieldController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        return $this->render('field/index.html.twig', [
            'controller_name' => 'FieldController',
        ]);
    }

    /**
     * @Route("/afficheterrain",name="afficheterrai")
     */
    public function affiche(){
        $repo=$this->getDoctrine()->getRepository(Field::class);
        $field=$repo->findAll();
        return $this->render('field/afficher.html.twig',['terrain'=>$field]);
    }


   /**
     * @Route ("/detail/{id}",name="detail")
     */
    public function detail($id){

        $repo=$this->getDoctrine()->getRepository(Field::class);
        $fs=$repo->find($id);
        return $this->render('field/test.html.twig',['f'=>$fs]);
    }

    /**
     * @Route ("/reserve/{id}",name="reserver")
     */

public function reserver($id){
   return $this->render('paillement/Paillement.html.twig',['id'=>$id]);

}

    /**
     * @Route("/routourner",name="return")
     */
public function retourner(){

    return $this->redirectToRoute('afficheterrai',[]);

}
    /**
     * @Route("/rutern",name="ret")
     */
    public function ret(){

        return $this->redirectToRoute('afficheterrai',[]);

    }



}
