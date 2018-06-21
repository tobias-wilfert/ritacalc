<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
    }

// ------test  ------ ------ ------ ------ ------ ------ ------ ------ ------
ini_set('display_errors',0);

// Declaring begin values for varables

$loAmount = 2;
$geAmount = 2;
$goAmount = 2;

$neAmount = 4;
$aaAmount = 1;
$keAmount = 2;

$vak1Apperance = "number";
$vak2Apperance = "number";
$vak3Apperance = "number";
$vak4Apperance = "number";
$vak5Apperance = "number";

// Processing selection of richting

if( isset( $_REQUEST['selection'])){

// Declaring input

$Richting=$_REQUEST['Richting'];

if($Richting=="ET6"){
    $vak1 = " Esthetica ";
    $vak2 = " Economie ";
    $vak3 = " Duits ";
    $vak4 = " Natuurwetenschappen ";
    $vak5Apperance = "hidden";
}

if($Richting=="EW6"){
    $vak1 = " Esthetica ";
    $vak2 = " Economie ";
    $vak3 = " Fysica ";
    $vak4 = " Chemie ";
    $vak5 = " Biologie ";
}
if($Richting=="GL6"){
    $vak1 = " Esthetica ";
    $vak2 = " Latijn ";
    $vak3 = " Grieks ";
    $vak4 = " Natuurwetenschappen ";
    $vak5Apperance = "hidden";
}

if($Richting=="GW6"){
    $vak1 = " Esthetica ";
    $vak2 = " Grieks ";
    $vak3 = " Fysica ";
    $vak4 = " Chemie ";
    $vak5 = " Biologie ";
}
if($Richting=="H6"){
    $vak1 = " Gedragswetenschappen ";
    $vak2 = " Cultuurwetenschappen ";
    $vak3 = " Optie ";
    $vak4 = " Natuurwetenschappen ";
    $vak5Apperance = "hidden";
}

if($Richting=="LT6"){
    $vak1 = " Esthetica ";
    $vak2 = " Duits ";
    $vak3 = " Latijn ";
    $vak4 = " Natuurwetenschappen ";
    $vak5Apperance = "hidden";
}

if($Richting=="LWE6"){
    $vak1 = " Latijn ";
    $vak2 = " Fysica ";
    $vak3 = " Chemie ";
    $vak4 = " Biologie ";
    $vak5Apperance = "hidden";
}

if($Richting=="LW6"){
    $vak1 = " Esthetica ";
    $vak2 = " Latijn ";
    $vak3 = " Fysica ";
    $vak4 = " Chemie ";
    $vak5 = " Biologie ";
}

if($Richting=="TWE6"){
    $vak1 = " Duits ";
    $vak2 = " Fysica ";
    $vak3 = " Chemie ";
    $vak4 = " Biologie ";
    $vak5Apperance = "hidden";
}

if($Richting=="TW6"){
    $vak1 = " Esthetica ";
    $vak2 = " Duits ";
    $vak3 = " Fysica ";
    $vak4 = " Chemie ";
    $vak5 = " Biologie ";
}

if($Richting=="WEW6"){
    $vak1 = " Fysica ";
    $vak2 = " Chemie ";
    $vak3 = " Biologie ";
    $vak4Apperance = "hidden";
    $vak5Apperance = "hidden";
}

}

//Calculating average based on input provided by form

