<?php
namespace InterNations\Component\Solr\Expression;

use InterNations\Component\Solr\ExpressionInterface;

/**
 * Base class for expressions
 *
 * The base class for query expressions provides methods to escape and quote query strings as well being the object to
 * create literal queries which should not be escaped
 */
class Expression implements ExpressionInterface
{
    /**
     * Expression object or string
     *
     * @var Expression|string
     */
    protected $expr;

    /**
     * Create new expression object
     *
     * @param Expression|string $expr
     */
    public function __construct($expr)
    {
        $this->expr = $expr;
    }

    /**
     * Returns true if given expression is equal
     *
     * @param Expression|string $expr
     * @return boolean
     */
    public function isEqual($expr)
    {
        return (string) $expr === (string) $this;
    }

    /**
     * Return string representation
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->expr;
    }
}
