<?php
    
class Supplier {
    public $id;
    public $name;
    public $phone;
    public $email;
    public $address;
    public $photo;
    public $created_at;
    public $updated_at;

 public  function __construct($id,$name, $phone,$email,$address,$photo)
 {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->photo = $photo;
        
       
 }


 function save()
 {
     global $db, $base_url, $tx;
     $result = $db->query("insert into `{$tx}suppliers`(name,phone,email,address,photo) values('{$this->name}','{$this->phone}','{$this->email}','{$this->address}','{$this->photo}')");
     return $result;
 }





 public static function display(){
    global $db,$tx, $base_url;

    $result=$db->query("select * from `{$tx}suppliers`");

    while($row=$result->fetch_object()){
        $id=$row->id;
        $name=$row->name;
        $phone=$row->phone;
        $email=$row->email;
        $address=$row->address;
        $photo=$row->photo;
        $created_at=$row->created_at;
        $updated_at=$row->updated_at;

        echo "  <tr>
                <td>$id</td>
                <td>$name</td>
                <td>$phone</td>
                <td>$email</td>
                <td>$address</td>
                <td><img height='50' weidth='50' class='rounded-circle' src='$base_url/img/$photo' alt=''></td>
                <td>$created_at</td>
                <td>$updated_at</td>
                <td>
                    <div class=\"d-flex gap-3\">
                    <a href=\"$base_url/views/supplier/$id\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-eye\"></i></a>
                        <a href=\"$base_url/supplier/edit/$id\" class=\"btn btn-success btn-sm\"><i class=\"mdi mdi-pencil\"></i></a>
                        <a href=\"$base_url/supplier/delete/$id\" class=\"btn btn-danger btn-sm\"><i class=\"mdi mdi-delete\"></i></a>
                    </div>
                </td>
                </tr>";
    }

    return $result;

}






function update(){
    global $db, $tx;
    
    $result = $db->query("update `{$tx}suppliers` set name='{$this->name}',  phone='{$this->phone}', email='{$this->email}', address='{$this->address}',photo='{$this->photo}' where id='{$this->id}'");

    return $result;

}




static function search($id){
    global $db,$tx;
    $result = $db->query("select * from `{$tx}suppliers` where id='$id'");

    return $result->fetch_object();
}





static function delete($id){
    global $db,$tx;
    $result = $db->query("delete from `{$tx}suppliers` where id='$id'");

    return $result;
}












 }
?> 