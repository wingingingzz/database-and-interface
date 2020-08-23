
function colorChoice(color) {
    var dom = document.getElementById("myForm");
    // Determine which button was pressed
    for(var index = 0; index < dom.colorButton.length; index++)
    {
        if(dom.colorButton[index].checked) // access array of radio buttons by their same name "color"
        {
            color = dom.colorButton[index].value;
            break;
        }
    }

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
