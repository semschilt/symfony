<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="app_users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository");
 */
class User implements UserInterface, \Serializable {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length= 25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length= 64)
     */
    private $password;
    /**
     * @ORM\Column(type="json_array")
     */
    private $roles = array();

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
        ));
    }

    public function unserialize($serialized) {
        list (
            $this->id,
            $this->username,
            $this->password,
        ) = unserialize($serialized);
    }

    public function getRoles() {
        return $this->roles;
    }

    public function setRoles(array $roles) {
        $this->roles = $roles;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getSalt() {
        return null;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername() {
        $this->username = $username;
    }

    public function eraseCredentials() {
        
    }

}