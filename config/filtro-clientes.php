<?php
function value_input($name) {
    echo isset($_GET[$name]) ? 'value="'.$_GET[$name].'"' : NULL;
}
function value_option($name, $value) {
    echo $value;
    echo isset($_GET[$name]) && $_GET[$name] == $value ? '" selected="selected' : '';
}
function check_input($name, $value) {
    echo isset($_GET[$name]) && $_GET[$name] == $value ? ' checked="checked' : '';
}