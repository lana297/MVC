<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'View\\' => array($baseDir . '/src/View'),
    'Twig\\' => array($vendorDir . '/twig/twig/src'),
    'Symfony\\Polyfill\\Mbstring\\' => array($vendorDir . '/symfony/polyfill-mbstring'),
    'Model\\' => array($baseDir . '/src/Model'),
    'Interface\\' => array($baseDir . '/src/Interface'),
    'Helpers\\' => array($baseDir . '/src/Helpers'),
    'Controller\\' => array($baseDir . '/src/Controller'),
);
