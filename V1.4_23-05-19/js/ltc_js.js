/* 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
22/05/19
V1.4
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

function checkUserPrivilege($admin)
{
	switch($admin)
		case 2:
			adminUser();
			break;
		case 0:
			standardUser();
			break;
		default:
			guestUser();
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

function guestUser()
{
	document.getElementsByClassName("guest")[0].style.display = "block";
}

function standardUser()
{
	document.getElementsByClassName("standard")[0].style.display = "block";
}

function adminUser()
{
	document.getElementsByClassName("standard")[0].style.display = "block";
	document.getElementsByClassName("admin")[0].style.display = "block";
}




