<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service\Action\Directory;

use Klevu\Logger\Exception\InvalidDirectoryException;
use Magento\Framework\Exception\FileSystemException;

interface DeleteActionInterface
{
    /**
     * @param string $directory
     *
     * @return bool
     * @throws FileSystemException
     * @throws InvalidDirectoryException
     */
    public function execute(string $directory): bool;
}
