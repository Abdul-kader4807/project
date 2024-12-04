<?php   
   //Remote
   
     define("SERVER","localhost");
     define("USER","root");//rajib
     define("DATABASE","rp_system");
     define("PASSWORD","");
     define("PORT",3306);

   //Local
   
    //define("SERVER","localhost");
    //define("USER","root");//rajib
    //define("DATABASE","hosting");
    //define("PASSWORD","");

    $db=new mysqli(SERVER,USER,PASSWORD,DATABASE,PORT);
    $tx="core_";
    

?>
