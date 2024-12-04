<div class="container">
<a href="<?php echo $base_url ?>/transaction_type/index" class="btn btn-success float-end"> Back</a>

<form action="<?php echo $base_url ?>/transaction_type/confirm_delete" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">


<input type="hidden" name="id" class="form-control" required="" placeholder="" value="<?php echo $transaction_type->id ?>">





	<div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Name <span style="color: red;">*</span></label>
		<input type="text" name="name" class="form-control" required="" placeholder="transaction_type Name" value="<?php echo $transaction_type->name ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>



    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Factor <span style="color: red;">*</span></label>
		<input type="number" name="factor" class="form-control" required="" placeholder="transaction_type Name" value="<?php echo $transaction_type->factor ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>



	
    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Created_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="create_at" class="form-control" required="" placeholder="Created_at"  value="<?php echo $transaction_type->created_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Updated_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="updated_at" class="form-control" required="" placeholder="Updated_at"  value="<?php echo $transaction_type->updated_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>

       

	<div class="col-12">
		<button class="btn btn-primary" name="btnDelete" type="submit"><i class="bi bi-save"></i> Deletetransaction</button>
	</div>
</form>
</div>
</div>
</main>
</div>