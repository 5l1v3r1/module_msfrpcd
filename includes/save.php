<? 
/*
    Copyright (C) 2013-2020 xtr4nge [_AT_] gmail.com

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/ 
?>
<?
include "../../../login_check.php";
include "../../../config/config.php";
include "../_info_.php";
include "../../../functions.php";

include "options_config.php";

// Checking POST & GET variables...
if ($regex == 1) {
	regex_standard($_POST['type'], "../../../msg.php", $regex_extra);
	regex_standard($_POST['action'], "../../../msg.php", $regex_extra);
	regex_standard($_GET['mod_action'], "../../../msg.php", $regex_extra);
	regex_standard($_GET['mod_service'], "../../../msg.php", $regex_extra);
	


	regex_standard($_POST['msfrpcd_host'], "../../../msg.php", $regex_extra);
	regex_standard($_POST['msfrpcd_port'], "../../../msg.php", $regex_extra);
	regex_standard($_POST['msfrpcd_user'], "../../../msg.php", $regex_extra);
	regex_standard($_POST['msfrpcd_pw'], "../../../msg.php", $regex_extra);
	regex_standard($_POST['msfrpcd_db'], "../../../msg.php", $regex_extra); 

	regex_standard($_POST['msfrpcd_sslenable'], "../../../msg.php", $regex_extra);
	regex_standard($_POST['msfrpcd_sslverify'], "../../../msg.php", $regex_extra);

	regex_standard($_POST['msfrpcd_sslcertpath'], "../../../msg.php", $regex_extra); 
	regex_standard($_POST['msfrpcd_sslprivkeypath'], "../../../msg.php", $regex_extra); 




 


}

$type = $_POST['type'];
$action = $_POST['action'];
$mod_action = $_GET['mod_action'];
$mod_service = $_GET['mod_service'];
$msfrpcd_host = $_POST['msfrpcd_host'];
$msfrpcd_port = $_POST['msfrpcd_port'];
$msfrpcd_user = $_POST['msfrpcd_user'];
$msfrpcd_pw = $_POST['msfrpcd_pw'];
$msfrpcd_db = $_POST['msfrpcd_db'];
$msfrpcd_sslenable = $_POST['msfrpcd_sslenable'];
$msfrpcd_sslverify = $_POST['msfrpcd_sslverify'];

$msfrpcd_sslcertpath  = $_POST['msfrpcd_sslcertpath'];
$msfrpcd_sslprivkeypath = $_POST['msfrpcd_sslprivkeypath'];

// msfrpcd settings
if ($type == "settings") {

	

   $exec = "/bin/sed -i 's/^\\\$msfrpcd_host.*/\\\$msfrpcd_host = \\\"".$msfrpcd_host."\\\";/g' ../_info_.php";
   $output = exec_fruitywifi($exec);

   $exec = "/bin/sed -i 's/^\\\$msfrpcd_port.*/\\\$msfrpcd_port = \\\"".$msfrpcd_port."\\\";/g' ../_info_.php";
   exec_fruitywifi($exec);

   $exec = "/bin/sed -i 's/^\\\$msfrpcd_user.*/\\\$msfrpcd_user = \\\"".$msfrpcd_user."\\\";/g' ../_info_.php";
   exec_fruitywifi($exec);

   $exec = "/bin/sed -i 's/^\\\$msfrpcd_pw.*/\\\$msfrpcd_pw = \\\"".$msfrpcd_pw."\\\";/g' ../_info_.php";
   exec_fruitywifi($exec);

   $exec = "/bin/sed -i 's/^\\\$msfrpcd_db.*/\\\$msfrpcd_db = \\\"".$msfrpcd_db."\\\";/g' ../_info_.php";
   exec_fruitywifi($exec);

   $exec = "/bin/sed -i 's/^\\\$msfrpcd_sslenable.*/\\\$msfrpcd_sslenable = \\\"".$msfrpcd_sslenable."\\\";/g' ../_info_.php";
   exec_fruitywifi($exec);

   $exec = "/bin/sed -i 's/^\\\$msfrpcd_sslverify.*/\\\$msfrpcd_sslverify = \\\"".$msfrpcd_sslverify."\\\";/g' ../_info_.php";
   exec_fruitywifi($exec);

   $exec = "/bin/sed -i 's/^\\\$msfrpcd_sslcertpath.*/\\\$msfrpcd_sslcertpath = \\\"".$msfrpcd_sslcertpath."\\\";/g' ../_info_.php";
   exec_fruitywifi($exec);

   $exec = "/bin/sed -i 's/^\\\$msfrpcd_sslprivkeypath.*/\\\$msfrpcd_sslprivkeypath = \\\"".$msfrpcd_sslprivkeypath."\\\";/g' ../_info_.php";
   exec_fruitywifi($exec);

    header('Location: ../index.php?tab=0');
    exit;

}

header('Location: ../index.php');

?>
