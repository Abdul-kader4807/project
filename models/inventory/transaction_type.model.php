


<?php
class Transaction_Type{
    public $id;
    public $name;
    public $factor;
    public $created_at;
    public $updated_at;
    

 public  function __construct($id,$name,$factor)
 {
        $this->id = $id;
        $this->name = $name;
        $this->factor = $factor;
       
         
       
 }



 function save()
 {
     global $db, $base_url, $tx;
     $result = $db->query("insert into `{$tx}transaction_type`(name,factor) values('{$this->name}','{$this->factor}')");
     return $result;
 }

 public static function display(){
    global $db,$tx, $base_url;

    $result=$db->query("select * from `{$tx}transaction_type`");

    while($row=$result->fetch_object()){
        $id=$row->id;
        $name=$row->name;
        $factor=$row->factor;
        $created_at=$row->created_at;
        $updated_at=$row->updated_at;

        echo "  <tr>
                <td>$id</td>
                <td>$name</td>
                <td>$factor</td>
                <td>$created_at</td>
                <td>$updated_at</td>
                <td>
                    <div class=\"d-flex gap-3\">
                    <a href=\"$base_url/views/transaction_type/$id\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-eye\"></i></a>
                        <a href=\"$base_url/transaction_type/edit/$id\" class=\"btn btn-success btn-sm\"><i class=\"mdi mdi-pencil\"></i></a>
                        <a href=\"$base_url/transaction_type/delete/$id\" class=\"btn btn-danger btn-sm\"><i class=\"mdi mdi-delete\"></i></a>
                    </div>
                </td>
                </tr>";
    }

    return $result;

}


function update(){
    global $db, $tx;
    
    $result = $db->query("update `{$tx}transaction_type` set name='{$this->name}',factor='{$this->factor}'");

    return $result;

}





static function search($id){
    global $db,$tx;
    $result = $db->query("select * from `{$tx}transaction_type` where id='$id'");

     return $result->fetch_object();
}





static function delete($id){
    global $db,$tx;
    $result = $db->query("delete from `{$tx}transaction_type` where id='$id'");

    return $result;
}












 }
?> 