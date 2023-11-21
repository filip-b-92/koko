<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koko Menu</title>
    <style>
        body {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding:none; 
            margin: 0;

        }
        img {
            max-width: 100%;
            height: auto;
            margin: 0;
        }
    </style>
</head>
<body>
    <?php
    $imageFolder = './koko/'; // Replace with the path to your image folder
    $imageCount = 28; // Change this to the number of images you have

    for ($i = 1; $i <= $imageCount; $i++) {
        $imageName = "$i.jpg";
        $imagePath = $imageFolder . $imageName;

        // Check if the image file exists before displaying it
        if (file_exists($imagePath)) {
            echo "<img src=\"$imagePath\" alt=\"$imageName\">";
        }
    }
    ?>
</body>
</html>
