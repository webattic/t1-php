<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class Publisher extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonUpdateable;

    public function endpoint()
    {
        return 'publishers';
    }

}