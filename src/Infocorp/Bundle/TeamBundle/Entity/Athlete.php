<?php

namespace Infocorp\Bundle\TeamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Athlete
 *
 * @ORM\Table(name="athlete")
 * @ORM\Entity(repositoryClass="Infocorp\Bundle\TeamBundle\Entity\AthleteRepository")
 */
class Athlete
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="rga", type="string", length=12)
     */
    private $rga;

    /**
     * @var int
     * 
     * @ORM\ManyToOne(targetEntity="Team")
     * @ORM\JoinColumn(name="athele_team", referencedColumnName="id")
     */
    private $team;


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
     * Set name
     *
     * @param string $name
     * @return Athlete
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set rga
     *
     * @param string $rga
     * @return Athlete
     */
    public function setRga($rga)
    {
        $this->rga = $rga;
    
        return $this;
    }

    /**
     * Get rga
     *
     * @return string 
     */
    public function getRga()
    {
        return $this->rga;
    }
}
