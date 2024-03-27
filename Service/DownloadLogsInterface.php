<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service;

use Klevu\Logger\Exception\NoLogsException;
use Klevu\Logger\Exception\SizeExceedsLimitException;
use Magento\Framework\Exception\LocalizedException;

interface DownloadLogsInterface
{
    /**
     * @param int $storeId
     *
     * @return string|null
     * @throws LocalizedException
     * @throws NoLogsException
     * @throws SizeExceedsLimitException
     */
    public function execute(int $storeId): ?string;
}
