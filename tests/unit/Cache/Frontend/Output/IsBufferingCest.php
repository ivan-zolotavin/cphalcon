<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Cache\Frontend\Output;

use UnitTester;

class IsBufferingCest
{
    /**
     * Tests Phalcon\Cache\Frontend\Output :: isBuffering()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cacheFrontendOutputIsBuffering(UnitTester $I)
    {
        $I->wantToTest("Cache\Frontend\Output - isBuffering()");
        $I->skipTest("Need implementation");
    }
}