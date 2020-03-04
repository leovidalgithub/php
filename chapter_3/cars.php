<?php include "includes/header.php" ?>
<?php include "./cars_includes/cars_data.php" ?>
<?php include "./cars_includes/functions.php" ?>

<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php" ?>
			<div id="contenttext">
				<?php include "includes/title.php" ?>
				<div class="bodytext" style="padding:12px;">
					<form class="container" name="theForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
						<div>
							<label for="orderoptions">Sort by : </label>
							<select style="font-size: 1.2rem;" id="orderoptions" name="orderoptions" onchange="this.form.submit()">
								<option value="1" <?php if ($orderValue == 1) echo "selected" ?>>Not Sorted</option>
								<option value="2" <?php if ($orderValue == 2) echo "selected" ?>>Brand</option>
								<option value="3" <?php if ($orderValue == 3) echo "selected" ?>>Price: High to Low</option>
								<option value="4" <?php if ($orderValue == 4) echo "selected" ?>>Price: Low to High</option>
								<option value="5" <?php if ($orderValue == 5) echo "selected" ?>>Millage: High to Low</option>
								<option value="6" <?php if ($orderValue == 6) echo "selected" ?>>Millage: Low to High</option>
								<option value="7" <?php if ($orderValue == 7) echo "selected" ?>>Year: High to Low</option>
								<option value="8" <?php if ($orderValue == 8) echo "selected" ?>>Year: Low to High</option>
							</select>
						</div>
						<noscript><input type="submit" value="Submit"></noscript>
					</form>

					<?php
					foreach ($cars as $x => $x_value) {
						echo '<div class="media carsexercise">
								<div class="media-left media-middle">
									<img class="media-object img-thumbnail" width="200" src="./cars_includes/images/' . $x_value["image"] . '" alt="Acura">
								</div>
								<div class="media-body">
									<h4 class="media-heading">' . $x_value["year"] . ', ' . $x_value["brand"] . $x_value["model"] . ', ' . $x_value["color"] . '</h4>';

						if ($x_value["oldprice"] > 0) {
							echo '<p class="linethrough">$' . number_format($x_value["oldprice"], 2) . '</p>';
						} else {
							echo '<br>';
						}
						echo '<p class="price">$' . number_format($x_value["price"], 2) . '</p>';
						echo '<p>' . number_format($x_value["millage"], 0) . ' KM</p>
								</div>
						</div>';
					}
					?>

				</div>
			</div>
		</div>
		<?php include "includes/footer.php"; ?>
	</div>

	<script>
		(function(d) {
			if (d.getElementById('orderoptions')) {
				d.getElementById('orderoptions').focus();
			}
		})(document);
	</script>
</body>

</html>