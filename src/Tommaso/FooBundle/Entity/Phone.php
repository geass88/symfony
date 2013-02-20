<?php

namespace Tommaso\FooBundle\Entity;

/**
 * Phone
 */
class Phone
{
    
    /**
     * @var string
     */
    private $number;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Tommaso\FooBundle\Entity\User
     */
    private $user;


    /**
     * Set number
     *
     * @param string $number
     * @return Phone
     */
    public function setNumber($number)
    {
        $this->number = $number;
    
        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set user
     *
     * @param \Tommaso\FooBundle\Entity\User $user
     * @return Phone
     */
    public function setUser(\Tommaso\FooBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Tommaso\FooBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var \Tommaso\FooBundle\Entity\User
     */
    private $idUser;


    /**
     * Set idUser
     *
     * @param \Tommaso\FooBundle\Entity\User $idUser
     * @return Phone
     */
    public function setIdUser(\Tommaso\FooBundle\Entity\User $idUser = null)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return \Tommaso\FooBundle\Entity\User 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}