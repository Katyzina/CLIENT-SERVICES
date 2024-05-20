<?php
echo '<table border ="3">';
echo '<tr>';
   for ($r=16;$r<=255;$r++){
	   $Rhex=dechex($r);
	   $color="$Rhex"."0000";
   echo "<td bgcolor=$color> </td>";
   }
   echo '</tr>';
   echo '<tr>';
   for ($g=16;$g<=255;$g++){
	   $Ghex=dechex($g);
	   $color="00"."$Ghex"."00";
   echo "<td bgcolor=$color> </td>";
   }
   echo '</tr>';
   echo '<tr>';
   for ($b=16;$b<=255;$b++){
	   $Bhex=dechex($b);
	   $color="0000"."$Bhex";
   echo "<td bgcolor=$color> </td>";
   }
    echo '</tr>';
	 echo '</table>';
?>
