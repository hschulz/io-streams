<?php

namespace hschulz\IOStreams;

/**
 *
 */
interface WriteModes {

    /**
     *
     */
    const MODE_OVERWRITE_CREATE = 'w';

    /**
     *
     */
    const MODE_OVERWRITE_CREATE_BINARY = 'wb';

    /**
     *
     */
    const MODE_OVERWRITE_NOCREATE = 'x';

    /**
     *
     */
    const MODE_OVERWRITE_NOCREATE_BINARY = 'xb';

    /**
     *
     */
    const MODE_APPEND_CREATE = 'a';

    /**
     *
     */
    const MODE_APPEND_CREATE_BINARY = 'ab';
}
