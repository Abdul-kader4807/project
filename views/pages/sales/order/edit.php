<div class="container">
<a href="<?php echo $base_url ?>/order/index" class="btn btn-success float-end">Back</a>

<form action="<?php echo $base_url ?>/order/update" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">

<input type="hidden" name="id" class="form-control" required="" placeholder="" value="<?php echo $order->id ?>">


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Customers_id <span style="color: red;">*</span></label>
		<input type="number" name="customers_id" class="form-control" required="" placeholder="customers_id" value="<?php echo $order->customers_id ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Order_total <span style="color: red;">*</span></label>
		<input type="number" name="order_total" class="form-control" required="" placeholder="order_total" value="<?php echo $order->order_total ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    
    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> discount <span style="color: red;">*</span></label>
		<input type="number" name="discount" class="form-control" required="" placeholder="discount" value="<?php echo $order->discount ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>

    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Shipping_address <span style="color: red;">*</span></label>
		<textarea name="shipping_address" id="description" class="form-control" rows="3" placeholder="shipping_address" value="<?php echo $order->shipping_address ?>"></textarea>
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Paid_amount <span style="color: red;">*</span></label>
		<input type="number" name="paid_amount" class="form-control" required="" placeholder="paid_amount" value="<?php echo $order->paid_amount ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>



    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Status_id <span style="color: red;">*</span></label>
		<input type="number" name="status_id" class="form-control" required="" placeholder="status_id" value="<?php echo $order->status_id ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> order_date <span style="color: red;">*</span></label>
		<input type="datetime-local" name="order_date" class="form-control" required="" placeholder="order_date" value="<?php echo $order->order_date ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>



    
    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Delivery_date <span style="color: red;">*</span></label>
		<input type="datetime-local" name="delivery_date" class="form-control" required="" placeholder="delivery_date" min="0" max="5" value="<?php echo $order->delivery_date ?>">
		<div class="valid-feedback">Looks good!</div>
</div>

    
	<div class="col-md-6">
		<label for="validationCustom01" class="form-label">vat <span style="color: red;">*</span></label>
		<input type="number" name="vat" class="form-control" required="" placeholder="vat" value="<?php echo $order->vat ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>




    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Created_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="create_at" class="form-control" required="" placeholder="Created_at" value="<?php echo $order->create_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">Updated_at <span style="color: red;">*</span></label>
		<input type="datetime-local" name="updated_at" class="form-control" required="" placeholder="Updated_at" value="<?php echo $order->updated_at ?>">
		<div class="valid-feedback">Looks good!</div>
	</div>

       

	<div class="col-12">
		<button class="btn btn-primary" name="btnUpdate" type="submit"><i class="bi bi-save"></i> Update</button>
	</div>
</form>
</div>
</div>
</main>
</div>