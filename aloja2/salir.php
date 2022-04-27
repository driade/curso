<?php
session_start();

unset($_SESSION['fid']); // también session_dstroy()

header("Location: index.php?success=1", true, 302);
