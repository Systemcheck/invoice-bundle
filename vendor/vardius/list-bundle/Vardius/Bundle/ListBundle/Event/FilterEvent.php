<?php
/**
 * This file is part of the vardius/list-bundle package.
 *
 * (c) Rafał Lorenz <vardius@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vardius\Bundle\ListBundle\Event;

use Doctrine\ORM\QueryBuilder;

/**
 * FilterEvent
 *
 * @author Rafał Lorenz <vardius@gmail.com>
 */
class FilterEvent
{
    /** @var QueryBuilder */
    protected $queryBuilder;
    /** @var string */
    protected $alias;
    /** @var string */
    protected $field;
    /** @var string */
    protected $value;

    /**
     * FilterEvent constructor.
     * @param QueryBuilder $queryBuilder
     * @param string $alias
     * @param string $field
     * @param string $value
     */
    public function __construct(QueryBuilder $queryBuilder, $alias, $field, $value)
    {
        $this->queryBuilder = $queryBuilder;
        $this->alias = $alias;
        $this->field = $field;
        $this->value = $value;
    }

    /**
     * @return QueryBuilder
     */
    public function getQueryBuilder()
    {
        return $this->queryBuilder;
    }

    /**
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

}
