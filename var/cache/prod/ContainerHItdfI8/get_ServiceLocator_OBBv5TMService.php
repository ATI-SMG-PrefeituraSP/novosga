<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.OBBv5TM' shared service.

return $this->privates['.service_locator.OBBv5TM'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('dispatcher' => function () {
    return ($this->privates['App\Service\EventDispatcher'] ?? $this->load('getEventDispatcher2Service.php'));
}, 'translator' => function () {
    return ($this->services['translator'] ?? $this->getTranslatorService());
}, 'usuarioService' => function (): \Novosga\Service\UsuarioService {
    return ($this->services['Novosga\Service\UsuarioService'] ?? $this->load('getUsuarioServiceService.php'));
}));