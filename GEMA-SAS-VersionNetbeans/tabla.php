<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Visualización de resultados</title>

        <link rel="stylesheet" href="css/tabla.css">
    </head>
    <body>

        <div id="main-container">

            <fieldset>
                <legend style="font-size: 15px;color: white;font-family: monospace;">GEMA SAS</legend>
                <input type="button" name="volver" value="<< Volver" id="boton1" onclick="window.open('index.php')">



                <table>

                    <h1 style="font-size: 15px;color: white;font-family: monospace;">Usuarios Activos</h1>
                    
                    <?php
                    require 'baseDatos/conexion.php';
                    $link = conectarB();

                    $result = mysql_query("SELECT * FROM registro WHERE codigo ='1'", $link);

                    echo "<table>";
                    echo "<tr>";
                    echo "<th>Email</th>";
                    echo "<th>Nombre</th>";
                    echo "<th>Apellido</th>";
                    echo "</tr>";
                    while ($row = mysql_fetch_row($result)) {
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    ?> 




                </table>
                <table>

                    <h1 style="font-size: 15px;color: white;font-family: monospace;">Usuarios Inactivos</h1>

                    <?php
                    $link = conectarB();

                    $result = mysql_query("SELECT * FROM registro WHERE codigo ='2'", $link);

                    echo "<table>";
                    echo "<tr>";
                    echo "<th>Email</th>";
                    echo "<th>Nombre</th>";
                    echo "<th>Apellido</th>";
                    echo "</tr>";
                    while ($row = mysql_fetch_row($result)) {
                        echo "<tr>";
                        echo "<td>$row[0]</td>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    ?> 


                </table>
                <table>

                    <h1 style="font-size: 15px;
                        color: white;
                        font-family: monospace;
                        ">Usuarios en espera</h1>
                        <?php
                        $link = conectarB();

                        $result = mysql_query("SELECT * FROM registro WHERE codigo ='3'", $link);

                        echo "<table>";
                        echo "<tr>";
                        echo "<th>Email</th>";
                        echo "<th>Nombre</th>";
                        echo "<th>Apellido</th>";
                        echo "</tr>";
                        while ($row = mysql_fetch_row($result)) {
                            echo "<tr>";
                            echo "<td>$row[0]</td>";
                            echo "<td>$row[1]</td>";
                            echo "<td>$row[2]</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        ?> 

                </table>

            </fieldset>
        </div>
    </body>
</html>