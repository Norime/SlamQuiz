<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class UserFixtures extends Fixture
{
    private $passwordEncoder;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
       
        // $product = new Product();
        // $manager->persist($product);
        $user->setEmail('test@gmail.com');
        $user->setRoles(['ROLE_USER']);
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            '$argon2id$v=19$m=65536,t=4,p=1$OC9PMEx6b0dTbjh2YnFMTQ$gkxL+XZJDvclt6o5DaKJvegQPXCSeDwc2P1QmzkeSN0'
        ));
        $manager->persist($user);

        $admin = new User();
            $admin->setEmail('test2@gmail.com');
            $admin->setRoles(['ROLE_ADMIN']);
            $admin->setPassword($this->passwordEncoder->encodePassword(
                $admin,
                '$argon2id$v=19$m=65536,t=4,p=1$OC9PMEx6b0dTbjh2YnFMTQ$gkxL+XZJDvclt6o5DaKJvegQPXCSeDwc2P1QmzkeSN0'
            ));
        $manager->persist($admin);

        $superadmin = new User();
            $superadmin->setEmail('test3@gmail.com');
            $superadmin->setRoles(['ROLE_SUPER_ADMIN']);
            $superadmin->setPassword($this->passwordEncoder->encodePassword(
                $superadmin,
                'a'//$argon2id$v=19$m=65536,t=4,p=1$OC9PMEx6b0dTbjh2YnFMTQ$gkxL+XZJDvclt6o5DaKJvegQPXCSeDwc2P1QmzkeSN0
            ));
        $manager->persist($superadmin);


        $manager->flush();
    }
}
