<?php

namespace EPSI\EventBundle\Manager;

use Doctrine\ORM\EntityManager;
use EPSI\EventBundle\Entity\Administrateur;

class AdministrateurManager extends BaseManager
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getAdministrateurs()
    {
        return $this
            ->getRepository()
            ->GetAllAdministrateur();
    }

    public function getAdminById(int $id){
        return $this
            ->getRepository()
            ->GetById($id);
    }

    public function getRepository()
    {
        return $this->em->getRepository('EPSIEventBundle:Administrateur');
    }

    public function saveAdmin(Administrateur $admin)
    {
        $this->persistAndFlush($admin);
    }
}