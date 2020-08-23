
<!----------------------------------- Example #3 ----------------------------------->
/*
function myButtonHandler()
{
	alert("You clicked my button!");
}
*/


<!----------------------------------- Example #4 ----------------------------------->
/*
function myButtonHandler()
{
	alert("You clicked my button!");
}

document.getElementById("myButton").onclick = myButtonHandler;
*/


<!----------------------------------- Example #6 ----------------------------------->
/*
function load_greeting()
{
	alert("You are visiting my homepage \n" +
		"WELCOME!!!");
}
*/


<!----------------------------------- Example #7 ----------------------------------->
/*
function ageChoice(age)
{
	switch(age)
	{
		case 1:
			alert("You are one year-old!");
			break;
		case 2:
			alert("You are two year-old!");
			break;
		default:
			alert("Error in JavaScript function ageChoice");
			break;
	}
}
*/


<!----------------------------------- Example #8 ----------------------------------->
/*
function ageChoice()
{
	var dom = document.getElementById("myForm");

	for(var index = 0; index < dom.length; index++)
	{
		if(dom.rdoAge[index].checked)
		{
			age = dom.rdoAge[index].value;
			break;
		}
	}


	switch(age)
	{
		case "1":
			alert("You are one year-old!");
			break;
		case "2":
			alert("You are two year-old!");
			break;
		default:
			alert("Error in JavaScript function ageChoice " + age);
			break;
	}
}
*/


<!----------------------------------- Example #9 ----------------------------------->

function ageChoice()
{
	var dom = document.getElementById("myForm");

	for(var index = 0; index < dom.length; index++)
	{
		if(dom.rdoAge[index].checked)
		{
			age = dom.rdoAge[index].value;
			break;
		}
	}


	switch(age)
	{
		case "1":
			alert("You are one year-old!");
			break;
		case "2":
			alert("You are two year-old!");
			break;
		default:
			alert("Error in JavaScript function ageChoice " + age);
			break;
	}
}



<!----------------------------------- Example #10 ----------------------------------->
/*
function ageChoice()
{
	var dom = document.getElementById("myForm");

	for(var index = 0; index < dom.length; index++)
	{
		if(dom.rdoAge[index].checked)
		{
			age = dom.rdoAge[index].value;
			break;
		}
	}


	switch(age)
	{
		case "1":
			alert("You are one year-old!");
			break;
		case "2":
			alert("You are two year-old!");
			break;
		default:
			alert("Error in JavaScript function ageChoice " + age);
			break;
	}
}
*/


<!----------------------------------- Example #11 ----------------------------------->
/*
function computeCost()
{
	var first = document.getElementById("first").value;
	var second = document.getElementById("second").value;

	document.getElementById("total").value = 
	totalCost = (1.0 * first) + (1.0 * second);
}
*/


<!----------------------------------- Example #12 ----------------------------------->
/*
function chkMessage()
{
	var first = document.getElementById("first");
	var second = document.getElementById("second");

	if(first.value == "")
	{
		alert("First message is empty");
		return false;
	}

	if(first.value != second.value)
	{
		alert("The two messages are not the same");
		return false;
	}
	else
	{
		return true;
	}
	
}
*/


<!----------------------------------- Example #13 ----------------------------------->
/* alphabet only /^[A-Za-z]+$/ */
/* one capital one small [A-Z][a-z]+$/ */
/* letter and number /^[0-9a-zA-Z]+$/ */
/* /^[A-Z][a-z]+, ?[A-Z][a-z]+, ?[A-Z]\.?$/ */

/*
function chkName()
{
	var myName = document.getElementById("name");
	var pos = myName.value.search(/^[A-Z][a-z]+, ?[A-Z][a-z]+, ?[A-Z]\.?$/);

	if(pos != 0)
	{
		alert("The name you entered (" + pos + " : " + myName.value +
			") is not in the correct form. \n" +
			"The correct form is: " +
			"Last name, First name, Middle name \n" +
			"Please fix");
		return false;
	}
	else
	{
		return true;
	}

}

function chkNumber()
{
	var myNumber = document.getElementById("number");

	var pos = myNumber.value.search(/^\d{3}-\d{3}-\d{4}$/);

	if(pos != 0)
	{
		alert("The number you entered (" + myNumber.value +
			") is not in the correct form. \n" +
			"The correct form is: ddd-ddd-dddd \n" +
			"Please fix");
		return false;
	}
	else
	{
		return true;
	}

}
*/
