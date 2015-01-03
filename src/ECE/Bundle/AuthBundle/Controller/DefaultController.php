<?php

namespace ECE\Bundle\AuthBundle\Controller;

use ECE\Bundle\AuthBundle\Entity\People;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder()
                ->add('user','text')
                ->add('pass','password')
                ->add('save','submit',  array('attr' => array('class' => 'btn btn-primary'))  )
                ->getForm()
        ;

        $form->handleRequest($request);
        if($form->isValid()){
            return $this->render('ECEAuthBundle:Default:valid.html.twig');
        }

        return $this->render('ECEAuthBundle:Default:index.html.twig',array('form'=>$form->createView() ));
    }
}
