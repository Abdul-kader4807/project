<?php
echo Page::title(["title"=>"Edit Uom"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"uom", "text"=>"Manage Uom"]);
echo Page::context_open();
echo Form::open(["route"=>"uom/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$uom->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$uom->name"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();