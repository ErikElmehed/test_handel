
<?php require 'header.php'; ?> 

<div class="section-wrapper">
	<div class="onerow">
		<div class="col6">
			<p>Våra produkter:</p>
		</div>
		<div class="col6 last">
			<i class="fa fa-shopping-cart"></i>
		</div>
		<div class="onerow">
			<div class="col8">
				<ul>
				<?php
					$drinks = array(
						array('Coke zero', 50, 15),
						array('Coke zero', 33, 10),
						array('Julmust', 50, 20),
						array('Julmust', 33, 10),
						array('Beer', 50, 25),
						array('Beer', 33, 10)
						);
				

				for ($i=0; $i<count($drinks); $i++) { 
					$name = $drinks[$i][0];
					$size = $drinks[$i][1];
					$price = $drinks[$i][2];

					echo "<li>" . $name . " " . $size . "cl " . $price . "kr<br></li>";
				}

				?>
				</ul>
			</div>
			<div class="col4 last">
				
			</div>
		</div>
	<?php require 'footer.php'; ?> 


