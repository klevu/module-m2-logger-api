<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service\Provider;

interface ArchiveDirectoryNameProviderInterface
{
    /**
     * @return string
     */
    public function get(): string;
}
