<?php



    class Order_detailsController
    {

        function index()
        {
            view("sales");
        }

        function create()
        {
            view("sales");
        }

        function save()
        {
            if (isset($_POST['btnSubmit'])) {
                $order_id = $_POST["order_id"];
                $products_id = $_POST["products_id"];
                $qty = $_POST["qty"];
                $price = $_POST["price"];
                $vat = $_POST["vat"];
                

                $order_details = new Order_details(null, $order_id, $products_id, $qty, $price , $vat);
                $order_details->save();
                redirect("index");
            }
        }




        function edit()
        {
            $id = $_GET["id"];
            $order_details = Order_details::search($id);
            view('sales', $order_details);
        }



        function update()
        {
            if (isset($_POST["btnUpdate"])) {
                $id = $_POST["id"];
                $order_id = $_POST["order_id"];
                $products_id = $_POST["products_id"];
                $qty = $_POST["qty"];
                $price = $_POST["price"];
                $vat = $_POST["vat"];
                
                $order_details = new Order_details($id, $order_id, $products_id, $qty, $price, $vat);
                $result = $order_details->update();
            }

            redirect("index");
        }




        function delete()
        {
            $id = $_GET["id"];
            $order_details = Order_details::search($id);
            view('sales', $order_details);
            //print_r($order_details);
        }

        function confirm_delete()
        {
            if (isset($_POST['btnDelete'])) {
                $id = $_POST["id"];
                $result = Order_details::delete($id);
            }
            redirect("index");
        }


        
    }



    ?>

