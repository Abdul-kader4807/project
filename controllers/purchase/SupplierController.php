
<?php
    class SupplierController
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
                $name = $_POST["name"];
                $phone = $_POST["phone"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $photo = $_FILES["photo"]['name'];
                


                $supplier  = new Supplier(null, $name, $phone, $email, $address, $photo );
                $supplier->save();
                redirect("index");
            }

        }



        function edit()
        {
            $id = $_GET["id"];
            $supplier = Supplier::search($id);
            view('purchase', $supplier);
        }


        function update()
        {
            if (isset($_POST["btnUpdate"])) {
                $id = $_POST["id"];
                $name = $_POST["name"];
                $phone = $_POST["phone"];
                $email = $_POST["email"];
                $address = $_POST["address"];
                $photo = $_FILES["photo"]['name'];
            

                $supplier = new Supplier ($id, $name, $phone, $email, $address, $photo);
                $result = $supplier->update();
            }

            redirect("index");
        }





        function delete()
        {
            $id = $_GET["id"];
            $supplier = Supplier::search($id);
            view('purchase', $supplier);
            //print_r($supplier);
        }

        function confirm_delete()
        {
            if (isset($_POST['btnDelete'])) {
                $id = $_POST["id"];
                $result = Supplier::delete($id);
            }
            redirect("index");
        }



        
        
    }



    ?>