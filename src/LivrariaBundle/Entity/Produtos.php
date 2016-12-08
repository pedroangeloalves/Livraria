<?php


namespace LivrariaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;




/**
 * Description of Produtos
 *
 * @author aluno
 * @ORM\Entity
 * @ORM\Table(name="produtos")
 */


class Produtos 
{
    /** @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
  
  
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="É obrigatório informar um nome para o Produto")
     */
    private $nome;
    
    /**
     *
     * @ORM\Column(type="integer", length=5)
     * @Assert\NotBlank()
     * @Assert\GreaterThanOrEqual(
     *  value = 0,
     *  message="A Quantidade deve ser maior ou igual a zero")
     */
    private $quantidade;
    
    /**
     *
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank(message="É obrigatório informar um Preço")
     * @Assert\GreaterThanOrEqual(
     *  value = 0,
     *  message="O Preço deve ser maior ou igual a zero")     */        
    private $preco;
    
    
    /**
     *
     * @ORM\Column(type="string")
     * @Assert\NotBlank(message="É obrigatório informar um Tipo")
     */    
    private $tipo;
    
    /**
     *
     * @ORM\Column(type="string")
     */    
    private $image;
    
    
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Genero")
     * @ORM\JoinColumn(name="genero_id", referencedColumnName="id")
     * @Assert\NotBlank(message="É obrigatório informar um Genero")
     */
    private $genero;
    
    

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Produtos
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set quantidade
     *
     * @param integer $quantidade
     *
     * @return Produtos
     */
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get quantidade
     *
     * @return integer
     */
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set preco
     *
     * @param string $preco
     *
     * @return Produtos
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get preco
     *
     * @return string
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Produtos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Produtos
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
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
     * Set genero
     *
     * @param \LivrariaBundle\Entity\Genero $genero
     *
     * @return Produtos
     */
    public function setGenero(\LivrariaBundle\Entity\Genero $genero = null)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return \LivrariaBundle\Entity\Genero
     */
    public function getGenero()
    {
        return $this->genero;
    }
}
