<?php

namespace MediaMath\TerminalOneAPI\Infrastructure;

abstract class ManagementApiObject extends ApiObject
{

    abstract protected function endpoint();

    public function uri()
    {
        return 'https://api.mediamath.com/api/v2.0/' . $this->endpoint();
    }

}