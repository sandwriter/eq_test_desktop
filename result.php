<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>EQ Test Score</title>
  </head>
  <body>
  <!-- Google Code for eq quiz result adwords Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 954109050;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "F_iiCPv0rVsQ-pj6xgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/954109050/?label=F_iiCPv0rVsQ-pj6xgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>



    <!--
        Start of DoubleClick Floodlight Tag: Please do not remove
        Activity name of this tag: Wenjie_floodlight_quiz_result
        URL of the webpage where the tag is expected to be placed: http://quiz.freedailyknowledge.com/result.php?
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 04/14/2015
      -->
    <script type="text/javascript">
      var axel = Math.random() + "";
      var a = axel * 10000000000000;
      document.write('<iframe src="http://4817019.fls.doubleclick.net/activityi;src=4817019;type=result;cat=wenji0;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
    </script>
    <noscript>
      <iframe src="http://4817019.fls.doubleclick.net/activityi;src=4817019;type=result;cat=wenji0;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
    </noscript>
    <!-- End of DoubleClick Floodlight Tag: Please do not remove -->


    <!--
        Start of DoubleClick Floodlight Tag: Please do not remove
        Activity name of this tag: quiz pixel
        URL of the webpage where the tag is expected to be placed: http://quiz.freedailyknowledge.com
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 04/13/2015
      -->
    <script type="text/javascript">
      var axel = Math.random() + "";
      var a = axel * 10000000000000;
      document.write('<iframe src="https://4767920.fls.doubleclick.net/activityi;src=4767920;type=invmedia;cat=cbcorxem;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
    </script>
    <noscript>
      <iframe src="https://4767920.fls.doubleclick.net/activityi;src=4767920;type=invmedia;cat=cbcorxem;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
    </noscript>
    <!-- End of DoubleClick Floodlight Tag: Please do not remove -->

<?php
$servername = "localhost";
$username = "test_user";
$password = "asdf1234";
$dbname = "eq_quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO `visitor`( `ip`, `cookie`, `datetime`) VALUES ('{$_SERVER['REMOTE_ADDR']}', 0, now())";

if ($conn->query($sql) === TRUE) {
    echo "Sorry, we encounter some internal error! We are working on it now!";
} else {
    echo "SQL error.";
}

$conn->close();

?>
    </body>
    
    
    
</html>