<?php 

$connection = mysqli_connect("localhost","root","","librarygh");



if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

for ($i=0; $i < 500; $i++) { 
    
        $case = rand(1, 5);

        switch ($case) {
            case 1:
                # insert data milicious data

                $sqlins = "INSERT INTO customer (customer_name, contact_no, email,id_card_type_id,id_card_no,address)
                VALUES ('', '', 'john@example.com','1','','')";
                $sqlins0 = "INSERT INTO complaint (complainant_name, complaint_type, complaint,resolve_status,budget) VALUES ('test', 'test', 'test','0','')";
                $sqlins1 = " INSERT INTO id_card_type ( id_card_type)
                VALUES ('0')";
                $sqlins2 = " INSERT INTO shift ( shift,shift_timing)
                VALUES ('test','test')";
                if ($connection->query($sqlins) === TRUE && $connection->query($sqlins) === TRUE && $connection->query($sqlins0) === TRUE && $connection->query($sqlins1) === TRUE && $connection->query($sqlins2) === TRUE) {
                    echo "Record insert successfully" . PHP_EOL;
                } else {
                    echo "Error inserting record: " . $connection->error ."". PHP_EOL;
                }

                break;
            case 2:
                  // update data
                    $sqlupd = "UPDATE shift SET shift='0' ORDER BY shift_id DESC LIMIT 1";
                    $sqlupd1 = "UPDATE complaint SET complainant_name=''ORDER BY id DESC LIMIT 1";
                    $sqlupd2 = "UPDATE id_card_type SET id_card_type='' ORDER BY id_card_type_id DESC LIMIT 1";
                    if ($connection->query($sqlupd) === TRUE && $connection->query($sqlupd1) === TRUE && $connection->query($sqlupd2) === TRUE) {
                    echo "Record insert successfully".PHP_EOL;
                } else {
                    echo "Error inserting record: " . $connection->error ."".PHP_EOL;
                }


                break;
            case 3:
                    
                    $sqldel1 = "DELETE FROM shift  ORDER BY shift_id DESC LIMIT 1";
                    $sqldel2 = "DELETE FROM complaint ORDER BY id DESC LIMIT 1";
                    $sqldel3 = "DELETE FROM id_card_type ORDER BY id_card_type_id DESC LIMIT 1";
                    if ($connection->query($sqldel1) === TRUE && $connection->query($sqldel2) === TRUE && $connection->query($sqldel3) === TRUE) {
                    echo "Record insert successfully". PHP_EOL;
                } else {
                    echo "Error inserting record: " . $connection->error ."". PHP_EOL;
                }
                 break;
            case 4:
                    
                    $sql = "CREATE TABLE MyGuests (
                            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            firstname VARCHAR(30) NOT NULL,
                            lastname VARCHAR(30) NOT NULL,
                            email VARCHAR(50),
                            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                            )";

                            if ($connection->query($sql) === TRUE) {
                              echo "Table MyGuests created successfully". PHP_EOL;
                            } else {
                              echo "Error creating table: " . $connection->error."". PHP_EOL;
                    }

                break;

            case 5:
            
            $sql = "DROP TABLE MyGuests";   
              if ($connection->query($sql) === TRUE) {
                              echo "Table MyGuests created removed". PHP_EOL;
                            } else {
                              echo "Error removed table: " . $connection->error. PHP_EOL;
                    }
        }

}





 ?>