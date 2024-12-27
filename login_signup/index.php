<?php
include 'db_connection.php';

$sql = "SELECT * FROM ten_bang"; 
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['ten'] . "</td>
                <td>" . $row['email'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Không có dữ liệu!";
}

// Đóng kết nối
$conn->close();
?>
