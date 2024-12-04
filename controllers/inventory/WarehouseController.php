
<?php
class WarehouseController
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
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $location = $_POST["location"];
            $address = $_POST["address"];


            $warehouse = new Warehouse(null, $name, $phone, $location, $address);
            $warehouse->save();
            redirect("index");
        }
    }





    function edit()
    {
        $id = $_GET["id"];
        $warehouse = Warehouse::search($id);
        view('inventory', $warehouse);
    }


    function update()
    {
        if (isset($_POST["btnUpdate"])) {
            $id = $_POST["id"];
            $name = $_POST["name"];
            $phone = $_POST["phone"];
            $location = $_POST["location"];
            $address = $_POST["address"];



            $warehouse = new Warehouse($id, $name, $phone, $location, $address);
            $result = $warehouse->update();
        }

        redirect("index");
    }





    function delete()
    {
        $id = $_GET["id"];
        $warehouse = Warehouse::search($id);
        view('inventory', $warehouse);
        //print_r($product);
    }

    function confirm_delete()
    {
        if (isset($_POST['btnDelete'])) {
            $id = $_POST["id"];
            $result = Warehouse::delete($id);
        }
        redirect("index");
    }














    
}



?>