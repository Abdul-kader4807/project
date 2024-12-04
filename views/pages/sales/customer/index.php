
<div><a href="<?php echo $base_url ?>/customer/create" class="btn btn-success float-end ">Add Customar</a></div>
<div class="container">
<div class="card-body pt-2 mt-5">
                                        <div class="table-responsive">
                                            <table class="table table-bordered border-primary align-middle ">
                                                <thead class="table-success">
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>photo</th>
                                                        <th>Phone</th>
                                                        <th>Email</th>
                                                        <th>Address</th>
                                                        <th>Created_at</th>
                                                        <th>Updated_at</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php Customer::display() ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- end table-responsive -->
                                    </div>
                                </div>
                                </div>