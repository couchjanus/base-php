<?php
require_once VIEWS.'includes/head.php';
require_once VIEWS.'includes/nav.php';
?>
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1><?=$title?></h1>
        <h2><?=$_SERVER['REQUEST_URI']?></h2>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button"><?=SLOGAN?></a></p>
      </div>

      <div class="row">
      <?php foreach ($result as $row):?>
        <div class="col-lg-4">
          <h2><?=$row['title']?></h2>
          <p><?=$row['content']?></p>
          <p><a class="btn btn-primary" href="/show/<?=$row['id']?>" role="button">View details &raquo;</a></p>
        </div>
      <?php endforeach;?>
       
      </div>
<?php
require_once VIEWS.'includes/footer.php';
