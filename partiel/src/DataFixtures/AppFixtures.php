<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Advert;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;
class AppFixtures extends Fixture
{
    //Création des fixtures pour les deux tables.
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        //mail login role pass
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setEmail($faker->email);
            $user->setLogin($faker->domainWord);
            $user->setRole(['ROLE_USER']);
            $user->setPassword($faker->password);
        }
        $faker = Faker\Factory::create('fr_FR');
        //title descritpion city car_year nb_km nb_days price
        for ($i = 0; $i < 10; $i++) {
            $advert = new Advert();
            $advert->setTitle("Vente voiture");
            $advert->setDescription($faker->realText(255,2));
            $advert->setCity($faker->city);
            $advert->setCarYear($faker->date('Y','now'));
            $advert->setNbKm($faker->randomNumber(6,false));
            $advert->setNbDays($faker->randomNumber(3,false));
            $advert->setPrice($faker->randomFloat(6,100,NULL));
        }

        $manager->flush();
    }
}
