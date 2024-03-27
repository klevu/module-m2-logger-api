<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service\Provider;

use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Exception\NoSuchEntityException;

interface StoreLogsDirectoryPathProviderInterface
{
    /**
     * @param int $storeId
     *
     * @return string|null
     * @throws FileSystemException
     * @throws NoSuchEntityException
     */
    public function get(int $storeId): ?string;
}
