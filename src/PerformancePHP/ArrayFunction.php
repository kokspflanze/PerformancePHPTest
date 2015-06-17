<?php


namespace PerformancePHP;


class ArrayFunction
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

    public function functionSizeOf()
    {
        $timeStart = microtime(true);
        for ($i = 0; $i <= $this->continuous; $i++) {
            if (sizeof($this->data) > 0) {
                $bar = sizeof($this->data);
            }
        }
        $timeEnd = microtime(true);

        return $timeEnd - $timeStart;
    }

    public function functionCastBooL()
    {
        $timeStart = microtime(true);
        for ($i = 0; $i <= $this->continuous; $i++) {
            if ((bool)$this->data) {
                $bar = (bool)$this->data;
            }
        }
        $timeEnd = microtime(true);

        return $timeEnd - $timeStart;
    }

    public function functionCastNotBool()
    {
        $timeStart = microtime(true);
        for ($i = 0; $i <= $this->continuous; $i++) {
            if (!(bool)$this->data) {
                $bar = !(bool)$this->data;
            }
        }
        $timeEnd = microtime(true);

        return $timeEnd - $timeStart;
    }

    public function functionBool()
    {
        $timeStart = microtime(true);
        for ($i = 0; $i <= $this->continuous; $i++) {
            if ($this->data) {
                $bar = $this->data;
            }
        }
        $timeEnd = microtime(true);

        return $timeEnd - $timeStart;
    }

    public function functionNotBool()
    {
        $timeStart = microtime(true);
        for ($i = 0; $i <= $this->continuous; $i++) {
            if (!$this->data) {
                $bar = !$this->data;
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
                $bar = !empty($this->data);
            }
        }
        $timeEnd = microtime(true);

        return $timeEnd - $timeStart;
    }

    public function functionEmpty()
    {
        $timeStart = microtime(true);
        for ($i = 0; $i <= $this->continuous; $i++) {
            if (empty($this->data)) {
                $bar = empty($this->data);
            }
        }
        $timeEnd = microtime(true);

        return $timeEnd - $timeStart;
    }


}
