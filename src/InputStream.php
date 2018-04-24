<?php

namespace hschulz\IOStreams;

interface InputStream
{
    /**
     * @return bool
     */
    public function open(): bool;

    /**
     * @return mixed
     */
    public function read();

    /**
     * @return bool
     */
    public function close(): bool;
}
