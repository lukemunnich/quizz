<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Africa quizz</title>
  
</head>
<body>
<?php
error_reporting(0);


//      CONFIGURATION
$title = "Africa quizz";
$address = "index.php";
$randomizequestions ="yes"; // set up as "no" to show questions without randomization
//    END CONFIGURATION


$a = array(
1 => array(
   0 => "what is Africas biggest economy",
   1 => "Egypt",
   2 => "South Africa",
   3 => "Nigeria",
   4 => "Cameroon",
   6 => 3
),
2 => array(
   0 => "in which country is the Nile river situated",
   1 => "Congo",
   2 => "Zimbabwe",
   3 => "Mexico",
   4 => "Egypt",
   6 => 4
),
3 => array(
   0 => "which is the biggest mountain in africa",
   1 => "mount Kenya",
   2 => "mount Karisimbi",
   3 => "mount Stanley",
   4 => "mount Kilimanjaro",
   6 => 4
),
4 => array(
   0 => "which country has the largest population",
   1 => "Tanzania",
   2 => "South Africa",
   3 => "Nigeria",
   4 => "Morroco",
   6 => 3
),
5 => array(
   0 => "which city has the largest population",
   1 => "Lagos",
   2 => "Cairo",
   3 => "Johannesburg",
   4 => "Abidyan",
   6 => 1
),
6 => array(
   0 => "what is the richest city in africa",
   1 => "Cairo",
   2 => "Cape Town",
   3 => "Nairobe",
   4 => "Pretoria",
   6 => 2
),
7 => array(
   0 => "what is South Africas main export",
   1 => "minerals",
   2 => "fruits and vegetables",
   3 => "wine",
   4 => "spices",
   6 => 1
),
8 => array(
   0 => "what is the most spoken launguage in africa",
   1 => "Yoruba",
   2 => "Swahili",
   3 => "Shona",
   4 => "Oromo",
   6 => 2
),
9 => array(
   0 => "what is Africas most played sport",
   1 => "Soccer",
   2 => "Rugby",
   3 => "Boxing",
   4 => "Golf",
   6 => 1
),
10 => array(
   0 => "which country is the most visited in Africa by tourists",
   1 => "South Africa",
   2 => "Morroco",
   3 => "Zimbabwe",
   4 => "Tanzania",
   6 => 2
),
11 => array(
   0 => "which country has the highest crime rate",
   1 => "Libya",
   2 => "Nigeria",
   3 => "Congo",
   4 => "South Africa",
   6 => 4
),
12 => array(
   0 => "which city was recently voted the best city in the world",
   1 => "Nairoba",
   2 => "Cape town",
   3 => "Pretoria",
   4 => "Lagos",
   6 => 2
),
13 => array(
   0 => "which country is rated the happiest by the world happiness report",
   1 => "South Africa",
   2 => "Nigeria",
   3 => "Algeria",
   4 => "Maritius",
   6 => 4
),
14 => array(
   0 => "Nelson Mandela was the president of which African country",
   1 => "Tanzania",
   2 => "Zimbabwe",
   3 => "Congo",
   4 => "South Africa",
   6 => 4
),
15 => array(
   0 => "what is the largest dessert in the world",
   1 => "The Sahara",
   2 => "Nyiri Desert",
   3 => "Guban Desert",
   4 => "Lompoul Desert",
   6 => 1
),
16 => array(
   0 => "which country is the biggest contributor to pollution",
   1 => "South Africa",
   2 => "Nigeria",
   3 => "Somalia",
   4 => "Eqypt",
   6 => 2
),
17 => array(
   0 => "which is the hottest country in Africa",
   1 => "Congo",
   2 => "Mexico",
   3 => "Mali",
   4 => "Libya",
   6 => 4
),
18 => array(
   0 => "which African countries have the most big 5 animals",
   1 => "South Africa",
   2 => "Namibia",
   3 => "Botswana",
   4 => "Congo",
   6 => 3
),
19 => array(
   0 => "which is the fastest growing country in Africa",
   1 => "Egypt",
   2 => "Nigeria",
   3 => "South Africa",
   4 => "Congo",
   6 => 2
),
20 => array(
   0 => "which country hosts the second biggest forest in the world",
   1 => "Congo",
   2 => "Egypt",
   3 => "Kenya",
   4 => "South Africa",
   6 => 1
),
);

