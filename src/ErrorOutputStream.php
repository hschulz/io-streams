<?php

namespace hschulz\IOStreams;

/**
 *
 */
class ErrorOutputStream extends FileOutputStream
{

    /**
     *
     */
    public function __construct()
    {
        parent::__construct('php://stderr');
    }
}
