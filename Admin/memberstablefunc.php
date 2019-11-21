<?php 


require_once("../conn.php");
    //$inc = 1;

        $sql = "SELECT * FROM member";
        $result = mysqli_query($conn, $sql);
        
       
        echo "<table class='table'>
                <thead class='thead-dark'>
                        <tr>
                                <th scope='col'>#</th>
                                <th scope='col'>First Name</th>
                                <th scope='col'>Last Name</th>
                                <th scope='col'>Date Of Birth</th>
                                <th scope='col'>Email</th>
                        </tr>
                </thead>";

        while($row = mysqli_fetch_array($result, MYSQLI_NUM))
        {  
            echo "<tbody>
                        <tr>
                                <th scope='row'>". $row[6] ."</th>
                                <td>". $row[0] . "</td>
                                <td>". $row[1] . "</td>
                                <td>". $row[4] . "</td>
                                <td>". $row[2] . "</td>

                                <form action='blockfunc.php?uid=".$row[6]."' method='post'>
                                        
                                        <td><button type='submit' class='btn btn-default btn-sm' name='block'>
                                        <span class='glyphicon glyphicon-ban-circle'></span> 
                                        </button></td>
                                </form>         

                                <form action='grantfunc.php?uid=".$row[6]."' method='post'>

                                        
                                        <td><button type='submit' class='btn btn-default btn-sm' name='allow'>
                                        <span class='glyphicon glyphicon-ok'></span> 
                                        </button></td>

                                        
                                </form>
                        </tr>
                </tbody>";
        }
        
      
    
        echo "</table>";

       
		



    
        
?>