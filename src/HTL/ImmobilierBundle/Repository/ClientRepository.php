<?php

namespace HTL\ImmobilierBundle\Repository;

/**
 * ProprietaireRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends \Doctrine\ORM\EntityRepository
{
    public function FindClient($email,$password){
         return $this->getEntityManager()
                ->createQuery('Select c.id FROM
                HTLImmobilierBundle:Client c WHERE c.email=:email and c.password=:password')
                 ->setParameters(
                     array('email'=>$email,'password'=>$password))->execute();

    }
}
