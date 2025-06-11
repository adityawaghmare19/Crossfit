<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
            table{
                border-collapse: colcollapse ;
                width: 100%;
                color: black;
                font-family: monospace;
                font-size: 30px;
                text-align: left;

            }
            th{
                background-color: black;
                color: white;

            }
            tr{background-color:blanchedalmond ;
            }
            h1{
                 color: black;
                 font-family:  Heebo,sans-serif; 
                 
                 text-align: center;
                font-size: 60px;


  
                }

        </style>
        <title></title>

        <link rel="stylesheet" href="">
    </head>
    <body>

          <h1>CUSTOMER ENQUIRY TABLE</h1>
        

        
            <table  border="1px">
                <tr> 
                    <!-- <th>sno</th> -->
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>message</th>
                </tr>
                <?php  
                $conn = mysqli_connect("localhost","root","","gym");
                $sql = "SELECT * FROM customer_enq";
                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                        // echo "<tr><td>"  . $row["sno"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["message"] . "</td><td>";

                        echo "<tr><td>"  . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["message"] . "</td><td>";
                    }
        



                   
                } else {
                    echo "no results";
                }
                $conn->close();
                
                
                
                ?>
            </table>
        


    </body>
</html>