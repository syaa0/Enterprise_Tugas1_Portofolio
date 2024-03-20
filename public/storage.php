<?php

// Pastikan ini diakses oleh user yang memiliki hak akses yang tepat
// dan pertimbangkan penggunaan autentikasi atau IP whitelisting

// Perintah untuk menjalankan php artisan storage:link
$command = 'cd .. && php artisan storage:link';

// Eksekusi perintah
$output = shell_exec($command);

// Tampilkan output perintah (opsional)
echo "<pre>$output</pre>";

?>
