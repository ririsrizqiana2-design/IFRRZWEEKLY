function query($query){
    global $connection;
    $result = mysqli_query($connection, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rowrs[] = $row;
    }
    return $rows;
}