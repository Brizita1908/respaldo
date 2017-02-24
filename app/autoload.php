<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;
use Knp\Snappy\Pdf;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
//$loader->add('Knp', __DIR__.'/../vendor/knplabs/knp-snappy');

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
