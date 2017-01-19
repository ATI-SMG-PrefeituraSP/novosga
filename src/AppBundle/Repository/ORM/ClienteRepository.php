<?php

/*
 * This file is part of the Novo SGA project.
 *
 * (c) Rogerio Lino <rogeriolino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Repository\ORM;

use Doctrine\ORM\EntityRepository;
use Novosga\Entity\Cliente;
use Novosga\Repository\ClienteRepositoryInterface;

/**
 * ClienteRepository
 *
 * @author Rogério Lino <rogeriolino@gmail.com>
 */
class ClienteRepository extends EntityRepository implements ClienteRepositoryInterface
{
    
    /**
     * Retorna todos os clientes ordenados pelo nome
     * 
     * @return Cliente[]
     */
    public function findAll()
    {
        return $this->findBy([], ['nome' => 'ASC']);
    }
    
}
