<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Service;

interface FileNameSanitizerServiceInterface
{
    /**
     * @param string $fileName
     *
     * @return string
     */
    public function execute(string $fileName): string;
}
