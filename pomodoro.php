<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="src/css/style.css" />
  <title>Pomodoro Timer</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary"  style="background-color: #E2DBD8 !important; color: #BB6232 !important; top:0; width:100%">
        <div class="container-fluid" style="padding-left: 10%;">
          <a class="navbar-brand" href="#">
            <img src="./CapStudy- logotipoVertical.png" width="100" height="22"  class="mx-auto overflow-hidden rounded">
          </a>
          <button 
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
            href="./index.php">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav" style="justify-content: space-between;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" style="color: #BB6232" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #BB6232" href="pomodoro.php">Pomodoro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: #BB6232" href="flash.php">Flash card</a>
              </li>
            </ul>
            <ul class="navbar-nav" style="margin-right: 10%;">
              <li>
                <a class="nav-link" style="color: #BB6232" href="logout.php">
                  Logout <i class="bi bi-box-arrow-right"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
  <div class="container" style="display: flex; margin-top:2%; gap:5px; margin-bottom:5%">
    <div class="container col-6" style="margin-bottom: 5%; display:flex; justify-content:center;flex-direction: column;color: beige;">
      <div class="col-10" 
        style="color:#BB6232;
          display: flex;
          flex-direction:row;
          max-height: 100px;
          margin-bottom: 10px;
          align-items: center;"
          >
        <img src="./CapStudy simbolo.png" width="60" height="100"  class="mx-auto overflow-hidden rounded">
        <h2 style="margin-bottom: 0; margin-left:10px">Benefícios do Método Pomodoro</h2>
      </div>      
      <div class="col-10">
        <ul class="list-group">
            <li class="list-group-item">
                <h5>Aumento do Foco e Concentração</h5>
                <p>O tempo limitado de trabalho ajuda a manter a mente focada na tarefa.</p>
            </li>
            <li class="list-group-item">
                <h5>Prevenção da Fadiga</h5>
                <p>As pausas regulares evitam o cansaço mental e físico.</p>
            </li>
            <li class="list-group-item">
                <h5>Melhora da Gestão do Tempo</h5>
                <p>Ajuda a entender melhor quanto tempo as tarefas realmente levam para serem concluídas.</p>
            </li>
            <li class="list-group-item">
                <h5>Redução da Procrastinação</h5>
                <p>A estrutura do método incentiva o início imediato das tarefas.</p>
            </li>
        </ul>
    </div>
     </div>
     <div class="col-6">
     <div class="modes btn-group" role="group" aria-label="Basic radio toggle button group">
      <a class="mode btn" href="#" data-time="1500">Pomodoro</a>
      <a class="mode btn" href="#" data-time="300">Pausa curta</a>
      <a class="mode btn" href="#" data-time="900">Pausa longa</a>
      <a class="mode btn" href="./pomodoro.php" data-time="0"> Resetar</a>
      </div>
      <main>
        <div class="pomodoro">
          <h1 class="pomodoro__time"></h1>
          <div class="get-started alert alert-light" role="alert" style="height: 2rem;">
            Clique em uma opção acima para começar!
          </div>
        </div>
      </main>
      <div class="tooltip-container">
        <article class="help__tooltip">
          <img src="./src/question.svg" alt="Question mark" width="30">
          <div class="help__tooltip-content">
            <h4>Ciclo do Pomodoro:</h4>
            <ul>
              <li>Pomodoro</li>
              <li>Pausa curta</li>
              <li>Pomodoro</li>
              <li>Pausa curta</li>
              <li>Pomodoro</li>
              <li>Pausa longa</li>
            </ul>
            <p>Repita!</p>
          </div>
        </article>
      </div>
    </div>
    
  
  </div>  

  

  <?php include './footer.php';?>
  <audio src="./src/sounds/short-alarm-clock-sound.mp3"></audio>

  <script src="src/index.js"></script>
</body>
</html>
