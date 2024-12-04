<div class="container">
<a href="<?php echo $base_url ?>/warehouse/index" class="btn btn-success float-end">Back</a>



<form action="<?php echo $base_url ?>/warehouse/update" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">

<input type="hidden" name="id" class="form-control" required="" placeholder="" value="<?php echo $warehouse->id ?>">

<div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Name <span style="color: red;">*</span></label>
		<input type="text" name="name" class="form-control" required="" placeholder="Warehouse Name" value="<?php echo $warehouse->name ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>

    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Price <span style="color: red;">*</span></label>
		<input type="text" name="phone" class="form-control" required="" placeholder="Phone" value="<?php echo $warehouse->phone ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Location <span style="color: red;">*</span></label>
		<input type="text" name="location" class="form-control" required="" placeholder="Location" value="<?php echo $warehouse->location?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    
    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Address <span style="color: red;">*</span></label>
		<input type="text" name="address" class="form-control" required="" placeholder="Address" value="<?php echo $warehouse->address ?>" >
		<div class="valid-feedback">Looks good!</div>
	</div>

	
    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Created_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="create_at" class="form-control" required="" placeholder="Created_at" value="<?php echo $warehouse->created_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Updated_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="updated_at" class="form-control" required="" placeholder="Updated_at" value="<?php echo $warehouse->updated_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>

       

	<div class="col-12">
		<button class="btn btn-primary" name="btnUpdate" type="submit"><i class="bi bi-save"></i> Update_Warehouse</button>
	</div>
</form>
</div>
</div>
</main>
</div>