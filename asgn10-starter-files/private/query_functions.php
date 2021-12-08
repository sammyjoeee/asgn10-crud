<?php

function find_all_salamanders() {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function insert_salamander($salamanders) {
    global $db;

    $sql = "INSERT INTO salamanders ";
    $sql .= "(name, habitat, description) ";
    $sql .= "VALUES (";
    $sql .= "'" . $salamanders['name'] . "',";
    $sql .= "'" . $salamanders['habitat'] . "',";
    $sql .= "'" . $salamanders['description'] . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  function update_salamander($salamanders) {
    global $db;

    $sql = "UPDATE salamanders SET ";
    $sql .= "name='" . $salamanders['name'] . "', ";
    $sql .= "habitat='" . $salamanders['habitat'] . "', ";
    $sql .= "description='" . $salamanders['description'] . "' ";
    $sql .= "WHERE id='" . $salamanders['id'] . "' ";
    $sql .= "LIMIT 1";

    $result = mysqli_query($db, $sql);
    // For UPDATE statements, $result is true/false

    if ($result) {
        redirect_to(url_for('/salamanders'));
       } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit();
       }

  }

  function delete_salamander($id) {
    global $db;

    $sql = "DELETE FROM salamanders ";
    $sql .= "WHERE id='" . $id . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }