<?php
session_start();
?>
  <?php include './header.php';?>
    <div class="container" id="home">
        <div class="row" style="padding-top: 2%;">
          <div class="col" style="
              display: flex;
              flex-direction: column;
              justify-content: center;
          ">
            <div class="container" style="margin-bottom: 5%;">
              <img src="./CapStudy horizontal.png" width="250" height="125"  class="mx-auto overflow-hidden rounded">
            </div>
            <h1 style="color:#BB6232;">Desbloqueie seu potencial de estudo.</h1>
            <h5>
              <small class="text-body-secondary">Descubra técnicas e ferramentas de estudo poderosas para aumentar sua produtividade e se sair bem nos exames.</small>
            </h5>
            <div class="col-7" style="padding-top: 10px; display:flex; gap: 1em;">
              <button type="button" class="btn" id='flashcard-button'style="background-color:#BB6232; color:azure">Flash Card</button>
              <button type="button" class="btn" id='pomodoro-button' style="background-color:#BB6232; color:azure">Pomodoro</button>
            </div>
          </div>
          <div class="col">
            <img src="./memo1.jpg" width="600" height="440"  class="mx-auto overflow-hidden rounded float-end object-center">
          </div>                
        </div>
    </div>
    <div class="container" id="flash">
        <div class="row" style="padding-top: 2%;">
        
        <div class="col">
            <img src="./card.png" width="600" height="440"  class="mx-auto overflow-hidden rounded float-end object-center">
          </div>
          <div class="col" style="
              display: flex;
              flex-direction: column;
              justify-content: center;
          ">
            <h1 style="color:#BB6232;">Domine qualquer assunto com Flashcards</h1>
            <h5>
              <small class="text-body-secondary">Crie, estude e compartilhe flashcards para ajudá-lo a memorizar informações importantes e se sair bem nos exames. Nossa ferramenta intuitiva de flashcard facilita a construção e revisão de seus materiais de estudo.</small>
            </h5>
            <div class="col-7" style="padding-top: 10px; display:flex; gap: 1em;">
              <a type="button" class="btn" style="background-color:#BB6232; color:azure" href="./cadastroCard.php">Comece já</a>
              <a type="button" class="btn" style="background-color:#BB6232; color:azure" href='https://kultivi.com/blog/geral/flashcards-saiba-o-que-sao-e-como-usar' target="_blank">Saiba mais</a>
            </div>
          </div>                
        </div>
    </div>
    <div class="container" id='pomodoro'>
        <div class="row" style="padding-top: 2%; padding-bottom: 10%">
          <div class="col" style="
              display: flex;
              flex-direction: column;
              justify-content: center;
          ">
            <h1 style="color:#BB6232;">Aumente sua produtividade com a técnica Pomodoro</h1>
            <h5>
              <small class="text-body-secondary">A Técnica Pomodoro é um método simples, mas eficaz de gerenciamento de tempo que pode ajudá-lo a manter o foco, reduzir o esgotamento e realizar mais. Nosso cronômetro Pomodoro facilita a incorporação dessa técnica de aumento de produtividade em sua rotina de estudo.</small>
            </h5>
            <div class="col-7" style="padding-top: 10px; display:flex; gap: 1em;">
              <a type="button" class="btn" style="background-color:#BB6232; color:azure" href='./pomodoro.php'>Comece já</a>
              <a type="button" class="btn" style="background-color:#BB6232; color:azure" href='https://brasilescola.uol.com.br/dicas-de-estudo/tecnica-pomodoro-que-e-e-como-funciona.htm' target="_blank">Saiba mais</a>
            </div>
          </div>
          <div class="col">
            <img src="./pomodoro.png" width="600" height="440"  class="mx-auto overflow-hidden rounded float-end object-center">
          </div>               
        </div>
    </div>
    <?php include './footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      document.getElementById('flashcard-button').addEventListener('click', function() {
          document.getElementById('flash').scrollIntoView({ behavior: 'smooth' });
      });

      document.getElementById('pomodoro-button').addEventListener('click', function() {
          document.getElementById('pomodoro').scrollIntoView({ behavior: 'smooth' });
      });
    </div>
  </body>
</html>