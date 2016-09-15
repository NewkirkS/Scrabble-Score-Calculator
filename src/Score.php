<?php
    class Score
    {
        public $one_point = array("a", "e", "i", "o", "u", "l", "n", "r", "s", "t");
        public $two_points = array("d", "g");
        public $three_points = array("b", "c", "m", "p");
        public $four_points = array("f", "h", "v", "w", "y");
        public $five_points = array("k");
        public $eight_points = array("j", "x");
        public $ten_points = array("q", "z");
        public $word_score = 0;

        // Get score from user's word
        function getScore($input_word)
        {
            $input_word = strtolower($input_word);
            foreach($this->one_point as $letter) {
                if ($input_word == $letter) {
                    $this->word_score += 1;
                }
            }
        }
    }
 ?>
