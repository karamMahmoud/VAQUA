<?php

class qa_upload_test_widget {

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
    echo '<form NAME="myform" METHOD=POST ENCTYPE="multipart/form-data" ACTION = "upload.php">
    <input type="file" name="fileToUpload">
    <input type="submit" value="Upload Image" name="submit" >
    </form>
    <input type = "checkbox" id ="mmd" >';
}

}

?>
