<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service;

use Klevu\Logger\Exception\EmptyDirectoryException;
use Klevu\Logger\Exception\InvalidArchiverException;
use Klevu\Logger\Exception\InvalidDirectoryException;
use Klevu\Logger\Exception\InvalidFileExtensionException;
use Klevu\Logger\Exception\InvalidFilePathException;
use Klevu\Logger\Exception\NoLogsException;
use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Exception\NoSuchEntityException;

interface ArchiveLogsInterface
{
    /**
     * @param int $storeId
     *
     * @return string
     * @throws EmptyDirectoryException
     * @throws FileSystemException
     * @throws InvalidArchiverException
     * @throws InvalidDirectoryException
     * @throws InvalidFileExtensionException
     * @throws InvalidFilePathException
     * @throws NoLogsException
     * @throws NoSuchEntityException
     */
    public function execute(int $storeId): string;
}
