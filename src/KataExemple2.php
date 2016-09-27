<?php

namespace wcs; // or your own namespace

class KataExemple
{
    public static function action($value)
    {
        $j1 = new joueur();
        $j2 = new joueur();
        $array = array(0, 15, 30, 40, "Advantage");
        $adv1 = false;
        $adv2 = false;

        for ($i = 0; $i < strlen($value); $i++) {
            if ($value[$i] == 1) {
                $j1->point++;
                if ($j1->point >= 4 ) {
                    if ($j2->point <= 3){
                        $j1->setJeu($j1,$j2);
                        if ($j1->jeu >= 6 && ($j1->jeu - $j2->jeu) >= 2 ){
                            $j1->setSet($j1,$j2);
                        }
                        elseif ($j1->jeu == 7){
                            $j1->setSet($j1,$j2);
                        }
                    }
                    elseif ($j2->point >= 4 && $adv1 = false && $adv2 = false){
                        $adv1 = true;

                    }
                    elseif ($j2->point >= 4 && $adv1 = false && $adv2 = true){
                        $adv2 = false;

                    }
                    elseif ($j2->point >= 4 && $adv1 = true && $adv2 = false){

                        $j1->setJeu($j1,$j2);
                        $adv1 = false;
                        if ($j1->jeu >= 6 && ($j1->jeu - $j2->jeu >= 2) ){
                            $j1->setSet($j1,$j2);
                        }
                        elseif ($j1->jeu == 7){
                            $j1->setSet($j1,$j2);
                        }

                    }
                }

            } else {
                $j2->point++;
                if ($j2->point >= 4 ) {
                    if ($j1->point <= 3){
                        $j2->setJeu($j1,$j2);
                        if ($j2->jeu >= 6 && ($j2->jeu - $j1->jeu >= 2) ){
                            $j2->setSet($j1,$j2);
                        }
                        elseif ($j2->jeu == 7){
                            $j2->setSet($j1,$j2);
                        }
                    }
                    elseif ($j1->point >= 4 && $adv1 = false && $adv2 = false){
                        $adv2 = true;

                    }
                    elseif ($j1->point >= 4 && $adv1 = true && $adv2 = false){
                        $adv1 = false;

                    }elseif ($j1->point >= 4 && $adv1 = false && $adv2 = true){

                        $j2->setJeu($j1,$j2);
                        $adv1 = false;
                        if ($j2->jeu >= 6 && ($j2->jeu - $j1->jeu >= 2) ){
                            $j2->setSet($j1,$j2);
                        }
                        elseif ($j2->jeu== 7){
                            $j2->setSet($j1,$j2);
                        }


                    }
                }
            }
        }
        $j1->ptennis = $array[$j1->point];
        $j2->ptennis = $array[$j2->point];

        return "$j1->set/$j2->set - $j1->jeu/$j2->jeu - $j1->ptennis/$j2->ptennis";
    }
}


class joueur
{
    public $point = 0;
    public $ptennis = 0;
    public $jeu = 0;
    public $set = 0;

    /**
     * @return int
     */
    public function setJeu($j1,$j2)
    {
        $this->jeu++;
        $j1->point = 0;
        $j2->point = 0;
    }

    public function setSet($j1,$j2)
    {
        $this->set++;
        $j1->jeu = 0;
        $j2->jeu = 0;
        $j1->point = 0;
        $j2->point = 0;
    }



}