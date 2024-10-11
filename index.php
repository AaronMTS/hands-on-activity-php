<?php
    $firstName = "Aaron";
    $lastName = "Sayson";
    $age = 21;
    $address = "City";
    $contact = 09123456789;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP to HTML</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet">
        <style>
        * {
            font-family: "Raleway", "Inter";
        }

        html {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: grid;
            place-items: center;
            margin: 0;
            height: 100%;
            width: 100%;
        }

        .container {
            border-radius: 20px;
            height: fit-content;
            width: 400px;
            padding: 26px;
            background-color: #fff;
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
    </style>
    </head>
    <body>
        <div class="container">
            <h2>Details:</h2>
            <p><strong>Name: </strong> <?= $firstName . ' ' . $lastName ?></p>
            <p><strong>Age: </strong> <?= $age ?></p>
            <p><strong>Address: </strong> <?= $address ?></p>
            <p><strong>Contact: </strong> <?= $contact ?></p>
        </div>
    </body>
</html>