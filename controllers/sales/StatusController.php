
<?php
    class StatusController
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
                
                


                $status  = new Status(null, $name );
                $status->save();
                redirect("index");
            }

        }



        function edit()
        {
            $id = $_GET["id"];
            $status = Status::search($id);
            view('sales', $status);
        }


        function update()
        {
            if (isset($_POST["btnUpdate"])) {
                $id = $_POST["id"];
                $name = $_POST["name"];
                
            

                $status = new Status($id, $name);
                $result = $status->update();
            }

            redirect("index");
        }





        function delete()
        {
            $id = $_GET["id"];
            $status = Status::search($id);
            view('sales', $status);
            //print_r($status);
        }



        function confirm_delete()
        {
            if (isset($_POST['btnDelete'])) {
                $id = $_POST["id"];
                $result = Status::delete($id);
            }
            redirect("index");
        }



        
        
    }



    ?>