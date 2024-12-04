<div class="container">
<a href="<?php echo $base_url ?>/status/index" class="btn btn-success float-end">Back</a>

<form action="<?php echo $base_url ?>/status/update" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">

<input type="hidden" name="id" class="form-control" required="" placeholder="" value="<?php echo $status->id ?>">



	<div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Name <span style="color: red;">*</span></label>
		<input type="text" name="name" class="form-control" required="" placeholder="Product Name" value="<?php echo $status->name ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Created_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="create_at" class="form-control" required="" placeholder="Created_at" value="<?php echo $status->create_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Updated_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="updated_at" class="form-control" required="" placeholder="Updated_at" value="<?php echo $status->updated_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>

       

	<div class="col-12">
		<button class="btn btn-primary" name="btnUpdate" type="submit"><i class="bi bi-save"></i> Update </button>
	</div>
</form>
</div>
</div>
</main>
</div>