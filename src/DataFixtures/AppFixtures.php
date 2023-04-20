<?php

namespace App\DataFixtures;
use App\Entity\Article;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $technos = [
            'PHP', 'Symfony', 'Doctrine', 'Twig', 'MySQL', 'JavaScript', 'React', 'Vue', 'Angular', 'NodeJS', 'HTML', 'CSS', 'Bootstrap', 'Tailwind', 'Sass', 'Less', 'jQuery', 'AJAX', 'JSON', 'XML', 'YAML', 'Markdown', 'Git', 'GitHub', 'GitLab', 'BitBucket', 'Composer', 'NPM', 'Webpack', 'Babel', 'Gulp', 'Grunt', 'Docker', 'Vagrant', 'Laravel', 'CodeIgniter', 'CakePHP', 'Zend', 'Slim', 'Phalcon', 'FuelPHP'
        ];

        

        // Boucle sur les notes
        for ($i=0; $i < count($technos); $i++) {
            $note = new Article();
            $note->setTitre('Ma note sur ' . $technos[$i])
            ->setDescription('Description de la note sur ' . $technos[$i])
            ->setImage('https://dummyimage.com/300x400/343a40/6c757d')
            ->setContenu('Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.')
            ->setCreatedAt(new \DateTimeImmutable('yesterday'));
            // Ajoute la note à la base de données
            $manager->persist($note);
        }

        $manager->flush();
    }
}
