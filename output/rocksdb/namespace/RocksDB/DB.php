<?php

namespace RocksDB;

use RocksDB\WriteBatch;

class DB
{

    /**
     * @return DB
     */
    public function __construct(
        string $dbName,
        array $options = [],
        int $mode = 0,
        string $secondaryPath = ''
    )
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