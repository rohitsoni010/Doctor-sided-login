<html>
<?php

$bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);
$temp = [
  'Fname' => $_POST["fname"],
  'Lname' => $_POST["lname"],
  'Gender' => $_POST["Gender"],
   'Address' => $_POST["address"],
   'City' => $_POST["city"],
   'State' => $_POST["State"],
   'Country Code' => $_POST["country_code"],
   'Others' => $_POST["Others"],
'Contact' => $_POST["contact"],
'Email id' => $_POST["email_id"],
'Hospital name' => $_POST["hospital_name"],
'Aadharid' => $_POST["aadharid"]
];




 $bulk->insert($temp);

$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);

try {
    $result = $manager->executeBulkWrite('hospital.ins', $bulk, $writeConcern);
} catch (MongoDB\Driver\Exception\BulkWriteException $e) {
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

printf("Inserted %d document(s)\n", $result->getInsertedCount());
printf("Updated  %d document(s)\n", $result->getModifiedCount());
?>
<form method="post" action="insurance.php">
<input type="submit" autofocus onclick="alert('Thanks for choosing us')" class="button" name="submitBtn" value="Okay" />
</form>

</html>
