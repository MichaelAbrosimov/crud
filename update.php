<?php

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['created_at']) && isset($_POST['id'])) {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=crud", "root", "root");
    $sql = "UPDATE article SET name = :name, description = :description, created_at = :created_at WHERE id = :id";

    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindValue(":name", $name);
    $pdo_statement->bindValue(":description", $description);
    $pdo_statement->bindValue(":created_at", $created_at);
    $pdo_statement->bindValue(":id", $id);

    $result = $pdo_statement->execute();
}
$datetime = date("Y-m-d H:i:s", time());

?>
<form action="update.php" method="post">
    <input type="text" name="name" required>
    <input type="text" name="description" required>
    <input type="text" name="created_at" required value="<?php echo $datetime; ?>">
    <input type="hidden" name="id" value="<?php echo $id ?>" >
    <input type="submit">
</form>
