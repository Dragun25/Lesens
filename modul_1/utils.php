<?php
    
    /**
     * Description
     * @param type $string 
     * @param type $new 
     * @param type $end 
     * @param type $color 
     * @return type
     */
    function cli_color($string, $new = 0, $end = 0, $color = 'g') {
        $colors = array(
            'g' => '[032m',
            'r' => '[031m',
            'w' => '[0m',
        );
        $str = chr(27) . $colors[$color] . $string
         . chr(27) . $colors['w'];
        if ($new) $str = PHP_EOL . $str;
        if ($end) $str .= PHP_EOL;
        return $str;
    }

    /**
     * Description
     * @param type $expected 
     * @param type $received 
     * @return type
     */
    function test($received, $expected) {
        echo $expected === $received ? cli_color("OK", 0, 1)
            : cli_color("Fail", 0, 1, 'r');
    }

    function test_my_sum(){
        echo "We are testing my_sum!" . PHP_EOL;
        test(12, my_sum(array(10, 2, 0)));
        test(144, my_sum(array(10, 20, 100, 14)));
        test(12, my_sum(array(-50, 200, -100, -50, 12)));
    }


    function test_shortener(){
        echo "We are testing shortener!" . PHP_EOL;
        $sourceStrings = array(
            'A very looooooong wooooord', 
            'Loremia ipsumia dolaria sitia ameti', 
            'Have you ever been to Lituania ?',
            'Anyone who reads Old and Middle',
            'English literary texts will be familiar',
            'with the mid-brown volumes of the EETS,',
            'with the symbol of Alfreds jewel embossed on the front cover.'
        );

        $testStrings = array(
            'A very looooo* wooooo*', 
            'Loremi* ipsumi* dolari* sitia ameti', 
            'Have you ever been to Lituan* ?',
            'Anyone who reads Old and Middle',
            'Englis* litera* texts will be famili*',
            'with the mid-br* volume* of the EETS,',
            'with the symbol of Alfred* jewel emboss* on the front cover.'
        );

        for ($i=0; $i < count($sourceStrings); $i++) {
            test($testStrings[$i], shortener($sourceStrings[$i]));
        }
    }

    function test_compare_ends() {
        echo "We are testing compare_ends!" . PHP_EOL;
        test(compare_ends(array('aba', 'xyz', 'aa', 'x', 'bbb')), 3);
        test(compare_ends(array('', 'x', 'xy', 'xyx', 'xx')), 2);
        test(compare_ends(array('aaa', 'be', 'abc', 'hello')), 1);
    }

    function test_reverse_string() {
        echo "We are testing reverse_string" . PHP_EOL;
        test(reverse_string('asdfcvbn'), 'nbvcfdsa');
        test(reverse_string('Welcome friend'), 'dneirf emocleW');
        test(reverse_string('nehzitsepmur'), 'rumpestizhen');
    }
