<?	$hDatabaseConnection = mysql_connect("localhost", "root", "123456");	mysql_select_db("mailing_tutorial", $hDatabaseConnection);	mysql_query("SET NAMES 'utf8'");	mysql_query("SET CHARACTER SET 'utf8'");		$subject = $_POST["subject"];	$body = $_POST["body"];	$sendDate = $_POST["sendDate"];		$queryMail = mysql_query("		insert into mailings(Subject, Body, SendDate) 			values('$subject', '$body', '$sendDate')	");	?>