<?php
    function generaGrande($valJug1,$valJug2){
        print "GRANDE: ";

        for($i=count($valJug1)-1; $i>=0; $i--){
            if($i==11){
                if($valJug1[$i] + $valJug1[2] == $valJug2[$i] + $valJug2[2]){
                    continue;
                }
                else if($valJug1[$i] + $valJug1[2] > $valJug2[$i] + $valJug2[2]){
                    print "gana el jugador 1";
                    break;
                }
                else if($valJug2[$i] + $valJug2[2] > $valJug1[$i] + $valJug1[2]){
                    print "gana el jugador 2";
                    break;
                }
            }
            else if($i==2){ }
            else if($i==0){
                if($valJug1[11] == $valJug2[11]){
                    print "empate";
                }
                else if($valJug1[11] > $valJug2[11]){
                    print "gana el jugador 1";
                    break;
                }
                else if($valJug2[11] > $valJug1[11]){
                    print "gana el jugador 2";
                    break;
                }
            }
            else{
                if($valJug1[$i] == $valJug2[$i]){
                    continue;
                }
                else if($valJug1[$i] > $valJug2[$i]){
                    print "gana el jugador 1";
                    break;
                }
                else if($valJug2[$i] > $valJug1[$i]){
                    print "gana el jugador 2";
                    break;
                }
            }
        }
    }

    function generaChica($valJug1,$valJug2){
        print "<br>CHICA: ";
        
        for($i=0; $i<count($valJug1); $i++){
            if($i==11){
                if($valJug1[$i] + $valJug1[2] == $valJug2[$i] + $valJug2[2]){
                    print "empate";
                }
                else if($valJug1[$i] + $valJug1[2] > $valJug2[$i] + $valJug2[2]){
                    print "gana el jugador 1";
                    break;
                }
                else if($valJug2[$i] + $valJug2[2] > $valJug1[$i] + $valJug1[2]){
                    print "gana el jugador 2";
                    break;
                }
            }
            else if($i==2){ }
            else{
                if($valJug1[$i] == $valJug2[$i]){
                    continue;
                }
                else if($valJug1[$i] > $valJug2[$i]){
                    print "gana el jugador 1";
                    break;
                }
                else if($valJug2[$i] > $valJug1[$i]){
                    print "gana el jugador 2";
                    break;
                }
            }
        }
    }

    function generaPares($valJug1,$valJug2){
        print "<br>PARES: ";

        //DUPLES (4= ó 2 parejas)
        if(tiene($valJug1, 4) > 0 || tiene($valJug2, 4) > 0 || tiene($valJug1, 2) > 1 || tiene($valJug2, 2) > 1){
            if(tiene($valJug1, 4) > 0 && tiene($valJug2, 4) == 0 || tiene($valJug1, 2) > 1 && tiene($valJug2, 2) < 2){
                print "gana jugador 1 por 'dupla'";
            }
            else if(tiene($valJug2, 4) > 0 && tiene($valJug1, 4) == 0 || tiene($valJug2, 2) > 1 && tiene($valJug1, 2) < 2){
                print "gana jugador 2 por 'dupla'";
            }
            else if(tieneEsp($valJug1, 4) > 0 && tieneEsp($valJug2, 4) > 0 ){
                if(array_search(4, $valJug1) == array_search(4, $valJug2)){
                    print "empate";
                }
                else if(array_search(4, $valJug1) > array_search(4, $valJug2)){
                    print "gana el jugador 1 por 'dupla'";
                }
                else{
                    print "gana el jugador 2 por 'dupla'";
                }
            }
            else if(tieneEsp($valJug1, 2) > 1 && tieneEsp($valJug2, 2) > 1 ){
                for($i=count($valJug1)-1; $i>=0; $i--){
                    if($i==11){
                        if($valJug1[$i] + $valJug1[2] == 2 && $valJug2[$i] + $valJug2[2] == 2){
                            continue;
                        }
                        else if($valJug1[$i] + $valJug1[2] == 2){
                            print "gana el jugador 1 por 'medias'";
                            break;
                        }
                        else if($valJug2[$i] + $valJug2[2] == 2){
                            print "gana el jugador 2 por 'medias'";
                            break;
                        }
                    }
                    else if($i==2){ }
                    else if($i==0){ 
                        if($valJug1[$i] == 2 && $valJug2[$i] == 2){
                            print "empate";
                        }
                        else if($valJug1[$i] == 2){
                            print "gana el jugador 1 por 'medias'";
                            break;
                        }
                        else if($valJug2[$i] == 2){
                            print "gana el jugador 2 por 'medias'";
                            break;
                        }
                    }
                    else{
                        if($valJug1[$i] == 2 && $valJug2[$i] == 2){
                            continue;
                        }
                        else if($valJug1[$i] == 2){
                            print "gana el jugador 1 por 'medias'";
                            break;
                        }
                        else if($valJug2[$i] == 2){
                            print "gana el jugador 2 por 'medias'";
                            break;
                        }
                    }
                }
            }
        }
        //MEDIAS (3=)
        else if(tiene($valJug1, 3) > 0 || tiene($valJug2, 3) > 0){
            for($i=count($valJug1)-1; $i>=0; $i--){
                if($i==11){
                    if($valJug1[$i] + $valJug1[2] == 3 && $valJug2[$i] + $valJug2[2] == 3){
                        continue;
                    }
                    else if($valJug1[$i] + $valJug1[2] == 3){
                        print "gana el jugador 1 por 'medias'";
                        break;
                    }
                    else if($valJug2[$i] + $valJug2[2] == 3){
                        print "gana el jugador 2 por 'medias'";
                        break;
                    }
                }
                else if($i==2){ }
                else{
                    if($valJug1[$i] == 3 && $valJug2[$i] == 3){
                        continue;
                    }
                    else if($valJug1[$i] == 3){
                        print "gana el jugador 1 por 'medias'";
                        break;
                    }
                    else if($valJug2[$i] == 3){
                        print "gana el jugador 2 por 'medias'";
                        break;
                    }
                }
            }
        }
        //PAREJA (2=)
        else if(tiene($valJug1, 2) > 0 || tiene($valJug2, 2) > 0){
            for($i=count($valJug1)-1; $i>=0; $i--){
                if($i==11){
                    if($valJug1[$i] + $valJug1[2] == 2 && $valJug2[$i] + $valJug2[2] == 2){
                        print "empate";
                    }
                    else if($valJug1[$i] + $valJug1[2] == 2){
                        print "gana el jugador 1 por 'pareja'";
                        break;
                    }
                    else if($valJug2[$i] + $valJug2[2] == 2){
                        print "gana el jugador 2 por 'pareja'";
                        break;
                    }
                }
                else if($i==2){ }
                else{
                    if($valJug1[$i] == 2 && $valJug2[$i] == 2){
                        print "empate";
                    }
                    else if($valJug1[$i] == 2){
                        print "gana el jugador 1 por 'pareja'";
                        break;
                    }
                    else if($valJug2[$i] == 2){
                        print "gana el jugador 2 por 'pareja'";
                        break;
                    }
                }
            }
        }
        else{
            print "no gana nadie en la apuesta a 'pares'";
        }
    }


    function generaJuego($cartasEnMesa1,$cartasEnMesa2){
        print "<br>JUEGO: ";

        $puntosClave = [ 31, 32, 40, 37, 36, 35, 34, 33 ];

        $puntos1 = $cartasEnMesa1[0]['valor'] + $cartasEnMesa1[1]['valor'] + $cartasEnMesa1[2]['valor'] + $cartasEnMesa1[3]['valor'];
        $puntos2 = $cartasEnMesa2[0]['valor'] + $cartasEnMesa2[1]['valor'] + $cartasEnMesa2[2]['valor'] + $cartasEnMesa2[3]['valor'];
        
        $posicion1 = array_search($puntos1, $puntosClave);
        $posicion2 = array_search($puntos2, $puntosClave);

        if($puntos1 >= $puntosClave[0] && $puntos2 < $puntosClave[0]){
            print "gana jugador 1 con $puntos1 puntos";
        }
        else if($puntos2 >= $puntosClave[0] && $puntos1 < $puntosClave[0]){
            print "gana jugador 2 con $puntos2 puntos";
        }
        else if($puntos1 < $puntosClave[0] && $puntos2 < $puntosClave[0]){
            print "no gana nadie ya que nadie supera los {$puntosClave[0]} puntos";
        }
        else if($puntos1 >= $puntosClave[0] && $puntos2 >= $puntosClave[0]){
            if ($posicion1 !== false && $posicion2 !== false) {
                if ($posicion1 < $posicion2) {
                    echo "gana jugador 1 con $puntos1 puntos";
                } elseif ($posicion2 < $posicion1) {
                    echo "gana jugador 2 con $puntos2 puntos";
                } else {
                    echo "empate";
                }
            }
        }
    }

    function tiene($array,$valorBuscar){
        $cont = 0;

        $array[2] += $array[count($array)-1];

        for($i=0;$i<count($array);$i++){
            if($i==11){}
            else if($array[$i] == $valorBuscar){
                $cont++;
            }
        }
        return $cont;
    }

    function tieneEsp($array,$valorBuscar){
        $cont = 0;

        for($i=0;$i<count($array);$i++){
            if($array[$i] == $valorBuscar){
                $cont++;
            }
        }
        return $cont;
    }
?>