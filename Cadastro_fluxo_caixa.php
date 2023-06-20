<?php
    include("Conexao.php");

    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];

    echo "<h3>Cadastro de Fluxo de caixa</h3>";
    echo "Data: $data <br>";
    echo "Tipo: $tipo <br>";
    echo "Valor: $valor <br>";
    echo "Historico: $historico <br>";
    echo "Cheque: $cheque <br>";

    $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)";

    $sql .= "VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";
    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados cadastrados com sucesso!";
    else    
        echo "Erro ao tentar cadastrar!";
?>
<a href='Index.php'>Voltar</a>