<?php 
$idade = 15;
// versao antiga
// if($idade < 10){
//     echo 'idade meno que 10 anos';

// }else{
//    echo 'idade maior que 10 anos';
// }

// versao atual
$idade = ($idade < 10) ? 'idade meno que 10' : 'idade maior que 10 anosss';
echo $idade;
?>