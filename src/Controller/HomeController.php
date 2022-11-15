<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        $questions = [
            [
              'title'=> 'Je suis une super question',
              'content' => 'Lorem ipsum dolor sit amet,
               consectetur adipisicing elit. Adipisci 
               alias amet at consequatur cumque eius
                eligendi esse harum, impedit incidunt 
                ipsum iste nesciunt perferendis quasi 
                sint, temporibus unde veniam voluptates!',
                'rating' => 20,
                'author' => [
                    'name' => 'Jeanne Valjean',
                    'avatar' => 'https://randomuser.me/api/portraits/women/79.jpg'
                ],
                'nbrOfResponse' => 15
            ],
            [
                'title'=> 'Je suis une belle question',
                'content' => 'Lorem ipsum dolor sit amet,
               consectetur adipisicing elit. Adipisci 
               alias amet at consequatur cumque eius
                eligendi esse harum, impedit incidunt 
                ipsum iste nesciunt perferendis quasi 
                sint, temporibus unde veniam voluptates!',
                'rating' => 10,
                'author' => [
                    'name' => 'Joe Nicolas',
                    'avatar' => 'https://randomuser.me/api/portraits/men/75.jpg'
                ],
                'nbrOfResponse' => 10
            ],
            [
                'title'=> 'Une nouvelle question',
                'content' => 'Lorem ipsum dolor sit amet,
               consectetur adipisicing elit. Adipisci 
               alias amet at consequatur cumque eius
                eligendi esse harum, impedit incidunt 
                ipsum iste nesciunt perferendis quasi 
                sint, temporibus unde veniam voluptates!',
                'rating' => -15,
                'author' => [
                    'name' => 'Casius Clay',
                    'avatar' => 'https://randomuser.me/api/portraits/men/59.jpg'
                ],
                'nbrOfResponse' => 19
            ],
            [
                'title'=> 'Encore une autre question',
                'content' => 'Lorem ipsum dolor sit amet,
               consectetur adipisicing elit. Adipisci 
               alias amet at consequatur cumque eius
                eligendi esse harum, impedit incidunt 
                ipsum iste nesciunt perferendis quasi 
                sint, temporibus unde veniam voluptates!',
                'rating' => 20,
                'author' => [
                    'name' => 'Chloé Duprés',
                    'avatar' => 'https://randomuser.me/api/portraits/women/22.jpg'
                ],
                'nbrOfResponse' => 18
            ],
            [
                'title'=> 'La question du jour',
                'content' => 'Lorem ipsum dolor sit amet,
               consectetur adipisicing elit. Adipisci 
               alias amet at consequatur cumque eius
                eligendi esse harum, impedit incidunt 
                ipsum iste nesciunt perferendis quasi 
                sint, temporibus unde veniam voluptates!',
                'rating' => 17,
                'author' => [
                    'name' => 'Félicia Dominguez',
                    'avatar' => 'https://randomuser.me/api/portraits/women/82.jpg',
                ],
                    'nbrOfResponse' => 12
            ],
            [
                'title'=> 'Je suis une super question',
                'content' => 'Lorem ipsum dolor sit amet,
               consectetur adipisicing elit. Adipisci 
               alias amet at consequatur cumque eius
                eligendi esse harum, impedit incidunt 
                ipsum iste nesciunt perferendis quasi 
                sint, temporibus unde veniam voluptates!',
                'rating' => 8,
                'author' => [
                    'name' => 'Patrick Dubois',
                    'avatar' => 'https://randomuser.me/api/portraits/men/11.jpg'
                ],
                'nbrOfResponse' => 15
            ]
        ];

       return $this->render('home/index.html.twig',[
           'questions' => $questions,
       ]);
    }
}
