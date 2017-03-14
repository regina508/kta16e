<?php

function aeg(){
    date_default_timezone_set("Europe/Tallinn");
    $time = date("H:i:s");
    echo $time."<br>";
    if ($time >= "08:39"){
        echo 'Kell on '.$time.' Aeg koju minna<br>';
    }else{
        echo "Kell on ".$time." Peab veel kannatama!<br>";        
        
    }
    }
    
function home(){
    echo'<li><a href="index.php">Tagasi koju</a></li>';
    
    
}

//$_SERVER - globaalne muutuja, mis on defineeritud süsteemi poolt


function GetVisitorIp(){
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = date("H:i:s");
    $visitor = $ip." : ". $time."\n";
    $file = fopen('visitor.txt', "a") or die("Ei saanud avada");
    fwrite($file, $visitor);
        echo "Külastate seda saiti aadressilt: ".$ip;
    fclose($file);
         
    
         
}
    



?>