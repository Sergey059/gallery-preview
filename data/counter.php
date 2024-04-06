<?

###########################################
#Very simple PHP text based counter.
#to use it simple add this code to your html.
#<script language="javascript" src="http://yourdomain.com/counter.php"></script>
#If you have problems you can contact webmaster@dony.com.kg
#This script is free of charge. Do not hesitate to suggest this script to your friends.
#Thanks for using this script.
#www.dony.com.kg
###########################################

$log="counter.txt";	//counter log file.
//nothing else to change leave it as is.

$open=@fopen($log,'r+');
$counter=@fread($open,filesize($log));
@fclose($open);
$counter++;
$write=fopen($log,'w');
fputs($write,$counter);
fclose($write);
echo "document.write($counter)";
?>