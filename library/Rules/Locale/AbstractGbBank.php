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

use Cs278\BankModulus\BankModulus;
use Respect\Validation\Exceptions\ComponentException;

use Respect\Validation\Rules\AbstractRule;

/**
 * Validates a United Kingdom bank account.
 *
 * This validator depends on the composer package "cs278/bank-modulus".
 *
 * @author Chris Smith <chris@cs278.org>
 *
 * @see    BankModulus
 */
abstract class AbstractGbBank extends AbstractRule
{
    /**
     * @var bool
     */
    public $normalize;

    /**
     * @var BankModulus
     */
    public $modulus;

    /**
     * @param BankModulus $modulus
     */
    public function __construct($normalize = true, BankModulus $modulus = null)
    {
        if (null === $modulus) {
            $modulus = new BankModulus();
        }
        $this->modulus = $modulus;
        $this->normalize = $normalize;
    }
}
