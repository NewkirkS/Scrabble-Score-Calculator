<?php
    require_once "src/Score.php"

    class ScoreTest extends PHPUnit_Framework_TestCase
    {
        function testOnes()
        {
            //Arrange
            $test_Score = new Score;
            $test_Word = "A";
            //Act
            $test_Score->getScore($test_Word);
            // Assert
            $this->assertEquals("a", $test_Word);
            $this->assertEquals(1, $test_Score->getWordScore());
        }
    }
 ?>
