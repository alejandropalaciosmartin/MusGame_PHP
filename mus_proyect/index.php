<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUS</title>
    <style>
        body { background-color: #6fa5ab; }
        img { transition: transform 0.5s; padding: 5px;}
        img:hover { transform: scale(1.2); }
        p { text-align: center; line-height: 1.5;}
        .titulo { background-color: #dbe36f; border-radius: 5px; padding: 5px;}
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: 2px solid #0056b3;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s; 
        }
        input[type="submit"]:hover { background-color: #0056b3; color: #fff; }

    </style>
</head>
<body>
    <?php
        include 'functions.php';

        $cartas = [
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-1-minimalart.png","valor" => "1", "palo" => "oro", "numero" => "1"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-2-minimalart.png","valor" => "1", "palo" => "oro", "numero" => "2"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-3-minimalart.png","valor" => "10", "palo" => "oro", "numero" => "3"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-4-minimalart.png","valor" => "4", "palo" => "oro", "numero" => "4"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-5-minimalart.png","valor" => "5", "palo" => "oro", "numero" => "5"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-6-minimalart.png","valor" => "6", "palo" => "oro", "numero" => "6"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-7-minimalart.png","valor" => "7", "palo" => "oro", "numero" => "7"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-10-minimalart.png","valor" => "10", "palo" => "oro", "numero" => "10"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-11-minimalart.png","valor" => "10", "palo" => "oro", "numero" => "11"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-oros-12-minimalart.png","valor" => "10", "palo" => "oro", "numero" => "12"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-1-minimalart.png","valor" => "1", "palo" => "espadas", "numero" => "1"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-2-minimalart.png","valor" => "1", "palo" => "espadas", "numero" => "2"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-3-minimalart.png","valor" => "10", "palo" => "espadas", "numero" => "3"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-4-minimalart.png","valor" => "4", "palo" => "espadas", "numero" => "4"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-5-minimalart.png","valor" => "5", "palo" => "espadas", "numero" => "5"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-6-minimalart.png","valor" => "6", "palo" => "espadas", "numero" => "6"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-7-minimalart.png","valor" => "7", "palo" => "espadas", "numero" => "7"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-10-minimalart.png","valor" => "10", "palo" => "espadas", "numero" => "10"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-11-minimalart.png","valor" => "10", "palo" => "espadas", "numero" => "11"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-espadas-12-minimalart.png","valor" => "10", "palo" => "espadas", "numero" => "12"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-1-minimalart.png","valor" => "1", "palo" => "copas", "numero" => "1"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-2-minimalart.png","valor" => "1", "palo" => "copas", "numero" => "2"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-3-minimalart.png","valor" => "10", "palo" => "copas", "numero" => "3"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-4-minimalart.png","valor" => "4", "palo" => "copas", "numero" => "4"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-5-minimalart.png","valor" => "5", "palo" => "copas", "numero" => "5"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-6-minimalart.png","valor" => "6", "palo" => "copas", "numero" => "6"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-7-minimalart.png","valor" => "7", "palo" => "copas", "numero" => "7"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-10-minimalart.png","valor" => "10", "palo" => "copas", "numero" => "10"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-11-minimalart.png","valor" => "10", "palo" => "copas", "numero" => "11"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-copas-12-minimalart.png","valor" => "10", "palo" => "copas", "numero" => "12"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-1-minimalart.png","valor" => "1", "palo" => "bastos", "numero" => "1"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-2-minimalart.png","valor" => "1", "palo" => "bastos", "numero" => "2"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-3-minimalart.png","valor" => "10", "palo" => "bastos", "numero" => "3"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-4-minimalart.png","valor" => "4", "palo" => "bastos", "numero" => "4"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-5-min.png","valor" => "5", "palo" => "bastos", "numero" => "5"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-6-min.png","valor" => "6", "palo" => "bastos", "numero" => "6"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-7-min.png","valor" => "7", "palo" => "bastos", "numero" => "7"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-10-minimalart.png","valor" => "10", "palo" => "bastos", "numero" => "10"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-11-minimalart.png","valor" => "10", "palo" => "bastos", "numero" => "11"],
            ["imagen" => "https://asart.com.ar/wp-content/uploads/2020/02/asart-naipes-bastos-12-minimalart.png","valor" => "10", "palo" => "bastos", "numero" => "12"]
        ];
    ?>
    <form method="post">
        <!--CARTAS DEL PRIMER JUGADOR-->
        <p id="jugador1">
            <span class="titulo"><b>JUGADOR 1</b></span>
            <?php
                if (isset($_POST['generar_cartas'])) {
                    print "<br>";
                    $cartasEnMesa1 = [];
                    $cartasJugadores = $cartas;
                    for($i=0;$i<4;$i++){
                        $num = rand(0,count($cartasJugadores)-1);
                        print "<img src={$cartasJugadores[$num]["imagen"]} width=125px>";
                        $cartasEnMesa1[] = $cartasJugadores[$num];
                        unset($cartasJugadores[$num]);
                        $cartasJugadores = array_values($cartasJugadores);
                    }
                }
                else{
                    print "<br>";
                    $cartasEnMesa1 = [];
                    $cartasJugadores = $cartas;
                    for($i=0;$i<4;$i++){
                        $num = rand(0,count($cartasJugadores)-1);
                        print "<img src={$cartasJugadores[$num]["imagen"]} width=125px>";
                        $cartasEnMesa1[] = $cartasJugadores[$num];
                        unset($cartasJugadores[$num]);
                        $cartasJugadores = array_values($cartasJugadores);
                    }
                }
            ?>
        </p>

        <!--CARTAS DEL SEGUNDO JUGADOR-->
        <p id="jugador2">
            <span class="titulo"><b>JUGADOR 2</b></span>
            <?php
                if (isset($_POST['generar_cartas'])) {
                    print "<br>";
                    $cartasEnMesa2 = [];
                    for($i=0;$i<4;$i++){
                        $num = rand(0,count($cartasJugadores)-1);
                        print "<img src={$cartasJugadores[$num]["imagen"]} width=125px>";
                        $cartasEnMesa2[] = $cartasJugadores[$num];
                        unset($cartasJugadores[$num]);
                        $cartasJugadores = array_values($cartasJugadores);
                    }
                }
                else{
                    print "<br>";
                    $cartasEnMesa2 = [];
                    for($i=0;$i<4;$i++){
                        $num = rand(0,count($cartasJugadores)-1);
                        print "<img src={$cartasJugadores[$num]["imagen"]} width=125px>";
                        $cartasEnMesa2[] = $cartasJugadores[$num];
                        unset($cartasJugadores[$num]);
                        $cartasJugadores = array_values($cartasJugadores);
                    }
                }
            ?>
        </p>
        <p><input type="submit" name="generar_cartas" value="Generar Nuevas Cartas"></p>
    </form>

    <p>
    <!--METEMOS EN UN ARRAY EL NUMERO DE CARTAS QUE TIENE CADA JUGADOR AGRUPADOS POR EL NUMERO DE CARTA-->
    <?php
        $valJug1 = [0,0,0,0,0,0,0,0,0,0,0,0];
        $valJug2 = [0,0,0,0,0,0,0,0,0,0,0,0];

        for($i=0;$i<4;$i++){
            $valJug1[$cartasEnMesa1[$i]["numero"]-1] += 1;
            $valJug2[$cartasEnMesa2[$i]["numero"]-1] += 1;
        }

        //JUGADA 'GRANDE'
        generaGrande($valJug1,$valJug2);

        //JUGADA 'CHICA'
        generaChica($valJug1,$valJug2);

        //JUGADA 'PARES'
        generaPares($valJug1,$valJug2);

        //JUGADA 'JUEGO'
        generaJuego($cartasEnMesa1,$cartasEnMesa2);
    ?>
    </p>
</body>
</html>