if( isset( $_REQUEST['calculate'] ))
{

// Declaring input

$Richting = $_REQUEST['choise'];

if($Richting=="WEW6")
{

$frAmount = 3;
$enAmount = 2;
$wiAmount = 6;

$vak1Amount = 3;
$vak2Amount = 3;
$vak3Amount = 2;

$lo = $_REQUEST['lichamelijke_opvoeding'];
$ge = $_REQUEST['geschiedenis'];
$go = $_REQUEST['godsdienst'];
$ne = $_REQUEST['nederlands'];
$fr = $_REQUEST['frans'];
$en = $_REQUEST['engels'];
$wi = $_REQUEST['wiskunde'];
$aa = $_REQUEST['aardrijkskunde'];
$ke = $_REQUEST['keuzevak'];

$vak1value = $_REQUEST['vak1'];
$vak2value = $_REQUEST['vak2'];
$vak3value = $_REQUEST['vak3'];

// In case one subject does not yet have any results

if($_REQUEST['lichamelijke_opvoeding']==NULL){
    $loAmount = 0;
}
if ($_REQUEST['geschiedenis']==NULL) {
    $geAmount = 0;
}
if ($_REQUEST['godsdienst']==NULL) {
    $goAmount = 0;
}
if ($_REQUEST['nederlands']==NULL) {
    $neAmount = 0;
}
if ($_REQUEST['frans']==NULL) {
    $frAmount = 0;
}
if ($_REQUEST['engels']==NULL) {
    $enAmount = 0;
}
if ($_REQUEST['wiskunde']==NULL) {
    $wiAmount = 0;
}
if ($_REQUEST['aardrijkskunde']==NULL) {
    $aaAmount = 0;
}
if ($_REQUEST['keuzevak']==NULL) {
    $keAmount = 0;
}
if ($_REQUEST['vak1']==NULL) {
    $vak1Amount = 0;
}
if ($_REQUEST['vak2']==NULL) {
    $vak2Amount = 0;
}
if ($_REQUEST['vak3']==NULL) {
    $vak3Amount = 0;
}

// Actual Calculating

$value = $lo*$loAmount+$ge*$geAmount+$go*$goAmount+$ne*$neAmount+$fr*$frAmount+$en*$enAmount+$wi*$wiAmount+$aa*$aaAmount+$ke*$keAmount+$vak1value*$vak1Amount+$vak2value*$vak2Amount+$vak3value*$vak3Amount;
$amount = $loAmount+$geAmount+$goAmount+$neAmount+$frAmount+$enAmount+$wiAmount+$aaAmount+$keAmount+$vak1Amount+$vak2Amount+$vak3Amount;

$res = $value / $amount;
$res = round($res, 0);
// Set appereance for re Calculating

$vak1 = " Fysica ";
$vak2 = " Chemie ";
$vak3 = " Biologie ";
$vak4Apperance = "hidden";
$vak5Apperance = "hidden";

}

}

