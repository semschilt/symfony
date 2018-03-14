<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="mobile")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MobileRepository");
 */
class Mobile {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length= 64)
     */
    private $naam;
    /**
     * @ORM\Column(type="string", length= 64)
     */
    private $prijs;
    /**
     * @ORM\Column(type="string", length= 64)
     */
    private $type;

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->naam,
            $this->prijs,
            $this->type,
        ));
    }

    public function unserialize($serialized) {
        list (
            $this->id,
            $this->naam,
            $this->prijs,
            $this->type,
        ) = unserialize($serialized);
    }

    public function getNaam(){
        return $this->naam;
    }

    public function setNaam() {
        $this->naam = $naam;
    }

    public function getPrijs(){
        return $this->prijs;
    }

    public function setPrijs() {
        $this->prijs = $prijs;
    }

    public function getType(){
        return $this->type;
    }

    public function setType() {
        $this->type = $type;
    }
}