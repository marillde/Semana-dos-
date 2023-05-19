<!DOCTYPE html>
<html>
<head>
    <title>Ticketmaster</title>
</head>
<body>
    <h1><center>Ticketmaster</center></h1>
    <hr>
    <hr>
    <p>
        Ticketmaster te ofrece un servicio único para poder adquirir tus boletos para tus artistas favoritos.
    </p>
    <img src="rauw.jpg" width="250" height="350">
    <img src="karol.jpg" width="250" height="350">
    <img src="theweeknd.jpg" width="250" height="350">
    <img src="miamorhermoso.jpg" width="250" height="350">
    <img src="taylor.jpg" width="250" height="350">
    <form action="Tiketmaster.php" method="post" target="_black">
        <fieldset>
            <legend><h3>¡Realiza tu pedido!</h3></legend>
            <label for="Nombre"><strong>Nombre:</strong>
                <input id="nombre" name ="nombre" type ="text"required>
            </label>
            <br>
            <label for="Apellido"><strong>Apellido:</strong>
                <input id="apellido" name = "apellido" type="text"required>
            </label>
            <br>
            <label for="Fecha del evento"><strong>Fecha del evento:</strong> 
                <input id="fcha" name = "fcha"type ="date"required>
            </label>
            <br>
            <label form="Selecciona el artista de tu preferencia"><strong>Selecciona el artista de tu preferencia:</strong></label>
                <select name="artista" id="artista">Selecciona el artista de tu preferencia:
                    <option value="The weeknd">The weeknd</option>
                    <option value="Ye">Ye</option>
                    <option value="Frank Ocean">Frank Ocean</option>
                    <option value="Kali Uchis">Kali Uchis</option>
                </select>
            <br>
            <label form="Zona del concierto"><strong>Zona del concierto:</strong></label>
                <select id="zona" name= "zona">Zona del concierto:
                    <option value="Grada Preferente B">Grada Preferente B</option>
                    <option value="Grada Preferente C">Grada Preferente C</option>
                    <option value="Planta baja">Planta baja</option>
                    <option value="General">General</option>
                </select>
                <br>
                <p>
                    <ol>
                        <strong>
                            <li>Grada Preferente B: $4,296</li>
                            <li>Grada Preferente C: $3,576</li>
                            <li>Platea Baja: $2,856</li>
                            <li>General: $2,376 </li>
                        </strong>
                    </ol>
                </p>
                <br>
                <img src="boletos.jpg" width="450" height="300">
                <br>
                <p><strong>Lugar del evento:</strong></p>
                <label for="Foro Sol"><strong>Foro Sol</strong>
                    <input id="Foro Sol" name="radio" type="radio" checked value="Foro Sol" />
                </label>
                <br>
                <label for="Palacio de los Deportes"><strong>Palacio de los Deportes</strong>
                    <input id="Palacio de los Deportes" name=radio type="radio" value="Palacio de los Deportes" />
                </label>
                <br>
                <label for="Auditorio Nacional"><strong>Auditorio Nacional</strong>
                    <input id="Auditorio Nacional" name="radio" type="radio" checked value="Auditorio Nacional" />
                </label>
                <br>
                <label for="Teatro Metropolitan"><strong>Teatro Metropolitan</strong>
                    <input id="Teatro Metropolitan" name=radio type="radio" value="Teatro Metropolitan" />
                </label>
                <br>
                <p><strong>Paquetes que ofrecemos(esto implica un costo extra):</strong></p>
                <label for="Experiencia VIP"><strong>Experiencia VIP</strong>
                    <input id="Experiencia VIP" name="check[]" type="checkbox" value="Experiencia VIP">
                </label>
                <br>
                <label for="Boleto con mercancía oficial de la artista incluida"><strong>Boleto con mercancía oficial de la artista incluida</strong>
                    <input id="Boleto con mercancía oficial de la artista incluida" name= "check[]" type="checkbox" value="Boleto con mercancía oficial de la artista incluida" />
                </label>
                <br>
                <label for="Boleto balidos para mas de dos fechas del artista"><strong>Boleto balidos para mas de dos fechas del artista</strong>
                    <input id="Boleto balidos para mas de dos fechas del artista" name="check[]" type="checkbox" value="Boleto balidos para mas de dos fechas del artista" />
                </label>
                <br>
                <br>
                <label form="boletos"><strong>Número de boletos de las unidades:</strong>
                <input type="number" min="1" max="15" id="boletos" name="boletos"required>
                </label>
                <br>
                <label for="Enviar">
                    <input id="Enviar" type="submit"/>
                </label>
                <br>
                <label for="Restablecer">
                    <input id="Restablecer" type="reset"/>
                </label>
        </fieldset>
    </form>
    <?php
        echo "<link rel='icon' href='Tiketmaster.jpg' type='imagen/icon'>";
        $nombre=(isset($_POST["nombre"]) && $_POST ["nombre"] != "")? $_POST["nombre"] : false;
        $apellido=(isset($_POST["apellido"]) && $_POST ["apellido"] != "")? $_POST["apellido"] : false;
        $fcha=(isset($_POST["fcha"]) && $_POST ["fcha"] != "")? $_POST["fcha"] : false;
        $artista=(isset($_POST["artista"]) && $_POST ["artista"] != "")? $_POST["artista"] : false;
        $zona=(isset($_POST["zona"]) && $_POST ["zona"] != "")? $_POST["zona"] : false;
        $radio=(isset($_POST["radio"]) && $_POST ["radio"] != "")? $_POST["radio"] : false;
        $check=(isset($_POST["check"]) && $_POST ["check"] != "")? $_POST["check"] : false;
        $boletos=(isset($_POST["boletos"]) && $_POST ["boletos"] != "")? $_POST["boletos"] : false;
        //for ($VAR=0; $VAR<= $boletos; $VAR++;)
        //{
        if($artista=="The weeknd")
        {
            echo "<table border='1' align='center'>";
            echo "<thead>";
            echo    "<tr>";
            echo        "<th>Boletos de The weeknd</th>";
            echo        "<th><img src='theweeknd.jpg' width='250' height='350'></th>";    
            echo    "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo    "<tr>";
            echo        "<td>";
            echo $_POST ["nombre"];
            echo "<br>";
            echo $_POST ["apellido"];
            echo "</td>";
            echo        "<td>";
            echo $_POST ["fcha"];
            echo "</td>";
            echo    "</tr>";
            echo    "<tr>";
            echo        "<td>";
                        switch ($zona)
                        {
                            case 'Grada Preferente B':
                                echo 'Grada Preferente B';
                                echo "<br>";
                                echo "<img src='gradasB.jpg' alt='gradasB' width ='300' height= '250'>";
                                break;
                            case 'Grada Preferente C':
                                echo 'Grada Preferente C';
                                echo "<br>";
                                echo "<img src='gradasC.jpg' alt='gradasC' width ='300' height= '250'>";
                                break;
                            case 'Planta baja':
                                echo 'Planta baja';
                                echo "<br>";
                                echo "<img src='plantaB.jpg' alt='plantaB' width ='300' height= '250'>";
                                break;
                            case 'General':
                                echo 'General';
                                echo "<br>";
                                echo "<img src='general.jpg' alt='general' width ='300' height= '250'>";
                                break;
                        }
                echo "</td>";
                echo    "</tr>";
                echo "<tr>";
                echo "<td>";
                echo "<p>";
                echo 'Frase: I ain’t scared of the fall, I’ve felt the ground before. / No me da miedo la caída, ya he sentido el suelo antes';
                echo "</p>";
                echo "</td>";
                echo "<td>";
                switch ($radio)
                {
                    case 'Foro Sol':
                        echo 'Foro Sol';
                        echo "<br>";
                        echo "<img src='foro.jpg' alt='foro' width ='300' height= '250'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo 'Palacio de los Deportes';
                        echo "<br>";
                        echo "<img src='pa.jpg' alt='pa' width ='300' height= '250'>";
                        break;
                    case 'Auditorio Nacional':
                        echo 'Auditorio Nacional';
                        echo "<br>";
                        echo "<img src='audi.jpg' alt='audi' width ='300' height= '250'>";
                        break;
                    case 'Teatro Metropolitan':
                        echo 'Teatro Metropolitan';
                        echo "<br>";
                        echo "<img src='te.jpg' alt='te' width ='300' height= '250'>";
                        break;
                }       
                echo "</td>";
                echo "</tr>";
            echo "</tbody>";
            echo "</table>";
        //}
    }
    //for ($VAR=0; $VAR<= $boletos; $VAR++;)
    //{    
    if($artista=="Ye")
        {
            echo "<table border='1' align='center'>";
            echo "<thead>";
            echo    "<tr>";
            echo        "<th>Boletos de Ye</th>";
            echo        "<th><img src='ye.jpg' width='250' height='350'></th>";    
            echo    "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo    "<tr>";
            echo        "<td>";
            echo $_POST ["nombre"];
            echo "<br>";
            echo $_POST ["apellido"];
            echo "</td>";
            echo        "<td>";
            echo $_POST ["fcha"];
            echo "</td>";
            echo    "</tr>";
            echo    "<tr>";
            echo        "<td>";
                        switch ($zona)
                        {
                            case 'Grada Preferente B':
                                echo 'Grada Preferente B';
                                echo "<br>";
                                echo "<img src='gradasB.jpg' alt='gradasB' width ='300' height= '250'>";
                                break;
                            case 'Grada Preferente C':
                                echo 'Grada Preferente C';
                                echo "<br>";
                                echo "<img src='gradasC.jpg' alt='gradasC' width ='300' height= '250'>";
                                break;
                            case 'Planta baja':
                                echo 'Planta baja';
                                echo "<br>";
                                echo "<img src='plantaB.jpg' alt='plantaB' width ='300' height= '250'>";
                                break;
                            case 'General':
                                echo 'General';
                                echo "<br>";
                                echo "<img src='general.jpg' alt='general' width ='300' height= '250'>";
                                break;
                        }
                echo "</td>";
                echo    "</tr>";
                echo "<tr>";
                echo "<td>";
                echo "<p>";
                echo 'Frase: Mi mayor dolor en la vida es que nunca voy a ser capaz de verme actuar en directo.';
                echo "</p>";
                echo "</td>";
                echo "<td>";
                switch ($radio)
                {
                    case 'Foro Sol':
                        echo 'Foro Sol';
                        echo "<br>";
                        echo "<img src='foro.jpg' alt='foro' width ='300' height= '250'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo 'Palacio de los Deportes';
                        echo "<br>";
                        echo "<img src='pa.jpg' alt='pa' width ='300' height= '250'>";
                        break;
                    case 'Auditorio Nacional':
                        echo 'Auditorio Nacional';
                        echo "<br>";
                        echo "<img src='audi.jpg' alt='audi' width ='300' height= '250'>";
                        break;
                    case 'Teatro Metropolitan':
                        echo 'Teatro Metropolitan';
                        echo "<br>";
                        echo "<img src='te.jpg' alt='te' width ='300' height= '250'>";
                        break;
                }       
                echo "</td>";
                echo "</tr>";
            echo "</tbody>";
            echo "</table>";
        }
   // }
    
   //for ($VAR=0; $VAR<= $boletos; $VAR++;)
    //{
        if($artista=="Frank Ocean")
        {
            echo "<table border='1' align='center'>";
            echo "<thead>";
            echo    "<tr>";
            echo        "<th>Boletos de Frank Ocean</th>";
            echo        "<th><img src='miamorhermoso.jpg' width='250' height='350'></th>";    
            echo    "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo    "<tr>";
            echo        "<td>";
            echo $_POST ["nombre"];
            echo "<br>";
            echo $_POST ["apellido"];
            echo "</td>";
            echo        "<td>";
            echo $_POST ["fcha"];
            echo "</td>";
            echo    "</tr>";
            echo    "<tr>";
            echo        "<td>";
                        switch ($zona)
                        {
                            case 'Grada Preferente B':
                                echo 'Grada Preferente B';
                                echo "<br>";
                                echo "<img src='gradasB.jpg' alt='gradasB' width ='300' height= '250'>";
                                break;
                            case 'Grada Preferente C':
                                echo 'Grada Preferente C';
                                echo "<br>";
                                echo "<img src='gradasC.jpg' alt='gradasC' width ='300' height= '250'>";
                                break;
                            case 'Planta baja':
                                echo 'Planta baja';
                                echo "<br>";
                                echo "<img src='plantaB.jpg' alt='plantaB' width ='300' height= '250'>";
                                break;
                            case 'General':
                                echo 'General';
                                echo "<br>";
                                echo "<img src='general.jpg' alt='general' width ='300' height= '250'>";
                                break;
                        }
                echo "</td>";
                echo    "</tr>";
                echo "<tr>";
                echo "<td>";
                echo "<p>";
                echo 'Frase: Algunas cosas nunca son. Pero nosotros lo éramos. No te olvidaré.';
                echo "</p>";
                echo "</td>";
                echo "<td>";
                switch ($radio)
                {
                    case 'Foro Sol':
                        echo 'Foro Sol';
                        echo "<br>";
                        echo "<img src='foro.jpg' alt='foro' width ='300' height= '250'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo 'Palacio de los Deportes';
                        echo "<br>";
                        echo "<img src='pa.jpg' alt='pa' width ='300' height= '250'>";
                        break;
                    case 'Auditorio Nacional':
                        echo 'Auditorio Nacional';
                        echo "<br>";
                        echo "<img src='audi.jpg' alt='audi' width ='300' height= '250'>";
                        break;
                    case 'Teatro Metropolitan':
                        echo 'Teatro Metropolitan';
                        echo "<br>";
                        echo "<img src='te.jpg' alt='te' width ='300' height= '250'>";
                        break;
                }       
                echo "</td>";
                echo "</tr>";
            echo "</tbody>";
            echo "</table>";
        }
    //}
   // for ($VAR=0; $VAR<= $boletos; $VAR++;)
    //{
        if($artista=="Kali uchis")
        {
            echo "<table border='1' align='center'>";
            echo "<thead>";
            echo    "<tr>";
            echo        "<th>Boletos de Kali Uchis</th>";
            echo        "<th><img src='kali.jpg' width='250' height='350'></th>";    
            echo    "</tr>";
            echo "</thead>";
            echo "<tbody>";
            echo    "<tr>";
            echo        "<td>";
            echo $_POST ["nombre"];
            echo "<br>";
            echo $_POST ["apellido"];
            echo "</td>";
            echo        "<td>";
            echo $_POST ["fcha"];
            echo "</td>";
            echo    "</tr>";
            echo    "<tr>";
            echo        "<td>";
                        switch ($zona)
                        {
                            case 'Grada Preferente B':
                                echo 'Grada Preferente B';
                                echo "<br>";
                                echo "<img src='gradasB.jpg' alt='gradasB' width ='300' height= '250'>";
                                break;
                            case 'Grada Preferente C':
                                echo 'Grada Preferente C';
                                echo "<br>";
                                echo "<img src='gradasC.jpg' alt='gradasC' width ='300' height= '250'>";
                                break;
                            case 'Planta baja':
                                echo 'Planta baja';
                                echo "<br>";
                                echo "<img src='plantaB.jpg' alt='plantaB' width ='300' height= '250'>";
                                break;
                            case 'General':
                                echo 'General';
                                echo "<br>";
                                echo "<img src='general.jpg' alt='general' width ='300' height= '250'>";
                                break;
                        }
                echo "</td>";
                echo    "</tr>";
                echo "<tr>";
                echo "<td>";
                echo "<p>";
                echo 'Frase: Si en tus sueños caminas de la mano con tu persona favorita, en tu cama permanecerás hasta el final de los días.';
                echo "</p>";
                echo "</td>";
                echo "<td>";
                switch ($radio)
                {
                    case 'Foro Sol':
                        echo 'Foro Sol';
                        echo "<br>";
                        echo "<img src='foro.jpg' alt='foro' width ='300' height= '250'>";
                        break;
                    case 'Palacio de los Deportes':
                        echo 'Palacio de los Deportes';
                        echo "<br>";
                        echo "<img src='pa.jpg' alt='pa' width ='300' height= '250'>";
                        break;
                    case 'Auditorio Nacional':
                        echo 'Auditorio Nacional';
                        echo "<br>";
                        echo "<img src='audi.jpg' alt='audi' width ='300' height= '250'>";
                        break;
                    case 'Teatro Metropolitan':
                        echo 'Teatro Metropolitan';
                        echo "<br>";
                        echo "<img src='te.jpg' alt='te' width ='300' height= '250'>";
                        break;
                }       
                echo "</td>";
                echo "</tr>";
            echo "</tbody>";
            echo "</table>";
        }
    //}    
    ?>
</body>
</html>