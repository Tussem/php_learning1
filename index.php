<?php require "blocks/header.php"?>

<div class="container mt-5">
    <h2 class="mb-5">Articles</h2>
    <div class="d-flex flex-wrap">
    <?php 

        for ($i = 0; $i < 5; $i++): 
    ?>

      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-body">
            <img src="img/<?php echo ($i + 1)?>.jpg" alt="">
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
    
    <?php
    endfor;
    ?>
    </div>
</div>

<?php require "blocks/footer.php" ?>
