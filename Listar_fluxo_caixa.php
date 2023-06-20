<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar dados</title>
</head>
<body>
    <?php
        include('Conexao.php');
        $sql = "SELECT * FROM fluxo_caixa";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result)
    ?>
    <h1>Listagem de fluxo de caixa</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>id</th>
            <th>Data</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>Historico</th>
            <th>Cheque</th>
            <th>Excluir</th>
            <th>Altera</th>
        </tr>
        <?php
            do
            {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['data']."</td>";
                echo "<td>".$row['tipo']."</td>";
                echo "<td>".$row['valor']."</td>";
                echo "<td>".$row['historico']."</td>";
                echo "<td>".$row['cheque']."</td>";
                echo "<td><a href='Excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";
                echo "<td><a href='Altera_fluxo_caixa.php?id=".$row['id']."'>Altera</a></td>";
                echo "</tr>";
            }
            while($row = mysqli_fetch_array($result));
        ?>
    </table>
<a href='Index.php'>Voltar</a>
</body>
</html>