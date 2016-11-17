<div class="well row">

	<!-- column 1 -->
	<div class="col-md-6">
		<!-- name -->
		<p class="lead">
			<?= $name ?>
		</p>

		<!-- image -->
		<img class="img-responsive" src="<?= $image ?>"/>
	</div>

	<!-- column 2 -->
	<div class="col-md-6">
		<!-- description -->
		<p>
			<?= $description ?>
		</p>

		<!-- buy now button -->
		<button data-product="<?= $id ?>" class="purchase btn btn-success">
			<?= $price ?>
		</button>

		<hr/>

		<!-- vendor info -->
		<p><a href="?vendor=<?= $vendor ?>" class="btn btn-default">
			<?= $vendor_name ?>
		</a></p>
		<p>
			<?= $vendor_description ?>
		</p>
	</div>


</div>
