<?php 
//template.php
include 'header.php';    

//check if UserName exist

if(isset($_POST["UserName"]))
{
    echo $_POST["UserName"];
}else{
    //show form
    echo '
    <form action="" method="post">
    UserName: <input type="text" name="UserName" /><br />
    <input type="submit" />
    </form>
    ';
}
?>
<?php include 'footer.php'?>