// ------test  ------ ------ ------ ------ ------ ------ ------ ------ ------

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="css/homepage.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="icon"></div>
            <div class="content">
                <!-- logged in user information -->
                <?php  if (isset($_SESSION['username'])) : ?>
                    <h2>Welcome <?php echo $_SESSION['username']; ?></h2>
                    <h2> <a href="homepage.php?logout='1'">Logout</a> </h2>
                <?php endif ?>
            </div>
        </header>
        <section>
			<p></p>
            <form>
                    Richting <select name="Richting" style="width: 63px">
                    <option disabled>–––––––––––––––</option>
                    <option disabled>Tweede graad</option>
                    <option disabled>–––––––––––––––</option>
                    <option disabled> * 3de jaar * </option>
                    <option value="E3" > E </option>
                    <option value="EW3" > EW </option>
                    <option value="GL3" > GL </option>
                    <option value="GLW3" > GLW </option>
                    <option value="H3" > H </option>
                    <option value="HW3" > HW </option>
                    <option value="L3" > L </option>
                    <option value="LW3" > LW </option>
                    <option value="WE3" > WE </option>
                    <option disabled> * 4de jaar * </option>
                    <option value="E4" > E </option>
                    <option value="EW4" > EW </option>
                    <option value="GL4" > GL </option>
                    <option value="GLW4" > GLW </option>
                    <option value="H4" > H </option>
                    <option value="HW4" > HW </option>
                    <option value="L4" > L </option>
                    <option value="LW4" > LW </option>
                    <option value="WE4" > WE </option>
                    <option disabled>–––––––––––––––</option>
                    <option disabled>Derde graad</option>
                    <option disabled>–––––––––––––––</option>
                    <option disabled> * 5de jaar * </option>
                    <option value="ET5" > ET </option>
                    <option value="EW5" > EW </option>
                    <option value="GL5" > GL </option>
                    <option value="GW5" > GW </option>
                    <option value="H5" > H </option>
                    <option value="LT5" > LT </option>
                    <option value="LWE5" > LWE </option>
                    <option value="LW5" > LW </option>
                    <option value="TWE5" > TWE </option>
                    <option value="TW5" > TW </option>
                    <option value="WEW5" > WEW </option>
                    <option disabled> * 6de jaar * </option>
                    <option value="ET6" > ET </option>
                    <option value="EW6" > EW </option>
                    <option value="GL6" > GL </option>
                    <option value="GW6" > GW </option>
                    <option value="H6" > H </option>
                    <option value="LT6" > LT </option>
                    <option value="LWE6" > LWE </option>
                    <option value="LW6" > LW </option>
                    <option value="TWE6" > TWE </option>
                    <option value="TW6" > TW </option>
                    <option value="WEW6" > WEW </option>
                </select>
                <!--Input-->
                <input type="submit" name="selection" class="input" value="Select"/>
				<p></p>
        </form>

        <form>
            <table>
                <tr>
                    <td> Lichamelijke Opvoeding </td>
                    <td> <input name="lichamelijke_opvoeding" type="number" value="<?php echo $lo; ?>" /> </td>
                </tr>
                <tr>
                    <td> Geschiedenis </td>
                    <td> <input name="geschiedenis" type="number" value="<?php echo $ge; ?>" /> </td>
                </tr>
                <tr>
                    <td> Godsdienst </td>
                    <td> <input name="godsdienst" type="number" value="<?php echo $go; ?>" /> </td>
                </tr>
                <tr>
                    <td> Nederlands </td>
                    <td> <input name="nederlands" type="number" value="<?php echo $ne; ?>" /> </td>
                </tr>
                <tr>
                    <td> Frans </td>
                    <td> <input name="frans" type="number" value="<?php echo $fr; ?>" /> </td>
                </tr>
                <tr>
                    <td> Engels </td>
                    <td> <input name="engels" type="number" value="<?php echo $en; ?>" /> </td>
                </tr>
                <tr>
                    <td> Wiskunde </td>
                    <td> <input name="wiskunde" type="number" value="<?php echo $wi; ?>" /> </td>
                </tr>
                <tr>
                    <td> Aardrijkskunde </td>
                    <td> <input name="aardrijkskunde" type="number" value="<?php echo $aa; ?>" /> </td>
                </tr>
                <tr>
                    <td> Keuzevak </td>
                    <td> <input name="keuzevak" type="number" value="<?php echo $ke; ?>" /> </td>
                </tr>
                <tr>
                    <td> <?php echo $vak1; ?> </td>
                    <td> <input type="<?php echo $vak1Apperance; ?>" name="vak1" value="<?php echo $vak1value; ?>" /> </td>
                </tr>
                <tr>
                    <td> <?php echo $vak2; ?> </td>
                    <td> <input type="<?php echo $vak2Apperance; ?>" name="vak2" value="<?php echo $vak2value; ?>" /> </td>
                </tr>
                <tr>
                    <td> <?php echo $vak3; ?> </td>
                    <td> <input type="<?php echo $vak3Apperance; ?>" name="vak3" value="<?php echo $vak3value; ?>" /> </td>
                </tr>
                <tr>
                    <td> <?php echo $vak4; ?> </td>
                    <td> <input type="<?php echo $vak4Apperance; ?>" name="vak4" value="<?php echo $vak4value; ?>" /> </td>
                </tr>
                <tr>
                    <td> <?php echo $vak5; ?> </td>
                    <td> <input type="<?php echo $vak5Apperance; ?>" name="vak5" value="<?php echo $vak5value; ?>" /> </td>
                </tr>
            </table>
			<p></p>
            <input type="hidden" name="choise" value="<?php echo $Richting; ?>" />

            <!--Input--> <input type="submit" name="calculate" class="input" value="Calculate"/>

            <div class="output"><?php echo $res;?></div>
        </form>
        </section>
    </body>
</html>

