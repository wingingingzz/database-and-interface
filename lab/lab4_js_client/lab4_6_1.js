function fruitPrice()
{
    var total = 0;
    var apple = document.getElementById("apple").value;
    var orange = document.getElementById("orange").value;
    var banana = document.getElementById("banana").value;

    if(apple == "" || orange == "" || banana == "")
    {
        alert("Empty");
        return false;
    }

    var limit = new Object();
    limit.max = 99;
    limit.min = 0;

    if((apple * 1.00) < limit.min || (apple * 1.00) > limit.max || (orange * 1.00) < limit.min || (orange * 1.00) > limit.max || (banana * 1.00) < limit.min || (banana * 1.00) > limit.max)
    {
        alert("The input is invalid.");
        return false;
    }
    
    total = apple * 0.59 + orange * 0.49 + banana * 0.39;
    
    alert("The total cost is $" + total);

    return false;
}