<?php

class RocksDB
{

    /**
     * @return RocksDB
     */
    public function __construct(
        string $dbName,
        array $options,
        array $readOptions,
        array $writeOptions,
        int $mode = 0,
        int $ttl = 0,
        string $secondaryPath = ''
    )
    {
    }

    /**
     * @return bool
     */
    public function put(string $key, string $value)
    {
    }

    /**
     * @return string
     */
    public function get(string $key)
    {
    }

    /**
     * @return bool
     */
    public function del(string $key)
    {
    }

    /**
     * @return bool
     */
    public function deleteRange(string $beginKey)
    {
    }

    /**
     * @return RocksDB\Iterator
     */
    public function newIterator(string $beginKey)
    {
    }
}