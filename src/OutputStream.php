<?php

namespace hschulz\IOStreams;

/**
 *
 */
interface OutputStream {

    /**
     *
     * @return bool
     */
    public function open(): bool;

    /**
     *
     * @param mixed $data
     * @return int
     */
    public function write($data): int;

    /**
     *
     * @return void
     */
    public function close(): bool;
}
