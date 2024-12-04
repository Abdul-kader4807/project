
<?php
    class StockController
    {

        function index()
        {
            view("inventory");
        }

        function create()
        {
            view("inventory");
        }

        function save()
        {
            if (isset($_POST['btnSubmit'])) {
                $products_id = $_POST["products_id"];
                $transaction_type_id = $_POST["transaction_type_id"];
                $warehouse_id = $_POST["warehouse_id"];
                $qty = $_POST["qty"];
                $remark = $_POST["remark"];
                


                $stock = new Stock(null, $products_id, $transaction_type_id, $warehouse_id, $qty, $remark);
                $stock->save();
                redirect("index");
            }
        }


        function edit()
        {
            $id = $_GET["id"];
            $stock = Stock::search($id);
            view('inventory', $stock);
        }


        function update()
        {
            if (isset($_POST["btnUpdate"])) {
                $id = $_POST["id"];
                $products_id = $_POST["products_id"];
                $transaction_type_id = $_POST["transaction_type_id"];
                $warehouse_id = $_POST["warehouse_id"];
                $qty = $_POST["qty"];
                $remark = $_POST["remark"];



                $stock = new Stock ($id, $products_id, $transaction_type_id, $warehouse_id, $qty,  $remark);
                $result = $stock->update();
            }

            redirect("index");
        }







        
        function delete()
        {
            $id = $_GET["id"];
            $product = Product::search($id);
            view('inventory', $product);
            //print_r($product);
        }

        function confirm_delete()
        {
            if (isset($_POST['btnDelete'])) {
                $id = $_POST["id"];
                $result = Product::delete($id);
            }
            redirect("index");
        }


        
    }



    ?>