
<div><a href="<?php echo $base_url ?>/purchaseses_details/create" class="btn btn-success float-end ">Add purchases_details</a></div>
<div class="container">
<div class="card-body pt-2 mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border-primary align-middle ">
                                                <thead class="table-success">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Purchaseses_id</th>
                                                        <th>Products_id</th>
                                                        <th>Qty</th>
                                                        <th>price</th>
                                                        <th>Discount</th>
                                                        <th>Created_at</th>
                                                        <th>Updated_at</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php Purchases_details::display() ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                                </div>