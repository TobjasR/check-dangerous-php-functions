<?php
echo "<h1>PHP Dangerous Functions Checkup</h1>\n";
	
$dangfunx = array("apache_child_terminate", "apache_setenv", "define_syslog_variables", "dl", "escapeshellarg", "escapeshellcmd", "eval", "exec", "expect_popen", "fp", "fput", "ftp_connect", "ftp_exec", "ftp_get", "ftp_login", "ftp_nb_fput", "ftp_put", "ftp_raw", "ftp_rawlist", "highlight_file", "ini_alter", "ini_get_all", "ini_set", "ini_restore", "inject_code", "mail", "mysql_pconnect", "openlog", "passthru", "php_uname", "phpAds_remoteInfo", "phpAds_XmlRpc", "phpAds_xmlrpcDecode", "phpAds_xmlrpcEncode", "pnctl_exec", "popen", "posix_getpwuid", "posix_kill", "posix_mkfifo", "posix_setpgid", "posix_setsid", "posix_setuid", "posix_setuid", "posix_uname", "proc_close", "proc_get_status", "proc_nice", "proc_open", "proc_terminate", "register_shutdown_function", "register_tick_function", "shell_exec", "syslog", "system", "xmlrpc_entity_decode");
$exist=array();
$don_t=array();

foreach ($dangfunx as $func) {
	if (function_exists($func)){
		array_push($exist, $func);
	} else {
		array_push($don_t, $func);
	}
}

echo "<b>functions exist: </b><br />\n";
foreach ($exist as $func) {
	echo $func."<br />\n";
}

echo "<br /><b>functions don't exist: </b><br />\n";
foreach ($don_t as $func) {
	echo $func."<br />\n";
}
?>
