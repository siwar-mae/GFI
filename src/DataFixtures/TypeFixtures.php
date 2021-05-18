<?php

namespace App\DataFixtures;

use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class TypeFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        $type = new Type();
        $type->setDescription('Installation');
        $manager->persist($type);
        $manager->flush();
        $type2 = new Type();
        $type2->setDescription('Réglage');
        $manager->persist($type2);
        $manager->flush();
        $type3 = new Type();
        $type3->setDescription('Cablage');
        $manager->persist($type3);
        $manager->flush();


    }
}
