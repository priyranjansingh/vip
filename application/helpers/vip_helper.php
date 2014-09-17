<?php
function pre($var,$flag=false)
{
    print"<pre>";
    print_r($var);
    print"</pre>";
    if($flag)
    {
        die();
    }    
}
