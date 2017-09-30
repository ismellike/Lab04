function onClick()
{
	document.getElementById("form").reset();
}

function check()
{
	var pufferCount = document.getElementById("pufferCount");
	var goldfishCount = document.getElementById("goldfishCount");
	var angelfishCount = document.getElementById("angelfishCount");
	var user = document.getElementById("user");
	var pass = document.getElementById("pass");
	
	if(pufferCount.value=="" || goldfishCount.value =="" || angelfishCount.value=="")
	{
		alert("Enter a value for all types of fish.");
		return false;
	}
	if(!radioChecked())
	{
		alert("Select a shipping option.");
		return false;
	}
	//check for @domain.com for user
	return true;
}

function radioChecked()
{
	var radioBoxes = document.getElementsByName("shipping");
	for(var i = 0; i < radioBoxes.length; i++)
	{
		if(radioBoxes[i].checked)
			return true;
	}
	return false;
}