

<?php
 include("../includes/header.php");
?>


 <!-- Login Php -->
 <?php
 if(isset($_POST["submit"])){
     require("../_db.php");
     $sql = "SELECT * FROM user WHERE username = :user"; //Username checken
     $pdo = dbConnect();
     $stmt = $pdo->prepare($sql);
     $stmt->bindParam(":user", $_POST["username"]);
     $stmt->execute();
     $result = $stmt->fetchAll();


     $count = $stmt->rowCount();
     if($count == 1){

         //Username existiert
        $row = $result[0];
//password_verify($_POST["password"], $row["password"])
        if( $_POST["password"] = $row["password"]){

         session_start();
         $_SESSION["username"] = $row["username"];
         header("Location: homepage.php");
         echo"hallo";
        } else {
          ?><div class="login"><?php
         echo "Der Login ist fehlgeschlagen ";
         ?></div><?php
       }
     } else {
       echo "Der Login ist fehlgeschlagen ";

     }
   }
     ?>


    <!-- Login Fenster-->

    <section class="login_bereich">
          <div class="background-login">
            <div class="login_feld">
              <h2>Login</h2>
              <form action="login-seite.php" method="post">

                <input type="text" name="username" placeholder="Benutzername" required>

                <input type="password" name="password" placeholder="Passwort" required>

                <input type="submit" name="submit" value="Anmelden" >

              </form>
            </div>
          </div>
    </section>


<!-- ÜberFooter -->

<?php
 include("../includes/ueber_footer.php");
?>

<!--FOOTER-->

<?php
 include("../includes/footer.php");
?>


</body>
</html>
