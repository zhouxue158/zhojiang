<?php
function show($state,$message,$data=[])
{
    return [
        'state' => intval($state),
        'message' => $message,
        'data' => $data,
    ];
}