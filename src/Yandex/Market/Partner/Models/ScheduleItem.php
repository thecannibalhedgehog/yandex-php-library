<?php
namespace Yandex\Market\Partner\Models;


use Yandex\Common\Model;

class ScheduleItem extends Model
{
    /**
     * @var string|null
     */
    protected $startDay = null;

    /**
     * @var string|null
     */
    protected $endDay = null;

    /**
     * @var string|null
     */
    protected $startTime = null;

    /**
     * @var string|null
     */
    protected $endTime = null;

    public function getStartDay()
    {
        return $this->startDay;
    }

    public function getEndDay()
    {
        return $this->endDay;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }
}