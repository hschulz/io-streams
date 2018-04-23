<?php

namespace hschulz\IOStreams;

class StdOutputStream extends FileOutputStream
{
    public function __construct()
    {
        parent::__construct('php://stdout');
    }
}
