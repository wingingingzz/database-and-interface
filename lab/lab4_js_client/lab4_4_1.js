function fruitPrice()
{
    var total = 0;
    var apple = document.getElementById("apple").value;
    var orange = document.getElementById("orange").value;
    var banana = document.getElementById("banana").value;

    total = apple * 0.59 + orange * 0.49 + banana * 0.39;
    
    alert("The total cost is $" + total);

    return false;
}