<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <titl>Images</titl>
    <script charset='UTF-8' src="js/functions.js"></script>
</head>
<body>
<p>Click on an image to view it in a seperate window.</p>
<ul>
<?php # Script 11.6 - images.php
    // This script list the imaes in the uploads directory.
    // This verison how shows each image's file size and uploaded date and time.

    // Set the  default  timezone:
    date_default_timezone_get('Amercian/Chicago');
    
    $dir = 'images/'; // Define the directory to view
    $files = scandir($dir); // Read all the the images into an array

    // Dispaly each image caption as a link to the JavaScript function: 
    foreach ($files as $image){
        if (substr($image, 0, 1) != '.') { // Ignore anything starting with a period 

            // Get the image's size in pixels:
            $image_size = getimagesize("$dir/$image");

            // Calculate the image's  size in kilobytes:
            $file_size = round( (filesize("$dir/$image")) / 1024) . "kb";

            // Determine the image's upload date and time:
            $image_date = date("F d, Y H:i:s", filemtime("$dir/$image"));

            // Make the image's URL-safe:
            $image_name = urlencode($image);

            // Print information
            echo "<li><a href=\"javascript:create_window('$image_name',$image_size[0],
            $image_size[1])\">$image</a> $file_size ($image_date)</li>\n";

        } // End of the IF. 
    } // End of the foreach loop. 

?>
</ul>
</body>
</html>