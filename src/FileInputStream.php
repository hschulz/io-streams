<?php

declare(strict_types=1);

namespace Hschulz\IOStreams;

use Hschulz\IOStreams\AbstractInputStream;
use Hschulz\IOStreams\ReadMode;
use function fclose;
use function fopen;
use function fread;

/**
 *
 */
class FileInputStream extends AbstractInputStream
{
    /**
     *
     * @var string
     */
    protected string $mode = ReadMode::MODE_READ_BINARY;

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
     * @param string $file
     * @param string $mode
     */
    public function __construct(string $file, string $mode = ReadMode::MODE_READ_BINARY)
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
        return $this->handle !== null ? fclose($this->handle) : true;
    }

    /**
     *
     * @return bool
     */
    public function open(): bool
    {
        if ($this->file === '') {
            return false;
        }

        if (($handle = fopen($this->file, $this->mode)) !== false) {
            $this->handle = $handle;
        }

        return (bool) $this->handle;
    }

    /**
     * @return string
     */
    public function read(): string
    {
        /* In case the handle is unset */
        if ($this->handle === null) {
            return '';
        }

        /* Try to read input */
        $result = fread($this->handle, filesize($this->file));

        /* There was an error reading the input */
        if (!$result) {
            return '';
        }

        /* Successful read */
        return $result;
    }
}
