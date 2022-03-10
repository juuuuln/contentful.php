<?php

namespace Contentful\Delivery;

use Contentful\Core\Api\BaseQuery;
use Contentful\Core\Resource\ResourceArray;

interface QueryPoolInterface
{
    /**
     * Saves the given query into the pool.
     *
     * @throws \RuntimeException If the saving process fails
     *
     * @return bool True is the query was successfully added, false if it was already present
     */
    public function save(?BaseQuery $query, ResourceArray $entries): bool;

    public function get(?BaseQuery $query): ResourceArray;

    public function has(?BaseQuery $query): bool;

    public function generateKey(?BaseQuery $query): string;
}
