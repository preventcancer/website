<?PHP
/*
Script will attempt to fix Permissions on website set at 0200 or 0444 to 644 and chmod dirs to 755

v1.3.6

*/
$path=$_SERVER['DOCUMENT_ROOT'] ."/";

//show full path
echo "Checking Path: ". $path . "<br>";
echo "";
echo "<b>Please copy and paste contents of this page and email mfiegl@sitelock.com</b>";

//Look for directories first so we can change files if issue
$findlook="find $path -type d -perm 0200 2>&1 ";
echo "<b>Doing directory perms find: </b><br>" . $findlook . "<br><br>";
$exec=exec($findlook, $output);
foreach($output as $data){
echo "<b><font color='green'>".$data ."</font></b><br>";
}
if (!$output){ echo "No Directories With Permissions @ 0200<br><br>";}

$output='';


$findlook="find $path -type d -perm 0555 2>&1 ";
echo "<b>Doing directory perms find: </b><br>" . $findlook . "<br><br>";
$exec=exec($findlook, $output);
foreach($output as $data){
echo "<b><font color='green'>".$data ."</font></b><br>";
}
if (!$output){ echo "No Directories With Permissions @ 0555<br><br>";}

$output='';

//find files with 200 and change perms
$findlook="find $path -type f -perm 0444 2>&1 ";
echo "<b>Doing file perms find:</b> <br>" . $findlook . "<br><br>";

$exec=exec($findlook, $output);
foreach($output as $data){
echo "<b><font color='green'>".$data ."</font></b><br>";
}
if (!$output){ echo "No Files With Permissions @ 0444<br><br>";}
$output='';

//find files with 444 and change perms
$findlook="find $path -type f -perm 0200 2>&1 ";
echo "<b>Doing file perms find: </b><br>" . $findlook . "<br><br>";

$exec=exec($findlook, $output);
foreach($output as $data){
echo "<b><font color='green'>".$data ."</font></b><br>";
}
if (!$output){ echo "No Files With Permissions @ 0200<br><br>";}
$output='';

//find files with 400 and change perms
$findlook="find $path -type f -perm 0400 2>&1 ";
echo "<b>Doing file perms find: </b><br>" . $findlook . "<br><br>";

$exec=exec($findlook, $output);
foreach($output as $data){
echo "<b><font color='green'>".$data ."</font></b><br>";
}
if (!$output){ echo "No Files With Permissions @ 0200<br><br>";}
$output='';


echo "<b>Files not at 644:</b> ";
//find files with 444 and change perms
$findlook="find $path -type f ! -perm -0644 2>&1";
echo "Files with perms less than 0644: <br>" . $findlook . "<br><br>";

$exec=exec($findlook, $output);
foreach($output as $data){
echo "<b>".$data ."</b><br>";
}
if (!$output){ echo "No Files With Permissions Less than 0644<br><br>";}
$output='';

echo "<b>Files Owned By Apache (User/Group Issues):</b> ";
//find files owned by apache and change perms
$findlook="find $path -group apache 2>&1";
echo "Files with ownership Apache(generally SFTP perms issue): <br>" . $findlook . "<br><br>";

$exec=exec($findlook, $output);
foreach($output as $data){
if (!stristr($data, "name of an existing group")){
echo "<font color='red'><b>".$data ."</b></font><br>";
}

}
if (!$output){ echo "No Files owned by Apache<br><br>";}
$output='';

echo "<b>Files Owned By Root (User/Group Issues):</b> ";
//find files owned by apache and change perms
$findlook="find $path -uid 0 2>&1";
echo "Files with User ID 0: <br>" . $findlook . "<br><br>";

$exec=exec($findlook, $output);
foreach($output as $data){
if (!stristr($data, "name of an existing group")){
echo "<font color='red'><b>".$data ."</b></font><br>";
}

}
if (!$output){ echo "No Files owned by 0<br><br>";}
$output='';



//Self destruct (because it's the only responsible thing to do).
UNLINK(__FILE__);

?>