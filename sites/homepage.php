<?php
 include("../includes/header.php");
?>


    <!-- Starting Image + Filter-->
    <section class="startingimage-homepage"> <!-- starting image / Hintergrund Filter-->

            <div class="slogan-card"> <!-- weißer Rahmen Filterbox-->
                <h1>mylife. &nbsp;   myride. &nbsp; mycar.</h1>
                <h2>Jetzt dein Wunschauto an einem unserer 14 Standorte buchen.</h2>
                    <div class="filter"> <!-- Anordnung Filter-->
                        <form action="">
                            <div class="input-box"> <!-- Input box -->
                                <span> Standort</span>
                                <select class="select-location" id="Standorte" name="Standorte">
                                    <option value="Hamburg">Hamburg</option>
                                    <option value="Berlin">Berlin</option>
                                    <option value="Leipzig">Bochum</option>
                                  </select>
                            </div>
                            <div class="input-box"> <!-- Input box -->
                                <span> Von</span>
                                <input type="text" name="" id="" placeholder="Startdatum" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='date'}">
                            </div>
                            <div class="input-box"> <!-- Input box -->
                                <span> Bis</span>
                                <input type="text" name="" id="" placeholder="Enddatum" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='date'}">
                            </div>
                            <div class="submit"> <!-- Input box -->
                            <input type="submit" name="" id="" value="Suchen" class="submitbutton">
                            </div>
                        </form>

                    </div>

            </div>

    </section>


    <!-- USP (neu)-->

    <section class="container-usp"> <!-- Anordnung USPs -->

        <h2>Unser USP</h2>

            <div class="uspcontent"> <!-- Einzelnes USP-->
                   <i class="fa-solid fa-percent icon"></i>
                    <div> Exklusive Rabatte</div>
                    <p>für Premium Mietglieder durch Meilen sammeln</p>
            </div>

            <div class="uspcontent"> <!-- Einzelnes USP-->
                <i class="fa-solid fa-car-burst icon"></i>
                 <div>Versicherungsschutz</div>
                 <p >für jegliche Schäden an ihrem Mietwagen</p>
            </div>

            <div class="uspcontent"> <!-- Einzelnes USP-->
                <i class="fa-solid fa-circle-info icon" ></i>
                 <div>24/7 Service</div>
                 <p >per Telefon oder per App immer und überall</p>
            </div>

            <div class="uspcontent"> <!-- Einzelnes USP-->
                <i class="fa-solid fa-leaf icon leaf"></i>
                <div> Nachhaltig</div>
                <p>leben, mit unserer neuen E-Flotte</p>
            </div>

    </section>





    <!-- Our Fleet-->
    <section class="ourfleet"> <!-- Hintergrund Our Fleet-->
        <h2> Unsere Flotte</h2>

        <div class="gridfleet">   <!-- Anordnung Fahrzeugtypen-->
            <a href="mietwagen_uebersicht.php">  <div class="cartype"><h2>Limosine</h2><img src="../Bilder/Limo.jpeg"></div></a> <!-- Einzelner Fahrzeugtyp-->
            <a href="mietwagen_uebersicht.php">  <div class="cartype"><h2>SUV</h2><img src="../Bilder/Suv.jpeg"></div></a> <!-- Einzelner Fahrzeugtyp-->
            <a href="mietwagen_uebersicht.php">  <div class="cartype"><h2>Cabrio</h2><img src="../Bilder/Cabrio.jpeg"></div></a> <!-- Einzelner Fahrzeugtyp-->
        </div>
        <div class="gridfleet">
                <a href="mietwagen_uebersicht.php"><div class="cartype"><h2>Combi</h2><img src="../Bilder/Combi.jpeg"></div></a> <!-- Einzelner Fahrzeugtyp-->
                <a href="mietwagen_uebersicht.php"><div class="cartype"><h2>Coupe</h2><img src="../Bilder/Coupe.jpeg"></div></a> <!-- Einzelner Fahrzeugtyp-->
                <a href="mietwagen_uebersicht.php"><div class="cartype"><h2>Mehrsitzer</h2><img src="../Bilder/Mehrsitzer.jpeg"></div></a> <!-- Einzelner Fahrzeugtyp-->
        </div>
    </section>


 <!-- Our Locations-->
    <section class="locations"> <!-- Hintergrund Our Locations-->
        <h2>Unsere Standorte</h2>
    <div class="gridlocations"> <!-- Anordnung Text & Karte-->

        <div class="text-locations"> <!-- Text Locations -->
            <h1>Eine Auswahl von über 200 Fahrzeugen</h1>
        </div>
        <div class="maplocation" > <!-- Deutschland Karte-->
            <a href="../sites/standorte.php"><img class="map" src="../Bilder/Deutschlandkarte.png"></a>
        </div>
        <div class="text-locations"> <!-- Text Locations -->
            <h1>Deutschlandweit an über 13 Standorten</h1>
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
