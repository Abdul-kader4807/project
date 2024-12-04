<div class="container">
<a href="<?php echo $base_url ?>/warehouse/index" class="btn btn-success float-end">Back</a>

<form action="<?php echo $base_url ?>/warehouse/save" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">

	<div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Name <span style="color: red;">*</span></label>
		<input type="text" name="name" class="form-control" required="" placeholder="Warehouse Name">
		<div class="valid-feedback">Looks good!</div>
	</div>

    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Price <span style="color: red;">*</span></label>
		<input type="text" name="phone" class="form-control" required="" placeholder="Phone">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Location <span style="color: red;">*</span></label>
		<input type="text" name="location" class="form-control" required="" placeholder="Location">
		<div class="valid-feedback">Looks good!</div>
	</div>


    
    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Address <span style="color: red;">*</span></label>
		<input type="text" name="address" class="form-control" required="" placeholder="Address">
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
		<button class="btn btn-primary" name="btnSubmit" type="submit"><i class="bi bi-save"></i> Save Warehouse</button>
	</div>
</form>
</div>
</div>
</main>
</div>