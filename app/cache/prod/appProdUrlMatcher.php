<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // gsb_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'gsb_homepage')), array (  '_controller' => 'GsbBundle:Default:index',));
        }

        // gsb_connexion
        if ($pathinfo === '/Connexion') {
            return array (  '_controller' => 'GsbBundle\\Controller\\ConnexionController::vueConnexionAction',  '_route' => 'gsb_connexion',);
        }

        // gsb_deconnexion
        if ($pathinfo === '/deconnexion') {
            return array (  '_controller' => 'GsbBundle\\Controller\\ConnexionController::deconnexionAction',  '_route' => 'gsb_deconnexion',);
        }

        if (0 === strpos($pathinfo, '/s')) {
            // supprimerHorsForfait
            if (0 === strpos($pathinfo, '/supprimerHorsForfait') && preg_match('#^/supprimerHorsForfait(?P<idHorsForfait>[^/\\-]++)\\-(?P<idFiche>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimerHorsForfait')), array (  '_controller' => 'GsbBundle\\Controller\\ControlleurVisiteur\\SaisieFicheController::supprimerHorsFofraitAction',));
            }

            // ficheFrais
            if ($pathinfo === '/saisieFiche') {
                return array (  '_controller' => 'GsbBundle\\Controller\\ControlleurVisiteur\\SaisieFicheController::indexAction',  '_route' => 'ficheFrais',);
            }

        }

        // mesFiches
        if ($pathinfo === '/mesFiches') {
            return array (  '_controller' => 'GsbBundle\\Controller\\ControlleurVisiteur\\ConsulterController::indexAction',  '_route' => 'mesFiches',);
        }

        // validerFicheFrais
        if ($pathinfo === '/validerFicheFrais') {
            return array (  '_controller' => 'GsbBundle\\Controller\\ControlleurComptable\\validerFicheController::indexAction',  '_route' => 'validerFicheFrais',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
