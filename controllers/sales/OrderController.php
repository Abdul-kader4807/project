<?php



    class OrderController
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
                $customers_id = $_POST["customers_id"];
                $order_total = $_POST["order_total"];
                $discount = $_POST["discount"];
                $shipping_address = $_POST["shipping_address"];
                $paid_amount = $_POST["paid_amount"];
                $status_id = $_POST["status_id"];
                $order_date = $_POST["order_date"];
                $delivery_date = $_POST["delivery_date"];
                $vat = $_POST["vat"];
                


                $order = new Order(null, $customers_id, $order_total, $discount, $shipping_address, $paid_amount, $status_id, $order_date, $delivery_date, $vat);
                $order->save();
                redirect("index");
            }
        }




        function edit()
        {
            $id = $_GET["id"];
            $order = Order::search($id);
            view('sales', $order);
        }


        function update()
        {
            if (isset($_POST["btnUpdate"])) {
                $id = $_POST["id"];
                $customers_id = $_POST["customers_id"];
                $order_total = $_POST["order_total"];
                $discount = $_POST["discount"];
                $shipping_address = $_POST["shipping_address"];
                $paid_amount = $_POST["paid_amount"];
                $status_id = $_POST["status_id"];
                $order_date = $_POST["order_date"];
                $delivery_date = $_POST["delivery_date"];
                $vat = $_POST["vat"];
                
                $order = new Order($id, $customers_id, $order_total, $discount, $shipping_address,  $paid_amount, $status_id, $order_date, $delivery_date, $vat);
                $result = $order->update();
            }

            redirect("index");
        }



 
        function delete()
        {
            $id = $_GET["id"];
            $order = Order::search($id);
            view('sales', $order);
            //print_r($order);
        }

        function confirm_delete()
        {
            if (isset($_POST['btnDelete'])) {
                $id = $_POST["id"];
                $result = Order::delete($id);
            }
            redirect("index");
        }


        
    }



    ?>

