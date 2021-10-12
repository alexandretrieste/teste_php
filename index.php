<?php 
$categoria = [];
$categoria[] = "Infantil";
$categoria[] = "Adolescente";
$categoria[] = "Adulto";
//$categoria = array("Adulto", "Adolescente", "Infantil");

$nome = "Sheyla";

$idade = 7;


if ($idade >= 6 && $idade <= 12) 
{
    for($i = 0; $i <= count($categoria); $i++) 
    { 
        if($categoria[$i] == "Infantil") 
        
            echo "O nadador ", $nome, " compete na categoria ", $categoria[$i],"!    ";   
    }
}elseif ($idade >= 12 && $idade <= 18) 
{
    for($i = 0; $i <= count($categoria); $i++) 
    { 
        if($categoria[$i] == "Adolescente") 
        
            echo "O nadador ", $nome, " compete na categoria ", $categoria[$i],"!    ";   
    }
}else 
{
    for($i = 0; $i <= count($categoria); $i++) 
    { 
        if($categoria[$i] == "Adulto") 
        
            echo "O nadador ", $nome, " compete na categoria ", $categoria[$i],"!    ";   
    }
}
?>