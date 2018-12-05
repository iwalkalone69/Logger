# Logger

Class to log to console.

It has support for Codeception Debug class (autodetected in constructor).

# Usage

$logger = new \iwalkalone69\Logger();

$logger->consoleLog($message, $color, $timestamp, $endline);

# Parameters

$message - message that will be displayed in console

$color - color of the message displayed (default green)

$timestamp - it defines if timestamp is displayed before the message (default true)

$endline - it defines if adding endline to the end of message (default true)
