<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service\Action\Directory;

use Klevu\Logger\Exception\ConfigurationException;
use Klevu\Logger\Exception\EmptyDirectoryException;
use Klevu\Logger\Exception\InvalidDirectoryException;
use Magento\Framework\Exception\FileSystemException;

interface DownloadActionInterface
{
    /**
     * @param string $directory
     *
     * @return string|null
     * @throws ConfigurationException
     * @throws EmptyDirectoryException
     * @throws FileSystemException
     * @throws InvalidDirectoryException
     */
    public function execute(string $directory): ?string;
}
