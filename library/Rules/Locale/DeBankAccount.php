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

use malkusch\bav\BAV;
use Respect\Validation\Rules\AbstractRule;

/**
 * Validates a German bank account.
 *
 * This validator depends on the composer package "malkusch/bav".
 *
 * @author Markus Malkusch <markus@malkusch.de>
 *
 * @see    BAV::isValidBankAccount()
 */
class DeBankAccount extends AbstractDeBank
{
    /**
     * @var string
     */
    public $bank;

    /**
     * @param BAV $bav
     */
    public function __construct($bank, BAV $bav = null)
    {
        parent::__construct($bav);
        $this->bank = $bank;
    }

    /**
     * @return bool
     */
    public function validate($input)
    {
        return $this->bav->isValidBankAccount($this->bank, $input);
    }
}