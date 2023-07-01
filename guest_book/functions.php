<?php
    function read_file($path) {
        if (is_readable($path)) {
            return file($path, FILE_IGNORE_NEW_LINES);
        } else {
            return false;
        }
    }

    function input_data($path) {
        if (is_readable($path)) {
            $fh = fopen($path, 'a');
            fwrite($fh, ' Имя: ' . $_POST['user_name'] . ' Номер: ' . $_POST['phone_number'] . ' Пароль: ' . $_POST['password'] . "\n");
            fclose($fh);
        }
    }