<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'gsb_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'GsbBundle:Default:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_connexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbBundle\\Controller\\ConnexionController::vueConnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Connexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gsb_deconnexion' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbBundle\\Controller\\ConnexionController::deconnexionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'supprimerHorsForfait' => array (  0 =>   array (    0 => 'idHorsForfait',    1 => 'idFiche',  ),  1 =>   array (    '_controller' => 'GsbBundle\\Controller\\ControlleurVisiteur\\SaisieFicheController::supprimerHorsFofraitAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '-',      2 => '[^/]++',      3 => 'idFiche',    ),    1 =>     array (      0 => 'variable',      1 => '',      2 => '[^/\\-]++',      3 => 'idHorsForfait',    ),    2 =>     array (      0 => 'text',      1 => '/supprimerHorsForfait',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ficheFrais' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbBundle\\Controller\\ControlleurVisiteur\\SaisieFicheController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/saisieFiche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mesFiches' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbBundle\\Controller\\ControlleurVisiteur\\ConsulterController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mesFiches',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'validerFicheFrais' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'GsbBundle\\Controller\\ControlleurComptable\\validerFicheController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/validerFicheFrais',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
