
<?php
    class Purchaseses_detailsController
    {

        function index()
        {
            view("purchase");
        }

        function create()
        {
            view("purchase");
        }

        function save()
        {
            if (isset($_POST['btnSubmit'])) {
                $purchaseses_id = $_POST["purchaseses_id"];
                $products_id = $_POST["products_id"];
                $qty = $_POST["qty"];
                $price = $_POST["price"];
                $discount = $_POST["discount"];
                


                $purchases_details  = new Purchases_details(null, $purchaseses_id, $products_id, $qty, $price, $discount );
                $purchases_details->save();
                redirect("index");
            }

        }



        function edit()
        {
            $id = $_GET["id"];
            $supplier = Purchases_details::search($id);
            view('purchase', $supplier);
        }


        function update()
        {
            if (isset($_POST["btnUpdate"])) {
                $id = $_POST["id"];
                $purchaseses_id = $_POST["purchaseses_id"];
                $products_id = $_POST["products_id"];
                $qty = $_POST["qty"];
                $price = $_POST["price"];
                $discount = $_POST["discount"];
            

                $purchases_details = new Purchases_details ($id, $purchaseses_id, $products_id, $qty, $price, $discount);
                $result = $purchases_details->update();
            }

            redirect("index");
        }





        function delete()
        {
            $id = $_GET["id"];
            $purchases_details = Purchases_details::search($id);
            view('purchase', $purchases_details);
            //print_r($purchases_details);
        }

        function confirm_delete()
        {
            if (isset($_POST['btnDelete'])) {
                $id = $_POST["id"];
                $result = Purchases_details::delete($id);
            }
            redirect("index");
        }



        
        
    }



    ?>