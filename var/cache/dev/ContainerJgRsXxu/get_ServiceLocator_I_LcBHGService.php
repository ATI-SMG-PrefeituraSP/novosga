<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.I.LcBHG' shared service.

return $this->privates['.service_locator.I.LcBHG'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('servico' => function (): \Novosga\Entity\Servico {
    return ($this->privates['.errored..service_locator.I.LcBHG.Novosga\Entity\Servico'] ?? $this->load('getServico2Service.php'));
}, 'translator' => function () {
    return ($this->services['translator'] ?? $this->getTranslatorService());
}));