<div class="container">
<a href="<?php echo $base_url ?>/order_details/index" class="btn btn-success float-end">Back</a>

<form action="<?php echo $base_url ?>/order_details/confirm_delete" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">

<input type="hidden" name="id" class="form-control" required="" placeholder="" value="<?php echo $order_details->id ?>">




    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> order_id <span style="color: red;">*</span></label>
		<input type="number" name="order_id" class="form-control" required="" placeholder="order_id" value="<?php echo $order_details->order_id ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> products_id <span style="color: red;">*</span></label>
		<input type="number" name="products_id" class="form-control" required="" placeholder="products_id" value="<?php echo $order_details->products_id ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    
    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> qty <span style="color: red;">*</span></label>
		<input type="number" name="qty" class="form-control" required="" placeholder="qty" value="<?php echo $order_details->qty ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> price <span style="color: red;">*</span></label>
		<input type="number" name="price" class="form-control" required="" placeholder="price" value="<?php echo $order_details->price ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>

    
	<div class="col-md-6">
		<label for="validationCustom01" class="form-label">vat <span style="color: red;">*</span></label>
		<input type="number" name="vat" class="form-control" required="" placeholder="vat" value="<?php echo $order_details->vat ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>




    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Created_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="create_at" class="form-control" required="" placeholder="Created_at" value="<?php echo $order_details->create_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Updated_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="updated_at" class="form-control" required="" placeholder="Updated_at" value="<?php echo $order_details->updated_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>

       

	<div class="col-12">
		<button class="btn btn-primary" name="btnDelete" type="submit"><i class="bi bi-save"></i> Order_delete</button>
	</div>
</form>
</div>
</div>
</main>
</div>