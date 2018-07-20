<?php
/**
 * Created by PhpStorm.
 * User: AnhVD
 * Date: 07/20/2018
 * Time: 12:16 AM
 */

function get_file_size($size) {
    if(empty($size)){
        return $size = 0;
    }
    return number_format($size/1048576, 1). 'MB';
}

function get_file_type_name($name) {
    if(empty($name)) {
        return '';
    }

    return  pathinfo($name, PATHINFO_EXTENSION);
}