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
use Respect\Validation\Rules\AbstractRule;

/**
 * Validates a United Kingdom bank account.
 *
 * This validator depends on the composer package "cs278/bank-modulus".
 *
 * @author Chris Smith <chris@cs278.org>
 *
 * @see    BankModulus::check()
 */
class GbBankAccount extends AbstractGbBank
{
    /**
     * @var string
     */
    public $bank;

    /**
     * @param BankModulus $modulus
     */
    public function __construct($bank, $normalize = true, BankModulus $modulus = null)
    {
        parent::__construct($normalize, $modulus);
        $this->bank = $bank;
    }

    /**
     * @return bool
     */
    public function validate($input)
    {
        $bank = $this->bank;

        if ($this->normalize) {
            $this->modulus->normalize($bank, $input);
        }

        return $this->modulus->check($bank, $input);
    }
}
