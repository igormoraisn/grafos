<!DOCTYPE html>

<html lang="pt-br">
  <head>
    <?php include 'head.php'; ?>
    <style>
      body{
        text-align: center;
        align-items: center;
        align-content: center;
        align-self: center;
      }
    </style>
  </head>
  <body>
    <!--  O CORPO DO SITE DEVE ESTAR DENTRO DESSA PROXIMA DIV -->
    <div class="demo-layout mdl-layout mdl-layout--fixed-header mdl-js-layout mdl-color--grey-100">
      <?php include 'header.php'; head("Teste de Validade da Grade Curricular");?>
      <div class="demo-ribbon"></div>
      <main class="demo-main mdl-layout__content">
        <div class="demo-container mdl-grid">
          <div class="mdl-cell mdl-cell--2-col mdl-cell--hide-tablet mdl-cell--hide-phone"></div>
          <div class="demo-content mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--8-col">
            <div class="demo-crumbs mdl-color-text--grey-500">
            </div>
            <h3>Arquivo com Grade Curricular do Curso</h3>
            <form enctype="multipart/form-data" action="" method="post" name="form" >
              <p> <input type="file" name="arquivo" /> </p>
              <p><input type="submit" name="enviar" value="Enviar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" /> </p>
            </form>
          </div>
        </div>
        <?php include 'footer.php';?>
      </main>
    </div>
  </body>
</html>
