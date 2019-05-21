<?php session_start(); ?>
<html>
<?php
$mongo = new \MongoDB\Driver\Manager('mongodb://localhost:27017');
$bulk = new MongoDB\Driver\BulkWrite(['ordered' => true]);


$temp = [
  'Patient Attended' => $_POST["patientattended"],
  'Category' => $_POST["Category"],
  'Hospital Name' => $_POST["hospital_name"],
   'Requirement' => $_POST["requirement"]
];
$bulk->insert($temp);

$manager = new \MongoDB\Driver\Manager('mongodb://127.0.0.1:27017');

$query = new \MongoDB\Driver\Query(['createIndex' => ['email_id' => 1]], []);
$manager->executeQuery('hospital.doctor', $query);


$writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);

try {
    $result = $manager->executeBulkWrite('hospital.doctor', $bulk, $writeConcern);
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
echo "\n Number of tupples inserted is equal to \t";

echo count($temp);
echo "<br>";

$filter      = [];
$options = ['projection' => ['Requirement' => 1]];

$query = new \MongoDB\Driver\Query($filter, $options);
$cursor = $mongo->executeQuery('hospital.doctor', $query)->toArray();
echo "No. of document inserted till date";
var_dump(count($cursor));
echo "<br>";

foreach($cursor as $document) {
    print_r($document);
echo "<br>";
}

?>



<form method="post" action="Requirement.php" autocomplete="on" style="background-color:white;">
<input type="submit" class="button" name="submitBtn" value="Okay"/>
</form>
</html>
