/* 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
23/05/19
V1.6
*/



function updateName($newName)
{
	
	
}

function updateEmail($newEmail)
{
	
	
}

function updatePassword($newPwd)
{
	
	
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

/* 	standard[0].style.display = "block";
	standard[1].style.display = "block";
	standard[2].style.display = "block";
 */	
}

function adminUser()
{
/* 	document.getElementById("admin-user").style.display = "block";	
 */
	var admin = document.getElementsByClassName("admin");
	
	for(var i=0; i < admin.length; i++)
	{
	admin[i].style.display = "block";
	}
	
	/* admin[0].style.display = "block";
	admin[1].style.display = "block";
  */
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






