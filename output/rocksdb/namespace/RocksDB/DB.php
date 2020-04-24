<?php

namespace RocksDB;

use RocksDB\WriteBatch;

class DB
{

    /**
     * @return DB
     */
    public function __construct()
    {
    }

    /**
     * @return bool
     */
    public function open(string $dbName, array $options = [])
    {
    }

    /**
     * @return bool
     */
    public function openForReadOnly(string $dbName, array $options = [])
    {
    }

    /**
     * @return bool
     */
    public function openAsSecondary(string $dbName, array $options = [], string $secondaryPath = '')
    {
    }

    /**
     * @return bool
     */
    public function put(string $key, string $value, array $writeOptions = [])
    {
    }

    /**
     * @return bool
     */
    public function write(WriteBatch $batch, array $writeOptions = [])
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
    public function del(string $key, array $writeOptions = [])
    {
    }

    /**
     * @return bool
     */
    public function deleteRange(string $beginKey, string $endKey, array $writeOptions = [])
    {
    }

    /**
     * @return Iterator
     */
    public function newIterator(string $beginKey, array $readOptions = [])
    {
    }

    /**
     * @return bool
     */
    public function close()
    {
    }

    /**
     * @return bool
     */
    public static function destroyDB(string $dbName, array $options = [])
    {
    }
}