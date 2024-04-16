<?php


namespace tests;
require_once __DIR__."/../src/MesDates.php";
use PHPUnit\Framework\TestCase;

final class MesDatesTest extends TestCase{
    public function testdemain(){
        $mesDates = new \UPJV\MesDates();
        $demain = $mesDates->demain();
        $Date = date('d-m-Y', strtotime('+1 day'));
        $Resultat= json_encode(['demain'=>$Date]);
        $this->assertEquals($Resultat,$demain);
    }
}