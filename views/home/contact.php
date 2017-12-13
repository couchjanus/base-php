<?php
require_once VIEWS.'includes/head.php';
require_once VIEWS.'includes/nav.php';
?>
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1><?=$title?></h1>
      </div>
    
    <div class="container form-wrap">
        <div class="col-12">
            <form action="" enctype="application/x-www-form-urlencoded" id="contact-form" class="form-horizontal" method="post">
                <div class="form-group col-12">
                    <label for="form-name" class="col-2 control-label">Your name:</label>
                    <div class="col-10">
                        <input type="text" class="form-control" id="form-name" name="form-name" placeholder="" required>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="form-email" class="col-2 control-label">Email:</label>
                    <div class="col-10">
                        <input type="email" class="form-control" id="form-email" name="form-email" placeholder="" required>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="form-message" class="col-2 control-label">Messahe:</label>
                    <div class="col-10">
                        <textarea class="form-control" rows="3" id="form-message" name="form-message" placeholder="" required></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-10">
                        <button type="submit" class="submit">Send</button>
                    </div>
                </div>
            </form>
            
        </div>
     </div>
<?php
require_once VIEWS.'includes/footer.php';
