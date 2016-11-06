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

use RuntimeException;

/**
 * Interface for writeable SQL adapters.
 */
interface WriteableAdapterInterface extends ReadableAdapterInterface
{

    /**
     * Returns the ID of the last inserted row or sequence value.
     *
     * @return int The ID of the last inserted row or sequence value.
     */
    public function getLastInsertId(): int;

    /**
     * Starts a transaction.
     *
     * @throws RuntimeException If the transaction is already started.
     */
    public function startTransaction();

    /**
     * Checks whether a transaction is already started.
     *
     * @return bool Returns 'true' if a transaction is already started, otherwise 'false'.
     */
    public function inTransaction(): bool;

    /**
     * Commits the transaction.
     *
     * @throws RuntimeException If no transaction is started.
     */
    public function commitTransaction();

    /**
     * Rolls back the transaction.
     *
     * @throws RuntimeException If no transaction is started.
     */
    public function rollBackTransaction();
}

