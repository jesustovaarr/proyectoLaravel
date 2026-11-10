<?php

namespace App\Http\Controllers;

class GamesController extends Controller
{
  public function index()
    {
        $games = $this->getGames();
        $existenJuegos = count($games) > 0 ? true : false;
        return view('games.index', compact('games', 'existenJuegos'));
    }

    private function getGames()
    {
        return [
            ['id' => 1,'image'=>'https://tse1.mm.bing.net/th/id/OIP.Yy_JygXKg7k7ar46t7lrtQHaFj?r=0&rs=1&pid=ImgDetMain&o=7&rm=3', 'name' => 'The Legend of Zelda: Breath of the Wild', 'genre' => 'Action-adventure'],
            ['id' => 2,'image'=>'https://tse1.mm.bing.net/th/id/OIP.Yy_JygXKg7k7ar46t7lrtQHaFj?r=0&rs=1&pid=ImgDetMain&o=7&rm=3', 'name' => 'Super Mario Odyssey', 'genre' => 'Platformer'],
            ['id' => 3,'image'=>'https://tse1.mm.bing.net/th/id/OIP.Yy_JygXKg7k7ar46t7lrtQHaFj?r=0&rs=1&pid=ImgDetMain&o=7&rm=3', 'name' => 'Red Dead Redemption 2', 'genre' => 'Action-adventure'],
            ['id' => 4,'image'=>'https://tse1.mm.bing.net/th/id/OIP.Yy_JygXKg7k7ar46t7lrtQHaFj?r=0&rs=1&pid=ImgDetMain&o=7&rm=3', 'name' => 'The Witcher 3: Wild Hunt', 'genre' => 'Action RPG'],
            ['id' => 5,'image'=>'https://tse1.mm.bing.net/th/id/OIP.Yy_JygXKg7k7ar46t7lrtQHaFj?r=0&rs=1&pid=ImgDetMain&o=7&rm=3', 'name' => 'God of War', 'genre' => 'Action-adventure'],
        ];
    }
}