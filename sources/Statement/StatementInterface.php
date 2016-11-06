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
namespace Nia\Sql\Adapter\Statement;

use IteratorAggregate;
use OutOfBoundsException;
use RuntimeException;

/**
 * Interface for prepared statement implementations.
 */
interface StatementInterface extends IteratorAggregate
{

    /**
     * Passed value for bind represents a value from type string.
     *
     * @var int
     */
    const TYPE_STRING = 0;

    /**
     * Passed value for bind represents a value from type int.
     *
     * @var int
     */
    const TYPE_INT = 1;

    /**
     * Passed value for bind represents a value from type decimal.
     *
     * @var int
     */
    const TYPE_DECIMAL = 2;

    /**
     * Passed value for bind represents a value from type bool.
     *
     * @var int
     */
    const TYPE_BOOL = 3;

    /**
     * Passed value for bind represents a value from type large object data.
     *
     * @var int
     */
    const TYPE_BINARY = 4;

    /**
     * Passed value for bind represents a value from type NULL.
     *
     * @var int
     */
    const TYPE_NULL = 5;

    /**
     * Returns the used SQL statement.
     *
     * @return string The used SQL statement.
     */
    public function getSqlStatement(): string;

    /**
     * Binds a value to a placeholder.
     *
     * @param string $name
     *            Placeholder name (alternativly the placeholder position).
     * @param mixed $value
     *            The value to bind.
     * @param int $type
     *            Explicit data type for the parameter using the Nia\Sql\Adapter\Statement\StatementInterface::TYPE_* constants. Default is string data type.
     */
    public function bind(string $name, $value, int $type = null);

    /**
     * Executes the prepared statement.
     *
     * @throws RuntimeException If the statement cannot be executed.
     */
    public function execute();

    /**
     * Returns the number of rows affected.
     *
     * @return int The number of rows affected.
     */
    public function getNumRowsAffected(): int;

    /**
     * Fetches the next row as a map.
     *
     * @throws OutOfBoundsException If no row could be found.
     * @return string[] The next row as a map.
     */
    public function fetch(): array;

    /**
     * Returns a list of maps containing the row data.
     *
     * Notice: Using this method to fetch a large amount of data will result decrease your application performance and a heavy usage of your system and database memory. To fetch large amount of data use the getIterator() method.
     *
     * @return mixed[] List of maps containing the row data.
     */
    public function fetchAll(): array;
}

