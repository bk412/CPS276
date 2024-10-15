<?php

class Helper {
    function  reverseName($name) {
        $names = explode(' ', $name);
        $names = array_reverse($names);
        return implode(', ', $names);
}

    function addName($lastNameFirstName, $reversedName){
        $text = explode("\n", $lastNameFirstName);
        $text[] = $reversedName;
        sort($text);
        return implode("\n", $text);
}

}
?>