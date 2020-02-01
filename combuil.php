<?php
$conn=mysqli_connect('localhost','root','','bus travelers');
$com1=$_POST["c1"];
$com2=$_POST["e1"];
$com3=$_POST["e2"];
$com4=$_POST["e3"];
$com5=$_POST["e4"];
$com6=$_POST["e5"];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['f1']['name']);
echo $target_file."<br>";
echo basename($_FILES['f1']['name'])."<br>";

$uploadOk = 1;
$image=$target_file;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["e7"])) {
    $check = getimagesize($_FILES["f1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["f1"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["f1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["f1"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
$sql="insert into cbuilding values('$com1','$com2','$com3','$com4','$com5','$com6','$image')";
$rec=mysqli_query($conn,$sql);
echo "<script> alert('inserted')</script>";}
?>
