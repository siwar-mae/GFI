<?php

namespace App\DataFixtures;

use App\Entity\Equipment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class EquipmentFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        $equipment = new Equipment();
        $equipment->setReference('SN° K9P0180349');
        $equipment->setDesignation('Windows');
        $equipment->setNature('software');
        $equipment->setPrice(400.0);
        $manager->persist($equipment);
        $manager->flush();
        $equipment2 = new Equipment();
        $equipment2->setReference('SN° S9P0180229');
        $equipment2->setDesignation('Imprimante');
        $equipment2->setNature('hardware');
        $equipment2->setPrice(1200.0);
        $manager->persist($equipment2);
        $manager->flush();
    }
}
