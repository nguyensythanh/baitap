<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thanh</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style type="text/css">
  td
  {
    border-right: 1px solid grey;
    text-align: center;
  }
  th
  {
    text-align: center;
    color: blue;
  }
  .a{color: #51b9b4;}
</style>
<script>
        $(document).ready(setTimeout(function(){
          $("#change").load("ajax.php");
      },5000));
</script>
<body>
<div class="container">            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Currency</th>
        <th>Sell</th>
        <th>Buy</th>
        <th></th>
        <th>Change</th>
        <th>High</th>
        <th>Low</th>
      </tr>
    </thead>
    <tbody id="change">
      <?php
      foreach ($l as $key) 
      {
      ?>
      <tr style="border-bottom: 1px solid #ddd;">
        <td class="a"><?=$key->getcurrency();?></td>
        <td id="sell"<?php if ($key->getstatus() == 2) 
            {
               echo 'style="color: green"';
              
            }elseif ($key->getstatus() == 1) {
              echo 'style="color: red"';
            } ?> ><?=$key->getcell();?></td>
        <td id="buy" <?php if ($key->getstatus() == 2) 
            {
               echo 'style="color: green"';
              
            }elseif ($key->getstatus() == 1) {
              echo 'style="color: red"';
            } ?>><?=$key->getbuy();?></td>
        <td>
          <?php
            if ($key->getstatus() == 2) 
            {
               echo "<i class='fas fa-angle-down' style='font-size:24px;color:green;'></i>";
            }elseif ($key->getstatus() == 1) {
              echo "<i class='fas fa-angle-up' style='font-size:24px;color:red;'></i>";
            }else{echo "";} 
          ?>
        </td>
        <td><?=$key->getchange().'%';?></td>
        <td>
          <?php
            foreach ($h as $k) 
            {
              if ($key->getcurrency() == $k->getcurrency()) 
              {
               echo $k->getbuy();
              }
            }
          ?>
        </td>
        <td>
          <?php
            foreach ($t as $tt) 
            {
              if ($key->getcurrency() == $tt->getcurrency()) 
              {
                echo $tt->getcell();
              }
            }
          ?>
        </td>
      </tr>
      <?php
        } 
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
