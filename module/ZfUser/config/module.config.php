<?php

namespace ZfUser;

return array(
    'router' => array(
        'routes' => array(
            'zfuser-register' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/register',
                    'defaults' => array(
                        '__NAMESPACE__' => 'ZfUser\Controller',
                        'controller' => 'Index',
                        'action' => 'register'
                    )
                )
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'ZfUser\Controller\Index' => 'ZfUser\Controller\IndexController',
        )
    ),
    /**
     * Gerenciador de view
     */
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    /**
     * Configuracao do Doctrine
     */
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ .'/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        )
    ),
    /**
     * Configuracao do data-fixture
     */
    'data-fixture' => array(
        'ZfUser_fixture' => __DIR__ . '/../src/ZfUser/Fixture'
    )
);
