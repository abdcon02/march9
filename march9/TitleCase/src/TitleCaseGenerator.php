<?php

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            return ucfirst($input_title);
        }

        function makeTitleCaseAll($input_title)
        {
            $title = explode(" ", $input_title);
            $holder = array ();
            foreach ($title as $multi) {

                array_push($holder, ucfirst($multi));

                }
            return implode(" ", $holder);
        }
        function makeTitleCaseLittle($input_title)
        {
            $title = explode(" ", $input_title);
            $holder = array ();
            $little = "a an the at by for in of on to up and as but it or nor";
            $check = explode(" ", $little);

            foreach ($title as $multi) {
                foreach ($check as $lil) {
                    if ($lil == $multi) {
                        array_push($holder, $multi);
                        }
                    }

                    array_push($holder, ucfirst($multi));

                    foreach ($check as $lil){
                        if ($lil == $multi) {
                            array_pop($holder);
                        }
                    }


            }

            return ucfirst(implode(" ", $holder));
        }
    }
?>
