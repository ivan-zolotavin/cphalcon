<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Database\DM\Pdo\Connection;

use DatabaseTester;
use Phalcon\DM\Pdo\Connection;
use Phalcon\Test\Fixtures\Migrations\InvoicesMigration;

class FetchGroupCest
{
    /**
     * Database Tests Phalcon\DM\Pdo\Connection :: fetchGroup()
     *
     * @since  2020-01-25
     */
    public function dMPdoConnectionFetchGroup(DatabaseTester $I)
    {
        $I->wantToTest('DM\Pdo\Connection - fetchGroup()');

        /** @var Connection $connection */
        $connection = $I->getDMConnection();
        $migration  = new InvoicesMigration($connection);
        $migration->clear();

        $result = $migration->insert(1);
        $I->assertEquals(1, $result);
        $result = $migration->insert(2);
        $I->assertEquals(1, $result);
        $result = $migration->insert(3);
        $I->assertEquals(1, $result);
        $result = $migration->insert(4);
        $I->assertEquals(1, $result);

        $all = $connection->fetchGroup(
            'SELECT inv_status_flag, inv_id, inv_total from co_invoices'
        );

        $I->assertEquals(2, $all[0][0]['inv_id']);
        $I->assertEquals(4, $all[0][1]['inv_id']);
        $I->assertEquals(1, $all[1][0]['inv_id']);
        $I->assertEquals(3, $all[1][1]['inv_id']);
    }
}