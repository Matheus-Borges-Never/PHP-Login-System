<?php
    //Conexão com banco de dados
    //Criar o objeto de conexão
    $SERVIDOR   = 'localhost';
    $USUARIO    = 'admin';
    $SENHA      = '@Luno123';
    $BANCO      = 'TI41';

    $nome       = $_GET['txtNome'];
    $user      = $_GET['txtUsua'];
    $senha      = $_GET['txtSenha'];

    $con = new mysqli ($SERVIDOR,$USUARIO,$SENHA,$BANCO);

    If ( $con->connect_error){
        //Aqui faz o código necessario em caso de erro durante a conexão com o banco de dados
        echo "Erro ao conectar com a base de dados";
    }else{
        echo "<h3>A conexão com o banco de dados foi realizado</h3>";

        $sql = "insert into TI41.login (nome,usuario,senha) values ('$nome','$user','$senha')";
        $ret = $con -> query($sql);

        if($ret == true){
            echo "Registro inserido";
        }


        $con -> Close();
    }


?>