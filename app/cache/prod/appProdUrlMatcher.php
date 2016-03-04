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

        // demarco_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'demarco_homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\ShowcaseController::indexAction',  '_route' => 'demarco_homepage',);
        }

        // demarco_aboutus
        if ($pathinfo === '/aboutus') {
            return array (  '_controller' => 'AppBundle\\Controller\\ShowcaseController::aboutusAction',  '_route' => 'demarco_aboutus',);
        }

        // demarco_gallery
        if ($pathinfo === '/gallery') {
            return array (  '_controller' => 'AppBundle\\Controller\\ShowcaseController::galleryAction',  '_route' => 'demarco_gallery',);
        }

        // demarco_projects
        if ($pathinfo === '/projects') {
            return array (  '_controller' => 'AppBundle\\Controller\\ShowcaseController::projectsAction',  '_route' => 'demarco_projects',);
        }

        // demarco_contacts
        if ($pathinfo === '/contacts') {
            return array (  '_controller' => 'AppBundle\\Controller\\ShowcaseController::contactsAction',  '_route' => 'demarco_contacts',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // demarco_admin
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'demarco_admin',);
            }

            // demarco_login_check
            if ($pathinfo === '/logincheck') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'demarco_login_check',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            // sonata_admin_retrieve_autocomplete_items
            if ($pathinfo === '/admin/core/get-autocomplete-items') {
                return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
            }

            if (0 === strpos($pathinfo, '/admin/app/article')) {
                // admin_app_article_list
                if ($pathinfo === '/admin/app/article/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_article_list',  '_route' => 'admin_app_article_list',);
                }

                // admin_app_article_create
                if ($pathinfo === '/admin/app/article/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_article_create',  '_route' => 'admin_app_article_create',);
                }

                // admin_app_article_batch
                if ($pathinfo === '/admin/app/article/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_article_batch',  '_route' => 'admin_app_article_batch',);
                }

                // admin_app_article_edit
                if (preg_match('#^/admin/app/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_article_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_article_edit',));
                }

                // admin_app_article_delete
                if (preg_match('#^/admin/app/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_article_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_article_delete',));
                }

                // admin_app_article_show
                if (preg_match('#^/admin/app/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_article_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_article_show',));
                }

                // admin_app_article_export
                if ($pathinfo === '/admin/app/article/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'admin.category',  '_sonata_name' => 'admin_app_article_export',  '_route' => 'admin_app_article_export',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
