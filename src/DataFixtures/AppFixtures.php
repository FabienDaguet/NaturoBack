<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Users;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;
    
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    
        
    
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $generator = Faker\Factory::create("fr_FR");
        for ($i = 0; $i < 1; $i++){
            $user = new Users();
            $password = $this->encoder->encodePassword($user , 'password');
            $user
            ->setFirstName($generator->firstName())
            ->setLastName($generator->lastName)
            ->setEmail($generator->email)
            ->setPassword($password);
            $manager->persist($user);
        }
        $manager->flush();
    }
}
