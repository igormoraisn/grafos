<?php
function imprimePagina($grafo, $status){
  echo '
  <!DOCTYPE html>

  <html lang="pt-br">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
      <title>Teste de Grade Curricular</title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.deep_purple-pink.min.css">
      <link rel="stylesheet" href="css/styles.css">
      <style>
        body{
          text-align: center;
          align-items: center;
          align-content: center;
          align-self: center;
        }
      </style>
    </head>

    <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
      <div class="mdl-cell-2-col"> </div>

      <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-cell-8-col">
        <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
          <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          </div>
          <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            <h3>Resultado do Processamento</h3>
          </div>
          <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          </div>
          <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">';
          echo $status." erros encontrados!";
          $niveis = $grafo->getNivel();
          $niveisMax = max($niveis);
          for($i=1; $i<=$niveisMax; $i++){
            if($i==1){
              echo '<a href="#periodo'. $i .'" class="mdl-layout__tab is-active">PERIODO '. $i .'</a>';
            } else{
              echo '<a href="#periodo'. $i .'" class="mdl-layout__tab">PERIODO '. $i .'</a>';
            }
          }
        echo '
        </div>
      </header>
      <main class="mdl-layout__content">';
      $disciplinas = $grafo->getDisciplinas();
      $nomes = $grafo->getNomes();
      $tam = $grafo->getVertices();
      $matriz = $grafo->getMatriz();
        for($i=1; $i<=$niveisMax; $i++){

          if($i == 1){
            echo '<div class="mdl-layout__tab-panel is-active" id="periodo'.$i.'">';
          } else{
            echo '<div class="mdl-layout__tab-panel" id="periodo'.$i.'">';
          }

          echo '
          <table class="mdl-data-table mdl-shadow--2dp">
            <thead>
              <tr>
                <th class="mdl-data-table__cell--non-numeric">Código</th>
                <th>Nome da Disciplina</th>
                <th>Dependências</th>
              </tr>
            </thead>
            <tbody>';
              for($j=0; $j<$tam; $j++){
                if($niveis[$j] == $i){
                  echo '
                  <tr>
                    <td class="mdl-data-table__cell--non-numeric">' . $disciplinas[$j] . '</td>
                    <td>' . $nomes[$j] . '</td><td>';
                    for($l=0;$l<$tam;$l++){
                      if($matriz[$l][$j] == 1){
                          echo $nomes[$l].";";
                      }
                    }
                    echo '</td>
                  </tr>';
              }
              }
            echo '
            </tbody>
          </table>
      </div>';

        }
        echo '
        </div>
        <footer class="demo-footer mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <ul class="mdl-mini-footer--link-list">
              <li><a href="#">Ajuda</a></li>
              <li><a href="#">Privacidade e Termos de Uso</a></li>
              <li><a href="#">Termos de Concordância ao Uso</a></li>
            </ul>
          </div>
        </footer>
      </main>
    </div>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  </body>
</html>';
}
?>
