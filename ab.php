<html>
    <body>
        <?php
            $t1=$_POST["t1"];
            $t2=$_POST["t2"];
            $t3=$_POST["t3"];
            //echo $t3;
            $C=mysqli_connect("localhost","root","","talebi")
            if(mysqli_connect_error()){
                echo "Not connct";
            }
                
            
           
            else[
                $re = mysqli_query($c, "inser into danesh values('$t1','$t2','$t3')")
            ]
        ?>
        <p align  = "center" >shoma sing in shodid</p>
        <a href="home.html">back</a>
    </body>
</html>