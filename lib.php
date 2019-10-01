<?php
define('DS','/');

//Распечатка меню
function menu($menu){

    echo "<ul>";
    foreach ($menu as $key => $value){
        echo sprintf("<li><a href='?id=%s'>%s</a></li>", $key, $value);
    }
    echo "</ul>";
}



function table(){
    echo "<table border='1'>";

    for ($i=1;$i<10;$i++){
        echo "<tr>";
        for ($j=1;$j<10;$j++){
            if($i==1 || $j == 1){
                echo  "<td>" . $i*$j ."</td>";
            }else{
                echo  "<td>" . $i*$j ."</td>";
            }

        };
        echo "</tr>";
    };

    echo "</table>";
}

?>

