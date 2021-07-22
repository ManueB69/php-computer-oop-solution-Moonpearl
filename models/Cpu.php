<?php

/**
 * Réprésente un processeur
 */
class Cpu
{
    /**
     * Identifiant en base de données
     * @var integer|null
     */
    private ?int $id;
    /**
     * Nom du composant
     * @var string
     */
    private string $name;
    /**
     * Prix du composant
     * @var float
     */
    private float $price;
    /**
     * Marque du composant
     * @var Brand|null
     */
    private ?Brand $brand;
    /**
     * Cadence du processeur
     * @var integer
     */
    private int $clock;
    /**
     * Nombre de coeurs
     * @var integer
     */
    private int $cores;

    /**
     * Crée un nouveau composant
     *
     * @param integer|null $id Identifiant en base de données
     * @param string $name Nom du composant
     * @param float $price Prix du composant
     * @param Brand|null $brand Marque du composant
     * @param integer $clock Cadence du processeur
     * @param integer $cores Nombre de coeurs
     */
    public function __construct(
        ?int $id = null,
        string $name = '',
        float $price = 0,
        ?Brand $brand = null,
        int $clock = 0,
        int $cores = 0
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->clock = $clock;
        $this->cores = $cores;
    }

    /**
     * Get identifiant en base de données
     *
     * @return  integer|null
     */ 
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Get nom du composant
     *
     * @return  string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get prix du composant
     *
     * @return  float
     */ 
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Get marque du composant
     *
     * @return  Brand|null
     */ 
    public function getBrand(): ?Brand
    {
        return $this->brand;
    }

    /**
     * Get cadence du processeur
     *
     * @return  integer
     */ 
    public function getClock(): int
    {
        return $this->clock;
    }

    /**
     * Get nombre de coeurs
     *
     * @return  integer
     */ 
    public function getCores(): int
    {
        return $this->cores;
    }
}
