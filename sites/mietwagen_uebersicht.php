<?php
 include("../includes/header.php");
?>

    <!-- Starting Image -->
    <section class="startingimage_mietwagen_uebersicht">
    </section>

    <!-- Filter + Mietwagen Üersicht-->

    <section class="mietwagen_uebersicht">

        <!-- Div für den Bereich vom Filterbereich und Autoauswahlbereich -->
         <div class="content">

           <!-- Div für die für den Filterbereich -->

           <div class="filter-uebersicht">

             <!-- Überschrift für den Filterbereich -->

             <h2>Meine Reise</h2><br><br>

             <!-- Abfrage von Filtern durch den forms  -->

             <form action="/filter_autoauswahl.php">

              <div class="standort">

                <!-- Dropdownfilter zur Standort Auswahl -->

                <label class="Standorte" for="Standorte"><i class="fa-solid fa-location-dot"></i></label>
                  <select id="Standorte" name="Standorte">
                    <option value="Hamburg">Hamburg</option>
                    <option value="Berlin">Berlin</option>
                    <option value="Leipzig">Bochum</option>
                  </select>
              </div>

              <!-- Filter für den Buchungszeitraum -->
              <div>
                <input type="text" placeholder="Von" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
                <input type="text" placeholder="Bis" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}"><br>
              </div>
              <!-- Such buttom für die Suche nach Standort und Datum -->
              <div>
                <input  type="submit" value="Suchen"><br>
              </div>
               <!-- Wird später ersetz durch <a href="<?= $_SERVER['PHP_SELF'] ?>">Auswahl zurücksetzen</a> -->
               <!-- zurücksetzen des Standorts und Datums -->
               <div>
                 <a href="/sites/mietwagen_uebersicht">Auswahl zurücksetzen</a><br>
               </div>

               <!-- Dropdownfilter für verschiedene Attribute zur Autoauswahl -->

               <div>
                 <label for="Hers">Hersteller</label>
                    <select id="Hers" name="Hersteller">
                      <option value="Audi">Audi</option>
                      <option value="BMW">BMW</option>
                      <option value="Mercedes">Mercedes</option>
                    </select>
                </div><br>
                <div>
                  <label for="getriebe">Getriebe</label>
                    <select id="getriebe" name="getriebe">
                      <option value="schaltung">Schaltung</option>
                      <option value="automatik">Automatik</option>
                    </select>
                </div><br>
                <div>
                  <label for="antrieb">Antrieb</label>
                    <select id="antrieb" name="antrieb">
                      <option value="elektro">Elektro</option>
                      <option value="benzin">Bezin</option>
                      <option value="diesel">Diesel</option>
                    </select>
                </div><br>
                <div>
                  <label for="Typ">Typ</label>
                    <select id="Typ" name="Typ">
                      <option value="cabrio">Cabrio</option>
                      <option value="suv">SUV</option>
                      <option value="sportwagen">Sportwagen</option>
                    </select>
                </div><br>
                <div>
                  <label for="sitze">Sitze</label>
                    <select id="sitze" name="sitze">
                      <option value="2">2</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                </div><br>
                <div>
                  <label for="türen">Türen</label>
                    <select id="türen" name="türen">
                      <option value="3">3</option>
                      <option value="5">5</option>
                    </select>
                </div><br>
                <div>
                  <label for="Farbe">Farbe</label>
                    <select id="Farbe" name="Farbe">
                      <option value="rot">Rot</option>
                      <option value="weiß">Weiß</option>
                      <option value="Schwarz">Schwarz</option>
                    </select>
                </div><br>
                <div>
                  <label for="Preis">Preis</label>
                    <select id="Preis" name="Preis">
                      <option value="100">100€</option>
                      <option value="150">150€</option>
                      <option value="200">200€</option>
                    </select>
                </div><br>

                <!-- Checkboxen als Filter für Klimaanlage und GPS  -->

                <div>
                  <div class="Klimaanlage">
                    <label for="Klimaanlage">Klimaanlage</label>
                    <input type="checkbox" id="Klimaanlage" name="Klimaanlage"checked>
                  </div>
                  <div class="GPS">
                    <label for="GPS">GPS</label>
                    <input type="checkbox" id="GPS" name="GPS">
                  </div>
                </div>

                <!-- Buttom zum bestätigen der Filter und zum starten der Suche -->

                <input  type="submit" value="Filtern"><br>

                <!-- Feld zum zurücksetzen aller Filter -->

                <a href="/Design/mietwagen_uebersicht">Filter zurücksetzen</a>

              </form>

           </div>

           <!-- Div für den Autoauswahlbereich -->

           <div class="mietwagen_auswahl">

   <!-- Tabellenstruktur mit Autos die verfügbar sind -->
   <!-- Spalte eins -->
   <a href="fahrzeugdetails.php">
   <div class="mietwagen_auswahl_row">
    <div class="mietwagen_auswahlfeld">
      <h2>Audi</h2>
      <div class="auswahlfeld_img"><img src="../Bilder/Coupe.jpeg"></div>
        <div>
          <div class="auswahlfeld_preis">
            <h3>ab 199€</h3>
          </div>
          <div class="auswahlfeld_text">
            <p>pro Tag</p>
          </div>
        </div>
        <div class="auswahlfeld_verfügbarkeit">
          <p>*Nur noch 2 Autos verfügbar</p>
        </div>
    </div>


    <div class="mietwagen_auswahlfeld">
      <h2>Mercedes</h2>
      <div class="auswahlfeld_img"><img src="../Bilder/Limo.jpeg"></div>
        <div>
          <div class="auswahlfeld_preis">
            <h3>ab 199€</h3>
          </div>
          <div class="auswahlfeld_text">
            <p>pro Tag</p>
          </div>
        </div>
        <div class="auswahlfeld_verfügbarkeit">
          <p>*Nur noch 2 Autos verfügbar</p>
        </div>
    </div>

    <div class="mietwagen_auswahlfeld">
      <h2>Mercedes</h2>
      <div class="auswahlfeld_img"><img src="../Bilder/Combi.jpeg"></div>
        <div>
          <div class="auswahlfeld_preis">
            <h3>ab 299€</h3>
          </div>
          <div class="auswahlfeld_text">
            <p>pro Tag</p>
          </div>
        </div>
        <div class="auswahlfeld_verfügbarkeit">
          <p>*Noch 9 Autos verfügbar</p>
        </div>
    </div>
  </div>

  <!-- Spalte zwei -->

  <div class="mietwagen_auswahl_row">
   <div class="mietwagen_auswahlfeld">
     <h2>BMW</h2>
     <div class="auswahlfeld_img"><img src="../Bilder/Cabrio.jpeg"></div>
       <div>
         <div class="auswahlfeld_preis">
           <h3>ab 249€</h3>
         </div>
         <div class="auswahlfeld_text">
           <p>pro Tag</p>
         </div>
       </div>
       <div class="auswahlfeld_verfügbarkeit">
         <p>*Nur noch 1 Auto verfügbar</p>
       </div>
   </div>

   <div class="mietwagen_auswahlfeld">
     <h2>Mercedes</h2>
     <div class="auswahlfeld_img"><img src="../Bilder/Mehrsitzer.jpeg"></div>
       <div>
         <div class="auswahlfeld_preis">
           <h3>ab 199€</h3>
         </div>
         <div class="auswahlfeld_text">
           <p>pro Tag</p>
         </div>
       </div>
       <div class="auswahlfeld_verfügbarkeit">
         <p>*Noch 6 Autos verfügbar</p>
       </div>
   </div>

   <div class="mietwagen_auswahlfeld">
     <h2>Mini</h2>
     <div class="auswahlfeld_img"><img src="../Bilder/Suv.jpeg"></div>
       <div>
         <div class="auswahlfeld_preis">
           <h3>ab 99€</h3>
         </div>
         <div class="auswahlfeld_text">
           <p>pro Tag</p>
         </div>
       </div>
       <div class="auswahlfeld_verfügbarkeit">
         <p>*Nur noch 3 Autos verfügbar</p>
       </div>
   </div>
 </div>

 <!-- Spalte drei -->

 <div class="mietwagen_auswahl_row">
  <div class="mietwagen_auswahlfeld">
    <h2>Audi</h2>
    <div class="auswahlfeld_img"><img src="../Bilder/Coupe.jpeg"></div>
      <div>
        <div class="auswahlfeld_preis">
          <h3>ab 199€</h3>
        </div>
        <div class="auswahlfeld_text">
          <p>pro Tag</p>
        </div>
      </div>
      <div class="auswahlfeld_verfügbarkeit">
        <p>*Nur noch 2 Autos verfügbar</p>
      </div>
  </div>

  <div class="mietwagen_auswahlfeld">
    <h2>Mercedes</h2>
    <div class="auswahlfeld_img"><img src="../Bilder/Limo.jpeg"></div>
        <div>
          <div class="auswahlfeld_preis">
            <h3>ab 199€</h3>
          </div>
          <div class="auswahlfeld_text">
            <p>pro Tag</p>
          </div>
          </div>
        <div class="auswahlfeld_verfügbarkeit">
          <p>*Nur noch 2 Autos verfügbar</p>
        </div>
      </div>

      <div class="mietwagen_auswahlfeld">
        <h2>Mercedes</h2>
        <div class="auswahlfeld_img"><img src="../Bilder/Combi.jpeg"></div>
        <div>
          <div class="auswahlfeld_preis">
            <h3>ab 199€</h3>
          </div>
          <div class="auswahlfeld_text">
            <p>pro Tag</p>
          </div>
          </div>
        <div class="auswahlfeld_verfügbarkeit">
          <p>*Nur noch 2 Autos verfügbar</p>
        </div>
                </div>
              </div>
               </a>
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
