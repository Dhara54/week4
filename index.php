<?php


$date = date('Y-m-d', time());

$word = "Welcome to the php";

echo "<br>The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";
$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
{
echo "<br> <br>2. Replaced '-' with '/' in date : <br>";
$date1 = str_replace("-", "/","$date");
echo "The value of \$date: ".$date1."<br>";
echo "<br>";
}
{
echo "3.To compare date & tar : ";
if (strcmp($date1, $tar) > 0)
echo "<br>Future<br><br>";
elseif (strcmp($date1, $tar) < 0)
echo "<br>Past";
else echo "<br> oops";
}

echo "4. print the position of / in date : <br>";
for($i=0;$i<strlen($date1);$i++)
{
if($date1[$i]=='/')
{
echo " ".$i;
}
}


{
echo "<br><br>5. Number of words in date : ";

echo "<br>" .str_word_count($date);
}

echo "<br>";

{
echo "<br>6. Finding the length of the sentence : <br>";
echo "<br>The sentence is : Welcome to the php "."<br>";
echo "The length of the sentence is:";
echo strlen($word)."<br>";
}

{
echo "<br>7. ASCII value of first character of the sentence is";
echo "<br>" .ord ($word)."<br>";
}


{
echo "<br>8. Return the last two charcters of date";
echo "<br>".substr("$date", -2);
}
echo "<br>";

echo "<br> 9.Convert date into array & delimit '/' it with space<br>";
$dateElements=explode("/",$date1);
for($i=0;$i<count($dateElements);$i++)
{
echo $dateElements[$i]." ";
}
echo "<br>";

findLeapYearforeach($year);
findLeapYearwhile($year);


function findLeapYearforeach($year)
{
echo "<br>10(A). Using FOREACH function";
foreach($year as $value)
{
if(((int)$value)%4==0)
{
echo "<br>True";
}
else

{
echo "<br>False";
}
echo "<br>";
}
}


function findLeapYearwhile($year)
{
echo "<br>10(A). Using WHILE function";
$i=0;
while($i<count($year))

{
if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}
++$i;

echo "<br>";
}
}
echo "<br>10(B). Using SWITCH case";
for ($i=0;$i<count($year);$i++)

{echo "<br>";
switch ($year{$i})
{
case "2012": if(((int)$year[$i])%4==0)
{

echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "396": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "300": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "2000": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";

}

break;
case "1089": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
case "1100": if(((int)$year[$i])%4==0)
{
echo "<br>True";
}
else
{
echo "<br>False";
}

break;
}
}

?>
