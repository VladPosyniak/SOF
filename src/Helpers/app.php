<?php

function redirect($url, $message = null)
{
    if (isset($message)) {
        $_SESSION['message'] = $message;
    }
    header('Location:' . $url);
}

//получение одноразового сообщения
function getFlashSession()
{
    $message = isset($_SESSION['message']) ? $_SESSION['message'] : null;

    if (isset($message)) {
        unset($_SESSION['message']);
    }

    return $message;
}
