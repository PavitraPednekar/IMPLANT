<?php
$t = date("H:M");
if ($t > "20") 
{
echo "have a good day";
}
elseif ($t < "10" && $t < "20" )
{
echo "have a good noon";
}
else
{
echo "good night";
}
?>

