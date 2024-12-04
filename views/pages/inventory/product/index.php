
<div><a href="<?php echo $base_url ?>/product/create" class="btn btn-success float-end mt-2 ">Add Product</a></div>
<div class="container">


<div class="card-body pt-2 mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border-primary align-middle table-striped ">
                                                <thead class="table-success">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Photo</th>
                                                        <th>Size</th>
                                                        <th>Price</th>
                                                        <th>Offer_price</th>
                                                        <th>Manufacturer_id</th>
                                                        <th>Categories_id</th>
                                                        <th>is_featured</th>
                                                        <th>is_brand</th>
                                                        <th>Description</th>
                                                        <th>Weight</th>
                                                        <th>Uom_id</th>
                                                        <th>Barcode</th>
                                                        <th>Sku</th>
                                                        <th>Star</th>
                                                        <th>Created_at</th>
                                                        <th>Updated_at</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php Product::display() ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                                </div>




                               
    