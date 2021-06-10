<?php
class Autolaskuri {

    private $vw;
    private $opel; 

    public function __construct() {
        $this->vw = 0;
        $this->opel = 0;
    }
    // Alustetaan tai päivitetään autojen lukumääriä:
    // Muodolliset parametrit ovat viittauksia, joten
    // muutetut arvot välittyvät "takaisin" kutsuvaan
    // ohjelmalohkooon
    function laske_lkm ($nappi) {
        // Jotakin autonappia painettu, lisätään kertymää
        if ($nappi == "VW") {
            $this->vw += 1;
        }
        elseif ($nappi == "Opel") {
            $this->opel += 1;
        }
        // Painettiin Nollaa-painiketta tai pyydetään sivua ekaa kertaa
        else {
            $this->vw = 0;
            $this->opel = 0;
        }
    }
    
    function nayta_tulokset() {
        echo "<pre>\n";
        echo "Volkswagenit ... : $this->vw kpl.\n";
        echo "Opelit ......... : $this->opel kpl.\n";
        echo "</pre>\n";
    }
    
    // Tehdään lomake piilokenttineen
    function tee_lomake() {
    ?>
        <!--
        Oleellista on pitää yllä _samassa_ lomakkeessa
        kaikkien autojen kertymiä
        -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="hidden"
        value="<?php echo "$this->vw"?>" name="vw_lkm">
        <input type="hidden"
        value="<?php echo "$this->opel"?>" name="opel_lkm">
    
        <!--
        Huomaa useat samannimiset painikkeet: Arvona välittyy
        *vain* sen painikkeen arvo, jota painettiin!
        -->
    
        <input type="submit" value="VW" name="painike">
        <input type="submit" value="Opel" name="painike">
        <input type="submit" value="Nollaa" name="painike">
        </form>
    <?php
    }
}
    ?>