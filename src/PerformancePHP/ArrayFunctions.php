<?php


namespace PerformancePHP;


class ArrayFunctions
{
    /**
     * @var int
     */
    protected $continuous = 1000000;

    /**
     * @var array
     */
    protected $data = array(
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
        'foo',
    );

    public function functionCount()
    {
        $timeStart = microtime(true);
        for ($i = 0; $i <= $this->continuous; $i++) {
            if (count($this->data) > 0) {

            }
        }
        $timeEnd = microtime(true);

        return $timeEnd - $timeStart;
    }

    public function functionCastBool()
    {
        $timeStart = microtime(true);
        for ($i = 0; $i <= $this->continuous; $i++) {
            if ((bool)$this->data) {

            }
        }
        $timeEnd = microtime(true);

        return $timeEnd - $timeStart;
    }

    public function functionNotEmpty()
    {
        $timeStart = microtime(true);
        for ($i = 0; $i <= $this->continuous; $i++) {
            if (!empty($this->data)) {

            }
        }
        $timeEnd = microtime(true);

        return $timeEnd - $timeStart;
    }

}