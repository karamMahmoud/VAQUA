<?php

class qa_retrieve_test_widget {

    function allow_template($template)
    {
        //return ($template=='tag');
        return true;
    }
    function allow_region($region)
{
    return true;
}

function output_widget($region, $place, $themeobject, $template, $request, $qa_content)
{
	echo'<br><input type = "checkbox">target<br>
    <input type = "checkbox">source';
}

}

?>