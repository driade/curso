<?php
session_start();

unset($_SESSION['fid']); // también session_destroy()

header("Location: index.php?success=1", true, 302);
