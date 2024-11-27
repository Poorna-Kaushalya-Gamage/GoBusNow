<?php
        // Create connection
        $con = new mysqli('localhost','root','','bsbs');
        // Check connection
        if (!$con) {
          echo "Connection Successfully";
        }
?>