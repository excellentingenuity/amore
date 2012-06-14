<?php

###########################
# FreeForm v1.0 - http://www.polyspaston.com #
###########################

## SET THESE TWO VALUES ##

$email_to = "info@eventswithamore.com";
$email_from = "info@eventswithamore.com";

## DON'T EDIT PAST THIS POINT ##

if($_POST['field_required']) {
$required = explode(",", $field_required); 
}

$emailcontents = array();
while (list($key, $val) = @each($HTTP_POST_VARS)) { 
$val = addslashes($val); $GLOBALS[$key] = $val; 
if(!strstr($key,"field_")) {
if(count($required)) { if (in_array($key, $required) and !$val) { error("$key"); }}
array_push($emailcontents,"$key:\t$val");
}
}

if (!$_POST['$field_you_subject']) { $field_you_subject = "A Message From EventsWithAmore.com"; }
if (!$_POST['$field_them_subject']) { $field_them_subject = "Thank You"; }

$emailcontents = implode("\n",$emailcontents);

$eheader= "to_you_header.txt"; 
$ehandle = fopen ($eheader, "r"); 
$head = fread ($ehandle, filesize ($eheader));
fclose ($ehandle);

$efooter= "to_you_footer.txt"; 
$ehandle = fopen ($efooter, "r"); 
$foot = fread ($ehandle, filesize ($efooter));
fclose ($ehandle);

$emailcontents = $head . "\n" . $emailcontents . "\n\n" . $foot;

if ($email and $name) {
mail("$email_to","$field_you_subject","$emailcontents","From: $name <$email>");
} elseif($email) {
mail("$email_to","$field_you_subject","$emailcontents","From: $email");
} else {
mail("$email_to","$field_you_subject","$emailcontents","From: $email_from");
}

$thanks= "thankyou.txt"; 
$thandle = fopen ($thanks, "r"); 
$thankyou = fread ($thandle, filesize ($thanks));
$thankyou = str_replace(XnameX, $name, $thankyou);
fclose ($thandle);

if($email and $field_no_thankyou != "1") {
mail("$email","$field_them_subject","$thankyou","From: $email_from");
}

$filename= "success.html"; 
$handle = fopen ($filename, "r"); 
$contents = fread ($handle, filesize ($filename));
$contents = str_replace(XmessageX, $field_thankyou_message, $contents);
print $contents;
fclose ($handle);

function error($field) {
$filename= "error.html"; 
$handle = fopen ($filename, "r"); 
$error = fread ($handle, filesize ($filename));
$error = str_replace(XfieldX, $field, $error);
print $error;
fclose ($handle);
exit();
}

?>
