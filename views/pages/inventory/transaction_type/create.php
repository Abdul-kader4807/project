<div class="container">
<a href="<?php echo $base_url ?>/transaction_type/index" class="btn btn-success float-end"> Back</a>

<form action="<?php echo $base_url ?>/transaction_type/save" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">

	<div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Name <span style="color: red;">*</span></label>
		<input type="text" name="name" class="form-control" required="" placeholder="transaction_type Name">
		<div class="valid-feedback">Looks good!</div>
	</div>



    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Factor <span style="color: red;">*</span></label>
		<input type="number" name="factor" class="form-control" required="" placeholder="factor">
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
		<button class="btn btn-primary" name="btnSubmit" type="submit"><i class="bi bi-save"></i> Savetransaction</button>
	</div>
</form>
</div>
</div>
</main>
</div>