<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

use function fclose;
use function fopen;
use function fwrite;

/**
 *
 */
class FileOutputStream extends AbstractOutputStream
{
    /**
     *
     * @var string
     */
    protected string $file = '';

    /**
     *
     * @var resource|null
     */
    protected $handle = null;

    /**
     *
     * @var string
     */
    protected string $mode = WriteMode::MODE_OVERWRITE_CREATE;

    /**
     *
     * @param string $file
     * @param string $mode
     */
    public function __construct(string $file, string $mode = WriteMode::MODE_OVERWRITE_CREATE)
    {
        parent::__construct();
        $this->file   = $file;
        $this->mode   = $mode;
        $this->handle = null;
    }

    /**
     *
     * @return bool
     */
    public function close(): bool
    {
        return fclose($this->handle);
    }

    /**
     *
     * @return bool
     */
    public function open(): bool
    {
        if (($handle = fopen($this->file, $this->mode)) !== false) {
            $this->handle = $handle;
        }

        return (bool) $this->handle;
    }

    /**
     *
     * @param mixed $data
     * @return int
     */
    public function write($data): int
    {
        /* Try to write data */
        $result = fwrite($this->handle, $data);

        /* There was an error writing the data */
        if ($result === false) {
            return -1;
        }

        /* Successful write */
        return $result;
    }
}
