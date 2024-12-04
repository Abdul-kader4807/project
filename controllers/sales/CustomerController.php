
<?php
    class CustomerController
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
                $name = $_POST["name"];
                $photo = $_FILES["photo"]['name'];
                $phone = $_POST["phone"];
                $email = $_POST["email"];
                $address = $_POST["address"];
               
                


                $customer  = new Customer(null, $name,$photo, $phone, $email, $address  );
                $customer->save();
                redirect("index");
            }

        }



        function edit()
        {
            $id = $_GET["id"];
            $customer = Customer::search($id);
            view('sales', $customer);
        }


        function update()
        {
            if (isset($_POST["btnUpdate"])) {
                $id = $_POST["id"];
                $name = $_POST["name"];
                $photo = $_FILES["photo"]['name'];
                $phone = $_POST["phone"];
                $email = $_POST["email"];
                $address = $_POST["address"];
               
            

                $customer = new Customer($id, $name,$photo, $phone, $email, $address );
                $result = $customer->update();
            }

            redirect("index");
        }





        function delete()
        {
            $id = $_GET["id"];
            $customer = Customer::search($id);
            view('sales', $customer);
            //print_r($customer);
        }

        function confirm_delete()
        {
            if (isset($_POST['btnDelete'])) {
                $id = $_POST["id"];
                $result = Customer::delete($id);
            }
            redirect("index");
        }



        
        
    }



    ?>