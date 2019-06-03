<?php
function neededcontainer() {
  echo '
    <div class="neededpers">
      <p class="neededpers_Search"><span class=neededpers_titl>Wir suchen:</span> Grafiker</p>
      <p class="neededpers_pay"><span class=neededpers_titl>Wir bieten</span> 20.- pro std.</p>
    </div>

    <style media="screen">

    .neededpers {
      background: rgba(230, 0, 227, 0.5);
      border-radius: 4px;
      display: inline-block;
      margin-right: 10px;
      width: 300px;
      height: 100px;
    }
    .neededpers > .neededpers_titl {
      font-weight: bold;
    }
    .neededpers > .neededpers_Search, .neededpers_pay {
      color: #fff;
      display: block;
      position: absolute;
      height: 30px;
      text-align: center;
      width: 300px;
    }
    .neededpers > .neededpers_Search {
      margin-top: 20px;
    }
    .neededpers > .neededpers_pay {
      margin-top: 60px;
    }
    </style>

  ';

}
 ?>
