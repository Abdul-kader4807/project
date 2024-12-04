<?php

class Product{
    public $id;
    public $name;
    public $photo;
    public $size;
    public $price;
    public $offer_price;
    public $manufacturer_id;
    public $categories_id;
    public $is_featured;
    public $is_brand;
    public $description;
    public $weight;
    public $uom_id;
    public $barcode;
    public $sku;
    public $star;
    public $created_at;
    public $updated_at;

 public  function __construct($id,$name,$photo,$size,$price,$offer_price,$manufacturer_id,$categories_id,$is_featured,$is_brand,$description,$weight,$uom_id,$barcode,$sku,$star)
 {
        $this->id = $id;
        $this->name = $name;
        $this->photo = $photo;
        $this->size = $size;
        $this->price = $price;
        $this->offer_price = $offer_price;
        $this->manufacturer_id = $manufacturer_id;
        $this->categories_id = $categories_id;
        $this->is_featured = $is_featured;
        $this->is_brand = $is_brand;
        $this->description = $description;
        $this->weight = $weight;
        $this->uom_id = $uom_id;
        $this->barcode = $barcode;
        $this->sku = $sku;
        $this->star = $star;
        
        
        
       
      
       
       
 }

 function save()
 {
     global $db, $base_url, $tx;
     $result = $db->query("insert into `{$tx}products`(name,photo,size,price,offer_price,manufacturer_id,categories_id,is_featured,is_brand,description,weight,uom_id,barcode,sku,star ) values('{$this->name}','{$this->photo}',
     '{$this->size}','{$this->price}','{$this->offer_price}','{$this->manufacturer_id}','{$this->categories_id}',
     '{$this->is_featured}','{$this->is_brand}', '{$this->description}','{$this->weight}','{$this->uom_id}',
     '{$this->barcode}','{$this->sku}','{$this->star}')");
     return $result;
 }

 public static function display(){
    global $db,$tx, $base_url;

    $result=$db->query("select * from `{$tx}products`");

    while($row=$result->fetch_object()){
        $id=$row->id;
        $name=$row->name;
        $photo=$row->photo;
        $size=$row->size;
        $price=$row->price;
        $offer_price=$row->offer_price;
        $manufacturer_id=$row->manufacturer_id;
        $categories_id=$row->categories_id;
        $is_featured=$row->is_featured;
        $is_brand=$row->is_brand;
        $description=$row->description;
        $weight=$row->weight;
        $uom_id=$row->uom_id;
        $barcode=$row->barcode;
        $sku=$row->sku;
        $star=$row->star;
        $created_at=$row->created_at;
        $updated_at=$row->updated_at;

        echo "  <tr>
                <td>$id</td>
                <td>$name</td>
                 <td><img height='65' weidth='65' class='rounded' src='$base_url/img/$photo' alt=''></td>
                 <td>$size</td>
                <td>$price</td>
                <td>$offer_price</td>
                 <td>$manufacturer_id</td>
                <td>$categories_id</td>
                <td>$is_featured</td>
                <td>$is_brand</td>
                <td>$description</td>
                <td>$weight</td>
                <td>$uom_id</td>
                <td>$barcode</td>
                <td>$sku</td>
                <td>$star</td>
                <td>$created_at</td>
                <td>$updated_at</td>
                <td>
                    <div class=\"d-flex gap-3\">
                    <a href=\"$base_url/views/product/$id\" class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-eye\"></i></a>
                        <a href=\"$base_url/product/edit/$id\" class=\"btn btn-success btn-sm\"><i class=\"mdi mdi-pencil\"></i></a>
                        <a href=\"$base_url/product/delete/$id\" class=\"btn btn-danger btn-sm\"><i class=\"mdi mdi-delete\"></i></a>
                    </div>
                </td>
                </tr>";
    }

    return $result;

}



function update(){
    global $db, $tx;
    
    $result = $db->query("update `{$tx}products` set name='{$this->name}',photo='{$this->photo}',size='{$this->size}',  price='{$this->price}', offer_price='{$this->offer_price}',manufacturer_id='{$this->manufacturer_id}',
     categories_id='{$this->categories_id}',is_featured='{$this->is_featured}',is_brand='{$this->is_brand}',description='{$this->description}',weight='{$this->weight}',uom_id='{$this->uom_id}',barcode='{$this->barcode}',sku='{$this->sku}',star='{$this->star}'
      where id='{$this->id}'");

    return $result;

}



static function search($id){
    global $db,$tx;
    $result = $db->query("select * from `{$tx}products` where id='$id'");

    return $result->fetch_object();
}





static function delete($id){
    global $db,$tx;
    $result = $db->query("delete from `{$tx}products` where id='$id'");

    return $result;
}












 }
?> 