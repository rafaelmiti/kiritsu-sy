<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Memoria
 *
 * @ORM\Table(name="memoria", indexes={@ORM\Index(name="categoria", columns={"categoria"})})
 * @ORM\Entity
 */
class Memoria
{
    /**
     * @var string
     *
     * @ORM\Column(name="sub_categoria", type="string", length=30, nullable=true)
     */
    private $subCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=2200, nullable=false)
     */
    private $descricao;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Categoria
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria", referencedColumnName="id")
     * })
     */
    private $categoria;



    /**
     * Set subCategoria
     *
     * @param string $subCategoria
     *
     * @return Memoria
     */
    public function setSubCategoria($subCategoria)
    {
        $this->subCategoria = $subCategoria;

        return $this;
    }

    /**
     * Get subCategoria
     *
     * @return string
     */
    public function getSubCategoria()
    {
        return $this->subCategoria;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Memoria
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
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
     * Set categoria
     *
     * @param \AppBundle\Entity\Categoria $categoria
     *
     * @return Memoria
     */
    public function setCategoria(\AppBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \AppBundle\Entity\Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}
