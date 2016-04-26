<?php

namespace GsbBundle\Controller\ControlleurComptable;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SuivreFicheController extends Controller {
    public function indexAction($idVisiteur, $mois) {
        $lesMois = SuivreFicheController::genererListeNombre(01, 12) ;
        $lesVisiteur = SuivreFicheController::getLesVisiteurs();
        
        if ($idVisiteur==0 && $mois==0) {
            $form = $this->createFormBuilder()
                ->add('nomVisiteur', 'choice',array('choices'=>$lesVisiteur, 'empty_value'=>'Visiteur', 'attr'=> array('class'=>'form-control', 'onChange'=>'submit()')))
                ->add('mois', 'choice', array('choices'=>$lesMois, 'empty_value'=>'Mois', 'attr'=> array('class'=>'form-control', 'onChange'=>'submit()'), 'data'=>date('m')))
                ->getForm() ;
            $form->handleRequest($this->container->get('request')) ; 
        } else {
            $form = $this->createFormBuilder()
                ->add('nomVisiteur', 'choice',array('choices'=>$lesVisiteur, 'empty_value'=>'Visiteur', 'attr'=> array('class'=>'form-control', 'onChange'=>'submit()'), 'data'=>$idVisiteur))
                ->add('mois', 'choice', array('choices'=>$lesMois, 'empty_value'=>'Mois', 'attr'=> array('class'=>'form-control', 'onChange'=>'submit()'), 'data'=>$mois))
                ->getForm() ;
            $form->handleRequest($this->container->get('request')) ; 
        }
        
        if ($form->isValid()) {
            $idVisiteur = $form['nomVisiteur']->getData() ;
            $mois = $form['mois']->getData() ;
            
            if ($idVisiteur!=null && $mois!=null) {
                return $this->redirectToRoute('suivreFicheFrais', array('idVisiteur'=>$idVisiteur, 'mois'=>$mois));
            }
               
        }
        
        if ($idVisiteur!=0 && $mois!=0) {
            $idFiche = SuivreFicheController::getIdFiche($idVisiteur, $mois) ;
            if (isset($idFiche)) {
                $fraisHorsForfaits = SuivreFicheController::getFraisHorsForfait($idFiche) ;
                
                $lesFraisForfaits = SuivreFicheController::getFraisForfait($idFiche);
                $formFrais = $this->createFormBuilder() 
                    ->add('repasMidi','number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+', 'title'=>'Nombre entier positif'), 'data'=>$lesFraisForfaits['nbRepas']))
                    ->add('nuitee', 'number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+', 'title'=>'Nombre entier positif'), 'label'=>'Nuitée','data'=>$lesFraisForfaits['nbNuit']))
                    ->add('etape', 'number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+', 'title'=>'Nombre entier positif'), 'data'=>$lesFraisForfaits['nbEtape']))
                    ->add('km', 'number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+', 'title'=>'Nombre entier positif'), 'data'=>$lesFraisForfaits['nbKm']))
                    ->add('etatFrais', 'choice', array('choices'=>array('5'=>'Enregistré', '4'=>'Validé', '1'=>'Remboursé'), 'attr' => array('class'=>'form-control'), 'data'=>$lesFraisForfaits['idEtat']))
                    ->add('annuler','reset', array('attr' => array('class'=>'btn btn-danger')))
                    ->add('miseAJour','submit', array('attr' => array('class'=>'btn btn-primary'), 'label'=>'Mise à jour'))
                    ->getForm();
                $formFrais->handleRequest($this->container->get('request')) ;
                
                $repository_ficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
                $laFiche = $repository_ficheFrais->find($idFiche) ;
                
                $idEtatFiche = $laFiche->getIdetatfiche()->getIdEtat() ;
                
                $fraisHorsClassification = SuivreFicheController::getFraisHorsClassification($idFiche) ;
                $formHorsClassification = $this->createFormBuilder() 
                        ->add('nombreJustificatif', 'number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+', 'title'=>'Nombre entier positif'), 'data'=>$fraisHorsClassification['nbJustifictaif']))
                        ->add('montantTotal', 'number', array('attr' => array('class'=>'form-control', 'pattern'=>'[0-9]+(\.[0-9][0-9]?)?', 'title'=>'Nombre positif avec décimal séparé par un point'), 'data'=>$fraisHorsClassification['montantTotal']))
                        ->add('etatFraisHorsClassification', 'choice', array('choices'=>array('5'=>'Enregistré', '4'=>'Validé', '1'=>'Remboursé'), 'attr' => array('class'=>'form-control'), 'data'=>$laFiche->getIdetatfraishorsclassification()->getIdetat()))
                        ->add('annuler','reset', array('attr' => array('class'=>'btn btn-danger')))
                        ->add('miseAJour','submit', array('attr' => array('class'=>'btn btn-primary'), 'label'=>'Mise à jour'))
                        ->getForm();
                $formHorsClassification->handleRequest($this->container->get('request')) ;
                
                if($formFrais->isValid()) {
                    $qttRepas = $formFrais['repasMidi']->getData() ;
                    $qttNuit =  $formFrais['nuitee']->getData() ;
                    $qttEtape = $formFrais['etape']->getData() ;
                    $qttKm = $formFrais['km']->getData() ;
                    $etat = $formFrais['etatFrais']->getData() ;

                    $repository_ligneFraisForfait = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Lignefraisforfait');
                    $lesLignesFraisForfait = $repository_ligneFraisForfait->findBy(array('idfichefrais'=>$idFiche)) ;

                    $repository_ficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
                    $laFiche = $repository_ficheFrais->find($idFiche) ;
                    
                    $repository_etat = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Etat');
                    $etat = $repository_etat->find($etat) ;

                    $laFiche->setIdetatfraisforfait($etat) ;
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
                    return $this->redirectToRoute('suivreFicheFrais', array('idVisiteur'=>$idVisiteur, 'mois'=>$mois));
                } else if ($formHorsClassification->isValid()) {
                    $nbJustificatif = $formHorsClassification['nombreJustificatif']->getData() ;
                    $montant = $formHorsClassification['montantTotal']->getData() ;
                    $idEtat = $formHorsClassification['etatFraisHorsClassification']->getData() ;

                    $repository_ficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
                    $laFiche = $repository_ficheFrais->find($idFiche) ;
                    
                    $repository_etat = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Etat');
                    $etat = $repository_etat->find($idEtat) ;

                    $laFiche->setMontantvalide($montant) ;
                    $laFiche->setNbJustificatifs($nbJustificatif) ;
                    $laFiche->setDatemodif(date_create(date('Y-m-d'))) ;
                    $laFiche->setIdetatfraishorsclassification($etat) ;

                    $em = $this->getDoctrine()->getManager() ;
                    $em->persist($laFiche) ;
                    $em->flush() ;
                    
                    return $this->redirectToRoute('suivreFicheFrais', array('idVisiteur'=>$idVisiteur, 'mois'=>$mois));
                }
                return $this->render('GsbBundle:VuesComptable:vueSuivreFiche.html.twig', array('laFiche'=>$laFiche, 'etatFiche'=>$idEtatFiche, 'lesHorsForfait'=>$fraisHorsForfaits, 'form'=>$form->createView(), 'formFrais'=>$formFrais->createView(), 'formHorsClassification'=>$formHorsClassification->createView()));
            }         
        }
        return $this->render('GsbBundle:VuesComptable:vueSuivreFiche.html.twig', array('form'=>$form->createView()));
    }
    
    public function validerFicheAction($idFiche, $idVisiteur, $mois) {
        $repository_etat = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Etat');
        $etatValide = $repository_etat->find(4) ;
        
        $repository_ficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
        $laFiche = $repository_ficheFrais->find($idFiche) ;
        
        $laFiche->setIdetatfiche($etatValide) ;
        
        $em = $this->getDoctrine()->getManager() ;
        $em->persist($laFiche) ;
        $em->flush() ;
        
        return $this->redirectToRoute('suivreFicheFrais', array('idVisiteur'=>$idVisiteur, 'mois'=>$mois));
    }
    
    public function refuserHorsForfaitAction($idLigne, $idVisiteur, $mois, $idFiche) {
        $repository_ficheFrais= $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
        $laFiche = $repository_ficheFrais->find($idFiche) ;
        
        $laFiche->setDatemodif(date_create(date('Y-m-d'))) ;
        
        $repository_LigneFraisHorsForfait= $this->getDoctrine()->getManager()->getRepository('GsbBundle:Lignefraishorsforfait');
        $leFraisHorsForfait = $repository_LigneFraisHorsForfait->find($idLigne) ;
        
        $libelle = $leFraisHorsForfait->getLibelle() ;
        $leFraisHorsForfait->setLibelle("REFUSE : " . $libelle) ;
        
        $em = $this->getDoctrine()->getManager() ;
        $em->persist($laFiche) ;
        $em->persist($leFraisHorsForfait) ;
        $em->flush() ;
        
        return $this->redirectToRoute('suivreFicheFrais', array('idVisiteur'=>$idVisiteur, 'mois'=>$mois));
    }
    
    public function modifierHorsForfaitAction($idLigne, $libelle, $montant, $idEtat, $idVisiteur, $mois) {
        $repository_etat = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Etat');
        $etat = $repository_etat->find($idEtat) ;
        
        $repository_fraisHorsForfait = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Lignefraishorsforfait');
        $laLigne = $repository_fraisHorsForfait->find($idLigne) ;
        
        $laLigne->setLibelle($libelle);
        $laLigne->setMontant($montant);
        $laLigne->setIdetat($etat) ;
        
        $em = $this->getDoctrine()->getManager() ;
        $em->persist($laLigne) ;
        $em->flush() ;
        
        return $this->redirectToRoute('suivreFicheFrais', array('idVisiteur'=>$idVisiteur, 'mois'=>$mois));
    }
    
    public function getIdFiche($idVisiteur, $mois) {
        $annee = date('Y') ;
        
        $requete =  "Select idFiche "
                .   "From FicheFrais "
                .   "where dateCreation like '____-$mois-__' "
                .       "and dateCreation like '$annee-__-__' "
                .       "and idVisiteur = $idVisiteur "
                .   "Order by dateCreation asc" ;

        $connection = $this->get('dbFrais') ;
        $stmt = $connection->prepare($requete);
        $stmt->execute();
        $resultat= $stmt->fetch();    
        
        $idFicheCourante = $resultat['idFiche'] ;
        
        return $idFicheCourante ;
    }
    
    public function getFraisForfait($idFiche) {
        $repository_ligneFraisForfait = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Lignefraisforfait');
        $lesFraisForfaits = $repository_ligneFraisForfait->findBy(array('idfichefrais'=>$idFiche)) ;
        
        $repository_ficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
        $laFiche = $repository_ficheFrais->find($idFiche) ;
        
        $etatFraisForfait = $laFiche->getIdetatfraisforfait()->getLibelle() ;
        $idEtat = $laFiche->getIdetatfraisforfait()->getIdetat() ;

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
        $lesFraisForfaitPropre = array('nbEtape'=>$nbEtape, 'nbKm'=>$nbKm, 'nbNuit'=>$nbNuit, 'nbRepas'=>$nbRepas, 'etatFraisForfait'=>$etatFraisForfait, 'idEtat'=>$idEtat) ;
        return $lesFraisForfaitPropre ;
    }
    
    public function getFraisHorsForfait ($idFiche) {
        $repository_horsForfait = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Lignefraishorsforfait');
        $lesHorsForfaits = $repository_horsForfait->findBy(array('idfiche'=>$idFiche)) ;
        
        return $lesHorsForfaits ;
    }
    
    public function getFraisHorsClassification($idFiche) {
        $repository_lficheFrais = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Fichefrais');
        $laFiche = $repository_lficheFrais->find($idFiche) ;
        
        $nbJustif = $laFiche->getNbjustificatifs() ;
        $montantTotal = $laFiche->getMontantvalide() ;
        
        $fraisHorsClassification = array('nbJustifictaif'=>$nbJustif, 'montantTotal'=>$montantTotal) ;
        
        return $fraisHorsClassification ;
    }
    
    public function getLesVisiteurs() {
        $repository_visiteur = $this->getDoctrine()->getManager()->getRepository('GsbBundle:Visiteur');
        $lesVisiteurs = $repository_visiteur->findBy(array(), array('nom'=>'asc', 'prenom'=>'asc')) ;
        
        $lesVisiteursPropres = array() ;
        foreach ($lesVisiteurs as $unVisiteur) {
            $lesVisiteursPropres[$unVisiteur->getIdvisiteur()] = $unVisiteur->getNom() . " " . $unVisiteur->getPrenom() ;
        }
        
        return $lesVisiteursPropres ;
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
