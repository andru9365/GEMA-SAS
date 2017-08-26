<?php

$connect = mysql_connect("localhost", "root", "");
mysql_select_db("gema", $connect);


if ($_FILES[csv][size] > 0) {


    $file = $_FILES[csv][tmp_name];
    $handle = fopen($file, "r");


    do {
        if ($data[0]) {
            mysql_query("INSERT INTO registro (email, nombre, apellido, codigo) VALUES  
                (  
                    '" . addslashes($data[0]) . "',  
                    '" . addslashes($data[1]) . "',  
                    '" . addslashes($data[2]) . "',
                    '" . addslashes($data[3]) . "'  
                    
                )  
            ");
        }
    } while ($data = fgetcsv($handle, 1000, ",", "'"));
    
    header('Location: tabla.php?success=1');
    die;
}
?>  
<?php

if (!empty($_GET[success])) {
    echo "<b>A sido subido</b><br><br>";
} 
?>  

