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
            
        }
    }
?>
