<?php
// Intelligently remove extra P and BR tags around shortcodes that WordPress likes to add
function chartjs_fix_shortcodes($content){   
    $array = array (
        '<p>[' => '[', 
        ']</p>' => ']', 
        ']<br />' => ']',
        ']<br>' => ']'
    );

    $content = strtr($content, $array);
    return $content;
}

?>