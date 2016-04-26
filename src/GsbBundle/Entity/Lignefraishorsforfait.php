<?php

namespace GsbBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignefraishorsforfait
 *
 * @ORM\Table(name="LigneFraisHorsForfait", indexes={@ORM\Index(name="FK_LigneFraisHorsForfait_FicheFrais", columns={"idFiche"}), @ORM\Index(name="FK_LigneFraisHorsForfait_Etat", columns={"idEtat"})})
 * @ORM\Entity
 */
class Lignefraishorsforfait
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idLigneFraisHorsForfait", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlignefraishorsforfait;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=200, nullable=true)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFrais", type="date", nullable=true)
     */
    private $datefrais;

    /**
     * @var string
     *
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $montant;

    /**
     * @var \Etat
     *
     * @ORM\ManyToOne(targetEntity="Etat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idEtat", referencedColumnName="idEtat")
     * })
     */
    private $idetat;

    /**
     * @var \Fichefrais
     *
     * @ORM\ManyToOne(targetEntity="Fichefrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFiche", referencedColumnName="idFiche")
     * })
     */
    private $idfiche;



    /**
     * Get idlignefraishorsforfait
     *
     * @return integer 
     */
    public function getIdlignefraishorsforfait()
    {
        return $this->idlignefraishorsforfait;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Lignefraishorsforfait
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
     * Set datefrais
     *
     * @param \DateTime $datefrais
     * @return Lignefraishorsforfait
     */
    public function setDatefrais($datefrais)
    {
        $this->datefrais = $datefrais;

        return $this;
    }

    /**
     * Get datefrais
     *
     * @return \DateTime 
     */
    public function getDatefrais()
    {
        return $this->datefrais;
    }

    /**
     * Set montant
     *
     * @param string $montant
     * @return Lignefraishorsforfait
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set idetat
     *
     * @param \GsbBundle\Entity\Etat $idetat
     * @return Lignefraishorsforfait
     */
    public function setIdetat(\GsbBundle\Entity\Etat $idetat = null)
    {
        $this->idetat = $idetat;

        return $this;
    }

    /**
     * Get idetat
     *
     * @return \GsbBundle\Entity\Etat 
     */
    public function getIdetat()
    {
        return $this->idetat;
    }

    /**
     * Set idfiche
     *
     * @param \GsbBundle\Entity\Fichefrais $idfiche
     * @return Lignefraishorsforfait
     */
    public function setIdfiche(\GsbBundle\Entity\Fichefrais $idfiche = null)
    {
        $this->idfiche = $idfiche;

        return $this;
    }

    /**
     * Get idfiche
     *
     * @return \GsbBundle\Entity\Fichefrais 
     */
    public function getIdfiche()
    {
        return $this->idfiche;
    }
}
