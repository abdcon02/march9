<?php
    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitlecase_oneword()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "beowulf";

            //act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //assert
            $this->assertEquals("Beowulf", $result);
        }

        function test_MakeTitlecase_multiplewords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "the little mermaid";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCaseAll($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }

        function test_MakeTitleCase_Littlewords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "to be or not to be";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCaseLittle($input);

            //Assert
            $this->assertEquals("To Be or Not to Be", $result);
        }

    }

?>
