function fruitPrice()
{
    var total = 0;
    var apple = document.getElementById("apple").value;
    var orange = document.getElementById("orange").value;
    var banana = document.getElementById("banana").value;

    if(apple == "" || orange == "" || banana == "")
    {
        alert("The input should not be empty.");
        return false;
    }

    if((apple * 1.00) < 0 || (apple * 1.00) > 99 || (orange * 1.00) < 0 || (orange * 1.00) > 99 || (banana * 1.00) < 0 || (banana * 1.00) > 99)
    {
        alert("The input is invalid.");
        return false;
    }

    total = apple * 0.59 + orange * 0.49 + banana * 0.39;
    
    alert("The total cost is $" + total);

    return false;
}