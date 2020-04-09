<?php
require_once "connection2.php";
if(isset($_POST['upload'])) {
if(is_uploaded_file($_FILES['image']['tmp_name'])){
    echo 'Salut';
 $sqlp="CREATE TRIGGER after_insert BEFORE INSERT ON images FOR EACH ROW
                BEGIN
                INSERT INTO images_updated(title,status,edtime)VALUES(NEW.title,'INSERTED',NOW());
                END;
";
 $stmt=$con->prepare($sqlp);
 $stmt->execute();
$title=$_POST['text'];
$image="./images/".basename($_FILES['image']['name']);
$sql="CALL insertimage('$title','$image')";
$q=$con->query($sql);
if($q){
header('location:welcome.php');}
    else{
        $msg="Ceva este gresit!";
    }
}
}
?>