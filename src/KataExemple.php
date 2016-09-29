<?php
namespace wcs; // or your own namespace
class KataExemple
{
    public static function verlan($value)
    {
        $words = explode(" ", $value);
        $sentence = '';
        $vowels = ['a','e','i','o','u'];
        foreach ($words as $word){
            if (strlen($word) >= 6){
                $halfword = round(strlen($word)/2);
                $wordsplit = str_split($word,$halfword);
                $sentence .= ' ' . $wordsplit[1] . $wordsplit[0];
            }   else {
                $sentence .= ' ' .$word;
            }
    }
            return trim($sentence);
    }


    public static function action($value)
    {
        $array = array(0, 15 , 30 , 40 , "Advantage");
        $J1 = new Joueur;
        $J2 = new Joueur;


        for ($i = 0; $i < strlen($value); $i++) {
            if ($value[$i] == 1) {
                $J1->point++;
                if (($J1->point == 4 && $J2->point <=2) || $J1->point == 5 && $J2->point = 3) {
                    $J1->setJeu($J1, $J2);
                    if ($J1->jeu >= 6 && ($J1->jeu - $J2->jeu >= 2) ){
                        $J1->setSet($J1,$J2);
                    }
                    elseif ($J1->jeu == 7){
                        $J1->setSet($J1,$J2);
                    }
                } elseif ($J1->point == 4 && $J2->point == 4){
                    $J2->point = 3;
                    $J1->point = 3;
                }

            } else {
                $J2->point++;
                if (($J2->point == 4 && $J1->point <=2) || $J2->point == 5 && $J1->point = 3) {
                    $J2->setJeu($J1, $J2);
                    if ($J2->jeu >= 6 && ($J2->jeu - $J1->jeu >= 2) ){
                        $J2->setSet($J1,$J2);
                    }
                    elseif ($J2->jeu == 7){
                        $J2->setSet($J1,$J2);
                    }

                } elseif ($J2->point == 4 && $J1->point == 4){
                    $J2->point = 3;
                    $J1->point = 3;
                }
            }
        }

        $J1->ptennis = $array[$J1->point];
        $J2->ptennis = $array[$J2->point];
        return "$J1->set/$J2->set - $J1->jeu/$J2->jeu - $J1->ptennis/$J2->ptennis";


    }
}

class Joueur
{
    public $point = 0;
    public $ptennis = 0;
    public $jeu = 0;
    public $set = 0;

    /**
     * @return int
     */
    public function setJeu($j1, $j2)
    {
        $this->jeu++;
        $j1->point = 0;
        $j2->point = 0;
    }

    public function setSet($j1, $j2)
    {
        $this->set++;
        $j1->jeu = 0;
        $j2->jeu = 0;
        $j1->point = 0;
        $j2->point = 0;
    }
    public function match(){

    }
}


