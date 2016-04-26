<?php

namespace GsbBundle\Controller;

use PDO ;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use GsbBundle\Entity\Visiteur ;
use Symfony\Component\HttpFoundation\Response ;

class ConnexionController extends Controller {
    public function vueConnexionAction() {
        $form = $this->createFormBuilder() 
                ->add('login','text', array('attr' => array('class'=>'form-control')))
                ->add('motDePasse', 'password', array('attr' => array('class'=>'form-control')))
                ->add('annuler','reset', array('attr' => array('class'=>'btn btn-danger')))
                ->add('connexion','submit', array('attr' => array('class'=>'btn btn-primary')))
                ->getForm();
        
        $request = $this->container->get('request') ;
        $form->handleRequest($request) ;
        
        if ($form->isValid()) {   
            $login = $form['login']->getData() ;
            $mdp = $form['motDePasse']->getData() ;
           
            $repository_visiteur = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Visiteur');
            $repository_comptable = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Comptable');
            
            $visiteur = $repository_visiteur->findOneBy(array('login'=>$login, 'mdp'=>$mdp)) ;
            $comptable = $repository_comptable->findOneBy(array('login'=>$login, 'mdp'=>$mdp));
            
            if ($visiteur) {
                $nom = $visiteur->getNom() ;
                $prenom = $visiteur->getPrenom() ;
                $idVisiteur = $visiteur->getIdvisiteur() ;
                
                $session = $this->getRequest()->getSession();                
                $session->set('nom', $nom) ;
                $session->set('prenom', $prenom) ;
                $session->set('idVisiteur', $idVisiteur) ;
                
                return $this->redirectToRoute('ficheFrais') ;
            } else if ($comptable) {
                $nom = $comptable->getNom() ;
                $prenom = $comptable->getPrenom() ;
                $idComptable = $comptable->getIdcomptable() ;
                
                $session = $this->getRequest()->getSession();                
                $session->set('nom', $nom) ;
                $session->set('prenom', $prenom) ;
                $session->set('idComptable', $idComptable) ;
                
                return $this->redirectToRoute('suivreFicheFrais', array('idVisiteur'=>0, 'mois'=>0)) ;
            } else {
                return $this->render('GsbBundle::vueConnexion.html.twig', array('form'=>$form->createView(), 'etatConnexion'=>'Erreur'));
            }
        } 
        return $this->render('GsbBundle::vueConnexion.html.twig', array('form'=>$form->createView() ,'etatConnexion'=>'S'));
    }
    
    public function deconnexion() {
        $this->getRequest()->getSession()->clear() ;
        return $this->redirectToRoute('gsb_connexion') ;
    }
}