$max=20;

$question=$_POST["question"] ;

if ($_POST["Randon"]==0){
        if($randomizequestions =="yes"){$randval = mt_rand(1,$max);}else{$randval=1;}
        $randval2 = $randval;
        }else{
        $randval=$_POST["Randon"];
        $randval2=$_POST["Randon"] + $question;
                if ($randval2>$max){
                $randval2=$randval2-$max;
                }
        }
        
$ok=$_POST["ok"] ;

if ($question==0){
        $question=0;
        $ok=0;
        $percentaje=0;
        }else{
        $percentaje= Round(100*$ok / $question);
        }
        
?>

<HTML><HEAD><TITLE>Multiple Choice Questions:  <?php print $title; ?></TITLE>

<SCRIPT LANGUAGE='JavaScript'>
 
function Goahead (number){
        if (document.percentaje.response.value==0){
                if (number==<?php print $a[$randval2][6] ; ?>){
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                        document.percentaje.ok.value++
                }
                else{
                        document.percentaje.response.value=1
                        document.percentaje.question.value++
                }
        }
      

if (number==<?php print $a[$randval2][6] ; ?>){
                document.question.response.value="accepted"
        }else{
                document.question.response.value="accepted"
        }
}
</SCRIPT>

</HEAD>


<CENTER>
<H1><?php print "$title"; ?></H1>
<TABLE BORDER=0 CELLSPACING=5 WIDTH=500>

<?php if ($question<$max){ ?>

<TR><TD ALIGN=RIGHT>
<FORM METHOD=POST NAME="percentaje" ACTION="<?php print $URL; ?>">

<BR>Percentaje of correct responses: <?php print $percentaje; ?> %
<BR><input type=submit value="Next >>">
<input type=hidden name=response value=0>
<input type=hidden name=question value=<?php print $question; ?>>
<input type=hidden name=ok value=<?php print $ok; ?>>
<input type=hidden name=Randon value=<?php print $randval; ?>>
<br><?php print $question+1; ?> / <?php print $max; ?>
</FORM>
<HR>
</TD></TR>

<TR><TD>
<FORM METHOD=POST NAME="question" ACTION="">
<?php print "<b>".$a[$randval2][0]."</b>"; ?>
 
<BR>     <INPUT TYPE=radio NAME="option" VALUE="1"  onClick=" Goahead (1);"><?php print $a[$randval2][1] ; ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="2"  onClick=" Goahead (2);"><?php print $a[$randval2][2] ; ?>
<?php if ($a[$randval2][3]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="3"  onClick=" Goahead (3);"><?php print $a[$randval2][3] ; } ?>
<?php if ($a[$randval2][4]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="4"  onClick=" Goahead (4);"><?php print $a[$randval2][4] ; } ?>
<?php if ($a[$randval2][5]!=""){ ?>
<BR>     <INPUT TYPE=radio NAME="option" VALUE="5"  onClick=" Goahead (5);"><?php print $a[$randval2][5] ; } ?>
<BR>     <input type=text name=response size=8>

</FORM>

<br><img id="blueimage" src="images/africa.jpg" alt="Africa">

<?php
}if($percentaje <= 40 ){
?>
<TR><TD ALIGN=Center>
The Quiz has finished 
<br> study much harder next time
<BR>Percentage of correct responses: <?php print $percentaje ; ?> %
<p><A href="index.php">Home Page</a>
<?php } 
else if($percentaje >= 41 &&  $percentaje <=70){
    ?>
    <TR><TD ALIGN=Center>
    The Quiz has finished
    <br>well done keep going
    <BR>Percentage of correct responses: <?php print $percentaje ; ?> %
    <p><A href="index.php">Home Page</a>
    <?php } 

else{
?>
<TR><TD ALIGN=Center>
The Quiz has finished work harder
<BR>Percentage of correct responses: <?php print $percentaje ; ?> %
<p><A href="index.php">Home Page</a>
<?php } ?>
</TD></TR>
</TABLE>
</TD></TR>
</TABLE>






</CENTER>
<link rel="stylesheet" href="css/style.css">
</body>

</html>