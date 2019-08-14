<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Rules\Locale;

use InvalidArgumentException;

use Cs278\BankModulus\SortCode;
use Cs278\BankModulus\Exception\SortCodeInvalidException;

/**
 * Validates a United Kingdom bank account.
 *
 * This validator depends on the composer package "cs278/bank-modulus".
 *
 * @author Chris Smith <chris@cs278.org>
 *
 * @see    SortCode::create()
 */
class GbBank extends AbstractGbBank
{
    /**
     * @return bool
     */
    public function validate($input)
    {
        try {
            $sortCode = SortCode::create($input);
        }
        catch (SortCodeInvalidException $e) {
            return false;
        }
        catch (InvalidArgumentException $e) {
            return false;
        }

        return true;
    }
}
