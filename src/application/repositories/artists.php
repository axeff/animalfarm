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
        'name' => 'Miguel Rodriguez & Doyle Shepherd & Steven Strahl',
        'link' => 'https://soundcloud.com/miguelrodriguez',
      ],
      [
        'name' => 'Bernard Schiffbruch',
        'link' => 'https://soundcloud.com/burnhard-1',
      ],
      [
        'name' => 'Landhouse & Raddantze',
        'link' => 'https://soundcloud.com/landhouse',
      ],
      [
        'name' => 'Kleintierschaukel',
        'link' => 'https://soundcloud.com/kleintierschaukel',
      ],
      [
        'name' => 'Steven Strahl',
        'link' => 'https://soundcloud.com/miguelrodriguez',
      ],
      [
        'name' => 'Bernard Schiffbruch',
        'link' => 'https://soundcloud.com/burnhard-1',
      ],
      [
        'name' => 'Landhouse & Raddantze',
        'link' => 'https://soundcloud.com/landhouse',
      ],
      [
        'name' => 'Kleintierschaukel',
        'link' => 'https://soundcloud.com/kleintierschaukel',
      ],
      [
        'name' => 'Miguel Rodriguez & Doyle Shepherd & Steven Strahl',
        'link' => 'https://soundcloud.com/miguelrodriguez',
      ],
      [
        'name' => 'Bernard Schiffbruch',
        'link' => 'https://soundcloud.com/burnhard-1',
      ],
      [
        'name' => 'Landhouse & Raddantze',
        'link' => 'https://soundcloud.com/landhouse',
      ],
      [
        'name' => 'Kleintierschaukel',
        'link' => 'https://soundcloud.com/kleintierschaukel',
      ],
    ];
  }

  public function getAll()
  {
    return $this->artists;
  }
}
