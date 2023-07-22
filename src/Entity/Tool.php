<?php

namespace App\Entity;

use App\Repository\ToolRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ToolRepository::class)]
class Tool
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    #[ORM\Column(type: 'integer')]
    private $price;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $damagePerTick;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $effectRadius;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $effectDuration;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $meleeDamage;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $heavyMeleeDamage;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $throwRange;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $sightedRange;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $spread;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $staminaConsumptionLight;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $staminaConsumptionHeavy;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $staminaConsumptionThrow;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $verticalRecoil;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $sway;

    #[ORM\Column(type: 'float', nullable: true)]
    private $reloadSpeed;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $damageThrown;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $muzzleVelocity;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $fuzeTimer;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $damage;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $imageUrl;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[ORM\OneToMany(mappedBy: 'tool', targetEntity: LegendaryTool::class, orphanRemoval: true)]
    private $legendaryTools;

    #[ORM\ManyToOne(targetEntity: DamageClass::class)]
    private $lightMeleeClass;

    #[ORM\ManyToOne(targetEntity: DamageClass::class)]
    private $heavyMeleeClass;

    public function __construct()
    {
        $this->legendaryTools = new ArrayCollection();
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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDamagePerTick(): ?int
    {
        return $this->damagePerTick;
    }

    public function setDamagePerTick(?int $damagePerTick): self
    {
        $this->damagePerTick = $damagePerTick;

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

    public function getThrowRange(): ?int
    {
        return $this->throwRange;
    }

    public function setThrowRange(?int $throwRange): self
    {
        $this->throwRange = $throwRange;

        return $this;
    }

    public function getSightedRange(): ?int
    {
        return $this->sightedRange;
    }

    public function setSightedRange(?int $sightedRange): self
    {
        $this->sightedRange = $sightedRange;

        return $this;
    }

    public function getSpread(): ?int
    {
        return $this->spread;
    }

    public function setSpread(?int $spread): self
    {
        $this->spread = $spread;

        return $this;
    }

    public function getStaminaConsumptionLight(): ?int
    {
        return $this->staminaConsumptionLight;
    }

    public function setStaminaConsumptionLight(?int $staminaConsumptionLight): self
    {
        $this->staminaConsumptionLight = $staminaConsumptionLight;

        return $this;
    }

    public function getStaminaConsumptionHeavy(): ?int
    {
        return $this->staminaConsumptionHeavy;
    }

    public function setStaminaConsumptionHeavy(?int $staminaConsumptionHeavy): self
    {
        $this->staminaConsumptionHeavy = $staminaConsumptionHeavy;

        return $this;
    }

    public function getStaminaConsumptionThrow(): ?int
    {
        return $this->staminaConsumptionThrow;
    }

    public function setStaminaConsumptionThrow(?int $staminaConsumptionThrow): self
    {
        $this->staminaConsumptionThrow = $staminaConsumptionThrow;

        return $this;
    }

    public function getVerticalRecoil(): ?int
    {
        return $this->verticalRecoil;
    }

    public function setVerticalRecoil(?int $verticalRecoil): self
    {
        $this->verticalRecoil = $verticalRecoil;

        return $this;
    }

    public function getSway(): ?int
    {
        return $this->sway;
    }

    public function setSway(?int $sway): self
    {
        $this->sway = $sway;

        return $this;
    }

    public function getReloadSpeed(): ?float
    {
        return $this->reloadSpeed;
    }

    public function setReloadSpeed(?float $reloadSpeed): self
    {
        $this->reloadSpeed = $reloadSpeed;

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

    public function getMuzzleVelocity(): ?int
    {
        return $this->muzzleVelocity;
    }

    public function setMuzzleVelocity(?int $muzzleVelocity): self
    {
        $this->muzzleVelocity = $muzzleVelocity;

        return $this;
    }

    public function getFuzeTimer(): ?int
    {
        return $this->fuzeTimer;
    }

    public function setFuzeTimer(?int $fuzeTimer): self
    {
        $this->fuzeTimer = $fuzeTimer;

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

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

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
     * @return Collection<int, LegendaryTool>
     */
    public function getLegendaryTools(): Collection
    {
        return $this->legendaryTools;
    }

    public function addLegendaryTool(LegendaryTool $legendaryTool): self
    {
        if (!$this->legendaryTools->contains($legendaryTool)) {
            $this->legendaryTools[] = $legendaryTool;
            $legendaryTool->setTool($this);
        }

        return $this;
    }

    public function removeLegendaryTool(LegendaryTool $legendaryTool): self
    {
        if ($this->legendaryTools->removeElement($legendaryTool)) {
            // set the owning side to null (unless already changed)
            if ($legendaryTool->getTool() === $this) {
                $legendaryTool->setTool(null);
            }
        }

        return $this;
    }

    public function getLightMeleeClass(): ?DamageClass
    {
        return $this->lightMeleeClass;
    }

    public function setLightMeleeClass(?DamageClass $lightMeleeClass): self
    {
        $this->lightMeleeClass = $lightMeleeClass;

        return $this;
    }

    public function getHeavyMeleeClass(): ?DamageClass
    {
        return $this->heavyMeleeClass;
    }

    public function setHeavyMeleeClass(?DamageClass $heavyMeleeClass): self
    {
        $this->heavyMeleeClass = $heavyMeleeClass;

        return $this;
    }
}
