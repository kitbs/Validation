<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Exceptions\Locale;

use Respect\Validation\Exceptions\BankAccountException;

class GbBankAccountException extends BankAccountException
{
    public static $defaultTemplates = [
        self::MODE_DEFAULT => [
            self::STANDARD => '{{name}} must be a United Kingdom bank account',
        ],
        self::MODE_NEGATIVE => [
            self::STANDARD => '{{name}} must not be a United Kingdom bank account',
        ],
    ];
}
