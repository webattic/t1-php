<?php


namespace MediaMath\TerminalOneAPI\Management;

use MediaMath\TerminalOneAPI\Infrastructure\Endpoint;
use MediaMath\TerminalOneAPI\Infrastructure\ManagementApiObject;
use MediaMath\TerminalOneAPI\Infrastructure\NonDeletable;

/**
 * Class AtomicCreative
 * @package MediaMath\TerminalOneAPI\Management
 */
class AtomicCreative extends ManagementApiObject implements Endpoint
{

    use NonDeletable;

    /**
     * @return string
     */
    public function endpoint()
    {
        return 'atomic_creatives';
    }

    /**
     * @return string
     */
    public function resetEditedTag()
    {

        $uri = $this->uri() . '/' . $this->options['id'] . '/reset_edited_tag';
        unset($this->options['id']);

        return $uri;


    }

}