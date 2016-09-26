<?php

namespace wcs; // or your own namespace

class KataExemple
{
    public static function action($value)
    {
        $array = array(0, 15, 30, 40);
        $ptj1 = 0;
        $ptj2 = 0;
        $jeuJ1 = 0;
        $jeuJ2 = 0;
        $setJ1 = 0;
        $setJ2 = 0;
        $adv1 = false;
        $adv2 = false;
        for ($i = 0; $i < strlen($value); $i++) {
            if ($value[$i] == 1) {
                $ptj1++;
                if ($ptj1 >= 4 ) {
                    if ($ptj2 <= 3){
                    $jeuJ1++;
                    $ptj1 = 0;
                    $ptj2 = 0;
                        if ($jeuJ1 >= 6 && ($jeuJ1 - $jeuJ2) >= 2 ){
                            $setJ1++;
                            $jeuJ1 = 0;
                            $jeuJ2 = 0;
                        }
                        elseif ($jeuJ1 == 7){
                            $setJ1++;
                            $jeuJ1 = 0;
                            $jeuJ2 = 0;
                        }
                    }
                    elseif ($ptj2 >= 4 && $adv1 = false && $adv2 = false){
                        $adv1 = true;

                    }
                    elseif ($ptj2 >= 4 && $adv1 = false && $adv2 = true){
                        $adv2 = false;

                    }
                    elseif ($ptj2 >= 4 && $adv1 = true && $adv2 = false){

                        $jeuJ1++;
                        $ptj1 = 0;
                        $ptj2 = 0;
                        $adv1 = false;
                            if ($jeuJ1 >= 6 && ($jeuJ1 - $jeuJ2 >= 2) ){
                                $setJ1++;
                                $jeuJ1 = 0;
                                $jeuJ2 = 0;
                            }
                            elseif ($jeuJ1 == 7){
                                $setJ1++;
                                $jeuJ1 = 0;
                                $jeuJ2 = 0;
                            }

                    }
                }


            } else {
                $ptj2++;
                if ($ptj2 >= 4 ) {
                    if ($ptj1 <= 3){
                        $jeuJ2++;
                        $ptj1 = 0;
                        $ptj2 = 0;
                            if ($jeuJ2 >= 6 && ($jeuJ2 - $jeuJ1 >= 2) ){
                                $setJ2++;
                                $jeuJ1 = 0;
                                $jeuJ2 = 0;
                            }
                            elseif ($jeuJ2 == 7){
                                $setJ2++;
                                $jeuJ1 = 0;
                                $jeuJ2 = 0;
                            }
                    }
                    elseif ($ptj1 >= 4 && $adv1 = false && $adv2 = false){
                        $adv2 = true;

                    }
                    elseif ($ptj1 >= 4 && $adv1 = true && $adv2 = false){
                        $adv1 = false;

                    }elseif ($ptj1 >= 4 && $adv1 = false && $adv2 = true){

                        $jeuJ2++;
                        $ptj1 = 0;
                        $ptj2 = 0;
                        $adv1 = false;
                            if ($jeuJ2 >= 6 && ($jeuJ2 - $jeuJ1 >= 2) ){
                                $setJ2++;
                                $jeuJ1 = 0;
                                $jeuJ2 = 0;
                            }
                            elseif ($jeuJ2 == 7){
                                $setJ2++;
                                $jeuJ1 = 0;
                                $jeuJ2 = 0;
                            }


                    }
                }
            }
        }
        $J1tennis = $array[$ptj1];
        $J2tennis = $array[$ptj2];
        return "$setJ1/$setJ2 - $jeuJ1/$jeuJ2 - $J1tennis/$J2tennis";
    }
}


