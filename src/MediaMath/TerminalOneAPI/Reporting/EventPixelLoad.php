<?php


namespace MediaMath\TerminalOneAPI\Reporting;


use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;
use MediaMath\TerminalOneAPI\Infrastructure\ReportingApiObject;

/**
 * Class EventPixelLoad
 * @package MediaMath\TerminalOneAPI\Reporting
 */
class EventPixelLoad extends ReportingApiObject implements Endpoint
{

    use NonCreateable;
    use NonDeletable;
    use NonUpdateable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'event_pixel_loads';
    }

}