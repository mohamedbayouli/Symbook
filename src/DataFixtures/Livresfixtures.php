<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker\Factory;
use App\Entity\Livre;
use Doctrine\Persistence\ObjectManager;

class Livresfixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
            $faker = Factory::create('fr_FR');
            for($j=1;$j<=5;$j++){
                $categorie = new Categories();
                $libelle=$faker->name;
                $categorie->setLibelle($libelle)
                          ->setSlug(strtolower(str_replace(' ', '-', $libelle)))
                            ->setDescription($faker->text);
                $manager->persist($categorie);
        for ($i =1; $i<=20; $i++){

            $livre = new Livre();
            $titre=$faker->name();
            $livre->setTitre($titre);
            $livre->setSlug(strtolower(str_replace(' ', '-', $titre)));
            $livre->setImage('https://picsum.photos/200?id='.$i);
            $livre->setResume($faker->text);
            $livre->setEditeur($faker->name()); 
            $livre->setIsbn($faker->isbn13());
            $livre->setDateEdition($faker->dateTimeBetween('-6 months'));
            $livre->setPrix($faker->randomFloat(2, 10, 700));  
            $livre->setCat($categorie);
    
            $manager->persist($livre);
    
           }  }
           $manager->flush();
    }
}
