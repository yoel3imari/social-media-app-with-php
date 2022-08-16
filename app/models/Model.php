<?php

namespace App\Models;

interface Model
{
    public function __get($prop);
    public function set(array $t);
    public function create(array $data);
    public function read(string $username, array $data);
    public function update(string $id, array $data);
    public function delete(string $id);
}
