<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Capy Study</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
<body>
    <div class="d-flex justify-content-center" style="background-color: #E2DBD8;  height: 100vh;
 width: 100vw;">
        <div class="card col-3" style="margin-top: 5%; height: 65vh; box-shadow: 0px 1px 4px 0px darkgray;">
            <div class="card-body" 
                style="display: flex;
                justify-content: center;
                margin-bottom: 5%;"
            >                
                <form action="" id="login" method="post" class="mt-3" style="width: 500px;" onsubmit="return exibirPopup();">
                    <div class="text-center mb-1">
                        <img src="/capy/logo.png" alt="Imagem do formulário" class="img-fluid">
                    </div>
                    <?php
                    if (isset($_POST['entrar'])) {
                        require('conexao.php');
        
                        $email = $_POST['login'];
                        $senha = $_POST['senha'];
        
                        $query = "SELECT id FROM `usuarios` WHERE email=? AND senha=?";
                        $stmt = $conect->prepare($query);
                        $stmt->bind_param("ss", $email, $senha);
                        $stmt->execute();
                        $result = $stmt->get_result();
        
                        if ($result->num_rows == 1) {
                            $row = $result->fetch_assoc();
                            $_SESSION['id_usuario'] = $row['id'];
                            $_SESSION['nome']= $row['nome'];
                            header("Location: index.php");
                            exit();
                        } else {
                            echo "<script>alert('Usuário ou senha incorretos.');</script>";
                        }
                    }
                    ?>            
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Endereço de e-mail" name="login" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" name="entrar">Login</button>
                    <div class="center-container">
                        <span class="psw"><a href="#">Esqueci minha senha</a></span>
                    </div>
                    <div class="container" style="display: flex; justify-content:center;">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='cadastro.php'" style='margin-top: 10px';>Ainda não sou cadastrado</button>
                    </div>
                </form>            
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
