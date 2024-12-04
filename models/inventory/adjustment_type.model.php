
<?php
class  Adjustment_type {
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
     $result = $db->query("insert into `{$tx} adjustment_type`(name,factor) values('{$this->name}','{$this->factor}')");
     return $result;
 }


 
 public static function display(){
    global $db,$tx, $base_url;

    $result=$db->query("select * from `{$tx}adjustment_type`");

    while($row = $result->fetch_object()){
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
                    <a href=\"$base_url/views/adjustment_type/$id\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-eye\"></i></a>
                        <a href=\"$base_url/adjustment_type/edit/$id\" class=\"btn btn-success btn-sm\"><i class=\"mdi mdi-pencil\"></i></a>
                        <a href=\"$base_url/uom/delete/$id\" class=\"btn btn-danger btn-sm\"><i class=\"mdi mdi-delete\"></i></a>
                    </div>
                </td>
                </tr>";
    }

    return $result;

}




function update(){
    global $db, $tx;
    
    $result = $db->query("update `{$tx}uom` set name='{$this->name}' where id='{$this->id}'");

    return $result;

}




static function search($id){
    global $db,$tx;
    $result = $db->query("select * from `{$tx}uom` where id='$id'");

    return $result->fetch_object();
}





static function delete($id){
    global $db,$tx;
    $result = $db->query("delete from `{$tx}uom` where id='$id'");

    return $result;
}










 }
?> 