<div class="container>
<a href="<?php echo $base_url ?>/product/index" class="btn btn-success float-end">Back</a>

<form action="<?php echo $base_url ?>/product/save" method="post" class="row g-3 needs-validation mt-5" novalidate="" enctype="multipart/form-data">

	<div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Name <span style="color: red;">*</span></label>
		<input type="text" name="name" class="form-control" required="" placeholder="Product Name">
		<div class="valid-feedback">Looks good!</div>
	</div>

	<div class="col-md-6">
		<label for="validationCustom01" class="form-label">Product Photo</label>
		<input type="file" name="photo" class="form-control" required="">
		<div class="valid-feedback">Looks good!</div>
	</div>


	<div class="col-md-12">
		<label for="validationCustom01" class="form-label">Size<span style="color: red;">*</span></label>
		<input type="text" name="size" class="form-control" required="" placeholder="Size">
		<!-- <textarea class="form-control" id="validationTextarea" placeholder="" required="" name="address" id=""></textarea> -->
		<div class="valid-feedback">Looks good!</div>
	</div>



    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Price <span style="color: red;">*</span></label>
		<input type="number" name="price" class="form-control" required="" placeholder="Price">
		<div class="valid-feedback">Looks good!</div>
	</div>


    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Offer_price <span style="color: red;">*</span></label>
		<input type="number" name="offer_price" class="form-control" required="" placeholder="Offer_price">
		<div class="valid-feedback">Looks good!</div>
	</div>


	<div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Manufacturer_id <span style="color: red;">*</span></label>
		<input type="text" name="manufacturer_id" class="form-control" required="" placeholder="Manufacturer_id">
		<div class="valid-feedback">Looks good!</div>
	</div>
    

    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Categories Name <span style="color: red;">*</span></label>
		
		<select name="categories_id" id="" class="form-select">
			<option value="">Categories Name</option>
			<?php

			$categories =Category::displayAll();
			// foreach($categories as $value){
			// 	echo "<option value='$value[0]'>$value[1]</option>";
			// }
			while($row= $result->fetch_object()){
				echo" <option value='$row->id'>$row->name</option>";
			}
			
			?>
		</select>
		
		
		
		<!-- <input type="text" name="categories_id" class="form-control" required="" placeholder="Categories_id"> -->
		<div class="valid-feedback">Looks good!</div>
	</div>



	<div class="col-md-6">
		<label for="validationCustom01" class="form-label">is_featured <span style="color: red;">*</span></label>
		<select name="is_featured" id="is_featured" class="form-select">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
		<div class="valid-feedback">Looks good!</div>
	</div>

    <div class="col-md-6">
		<label for="validationCustom01" class="form-label">is_brand <span style="color: red;">*</span></label>
		<select name="is_brand" id="is_brand" class="form-select">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
		<div class="valid-feedback">Looks good!</div>
	</div>


	<div class="col-md-6">
		<label for="validationCustom01" class="form-label">Description <span style="color: red;">*</span></label>
		<textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter Product Description"></textarea>
		<div class="valid-feedback">Looks good!</div>
	</div>

	<div class="col-md-6">
		<label for="validationCustom01" class="form-label">Weight <span style="color: red;">*</span></label>
		<input type="text" name="weight" class="form-control" required="" placeholder="Weight">
		<div class="valid-feedback">Looks good!</div>
	</div>




    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Uom_id <span style="color: red;">*</span></label>
		<input type="text" name="uom_id" class="form-control" required="" placeholder="Uom_id">
		<div class="valid-feedback">Looks good!</div>
	</div>




    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Barcode <span style="color: red;">*</span></label>
		<input type="text" name="barcode" class="form-control" required="" placeholder="Barcode">
		<div class="valid-feedback">Looks good!</div>
	</div>

    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Sku <span style="color: red;">*</span></label>
		<input type="text" name="sku" class="form-control" required="" placeholder="Sku">
		<div class="valid-feedback">Looks good!</div>
	</div>

   

    
    <div class="col-md-6">
		<label for="validationCustom01" class="form-label"> Star Rating <span style="color: red;">*</span></label>
		<input type="number" name="star" class="form-control" required="" placeholder="Enter Star Rating" min="0" max="5">
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
		<button class="btn btn-primary" name="btnSubmit" type="submit"><i class="bi bi-save"></i> Save Product</button>
	</div>
</form>
</div>
</div>
</main>
</div>