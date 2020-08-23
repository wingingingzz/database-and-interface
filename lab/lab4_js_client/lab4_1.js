// lab4_1.js
// An example of the use of the click event with radio buttons,
// registering the event handler by assignment to the button
// attributes
// The event handler for a radio button collection
function colorChoice (color) {
    // Produce an alert message about the chosen color
    switch (color) {
        case "red":
            alert("Your favorite color is Red!");
            break;
        case "blue":
            alert("Your favorite color is Blue!");
            break;
        case "green":
            alert("Your favorite color is Green!");
            break;
        case "yellow":
            alert("Your favorite color is Yellow!");
            break;
        case "orange":
            alert("Your favorite color is Orange!");
            break;
        default:
            alert("Error in JavaScript function planeChoice");
            break;
    }
}