<?php 
    function generatorePassword($length){
        $password = "";

        if($length >=5 && $length <= 15){
                

            $caratteri ='ABCDEFGHILMNOPQRSTUVZabcdefghilmnopqrstuvz123456789!?&%$£@#+*';
            $min = 0;
            $max = strlen($caratteri) - 1;
            
            $password = '';
            for($i = 0;$i < $length;$i++ ){
                $carattereCasuale = $caratteri[rand($min,$max)];
                

                $password .= $carattereCasuale;
            }
            
    }

        return$password;
    }
?>