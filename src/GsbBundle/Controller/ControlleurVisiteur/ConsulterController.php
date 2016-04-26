<?php

namespace GsbBundle\Controller\ControlleurVisiteur;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GsbBundle\Controller\ConnexionController ;
use GsbBundle\Entity\Fichefrais ;

class ConsulterController extends Controller
{
    public function indexAction() {
        $anneeMoisCourant = date('Y').'-'.date('m') ;
        $session = $this->getRequest()->getSession();
        $idVisiteur = $session->get('idVisiteur'); 
        $lesDatesPossibles = ConsulterController::getDatesPossibles($idVisiteur);
        
        $form = $this->createFormBuilder() 
                ->add('datesPossibles','choice', array('choices'=>$lesDatesPossibles, 'attr'=>array('class'=>'form-control', 'onChange'=>'submit()'), 'data'=>$anneeMoisCourant))
                ->getForm();
        
        $request = $this->container->get('request') ;
        $form->handleRequest($request) ;
        
        if ($form->isValid()) {
            $dateRecherche = $form['datesPossibles']->getData() ;
        } else {
            $dateRecherche = $anneeMoisCourant ;
        }
        
        $idFiche = ConsulterController::getIdFiche($dateRecherche);
        
        $repository_ficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
        $laFiche = $repository_ficheFrais->find($idFiche) ;
        
        $fraisForfaits = ConsulterController::getFraisForfait($idFiche) ;
        $fraisHorsForfaits = ConsulterController::getFraisHorsForfait($idFiche) ;
        
        return $this->render('GsbBundle:VuesVisiteur:vueMesFiches.html.twig', array('form'=>$form->createView(), 'fraisForfaits'=>$fraisForfaits, 'lesHorsForfait'=>$fraisHorsForfaits, 'ficheFrais'=>$laFiche));
    }
    
    public function getFraisHorsForfait ($idFiche) {
        $repository_horsForfait = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Lignefraishorsforfait');
        $lesHorsForfaits = $repository_horsForfait->findBy(array('idfiche'=>$idFiche)) ;
        
        return $lesHorsForfaits ;
    }
    
    public function getDatesPossibles($idVisiteur) {
        $anneeCourante = date('Y') ;
        
        $repository_ficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
        $lesFiches = $repository_ficheFrais->findBy(array('idvisiteur'=>$idVisiteur)) ;
        $lesDatesPropres = array() ;
        foreach ($lesFiches as $uneFiche) {
            $date = $uneFiche->getDatecreation() ;
            $moisChiffre = $date->format('m') ;
            $moisLettre = ConsulterController::getMoisLettre($moisChiffre) ;
            $annee = $date->format('Y');
            
            if($annee == $anneeCourante || $annee == $anneeCourante-1) {
                $lesDatesPropres[$annee. '-' .$moisChiffre] = $moisLettre. ' ' .$annee;
            }
        }
        return $lesDatesPropres ;
    }

    public function getMoisLettre($moisChiffre) {
        switch($moisChiffre) {
            case '01': 
                $moisLettre = 'Janvier'; 
                break;
            case '02': 
                $moisLettre = 'Février'; 
                break;
            case '03': 
                $moisLettre = 'Mars'; 
                break;
            case '04': 
                $moisLettre = 'Avril'; 
                break;
            case '05': 
                $moisLettre = 'Mai'; 
                break;
            case '06': 
                $moisLettre = 'Juin'; 
                break;
            case '07': 
                $moisLettre = 'Juillet'; 
                break;
            case '08': 
                $moisLettre = 'Août'; 
                break;
            case '09': 
                $moisLettre = 'Septembre'; 
                break;
            case '10': 
                $moisLettre = 'Octobre'; 
                break;
            case '11': 
                $moisLettre = 'Novembre'; 
                break;
            case '12': 
                $moisLettre = 'Decembre'; 
                break;
            default: 
                $moisLettre =''; 
                break;
        } 
        return $moisLettre ;
    }
   
    public function getFraisForfait($idFiche) {
        $repository_ligneFraisForfait = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Lignefraisforfait');
        $lesFraisForfaits = $repository_ligneFraisForfait->findBy(array('idfichefrais'=>$idFiche)) ;
        
        $repository_ficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
        $laFiche = $repository_ficheFrais->find($idFiche) ;
        
        $etatFraisForfait = $laFiche->getIdetatfraisforfait()->getLibelle() ;

        foreach ($lesFraisForfaits as $unFraisForfait) {
            $id = $unFraisForfait->getIdfrais()->getIdFrais() ;
            switch ($id) {
                case '1' : 
                    $nbEtape = $unFraisForfait->getQuantite() ;
                    break ;
                case '2' : 
                    $nbKm = $unFraisForfait->getQuantite() ;
                    break ;
                case '3' : 
                    $nbNuit = $unFraisForfait->getQuantite() ;
                    break ;
                case '4' : 
                    $nbRepas = $unFraisForfait->getQuantite() ;
                    break ;
                default :
                    break;
            }
        } 
        $lesFraisForfaitPropre = array('nbEtape'=>$nbEtape, 'nbKm'=>$nbKm, 'nbNuit'=>$nbNuit, 'nbRepas'=>$nbRepas, 'etatFraisForfait'=>$etatFraisForfait) ;
        return $lesFraisForfaitPropre ;
    }
    
    public function getIdFiche($anneeMois) {
        
        $explode = explode('-', $anneeMois) ; 
        $mois = $explode[1] ; 
        $annee = $explode[0] ;
        
        $requete =  "Select idFiche "
            .   "From FicheFrais "
            .   "where dateCreation like '____-$mois-__' and dateCreation like '$annee-__-__' "
            .   "Order by dateCreation asc" ;

        $connection = $this->get('dbFrais') ;
        $stmt = $connection->prepare($requete);
        $stmt->execute();
        $resultat= $stmt->fetch();    
        
        $idFicheCourante = $resultat['idFiche'] ;
        return $idFicheCourante ;
    }
}