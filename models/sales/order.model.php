 <?php
class Order{
    public $id;
    public $customers_id;
    public $order_total;
    public $discount;
    public $shipping_address;
    public $paid_amount;
    public $status_id;
    public $order_date;
    public $delivery_date;
    public $vat;
    public $created_at;
    public $updated_at;

 public  function __construct($id,$customers_id, $order_total ,$discount,$shipping_address,$paid_amount,$status_id, $order_date,$delivery_date,$vat  )
 {
        $this->id = $id;
        $this->customers_id = $customers_id;
        $this->order_total = $order_total;
        $this->discount = $discount;
        $this->shipping_address = $shipping_address;
        $this->paid_amount = $paid_amount;
        $this->status_id = $status_id;
        $this->order_date = $order_date;
        $this->delivery_date = $delivery_date;
        $this->vat = $vat;
       
      
        
    
 }

 function save()
 {
     global $db, $base_url, $tx;
     $result = $db->query("insert into `{$tx}orders`(customers_id,order_total,discount,shipping_address,paid_amount,status_id,order_date,delivery_date,vat) values('{$this->customers_id}','{$this->order_total}','{$this->discount}','{$this->shipping_address}','{$this->paid_amount}','{$this->status_id}','{$this->order_date}','{$this->delivery_date}','{$this->vat}')");
     return $result;
 }







 public static function display(){
    global $db,$tx, $base_url;

    $result=$db->query("select * from `{$tx}orders`");

    while($row=$result->fetch_object()){
        $id=$row->id;
        $customers_id=$row->customers_id;
        $order_total=$row->order_total;
        $discount=$row->discount;
        $shipping_address=$row->shipping_address;
        $paid_amount=$row->paid_amount;
        $status_id=$row->status_id;
        $order_date=$row->order_date;
        $delivery_date=$row->delivery_date;
        $vat=$row->vat;
        $created_at=$row->created_at;
        $updated_at=$row->updated_at;

        echo "  <tr>
                <td>$id</td>
                <td>$customers_id</td>
                <td>$order_total</td>
                <td>$discount</td>
                <td>$shipping_address</td>
                <td>$paid_amount</td>
                <td>$status_id</td>
                <td>$order_date</td>
                <td>$delivery_date</td>
                <td>$vat</td>
                <td>$created_at</td>
                <td>$updated_at</td>
                <td>
                    <div class=\"d-flex gap-3\">
                    <a href=\"$base_url/views/order/$id\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-eye\"></i></a>
                        <a href=\"$base_url/order/edit/$id\" class=\"btn btn-success btn-sm\"><i class=\"mdi mdi-pencil\"></i></a>
                        <a href=\"$base_url/order/delete/$id\" class=\"btn btn-danger btn-sm\"><i class=\"mdi mdi-delete\"></i></a>
                    </div>
                </td>
                </tr>";
    }

    return $result;

}



function update(){
    global $db, $tx;
    
    $result = $db->query("update `{$tx}orders` set customers_id='{$this->customers_id}',  order_total='{$this->order_total}', discount='{$this->discount}', shipping_address='{$this->shipping_address}',paid_amount='{$this->paid_amount}',status_id='{$this->status_id}',order_date='{$this->order_date}',delivery_date='{$this->delivery_date}',vat='{$this->vat}' where id='{$this->id}'");

    return $result;

}




static function search($id){
    global $db,$tx;
    $result = $db->query("select * from `{$tx}orders` where id='$id'");

    return $result->fetch_object();
}





static function delete($id){
    global $db,$tx;
    $result = $db->query("delete from `{$tx}orders` where id='$id'");

    return $result;
}












 }
?>           