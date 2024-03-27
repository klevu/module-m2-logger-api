<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service\Action\Directory;

use Klevu\Logger\Exception\EmptyDirectoryException;
use Klevu\Logger\Exception\InvalidArchiverException;
use Klevu\Logger\Exception\InvalidDirectoryException;
use Klevu\Logger\Exception\InvalidFileExtensionException;
use Magento\Framework\Exception\FileSystemException;

interface ArchiveActionInterface
{
    /**
     * @param string $directory
     * @param string $archiveDirectory
     *
     * @return string
     * @throws EmptyDirectoryException
     * @throws FileSystemException
     * @throws InvalidArchiverException
     * @throws InvalidDirectoryException
     * @throws InvalidFileExtensionException
     */
    public function execute(string $directory, string $archiveDirectory): string;
}
