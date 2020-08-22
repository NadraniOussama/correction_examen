<?php
session_start();
if (!isset($_SESSION['USER'])) {include "autantification.php" ; exit()}