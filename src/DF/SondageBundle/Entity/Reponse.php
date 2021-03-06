<?php

namespace DF\SondageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DF\SondageBundle\Entity\ReponseRepository")
 */
class Reponse
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="voting", type="integer")
     * @ORM\JoinColumn(nullable=true)
     */
    private $voting;
    
    /**
     * @ORM\ManyToOne(targetEntity="Question")
     */
    private $question;


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
     * Set libelle
     *
     * @param string $libelle
     * @return Reponse
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set voting
     *
     * @param integer $voting
     * @return Reponse
     */
    public function setVoting($voting)
    {
        $this->voting = $voting;
    
        return $this;
    }

    /**
     * Get voting
     *
     * @return integer 
     */
    public function getVoting()
    {
        return $this->voting;
    }

    /**
     * Set question
     *
     * @param \DF\SondageBundle\Entity\Question $question
     * @return Reponse
     */
    public function setQuestion(\DF\SondageBundle\Entity\Question $question)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return \DF\SondageBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}