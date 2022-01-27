<?php

declare(strict_types=1);

namespace App\Cliente\Domain;

use App\Shared\Domain\Entity;
use DateTimeInterface;

/**
 * @OA\Schema(
 *     title="Pessoa",
 *     description="Model gives table person"
 * )
 */
final class Cliente extends Entity
{
    /**
   * @OA\Property(type="integer", readOnly=true, example=1)
   */
    protected int $id;

    /**
   * @OA\Property(type="string", example="Gazin Atacado")
   */
    protected string $name;

    /**
   * @OA\Property(type="string", example="77.941.490/0077-53")
   */
    protected string $cnpj;

    /**
   * @OA\Property(type="integer", example=2)
   */
    protected int $idtipopessoa;

    /**
   * @OA\Property(type="integer", example=3)
   */
    protected int $idtipocontribuinte;

    protected DateTimeInterface $createdAt;
    protected ?DateTimeInterface $endedAt;

    public function jsonSerialize(): array
    {
        return [
            ...$this->toArray(),
            'createdAt' => $this->createdAt->format(DATE_ATOM),
            'endedAt' => $this->endedAt ? $this->endedAt->format(DATE_ATOM) : null,
        ];
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName(string $name): Cliente
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of cnpj
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    /**
     * Set the value of cnpj
     *
     * @return  self
     */
    public function setCnpj(string $cnpj): Cliente
    {
        $this->cnpj = $cnpj;

        return $this;
    }

    /**
     * Get the value of idtipopessoa
     */
    public function getIdtipopessoa(): int
    {
        return $this->idtipopessoa;
    }

    /**
     * Set the value of idtipopessoa
     *
     * @return  self
     */
    public function setIdtipopessoa(int $idtipopessoa): Cliente
    {
        $this->idtipopessoa = $idtipopessoa;

        return $this;
    }

    /**
     * Get the value of idtipocontribuinte
     */
    public function getIdtipocontribuinte(): int
    {
        return $this->idtipocontribuinte;
    }

    /**
     * Set the value of idtipocontribuinte
     *
     * @return  self
     */
    public function setIdtipocontribuinte(int $idtipocontribuinte): Cliente
    {
        $this->idtipocontribuinte = $idtipocontribuinte;

        return $this;
    }

    /**
     * Get the value of createdAt
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @return  self
     */
    public function setCreatedAt(DateTimeInterface $createdAt): Cliente
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of endedAt
     */
    public function getEndedAt(): DateTimeInterface
    {
        return $this->endedAt;
    }

    /**
     * Set the value of endedAt
     *
     * @return  self
     */
    public function setEndedAt(DateTimeInterface $endedAt): Cliente
    {
        $this->endedAt = $endedAt;

        return $this;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Cliente
    {
        $this->id = $id;

        return $this;
    }
}
