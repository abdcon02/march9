<?php

    class PingPong {

        // function printNumberRange($input_number) {
        //
        //     return implode(" ",range(0,$input_number));
        //
        // }
        //
        // function printNumberWithPingPong($input_number) {
        //
        //     $number = array();
        //     while ($input_number > 0) {
        //
        //         if($input_number % 15 == 0) {
        //             array_push($number, 'PingPong');
        //         }
        //         else {
        //             array_push($number, $input_number);
        //         }
        //
        //         --$input_number;
        //     }
        //     array_push($number, "0");
        //     $number = array_reverse($number);
        //
        //     return implode(" ", $number);
        //
        // }

        function printPingPong($input_number) {

            $number = array();
            while ($input_number > 0) {

                if($input_number % 15 == 0) {
                    array_push($number, 'PingPong');
                }
                elseif ($input_number % 3 == 0 && $input_number % 15 != 0){
                    array_push($number, 'Ping');
                }
                elseif ($input_number % 5 == 0 && $input_number % 15 != 0 ){
                    array_push($number, 'Pong');
                }
                else {
                    array_push($number, $input_number);
                }

                --$input_number;
            }
            array_push($number, "0");
            
            $number = array_reverse($number);

            return $number;

        }


    }

?>
