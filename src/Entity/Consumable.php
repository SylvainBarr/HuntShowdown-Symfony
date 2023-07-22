<?php

namespace App\Entity;

use App\Repository\ConsumableRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConsumableRepository::class)]
class Consumable
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $damageThrown;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $imageUrl;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $effectRadius;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $throwRange;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $controlRange;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $fuseTimer;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $damage;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $effectDuration;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $meleeDamage;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $heavyMeleeDamage;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[ORM\OneToMany(mappedBy: 'consumable', targetEntity: LegendaryConsumable::class)]
    private $legendaryConsumables;

    #[ORM\ManyToOne(targetEntity: DamageClass::class)]
    private $damageClass;

    public function __construct()
    {
        $this->legendaryConsumables = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getDamageThrown(): ?int
    {
        return $this->damageThrown;
    }

    public function setDamageThrown(?int $damageThrown): self
    {
        $this->damageThrown = $damageThrown;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    public function getEffectRadius(): ?int
    {
        return $this->effectRadius;
    }

    public function setEffectRadius(?int $effectRadius): self
    {
        $this->effectRadius = $effectRadius;

        return $this;
    }

    public function getThrowRange(): ?int
    {
        return $this->throwRange;
    }

    public function setThrowRange(?int $throwRange): self
    {
        $this->throwRange = $throwRange;

        return $this;
    }

    public function getControlRange(): ?int
    {
        return $this->controlRange;
    }

    public function setControlRange(?int $controlRange): self
    {
        $this->controlRange = $controlRange;

        return $this;
    }

    public function getFuseTimer(): ?int
    {
        return $this->fuseTimer;
    }

    public function setFuseTimer(?int $fuseTimer): self
    {
        $this->fuseTimer = $fuseTimer;

        return $this;
    }

    public function getDamage(): ?int
    {
        return $this->damage;
    }

    public function setDamage(?int $damage): self
    {
        $this->damage = $damage;

        return $this;
    }

    public function getEffectDuration(): ?int
    {
        return $this->effectDuration;
    }

    public function setEffectDuration(?int $effectDuration): self
    {
        $this->effectDuration = $effectDuration;

        return $this;
    }

    public function getMeleeDamage(): ?int
    {
        return $this->meleeDamage;
    }

    public function setMeleeDamage(?int $meleeDamage): self
    {
        $this->meleeDamage = $meleeDamage;

        return $this;
    }

    public function getHeavyMeleeDamage(): ?int
    {
        return $this->heavyMeleeDamage;
    }

    public function setHeavyMeleeDamage(?int $heavyMeleeDamage): self
    {
        $this->heavyMeleeDamage = $heavyMeleeDamage;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, LegendaryConsumable>
     */
    public function getLegendaryConsumables(): Collection
    {
        return $this->legendaryConsumables;
    }

    public function addLegendaryConsumable(LegendaryConsumable $legendaryConsumable): self
    {
        if (!$this->legendaryConsumables->contains($legendaryConsumable)) {
            $this->legendaryConsumables[] = $legendaryConsumable;
            $legendaryConsumable->setConsumable($this);
        }

        return $this;
    }

    public function removeLegendaryConsumable(LegendaryConsumable $legendaryConsumable): self
    {
        if ($this->legendaryConsumables->removeElement($legendaryConsumable)) {
            // set the owning side to null (unless already changed)
            if ($legendaryConsumable->getConsumable() === $this) {
                $legendaryConsumable->setConsumable(null);
            }
        }

        return $this;
    }

    public function getDamageClass(): ?DamageClass
    {
        return $this->damageClass;
    }

    public function setDamageClass(?DamageClass $damageClass): self
    {
        $this->damageClass = $damageClass;

        return $this;
    }
}
