<?php
        require_once "src/PingPong.php";

        class PingPongTest extends PHPUnit_Framework_TestCase
        {




            function test_printNumberRange()
            {
                //Arrange
                $test_PingPong = new PingPong;
                $input = "16";

                //Act
                $result = $test_PingPong->printNumberRange($input);

                //Assert
                $this->assertEquals(implode(" ",range(0,$input)), $result);
            }

            function test_printPingPong(){

                //Arange
                $test_PingPong = new PingPong;
                $input = "16";

                //Act
                $result = $test_PingPong->printNumberWithPingPong($input);

                //Assert
                $this->assertEquals("0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 PingPong 16", $result);
            }

            function test_printAll(){

                //Arrange
                $test_PingPong = new PingPong;
                $input = "16";

                //Act
                $result = $test_PingPong->printAll($input);

                //Assert
                $this->assertEquals("0 1 2 Ping 4 Pong Ping 7 8 Ping Pong 11 Ping 13 14 PingPong 16", $result);
            }



        }

?>
