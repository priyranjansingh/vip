<?php

function pre($var, $flag = false) {
    print"<pre>";
    print_r($var);
    print"</pre>";
    if ($flag) {
        die();
    }
}

function getPlusMinusClass($slug) {
    $CI = & get_instance();
    if (!empty($CI->session->userdata('crate'))) {
        if (in_array($slug, $CI->session->userdata('crate'))) {
            $class = "fa-minus-circle";
        } else {
            $class = "fa-plus-circle";
        }
    } else {
        $class = "fa-plus-circle";
    }
    return $class;
}
