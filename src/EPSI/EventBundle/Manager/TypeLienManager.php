<?php
/**
 * Created by IntelliJ IDEA.
 * User: benoitdelboe
 * Date: 12/01/2017
 * Time: 11:01
 */

namespace EPSI\EventBundle\Manager;


use Doctrine\ORM\EntityManager;

class TypeLienManager extends BaseManager
{

    protected $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getRepository()
    {
        return $this->em->getRepository('EPSIEventBundle:TypeLien');
    }
}