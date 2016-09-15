<?php
    class Score
    {
        private $one_point = array("a", "e", "i", "o", "u", "l", "n", "r", "s", "t");
        private $two_points = array("d", "g");
        private $three_points = array("b", "c", "m", "p");
        private $four_points = array("f", "h", "v", "w", "y");
        private $five_points = array("k");
        private $eight_points = array("j", "x");
        private $ten_points = array("q", "z");
        private $word_score = 0;

        //Getters. Currently experimenting with using a loop, but may need to change to simple return of array.
        function getOnes() {
            foreach ($one_point as $letter) {
                return $letter;
            }
        }

        function getTwos() {
            foreach ($two_points as $letter) {
                return $letter;
            }
        }

        function getThrees() {
            foreach ($three_points as $letter) {
                return $letter;
            }
        }

        function getFours() {
            foreach ($one_points as $letter) {
                return $letter;
            }
        }

        function getFives() {
            foreach ($five_points as $letter) {
                return $letter;
            }
        }

        function getEights() {
            foreach ($eight_points as $letter) {
                return $letter;
            }
        }

        function getTens() {
            foreach ($ten_points as $letter) {
                return $letter;
            }
        }

        function getWordScore()
        {
            return $this->$word_score;
        }
        // Get score from user's word
        function getScore($input_word)
        {
            $input_word = strtolower($input_word);
            if ($input_word == $this->getOnes()) {
                $this->word_score += 1;
            }
        }
    }
 ?>
