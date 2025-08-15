<?php
require 'db.php';

if (isset($_GET['id'])) {
    $unique_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM visitors WHERE unique_id = ?");
    $stmt->bind_param("s", $unique_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        echo "<table>
                <tr><th>Fullname:</th><td>{$row['fullname']}</td></tr>
                <tr><th>Contact:</th><td>{$row['contact']}</td></tr>
                <tr><th>School:</th><td>{$row['school']}</td></tr>
                <tr><th>Date of Visit:</th><td>{$row['visit_date']}</td></tr>
                <tr><th>Time of Visit:</th><td>{$row['visit_time']}</td></tr>
                <tr><th>Purpose:</th><td>{$row['purpose']}</td></tr>
              </table>";
    } else {
        echo "Visitor not found.";x
    }
} else {
    echo "Invalid request.";
}
?>
