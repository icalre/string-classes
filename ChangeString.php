<?php
/**
 * Created by PhpStorm.
 * User: icalvay
 */

class ChangeString {
    function build($word){
        $fin = "";
        $rules = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z");
        $num = strlen($word);
        for($a=0; $a<$num; $a++){
            $state = "lowercase";
            if (ctype_upper($word[$a])){
                $state = "uppercase";
            }
            $busqueda = -1;
            for($i=0; $i < count($rules) ; $i++){

                if($rules[$i] == strtolower($word[$a])){

                    if($i == 26){
                        $busqueda = 0;
                    }else{
                        $busqueda = $i + 1;
                    }
                }
            }
            if($busqueda == -1){
                $fin .= strtolower($word[$a]);
            }else{
                $string = $rules[$busqueda];
                if($state == "uppercase"){
                    $string = strtoupper ($string);
                }
                $fin .= $string;
            }
        }
        return $fin;
    }
}

$changeString = new changeString();

$string = "123 abcd*3";
echo $string ." --> ";
echo $changeString->build($string);
echo "<br>";
$string = "**Casa 52";
echo $string ." --> ";
echo $changeString->build($string);
echo "<br>";
$string = "**Casa 52Z";
echo $string ." --> ";
echo $changeString->build($string);
echo "<br>";
$string = "fgT";
echo $string ." --> ";
echo $changeString->build($string);