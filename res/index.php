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
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#periodo1" class="mdl-layout__tab is-active mdl-color--orange-200">PERIODO 1</a>
          <a href="#periodo2" class="mdl-layout__tab">PERIODO 2</a>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="periodo1">

          <table class="mdl-data-table mdl-shadow--2dp">
            <thead>
              <tr>
                <th>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select" for="table-header">
                      <input type="checkbox" id="table-header" class="mdl-checkbox__input" />
                    </label>
                </th>
                <th class="mdl-data-table__cell--non-numeric">Código</th>
                <th>Nome da Disciplina</th>
                <th>Dependências</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                 <td>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select" for="row[1]">
                      <input type="checkbox" id="row[1]" class="mdl-checkbox__input" />
                    </label>
                </td>
                <td class="mdl-data-table__cell--non-numeric">COMP0001</td>
                <td>Programação Imperativa</td>
                <td>Nenhum</td>
              </tr>
              <tr class="mdl-color--grey-300">
                 <td>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select" for="row[2]">
                      <input type="checkbox" id="row[2]" class="mdl-checkbox__input" checked />
                    </label>
                </td>
                <td class="mdl-data-table__cell--non-numeric">MAT0001</td>
                <td>Cálculo I</td>
                <td>MAT0002: Cálculo II</td>
              </tr>
              <tr>
                <td>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select" for="row[3]">
                      <input type="checkbox" id="row[3]" class="mdl-checkbox__input" />
                    </label>
                </td>
                <td class="mdl-data-table__cell--non-numeric">MAT0003</td>
                <td>Vetores e Geometria Analítica</td>
                <td>Nenhum</td>
              </tr>
            </tbody>
          </table>

        </div>
        <div class="mdl-layout__tab-panel" id="periodo2">

          <table class="mdl-data-table mdl-shadow--2dp">
            <thead>
              <tr>
                <th>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select" for="table-header">
                      <input type="checkbox" id="table-header" class="mdl-checkbox__input" />
                    </label>
                </th>
                <th class="mdl-data-table__cell--non-numeric">Código</th>
                <th>Nome da Disciplina</th>
                <th>Dependências</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                 <td>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select" for="row[1]">
                      <input type="checkbox" id="row[1]" class="mdl-checkbox__input" />
                    </label>
                </td>
                <td class="mdl-data-table__cell--non-numeric">COMP0001</td>
                <td>Programação Orientada a Objetos</td>
                <td>COMP0001: Programação Imperativa</td>
              </tr>
              <tr>
                 <td>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select" for="row[2]">
                      <input type="checkbox" id="row[2]" class="mdl-checkbox__input" checked />
                    </label>
                </td>
                <td class="mdl-data-table__cell--non-numeric">MAT0002</td>
                <td>Cálculo II</td>
                <td>MAT0002: Cálculo I</td>
              </tr>
              <tr>
                <td>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect mdl-data-table__select" for="row[3]">
                      <input type="checkbox" id="row[3]" class="mdl-checkbox__input" />
                    </label>
                </td>
                <td class="mdl-data-table__cell--non-numeric">COMP0004</td>
                <td>Lógica para Computação</td>
                <td>Nenhum</td>
              </tr>
            </tbody>
          </table>

        </div>
        <?php include '../footer.php'; ?>
      </main>
    </div>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  </body>
</html>
