<?php
namespace dimsog\arrayhelper;

class Fluent
{
    private $array;


    /**
     * Fluent constructor.
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    /**
     * @see ArrayHelper::toInt()
     * @param array $keys
     * @return $this
     */
    public function toInt(array $keys = [])
    {
        $this->array = ArrayHelper::toInt($this->array, $keys);
        return $this;
    }

    /**
     * @see ArrayHelper::camelCaseKeys()
     * @return $this
     */
    public function camelCaseKeys()
    {
        $this->array = ArrayHelper::camelCaseKeys($this->array);
        return $this;
    }

    /**
     * @see ArrayHelper::replaceKey()
     * @param $oldKey
     * @param $newKey
     * @return $this
     */
    public function replaceKey($oldKey, $newKey)
    {
        ArrayHelper::replaceKey($oldKey, $newKey, $this->array);
        return $this;
    }

    /**
     * @see ArrayHelper::getValue()
     * @param $key
     * @param null|mixed $defaultValue
     * @return mixed
     */
    public function getValue($key, $defaultValue = null)
    {
        return ArrayHelper::getValue($this->array, $key, $defaultValue);
    }

    /**
     * @see ArrayHelper::isMulti()
     * @param bool $strongCheck
     * @return bool
     */
    public function isMulti($strongCheck = false)
    {
        return ArrayHelper::isMulti($this->array, $strongCheck);
    }

    /**
     * @see ArrayHelper::paginate()
     * @param $page
     * @param $limit
     * @return $this
     */
    public function paginate($page, $limit)
    {
        $this->array = ArrayHelper::paginate($this->array, $page, $limit);
        return $this;
    }

    /**
     * @see ArrayHelper::shuffle()
     * @return $this
     */
    public function shuffle()
    {
        $this->array = ArrayHelper::shuffle($this->array);
        return $this;
    }

    /**
     * @see ArrayHelper::random()
     * @param int $count
     * @return $this
     */
    public function random($count = 1)
    {
        $this->array = ArrayHelper::random($this->array, $count);
        return $this;
    }

    /**
     * @see ArrayHelper::isAssoc()
     * @return bool
     */
    public function isAssoc()
    {
        return ArrayHelper::isAssoc($this->array);
    }

    /**
     * @see ArrayHelper::only()
     * @param array $keys
     * @return $this
     */
    public function only(array $keys)
    {
        $this->array = ArrayHelper::only($this->array, $keys);
        return $this;
    }

    /**
     * @see ArrayHelper::except()
     * @param array $keys
     * @return $this
     */
    public function except(array $keys)
    {
        $this->array = ArrayHelper::except($this->array, $keys);
        return $this;
    }

    /**
     * @see ArrayHelper::column()
     * @param $key
     * @return $this
     */
    public function column($key)
    {
        $this->array = ArrayHelper::column($this->array, $key);
        return $this;
    }

    /**
     * @see ArrayHelper::filter()
     * @param $condition
     * @param bool $preserveKeys
     * @return $this
     */
    public function filter($condition, $preserveKeys = false)
    {
        $this->array = ArrayHelper::filter($this->array, $condition, $preserveKeys);
        return $this;
    }

    /**
     * @see ArrayHelper::reindex()
     * @return $this
     */
    public function reindex()
    {
        $this->array = ArrayHelper::reindex($this->array);
        return $this;
    }

    /**
     * @see ArrayHelper::insert()
     * @param $key
     * @param null $value
     * @return $this
     */
    public function insert($key, $value = null)
    {
        ArrayHelper::insert($this->array, $key, $value);
        return $this;
    }

    /**
     * @see ArrayHelper::keyValue()
     * @param string $keyField
     * @param string $valueField
     * @return $this
     */
    public function keyValue($keyField = 'key', $valueField = 'value')
    {
        $this->array = ArrayHelper::keyValue($this->array, $keyField, $valueField);
        return $this;
    }

    /**
     * @see ArrayHelper::collapse()
     * @return $this
     */
    public function collapse()
    {
        $this->array = ArrayHelper::collapse($this->array);
        return $this;
    }

    /**
     * @see ArrayHelper::values()
     * @return $this
     */
    public function values()
    {
        $this->array = ArrayHelper::values($this->array);
        return $this;
    }

    /**
     * @see ArrayHelper::sum()
     * @param $key
     * @return int|mixed
     */
    public function sum($key)
    {
        return ArrayHelper::sum($this->array, $key);
    }

    /**
     * Return a result array
     * @return array
     */
    public function get()
    {
        return $this->array;
    }
}