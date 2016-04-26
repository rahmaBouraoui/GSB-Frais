<?php

namespace GsbBundle\Controller\ControlleurVisiteur;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GsbBundle\Entity\Fichefrais ;
use GsbBundle\Entity\Lignefraisforfait ;
use GsbBundle\Entity\Lignefraishorsforfait ;

class SaisieFicheController extends Controller {
    public function indexAction() {
        $session = $this->getRequest()->getSession();
        $idVisiteur = $session->get('idVisiteur'); 
        
        $jourCourant = date('d') ; 
        $moisCourant = date('m');
        $anneeCourant = date('Y');
        
        $moisLettre = SaisieFicheController::getMoisLettre($moisCourant) ;
        
        $titre = "$moisLettre $anneeCourant" ;
        
        $requete =  "Select idFiche "
                .   "From FicheFrais "
                .   "where dateCreation like '____-$moisCourant-__' "
                .       "and dateCreation like '$anneeCourant-__-__' "
                .       "and idVisiteur = $idVisiteur "
                .   "Order by dateCreation asc" ;
        
        
        $connection = $this->get('dbFrais') ;
        $stmt = $connection->prepare($requete);
        $stmt->execute();
        $laFicheDuMois= $stmt->fetch(); 
        
        
        //Si la fiche du mois courante existe
        if (isset($laFicheDuMois['idFiche'])) {
            
            $idFiche = $laFicheDuMois['idFiche'] ;
            $repository_lficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
            $laFiche = $repository_lficheFrais->find($idFiche) ;
            
            $derniereModif = $laFiche->getDatemodif() ;
            
            //Fonction pour initialiser le tableau avec les valeurs de la BDD
            $lesFraisForfaits = SaisieFicheController::getFraisForfait($idFiche);
            
            $formFrais = $this->createFormBuilder() 
                    ->add('repasMidi','number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+', 'title'=>'Nombre entier positif'), 'data'=>$lesFraisForfaits['nbRepas']))
                    ->add('nuitee', 'number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+', 'title'=>'Nombre entier positif'), 'label'=>'Nuitée','data'=>$lesFraisForfaits['nbNuit']))
                    ->add('etape', 'number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+', 'title'=>'Nombre entier positif'), 'data'=>$lesFraisForfaits['nbEtape']))
                    ->add('km', 'number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+', 'title'=>'Nombre entier positif'), 'data'=>$lesFraisForfaits['nbKm']))
                    ->add('annuler','reset', array('attr' => array('class'=>'btn btn-danger')))
                    ->add('miseAJour','submit', array('attr' => array('class'=>'btn btn-primary'), 'label'=>'Mise à jour'))
                    ->getForm();
            $formFrais->handleRequest($this->container->get('request')) ;
            
            $lesJours = SaisieFicheController::genererListeNombre(01, 31) ;
            $lesMois = SaisieFicheController::genererListeNombre(01, $moisCourant) ;
            
            $formHorsForfait = $this->createFormBuilder() 
                    ->add('jour', 'choice', array('choices'=>$lesJours, 'attr'=>array('class'=>'form-control'), 'data'=>$jourCourant))
                    ->add('mois', 'choice', array('choices'=>$lesMois, 'attr'=>array('class'=>'form-control'), 'data'=>$moisCourant))
                    ->add('libelle','text', array('attr' => array('class'=>'form-control')))
                    ->add('montant', 'number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+(\.[0-9][0-9]?)?', 'title'=>'Nombre positif avec décimal séparé par un point')))
                    ->add('ajouter','submit', array('attr' => array('class'=>'btn btn-primary')))
                    ->getForm();
            $formHorsForfait->handleRequest($this->container->get('request')) ;
            
            
            $fraisHorsClassification = SaisieFicheController::getFraisHorsClassification($idFiche) ;
            $formHorsClassification = $this->createFormBuilder() 
                    ->add('nombreJustificatif', 'number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+', 'title'=>'Nombre entier positif'), 'data'=>$fraisHorsClassification['nbJustifictaif']))
                    ->add('montantTotal', 'number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+(\.[0-9][0-9]?)?', 'title'=>'Nombre positif avec décimal séparé par un point'), 'data'=>$fraisHorsClassification['montantTotal']))
                    ->add('modifier','submit', array('attr' => array('class'=>'btn btn-primary')))
                    ->getForm();
            $formHorsClassification->handleRequest($this->container->get('request')) ;
            
            if ($formFrais->isValid()) {
                $qttRepas = $formFrais['repasMidi']->getData() ;
                $qttNuit =  $formFrais['nuitee']->getData() ;
                $qttEtape = $formFrais['etape']->getData() ;
                $qttKm = $formFrais['km']->getData() ;
                
                $repository_ligneFraisForfait = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Lignefraisforfait');
                $lesLignesFraisForfait = $repository_ligneFraisForfait->findBy(array('idfichefrais'=>$idFiche)) ;
                
                $repository_ficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
                $laFiche = $repository_ficheFrais->find($idFiche) ;
                
                $laFiche->setDatemodif(date_create(date('Y-m-d'))) ;
                
                $em = $this->getDoctrine()->getManager(); 
                foreach ($lesLignesFraisForfait as $uneLigne) {
                    $idFrais = $uneLigne->getIdfrais()->getIdfrais() ;
                    switch ($idFrais) {
                        case '1' : 
                            $uneLigne->setQuantite($qttEtape) ;
                            break ;
                        case '2' : 
                            $uneLigne->setQuantite($qttKm) ;
                            break ;
                        case '3' : 
                            $uneLigne->setQuantite($qttNuit) ;
                            break ;
                        case '4' : 
                            $uneLigne->setQuantite($qttRepas) ;
                            break ;
                        default :
                            break;
                    }
                    $em->persist($uneLigne) ;
                }
                $em->persist($laFiche) ;
                $em->flush() ;
            } else if ($formHorsForfait->isValid()) {
                $jourSaisie = $formHorsForfait['jour']->getData() ;
                $moisSaisie = $formHorsForfait['mois']->getData() ;
                $libelle = $formHorsForfait['libelle']->getData();
                $montant = $formHorsForfait['montant']->getData();
               
                $repository_lficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
                $laFiche = $repository_lficheFrais->find($idFiche) ;
                
                $repository_etat = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Etat');
                $etatEnregistre = $repository_etat->find(5) ;
        
                $date = date_create("$anneeCourant-$moisSaisie-$jourSaisie") ;

                $nouveauHorsForfait = new Lignefraishorsforfait() ;
                $nouveauHorsForfait->setDatefrais($date) ;
                $nouveauHorsForfait->setIdfiche($laFiche) ;
                $nouveauHorsForfait->setLibelle($libelle) ;
                $nouveauHorsForfait->setIdetat($etatEnregistre) ;
                $nouveauHorsForfait->setMontant($montant);
               
                $em = $this->getDoctrine()->getManager() ;
                $em->persist($nouveauHorsForfait) ;
                $em->flush() ;
                
                SaisieFicheController::majDateModif($idFiche) ;
                return $this->redirectToRoute('ficheFrais') ;
            } else if ($formHorsClassification->isValid()) {
                $nbJustificatif = $formHorsClassification['nombreJustificatif']->getData() ;
                $montant = $formHorsClassification['montantTotal']->getData() ;
                
                $repository_lficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
                $laFiche = $repository_lficheFrais->find($idFiche) ;
                
                $laFiche->setMontantvalide($montant) ;
                $laFiche->setNbJustificatifs($nbJustificatif) ;
                
                $em = $this->getDoctrine()->getManager() ;
                $em->persist($laFiche) ;
                $em->flush() ;
                
                SaisieFicheController::majDateModif($idFiche) ;
                return $this->redirectToRoute('ficheFrais') ;
            }
            $fraisHorsForfaits = SaisieFicheController::getFraisHorsForfait($idFiche) ;
            
        // Si la fiche du mois courant n'existe pas : Clos la fiche précédente et creer la fiche du mois courant tout initialisé à 0 et retourne sur la page.
        } else {
            SaisieFicheController::closeFicheAvant() ;
            SaisieFicheController::creerFiche() ;
            return $this->redirectToRoute('ficheFrais') ;
        }
        return $this->render('GsbBundle:VuesVisiteur:vueSaisieFiche.html.twig', array('formHosrClassification'=>$formHorsClassification->createView(), 'derniereModif'=>$derniereModif, 'formFrais'=>$formFrais->createView(), 'formHorsForfait'=>$formHorsForfait->createView(), 'anneeCourant'=>$anneeCourant, 'titre'=>$titre, 'fraisHorsForfaits'=>$fraisHorsForfaits, 'idFiche'=>$idFiche));
    }
    
    public function getFraisForfait($idFiche) {
        $repository_ligneFraisForfait = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Lignefraisforfait');
        $lesFraisForfaits = $repository_ligneFraisForfait->findBy(array('idfichefrais'=>$idFiche)) ;
        
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
        $lesFraisForfaitPropre = array('nbEtape'=>$nbEtape, 'nbKm'=>$nbKm, 'nbNuit'=>$nbNuit, 'nbRepas'=>$nbRepas) ;
        return $lesFraisForfaitPropre ;
    }
    
    public function getFraisHorsClassification($idFiche) {
        $repository_lficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
        $laFiche = $repository_lficheFrais->find($idFiche) ;
        
        $nbJustif = $laFiche->getNbjustificatifs() ;
        $montantTotal = $laFiche->getMontantvalide() ;
        
        $fraisHorsClassification = array('nbJustifictaif'=>$nbJustif, 'montantTotal'=>$montantTotal) ;
        
        return $fraisHorsClassification ;
    }
    
    public function supprimerHorsFofraitAction($idHorsForfait, $idFiche) {
        $repository_LigneFraisHorsForfait= $this->getDoctrine()->getManager()->getRepository('GsbBundle:Lignefraishorsforfait');
        $leFraisHorsForfait = $repository_LigneFraisHorsForfait->find($idHorsForfait) ;
        
        $em = $this->getDoctrine()->getManager() ;
        $em->remove($leFraisHorsForfait) ;
        $em->flush() ;
        
        SaisieFicheController::majDateModif($idFiche) ;
        
        return $this->redirectToRoute('ficheFrais') ;
    }
    
    public function majDateModif($idFiche) {
        $repository_lficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
        $laFiche = $repository_lficheFrais->find($idFiche) ;
        
        $dateCourante = date_create(date('Y-m-d')) ; 
        
        $laFiche->setDatemodif($dateCourante) ;
        
        $em = $this->getDoctrine()->getManager() ;
        $em->persist($laFiche) ;
        $em->flush() ;
    }
    
    public function getFraisHorsForfait($idFiche) {
        $repository_LigneFraisHorsForfait= $this->getDoctrine()->getManager()->getRepository('GsbBundle:Lignefraishorsforfait');
        $lesFraisHorsForfaits = $repository_LigneFraisHorsForfait->findBy(array('idfiche'=>$idFiche), array('datefrais'=>'asc')) ;
        
        return $lesFraisHorsForfaits ;
    }
    
    public function creerFiche() {
        $session = $this->getRequest()->getSession();
        $idVisiteur = $session->get('idVisiteur'); 
        $moisCourant = date('m');
        $anneeCourant = date('Y');
        
        
        //L'etat
        $repository_etat = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Etat');
        $etatEnCours = $repository_etat->find(3) ;
        
        $repository_etat = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Etat');
        $etatEnregistré = $repository_etat->find(5) ;
        //le Visiteur
        $repository_visiteur = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Visiteur');
        $visiteur= $repository_visiteur->find($idVisiteur) ;
        
        
        $dateCourante = date_create(date('Y-m-d'));
        //la Nouvelle fiche
        $nouvelleFiche = new Fichefrais() ;
        $nouvelleFiche->setDatecreation($dateCourante) ;
        $nouvelleFiche->setDatemodif($dateCourante) ;
        $nouvelleFiche->setIdetatfiche($etatEnCours) ;
        $nouvelleFiche->setIdetatfraisforfait($etatEnregistré) ;
        $nouvelleFiche->setIdetatfraishorsclassification($etatEnregistré);
        $nouvelleFiche->setNbjustificatifs(0);
        $nouvelleFiche->setMontantvalide(0);
        $nouvelleFiche->setIdvisiteur($visiteur) ;

        $em = $this->getDoctrine()->getManager() ;
        $em->persist($nouvelleFiche) ;
        $em->flush() ;
        
        //idFicheCourante
        $requete =  "Select idFiche "
                .   "From FicheFrais "
                .   "where dateCreation like '____-$moisCourant-__' "
                .       "and dateCreation like '$anneeCourant-__-__' "
                .       "and idVisiteur = $idVisiteur "
                .   "Order by dateCreation asc" ;
        
        $connection = $this->get('dbFrais') ;
        $stmt = $connection->prepare($requete);
        $stmt->execute();
        $laFicheCourante= $stmt->fetch();    
        
        $idFicheCourante = $laFicheCourante['idFiche'] ;
        //la fiche courante
        $repository_ficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
        $laFicheCourante = $repository_ficheFrais->find($idFicheCourante) ;
        
        //Ses frais Forfait initialisé à 0
        for ($i=1; $i<5; $i++) {
            $repository_fraisForfait = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fraisforfait');
            $fraisForfait = $repository_fraisForfait->find($i) ;
            
            $nouveauFraisForfait = new Lignefraisforfait() ;
            $nouveauFraisForfait->setIdfichefrais($laFicheCourante) ;
            $nouveauFraisForfait->setIdfrais($fraisForfait) ;
            $nouveauFraisForfait->setDatefrais(date_create(date('Y-m-d'))) ;
            $nouveauFraisForfait->setQuantite(0) ;
            
            $em = $this->getDoctrine()->getManager() ;
            $em->persist($nouveauFraisForfait) ;
            $em->flush() ;
        }
    }
    
    public function closeFicheAvant() {
        $session = $this->getRequest()->getSession();
        $idVisiteur = $session->get('idVisiteur') ;
        
        $requete =  "Select idFiche, max(dateCreation) from FicheFrais where idVisiteur = $idVisiteur" ;
        $connection = $this->get('dbFrais') ;
        $stmt = $connection->prepare($requete);
        $stmt->execute();
        $laFicheAvant= $stmt->fetch();
        
        if (isset($laFicheAvant['idFiche'])) {
            $idFicheAvant = $laFicheAvant['idFiche'] ;

            //La fiche
            $repository_ficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
            $laFicheAvant = $repository_ficheFrais->find($idFicheAvant) ;

            //Sa nouvelle etat
            $repository_etat = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Etat');
            $etat = $repository_etat->find(2) ;

            $laFicheAvant->setIdetatfiche($etat) ;

            $em = $this->getDoctrine()->getManager() ;
            $em->persist($laFicheAvant) ;
            $em->flush() ;
        }
    }
    
    public function getMoisLettre($moisCourant) {
        switch($moisCourant) {
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
    
    public function genererListeNombre($debut, $fin) {
        $laListe = array() ;
        
        if ($debut == 01 && $fin == 12) {
            $laListe = array('01'=>'Janvier', '02'=>'Février', '03'=>'Mars', '04'=>'Avril', '05'=>'Mai', '06'=>'Juin', '07'=>'Juillet', '08'=>'Août', '09'=>'Septembre', '10'=>'Octobre', '11'=>'Novembre', '12'=>'Décembre') ;
        } else {
            for ($debut; $debut<=$fin; $debut++) {
                if (strlen($debut) == 1 ) {
                    $laListe['0'.$debut] = '0'.$debut ;
                } else {
                    $laListe[$debut] = $debut ;
                }
            }
        }
        return $laListe ;
    }
}

