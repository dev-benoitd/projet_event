<?php

namespace EPSI\EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousGenre
 *
 * @ORM\Table(name="SOUS_GENRE", indexes={@ORM\Index(name="FK_SOUS_GENRE_id_genre_GENRE", columns={"id_genre_GENRE"})})
 * @ORM\Entity
 */
class SousGenre
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom_sous_genre", type="string", length=100, nullable=true)
     */
    private $nomSousGenre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_visite_sous_genre", type="integer", nullable=true)
     */
    private $nbVisiteSousGenre;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_genre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGenre;

    /**
     * @var \EPSI\EventBundle\Entity\Genre
     *
     * @ORM\ManyToOne(targetEntity="EPSI\EventBundle\Entity\Genre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_genre_GENRE", referencedColumnName="id_genre")
     * })
     */
    private $idGenreGenre;



    /**
     * Set nomSousGenre
     *
     * @param string $nomSousGenre
     *
     * @return SousGenre
     */
    public function setNomSousGenre($nomSousGenre)
    {
        $this->nomSousGenre = $nomSousGenre;

        return $this;
    }

    /**
     * Get nomSousGenre
     *
     * @return string
     */
    public function getNomSousGenre()
    {
        return $this->nomSousGenre;
    }

    /**
     * Set nbVisiteSousGenre
     *
     * @param integer $nbVisiteSousGenre
     *
     * @return SousGenre
     */
    public function setNbVisiteSousGenre($nbVisiteSousGenre)
    {
        $this->nbVisiteSousGenre = $nbVisiteSousGenre;

        return $this;
    }

    /**
     * Get nbVisiteSousGenre
     *
     * @return integer
     */
    public function getNbVisiteSousGenre()
    {
        return $this->nbVisiteSousGenre;
    }

    /**
     * Get idGenre
     *
     * @return integer
     */
    public function getIdGenre()
    {
        return $this->idGenre;
    }

    /**
     * Set idGenreGenre
     *
     * @param \EPSI\EventBundle\Entity\Genre $idGenreGenre
     *
     * @return SousGenre
     */
    public function setIdGenreGenre(\EPSI\EventBundle\Entity\Genre $idGenreGenre = null)
    {
        $this->idGenreGenre = $idGenreGenre;

        return $this;
    }

    /**
     * Get idGenreGenre
     *
     * @return \EPSI\EventBundle\Entity\Genre
     */
    public function getIdGenreGenre()
    {
        return $this->idGenreGenre;
    }
}
