<?php

// Use in the "Post-Receive URLs" section of your GitHub repo.

//if ( $_POST['payload'] ) {
  shell_exec( 'cd /www/agrotest1 && git reset --hard HEAD && git pull origin master' );
//}

?>hi

