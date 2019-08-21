<?php
$host= "localhost";
$user= "aluno";
$password= "aluno";
$dbname= "“atv_prt_043_bd";
$fabricante= $_POST["fabricante"];
$ano_fabricacao= $_POST["ano_fabricacao"];
$quilometragem= $_POST["quilometragem"];
$conn= mysqli_connect($host,$user,$password,$dbname) 
or die("Impossível conectar");
$querry= "INSERT INTO autos (fabricante,ano_fabricacao,quilometragem) VALUES ('$fabricante','$ano_fabricacao','$quilometragem')";
$result= mysqli_query($conn,$querry) or die ("Erro");
mysqli_close($link);
