<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>EQ Test Score</title>
        <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
        <style type="text/css" media="all">
         @import "images/style.css";
        </style>
    </head>
    <body>
        <div class="content">
            <div id="header">
                <div class="title">
                    <h1>EQ Test Result</h1>
                </div>
            </div>
            <div id="main">
                <div class="center">
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

                    if (!array_key_exists('q1', $_POST) ||
                        !array_key_exists('q2', $_POST) ||
                        !array_key_exists('q3', $_POST) ||
                        !array_key_exists('q4', $_POST) ||
                        !array_key_exists('q5', $_POST) ||
                        !array_key_exists('q6', $_POST) ||
                        !array_key_exists('q7', $_POST) ||
                        !array_key_exists('q8', $_POST) ||
                        !array_key_exists('q9', $_POST) ||
                        !array_key_exists('q10', $_POST)){
                        echo 'Please answer all questions!';
                        return;
                    }

                    switch($_POST['q1']){
                        case 'd':
                            break;
                        default:
                            $score += 10;
                            break;
                    }

                    switch($_POST['q2']){
                        case 'b':
                            $score += 5;
                            break;
                        case 'd':
                            $score += 10;
                            break;
                        default:
                            break;
                    }

                    switch($_POST['q3']){
                        case 'b':
                            $score += 5;
                            break;
                        case 'd':
                            $score += 10;
                            break;
                        default:
                            break;
                    }

                    switch($_POST['q4']){
                        case 'a':
                            $score += 10;
                            break;
                        case 'c':
                            $score += 5;
                            break;
                        default:
                            break;
                    }

                    switch($_POST['q5']){
                        case 'b':
                            $score += 5;
                            break;
                        case 'c':
                            $score += 10;
                            break;
                        case 'd':
                            $score += 5;
                            break;
                        default:
                            break;
                    }

                    switch($_POST['q6']){
                        case 'b':
                            $score += 10;
                            break;
                        case 'c':
                            $score += 5;
                            break;
                        default:
                            break;
                    }

                    switch($_POST['q7']){
                        case 'c':
                            $score += 5;
                            break;
                        case 'd':
                            $score += 10;
                            break;
                        default:
                            break;
                    }

                    switch($_POST['q8']){
                        case 'a':
                            $score += 10;
                            break;
                        default:
                            break;
                    }

                    switch($_POST['q9']){
                        case 'b':
                            $score += 10;
                            break;
                        case 'd':
                            $score += 5;
                            break;
                        default:
                            break;
                    }

                    switch($_POST['q10']){
                        case 'b':
                            $score += 5;
                            break;
                        case 'd':
                            $score += 10;
                            break;
                        default:
                            break;
                    }

                    ?>

                    <div id="score">
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

                        $sql = "INSERT INTO `visitor`( `ip`, `score`, `cookie`, `datetime`) VALUES ('{$_SERVER['REMOTE_ADDR']}', {$score}, 0, now())";

                        if ($conn->query($sql) === TRUE) {
                            echo "Your score is {$score} out of 100.";
                        } else {
                            echo "Sorry, we encounter some internal error! We are working on it now!";
                        }

                        $conn->close();
                        ?>
                    </div>
                </div>
            </div>
            <div id="prefooter">
                <div class="particles">
                    <h2>Top Articles</h2>
                    <img src="images/arrow.gif" alt="" /> <a href="https://www.psychologytoday.com/blog/communication-success/201410/how-increase-your-emotional-intelligence-6-essentials">How to Increase Your Emotional Intelligence - 6 Essentials</a><br />
                </div>
                <div class="comments">
                    <h2>Last Comments</h2>
                    <img src="images/arrow.gif" alt="" /> <a href="#">Interesting test!</a><br />
                </div>
            </div>
            <div id="footer">
                <div class="padding"> Copyright &copy; 2006 Your Site Name | Design: <a href="http://www.free-css-templates.com">David Herreman </a> | <a href="#">Contact</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> and <a href="http://validator.w3.org/check?uri=referer">XHTML</a> | <a href="http://www.solucija.com">Solucija.com</a> | <a href="#">Login</a> </div>
            </div>            
        </div>
    </body>
</html>
