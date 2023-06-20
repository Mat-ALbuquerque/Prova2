<?php
include ('Conexao.php');

    $id=$_GET['id'];
    $sql="DELETE FROM fluxo_caixa WHERE id='".$id."'";
    $result = mysqli_query ($con, $sql);
    if ($result)
        echo "Registro excluído com sucesso! <br> ";
    else 
        echo "Erro ao tentar excluir registro no banco! <br>";
?>
<a href="Index.php">Voltar</a>