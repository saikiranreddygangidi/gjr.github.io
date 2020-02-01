 <?php
$conn=mysqli_connect('localhost','root','','bus travelers');
$u1=$_POST["i1"];
$u2=$_POST["i2"];
$u3=$_POST["i3"];
$u4=$_POST["i4"];
$u5=$_POST["i5"];
$u6=$_POST["i6"];
$u7=$_POST["i7"];
$u9=$_POST["i9"];
$u10=$_POST["i10"];
/*encryption*/
 function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'Saikiran0074$';
    $secret_iv = 'gjrtravels';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}

/*encryption*/
 $u10 = encrypt_decrypt('encrypt', $u10);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES['f1']['name']);
echo $target_file."<br>";
echo basename($_FILES['f1']['name'])."<br>";

$uploadOk = 1;
$image=$target_file;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["i8"])) {
    $check = getimagesize($_FILES["f1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 1;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "<script>alert('Sorry, file already exists')</script>";
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
$ran=rand();
$f=1;
$sql="insert into comsignup(`company name`, `ceo`, `head quarters`, `email`, `username`, `city`, `state`, `country`, `image`, `id`, `pass`) values('$u1','$u2','$u3','$u4','$u5','$u6','$u7','$u9','$image','$ran','$u10')";

//alert("your succecfully signedup");
if (mysqli_query($conn, $sql)) {
    echo "<script> alert('inserted succesfully')</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




}
?>
<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<form action="confmail.php" method="post">
<input type="text" name="mail" value=<?php echo "".$u7;?> >
<input type="submit" name="go" style="background-color:blue;color:white;"value="confirmation for mail">
</form>
  
  </body>
  </html>