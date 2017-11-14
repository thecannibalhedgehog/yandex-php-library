<?php

namespace Yandex\Market\Partner\Models;

use Yandex\Common\Model;

class DeliveryRule extends Model
{
    /**
     * @var float|null
     */
    protected $cost = null;

    /**
     * @var integer|null
     */
    protected $deliveryServiceId = null;

    /**
     * @var integer|null
     */
    protected $maxDeliveryDays = null;

    /**
     * @var integer|null
     */
    protected $minDeliveryDays = null;

    /**
     * @var integer|null
     */
    protected $orderBefore = null;

    /**
     * @var float|null
     */
    protected $priceFreePickup = null;

    /**
     * @var boolean|null
     */
    protected $unspecifiedDeliveryInterval = null;

    /**
     * @var integer|null
     */
    protected $dateSwitchHour = null;

    /**
     * @var float|null
     */
    protected $priceFrom = null;

    /**
     * @var float|null
     */
    protected $priceTo = null;

    /**
     * @var string|null
     */
    protected $shipperHumanReadableId = null;

    /**
     * @var integer|null
     */
    protected $shipperId = null;

    /**
     * @var string|null
     */
    protected $shipperName = null;

    /**
     * @var boolean|null
     */
    protected $workInHoliday = null;

    protected $mappingClasses = [
    ];

    protected $propNameMap = [];

    /**
     * @return float|null
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @return int|null
     */
    public function getDeliveryServiceId()
    {
        return $this->deliveryServiceId;
    }

    /**
     * @return int|null
     */
    public function getDateSwitchHour()
    {
        return $this->dateSwitchHour;
    }

    /**
     * @return int|null
     */
    public function getMinDeliveryDays()
    {
        return $this->minDeliveryDays;
    }

    /**
     * @return int|null
     */
    public function getMaxDeliveryDays()
    {
        return $this->maxDeliveryDays;
    }

    /**
     * @return int|null
     */
    protected function getOrderBefore() {
        return $this->orderBefore;
    }

    /**
     * @return float|null
     */
    protected function getPriceFreePickup() {
        return $this->priceFreePickup;
    }

    /**
     * @return bool|null
     */
    public function getUnspecifiedDeliveryInterval()
    {
        return $this->unspecifiedDeliveryInterval;
    }

    /**
     * @return float|null
     */
    public function getPriceFrom()
    {
        return $this->priceFrom;
    }

    /**
     * @return float|null
     */
    public function getPriceTo()
    {
        return $this->priceTo;
    }

    /**
     * @return null|string
     */
    public function getShipperHumanReadableId()
    {
        return $this->shipperHumanReadableId;
    }

    /**
     * @return int|null
     */
    public function getShipperId()
    {
        return $this->shipperId;
    }

    /**
     * @return null|string
     */
    public function getShipperName()
    {
        return $this->shipperName;
    }

    /**
     * @return bool|null
     */
    public function getWorkInHoliday()
    {
        return $this->workInHoliday;
    }
}
