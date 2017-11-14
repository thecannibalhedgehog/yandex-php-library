<?php
namespace Yandex\Market\Partner\Models;

use Yandex\Common\Model;

class WorkingSchedule extends Model
{
    /**
     * @var null
     */
    protected $workInHoliday = null;

    /**
     * @var ScheduleItems|null
     */
    protected $scheduleItems = null;

    protected $mappingClasses = [
        'scheduleItems' => 'Yandex\Market\Partner\Models\ScheduleItems'
    ];

    protected $propNameMap = [];


    /**
     * @return null
     */
    public function getWorkInHoliday()
    {
        return $this->workInHoliday;
    }

    /**
     * @return ScheduleItems|null
     */
    public function getScheduleItems()
    {
        return $this->scheduleItems;
    }


}