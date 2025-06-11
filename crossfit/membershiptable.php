<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            table{
                border-collapse: colcollapse ;
                width: 100%;
                color: black;
                font-family: monospace;
                font-size: 20px;
                text-align: left;

            }
            th{
                background-color: black;
                color: white;

            }
            tr{
             
                background-color:blanchedalmond;
                 
            }
            h1{
                 color: black;
                 font-family:  Heebo,sans-serif; 
                 
                 text-align: center;
                font-size: 30px;


  
                }

        </style>
        <title></title>

        <link rel="stylesheet" href="">
    </head>
    <body>

          <h1>CUSTOMER MEMBERSHIP TABLE</h1>
        

        
            <table  border="1px">
                <tr> 
                    <!-- <th>sno</th> -->
                    <th>name</th>
                    <th>age</th>
                    <th>gender</th>
                    <th>email</th>
                    <th>phno</th>
                    <th>course</th>
                    <th>Time slot</th>
                </tr>
                <?php  
                $conn = mysqli_connect("localhost","root","","gym");
                $sql = "SELECT * FROM admission";
                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        // echo "<tr><td>"  . $row["id"] . "</td><td>" . $row["cname"] . "</td><td>" . $row["age"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["email"] . "</td><td>"  . $row["blood"] . "</td><td>"  . $row["addr"] . "</td><td>"  . $row["trainers"] . "</td><td>" . $row['ptime']; 

                        echo "<tr><td>"  . $row["name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["email"] . "</td><td>"  . $row['phone'] . "</td><td>"  . $row["ttype"] . "</td><td>" . $row['time']; 
                    }
        



                   
                } else {
                    echo "no results";
                }
                $conn->close();
                
                
                
                ?>
            </table>
        


    </body>
</html>