// Script 11.3 - function.js

// Make a pup-up window function:
function create_window(image, width, height){

    // Add some pizes to the width and height: 
    width = width + 10;
    height = height + 10;

    // If the  window is alrady open,
    // resize it to the new dimension: 
    if (window.popup &&  !window.popup.closed){
         window.popup.resizeTO(width, height);
    }

    // Set the window properties: 
    var specs = "location=no,scrollbars=no, toolbar=no, resizable=yes, left=0, top=0, width=" + width + ", height=" + height;

    // Set the URL:
    var url ="show_image.php?image=" +image;

    // Create the pop-up window: 
    popup = window.open(url, "ImageWindow", specs);
    popup.focus();


} // End of function 