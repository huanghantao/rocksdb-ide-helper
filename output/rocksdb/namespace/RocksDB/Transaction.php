<?php

namespace RocksDB;

class Transaction
{
    /**
     * @return bool
     * @throws Exception
     */
    public function put(string $key, string $value)
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
     * @throws Exception
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