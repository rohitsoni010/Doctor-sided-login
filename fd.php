<html>
<?php
$bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);


$temp = [
  'Fname' => $_POST["fname"],
  'Lname' => $_POST["lname"],
  'Gender' => $_POST["Gender"],
   'Address' => $_POST["address"],
   'Country Code' => $_POST["country_code"],
   'Others' => $_POST["Others"],
'Contact' => $_POST["contact"],
'Email id' => $_POST["email_id"],
'Hospital name' => $_POST["hospital_name"],
'Feedback' => $_POST["feedback"],
'Image' => $_POST["pic"]
];




 $bulk->insert($temp);

// $bulk->insert(['_id' => 2,'Lname' => $_POST["lname"]]);
// if(isset($_POST['Male'])){
//   $bulk->insert(['_id' => 3,'Gender' => $_POST["Male"]]);}
//    else {
//     $bulk->insert(['_id' => 3,'Gender' => $_POST["Female"]]);
//   }
// /*$bulk->insert(['_id' => 3,'Male' => $_POST["Male"]]);
// $bulk->insert(['_id' => 4,'Female' => $_POST["Female"]]);*/
// $bulk->insert(['_id' => 4,'Address' => $_POST["address"]]);
// $bulk->insert(['_id' => 5,'Country Code' => $_POST["country_code"]]);
// $bulk->insert(['_id' => 6,'Others' => $_POST["Others"]]);
// $bulk->insert(['_id' => 7,'Contact' => $_POST["contact"]]);
// $bulk->insert(['_id' => 8,'Email id' => $_POST["email_id"]]);
// $bulk->insert(['_id' => 9,'Hospital name' => $_POST["hospital_name"]]);
// $bulk->insert(['_id' => 10,'Feedback' => $_POST["feedback"]]);

$manager = new \MongoDB\Driver\Manager('mongodb://127.0.0.1:27017');

$query = new \MongoDB\Driver\Query(['createIndex' => ['email_id' => 1]], []);
$manager->executeQuery('hospital.fd', $query);


$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);

try {
    $result = $manager->executeBulkWrite('hospital.fd', $bulk, $writeConcern);
}

catch (MongoDB\Driver\Exception\BulkWriteException $e) {
    $result = $e->getWriteResult();

    // Check if the write concern could not be fulfilled
    if ($writeConcernError = $result->getWriteConcernError()) {
        printf("%s (%d): %s\n",
            $writeConcernError->getMessage(),
            $writeConcernError->getCode(),
            var_export($writeConcernError->getInfo(), true)
        );
    }

    // Check if any write operations did not complete at all
    foreach ($result->getWriteErrors() as $writeError) {
        printf("Operation#%d: %s (%d)\n",
            $writeError->getIndex(),
            $writeError->getMessage(),
            $writeError->getCode()
        );
    }
} catch (MongoDB\Driver\Exception\Exception $e) {
    printf("Other error: %s\n", $e->getMessage());
    exit;
}

echo "<br>";
printf("Inserted %d document(s)\n ", $result->getInsertedCount());
echo "<br>";
printf("\n Updated  %d document(s)\n", $result->getModifiedCount());
echo "<br>";
echo "\n Number of values inserted with null values included is equal to \t";

echo count($temp);

?>
<form method="post" action="feedback.php">
<input type="submit" class="button" name="submitBtn" value="Okay"/>
</form>
</html>
