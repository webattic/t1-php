<?php


namespace MediaMath\TerminalOneAPI\Management\Targeting;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonCreateable;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;
use MediaMath\TerminalOneAPI\Infrastructure\NonUpdateable;

class StrategyRetiredTargetingSegment extends ManagementApiObject implements Endpoint
{

    use NonDeletable;
    use NonCreateable;
    use NonUpdateable;

    public function endpoint()
    {
        return 'strategies/{{strategy_id}}/retired_targeting_segments';
    }

    public function read($options = [])
    {
        $uri = str_replace('{{strategy_id}}', $options['id'], $this->uri());

        return $this->apiClient()->read($uri, $options);

    }

}