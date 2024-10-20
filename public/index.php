<?php

// echo "Hello World!";
if(isset($_SERVER['PATH_INFO'])) {
    echo $_SERVER['PATH_INFO'];
} else {
    echo "No path info";
}