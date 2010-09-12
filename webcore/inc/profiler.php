<?php
// My Profile Information

echo "My User ID: <b>".$_SESSION['SESS_ID']."<br></b>";
echo "Created on: <b>".$_SESSION['SESS_CREATIONDATE']."<br></b>";
echo "My Email: <b>".$_SESSION['SESS_EMAIL']."<br></b>";
echo "My User Name: <b>".$_SESSION['SESS_USER_NAME']."<br></b>";
echo "My Max Chars: <b>".$_SESSION['SESS_ALLOWED_CHARACTERS']."<br></b>";
echo "My Gen Flags: <b>".$_SESSION['SESS_FLAGS']."<br></b>";
echo "My Acnt Flags: <b>".$_SESSION['SESS_ACCOUNTFLAGS']."<br></b>";
echo "My Expansions: <b>".$_SESSION['SESS_EXPANSIONS']."<br></b>";
echo "My GM LvL: <b>".$_SESSION['SESS_GM']."<br></b>";
echo "My First Name: <b>".$_SESSION['SESS_FIRST_NAME']."<br></b>";
echo "My Last Name: <b>".$_SESSION['SESS_LAST_NAME']."<br></b>";

?>