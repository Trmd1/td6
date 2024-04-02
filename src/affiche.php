<?php

/**
 * Affiches File Doc Comment
 * 
 * PHP version 8
 * 
 * @category Affiches
 * @package  Affiches
 * @author   Author <theo.rmd-perso@outlook.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/ 
 */

require_once "../src/MesDates.php";

$objDate = new \UPJV\MesDates();
echo $objDate->demain();
