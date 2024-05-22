<?php
session_start();
require('conexao.php');

if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];

    $sql = "SELECT * FROM cards WHERE id_usuario = $id_usuario";
    $result = $conect->query($sql);
} else {
    echo "Você precisa estar logado para acessar esta página.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_card_id'])) {
    $delete_card_id = $_POST['delete_card_id'];

    $sql_delete = "DELETE FROM cards WHERE id = $delete_card_id AND id_usuario = $id_usuario";
    if ($conect->query($sql_delete) === TRUE) {
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "<div class='text-danger'>Erro ao excluir o card: " . $conect->error . "</div>";
    }
}
?>
    <?php include './header.php';
    ?>
  <div class="d-grid d-md-flex gap-2 mx-auto">
    <div class="d-grid gap-1 col-10 mx-auto card" style="margin: 10px;">
        <div class="card-header" style="display: flex; flex-direction: row; justify-content: space-between; color: #BB6232;  align-items: center;">
            <h5>Lista de Cards</h5>
            <a class="btn" style="background-color:#BB6232; color:azure" href="cadastroCard.php" role="button">Novo Card</a>
        </div>
        <div class="card-body">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col' onclick='' data-bs-toggle='collapse' href='#card{$row['id']}' role='button' aria-expanded='false' aria-controls='card{$row['id']}'>";
                        echo "<div class='card'>";
                        echo "<div class='card-header'style='display: flex; flex-direction: row; justify-content: space-between; color: #BB6232;  align-items: center;'>";
                        echo "<h5 class='card-title' style='color:#BB6232'>" . htmlspecialchars($row['titulo']) . "</h5>";
                        echo "<form method='POST' action='' onsubmit='return confirm(\"Tem certeza que deseja excluir este card?\");'>";
                        echo "<input type='hidden' name='delete_card_id' value='{$row['id']}'>";
                        echo "<button type='submit' class='btn' style='color: #BB6232';><i class='bi bi-trash' style='font-size: large;'></i></button>";
                        echo "</form>";
                        echo "</div>";
                        echo "<div class='card-body' style='background-color: #BB6232;'>";
                        echo "<p class='card-text' style='color:azure'>" . htmlspecialchars($row['pergunta']) . "</p>";
                        echo "</div>";
                        echo "<div class='collapse' id='card{$row['id']}'>";
                        echo "<div class='card card-body'>";
                        echo "<p class='card-text'>". htmlspecialchars($row['resposta'])."</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Nenhum card encontrado para este usuário.</p>";
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include './footer.php';?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>