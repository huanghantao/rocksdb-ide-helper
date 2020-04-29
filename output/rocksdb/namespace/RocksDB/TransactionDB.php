<?php

namespace RocksDB;

class TransactionDB
{
    /**
     * @return TransactionDB
     */
    public function __construct()
    {
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function open(string $dbName, array $options = [], array $transactionDBOptions = [])
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
     * @throws Exception
     */
    public function put(string $key, string $value, array $writeOptions = [])
    {
    }

    /**
     * @return string
     * @throws Exception
     */
    public function get(string $key, array $readOptions = [])
    {
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function close()
    {
    }
}