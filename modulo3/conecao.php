<?php

$servidor = "127.0.0.1";

$usuario = "root";

$senha = "sebrae123";

$banco = "primeirobanco";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);
if (isset($_GET['nome'])) {
    if ($conexao->connect_error) {
        echo "Não foi possivel conectar";
    } else {
        echo 'Conectado com sucesso!';
        $sqlgravar = "INSERT INTO convidados(nome_convidado, acompanhates) values ('$_GET[nome]',$_GET[acompanhante])";
        $conexao->query($sqlgravar);

        $resultado = $conexao->query("select * from  convidados");


        //----------------------exemplo de mostrar resultado-------------
        //print_r($resultado >num_roms);
        //while($row = $resultado -> fetch_assoc())
        //{
        //printf("</br> <tr> <td>%s </td> </tr>", $row["Nome_convidado"], "</tables>");
        //$row["Acompanhates", "</tables>"]);
        //}


        // foreach($resultado as $convidado)
        // {
        //     echo "</br>", $convidado["Nome_convidado"];
        // }
    }
} else {
    $resultado = $conexao->query("select * from  convidados");
}
