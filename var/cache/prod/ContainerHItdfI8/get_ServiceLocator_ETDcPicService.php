<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.ETDcPic' shared service.

return $this->privates['.service_locator.ETDcPic'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('agendamento' => function (): \Novosga\Entity\Agendamento {
    return ($this->privates['.errored..service_locator.ETDcPic.Novosga\Entity\Agendamento'] ?? $this->load('getAgendamentoService.php'));
}, 'atendimentoService' => function (): \Novosga\Service\AtendimentoService {
    return ($this->services['Novosga\Service\AtendimentoService'] ?? $this->load('getAtendimentoServiceService.php'));
}, 'translator' => function () {
    return ($this->services['translator'] ?? $this->getTranslatorService());
}));