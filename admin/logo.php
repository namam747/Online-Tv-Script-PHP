    <?php
    
if($_FILES)
{

// IMAGE UPLOAD //////////////////////////////////////////////////////////
    $folder = "../";
    $new_name_1 = "logo";
    $bgimg_1 = $new_name_1.'.png';
    $uploaddir_1 = $folder . $bgimg_1;
    $res = move_uploaded_file($_FILES['bgimg']['tmp_name'], $uploaddir_1);
    
    $new_name_2 = "icon";
    $bgimg_2 = $new_name_2.'.png';
    $uploaddir_2 = $folder . $bgimg_2;
    $res2 = move_uploaded_file($_FILES['icon']['tmp_name'], $uploaddir_2);
//////////////////////////////////////////////////////////////////////////
//var_dump($res);
//var_dump($res2);


header('Location: setlogo.php');
exit();


}
?>