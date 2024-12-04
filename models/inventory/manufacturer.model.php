<?php

class Manufacturer
{
    public $id;
    public $name;
    public $phone;
    public $email;
    public $address;
    public $created_at;
    public $updated_at;

    public  function __construct($id, $name, $phone, $email, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
    }


    function save()
    {
        global $db, $base_url, $tx;
        $result = $db->query("insert into `{$tx}manufacturers`(name,phone,email,address) values('{$this->name}','{$this->phone}','{$this->email}','{$this->address}')");
        return $result;
    }


    public static function display()
    {
        global $db, $tx, $base_url;

        $result = $db->query("select * from `{$tx}manufacturers`");

        while ($row = $result->fetch_object()) {
            $id = $row->id;
            $name = $row->name;
            $phone = $row->phone;
            $email = $row->email;
            $address = $row->address;
            $created_at = $row->created_at;
            $updated_at = $row->updated_at;

            echo "  <tr>
                <td>$id</td>
                <td>$name</td>
                <td>$phone</td>
                <td>$email</td>
                <td>$address</td>
                <td>$created_at</td>
                <td>$updated_at</td>
                <td>
                    <div class=\"d-flex gap-3\">
                    <a href=\"$base_url/views/manufacturer/$id\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-eye\"></i></a>
                        <a href=\"$base_url/manufacturer/edit/$id\" class=\"btn btn-success btn-sm\"><i class=\"mdi mdi-pencil\"></i></a>
                        <a href=\"$base_url/manufacturer/delete/$id\" class=\"btn btn-danger btn-sm\"><i class=\"mdi mdi-delete\"></i></a>
                    </div>
                </td>
                </tr>";
        }

        return $result;
    }






    function update()
    {
        global $db, $tx;

        $result = $db->query("update `{$tx}manufacturers` set name='{$this->name}',  phone='{$this->phone}', email='{$this->email}', address='{$this->address}' where id='{$this->id}'");

        return $result;
    }




    static function search($id)
    {
        global $db, $tx;
        $result = $db->query("select * from `{$tx}manufacturers` where id='$id'");

        return $result->fetch_object();
    }





    static function delete($id)
    {
        global $db, $tx;
        $result = $db->query("delete from `{$tx}manufacturers` where id='$id'");

        return $result;
    }
}







?>