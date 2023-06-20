<?php
    include("Conexao.php");

    $tipo = $_POST['tipo'];

    echo "<h3>Consulta de Fluxo de caixa</h3>";
    echo "Tipo: $tipo <br>";

    $sql = "INSERT INTO fluxo_caixa (tipo)";

    $sql .= "VALUES ('".$tipo."')";
    echo $sql."<br>";
    if($tipo == 'entrada') {
        $sql = "select sum(valor) valor from fluxo_caixa where tipo = 'entrada'";
    } else if($tipo == 'saida'){
        $sql = "select sum(case when tipo = 'entrada' then valor else 0 end)  -
                       sum(case when tipo = 'saida' then valor else 0 end) as valor
                       from fluxo_caixa ";
    }
?>