<?php
class ClearPar {
    function build($word)
    {
        $end = "";
        $end_concact = "";
        $regla = array("(",")");
        $num = strlen($word);
        $number = "1";
        for($a=0; $a<$num; $a++){
            $state = "";
            for($i=0; $i < count($regla) ; $i++){
                if($regla[$i] == $word[$a]){
                    $state = "ok";
                }
            }
            if($state == "ok"){
                if($word[$a] == "(" && $number == "1"){
                    $end_concact = $word[$a];
                    $number = "2";
                }
                if($word[$a] == ")" && $number == "2"){
                    $end_concact .= $word[$a];
                    $number = "1";
                }
                if($end_concact == "()"){
                    $end .= $end_concact;
                    $end_concact = "";
                }
            }
        }
        return $end;
    }
}


$string= "()())()";
echo $string."==>";
$clearPar = new ClearPar();
echo $clearPar->build($string);
echo "<br>";
$string= "'()(()'";
echo $string."==>";

echo $clearPar->build($string);
echo "<br>";
$string= ")(";
echo $string."==>";

echo $clearPar->build(')(');
echo "<br>";
$string= "((()";
echo $string."==>";

echo $clearPar->build('((()');