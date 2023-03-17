<?php
$conn = mysqli_connect("localhost", "root", "", "dkel");

function query( $query ) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $kotaks = [];
    while( $kotak = mysqli_fetch_assoc($result)) {
        $kotaks[] = $kotak;
    }
    return $kotaks;
}

function delet($id){
    global $conn;
    $delete = "DELETE FROM ank WHERE id = $id";
    mysqli_query( $conn, $delete );

    return mysqli_affected_rows ($conn);
}
?>