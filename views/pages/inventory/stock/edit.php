<div class="container">

<!-- <?php

print_r($stock);

?> -->
	<a href="<?php echo $base_url ?>/stock/index" class="btn btn-success float-end">GO Back</a>



	<form action="<?php echo $base_url ?>/stock/update" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">


		<input type="hidden" name="id" class="form-control" required="" placeholder="" value="<?php echo $stock->id ?>">

		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Products_id <span style="color: red;">*</span></label>
			<input type="number" name="products_id" class="form-control" required="" placeholder="Products_id" value="<?php echo $stock->products_id ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>

		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Transaction_type_id <span style="color: red;">*</span></label>
			<input type="number" name="transaction_type_id" class="form-control" required="" placeholder="transaction_type_id" value="<?php echo $stock->transaction_type_id ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>


		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> warehouse_id <span style="color: red;">*</span></label>
			<input type="number" name="warehouse_id" class="form-control" required="" placeholder="warehouse_id" value="<?php echo $stock->warehouse_id ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>



		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Qty <span style="color: red;">*</span></label>
			<input type="number" name="qty" class="form-control" required="" placeholder="Qty" value="<?php echo $stock->qty ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>


		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Remark <span style="color: red;">*</span></label>
			<input type="text" name="remark" class="form-control" required="" placeholder="Remark" value="<?php echo $stock->remark ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>



		<div class="col-md-6">
			<label for="validationCustom01" class="form-label">Created_at <span style="color: red;">*</span></label>
			<input type="datetime-local" name="created_at" class="form-control" required="" placeholder="Created_at" value="<?php echo $product->created_at?>">
			<div class="valid-feedback">Looks good!</div>
		</div>


		<div class="col-md-6">
			<label for="validationCustom01" class="form-label">Updated_at <span style="color: red;">*</span></label>
			<input type="datetime-local" name="updated_at" class="form-control" required="" placeholder="Updated_at" value="<?php echo $product->updated_at?>">
			<div class="valid-feedback">Looks good!</div>
		</div>



		<div class="col-12">
			<button class="btn btn-primary" name="btnUpdate" type="submit"><i class="bi bi-save"></i> update stock</button>
		</div>
	</form>
</div>
</div>
</main>
</div>