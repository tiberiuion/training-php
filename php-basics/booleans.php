<?php

// Booleans

$skillLevel = 101; // Returns true.

// Test - uncomment the below variables and see what gets printed to the page.
// $skillLevel = 201;
// $skillLevel = 99;

$competentEnough =
  ($skillLevel >= 100) &&
  ($skillLevel <= 200);

  $notCompetentEnough =
  ($skillLevel <= 100) ||
  ($skillLevel >= 200);

var_dump($competentEnough);