<?php
    


class Purchases_details {
    public $id;
    public $purchaseses_id;
    public $products_id;
    public $qty;
    public $price;
    public $discount;
    public $created_at;
    public $updated_at;

 public  function __construct($id,$purchaseses_id, $products_id,$qty,$price,$discount)
 {
        $this->id = $id;
        $this->purchaseses_id = $purchaseses_id;
        $this->products_id = $products_id;
        $this->qty = $qty;
        $this->price = $price;
        $this->discount = $discount;
        
       
 }


 function save()
 {
     global $db, $base_url, $tx;
     $result = $db->query("insert into `{$tx}purchaseses_details`(purchaseses_id,products_id,qty,price,discount) values('{$this->purchaseses_id}','{$this->products_id}','{$this->qty}','{$this->price}','{$this->discount}')");
     return $result;
 }





 public static function display(){
    global $db,$tx, $base_url;

    $result=$db->query("select * from `{$tx}purchaseses_details`");

    while($row=$result->fetch_object()){
        $id=$row->id;
        $purchaseses_id=$row->purchaseses_id;
        $products_id=$row->products_id;
        $qty=$row->qty;
        $price=$row->price;
        $discount=$row->discount;
        $created_at=$row->created_at;
        $updated_at=$row->updated_at;

        echo "  <tr>
                <td>$id</td>
                <td>$purchaseses_id</td>
                <td>$products_id</td>
                <td>$qty</td>
                <td>$price</td>
                <td>$discount</td>
                <td>$created_at</td>
                <td>$updated_at</td>
                <td>
                    <div class=\"d-flex gap-3\">
                    <a href=\"$base_url/views/purchaseses_details/$id\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-eye\"></i></a>
                        <a href=\"$base_url/purchaseses_details/edit/$id\" class=\"btn btn-success btn-sm\"><i class=\"mdi mdi-pencil\"></i></a>
                        <a href=\"$base_url/purchaseses_details/delete/$id\" class=\"btn btn-danger btn-sm\"><i class=\"mdi mdi-delete\"></i></a>
                    </div>
                </td>
                </tr>";
    }

    return $result;

}






function update(){
    global $db, $tx;
    
    $result = $db->query("update `{$tx}purchaseses_details` set purchaseses_id='{$this->purchaseses_id}',  products_id='{$this->products_id}', qty='{$this->qty}', price='{$this->price}',discount='{$this->discount}' where id='{$this->id}'");

    return $result;

}




static function search($id){
    global $db,$tx;
    $result = $db->query("select * from `{$tx}purchaseses_details` where id='$id'");

    return $result->fetch_object();
}





static function delete($id){
    global $db,$tx;
    $result = $db->query("delete from `{$tx}purchaseses_details` where id='$id'");

    return $result;
}












 }
?> 