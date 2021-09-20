<!-- <?php
	$a = 6; 
    echo gettype($a).'<br>';
    $a = 123.5;
    echo gettype($a).'<br>';
    $t = [1 => 'wartosc1', 2 => 'element_drugi', 3 => 'wartosc3'];
    echo var_dump($t).'<br>';
    
    if(is_array($t))
    {
        echo 'true';
    }
    else
    {
        echo 'false';
    }
?> -->

<?php
    define ('imie', 'Wiktor');
    define ('kierunek', 'programista');
    echo 'Mam na imie ' .imie. ' jestem na kierunku technik '.kierunek; 

?>