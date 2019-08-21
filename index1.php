<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
</head>

<?php
$host="localhost";
$user="aluno";
$password="aluno";
$dbname="atv_prt_041_bd";
$conn= mysqli_connect($host,$user,$password,$dbname) or die("Impossível conectar");
$query= "SELECT nome,email,escola,estado,funcao,n_equipe from equipes,escolas,membros";
$result= mysqli_query($conn,$query) or die("Erro");
while ( $row = mysqli_fetch_assoc( $result ) ) {
    $table[] = $row; //add each row into the table array
    }    
    ?>

    <table>
    <tr>
    <td><strong>Nome</strong></td>
    <td width="10">&nbsp;</td>
    <td><strong>Email</strong></td>
    <td width="10">&nbsp;</td>
    <td><strong>Escola</strong></td>
    <td width="10">&nbsp;</td>
    <td><strong>Estado</strong></td>
    <td width="10">&nbsp;</td>
    <td><strong>Função</strong></td>
    <td width="10">&nbsp;</td>
    <td><strong>Numero da equipe</strong></td>
    </tr>
    <?php
    
    if ($table) { //Check if there are any rows to be displayed
    //Retrieve each element of the array
    foreach($table as $d_row) {
    
    ?>
    
    <tr>
    <td><?php echo($d_row["nome"]); ?></td>
    <td width="10">&nbsp;</td>
    <td><?php echo($d_row["email"]); ?></td>
    <td width="10">&nbsp;</td>
    <td><?php echo($d_row["escola"]); ?></td>
    <td width="10">&nbsp;</td>
    <td><?php echo($d_row["estado"]); ?></td>
    <td width="10">&nbsp;</td>
    <td><?php echo($d_row["funcao"]); ?></td>
    <td width="10">&nbsp;</td>
    <td><?php echo($d_row["n_equipe"]); ?></td>
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
