<?php

return array(

    /*
     * - Controllers
     */

    'controllers' => array(
        'invokables' => array(
            'Scaffold\Controller\Foo' => 'Scaffold\Controller\FooController',
            'Scaffold\Controller\ToDo' => 'Scaffold\Controller\ToDoController',
        ),
    ),

    /*
     * - Router
     */

    'router' => array(
        'routes' => array(

            /*
             * -- @todo_
             */

            '@todo' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/@todo',
                    'defaults' => array(
                        'controller' => 'Scaffold\Controller\ToDo',
                        'action' => 'index',
                    ),
                ),
            ),

            /*
             * -- @todo_
             */

            '@foo' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/@foo',
                    'defaults' => array(
                        'controller' => 'Scaffold\Controller\Foo',
                        'action' => 'index',
                    ),
                ),
            ),

        ),
    ),

    /*
     * - View Manager
     */

    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),

);
