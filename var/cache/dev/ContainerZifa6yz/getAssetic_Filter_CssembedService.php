<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'assetic.filter.cssembed' shared service.

include_once $this->targetDirs[3].'/vendor/kriswallsmith/assetic/src/Assetic/Filter/BaseProcessFilter.php';
include_once $this->targetDirs[3].'/vendor/kriswallsmith/assetic/src/Assetic/Filter/CssEmbedFilter.php';

$this->services['assetic.filter.cssembed'] = $instance = new \Assetic\Filter\CssEmbedFilter(($this->targetDirs[3].'/app/Resources/java/cssembed.jar'), 'C:\\Program Files\\Java\\jdk1.8.0_65\\bin\\java.exe');

$instance->setTimeout(NULL);
$instance->setCharset('UTF-8');
$instance->setMhtml(false);
$instance->setMhtmlRoot(NULL);
$instance->setRoot(NULL);
$instance->setSkipMissing(false);
$instance->setMaxUriLength(NULL);
$instance->setMaxImageSize(NULL);

return $instance;
