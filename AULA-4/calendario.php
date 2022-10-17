<?php

    $hoje = date("H");
    $msg = "";

    if ($hoje >= 0 && $hoje < 12) {
        
        $msg = "Bom dia";

    }else if($hoje >= 12 && $hoje < 18) {

        $msg = "Boa tarde";

    } else {
        
        $msg = "Boa noite";

    };

?>

<?php
    
    $month = date("F");
    $mes = "";

    if ($mouth == "January") {

        $mes = "Janeiro";

    } else if ($month == "February") {

        $mes = "Fevereiro";

    } else if ($month == "March") {

        $mes = "Março";

    } else if ($month == "April") {

        $mes = "Abril";

    } else if ($month == "May") {

        $mes = "Maio";

    } else if ($month == "June") {

        $mes = "Junho";

    } else if ($month == July) {

        $mes = "Julho";

    } else if == "August" {

        $mes = "Agosto";

    } else if ($month == "September") {

        $mes = "Setembro";

    } else if ($month == "October") {

        $mes = "Outubro";

    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calendario</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <h1>Calendário</h1>

    <h2>Estamos em <?php echo date("Y"); ?></h2>

    <h3><?php echo $msg ."! Agora são ".date('H')." horas e ".date("i")." minutos.";?></h3>

    <p> <?php echo date("F"); ?></p>
    


</body>
</html>