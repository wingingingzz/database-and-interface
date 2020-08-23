function chkName(event) {
    // Get the target node of the event
    var name = event.currentTarget;
    // Test the format of the input name
    // Allow the spaces after the commas to be optional
    // Allow the period after the initial to be optional
    var pos = name.value.search(/^[A-Z][a-z]+, ?[A-Z][a-z]+, ?[A-Z][a-z]+$/);
    if (pos != 0) {
        alert("The name you entered (" + name.value +
        ") is not in the correct form. \n" +
        "The correct form is: " +
        "last-name, first-name, middle-initial \n" +
        "Please go back and fix your name");
    }
}

function chkAge(event) {
    var age = event.currentTarget;
    var pos = age.value.search(/^\d+$/);
    if (pos != 0 || (age.value * 1.00) <= 17){
        alert("The age you entered (" + age.value +
        ") is not in the correct form. \n");
    }
}

function chkWeight(event) {
    var weight = event.currentTarget;
    var pos = weight.value.search(/^\d+$/);
    if (pos != 0 || (weight.value * 1.00) < 80 || (weight.value * 1.00) > 300){
        alert("The weight you entered (" + weight.value +
        ") is not in the correct form. \n");
    }
}