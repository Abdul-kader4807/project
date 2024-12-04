 <?php
    class ProductController
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
                $photo = $_FILES["photo"]['name'];
                $size = $_POST["size"];
                $price = $_POST["price"];
                $offer_price = $_POST["offer_price"];
                $manufacturer_id = $_POST["manufacturer_id"];
                $categories_id = $_POST["categories_id"];
                $is_featured = $_POST["is_featured"];
                $is_brand = $_POST["is_brand"];
                $description = $_POST["description"];
                $weight = $_POST["weight"];
                $uom_id = $_POST["uom_id"];
                $barcode = $_POST["barcode"];
                $sku = $_POST["sku"];
                $star = $_POST["star"];
                
                
                $product = new Product(null, $name,$photo,$size, $price, $offer_price,$manufacturer_id, $categories_id, $is_featured, $is_brand,$description, $weight, $uom_id, $barcode, $sku, $star);
                $product->save();
                redirect("index");
            }
        }


        function edit()
        {
            $id = $_GET["id"];
            $product = Product::search($id);
            view('inventory', $product);
        }


        function update()
        {
            if (isset($_POST["btnUpdate"])) {
                $id = $_POST["id"];
                $name = $_POST["name"];
                $photo = $_FILES["photo"]['name'];
                $size = $_POST["size"];
                $price = $_POST["price"];
                $offer_price = $_POST["offer_price"];
                $manufacturer_id = $_POST["manufacturer_id"];
                $categories_id = $_POST["categories_id"];
                $is_featured = $_POST["is_featured"];
                $is_brand = $_POST["is_brand"];
                $description = $_POST["description"];
                $weight = $_POST["weight"];
                $uom_id = $_POST["uom_id"];
                $barcode = $_POST["barcode"];
                $sku = $_POST["sku"];
                $star = $_POST["star"];
                
                
                
               

                $product = new Product($id, $name,$photo,$size, $price, $offer_price,$manufacturer_id, $categories_id,$is_featured, $is_brand, $description, $weight, $uom_id, $barcode, $sku, $star);
                $result = $product->update();
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