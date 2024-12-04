<?php
class UomController extends Controller{
	public function __construct(){
	}
	public function index(){
		view("inventory");
	}
	public function create(){
		view("inventory");
	}
public function save($data,$file){
	if(isset($data["create"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}

*/
		if(count($errors)==0){
			$uom=new Uom();
		$uom->name=$data["name"];
		$uom->created_at=$now;
		$uom->updated_at=$now;

			$uom->save();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
public function edit($id){
		view("inventory",Uom::find($id));
}
public function update($data,$file){
	if(isset($data["update"])){
	$errors=[];
/*
	if(!preg_match("/^[\s\S]+$/",$_POST["txtName"])){
		$errors["name"]="Invalid name";
	}

*/
		if(count($errors)==0){
			$uom=new Uom();
			$uom->id=$data["id"];
		$uom->name=$data["name"];
		$uom->created_at=$now;
		$uom->updated_at=$now;

		$uom->update();
		redirect();
		}else{
			 print_r($errors);
		}
	}
}
	public function confirm($id){
		view("inventory");
	}
	public function delete($id){
		Uom::delete($id);
		redirect();
	}
	public function show($id){
		view("inventory",Uom::find($id));
	}
}
?>
