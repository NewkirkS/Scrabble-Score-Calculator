<?php
    require_once __DIR__."/../src/Score.php";

    class ScoreTest extends PHPUnit_Framework_TestCase
    {
        function test_createObject()
        {
            //Arrange
            $test_score = new Score();
            //Act
            // Assert
            $this->assertEquals("a", $test_score->one_point[0]);
        }

        function test_getWordScore_oneLetter()
        {
            //Arrange
            $test_Score = new Score();
            $test_Word = "A";
            //Act
            $test_Score->getScore($test_Word);
            // Assert
            $this->assertEquals(1, $test_Score->word_score);
        }

        function test_getWordScore_()
        {
            //Arrange
            $test_Score = new Score();
            //Nonsense word to test each property of Score
            $test_Word = "Admvkjq";
            //Act
            $test_Score->getScore($test_Word);
            // Assert
            $this->assertEquals(33, $test_Score->word_score);
        }
    }
 ?>
