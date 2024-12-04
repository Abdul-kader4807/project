
<div><a href="<?php echo $base_url ?>/order_details/create" class="btn btn-success float-end mt-2 ">Add Details</a></div>
<div class="container">


<div class="card-body pt-2 mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border-primary align-middle ">
                                                <thead class="table-success">
                                                    <tr>


                                                        <th>ID</th>
                                                        <th>Order_id</th>
                                                        <th>products_id</th>
                                                        <th> Qty</th>
                                                        <th>price</th>
                                                        <th>Vat</th>
                                                        <th>Created_at</th>
                                                        <th>Updated_at</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php Order_details::display() ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                                </div>




                               
    