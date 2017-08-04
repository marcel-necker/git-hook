<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace GitHook\Command;

interface CommandResultInterface
{

    /**
     * @param string $message
     *
     * @return \GitHook\Command\CommandResultInterface
     */
    public function setMessage($message);

    /**
     * @return string
     */
    public function getMessage();

    /**
     * @param string $error
     *
     * @return \GitHook\Command\CommandResultInterface
     */
    public function setError($error);

    /**
     * @return string
     */
    public function getError();

    /**
     * @return bool
     */
    public function isSuccess();

}
