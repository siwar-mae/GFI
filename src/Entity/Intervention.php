<?php

namespace App\Entity;

use App\Repository\InterventionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterventionRepository::class)
 */
class Intervention
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $EndDate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $observation;

    /**
     * One Intervention has One User.
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $intervenant;

    /**
     * @return mixed
     */
    public function getIntervenant()
    {
        return $this->intervenant;
    }

    /**
     * @param mixed $intervenant
     */
    public function setIntervenant($intervenant): void
    {
        $this->intervenant = $intervenant;
    }

    /**
     * @return mixed
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * @param mixed $agency
     */
    public function setAgency($agency): void
    {
        $this->agency = $agency;
    }

    /**
     * One Intervention has One Agency.
     * @ORM\OneToOne(targetEntity="Agency")
     * @ORM\JoinColumn(name="agency_id", referencedColumnName="id")
     */
    private $agency;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->EndDate;
    }

    public function setEndDate(\DateTimeInterface $EndDate): self
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    public function getObservation(): ?string
    {
        return $this->observation;
    }

    public function setObservation(string $observation): self
    {
        $this->observation = $observation;

        return $this;
    }
}
