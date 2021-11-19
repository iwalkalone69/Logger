<?php

namespace iwalkalone;

class Logger
{
    protected $codeception = false;

    public function consoleLog($s_message, $color = 'green', $timestamp = true, $endline = true)
    {
        $start = "\033[";
        $end = "\033[0m\n";
        $bash_color = '0;32';
        $colors = array(
            'green' => '0;32',
            'red' => '0;31',
            'yellow' => '0;33',
            'blue' => '0;34',
            'purple' => '0;35',
            'black' => '0;30',
            'white' => '0;28',
        );
        if (isset($colors[$color])) {
            $bash_color = $colors[$color];
        }
        if ($timestamp) {
            $msg = $start . $bash_color . 'm' . date('H:i:s ') . $s_message;
            echo $msg;
        } else {
            $msg = $start . $bash_color . 'm' . $s_message;
            echo $msg;
        }
        if ($endline) echo $end;
    }
}
