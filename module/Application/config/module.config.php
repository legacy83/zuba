<?php

return array(

    /*
     * - Controllers
     */

    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Site' => 'Application\Controller\SiteController'
        ),
    ),

    /*
     * - Router
     */

    'router' => array(
        'routes' => array(

            /*
             * -- home
             */

            'home' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Site',
                        'action' => 'index',
                    ),
                ),
            ),

            /*
             * -- application
             */

            'application' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller' => 'Site',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => TRUE,
                'child_routes' => array(

                    /*
                     * --- application/default
                     */

                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(),
                        ),
                    ),

                ),
            ),
        ),
    ),

    /*
     * - View Manager
     */

    'view_manager' => array(
        'display_not_found_reason' => TRUE,
        'display_exceptions' => TRUE,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

);
