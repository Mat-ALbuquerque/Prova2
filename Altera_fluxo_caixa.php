<?php
    include('Conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa where id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Alterar dados</title>
</head>
<body>
    <h2>Alterar dados</h2>
    <form action="Altera_fluxo_caixa_exe.php" method="post">
    <input name="id" type="hidden" value="<?php echo $row ['id'] ?>">
        <div>
            <label for="data">Data:</label>
            <input type="date" name="data" id="data" value="<?php echo $row ['data']?>">
        </div>
        <div>
            <label for="tipo">Tipo:</label>
            <input type="radio" name="tipo" id="tipo" value="entrada">Entrada</input>
            <input type="radio" name="tipo" id="tipo" value="saida">Saída </input>
        </div>
        <div>
            <label for="valor">Valor:</label>
            <input type="float" name="valor" id="valor" value="<?php echo $row ['valor']?>">
        </div>
        <div>
            <label for="historico">Historico:</label>
            <input type="text" name="historico" id="historico" value="<?php echo $row ['historico']?>">
        </div>
        <div>
            <label for="cheque">Cheque:</label>
            <select name="cheque">
                <option value="sim">Sim</option>
                <option value="nao">Não</option>
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>