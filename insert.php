 
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
 