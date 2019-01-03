<?php
require_once('controller/controller.php');
require_once('connection.php');
		$controller = new Controller();
		$n = $controller->change();
		$h = $controller->change1();
		$t = $controller->change2();
?>  
			      <?php
			      foreach ($n as $key) 
			      {
			      ?>
			      <tr style="border-bottom: 1px solid #ddd;">
			        <td class="a"><?=$key->getcurrency();?></td>
					<td id="sell" 
						<?php if ($key->getstatus() == 2) 
			            {
			               echo 'style="color: green"';
			              
			            }elseif ($key->getstatus() == 1) {
			              echo 'style="color: red"';
			            } ?>><?=$key->getcell();?>
			        </td>
			        <td 
				        <?php if ($key->getstatus() == 2) 
				            {
				               echo 'style="color: green"';
				              
				            }elseif ($key->getstatus() == 1) 
				            {
				              echo 'style="color: red"';
		            		} ?>><?=$key->getbuy();?>
		            </td>
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
