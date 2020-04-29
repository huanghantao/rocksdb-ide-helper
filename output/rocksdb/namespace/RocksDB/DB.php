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
     * @throws Exception
     */
    public function open(string $dbName, array $options = [])
    {
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function openForReadOnly(string $dbName, array $options = [])
    {
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function openAsSecondary(string $dbName, array $options = [], string $secondaryPath = '')
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
     * @return bool
     * @throws Exception
     */
    public function write(WriteBatch $batch, array $writeOptions = [])
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
    public function del(string $key, array $writeOptions = [])
    {
    }

    /**
     * @return bool
     * @throws Exception
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
     * @throws Exception
     */
    public function close()
    {
    }

    /**
     * @return bool
     * @throws Exception
     */
    public static function destroyDB(string $dbName, array $options = [])
    {
    }
}