<?php
/*
 * This file is part of the nia framework.
 *
 * (c) Patrick Ullmann <patrick.ullmann@nat-software.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types = 1);
namespace Nia\Sql\Adapter;

use Nia\Sql\Adapter\Statement\StatementInterface;
use RuntimeException;

/**
 * Interface for readable SQL adapters.
 */
interface ReadableAdapterInterface
{

    /**
     * Prepares a given SQL statement for execution and returns a statement object.
     *
     * @param string $sql
     *            The SQL statement to prepare for execution.
     * @throws RuntimeException If the adapter cannot successfully prepare the statement.
     * @return StatementInterface The prepared statement.
     */
    public function prepare(string $sql): StatementInterface;
}

