<?php
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $estadoNutricional = "";


    if($peso < 0)
       echo "ERRO. Peso inválido!<br>";

    elseif($altura < 0)
       echo "ERRO. Peso inválido!<br>";
       
    else {
        $imc = $peso / ($altura * $altura);
        echo "O IMC calculado foi $imc <br/>";
    }   

    if($imc < 10.0)
        $estadoNutricional = "Desnutrição Grau V";
        elseif ($imc <= 12.9) 
             $estadoNutricional = "Desnutrição Grau IV";
        elseif ($imc <= 12.9) 
             $estadoNutricional = "Desnutrição Grau IV";
        elseif ($imc <= 15.9) 
             $estadoNutricional = "Desnutrição Grau III";
        elseif ($imc <= 16.9) 
             $estadoNutricional = "Desnutrição Grau II"; 
        elseif ($imc <= 18.4) 
             $estadoNutricional = "Desnutrição Grau I";
        elseif ($imc <= 24.9) 
             $estadoNutricional = "Normal";
        elseif ($imc <= 29.9) 
             $estadoNutricional = "Pré-obesidade";
        elseif ($imc <= 34.5) 
             $estadoNutricional = "Obesidade Grau I";
        elseif ($imc <= 39.9) 
             $estadoNutricional = "Obesidade Grau II";
        else
             $estadoNutricional = "Obesidade Grau III";    
        

        echo "O seu estado nutricional corresponde a(ao) $estadoNutricional.";
?>