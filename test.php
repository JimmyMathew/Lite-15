<!DOCTYPE html>
    <html>
        <head>
            <style type='text/css'>
                #wrapper {
                    width:950px;
                    height:auto;
                    padding: 13px;
                    margin-right: auto;
                    margin-left: auto;
                    background-color: #fff;
                }
            </style>
        </head>
        <body bgcolor="#e1e1e1">
            <div id="wrapper">
                <center><font fact="Andalus" size="5">Test Quiz</font></center>
                <br /><br /><br /><br />
            </div>

            <?php
                //Start Variables
                $username   =   "root";
                $password   =   "";
                $database   =   "lite";
                //End Variables

                //Connect To Database
                $link   =   mysql_connect(localhost,$username,$password) or die ('Could not connect :'.  mysql_error());
                mysql_select_db($database) or die( "Unable to select database");

                //SQL Get Questions
                $query  =   "SELECT * FROM event1";
                $result =   mysql_query($query) or die ('Query failed:'. mysql_error());
                $row    =   mysql_fetch_array($result,MYSQLI_ASSOC);

                //Get results
                
                while ($row = mysql_fetch_array($result,MYSQLI_ASSOC))
                    {
						echo '<br> Question No : ' .$row{'id'} ;
                        echo '<br> QuestionName : ' .$row{'question'} ;
                        echo '<br> Option 1 : ' .$row{'option1'};
                        echo '<br> Option 2 : ' .$row{'option2'};
                        echo '<br> Option 3 : ' .$row{'option3'};
                        echo '<br> Option 4 : ' .$row{'option4'};
                        echo '<br> Option 5 : ' .$row{'correct'};
                    }
                
                mysql_free_result($result); 
                mysql_close($link);
            ?>
        </body>
</html>