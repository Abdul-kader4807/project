<?php
class Order_details{
    public $id;
    public $order_id;
    public $products_id;
    public $qty;
    public $price;
    public $vat;
    public $created_at;
    public $updated_at;

 public  function __construct($id,$order_id,$products_id,$qty,$price,$vat  )
 {
        $this->id = $id;
        $this->order_id = $order_id;
        $this->products_id = $products_id;
        $this->qty = $qty;
        $this->price = $price;
        $this->vat = $vat;
       
      
        
        
 }

 function save()
 {
     global $db, $base_url, $tx;
     $result = $db->query("insert into `{$tx}order_details`(order_id,products_id,qty,price,vat) values('{$this->order_id}','{$this->products_id}','{$this->qty}','{$this->price}','{$this->vat}')");
     return $result;
 }







 public static function display(){
    global $db,$tx, $base_url;

    $result=$db->query("select * from `{$tx}order_details`");

    while($row=$result->fetch_object()){
        $id=$row->id;
        $order_id=$row->order_id;
        $products_id=$row->products_id;
        $qty=$row->qty;
        $price=$row->price;
        $vat=$row->vat;
        $created_at=$row->created_at;
        $updated_at=$row->updated_at;

        echo "  <tr>
                <td>$id</td>
                <td>$order_id</td>
                <td>$products_id</td>
                <td>$qty</td>
                <td>$price</td>
                <td>$vat</td>
                <td>$created_at</td>
                <td>$updated_at</td>
                <td>
                    <div class=\"d-flex gap-3\">
                    <a href=\"$base_url/views/order_details/$id\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-eye\"></i></a>
                        <a href=\"$base_url/order_details/edit/$id\" class=\"btn btn-success btn-sm\"><i class=\"mdi mdi-pencil\"></i></a>
                        <a href=\"$base_url/order_details/delete/$id\" class=\"btn btn-danger btn-sm\"><i class=\"mdi mdi-delete\"></i></a>
                    </div>
                </td>
                </tr>";
    }

    return $result;

}



function update(){
    global $db, $tx;
    
    $result = $db->query("update `{$tx}order_details` set order_id='{$this->order_id}',  products_id='{$this->products_id}', qty='{$this->qty}', price='{$this->price}',vat='{$this->vat}' where id='{$this->id}'");

    return $result;

}




static function search($id){
    global $db,$tx;
    $result = $db->query("select * from `{$tx}order_details` where id='$id'");

    return $result->fetch_object();
}





static function delete($id){
    global $db,$tx;
    $result = $db->query("delete from `{$tx}order_details` where id='$id'");

    return $result;
}












 }
?>           
