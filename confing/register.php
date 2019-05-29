<?php
 session_start();
 $namePage="Register";
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
 include "navbar.php";
 ?>
    <div class="container">
        <h1 class="text-center pt-5 mt-5 text-secondary">REGISTER NOW</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" class="controle-form animated bounceInDown" method="post">
            <input type="text" name="username" placeholder="Type your Name *" class="form-control " maxlength="35"
                required>
            <i class="fas fa-user"></i>
            <input type="email" name="email" placeholder="Type your Email *" class="form-control" maxlength="40"
                required>
            <i class="fas fa-envelope-open-text"></i>
            <input type="password" name="password" placeholder="Type your password *" class="form-control"
                maxlength="35" required>
            <i class="fas fa-key"></i>
            <input type="password" name="confirm_pasword" placeholder="Type your confirm password *"
                class="form-control" maxlength="35" required>
            <i class="fas fa-key"></i>
            <input type="text" name="phone" placeholder="Type your numbre phone * " class="form-control" maxlength="20"
                required>
            <i class="fas fa-phone-square"></i>
            <input type="submit" class="btn btn-secondary btn-block" name="submit" value="Valid">
            <i class="fas fa-paper-plane "></i>
        </form>
    </div>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "abdo";
        $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
        $username = mysqli_real_escape_string($conn,strtolower($_POST["username"]));//mysqli_real_escape_string for security The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z
        $email = mysqli_real_escape_string($conn,strtolower($_POST["email"]));
        $password = mysqli_real_escape_string($conn,$_POST["password"]);
        $confirm_pasword = mysqli_real_escape_string($conn,$_POST["confirm_pasword"]);
        $phone = $_POST["phone"];
        if(!empty($username) and !empty($email) and !empty($password) and !empty($confirm_pasword) and !empty($phone) ){
            if($password != $confirm_pasword){
                echo "<script> alert(\"Chek your password\")</script>";
            }else{
               
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
                if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    exit('Invalid email address'); 
                }
                $select = mysqli_query($conn, "SELECT `email` FROM `logex` WHERE `email` = '".$_POST['email']."'") or exit(mysqli_error($conn));
                // to chek if thier is email already in database
                if(mysqli_num_rows($select)) {
                    echo "<script> alert(\"This email is already being used\")</script>";
                    exit('');
                    
                }else{
                
                    $sql = "INSERT Into logex (username, passw, email, confirm_pasword, Phone)values ('$username', '$password', '$email','$confirm_pasword', '$phone')";
                    
                    if ($conn->query($sql) === TRUE) {
                        echo "<script> alert(\"New record created successfully\")</script>";
                     
                    } else {
                
                        echo "<script> alert(\"There is some errors\")</script>";
                    }
                    
                    $conn->close();
                }
            }
        }
    }
    include "footer.php";
    ?>
    <!-- bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    </body>

</html>