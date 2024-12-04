
<?php
class CategoryController
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
            
            $category = new Category (null, $name);
            $category->save();
            redirect("index");
        }
    }






    function edit()
    {
        $id = $_GET["id"];
        $category = Category::search($id);
        view('inventory', $category);
    }


    function update()
    {
        if (isset($_POST["btnUpdate"])) {
            $id = $_POST["id"];
            $name = $_POST["name"];
            


            $category = new Category($id, $name);
            $result = $category->update();
        }

        redirect("index");
    }





    function delete()
    {
        $id = $_GET["id"];
        $category = Category::search($id);
        view('inventory', $category);
        //print_r($category);
    }

    function confirm_delete()
    {
        if (isset($_POST['btnDelete'])) {
            $id = $_POST["id"];
            $result = Category::delete($id);
        }
        redirect("index");
    }














    
}



?>