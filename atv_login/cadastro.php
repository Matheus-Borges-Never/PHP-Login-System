<html>

<head>
    <title>Tela de Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</head>

<h1 style="text-align: center;">Cadastro</h1>
<hr />

<!-- Para entrada de dados podemos utilizar um formulário -->

<div class="container">
    <div class="align-self-center">

        <div class="card position-relative" style="width: 33.3%; align-items: center; margin-left: 35%;margin-top: 7%; background-color: #b5aaaab8;">

            <div class="card-body">

                <form action="inserir.php" >
                    <div class="container">
                        <div class="align-self-center" style="margin-top: 5%;">
                            <div class="col-12" style="margin-left: 0%;">
                                <input type="text" class="form-control" placeholder="Nome" name="txtNome" aria-label="Name" />
                            </div>
                            <br>
                            <div class="col-12" style="margin-left: 0%;">
                                <input type="text" class="form-control" placeholder="Usuario" name="txtUsua" aria-label="Usuario" />
                            </div>
                            <br>
                            <div class="col-12" style="margin-left: 0%;">
                                <input type="password" class="form-control" placeholder="Senha" name="txtSenha" aria-label="Senha" />
                            </div>
                            <br>
                            <div class="col-12" style="margin-left: 0%; margin-top: 2vh;">
                                <input class="btn btn-primary" type="submit" value="Cadastrar" />
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

</html>