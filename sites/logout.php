


<?php
 include("../includes/header.php");
?>

<?php

if(isset($_POST["submit"])){
session_unset();
session_destroy();
header("Location: homepage.php");
}

?>


<!-- Logout Fenster-->

    <section class="logout_bereich">
          <div class="background-logout">
            <div class="logout_feld">

              <h2>Logout</h2><br><br>
              <h3>Klicken sie hier um sich abzumelden.</h3><br><br><br>

              <form action="logout.php" method="post">
                <input type="submit" name="submit" value="Abmelden" required>
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
