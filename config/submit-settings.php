<?php

/*-----------------------------------------------------------------------------------*/
/* Save Submitted Content
/*-----------------------------------------------------------------------------------*/

if($_POST['submit'] == "submit")
{
    // Get Stuff
    $blog_email = $_POST['blog_email'];
    $blog_twitter = $_POST['blog_twitter'];
    $blog_url = $_POST['blog_url'];
    $blog_title = htmlspecialchars($_POST['blog_title']);
    $meta_description = htmlspecialchars($_POST['meta_description']);
    $intro_title = htmlspecialchars($_POST['intro_title']);
    $intro_tag = $_POST['intro_tag'];
    $about_title = htmlspecialchars($_POST['about_title']);
    $about_tag = $_POST['about_tag'];
    $contact_title = htmlspecialchars($_POST['contact_title']);
    $contact_tag = $_POST['contact_tag'];
    $password = $_POST['password'];
    $tracking_code = addslashes($_POST['tracking_code']);

    // Output Stuff
    $config[] = "<?php";
    $config[] = "\$blog_email = '$blog_email';";
    $config[] = "\$blog_twitter = '$blog_twitter';";
    $config[] = "\$blog_url = '$blog_url';";
    $config[] = "\$blog_title = \"$blog_title\";";
    $config[] = "\$meta_description = \"$meta_description\";";
    $config[] = "\$intro_title = \"$intro_title\";";
    $config[] = "\$intro_tag = \"$intro_tag\";";
    $config[] = "\$about_title = \"$about_title\";";
    $config[] = "\$about_tag = \"$about_tag\";";
    $config[] = "\$contact_title = \"$contact_title\";";
    $config[] = "\$contact_tag = \"$contact_tag\";";
    $config[] = "\$password = '$password';";
    $config[] = "\$tracking_code = '$tracking_code';";

    // Put Stuff
    file_put_contents("../config/config-settings.php", implode("\n", $config));

    // Redirect
    header('Location: ' . '../');
}

?>