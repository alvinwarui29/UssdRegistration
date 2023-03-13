<?php
    class Menu{
        protected $text;
        protected $sessionId;

        function __construct(){}
        public function Register(){
            $response = "CON new?\n";
            $response .= "1. Register\n";
            $response .= "2. Check status";
            echo $response;
        }
        public function Registration($textArray){
            $level = count($textArray);
            if ($level ==1 ){
                echo "CON Enter Id Number";
            }else if ($level ==2){
                echo "CON Enter Id of dependants";
            }else if ($level ==3){
                //register user and dependants

                echo "Success";
            }
            

        }
        public function CheckStatus(){
            echo "CON Checked Status";
        }
        

    }

?>