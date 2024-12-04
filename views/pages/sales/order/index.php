
<div><a href="<?php echo $base_url ?>/order/create" class="btn btn-success float-end mt-2 ">Add order</a></div>
<div class="container">


<div class="card-body pt-2 mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border-primary align-middle ">
                                                <thead class="table-success">
                                                    <tr>


                                                        <th>ID</th>
                                                        <th>Customers_id</th>
                                                        <th>Order_total</th>
                                                        <th> Discount</th>
                                                        <th>Shipping_address</th>
                                                        <th>Paid_amount</th>
                                                        <th>Status_id</th>
                                                        <th>Order_date</th>
                                                        <th>Delivery_date</th>
                                                        <th>Vat</th>
                                                        <th>Created_at</th>
                                                        <th>Updated_at</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php Order::display() ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                                </div>




                               
    