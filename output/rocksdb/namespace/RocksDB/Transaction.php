<?php

namespace RocksDB;

class Transaction
{
    /**
     * @return bool
     */
    public function put(string $key, string $value)
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
    public function commit()
    {
    }

    /**
     * @return Snapshot
     */
    public function getSnapshot()
    {
    }

    /**
     * @return bool
     */
    public function rollback()
    {
    }

    /**
     * @return bool
     */
    public function setSnapshot()
    {
    }

    /**
     * @return bool
     */
    public function setSavePoint()
    {
    }
}