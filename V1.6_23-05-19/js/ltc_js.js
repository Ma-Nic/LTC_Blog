/* 
Matt Nicol
09001885
DWFMPU - 'The Local Theater Company'
22/05/19
V1.5
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
	window.alert($Admin);
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
	document.getElementById("guest").style.display = "block";
	
/* 	var x = document.getElementsByClassName("guest");
	var i;
	for (i = 0; i < x.length; i++) {
	x[i].style.display = "block"; */
}

function standardUser()
{
	document.getElementById("standard").style.display = "block";
	
/* 	var x = document.getElementsByClassName("standard");
	var i;
	for (i = 0; i < x.length; i++) {
	x[i].style.display = "block"; */
}

function adminUser()
{
	document.getElementById("admin").style.display = "block";	
	
/* 	var x = document.getElementsByClassName("standard");
	var i;
	for (i = 0; i < x.length; i++) {
	x[i].style.display = "block";
	
	var y = document.getElementsByClassName("admin");
	var j;
	for (j = 0; j < y.length; j++) {
	y[j].style.display = "block"; */
}




