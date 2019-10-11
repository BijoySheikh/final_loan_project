 
<?php
$target_dir = "member_images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
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
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "torun";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST["m_name"], $_POST["f_name"])){

    $m_name = mysqli_real_escape_string($conn, $_POST["m_name"]);
    $f_name = mysqli_real_escape_string($conn, $_POST["f_name"]);
    $phone_no = mysqli_real_escape_string($conn, $_POST["phone_no"]);
    $refer_name = mysqli_real_escape_string($conn, $_POST["refer_name"]);
    $present_addr = mysqli_real_escape_string($conn, $_POST["present_addr"]);
    $permanent_addr = mysqli_real_escape_string($conn, $_POST["permanent_addr"]);
    $upload_img = mysqli_real_escape_string($conn, $_POST["upload_img"]);
    $loan_sirial = mysqli_real_escape_string($conn, $_POST["loan_sirial"]);
    $loan_date = mysqli_real_escape_string($conn, $_POST["loan_date"]);
    $loan_amount = mysqli_real_escape_string($conn, $_POST["loan_amount"]);
    $profit_amount = mysqli_real_escape_string($conn, $_POST["profit_amount"]);
    $total_amount = mysqli_real_escape_string($conn, $_POST["total_amount"]);
    $premier_amount = mysqli_real_escape_string($conn, $_POST["premier_amount"]);
    $savings_amount = mysqli_real_escape_string($conn, $_POST["savings_amount"]);

}



$sql = "INSERT INTO member_data (m_name, f_name, phone_no, refer_name, present_addr, permanent_addr, upload_img, loan_sirial, loan_date, loan_amount, profit_amount, total_amount, premier_amount, savings_amount )
 VALUES('$m_name', '$f_name', '$phone_no', '$refer_name', '$present_addr', '$permanent_addr','$upload_img', '$loan_sirial', '$loan_date', '$loan_amount', '$profit_amount', '$total_amount', '$premier_amount', '$savings_amount')";

if ($conn->query($sql)) {
    echo "New record created successfully";
} else {
    echo "Check Database: " . $sql .  "<br>" . $conn->error;
}

header('location: running_member.php');


$conn->close();
?>



