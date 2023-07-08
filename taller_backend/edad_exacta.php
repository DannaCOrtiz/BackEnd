<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calculadora_4.css">
    <title>Edad exacta</title>
</head>

<body class="prueba">
    <a href="index.html#section-respuestas">
        <img class="home" src="img/hogar.png" alt="">
    </a>
    <div class="main-frame-cal">
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Seleecione su fecha de nacimiento:</label>
                <input type="date" name="fecha_nacimiento" class="form-control" id="exampleFormControlInput1" placeholder="Digite su edad">
            </div>
            <button type="submit" name="verificar" class="btn btn-outline-info">Consultar</button>
            <a class="btn btn-outline-info" href="index.html#section-respuestas" role="button">Inicio</a>
        </form>

        <?php

        $edad = 0;
        const constante_18 = 18;
        const constante_0 = 0;


        if (isset($_POST['verificar'])) {

            $fecha = new DateTime($_POST['fecha_nacimiento']);

            $date2 = new DateTime(date("y-m-d"));

            $fecha_actual = $fecha->diff($date2);
            $edad_actual  = $fecha_actual->y;
            $edad_meses  = $fecha_actual->m;
            $edad_dias  = $fecha_actual->d;


            if ($edad_actual >= constante_18) {
                echo "<h1>Es mayor de edad,dado que tiene " . $edad_actual . " años </h1>";
            } else if ($edad_actual < constante_18 && $edad_actual > constante_0) {
                echo "<h2>Es menor de edad,dado que tiene " . $edad_actual . " años </h2>";
            } else {
                echo "<h2>No valido</h2>";
            }

            echo "<br> Usted tiene: " . $edad_actual . "<br> Usted tiene años en meses: " . $edad_meses . "<br> Usted tiene años en días: " . $edad_dias;
        }

        ?>

    </div>
</body>

</html>