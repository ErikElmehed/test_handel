
<?php require 'header.php'; ?> 

<div class="section-wrapper">
	<div class="onerow">
		<div class="col6">
			<h1>Välkommen till världens bästa E-handel</h1>
			<h2>Här kan du hitta allt du vill mellan himmel och jord</h2>
		</div>
		<div class="col6 last">
			<p>kom å kööp!</p>
		</div>
		<div class="onerow">
			<div class="col8">
				<ul>
				<?php
					$drinks = array(
						array('Coke zero', 50, 15),
						array('Coke zero', 33, 10),
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


