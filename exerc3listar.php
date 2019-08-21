<!DOCTYPE html>
<html>

<head>
<title>Exercício 3</title>
<meta charset="utf-8">
</head>

<body>

<?php
$host= "localhost";
$user= "aluno";
$password= "aluno";
$dbname= "“atv_prt_043_bd";
$conn= mysqli_connect($host,$user,$password,$dbname) or die("Falha ao conectar");
$query= "SELECT fabricante,ano_fabricacao,quilometragem from autos";
$result= mysqli_query($conn,$query) or die("Erro");
while ( $row = mysqli_fetch_assoc( $result ) ) {
    $table[] = $row; //add each row into the table array
    }    
    ?>

    <table>
    <tr>
    <td><strong>Fabricante</strong></td>
    <td width="10">&nbsp;</td>
    <td><strong>Ano fabricação</strong></td>
    <td width="10">&nbsp;</td>
    <td><strong>Quilometragem</strong></td>
    </tr>
    <?php
    
    if ($table) { //Check if there are any rows to be displayed
    //Retrieve each element of the array
    foreach($table as $d_row) {
    
    ?>
    
    <tr>
    <td><?php echo($d_row["fabricante"]); ?></td>
    <td width="10">&nbsp;</td>
    <td><?php echo($d_row["ano_fabricacao"]); ?></td>
    <td width="10">&nbsp;</td>
    <td><?php echo($d_row["quilometragem"]); ?></td>
    </tr>
    
    <?php    
    }
    }    
    ?>
    </table>    
    <?php
    
mysqli_close($conn);
    
?>
</body>
</html>
