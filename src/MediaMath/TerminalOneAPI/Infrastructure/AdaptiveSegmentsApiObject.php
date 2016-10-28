<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

/**
 * Class ManagementApiObject
 * @package MediaMath\TerminalOneAPI\Infrastructure
 */
abstract class AdaptiveSegmentsApiObject extends ApiObject
{

    /**
     * @return mixed
     */
    abstract protected function endpoint();

    /**
     * @return string
     */
    public function uri()
    {
        return ApiHost::T1_ADAPTIVE_SEGMENTS . $this->endpoint();
    }

}