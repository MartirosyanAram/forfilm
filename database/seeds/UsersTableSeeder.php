<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\FilmModel;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $films=[
            [
              'name'=>'THE FINAL ',
              'images'=>" /film/nk1.jpg",
              'comment'=>'The Final is a 2010 American horror film written by Jason Kabolati,
                           directed by Joey Stewart, and starring Jascha Washington, Julin,
                            Justin S. Arnold, Lindsay Seidel, Marc Donato, Laura Ashley Samuels,
                            Ryan Hayden, and Travis Tedford.',
               ],
             [
              'name'=>'RUBEJ ',
              'images'=>" /film/nk2.jpg",
              'comment'=>'The main character of the film is a successful businessman Mikhail.
                          In his life he achieved a lot, but turned into a cynical person, who is
                           alien to any manifestation of feelings. The hero is quite satisfied that
                           next to him there is no beloved woman',

              ],
             [
              'name'=>'VURDALAKI',
              'images'=>"/film/nk3.jpg",
              'comment'=>'Russia, the 18th century. On the edge of Russia,in the Carpathian
                          tands the Spassky Monastery,  where the confessorof Empress Elizabeth
                          Petersburg, no one knew. And the land in which he was exiled,
                          Monk Laurus was  Monk Laurus Empress Elizabeth  Mountains,',
                ],
             [
                'name'=>'AKSEL',
               'images'=>"/film/nk4.jpg",
               'comment'=>"Teenager Miles accidentally finds a high-tech military becomattached
                           robocopy named A-X-L.Endowed with advanced artificial    attached
                           intelligence and a good dogs heart, the dog immediately
                           becomes attached to Miles to the great wrath of the scientists who  ",
              ],
              [
               'name'=>'BRIGHT   ',
                'images'=>"/film/nk5.jpg",
                'comment'=>'Bright is a 2017 American urban fantasy crime film directed by David
                            Ayer and written by Max Landis.[2][3] The film stars Will Smith as a Los
                            Police   Department police officer who teams  up with an orc rookie police
                             officer (Joel Edgerton) in a world of both human ',
                ],
             [
                'name'=>' Lego',
                 'images'=>" /film/nk6.jpg",
                 'comment'=>'Bright is a 2017 American urban fantasy crime film directed by David
                             Ayer and written by Max Landis.[2][3] The film stars Will Smith as a Los
                             Police   Department police officer who teams  up with an orc rookie police
                              officer (Joel Edgerton) in a world of both human ',
               ],
              [
                'name'=>'Neboskryob',
                'images'=>" /film/nk7.jpg",
                'comment'=>'Bright is a 2017 American urban fantasy crime film directed by David
                            Ayer and written by Max Landis.[2][3] The film stars Will Smith as a Los
                            Police   Department police officer who teams  up with an orc rookie police
                             officer (Joel Edgerton) in a world of both human ',

                 ],
                [
                  'name'=>'Legion ',
                  'images'=>" /film/nk8.jpg",
                  'comment'=>'Bright is a 2017 American urban fantasy crime film directed by David
                              Ayer and written by Max Landis.[2][3] The film stars Will Smith as a Los
                              Police   Department police officer who teams  up with an orc rookie police
                               officer (Joel Edgerton) in a world of both human ',
                 ],
                 [
                  'name'=>'Terminator 2 ',
                  'images'=>" /film/nk9.jpg",
                  'comment'=>'Bright is a 2017 American urban fantasy crime film directed by David
                              Ayer and written by Max Landis.[2][3] The film stars Will Smith as a Los
                              Police   Department police officer who teams  up with an orc rookie police
                               officer (Joel Edgerton) in a world of both human ',
                  ],

                [
                   'name'=>'KIBORGI ',
                    'images'=>"/film/nk10.jpg",
                    'comment'=>'Bright is a 2017 American urban fantasy crime film directed by David
                                Ayer and written by Max Landis.[2][3] The film stars Will Smith as a Los
                                Police   Department police officer who teams  up with an orc rookie police
                                 officer (Joel Edgerton) in a world of both human ',
                   ],
                  [
                   'name'=>'PODDUBNIY ',
                    'images'=>" /film/nk11.jpg",
                    'comment'=>'Bright is a 2017 American urban fantasy crime film directed by David
                                Ayer and written by Max Landis.[2][3] The film stars Will Smith as a Los
                                Police   Department police officer who teams  up with an orc rookie police
                                 officer (Joel Edgerton) in a world of both human ',
                    ],
                   [
                    'name'=>'TANKI',
                    'images'=>" /film/nk12.jpg",
                    'comment'=>'Bright is a 2017 American urban fantasy crime film directed by David
                                Ayer and written by Max Landis.[2][3] The film stars Will Smith as a Los
                                Police   Department police officer who teams  up with an orc rookie police
                                 officer (Joel Edgerton) in a world of both human ',
                   ],

                  [
                    'name'=>'BRATYA IZ GRIMBSI',
                    'images'=>" /film/nk13.jpg",
                    'comment'=>'Bright is a 2017 American urban fantasy crime film directed by David
                                Ayer and written by Max Landis.[2][3] The film stars Will Smith as a Los
                                Police   Department police officer who teams  up with an orc rookie police
                                 officer (Joel Edgerton) in a world of both human ',
                  ],
                  [
                    'name'=>'MALONE',
                    'images'=>"/film/nk14.jpg",
                    'comment'=>'Bright is a 2017 American urban fantasy crime film directed by David
                                Ayer and written by Max Landis.[2][3] The film stars Will Smith as a Los
                                Police   Department police officer who teams  up with an orc rookie police
                                 officer (Joel Edgerton) in a world of both human ',
                  ],
                  [
                    'name'=>'DIVISION',
                    'images'=>"/film/nk15.jpg",
                    'comment'=>'Bright is a 2017 American urban fantasy crime film directed by David
                                Ayer and written by Max Landis.[2][3] The film stars Will Smith as a Los
                                Police   Department police officer who teams  up with an orc rookie police
                                 officer (Joel Edgerton) in a world of both human ',
                   ],

];

     foreach ($films as $film) {
           $fil= App\FilmModel::firstOrCreate($film);
       }


      }
    }
