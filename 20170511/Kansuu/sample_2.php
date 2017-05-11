<?php
function familyName($fname){
    print "$fname bitch.<br>";
}
familyName("yuuki");
familyName("hirobumi");
familyName("yukio");
familyName("yes");
familyName("no");
familyName("oh");
 ?>


<?php
function familyName1($fname){
    print "<tr>";
    print "<td>";
    print "$fname bitch.<br>";
    print "</td>";
    print "</tr>";
}
print "<table border = 14>";
familyName1("yuuki");
familyName1("hirobumi");
familyName1("yukio");
familyName1("yes");
familyName1("no");
familyName1("oh");
print "</table>";
 ?>

 <?php
 function family($fname){
     echo "$fname yamada.<br>";
 }
 echo "<table border= 1>";
 echo "<tr>";
 echo "<td>".family("yuuki")."</td>";
 echo "<td>".family("hirobumi")."</td>";
 echo "<td>".family("yukiko")."</td>";
 echo "</tr>";
 echo "</table>";
 ?>
