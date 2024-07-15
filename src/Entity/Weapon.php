<?php

namespace App\Entity;

use App\Repository\WeaponRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WeaponRepository::class)]
class Weapon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $damage;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $effectiveRange;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $fireRate;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $cycleTime;

    #[ORM\Column(type: 'float', nullable: true)]
    private $spread;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $sway;

    #[ORM\Column(type: 'float', nullable: true)]
    private $verticalRecoil;

    #[ORM\Column(type: 'float', nullable: true)]
    private $reloadSpeed;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $muzzleVelocity;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $meleeDamage;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $heavyMeleeDamage;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $staminaConsumptionHeavy;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $staminaConsumptionLight;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    #[ORM\Column(type: 'string', length: 50)]
    private $size;

    #[ORM\Column(type: 'integer')]
    private $price;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $imageUrl;

    #[ORM\OneToMany(mappedBy: 'weapon', targetEntity: LegendaryWeaponSkin::class)]
    private $legendaryWeaponSkins;

    #[ORM\Column(type: 'text', nullable: true)]
    private $description;

    #[ORM\ManyToOne(targetEntity: DamageClass::class)]
    private $lightMeleeClass;

    #[ORM\ManyToOne(targetEntity: DamageClass::class)]
    private $heavyMeleeClass;

    #[ORM\ManyToOne(targetEntity: AmmoType::class)]
    private $ammoType;

    #[ORM\ManyToOne(targetEntity: UnlockCondition::class, inversedBy: 'weapons')]
    private $unlockCondition;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $unlockRank;

    #[ORM\Column(type: 'text', nullable: true)]
    private $unlockDescription;

    public function __construct()
    {
        $this->legendaryWeaponSkins = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDamage(): ?int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): self
    {
        $this->damage = $damage;

        return $this;
    }

    public function getEffectiveRange(): ?int
    {
        return $this->effectiveRange;
    }

    public function setEffectiveRange(?int $effectiveRange): self
    {
        $this->effectiveRange = $effectiveRange;

        return $this;
    }

    public function getFireRate(): ?int
    {
        return $this->fireRate;
    }

    public function setFireRate(?int $fireRate): self
    {
        $this->fireRate = $fireRate;

        return $this;
    }

    public function getCycleTime(): ?int
    {
        return $this->cycleTime;
    }

    public function setCycleTime(?int $cycleTime): self
    {
        $this->cycleTime = $cycleTime;

        return $this;
    }

    public function getSpread(): ?float
    {
        return $this->spread;
    }

    public function setSpread(?float $spread): self
    {
        $this->spread = $spread;

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

    public function getVerticalRecoil(): ?float
    {
        return $this->verticalRecoil;
    }

    public function setVerticalRecoil(?float $verticalRecoil): self
    {
        $this->verticalRecoil = $verticalRecoil;

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

    public function getMuzzleVelocity(): ?int
    {
        return $this->muzzleVelocity;
    }

    public function setMuzzleVelocity(?int $muzzleVelocity): self
    {
        $this->muzzleVelocity = $muzzleVelocity;

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

    public function getStaminaConsumptionHeavy(): ?int
    {
        return $this->staminaConsumptionHeavy;
    }

    public function setStaminaConsumptionHeavy(?int $staminaConsumptionHeavy): self
    {
        $this->staminaConsumptionHeavy = $staminaConsumptionHeavy;

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

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

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

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return Collection<int, LegendaryWeaponSkin>
     */
    public function getLegendaryWeaponSkins(): Collection
    {
        return $this->legendaryWeaponSkins;
    }

    public function addLegendaryWeaponSkin(LegendaryWeaponSkin $legendaryWeaponSkin): self
    {
        if (!$this->legendaryWeaponSkins->contains($legendaryWeaponSkin)) {
            $this->legendaryWeaponSkins[] = $legendaryWeaponSkin;
            $legendaryWeaponSkin->setWeapon($this);
        }

        return $this;
    }

    public function removeLegendaryWeaponSkin(LegendaryWeaponSkin $legendaryWeaponSkin): self
    {
        if ($this->legendaryWeaponSkins->removeElement($legendaryWeaponSkin)) {
            // set the owning side to null (unless already changed)
            if ($legendaryWeaponSkin->getWeapon() === $this) {
                $legendaryWeaponSkin->setWeapon(null);
            }
        }

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

    public function getAmmoType(): ?AmmoType
    {
        return $this->ammoType;
    }

    public function setAmmoType(?AmmoType $ammoType): self
    {
        $this->ammoType = $ammoType;

        return $this;
    }

    public function getUnlockCondition(): ?UnlockCondition
    {
        return $this->unlockCondition;
    }

    public function setUnlockCondition(?UnlockCondition $unlockCondition): self
    {
        $this->unlockCondition = $unlockCondition;

        return $this;
    }

    public function getUnlockRank(): ?int
    {
        return $this->unlockRank;
    }

    public function setUnlockRank(?int $unlockRank): self
    {
        $this->unlockRank = $unlockRank;

        return $this;
    }

    public function getUnlockDescription(): ?string
    {
        return $this->unlockDescription;
    }

    public function setUnlockDescription(?string $unlockDescription): self
    {
        $this->unlockDescription = $unlockDescription;

        return $this;
    }
}
