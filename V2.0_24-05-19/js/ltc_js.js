/* 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
24/05/19
V2.0
*/


/* Check user privilege */
function checkUserPrivilege($Admin)
{
	switch($Admin) 
	{
		case 2: 
			adminUser();
			standardUser();
			break;
		case 0: 
			standardUser();
			break;
		default:
			guestUser();
			break;
	}
}


/* Display content based on user privilege */
function guestUser()
{
	var guest = document.getElementsByClassName("guest");
	
	for(var x=0; x < guest.length; x++)
	{
	guest[x].style.display = "block";
	}
	
}

function standardUser()
{
	var standard = document.getElementsByClassName("standard");
	
	for(var x=0; x < standard.length; x++)
	{
	standard[x].style.display = "block";
	}
	
}

function adminUser()
{
	var admin = document.getElementsByClassName("admin");
	
	for(var i=0; i < admin.length; i++)
	{
	admin[i].style.display = "block";
	}
	
}


/* Update User Details controls */
function changeName()
{
	document.getElementsByClassName("updateName")[0].style.display = "block";
	
}

function changeEmail()
{
	document.getElementsByClassName("updateEmail")[0].style.display = "block";
		
}

function changePassword()
{
	document.getElementsByClassName("updatePassword")[0].style.display = "block";	
	
}


/* Validate new and updated passwords */
function createPassword()
{
	var newPassword = document.getElementById("createPassword"), confirm_newPassword = document.getElementById("confirmCreatePwd");
	validatePassword(newPassword, confirm_newPassword);	
}

function updatePassword()
{
	var updPassword = document.getElementById("updatePassword"), confirm_updPassword = document.getElementById("confirmPassword");
	validatePassword(updPassword, confirm_updPassword);
}

function validatePassword(password, confirm_password)
{
		if(password.value != confirm_password.value) 
	{
		confirm_password.setCustomValidity("Passwords Don't Match");
	} 
	else 
	{
		confirm_password.setCustomValidity('');
	}
}


/* Blog controls */
function createBlog()
{
	document.getElementsByClassName("newBlog")[0].style.display = "block";	

}

function editBlog($blogID)
{

	
}

function showComments($blogID)
{

	
}

function leaveComment()
{
	
	
}






