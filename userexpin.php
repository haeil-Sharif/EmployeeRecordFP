<!DOCTYPE html> 
<html> 
  
<head> 
    <title>ERMS</title> 
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
        $emp1name=$_REQUEST['emp1name']; 
        $emp1des=$_REQUEST['emp1des']; 
        $emp1ctc=$_REQUEST['emp1ctc']; 
        $emp1wd=$_REQUEST['emp1wd']; 
        $emp2name=$_POST['emp2name'];
        $emp2des=$_POST['emp2des'];
        $emp2ctc=$_POST['emp2ctc'];
        $emp2wd=$_POST['emp2wd'];
        $emp3name=$_POST['emp3name'];
        $emp3des=$_POST['emp3des'];
        $emp3ctc=$_POST['emp3ctc'];
        $emp3wd=$_POST['emp3wd'];

        // Performing insert query execution 
        // here our table name is college 
        $sql = "INSERT INTO emprecord VALUES ('$emp1name','$emp1des','$emp1ctc','$emp1wd','$emp2name','$emp2des'
        ,'$emp2ctc','$emp2wd','$emp3name','$emp3name','$emp3ctc','$emp3wd')"; 

        if(mysqli_query($conn, $sql))
        { 
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>";  
  
            echo nl2br("\n$emp1name \n$emp1des"
                . "\n$emp1ctc \n$emp1wd \n$emp2name \n$emp2des \n$emp2ctc \n$emp2wd"
                .  "\n$emp3name \n$emp3des \n$emp3ctc \n$emp3wd"); 
                

            } else{ 
            echo "ERROR: Hush! Sorry $query. " 
                . mysqli_error($conn); 
        } 
          
        // Close connection 
        mysqli_close($conn); 
        ?> 
    </center> 
</body> 
  
</html> 