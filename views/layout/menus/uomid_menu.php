<?php
	echo Menu::item([
		"name"=>"Uomid",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"uomid/create","text"=>"Create Uomid","icon"=>"far fa-circle nav-icon"],
			["route"=>"uomid","text"=>"Manage Uomid","icon"=>"far fa-circle nav-icon"],
		]
	]);
