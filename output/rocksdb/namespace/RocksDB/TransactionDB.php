<?php

namespace RocksDB;

class TransactionDB
{
    /**
     * @return TransactionDB
     */
    public function __construct(
        string $dbName,
        array $options = [],
        array $transactionDBOptions = []
    )
    {
    }

    /**
     * @return Transaction
     */
    public function beginTransaction(array $writeOptions = [], array $transactionOptions = [])
    {
    }

    /**
     * @return bool
     */
    public function put(string $key, string $value, array $writeOptions = [])
    {
    }

    /**
     * @return string
     */
    public function get(string $key, array $readOptions = [])
    {
    }

    /**
     * @return bool
     */
    public function close()
    {
    }
}