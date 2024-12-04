
<?php
class  Category{
    public $id;
    public $name;
    public $created_at;
    public $updated_at;

 public  function __construct($id,$name)
 {
        $this->id = $id;
        $this->name = $name;
        
       
 }
 
 function save()
 {
     global $db, $base_url, $tx;
     $result = $db->query("insert into `{$tx}categories`(name) values('{$this->name}')");
     return $result;
 }



 public static function displayAll(){
    global $db,$tx, $base_url;

    $sql=$db->query("select * from `{$tx}categories`");

    $result = $sql->fetch_all();

    return $result;
 }

 
 public static function display(){
    global $db,$tx, $base_url;

    $result=$db->query("select * from `{$tx}categories`");

    while($row = $result->fetch_object()){
        $id=$row->id;
        $name=$row->name;
        $created_at=$row->created_at;
        $updated_at=$row->updated_at;

        echo "  <tr>
                <td>$id</td>
                <td>$name</td>
                <td>$created_at</td>
                <td>$updated_at</td>
                <td>
                    <div class=\"d-flex gap-3\">
                    <a href=\"$base_url/views/category/$id\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-eye\"></i></a>
                        <a href=\"$base_url/category/edit/$id\" class=\"btn btn-success btn-sm\"><i class=\"mdi mdi-pencil\"></i></a>
                        <a href=\"$base_url/category/delete/$id\" class=\"btn btn-danger btn-sm\"><i class=\"mdi mdi-delete\"></i></a>
                    </div>
                </td>
                </tr>";
    }

    return $result;

}




function update(){
    global $db, $tx;
    
    $result = $db->query("update `{$tx}categories` set name='{$this->name}' where id='{$this->id}'");

    return $result;

}




static function search($id){
    global $db,$tx;
    $result = $db->query("select * from `{$tx}categories` where id='$id'");

    return $result->fetch_object();
}





static function delete($id){
    global $db,$tx;
    $result = $db->query("delete from `{$tx}categories` where id='$id'");

    return $result;
}










 }
?> 