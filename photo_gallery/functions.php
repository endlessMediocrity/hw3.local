<?php
    function output_image($path_to_directory) {
        if (is_readable($path_to_directory)) {
            $names_image = scandir($path_to_directory);
            unset($names_image[0]);
            unset($names_image[1]);
            foreach ($names_image as &$value) {
                $value = $path_to_directory . '/' . $value;
            }
            return $names_image;
        } else {
            return false;
        }
    }