<div class="container">

<!-- <?php

print_r($product);

?> -->
	<a href="<?php echo $base_url ?>/product/index" class="btn btn-success float-end">GO Back</a>




	<form action="<?php echo $base_url ?>/product/update" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">


		<input type="hidden" name="id" class="form-control" required="" placeholder="" value="<?php echo $product->id ?>">

		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Name <span style="color: red;">*</span></label>
			<input type="text" name="name" class="form-control" required="" placeholder="Product Name" value="<?php echo $product->name ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>


		<div class="col-md-6">
			<label for="validationCustom01" class="form-label">Product Photo</label>
			<input type="file" name="photo" class="form-control" required="" value="<?php echo $product->photo ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>


		<div class="col-md-12">
			<label for="validationCustom01" class="form-label">Size<span style="color: red;">*</span></label>
			<input type="text" name="size" class="form-control" required="" placeholder="Size" value="<?php echo $product->size ?>">
			<!-- <textarea class="form-control" id="validationTextarea" placeholder="" required="" name="address" id=""></textarea> -->
			<div class="valid-feedback">Looks good!</div>
		</div>



		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Price <span style="color: red;">*</span></label>
			<input type="number" name="price" class="form-control" required="" placeholder="Price" value="<?php echo $product->price ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>


		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Offer_price <span style="color: red;">*</span></label>
			<input type="number" name="offer_price" class="form-control" required="" placeholder="Offer_price" value="<?php echo $product->offer_price ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>


		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Manufacturer_id <span style="color: red;">*</span></label>
			<input type="text" name="manufacturer_id" class="form-control" required="" placeholder="Manufacturer_id" value="<?php echo $product->manufacturer_id ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>



		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Categories_id <span style="color: red;">*</span></label>
			<input type="text" name="categories_id" class="form-control" required="" placeholder="Categories_id" value="<?php echo $product->categories_id ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>


		<div class="col-md-6">
			<label for="validationCustom01" class="form-label">Description <span style="color: red;">*</span></label>
			<textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter Product Description" value="<?php echo $product->description ?>"></textarea>
			<div class="valid-feedback">Looks good!</div>
		</div>

		<div class="col-md-6">
			<label for="validationCustom01" class="form-label">Weight <span style="color: red;">*</span></label>
			<input type="text" name="weight" class="form-control" required="" placeholder="Weight" value="<?php echo $product->weight ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>



		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Uom_id <span style="color: red;">*</span></label>
			<input type="text" name="uom_id" class="form-control" required="" placeholder="Uom_id" value="<?php echo $product->uom_id ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>




		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Barcode <span style="color: red;">*</span></label>
			<input type="text" name="barcode" class="form-control" required="" placeholder="Barcode" value="<?php echo $product->barcode ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>

		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Sku <span style="color: red;">*</span></label>
			<input type="text" name="sku" class="form-control" required="" placeholder="Sku" value="<?php echo $product->sku ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>

		


		<div class="col-md-6">
			<label for="validationCustom01" class="form-label"> Star Rating <span style="color: red;">*</span></label>
			<input type="number" name="star" class="form-control" required="" placeholder="Enter Star Rating" min="0" max="5" value="<?php echo $product->star ?>">
			<div class="valid-feedback">Looks good!</div>
		</div>


		<div class="col-md-6">
			<label for="validationCustom01" class="form-label">is_featured <span style="color: red;">*</span></label>
			<select name="is_featured" id="is_featured" class="form-select" value="<?php echo $product->is_featured ?>">
				<option value="0">No</option>
				<option value="1">Yes</option>
			</select>
			<div class="valid-feedback">Looks good!</div>
		</div>

		<div class="col-md-6">
			<label for="validationCustom01" class="form-label">is_brand <span style="color: red;">*</span></label>
			<select name="is_brand" id="is_brand" class="form-select" value="<?php echo $product->is_brand?>">
				<option value="0">No</option>
				<option value="1">Yes</option>
			</select>
			<div class="valid-feedback">Looks good!</div>
		</div>


		<div class="col-md-6">
			<label for="validationCustom01" class="form-label">Created_at <span style="color: red;">*</span></label>
			<input type="datetime-local" name="created_at" class="form-control" required="" placeholder="Created_at" value="<?php echo $product->created_at?>">
			<div class="valid-feedback">Looks good!</div>
		</div>


		<div class="col-md-6">
			<label for="validationCustom01" class="form-label">Updated_at <span style="color: red;">*</span></label>
			<input type="datetime-local" name="updated_at" class="form-control" required="" placeholder="Updated_at" value="<?php echo $product->updated_at?>">
			<div class="valid-feedback">Looks good!</div>
		</div>



		<div class="col-12">
			<button class="btn btn-primary" name="btnUpdate" type="submit"><i class="bi bi-save"></i> update Product</button>
		</div>
	</form>
</div>
</div>
</main>
</div>