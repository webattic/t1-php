<?php


namespace MediaMath\TerminalOneAPI\Reporting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class PostalCode extends ReportingApiObject implements Endpoint
{

    use NonDeletable;
    use NonUpdateable;
    use NonCreateable;

    public function endpoint()
    {
        return 'postal_code';
    }

}