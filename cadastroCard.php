<?php
session_start();
require('conexao.php');

if(isset($_SESSION['id_usuario'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['titulo'], $_POST['pergunta'], $_POST['resposta'])) {
            $titulo = $_POST['titulo'];
            $pergunta = $_POST['pergunta'];
            $resposta = $_POST['resposta'];
            $id_usuario = $_SESSION['id_usuario']; 

            $sql = "INSERT INTO cards (titulo, pergunta, resposta, id_usuario) VALUES ('$titulo', '$pergunta', '$resposta', '$id_usuario')";

            if ($conect->query($sql) === TRUE) {
                header("Location: flash.php");
                exit();
            } else {
                echo "Erro ao cadastrar o card: " . $conect->error;
            }
        } else {
            echo "Por favor, preencha todos os campos.";
        }
    }
} else {
    echo "Você precisa estar logado para acessar esta página.";
}
?>
  <?php include './header.php';?>
<div>
<div class="d-grid gap-1 col-10 mx-auto card" style="margin: 10px; margin-bottom:5%">
        <div class="card-header" style="display: flex; flex-direction: row; justify-content: space-between; color: #BB6232">
            <h5>Cadastrar de Cards</h5>
        </div>
        <div class="card-body">
    <form action="" method="post">
    <div class="mb-3">
      <label for="titulo" class="form-label" >Título:</label>
      <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>
    <div class="mb-3">
      <label for="pergunta" class="form-label">Pergunta:</label>
      <textarea class="form-control" id="pergunta" rows="3" name="pergunta" required></textarea>
    </div>
    <div class="mb-3">
      <label for="pergunta" class="form-label">Resposta:</label>
      <textarea class="form-control" id="resposta" rows="3" name="resposta" required></textarea>
    </div>
    <button type="submit" class="btn" style="background-color:#BB6232; color:azure">Salvar</button>
    </form>
</div>

</div>
        </div>
    </div>

<?php include './footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
