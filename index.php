<!DOCTYPE html
>

<html> <head>
<meta charset="utf

-8" />

<title>Exibe os feedbacks</title
>

</head> <body>
<h1>Feedback do Usuário</h1>

<?php
$dbhost='localhost';
$dbuser='aluno';
$dbpassword='aluno';
$dbname='tutorial_bd';
try {

    //Efetua a conexão com BD
    $conx = new PDO("mysql:host=$dbhost;dbname=$dbname",
    
    $dbuser, $dbpassword);
    
    //Cria a Query SQL
    $query = "SELECT user_id, first_name, last_name, email,
    
    comments FROM feedback ORDER BY feedback_date ASC";
    
    //Executa a Query
    $consulta = $conx->query($query);
    while($row = $consulta->fetch(PDO::FETCH_ASSOC)) {

        $table[] = $row;
        }
        ?>
        
        <table>
        <tr>
        <td><strong>Membro</strong></td>
        <td width="10">&nbsp;</td>
        <td><strong>Email</strong></td>
        <td width="10">&nbsp;</td>
        <td><strong>Escola</strong></td>
        <td width="10">&nbsp;</td>
        <td><strong>Estado</strong></td>
        <td width='10'>&nbsp;</td>
        <td><strong>Função</strong></td>
        <td width='10'>&nbsp;</td>
        <td><strong>Nome da Equipe</strong></td>
        <td width='10'>&nbsp;</td>
        </30/07/2019 tr>
        <?php

//Verifica se há linhas para exibir
if ($table) {
//Recupera cada elemento da array
foreach($table as $d_row) {

?>

<tr>

<td><?php echo($d_row["nome"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["email"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["escola"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["funcao"]); ?></td>
<td width="10">&nbsp;</td>
<td><?php echo($d_row["nomedaquipe"]); ?></td>

</tr>
<?php
}
}
?>
</table>
<?php
$number_regs = $consulta->rowCount();
?>
<p>Número de Registros : <?php echo $number_regs; ?></p>

<?php
//Fecha a conexão
$conx = null;
} catch (PDOException $e) {
echo "Conexão falhou: " . $e->getMessage();
}

?>
</body>
</html>
