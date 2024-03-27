<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\LoggerApi\Validator;

use Magento\Framework\Validator\ValidatorInterface;

interface LogValidatorInterface extends ValidatorInterface
{
    /**
     * @param mixed $value
     *
     * @return bool
     */
    public function isValid(mixed $value): bool;

    /**
     * Return type emitted due to compatibility with \Magento\Framework\Validator\AbstractValidator::hasMessages
     * @return bool
     */
    public function hasMessages(); //phpcs:ignore SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint
}
