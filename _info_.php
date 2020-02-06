<?
$mod_name="msfrpcd";
$mod_version="2.b";
$mod_path="/usr/share/fruitywifi/www/modules/$mod_name";
$mod_logs="$log_path/$mod_name.log"; 
$mod_logs_history="$mod_path/includes/logs/";
$mod_logs_panel="enabled";
$mod_panel="show";
$mod_type="service";
$mod_isup="ps auxww | grep -iEe 'msfrpcd' | grep -v -e grep";
$mod_alias="Msfrpcd";


#USER OPT 
$msfrpcd_host = "127.0.0.1";
$msfrpcd_port = "55552";
$msfrpcd_user = "msf";
$msfrpcd_pw = "abc123";
$msfrpcd_db = "true";
$msfrpcd_sslenable = "false";
$msfrpcd_sslverify = "false";
$msfrpcd_sslcertpath = "/root/.msf4/msf-ws-cert.pem";
$msfrpcd_sslprivkeypath = "/root/.msf4/msf-ws-key.pem";


# EXEC
$bin_sudo = "/usr/bin/sudo";
$bin_msfrpcd = "/usr/bin/msfrpcd";
$bin_awk = "/usr/bin/awk";
$bin_grep = "/bin/grep";
$bin_echo = "/bin_echo";
$bin_killall = "/usr/bin/killall";
$bin_cp = "/bin/cp";
$bin_chmod = "/bin/chmod";
$bin_sed = "/bin/sed";
$bin_rm = "/bin/rm";
$bin_kill = "/bin/kill";
?>
