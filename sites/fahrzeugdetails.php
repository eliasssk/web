<?php
 include("../includes/header.php");
?>

<!-- Starting Image-->
<section class="startingimage-fahrzeugdetails"></section>


<!--Fahrzeugdetails-->
<section class="Fahrzeugdetails">

    <h2>Fahrzeugdetails</h2>
    <div class="griddetails">

            <div class="box-details">
                <div class="cartypeimage"></div>
                <?php
                if(!isset($_SESSION["username"])){
              } else {?>
                <a href="buchungsbestaetigung.php"><button class="buttonbuchung">Jetzt buchen!</button></a>
                <?php
              }
                ?>


                <?php
                if(!isset($_SESSION["username"])){?>
                  <a href="login-seite.php" ><div class="LoginTo"> Bevor Sie ein Fahrzeug mieten können müssen Sie sich anmelden oder registrieren.</div></a>
                <?php
              } else {}
                ?>

            </div>


            <div class="box-details">
            <div class="spezifikationen">

                <div class="Headline_one">
                <h4> Detailansicht:</h4>
                </div>

                <br> </br>


                <div class="Zeitraum">
                     <p> Ihr ausgewählter Zeitraum:

                    21.08.-29.08.2022 in HAMBURG </p></div>


                <h4> Details </h4>

                <p>- Hersteller: Mercedes </p>
                <p>- Typ: Cabrio</p>
                <p>- Anzahl Türen: 4</p>
                <p>- Anzahl Sitze: 5</p>
                <p>- Getriebe: Automatik</p>
                <p>- Klimaanlage: Ja</p>
                <p>- GPS: Ja</p>
                <br> </br>

                <div class="Nachricht">
                <p> Nur noch 1 Auto dieses Typs im ausgewählten Zeitraum verfügbar!</p>
                </div>

                <br> </br>


                <div class="Preis">
                    <h3> 85.99€/Tag </h3>

            </div>


            </div>
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
