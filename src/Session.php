<?php

class Session {

public function __construct() {
  session_start();

  if($_SESSION['user_id'] == session_id()) {

  session_regenerate_id();
  } 

  if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 120)) {
    $this->destroy();
} 

public function destroy() {
  session_unset();

  session_destroy();
} } 
