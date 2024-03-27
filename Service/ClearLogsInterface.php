<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service;

use Klevu\Logger\Exception\InvalidDirectoryException;
use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Exception\NoSuchEntityException;

interface ClearLogsInterface
{
    /**
     * @param int $storeId
     *
     * @return bool
     * @throws FileSystemException
     * @throws InvalidDirectoryException
     * @throws NoSuchEntityException
     */
    public function execute(int $storeId): bool;
}
