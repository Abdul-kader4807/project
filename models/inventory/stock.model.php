
<?php
class Stock{
    public $id;
    public $products_id;
    public $transaction_type_id;
    public $warehouse_id;
    public $qty;
    public $remark;
    public $created_at;
    public $updated_at;
    

 public  function __construct($id,$products_id,$transaction_type_id,$warehouse_id,$qty,$remark)
 {
        $this->id = $id;
        $this->products_id = $products_id;
        $this->transaction_type_id = $transaction_type_id;
        $this->warehouse_id = $warehouse_id;
        $this->qty = $qty;
        $this->remark = $remark;
         
       
 }



 function save()
 {
     global $db, $base_url, $tx;
     $result = $db->query("insert into `{$tx}stock`(products_id,transaction_type_id,warehouse_id,qty,remark) values('{$this->products_id}','{$this->transaction_type_id}','{$this->warehouse_id}','{$this->qty}','{$this->remark}')");
     return $result;
 }

 public static function display(){
    global $db,$tx, $base_url;

    $result=$db->query("select * from `{$tx}stock`");

    while($row=$result->fetch_object()){
        $id=$row->id;
        $products_id=$row->products_id;
        $transaction_type_id=$row->transaction_type_id;
        $warehouse_id=$row->warehouse_id;
        $qty=$row->qty;
        $remark=$row->remark;
        $created_at=$row->created_at;
        $updated_at=$row->updated_at;

        echo "  <tr>
                <td>$id</td>
                <td>$products_id</td>
                <td>$transaction_type_id</td>
                <td>$warehouse_id</td>
                <td>$qty</td>
                <td>$remark</td>
                <td>$created_at</td>
                <td>$updated_at</td>
                <td>
                    <div class=\"d-flex gap-3\">
                    <a href=\"$base_url/views/stock/$id\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-eye\"></i></a>
                        <a href=\"$base_url/stock/edit/$id\" class=\"btn btn-success btn-sm\"><i class=\"mdi mdi-pencil\"></i></a>
                        <a href=\"$base_url/stock/delete/$id\" class=\"btn btn-danger btn-sm\"><i class=\"mdi mdi-delete\"></i></a>
                    </div>
                </td>
                </tr>";
    }

    return $result;

}



function update(){
    global $db, $tx;
    
    $result = $db->query("update `{$tx} stock` set products_id='{$this->products_id}',  transaction_type_id='{$this->transaction_type_id}', warehouse_id='{$this->warehouse_id}', qty='{$this->qty}',remark='{$this->remark}' where id='{$this->id}'");

    return $result;

}





static function search($id){
    global $db,$tx;
    $result = $db->query("select * from `{$tx} stock` where id='$id'");

     return $result->fetch_object();
}





static function delete($id){
    global $db,$tx;
    $result = $db->query("delete from `{$tx} stock` where id='$id'");

    return $result;
}












 }
?> 