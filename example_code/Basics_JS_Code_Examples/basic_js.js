/* multiple lines comment in JavaScript */
// one line comment in JavaScript

/* ----------------------------------- Example #1 ----------------------------------- */
/*
document.write("Hello");
*/


/* ----------------------------------- Example #2 ----------------------------------- */
/*
var result = 42;
document.write("The result is: ", result, "<br />");
*/

/* ----------------------------------- Example #3 ----------------------------------- */
/*
var result,
    pi = 3.14,
    prime = 7,
    university = "UNNC",
    nothing = null,
    isRight = true;
document.write("The values of vars are: ", result, " ", pi, " ", prime, " ", university, " ", nothing, " ", isRight, " ", "<br />");

document.write("(", prime, "++) * 3 = ",(prime++) * 3, " ", "<br />");
document.write("(++", prime, ") * 3 = ",(++prime) * 3, " ", "<br />");
*/


/* ----------------------------------- Example #4 ----------------------------------- */
/*
var a = 2, b = 4, c = 0, d = 0;
c = 3 + a * b;
d = b / a / 2;
document.write("c: ", c, " d:", d, " ", "<br />");
*/


/* ----------------------------------- Example #5 ----------------------------------- */
/*
var first = "Freddie", second = "Freeloader";
var third = first + second;

var one = "1", two = "2";
var three = one + two; 

var seven = 7, strThree = "3";
var result = seven * strThree; // number * string gets number
var strResult = seven + strThree; // number + string gets string

var decimal = 1.0;
var test = (decimal * one) + (decimal * two);

var empty = "";
var strResult2 = seven + empty + decimal; // number + string gets string

document.write(third, " ", three, " ", result, " ", strResult, " ", test, " ", strResult2, " ", "<br />");
*/


/* ----------------------------------- Example #6 ----------------------------------- */
/*
var str_value = String(7);
var num = 6;

document.write((str_value + num), "<br />");

str_value = num.toString();
num = Number("8"); 

document.write((str_value + num), "<br />");

var num2 = str_value - 0;

document.write((num2 + num), "<br />");

var str_binary = num.toString(2);

document.write(str_binary, "<br />");
*/


/* ----------------------------------- Example #7 ----------------------------------- */
/*
var result = 42;
alert("The result is: " + result + "\n");

var answer = confirm("Do you want to continue?");

var name = prompt("What is your name?", "");

document.write("Answer is ", answer, ", Name is: ", name, "<br />");
*/


/* ----------------------------------- Example #8 ----------------------------------- */
/*
var three = "3";

document.write(three === 3, ", ", three == 3, "<br />");
*/


/* ----------------------------------- Example #9 ----------------------------------- */
/*
var bordersize;
var err = 0;
bordersize = prompt("Select a table border size: " +
		"0 (no border), " +
		"1 (1 pixel border), " +
		"4 (4 pixel border), " +
		"8 (8 pixel border), ");

switch (bordersize) 
{
	case "0": 
		document.write("<table>");
		break;
	case "1": 
		document.write("<table border = '1'>");
		break;
	case "4": 
		document.write("<table border = '4'>");
		break;
	case "8": 
		document.write("<table border = '8'>");
		break;
	default: 
		{
			document.write("Error - invalid choice: ",
			bordersize, "<br />");
			err = 1;
		}
}

if(err == 0)
{
	document.write("<tr>",
				"<td> 1 </td>",
				"<td> 2 </td>",
		       "</tr>",
			"<tr>",
				"<td> 3 </td>",
				"<td> 4 </td>",
			"</tr>",
			"</table>");
}
*/


/* ----------------------------------- Example #10 ----------------------------------- */
/*
var text = "";
var i = 0;
do {
  text += "The number is " + i + " <br />";
  i++;
}
while (i < 5);
document.write(text, " <br />");
*/


/* ----------------------------------- Example #11 ----------------------------------- */
/*
var car = new Object();
car.make = "Ford";
car.model = "Fusion";

var cup = {colour: "Green", material: "Glass"};

document.write(car.make, ", ", car.model, " <br />");
document.write(cup.colour, ", ", cup.material, " <br />");

// nested object
car.engine = new Object();
car.engine.config = "V6";
car.engine.hp = "265";

// two ways of accessing property values in object
document.write(car.make, ", ", car.model, ", ", car.engine.config, ", ", car.engine.hp, " <br />");
document.write(car["make"], ", ", car["model"], ", ", car["engine"]["config"], ", ", car["engine"]["hp"], " <br />");

// using for-in loop
for(var i in cup)
{
	document.write("Name: ", i, "; Value: ", cup[i], "<br />");
}

// array 
var stack = new Array(1, 2, "three", "four");
for(var i in stack)
{
	document.write("No: ", i, "; Value: ", stack[i], "<br />");
}

// array length
document.write(stack.length, "<br />");

// accessing array out of bound
document.write(stack[5], "<br />");
*/
