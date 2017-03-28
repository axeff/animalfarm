<?php

/**
 *
 */
class Artists
{
  protected $artists;

  function __construct()
  {
    $this->artists = ['LOREM', 'IPSUM', 'DOLOR', 'SIT', 'AMET', 'CONSETETUR', 'SADIPSCING', 'LOREM', 'IPSUM', 'DOLOR', 'SIT', 'AMET', 'CONSETETUR', 'LOREM', 'IPSUM', 'DOLOR', 'SIT', 'AMET', 'CONSETETUR', 'SADIPSCING'];
  }

  public function getAll()
  {
    return $this->artists;
  }
}
