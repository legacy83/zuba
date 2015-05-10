<?php
return array(

    /*
     * - Modules
     */

    'modules' => array(
        'Scaffold',
        'Application',
    ),

    /*
     * - Module Listener Options
     */

    'module_listener_options' => array(

        /*
         * -- Module Paths
         */

        'module_paths' => array(
            './module',
            './vendor',
        ),

        /*
         * -- Config Glob Paths
         */

        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),

    ),

);