<?php
/**
 * Created by PhpStorm.
 * User: minis
 * Date: 3/02/2019
 * Time: 13:19
 */



/**
 * @param $text
 * @return string
 */
function escape($text){
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
