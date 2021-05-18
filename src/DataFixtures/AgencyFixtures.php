<?php

namespace App\DataFixtures;

use App\Entity\Agency;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AgencyFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        $agency = new Agency();
        $agency->setCode(122);
        $agency->setAddress('El Mourouj');
        $agency->setName('Agence El Mourouj');
        $manager->persist($agency);
        $manager->flush();
        $agency2 = new Agency();
        $agency2->setCode(118);
        $agency2->setAddress('Sousse');
        $agency2->setName('Agence Sousse 2');
        $manager->persist($agency2);
        $manager->flush();
    }
}
