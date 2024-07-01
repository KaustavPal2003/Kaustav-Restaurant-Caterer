<html>

    <head>
        <link rel="stylesheet" href="color_change.css">
    </head>

    <body>

    <div class="mydiv">
<?php

include("directory.php");

$a1=$_GET["t1"];
if($a1!="")
echo "<br>&nbsp;Contact No = ".$a1."<br>";

$a2=$_GET["t2"];
if($a2!="")
echo "&nbsp;Name = ".$a2."<br>";

$a3=$_GET["a1"];
if($a3!="")
echo "&nbsp;Adress = ".$a3."<br>";

if($a3!=""||$a2!=""||$a1!="")
{
?>

<hr size="10" width="100%" color="white">

<?php
}
$b1=$_GET["o1"];
$c1=$_GET["q1"];
$b2=$_GET["o2"];
$c2=$_GET["y2"];

$k1=0;
$k2=0;
$e1=1;

    if($b1!="" && $c1!="")
    {
            echo "<br>&nbsp;Order".$e1."<BR><br>";
            echo ("&nbsp;".$b1."<br>");
            echo "&nbsp;Quantity=".$c1."<br>";
            $k1=multiply($c1,15);
            echo("&nbsp;Rs=".$k1."<br />");
            echo("&nbsp;RS 15 PER PLATE");
        echo ("<br>");
        $e1=$e1+1;
        ?>
        <hr size="10" width="100%" color="white">
        <?php
        }

    if($b2!="" && $c2!="")
    {
            echo "<BR>&nbsp;Order".$e1."<BR><br>";
            echo ("&nbsp;".$b2."<br>");
        echo "&nbsp;Quantity=".$c2."<br>";

	if($b2=="Chicken Kabab")
        {
            $k2=multiply($c2,70);
            echo("&nbsp;Rs=" .$k2. "<br />");
            echo("&nbsp;RS 70 PER PLATE");
        }

	else if($b2=="Fish fry")
        {
            $k2=multiply($c2,50);
            echo("&nbsp;Rs=" .$k2. "<br />");
            echo("&nbsp;RS 50 PER PLATE");
        }

        else 
        {
            $k2=multiply($c2,100);
            echo("&nbsp;Rs=".$k2."<br />");
            echo("&nbsp;RS 100 PER PLATE");
        }
        echo ("<br>");
	?>
        <hr size="10" width="100%" color="white">
        <?php
        }

    if($k1!=0 || $k2!=0)
    {
        echo("<br>&nbsp;Your total=" .add($k1,$k2). "<br />");?>
    <marquee behavior="alternate"> <?php echo("<br><font size=5 color=#ff0000>&nbsp;Thankyou. </font>");?> </marquee>
<?php
    }
?>
</div>

</body>
</html>