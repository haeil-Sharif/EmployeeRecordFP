<!DOCTYPE html> 
<html> 
  
<head> 
    <title>Insert Page page</title> 
</head> 
  
<body> 
    <center> 
        <?php 
  
        // servername => localhost 
        // username => root 
        // password => empty 
        // database name => emprecord
        session_start();
        $conn = mysqli_connect("localhost", "root", "", "emprecord"); 
          
        // Check connection 
        if($conn === false){ 
            die("ERROR: Could not connect. " 
                . mysqli_connect_error()); 
        } 
          
        // Taking all 12 values from the form data(input) 
        $grad1=$_REQUEST['grad1'];
        $sadd1=$_REQUEST['sadd1'];
        $strand=$_REQUEST['strand'];
        $grad2=$_POST['grad2'];
        $sadd2=$_POST['sadd2'];
        $course=$_POST['course'];
        $grad3=$_POST['grad3'];
        $sadd3=$_POST['sadd3'];
        $course2=$_POST['course2'];

        // Performing insert query execution 
        // here our table name is college 
        $sql = "INSERT INTO empeduc VALUES ('$grad1',  
            '$sadd1','$strand','$grad2','$sadd2','$course','$grad3','$sadd3','$course2')"; 
        
     
        if(mysqli_query($conn, $sql)){ 
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>";  
  
            echo nl2br("\n$grad1 \n$sadd1"
                . "\n$strand \n$grad2 \n$sadd2 \n$course \n$grad3 \n$sadd3 \n$course2"); 
                
        } else{ 
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn); 
        } 
          
        // Close connection 
        mysqli_close($conn); 
        ?> 
    </center> 
</body> 
  
</html> 