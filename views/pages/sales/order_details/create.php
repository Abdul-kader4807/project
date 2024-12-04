<div class="container">
<a href="<?php echo $base_url ?>/order_details/index" class="btn btn-success float-end">Back</a>

<form action="<?php echo $base_url ?>/order_details/save" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">

	
    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> order_id <span style="color: red;">*</span></label>
		<input type="number" name="order_id" class="form-control" required="" placeholder="order_id">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> products_id <span style="color: red;">*</span></label>
		<input type="number" name="products_id" class="form-control" required="" placeholder="products_id">
		<div class="valid-feedback">Looks good!</div>
	</div>


    
    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> qty <span style="color: red;">*</span></label>
		<input type="number" name="qty" class="form-control" required="" placeholder="qty">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> price <span style="color: red;">*</span></label>
		<input type="number" name="price" class="form-control" required="" placeholder="price">
		<div class="valid-feedback">Looks good!</div>
	</div>

    
	<div class="col-md-6">
		<label for="validationCustom01" class="form-label">vat <span style="color: red;">*</span></label>
		<input type="number" name="vat" class="form-control" required="" placeholder="vat">
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
		<button class="btn btn-primary" name="btnSubmit" type="submit"><i class="bi bi-save"></i> Order_details</button>
	</div>
</form>
</div>
</div>
</main>
</div>