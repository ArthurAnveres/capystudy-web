<!DOCTYPE html>
<html>
<head>
    <title>Cadastro - Capy Study</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .psw a {
            color: #BB6232;
        }
        .center-container {
            text-align: center;
            padding-top: 10px;
            padding-bottom: 15px;
        }
        .btn-primary {
            background-color: #BB6232;
            border-color: #BB6232;
        }
        .btn-custom {
            color: #000000;
        }
        .btn-custom:hover {
            color: #000000;
        }
        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active {
            background-color: #9e4f28;
            border-color: #8a4523; 
        }
    </style>
</head>
<body style="background-color:#f6edde">
<div class="d-flex justify-content-center" style="background-color: #E2DBD8;  height: 100vh;
 width: 100vw;">
        <div class="card col-3" style="margin-top: 5%; height: 65vh; box-shadow: 0px 1px 4px 0px darkgray;">
            <div class="card-body" 
                style="display: flex;
                justify-content: center;
                margin-bottom: 5%;"
            > 
    <form action="" method="post" style="width: 500px;">
    <div class="text-center">
        <img src="/capy/logo.png" alt="Imagem do formulário" class="img-fluid">
    </div>
        <?php
        // Verifica se a solicitação é do método POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            require('conexao.php'); // Inclui o arquivo de conexão
            
            // Verifica se a conexão com o banco de dados foi estabelecida com sucesso
            if ($conect) {
                // Verifica se os campos do formulário estão definidos
                if (isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['data_nascimento'])) {
                    
                    // Prepara os dados do formulário para inserção no banco de dados
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $data_nascimento = $_POST['data_nascimento'];

                    // Insere os dados no banco de dados
                    $sql = "INSERT INTO usuarios (nome, email, senha, data_nascimento) VALUES ('$nome', '$email', '$senha', '$data_nascimento')";

                    if ($conect->query($sql) === TRUE) {
                        echo "<div class='text-success'>Usuário cadastrado com sucesso.</div>";
                    } else {
                        echo "<div class='text-danger'>Erro ao cadastrar o usuário: " . $conect->error . "</div>";
                    }
                } else {
                    echo "<div class='text-danger'>Por favor, preencha todos os campos.</div>";
                }
            } else {
                echo "<div class='text-danger'>Erro ao conectar ao banco de dados.</div>";
            }
        }
        ?>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nome" name="nome" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Endereço de e-mail" name="email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Senha" name="senha" required>
        </div>
        <div class="form-group">
            <input type="date" class="form-control" placeholder="Data de Nascimento" name="data_nascimento" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
        <div class="center-container">
            <span class="psw"><a href="login.php">Já possui uma conta? Faça login aqui.</a></span>
        </div>
        </form>            
            </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
