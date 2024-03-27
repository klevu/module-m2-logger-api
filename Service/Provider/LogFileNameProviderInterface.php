<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service\Provider;

interface LogFileNameProviderInterface
{
    /**
     * @param int $storeId
     *
     * @return string
     */
    public function get(int $storeId): string;
}
