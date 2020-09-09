<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

use Hschulz\IOStreams\FileOutputStream;

/**
 *
 */
class StdOutputStream extends FileOutputStream
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct('php://stdout');
    }
}
