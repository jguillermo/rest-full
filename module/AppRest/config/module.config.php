<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'AppRest\Controller\AppRest' => 'AppRest\Controller\AppRestController',
        ),
    ),

    // The following section is new` and should be added to your file
    'router' => array(
        'routes' => array(
            'app-rest' => array(
                'type'    => 'Segment',
                'options' => array(
                    'route'    => '/app-rest[/:id]',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'AppRest\Controller\AppRest',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);