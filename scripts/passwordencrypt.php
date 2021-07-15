<?php
    /**
     * Encrypt a password and print the password hash
     * 
     * Arguments:
     *  - password: the password to encrypt
     */
    echo password_hash($argv[1], PASSWORD_DEFAULT);
    echo chr(10); // line break 
?>