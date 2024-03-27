<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Api\Data;

use Magento\Framework\Phrase;

interface LogResponseInterface
{
    /**
     * @return int
     */
    public function getCode(): int;

    /**
     * @param int $code
     *
     * @return void
     */
    public function setCode(int $code): void;

    /**
     * @return string|null
     */
    public function getMessage(): ?string;

    /**
     * @param Phrase|null $message
     *
     * @return void
     */
    public function setMessage(?Phrase $message): void;

    /**
     * @return string
     */
    public function getStatus(): string;

    /**
     * @param string $status
     *
     * @return void
     */
    public function setStatus(string $status): void;
}
