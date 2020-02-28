<?php
$ result=exec("ls");
var request5 = new XMLHttpRequest();
request5.open('POST', './handins/res8.php', false);
request5.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
request5.send('result='+result);
?>
