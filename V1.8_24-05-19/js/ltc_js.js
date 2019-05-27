/* 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
23/05/19
V1.7
*/


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


function editBlog($blogID)
{

	
}

function showComments($blogID)
{

	
}

function leaveComment()
{
	
	
}






