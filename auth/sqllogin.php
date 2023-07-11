<?php
$message = null;
if (count($_POST) > 0) {
    $isSuccess = 0;
    $conn = mysqli_connect("localhost", "root", "", "todo");
    $userName = $_POST['userName'];
    $sql = "SELECT * FROM user WHERE userName= ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s', $userName);
    $statement->execute();
    $result = $statement->get_result();
    while ($row = $result->fetch_assoc()) {
        if (! empty($row)) {
            $hashedPassword = $row["pass"];
            if (password_verify($_POST["pass"], $hashedPassword)) {
                $isSuccess = 1;
            }
        }
    }
    if ($isSuccess == 0) {
        $message = "Invalid Username or Password!";
    } else {
        echo "sukces albo i nie";
        header("Location:  ./todo.php");
    }
}
?>