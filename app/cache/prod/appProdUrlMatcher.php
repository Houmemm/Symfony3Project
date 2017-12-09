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

        // frontofficefront_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'frontofficefront_homepage');
            }

            return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\DefaultController::indexAction',  '_route' => 'frontofficefront_homepage',);
        }

        // frontofficefront_evenement
        if ($pathinfo === '/evenement') {
            return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\EvenementController::indexAction',  '_route' => 'frontofficefront_evenement',);
        }

        // frontofficefront_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\EvenementController::loginAction',  '_route' => 'frontofficefront_login',);
        }

        // frontofficefront_inscription
        if ($pathinfo === '/inscription') {
            return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\InscriptionController::inscriptionAction',  '_route' => 'frontofficefront_inscription',);
        }

        // ajouter_fan
        if ($pathinfo === '/ajouter') {
            return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\InscriptionController::ajouterAction',  '_route' => 'ajouter_fan',);
        }

        if (0 === strpos($pathinfo, '/joueur')) {
            // frontofficefront_joueur_show
            if (preg_match('#^/joueur/(?P<cin>[^/]++)/joueur_show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontofficefront_joueur_show')), array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\JoueurController::showAction',));
            }

            // frontofficefront_joueur
            if ($pathinfo === '/joueur') {
                return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\JoueurController::indexAction',  '_route' => 'frontofficefront_joueur',);
            }

        }

        if (0 === strpos($pathinfo, '/article')) {
            // frontofficefront_articles_show
            if (preg_match('#^/article/(?P<id>[^/]++)/article_show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontofficefront_articles_show')), array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\ArticlesController::showAction',));
            }

            // frontofficefront_articles
            if ($pathinfo === '/article') {
                return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\ArticlesController::indexAction',  '_route' => 'frontofficefront_articles',);
            }

        }

        // frontofficefront_panier
        if ($pathinfo === '/panier') {
            return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\PanierController::indexAction',  '_route' => 'frontofficefront_panier',);
        }

        // frontofficefront_panier_ajouter
        if (0 === strpos($pathinfo, '/ajouter') && preg_match('#^/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontofficefront_panier_ajouter')), array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\PanierController::ajouterAction',));
        }

        // frontofficefront_panier_supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontofficefront_panier_supprimer')), array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\PanierController::supprimerAction',));
        }

        if (0 === strpos($pathinfo, '/paniers')) {
            // frontofficefront_paniers
            if ($pathinfo === '/paniers') {
                return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\PanierController::acheterAction',  '_route' => 'frontofficefront_paniers',);
            }

            // frontofficefront_paniersFail
            if ($pathinfo === '/paniers/warning') {
                return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\PanierController::achatFailAction',  '_route' => 'frontofficefront_paniersFail',);
            }

        }

        // frontofficefront_stade
        if ($pathinfo === '/stadeGallery') {
            return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\StadeController::indexAction',  '_route' => 'frontofficefront_stade',);
        }

        // frontofficefront_stadeMap
        if (preg_match('#^/(?P<id>[^/]++)/stadeMaps$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontofficefront_stadeMap')), array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\StadeController::stadeMapAction',));
        }

        if (0 === strpos($pathinfo, '/news')) {
            // frontofficefront_news
            if ($pathinfo === '/news') {
                return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\DefaultController::actualitesAction',  '_route' => 'frontofficefront_news',);
            }

            // frontofficefront_news_show
            if (preg_match('#^/news/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontofficefront_news_show')), array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\DefaultController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/clubs')) {
            // frontofficefront_clubs
            if ($pathinfo === '/clubs') {
                return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\ClubController::listeclubsAction',  '_route' => 'frontofficefront_clubs',);
            }

            // frontofficefront_details_clubs
            if (preg_match('#^/clubs/(?P<id>[^/]++)/afficherClubs$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontofficefront_details_clubs')), array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\ClubController::afficherClubsAction',));
            }

        }

        if (0 === strpos($pathinfo, '/matchtennis')) {
            // front_matchtennis
            if (rtrim($pathinfo, '/') === '/matchtennis') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'front_matchtennis');
                }

                return array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\MatchTennisController::matchtennisAction',  '_route' => 'front_matchtennis',);
            }

            // front_matchtennis_show
            if (preg_match('#^/matchtennis/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_matchtennis_show')), array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\MatchTennisController::matchtennisShowAction',));
            }

            // front_matchtennis_parier
            if (preg_match('#^/matchtennis/(?P<id>[^/]++)/(?P<joueur>[^/]++)/parier/?$#s', $pathinfo, $matches)) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'front_matchtennis_parier');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_matchtennis_parier')), array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\MatchTennisController::ParierAction',));
            }

            // front_matchtennis_montant
            if (preg_match('#^/matchtennis/(?P<id>[^/]++)/(?P<joueur>[^/]++)/montant$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_matchtennis_montant')), array (  '_controller' => 'frontoffice\\frontBundle\\Controller\\MatchTennisController::MontantAction',));
            }

        }

        if (0 === strpos($pathinfo, '/arbitre')) {
            // arbitre
            if (rtrim($pathinfo, '/') === '/arbitre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'arbitre');
                }

                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\arbitreController::indexAction',  '_route' => 'arbitre',);
            }

            // disponibilite
            if (preg_match('#^/arbitre/(?P<date>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'disponibilite')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\arbitreController::dispoAction',));
            }

            // affichageFormation_show
            if (0 === strpos($pathinfo, '/arbitre/afficherFormation') && preg_match('#^/arbitre/afficherFormation/(?P<idFormation>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affichageFormation_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\affichageController::showAction',));
            }

            if (0 === strpos($pathinfo, '/arbitre/postulation')) {
                // postulation_create
                if (0 === strpos($pathinfo, '/arbitre/postulation/create') && preg_match('#^/arbitre/postulation/create/(?P<idFormation>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'postulation_create')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\PostulationController::createAction',));
                }

                // postulation_new
                if (0 === strpos($pathinfo, '/arbitre/postulation/new') && preg_match('#^/arbitre/postulation/new/(?P<idFormation>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'postulation_new')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\PostulationController::newAction',));
                }

            }

            // affichageConcours
            if (0 === strpos($pathinfo, '/arbitre/afficherConcours') && preg_match('#^/arbitre/afficherConcours/(?P<idConcour>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'affichageConcours')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\affichageController::showConcoursAction',));
            }

            if (0 === strpos($pathinfo, '/arbitre/postulationC')) {
                // postulation_createConcours
                if (0 === strpos($pathinfo, '/arbitre/postulationC/create') && preg_match('#^/arbitre/postulationC/create/(?P<idConcour>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'postulation_createConcours')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\PostulationController::createConcoursAction',));
                }

                // postulation_newConcours
                if (0 === strpos($pathinfo, '/arbitre/postulationC/new') && preg_match('#^/arbitre/postulationC/new/(?P<idConcour>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'postulation_newConcours')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\PostulationController::newConcoursAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/medecin')) {
            // rapport
            if (rtrim($pathinfo, '/') === '/medecin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rapport');
                }

                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\RapportController::indexAction',  '_route' => 'rapport',);
            }

            // rapport_show
            if (preg_match('#^/medecin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\RapportController::showAction',));
            }

            // rapport_new
            if ($pathinfo === '/medecin/new') {
                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\RapportController::newAction',  '_route' => 'rapport_new',);
            }

            // rapport_create
            if ($pathinfo === '/medecin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_rapport_create;
                }

                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\RapportController::createAction',  '_route' => 'rapport_create',);
            }
            not_rapport_create:

            // rapport_edit
            if (preg_match('#^/medecin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\RapportController::editAction',));
            }

            // rapport_update
            if (preg_match('#^/medecin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_rapport_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\RapportController::updateAction',));
            }
            not_rapport_update:

            // rapport_delete
            if (preg_match('#^/medecin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_rapport_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\RapportController::deleteAction',));
            }
            not_rapport_delete:

            // rapport_joueur
            if ($pathinfo === '/medecin/joueur') {
                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\RapportController::listJoueurAction',  '_route' => 'rapport_joueur',);
            }

            // rapport_pdf
            if (0 === strpos($pathinfo, '/medecin/rapport/pdf') && preg_match('#^/medecin/rapport/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'rapport_pdf')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\RapportController::rapportPdfAction',));
            }

            if (0 === strpos($pathinfo, '/medecin/mail')) {
                // squad_mail_mail_homepage
                if (0 === strpos($pathinfo, '/medecin/mail/hello') && preg_match('#^/medecin/mail/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'squad_mail_mail_homepage')), array (  '_controller' => 'SquadMail\\MailBundle\\Controller\\DefaultController::indexAction',));
                }

                // squad_mail_mail_succ
                if ($pathinfo === '/medecin/mail/succ') {
                    return array (  '_controller' => 'SquadMail\\MailBundle\\Controller\\MailController::indexAction',  '_route' => 'squad_mail_mail_succ',);
                }

                // squad_mail_form
                if (rtrim($pathinfo, '/') === '/medecin/mail') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'squad_mail_form');
                    }

                    return array (  '_controller' => 'SquadMail\\MailBundle\\Controller\\MailController::newAction',  '_route' => 'squad_mail_form',);
                }

                // squad_mail_sendpage
                if ($pathinfo === '/medecin/mail/sendmail') {
                    return array (  '_controller' => 'SquadMail\\MailBundle\\Controller\\MailController::sendMailAction',  '_route' => 'squad_mail_sendpage',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // accueil
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'accueil');
                }

                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\DefaultController::indexAction',  '_route' => 'accueil',);
            }

            // platform
            if ($pathinfo === '/admin/platform') {
                return array (  '_controller' => 'FTT\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'platform',);
            }

            // evenement
            if ($pathinfo === '/admin/evenement') {
                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\EvenementController::indexAction',  '_route' => 'evenement',);
            }

            if (0 === strpos($pathinfo, '/admin/joueur')) {
                // joueur
                if ($pathinfo === '/admin/joueur') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\JoueurController::indexAction',  '_route' => 'joueur',);
                }

                // joueur_show
                if (preg_match('#^/admin/joueur/(?P<cin>[^/]++)/joueur_show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\JoueurController::showAction',));
                }

                // joueur_new
                if ($pathinfo === '/admin/joueur/new') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\JoueurController::newAction',  '_route' => 'joueur_new',);
                }

                // joueur_create
                if ($pathinfo === '/admin/joueur/create') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\JoueurController::createAction',  '_route' => 'joueur_create',);
                }

                // joueur_edit
                if (preg_match('#^/admin/joueur/(?P<cin>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\JoueurController::editAction',));
                }

                // joueur_update
                if (preg_match('#^/admin/joueur/(?P<cin>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_joueur_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\JoueurController::updateAction',));
                }
                not_joueur_update:

                // joueur_delete
                if (preg_match('#^/admin/joueur/(?P<cin>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET', 'HEAD'));
                        goto not_joueur_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'joueur_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\JoueurController::deleteAction',));
                }
                not_joueur_delete:

            }

            // match
            if ($pathinfo === '/admin/match') {
                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\DefaultController::matchAction',  '_route' => 'match',);
            }

            // club
            if ($pathinfo === '/admin/club') {
                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ClubController::indexAction',  '_route' => 'club',);
            }

            // actualite
            if ($pathinfo === '/admin/actualite') {
                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ActualitesController::indexAction',  '_route' => 'actualite',);
            }

            // gestionDopage
            if ($pathinfo === '/admin/gestionDopage') {
                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\DefaultController::dopageAction',  '_route' => 'gestionDopage',);
            }

            // authentification
            if ($pathinfo === '/admin/authentification') {
                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\DefaultController::authentificationAction',  '_route' => 'authentification',);
            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // user
                if ($pathinfo === '/admin/user') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
                }

                // user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/user_show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\UserController::showAction',));
                }

                // user_new
                if ($pathinfo === '/admin/user/new') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }

                // user_create
                if ($pathinfo === '/admin/user/create') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }

                // user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\UserController::editAction',));
                }

                // user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\UserController::updateAction',));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

            }

            if (0 === strpos($pathinfo, '/admin/evenement')) {
                // evenement_show
                if (preg_match('#^/admin/evenement/(?P<id>[^/]++)/evenement_show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\EvenementController::showAction',));
                }

                // evenement_new
                if ($pathinfo === '/admin/evenement/new') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\EvenementController::newAction',  '_route' => 'evenement_new',);
                }

                // evenement_create
                if ($pathinfo === '/admin/evenement/create') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\EvenementController::createAction',  '_route' => 'evenement_create',);
                }

                // evenement_edit
                if (preg_match('#^/admin/evenement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\EvenementController::editAction',));
                }

                // evenement_update
                if (preg_match('#^/admin/evenement/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_evenement_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\EvenementController::updateAction',));
                }
                not_evenement_update:

                // evenement_delete
                if (preg_match('#^/admin/evenement/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_evenement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'evenement_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\EvenementController::deleteAction',));
                }
                not_evenement_delete:

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // afficherSolde
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/soldes$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'afficherSolde')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\UserController::afficherSoldeAction',));
                }

                // ajouterSolde
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/soldes/ajouter$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouterSolde')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\UserController::ajouterSoldeAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/articles')) {
                // articles
                if ($pathinfo === '/admin/articles') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ArticlesController::indexAction',  '_route' => 'articles',);
                }

                // articles_show
                if (preg_match('#^/admin/articles/(?P<id>[^/]++)/articles_show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ArticlesController::showAction',));
                }

                // articles_new
                if ($pathinfo === '/admin/articles/new') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ArticlesController::newAction',  '_route' => 'articles_new',);
                }

                // articles_create
                if ($pathinfo === '/admin/articles/create') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ArticlesController::createAction',  '_route' => 'articles_create',);
                }

                // articles_edit
                if (preg_match('#^/admin/articles/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ArticlesController::editAction',));
                }

                // articles_update
                if (preg_match('#^/admin/articles/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_articles_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ArticlesController::updateAction',));
                }
                not_articles_update:

                // articles_delete
                if (preg_match('#^/admin/articles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET', 'HEAD'));
                        goto not_articles_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ArticlesController::deleteAction',));
                }
                not_articles_delete:

            }

            // concour
            if ($pathinfo === '/admin/concour') {
                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ConcoursController::indexAction',  '_route' => 'concour',);
            }

            // disponibiliter
            if ($pathinfo === '/admin/disponibiliter') {
                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\DisponibiliterController::indexAction',  '_route' => 'disponibiliter',);
            }

            // formation
            if ($pathinfo === '/admin/formation') {
                return array (  '_controller' => 'Squad\\FttBundle\\Controller\\FormationController::indexAction',  '_route' => 'formation',);
            }

            if (0 === strpos($pathinfo, '/admin/concour')) {
                // concour_show
                if (preg_match('#^/admin/concour/(?P<idConcour>[^/]++)/concour_show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'concour_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ConcoursController::showAction',));
                }

                // concour_new
                if ($pathinfo === '/admin/concour/new') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ConcoursController::newAction',  '_route' => 'concour_new',);
                }

                // concour_create
                if ($pathinfo === '/admin/concour/create') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ConcoursController::createAction',  '_route' => 'concour_create',);
                }

                // concour_edit
                if (preg_match('#^/admin/concour/(?P<idConcour>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'concour_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ConcoursController::editAction',));
                }

                // concour_update
                if (preg_match('#^/admin/concour/(?P<idConcour>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_concour_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'concour_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ConcoursController::updateAction',));
                }
                not_concour_update:

                // concour_delete
                if (preg_match('#^/admin/concour/(?P<idConcour>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET', 'HEAD'));
                        goto not_concour_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'concour_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ConcoursController::deleteAction',));
                }
                not_concour_delete:

            }

            if (0 === strpos($pathinfo, '/admin/formation')) {
                // formation_show
                if (preg_match('#^/admin/formation/(?P<idFormation>[^/]++)/formation_show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\FormationController::showAction',));
                }

                // formation_new
                if ($pathinfo === '/admin/formation/new') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\FormationController::newAction',  '_route' => 'formation_new',);
                }

                // formation_create
                if ($pathinfo === '/admin/formation/create') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\FormationController::createAction',  '_route' => 'formation_create',);
                }

                // formation_edit
                if (preg_match('#^/admin/formation/(?P<idFormation>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\FormationController::editAction',));
                }

                // formation_update
                if (preg_match('#^/admin/formation/(?P<idFormation>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_formation_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\FormationController::updateAction',));
                }
                not_formation_update:

                // formation_delete
                if (preg_match('#^/admin/formation/(?P<idFormation>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE', 'GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE', 'GET', 'HEAD'));
                        goto not_formation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'formation_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\FormationController::deleteAction',));
                }
                not_formation_delete:

            }

            if (0 === strpos($pathinfo, '/admin/s')) {
                if (0 === strpos($pathinfo, '/admin/stade')) {
                    // stade
                    if (rtrim($pathinfo, '/') === '/admin/stade') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'stade');
                        }

                        return array (  '_controller' => 'Squad\\FttBundle\\Controller\\StadeController::indexAction',  '_route' => 'stade',);
                    }

                    // stade_show
                    if (preg_match('#^/admin/stade/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'stade_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\StadeController::showAction',));
                    }

                    // stade_new
                    if ($pathinfo === '/admin/stade/new') {
                        return array (  '_controller' => 'Squad\\FttBundle\\Controller\\StadeController::newAction',  '_route' => 'stade_new',);
                    }

                    // stade_create
                    if ($pathinfo === '/admin/stade/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_stade_create;
                        }

                        return array (  '_controller' => 'Squad\\FttBundle\\Controller\\StadeController::createAction',  '_route' => 'stade_create',);
                    }
                    not_stade_create:

                    // stade_edit
                    if (preg_match('#^/admin/stade/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'stade_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\StadeController::editAction',));
                    }

                    // stade_update
                    if (preg_match('#^/admin/stade/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_stade_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'stade_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\StadeController::updateAction',));
                    }
                    not_stade_update:

                    // stade_delete
                    if (preg_match('#^/admin/stade/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_stade_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'stade_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\StadeController::deleteAction',));
                    }
                    not_stade_delete:

                }

                if (0 === strpos($pathinfo, '/admin/sanction')) {
                    // sanction
                    if (rtrim($pathinfo, '/') === '/admin/sanction') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'sanction');
                        }

                        return array (  '_controller' => 'Squad\\FttBundle\\Controller\\SanctionController::indexAction',  '_route' => 'sanction',);
                    }

                    // sanction_show
                    if (preg_match('#^/admin/sanction/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sanction_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\SanctionController::showAction',));
                    }

                    // sanction_new
                    if ($pathinfo === '/admin/sanction/new') {
                        return array (  '_controller' => 'Squad\\FttBundle\\Controller\\SanctionController::newAction',  '_route' => 'sanction_new',);
                    }

                    // sanction_create
                    if ($pathinfo === '/admin/sanction/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sanction_create;
                        }

                        return array (  '_controller' => 'Squad\\FttBundle\\Controller\\SanctionController::createAction',  '_route' => 'sanction_create',);
                    }
                    not_sanction_create:

                    // sanction_edit
                    if (preg_match('#^/admin/sanction/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sanction_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\SanctionController::editAction',));
                    }

                    // sanction_update
                    if (preg_match('#^/admin/sanction/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_sanction_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sanction_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\SanctionController::updateAction',));
                    }
                    not_sanction_update:

                    // sanction_delete
                    if (preg_match('#^/admin/sanction/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_sanction_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sanction_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\SanctionController::deleteAction',));
                    }
                    not_sanction_delete:

                    // sanction_joueur
                    if ($pathinfo === '/admin/sanction/joueur') {
                        return array (  '_controller' => 'Squad\\FttBundle\\Controller\\SanctionController::listJoueurAction',  '_route' => 'sanction_joueur',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/match')) {
                if (0 === strpos($pathinfo, '/admin/matchhasjoueur')) {
                    // back_matchhasjoueur
                    if (preg_match('#^/admin/matchhasjoueur/(?P<match>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_matchhasjoueur')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchHasJoueurController::indexAction',));
                    }

                    // back_matchhasjoueur_show
                    if (preg_match('#^/admin/matchhasjoueur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_matchhasjoueur_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchHasJoueurController::showAction',));
                    }

                    // back_matchhasjoueur_new
                    if (preg_match('#^/admin/matchhasjoueur/(?P<match>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_matchhasjoueur_new')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchHasJoueurController::newAction',));
                    }

                    // back_matchhasjoueur_create
                    if (preg_match('#^/admin/matchhasjoueur/(?P<match>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_back_matchhasjoueur_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_matchhasjoueur_create')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchHasJoueurController::createAction',));
                    }
                    not_back_matchhasjoueur_create:

                    // back_matchhasjoueur_edit
                    if (preg_match('#^/admin/matchhasjoueur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_matchhasjoueur_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchHasJoueurController::editAction',));
                    }

                    // back_matchhasjoueur_update
                    if (preg_match('#^/admin/matchhasjoueur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_back_matchhasjoueur_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_matchhasjoueur_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchHasJoueurController::updateAction',));
                    }
                    not_back_matchhasjoueur_update:

                    // back_matchhasjoueur_delete
                    if (preg_match('#^/admin/matchhasjoueur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_back_matchhasjoueur_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_matchhasjoueur_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchHasJoueurController::deleteAction',));
                    }
                    not_back_matchhasjoueur_delete:

                }

                if (0 === strpos($pathinfo, '/admin/matchtennis')) {
                    // back_matchtennis
                    if (rtrim($pathinfo, '/') === '/admin/matchtennis') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'back_matchtennis');
                        }

                        return array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchtennisController::indexAction',  '_route' => 'back_matchtennis',);
                    }

                    // back_matchtennis_show
                    if (preg_match('#^/admin/matchtennis/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_matchtennis_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchtennisController::showAction',));
                    }

                    // back_matchtennis_new
                    if ($pathinfo === '/admin/matchtennis/new') {
                        return array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchtennisController::newAction',  '_route' => 'back_matchtennis_new',);
                    }

                    // back_matchtennis_create
                    if ($pathinfo === '/admin/matchtennis/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_back_matchtennis_create;
                        }

                        return array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchtennisController::createAction',  '_route' => 'back_matchtennis_create',);
                    }
                    not_back_matchtennis_create:

                    // back_matchtennis_edit
                    if (preg_match('#^/admin/matchtennis/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_matchtennis_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchtennisController::editAction',));
                    }

                    // back_matchtennis_update
                    if (preg_match('#^/admin/matchtennis/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_back_matchtennis_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_matchtennis_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchtennisController::updateAction',));
                    }
                    not_back_matchtennis_update:

                    // back_matchtennis_delete
                    if (preg_match('#^/admin/matchtennis/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_back_matchtennis_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_matchtennis_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\MatchtennisController::deleteAction',));
                    }
                    not_back_matchtennis_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/sets')) {
                // back_sets
                if (preg_match('#^/admin/sets/(?P<match>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_sets')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\SetsController::indexAction',));
                }

                // back_sets_show
                if (preg_match('#^/admin/sets/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_sets_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\SetsController::showAction',));
                }

                // back_sets_new
                if (preg_match('#^/admin/sets/(?P<match>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_sets_new')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\SetsController::newAction',));
                }

                // back_sets_create
                if (preg_match('#^/admin/sets/(?P<match>[^/]++)/create$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_back_sets_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_sets_create')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\SetsController::createAction',));
                }
                not_back_sets_create:

                // back_sets_edit
                if (preg_match('#^/admin/sets/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_sets_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\SetsController::editAction',));
                }

                // back_sets_update
                if (preg_match('#^/admin/sets/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_back_sets_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_sets_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\SetsController::updateAction',));
                }
                not_back_sets_update:

                // back_sets_delete
                if (preg_match('#^/admin/sets/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_back_sets_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'back_sets_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\SetsController::deleteAction',));
                }
                not_back_sets_delete:

            }

            if (0 === strpos($pathinfo, '/admin/actualite')) {
                // actualite_show
                if (preg_match('#^/admin/actualite/(?P<idactualite>[^/]++)/actualite_show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualite_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ActualitesController::showAction',));
                }

                // actualite_new
                if ($pathinfo === '/admin/actualite/new') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ActualitesController::newAction',  '_route' => 'actualite_new',);
                }

                // actualite_create
                if ($pathinfo === '/admin/actualite/create') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ActualitesController::createAction',  '_route' => 'actualite_create',);
                }

                // actualite_edit
                if (preg_match('#^/admin/actualite/(?P<idactualite>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_actualite_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualite_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ActualitesController::editAction',));
                }
                not_actualite_edit:

                // actualite_update
                if (preg_match('#^/admin/actualite/(?P<idactualite>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_actualite_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualite_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ActualitesController::UpdateAction',));
                }
                not_actualite_update:

                // actualite_delete
                if (preg_match('#^/admin/actualite/(?P<idactualite>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_actualite_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'actualite_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ActualitesController::deleteAction',));
                }
                not_actualite_delete:

            }

            if (0 === strpos($pathinfo, '/admin/club')) {
                // club_show
                if (preg_match('#^/admin/club/(?P<idClub>[^/]++)/club_show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_show')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ClubController::showAction',));
                }

                // club_new
                if ($pathinfo === '/admin/club/new') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ClubController::newAction',  '_route' => 'club_new',);
                }

                // club_create
                if ($pathinfo === '/admin/club/create') {
                    return array (  '_controller' => 'Squad\\FttBundle\\Controller\\ClubController::createAction',  '_route' => 'club_create',);
                }

                // club_edit
                if (preg_match('#^/admin/club/(?P<idClub>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_edit')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ClubController::editAction',));
                }

                // club_update
                if (preg_match('#^/admin/club/(?P<idClub>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'PUT', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'PUT', 'HEAD'));
                        goto not_club_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_update')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ClubController::updateAction',));
                }
                not_club_update:

                // club_delete
                if (preg_match('#^/admin/club/(?P<idClub>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_club_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_delete')), array (  '_controller' => 'Squad\\FttBundle\\Controller\\ClubController::deleteAction',));
                }
                not_club_delete:

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FTT\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'FTT\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FTT\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FTT\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FTT\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
