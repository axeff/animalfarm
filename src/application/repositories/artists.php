<?php

/**
 *
 */
class Artists
{
  protected $artists;

  function __construct()
  {
    $this->artists = [
      [
        'name' => 'Aglaia',
        'link' => 'https://soundcloud.com/djane-aglaia',
      ],
      [
        'name' => 'Aki',
      ],
      [
        'name' => 'Bernstein Live',
        'link' => 'https://soundcloud.com/bernstein_musik',
      ],
      [
        'name' => 'Carli'
      ],
      [
        'name' => 'Bernard Schiffbruch',
        'link' => 'https://soundcloud.com/burnhard-1',
      ],
      [
        'name' => 'David José',
        'link' => 'https://soundcloud.com/dav-dmolina',
      ],
      [
        'name' => 'Don Lockwood',
        'link' => 'https://soundcloud.com/donlockwood79',
      ],
      [
        'name' => 'Franca',
        'link' => 'https://soundcloud.com/francaplays',
      ],
      [
        'name' => 'Kleintierschaukel',
        'link' => 'https://soundcloud.com/kleintierschaukel',
      ],
      [
        'name' => 'Landhouse & Raddantze',
        'link' => 'https://soundcloud.com/landhouse',
      ],
      [
        'name' => 'Lascha von Chapel',
        'link' => 'https://soundcloud.com/lashachapel',
      ],
      [
        'name' => 'Manel Cluny',
        'link' => 'soundcloud.com/manelcluny',
      ],
      [
        'name' => 'Marc Poppcke',
        'link' => 'https://soundcloud.com/marcpoppcke',
      ],
      [
        'name' => 'Max Ravenstein',
        'link' => 'https://soundcloud.com/maxravenstein',
      ],
      [
        'name' => 'Miguel Rodriguez + Tobi (Doyle Shepherd) + Steven Strahl',
        'link' => 'https://soundcloud.com/miguelrodriguez',
      ],
      [
        'name' => 'Nikkes',
        'link' => 'https://soundcloud.com/nikkeskoeln',
      ],
      [
        'name' => 'Niemand & Keiner + Sawatzki',
        'link' => 'https://soundcloud.com/niemandundkeiner',
      ],
      [
        'name' => 'Nig Näg & Häg Mäg',
        'link' => 'https://soundcloud.com/nignaeghaegmaeg',
      ],
      [
        'name' => 'Nils Twachtmann',
        'link' => 'https://soundcloud.com/nilstwachtmann',
      ],
      [
        'name' => 'Oliver Klostermann',
        'link' => 'https://soundcloud.com/oliver-klostermann',
      ],
      [
        'name' => 'Raphael Hofman',
        'link' => 'https://soundcloud.com/raphaelhofman',
      ],
      [
        'name' => 'Rolandson',
        'link' => 'https://soundcloud.com/rolandson',
      ],
      [
        'name' => 'Rusky',
        'link' => 'soundcloud.com/rusky',
      ],
      [
        'name' => 'Saar:erer',
        'link' => 'https://soundcloud.com/saarerer',
      ],
      [
        'name' => 'Sauerkraut',
        'link' => 'https://soundcloud.com/sauerkrautmusic',
      ],
      [
        'name' => 'Steffen Kirchhof + Band',
        'link' => 'https://soundcloud.com/steffenkirchhoff',
      ],
      [
        'name' => 'Te-eM',
        'link' => 'https://soundcloud.com/te-em-berlin',
      ],
      [
        'name' => 'TmO',
        'link' => 'https://soundcloud.com/tmo72',
      ],
      [
        'name' => 'Vruno Live',
        'link' => 'https://soundcloud.com/vrunomusic',
      ]
    ];
  }

  public function getAll()
  {
    return $this->artists;
  }
}
