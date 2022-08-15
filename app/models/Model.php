<?php

namespace App\Models;

abstract class Model
{
    abstract public function __get($prop);
    abstract public function __set($prop, $value);
    abstract public function create(array $data);
    abstract public function read(int $id);
    abstract public function update(int $id, array $data);
    abstract public function delete(int $id);
}
