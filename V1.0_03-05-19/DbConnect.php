<?php
DEFINE ('DB_USER', 'IN09001885');
DEFINE ('DB_PASSWORD','09001885');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'IN09001885');
@$DB = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
if (mysqli_connect_errno())
{
	echo 'Cannot connect to the database: '. mysqli_connect_errno();

}

?>