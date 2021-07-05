<?php 
                        include 'connection.php';
                        $user=$_POST["user"];
                        $email=$_POST["email"];
                        $pw=$_POST["pw"];
                        $rpw=$_POST["rpw"];
                        if($pw!=$rpw){
                        echo "<script type='text/javascript'>alert('retype the same password');</script>";
                        exit();
                    }
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "ayoub";
                        
                        try {
                          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                          // set the PDO error mode to exception
                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          $sql = "INSERT INTO liste (id, name, email,password)
                          VALUES ('', '$user', '$email','$pw)";
                          // use exec() because no results are returned
                          $conn->exec($sql);
                          echo "New record created successfully";
                        } catch(PDOException $e) {
                          echo $sql . "<br>" . $e->getMessage();
                        }
                        
                        $conn = null;
                        ?> 