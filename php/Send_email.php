<?php 
if ($_POST["email"]<>'') { 
  $ToEmail = $_REQUEST['email']; 
  $EmailSubject = 'Site contact form '; 
  $mailheader = "From: Website online form<test@ttt.com>\r\n"; 
  $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
  $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
  $MESSAGE_BODY = ""; 
  $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
  $MESSAGE_BODY .= ""; 
  mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 
<script type="text/javascript">
	window.alert('Email was sent!!')
    window.location.href='http://localhost/ComingSoon-Hot-presta/';
</script>
<?php 
} else { 
?>
<script type="text/javascript">
	window.alert('Email message not sent!!')
    window.location.href='http://localhost/ComingSoon-Hot-presta/';
</script>
<?php 
}; 
?>