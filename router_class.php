<?php

    class Router_class{
        public function router(){
            if($_SERVER["REQUEST_METHOD"]==="GET"){
               $parm1 = $_GET["par1"]; 
               echo json_encode([
                                "response" => 200,
                                "mensagge" => "Recibido" ,
                                "parm1" => $parm1 ]);
            }
            elseif(_SERVER["REQUEST_METHOD"]==="POST"){

            }
        }
    }



?>