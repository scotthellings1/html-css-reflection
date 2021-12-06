<?php

/**
 * Get environment variables
 * @param $variable
 * @return mixed
 */
function env($variable) {
    return $_ENV["$variable"];
}
