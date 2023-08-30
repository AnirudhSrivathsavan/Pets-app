<?php
require_once('config.php'); 
$zipcode = $_POST['zipcode'];
$service = $_POST['services'];
$animalCategory = $_POST['animalCategory'];

$query = "SELECT * FROM placedata WHERE `Zip code` = ? AND `Service` = ? AND `Animal` = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("isi", $zipcode, $service, $animalCategory);
$stmt->execute();
$searchResults = $stmt->get_result();
echo $searchResults->num_rows;
while ($result = $searchResults->fetch_assoc()) {
    echo '<div class="row">';
    echo '<div class="col">';
    echo '<div class="row"><h4>' . $result['Name'] . '</h4></div>';
    echo '<div class="row">' . $result['Byline'] . '</div>';
    echo '<div class="row">' . $result['Phone'] . '</div>';
    echo '<div class="row">' . $result['Address'] . '</div>';
    echo '<div class="row">' . $result['State'] . ', ' . $result['Zip code'] . '</div>';
    echo '</div>';
    echo '<div class="col">';
    echo '<img src="'.$result['imgpath'].'" alt="" height="150" width="150">';
    echo '</div>';
    echo '</div>';
    echo '<hr>';
}
?>
