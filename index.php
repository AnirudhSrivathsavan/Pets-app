<?php 
require_once('code\config.php'); 
$folderPath = '.\images';

if (!is_dir($folderPath)) {
    mkdir($folderPath, 0777, true);
}

?>

<!-- https://localhost/petsapp/Pets-app/ -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project Ui</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="code/formvalidator.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#search').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting

        // Get user input values
        var zipcode = $('#zipcode').val();
        var services = $('#services').val();
        var animalCategory = $('#animal-category').val();

        // Send AJAX request to a PHP script for processing
        $.ajax({
            type: 'POST',
            url: 'code/process_search.php', // Replace with your PHP script URL
            data: {
                zipcode: zipcode,
                services: services,
                animalCategory: animalCategory
            },
            success: function(response) {
                // Display the results in the result-entry div
                $('.result-entry').html(response);
            }
        });
    });
});
</script>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header>
        <h1 class="header-1">PET WEBSITE</h1>
    </header>
    <hr>
    <br>


    <div class="fluid-container">
        <div class="row">
            <div class="col slidebutton">
                <h1>Donate now!</h1>
            </div>
            <div class="col-sm-8 col-md-8 col-lg-8">
                <div class="slider">
                    <input type="radio" name="toggle" id="btn-1" checked>
                    <input type="radio" name="toggle" id="btn-2">

                    <div class="slider-controls">
                        <label for="btn-1"></label>
                        <label for="btn-2"></label>
                    </div>

                    <ul class="slides">
                        <li class="slide">
                            <div class="slide-content">
                                <h2 class="slide-title">Be the change!</h2>
                                <p class="slide-text">"Helping Paws, Changing Lives: Your Generous Donation Powers Our Animal Mission!"</p>
                                <a href="textpage/donations.html" class="slide-link">Donate now</a>
                            </div>
                            <p class="slide-image">
                                <img src="data:image/jpeg;base64,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"
                                    alt="stuff">
                            </p>
                        </li>
                        <li class="slide">
                            <div class="slide-content">
                                <h2 class="slide-title">Is your pet insured???</h2>
                                <p class="slide-text">Shield your beloved companions with comprehensive pet insurance – a safety net for unexpected veterinary expenses and their well-being.</p>
                                <a href="textpage/insurance.html" class="slide-link">Learn more</a>
                            </div>
                            <p class="slide-image">
                                <img src="data:image/jpeg;base64,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"
                                    alt="stuff">
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col slidebutton">
                <h1>Get pet insurance now!</h1>
            </div>
        </div>
    </div>

    <div class="fluid-container body">
        <div class="row">
            <div class="col">
                <h1>Search for services</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-container">
                    <form id="search">
                        <div class="form-row">
                            <div class="col">
                                <label for="zipcode">Zipcode:</label>
                                <input type="text" id="zipcode" name="zipcode" placeholder="Enter zipcode" required pattern="\d{5}">
                                <button type="button" class="btn btn-secondary error-message" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Right popover" style="display:none;" id="zipcode-error">Invalid input</button>
                            </div>
                            <div class="col">
                                <label for="services">Services:</label>
                                <select id="services" name="services" required>
                            <option value="" disabled selected>Select a service</option>
                            <option value="1">Vet</option>
                            <option value="2">Breeder</option>
                            <option value="3">Rescue</option>
                            <option value="4">Adoption</option>
                            <option value="5">Groomer</option>
                            <option value="6">Foster</option>
                            <option value="7">Animal Control</option>
                        </select>
                            </div>
                            <div class="col">
                                <label for="animal-category">Animal Category:</label>
                                <select id="animal-category" name="animal-category" required>
                          <option value="" disabled selected>Select an animal category</option>
                          <option value="1">Large Animals</option>
                          <option value="2">Small Animals</option>
                          <option value="3">Dogs</option>
                          <option value="4">Cats</option>
                          <option value="5">Avions</option>
                          <option value="6">Reptiles</option>
                          <option value="7">Exotic/Speciality</option>
                      </select>
                            </div>
                            <div class="col">
                                <input type="submit" value="Submit" id="submit-button" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="result-div">
            <div class="result-entry">
                <!-- Dynamic entry section -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="testpage/addstory.html">Send your story to us</a>
        </div>
        <div class="col">
            <a href="addservice.php">Add your service</a>
        </div>
        <div class="col">
            <a href="testpage/rate.html">Rate your experience</a>
        </div>
        <div class="col">
            <a href="testpage/advertise.html">Advertize with us</a>
        </div>
    </div>
    <div class="qr" style="align-items: center;">
        <div class="row" style="font-size: xx-small; ">
            <div class="col qrtext">
                GET OUR PETS' APP</div>
            <div class="col">
                <img src="assets/qrcode.png" alt="QR unavailable" width="100" height="100">
            </div>
        </div>

</html>

