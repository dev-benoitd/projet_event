<?php

namespace EPSI\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="COMMENTAIRE", indexes={@ORM\Index(name="FK_COMMENTAIRE_id_evenement", columns={"id_evenement"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=300, nullable=true)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_commentaire", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentaire;

    /**
     * @var \EPSI\EventBundle\Entity\Evenement
     *
     * @ORM\ManyToOne(targetEntity="EPSI\EventBundle\Entity\Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_evenement", referencedColumnName="id_evenement")
     * })
     */
    private $idEvenement;



    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Get idCommentaire
     *
     * @return integer
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * Set idEvenement
     *
     * @param \EPSI\EventBundle\Entity\Evenement $idEvenement
     *
     * @return Commentaire
     */
    public function setIdEvenement(\EPSI\EventBundle\Entity\Evenement $idEvenement = null)
    {
        $this->idEvenement = $idEvenement;

        return $this;
    }

    /**
     * Get idEvenement
     *
     * @return \EPSI\EventBundle\Entity\Evenement
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }
}
