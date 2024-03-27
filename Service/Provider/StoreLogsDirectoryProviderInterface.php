<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service\Provider;

use Klevu\Logger\Exception\InvalidDirectoryException;

interface StoreLogsDirectoryProviderInterface
{
    /**
     * @param string $directory
     *
     * @return mixed[]
     * @throws InvalidDirectoryException
     */
    public function getLogs(string $directory): array;

    /**
     * @param int $storeId
     *
     * @return bool
     */
    public function hasLogs(int $storeId): bool;

    /**
     * @param string $directory
     *
     * @return string[][]
     */
    public function getLogsWithFileSize(string $directory): array;
}
