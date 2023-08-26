<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $address = $_POST["address"];
    $state = $_POST["state"];
    $zipcode = $_POST["zipcode"];
    $byline = $_POST["byline"];
    $phone = $_POST["phone"];
    $image = $_FILES["image"]["name"];
    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $image_name = $_FILES["image"]["name"];
        $image_tmp = $_FILES["image"]["tmp_name"]; 
        $image_size = $_FILES["image"]["size"];    
        $image_type = $_FILES["image"]["type"];    
        move_uploaded_file($image_tmp, "../images/" . $image_name);
    }
    $avail = $_POST["avail"];
    $service = $_POST["service"];
    $animal = $_POST["animal"];

    echo "Name: $name<br>";
    echo "Address: $address<br>";
    echo "State: $state<br>";
    echo "Zipcode: $zipcode<br>";
    echo "Tag Line: $byline<br>";
    echo "Phone: $phone<br>";
    echo "Image: $image<br>";
    echo "Availability: " . nl2br($avail) . "<br>";
    echo "Service: $service<br>";
    echo "Animal: $animal<br>";
}
?>
