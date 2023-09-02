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
if($searchResults->num_rows==0)
    echo '<script>alert("No entries found")</script>';
else{
    echo '<h1>RESULTS</h1>';
while ($result = $searchResults->fetch_assoc()) {
echo '<hr><div class="row indresults">
        <div class="row"><h4 style="text-transform: uppercase;">' . $result['Name'] . '</h4></div>
        <div class="row">
            <div class="col-8">
                <div class="row"><i>' . $result['Byline'] . '</i></div>
                <div class="row"><div class="col-1"><img src="assets\telephone.svg" height = "20"></div><div class="col">' . $result['Phone'] . '</div></div>
                <div class="row"><div class="col-1"><img src="assets\geo-fill.svg" height = "20"></div><div class="col">' . nl2br($result['Address']) . '</div></div>
                <div class="row"><div class="col-1"></div><div class="col">' . $result['State'] . ', ' . $result['Zip code'] . '</div></div>
                <div class="row"><div class="col-1"><img src="assets\clock-fill.svg" height = "20"></div><div class="col">' . nl2br($result['Avail']) . '</div></div>
            </div>
            <div class="col">
                <img src="'.$result['imgpath'].'" alt="" height="180" width="180" style="border-radius:30%;">
            </div></div>
        </div>';
}}
?>
