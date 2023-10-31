<?php

namespace App\Entity;

use App\Repository\CommandLineRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommandLineRepository::class)
 */
class CommandLine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $Commande = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $Product = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $QuantityOrderd = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $UnitPrice = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommande(): ?string
    {
        return $this->Commande;
    }

    public function setCommande(string $Commande): static
    {
        $this->Commande = $Commande;

        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->Product;
    }

    public function setProduct(string $Product): static
    {
        $this->Product = $Product;

        return $this;
    }

    public function getQuantityOrderd(): ?string
    {
        return $this->QuantityOrderd;
    }

    public function setQuantityOrderd(string $QuantityOrderd): static
    {
        $this->QuantityOrderd = $QuantityOrderd;

        return $this;
    }

    public function getUnitPrice(): ?string
    {
        return $this->UnitPrice;
    }

    public function setUnitPrice(string $UnitPrice): static
    {
        $this->UnitPrice = $UnitPrice;

        return $this;
    }
}
