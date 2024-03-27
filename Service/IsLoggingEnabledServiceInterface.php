<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service;

use Magento\Store\Api\Data\StoreInterface;

interface IsLoggingEnabledServiceInterface
{
    /**
     * @param int $logLevel
     * @param StoreInterface $store
     *
     * @return bool
     */
    public function execute(int $logLevel, StoreInterface $store): bool;
}
