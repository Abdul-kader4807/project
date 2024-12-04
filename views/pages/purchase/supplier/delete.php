<div class="container">
<a href="<?php echo $base_url ?>/supplier/index" class="btn btn-success float-end">Back</a>

<form action="<?php echo $base_url ?>/supplier/confirm_delete" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">

<input type="hidden" name="id" class="form-control" required="" placeholder="" value="<?php echo $supplier->id ?>">



	<div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Name <span style="color: red;">*</span></label>
		<input type="text" name="name" class="form-control" required="" placeholder="Product Name" value="<?php echo $supplier->name ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>



    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Phone <span style="color: red;">*</span></label>
		<input type="text" name="phone" class="form-control" required="" placeholder="Phone" value="<?php echo $supplier->phone ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>




    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Email <span style="color: red;">*</span></label>
		<input type="text" name="email" class="form-control" required="" placeholder="Email" value="<?php echo $supplier->email ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Address <span style="color: red;">*</span></label>
		<input type="text" name="address" class="form-control" required="" placeholder="Address" value="<?php echo $supplier->address ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>

	<div class="col-md-6">
		<label for="validationCustom01" class="form-label">Customer Photo</label>
		<input type="file" name="photo" class="form-control" required="" value="<?php echo $supplier->photo ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>

    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Created_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="create_at" class="form-control" required="" placeholder="Created_at" value="<?php echo $supplier->create_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Updated_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="updated_at" class="form-control" required="" placeholder="Updated_at" value="<?php echo $supplier->updated_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>

       

	<div class="col-12">
		<button class="btn btn-primary" name="btnDelete" type="submit"><i class="bi bi-save"></i> Delete </button>
	</div>
</form>
</div>
</div>
</main>
</div>