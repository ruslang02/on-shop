<?php $promo = true; ?>
<header class="row">
	<div class="col-sm">
		<h1><?= getString("name") ?></h1>
		<p class="lead"><?= getString("promo") ?></p>
	</div>
	<div class="col-sm" style="flex-shrink:0">
		<div class="media justify-content-md-center">
			<i class="material-icons p-2 mr-3 bg-success text-white rounded-circle mt-2">phone</i>
			<div>
				<div class="lead">
					<div class="text-nowrap"><?= $siteInfo->phone1 ?></div>
					<div class="text-nowrap"><?= $siteInfo->phone2 ?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm">
		<div class="card mt-3 mt-sm-0">
			<button class="btn btn-light m-3"><?= getString("login") ?></button>
			<hr class="m-0"/>
			<button class="btn btn-primary m-3"><?= getString("register") ?></button>
		</div>
	</div>
</header>