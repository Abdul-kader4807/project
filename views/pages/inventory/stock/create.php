<div class="container">
<a href="<?php echo $base_url ?>/stock/index" class="btn btn-success float-end">Back</a>


                                    


<form action="<?php echo $base_url ?>/stock/save" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">

	<div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Products_id <span style="color: red;">*</span></label>
		<input type="number" name="products_id<" class="form-control" required="" placeholder="products_id">
		<div class="valid-feedback">Looks good!</div>
	</div>

    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Transaction_type_id <span style="color: red;">*</span></label>
		<input type="number" name="transaction_type_id" class="form-control" required="" placeholder="transaction_type_id">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> warehouse_id <span style="color: red;">*</span></label>
		<input type="number" name="warehouse_id" class="form-control" required="" placeholder="warehouse_id">
		<div class="valid-feedback">Looks good!</div>
	</div>


    
    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Qty <span style="color: red;">*</span></label>
		<input type="number" name="qty" class="form-control" required="" placeholder="Qty">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Remark <span style="color: red;">*</span></label>
		<input type="text" name="remark" class="form-control" required="" placeholder="Remark">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Created_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="create_at" class="form-control" required="" placeholder="Created_at">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Updated_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="updated_at" class="form-control" required="" placeholder="Updated_at">
		<div class="valid-feedback">Looks good!</div>
	</div>

       

	<div class="col-12">
		<button class="btn btn-primary" name="btnSubmit" type="submit"><i class="bi bi-save"></i> Stock Product</button>
	</div>
</form>
</div>
</div>
</main>
</div>