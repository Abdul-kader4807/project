
<div><a href="<?php echo $base_url ?>/stock/create" class="btn btn-success float-end mt-2 ">Add stock</a></div>
<div class="container">


<div class="card-body pt-2 mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border-primary align-middle ">
                                                <thead class="table-success">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Products_id</th>
                                                        <th>Transaction_type_id</th>
                                                        <th>warehouse_id</th>
                                                        <th>Qty</th>
                                                        <th>Remark</th>
                                                        <th>Created_at</th>
                                                        <th>Updated_at</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php Stock::display() ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                                </div>




                               
    