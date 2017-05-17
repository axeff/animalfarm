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
        'name' => 'aem.aze [defaultbox]',
        'link' => 'https://soundcloud.com/aemaze',
      ],
      [
        'name' => 'Aglaia [Springstoff]',
        'link' => 'https://soundcloud.com/djane-aglaia',
      ],
      [
        'name' => 'Aki [Animal Farm]',
      ],
      [
        'name' => 'burnhard [Rummel I Schiffbruch]',
        'link' => 'https://soundcloud.com/burnhard-1',
      ],
      [
        'name' => 'Bernstein [Arche Musik I Amselcom]',
        'link' => 'https://soundcloud.com/bernstein_musik',
      ],
      [
        "name" => "Betreutesträumen [Berlin]",
        "link" => "https://soundcloud.com/betreutestraeumen",
      ],
      [
        'name' => 'Carli [Animal Farm]'
      ],
      // [
      //   'name' => 'Bernard Schiffbruch',
      //   'link' => 'https://soundcloud.com/burnhard-1',
      // ],
      [
        'name' => 'Carlo Capello',
        'link' => 'https://soundcloud.com/carlocapello',
      ],
      [
        'name' => 'David José & Christian Manuel [Zwischenmiete I Klickklackklub]',
        'link' => 'https://soundcloud.com/dav-dmolina',
      ],
      [
        'name' => 'Don Lockwood [Animal Farm]',
        'link' => 'https://soundcloud.com/donlockwood79',
      ],
      [
        'name' => 'Elo [Live-Rap]',
        'link' => 'https://soundcloud.com/followelo',
      ],
      [
        'name' => 'Franca [Feines Tier I W.I.R Schwestern]',
        'link' => 'https://soundcloud.com/francaplays',
      ],
      [
        'name' => 'Frau Kaufmann [Berlin]',
        'link' => 'https://soundcloud.com/frau-kaufmann',
      ],
      [
        "name" => "Jackie Houser-Brown [W.I.R Schwestern]",
        "link" => "https://soundcloud.com/cocokillachemistry",
      ],
      [
        "name" => "Jay Amba & Martin Ka [Zwischenmiete]",
        "link" => "https://soundcloud.com/jayamba",
      ],
      [
        "name" => "Just Emma [underyourskin]",
        "link" => "https://soundcloud.com/justemmaoffical",
      ],
      [
        'name' => 'Kleintierschaukel [Laut & Luise]',
        'link' => 'https://soundcloud.com/kleintierschaukel',
      ],
      [
        'name' => 'Landhouse & Raddantze [Seasidetrip I Serafin Audio]',
        'link' => 'https://soundcloud.com/landhouse',
      ],
      [
        'name' => 'Lascha von Chapel [Tbilisi]',
        'link' => 'https://soundcloud.com/lashachapel',
      ],
      [
        'name' => 'Manel Cluny [Animal Farm I Dazed State]',
        'link' => 'https://soundcloud.com/manelcluny',
      ],
      [
        'name' => 'Marc Poppcke [Crossfrontier Audio]',
        'link' => 'https://soundcloud.com/marcpoppcke',
      ],
      [
        "name" => "Martin Anacker [tanz+klangkombinat]",
        "link" => "https://soundcloud.com/martin-anacker",
      ],
      [
        "name" => "Marvin Hey [Sisyphos]",
        "link" => "https://soundcloud.com/marvinhey",
      ],
      [
        'name' => 'Miguel Rodriguez + Tobi (Doyle Shepherd) + Steven Strahl [Golden Times]',
        'link' => 'https://soundcloud.com/miguelrodriguez',
      ],
      [
        "name" => "Moji Tali [Rebellion der Träumer I Akasha]",
        "link" => "https://soundcloud.com/moji-taali",
      ],
      [
        "name" => "Mr Pinc [Live-Rap]",
        "link" => "https://mrpinc.bandcamp.com/releases",
      ],
      [
        'name' => 'Niemand & Keiner + Sawatzki [Rummel I Animal Farm I tanz + klangkombinat I Schiffbruch]',
        'link' => 'https://soundcloud.com/niemandundkeiner',
      ],
      [
        'name' => 'Nig Näg & Häg Mäg [Zwischenmiete]',
        'link' => 'https://soundcloud.com/nignaeghaegmaeg',
      ],
      [
        'name' => 'Nils Twachtmann [Crossfrontier Audio, Bar 25]',
        'link' => 'https://soundcloud.com/nilstwachtmann',
      ],
      [
        'name' => 'Oliver Klostermann [Live Set]',
        'link' => 'https://soundcloud.com/oliver-klostermann',
      ],
      [
        'name' => 'Raphael Hofman [Jeudi Records I Save Room I Wuza]',
        'link' => 'https://soundcloud.com/raphaelhofman',
      ],
      [
        'name' => 'Rolandson [Seasidetrip | Rituel Recording | Slowereastside | Drossel]',
        'link' => 'https://soundcloud.com/rolandson',
      ],
      [
        'name' => 'Rusky [Animal Farm I Dazed State]',
        'link' => 'http://soundcloud.com/rusky',
      ],
      [
        'name' => 'Saar:erer [Animal Farm I THC Franziskaner]',
        'link' => 'https://soundcloud.com/saarerer',
      ],
      [
        'name' => 'Sauerkraut [NE]',
        'link' => 'https://soundcloud.com/sauerkrautmusic',
      ],
      [
        "name" => "Stas Kolbass [Mehr tanzen!]",
        "link" => "https://soundcloud.com/staskolbass",
      ],
      [
        'name' => 'Steffen Kirchhof [Ki Records I Serafin]',
        'link' => 'https://soundcloud.com/steffenkirchhoff',
      ],
      [
        'name' => 'Vruno  [Nomade]',
        'link' => 'https://soundcloud.com/vrunomusic',
      ]
    ];
  }

  public function getAll()
  {
    return $this->artists;
  }
}
