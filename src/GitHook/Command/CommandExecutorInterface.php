<?php

/**
 * Copyright © 2017-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace GitHook\Command;

use GitHook\Command\Context\CommandContextInterface;

interface CommandExecutorInterface
{

    /**
     * @param \GitHook\Command\Context\CommandContextInterface $context
     *
     * @return bool
     */
    public function execute(CommandContextInterface $context);

}
