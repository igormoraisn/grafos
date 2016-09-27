<?php

function head($titulo){
  echo "
  <header class=\"demo-header mdl-layout__header mdl-layout__header--scroll mdl-color--grey-100 mdl-color-text--grey-800\">
    <div class=\"mdl-layout__header-row\">
      <span class=\"mdl-layout-title\">". $titulo ."</span>
      <div class=\"mdl-layout-spacer\"></div>
    </div>
  </header> ";
}

?>
