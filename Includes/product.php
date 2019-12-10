<div id='achtergrond' class='row'>
<?php 
require_once("./connect_db.php");

$sql = "SELECT * FROM auto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<form action='index.php?content=product' method='post' id='product' class='card' class='col' style='width: 18rem;'>
        <img src='./img/" . $row["Naam"] . "/1.jpg' class='card-img-top' alt='afbeelding auto'>
        <div class='card-body'>
            <h5 class='card-title'>" . $row["Naam"] . "</h5>
            <p class='card-text'> 
                                <li>Bouwjaar: " . $row["bouwjaar"] . "</li>
                                <li>Brandstof: " . $row["brandstof"] . " </li>
                                <li>Max snelheid: " . $row["max snelheid"] . " km/h</li>
                                <li>personen: " . $row["personen"] . " </li>
                                
            <button type='submit' class='btn btn-primary btn-block btn-lg'>Bekijk Product</button>
        </div></form>";
    }
} else {
    echo "Geen producten gevonden";
}
?>
</div>