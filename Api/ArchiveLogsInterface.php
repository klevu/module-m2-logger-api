<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Api;

use Klevu\LoggerApi\Api\Data\LogResponseInterface;

interface ArchiveLogsInterface
{
    /**
     * @param int $store
     *
     * @return \Klevu\LoggerApi\Api\Data\LogResponseInterface
     */
    public function execute(int $store): LogResponseInterface;
}
