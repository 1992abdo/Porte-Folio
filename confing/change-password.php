 <?php
 session_start();
 $namePage="change password";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <?php
 include "navbar.php";
?>
 <div class="container " style="margin-top:150px;">
     <form action="<?php echo $_SERVER["PHP_SELF"];?>" class="controle-form animated bounceInDown" method="post">
         <input type="password" name="currentPassword" placeholder="Type your current password" class="form-control"
             required>
         <i class="fas fa-key"></i>
         <input type="password" name="newPassword" placeholder="Type your new password" class="form-control"
             maxlength="35" required>
         <i class="fas fa-key"></i>
         <input type="password" name="confirmPassword" placeholder="Type your confirm password" class="form-control"
             maxlength="35" required>
         <i class="fas fa-key"></i>
         <input type="submit" class="btn btn-secondary btn-block" name="submit" value="Valid">
         <i class="fas fa-paper-plane "></i>
     </form>
 </div>
 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $conn = mysqli_connect("localhost", "root", "", "abdo") or die("Connection Error: " . mysqli_error($conn));
    $newPassword = mysqli_real_escape_string($conn,$_POST["newPassword"]);//mysqli_real_escape_string for security The string to be escaped. Characters encoded are NUL (ASCII 0), \n, \r, \, ', ", and Control-Z
    $confirmPassword= mysqli_real_escape_string($conn,$_POST["confirmPassword"]);
    //to check if thier $_SESSION["login_user"]
    if(isset($_SESSION["login_user"])){
        $result = mysqli_query($conn, "SELECT passw from logex WHERE email='" . $_SESSION["login_user"] . "'");
        $row = mysqli_fetch_array($result);
        if ($_POST["currentPassword"] == $row["passw"]) {
            // we use the session (login_user)to chnage the password will find it in login fill
            if($newPassword == $confirmPassword ){
                mysqli_query($conn, "UPDATE logex set passw='" . $newPassword . "' WHERE email='" . $_SESSION["login_user"] . "'");
                mysqli_query($conn, "UPDATE logex set confirm_pasword='" . $newPassword . "' WHERE email='" . $_SESSION["login_user"] . "'");
                
                echo "<script> alert(\"Your password changed\")</script>"; 
            }else{
                echo "<script> alert(\"Chek the new password if is correct\")</script>"; 
            }
        }else{
            echo "<script> alert(\"Current Password is not correct\")</script>";
        }
    }else{
        echo "<script> alert(\"You should to log in the first\")</script>"; 
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