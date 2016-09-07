<?php
function flash($message, $level = "Info")
{

    Session::flash('flash_message', $message);
    Session::flash('flash_message_level', $level);
}    