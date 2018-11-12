<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>User Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<?php
    require_once('../connector.php');
    $firstname = $_POST["firstname"];
    $canUpgradePremium = true; 
    $equipmentPremium = array("Premium Laptop 1", "Premium Laptop 2");
    $equipmentStandard = array("Standard Laptop 1", "Standard Laptop 2");
    //here id set and object variable with key value pairs with the users current equipment specs.
    //here id set an object variable with key value pairs of details for standard laptops and premium laptops.
    echo "Hello, " . $firstname . ". Welcome to your User Portal";
    echo "View Your Current Equipment Here!";
    $query = "SELECT modelId, modelName, modelSpecs, canUpgradePremium, FROM currentEquipment";
    //The line above would pull in data from a currentEquipment table that would be associated to the logged in User
    $response = @mysqli_query($dbc, $query);

    if($response){
        echo '<table id="1">
        <tr><td><b>model ID</b></td>
            <td><b>model Name</b></td>
            <td><b>model Specs</b></td>
            <td><b>Upgrade Eligible?</b></td>
        </tr>';

        while($row = fetchArray($response)){
            echo '<tr><td>' .
            $row['modelID'] . '</td><td>' . 
            $row['modelName'] . '</td><td>' . 
            $row['model Specs'] . '</td><td>' . 
            $row['canUpgrade'] . '</td><td>'; 
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo "Couldn't issue db query";
        echo mysqli_error($dbc);
    }
    mysqli_close($dbc)

?>


</body>
</html>