<?php
function Cevent($key, $value) {
  echo '<div class="event">
          <a href="/pages/project/?id=';
          print_r($value['id']);
          echo '">
          <div class="eventbild">
            <img src="/media/Bilder/events/event_id_';
            print_r($value['id']);
            echo '/mainimg.jpg" alt="">
          </div>
          <div class="eventtextcontainer">
            <h1 class="eventtitel">
            ';
            print_r($value['name']);
            echo '
            </h1>
            <div class="ersteller">
              von: ';
              print_r($value['username']);
              echo '
            </div>
            <h2>Teaser</h2>
            <div class="eventTeaser">
            ';
            print_r($value['teaser']);
            echo '
            </div>
        </div>
        </a>
      </div>
';
}
 ?>
<div data-v-b2f2b4f0 class="eventscontaiener">
  <div class="eventsspalte">

    <?php
    $index = 0;
    foreach ($prow as $key=>$value) {
      if ($index % 3 == 0) {

        Cevent($key, $value);
      }
      $index++;
    }
      ?>
  </div>
  <div class="eventsspalte">
    <?php
    $index = 0;
    foreach ($prow as $key=>$value) {
      if ($index % 3 == 1) {

        Cevent($key, $value);
      }
      $index++;
    }
      ?>
  </div>
  <div class="eventsspalte">
    <?php
    $index = 0;
    foreach ($prow as $key=>$value) {
      if ($index % 3 == 2) {

        Cevent($key, $value);
      }
      $index++;
    }
      ?>

  </div>
</div>

<style media="screen">
  .eventscontaiener[data-v-b2f2b4f0] {
    width: 75vw;
    margin-left: calc((100vw - 75vw) / 2);
    padding-top: 50px;
    min-height: 110vh;
  }
  .eventscontaiener[data-v-b2f2b4f0] a {
    color: black;
  }
  .eventscontaiener[data-v-b2f2b4f0] a:hover {
    color: black;
  }
  .eventscontaiener[data-v-b2f2b4f0] .eventsspalte {
    vertical-align: top;
    width: 32.5%;
    display: inline-block;
    box-sizing: border-box;
    padding: calc(2.5px);
  }

  .eventscontaiener[data-v-b2f2b4f0] .event {
    /* padding: calc(100vw / 3 - (5 * 2.5px)); */
    cursor: pointer;
    width: 100%;
    margin-bottom: 35px;
    box-sizing: border-box;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(94, 94, 94, 0.41);
  }
  .eventscontaiener[data-v-b2f2b4f0] .eventbild {
    width: 100%;
  }
  .eventscontaiener[data-v-b2f2b4f0] .eventbild > img {
    border-top-right-radius: 5px;
    border-top-left-radius: 5px;
    width: 100%;
    height: 30vh;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    object-fit: cover;
  }
  .eventscontaiener[data-v-b2f2b4f0] .eventtextcontainer {
    padding: 8px;
  }
  .eventscontaiener[data-v-b2f2b4f0] h1 {
    padding: 0px;
    margin: 0px;
    padding-top: 20px;
  }
  .eventscontaiener[data-v-b2f2b4f0] .ersteller {
    padding: 0px;
    margin-top: 5px;
  }
  .eventscontaiener[data-v-b2f2b4f0] h2 {
    margin-top: 20px;
  }
  .eventscontaiener[data-v-b2f2b4f0] .eventTeaser {
    margin-bottom: 20px;
    font-size: 16px;
    line-height: 1.4;
  }



</style>
