<?php

$hash = '$2y$10$QwErTyUiOpAsDfGhJkL...';  

// tes password yang kamu mau pakai
if (password_verify("12345", $hash)) {
    echo "Cocok";
} else {
    echo "Tidak cocok";
}
?>
