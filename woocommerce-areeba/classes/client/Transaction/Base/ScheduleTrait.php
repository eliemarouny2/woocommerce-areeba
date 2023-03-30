<?php

namespace AreebaWoocommerceGateway\Client\Transaction\Base;

use AreebaWoocommerceGateway\Client\Schedule\ScheduleData;

/**
 * Trait ScheduleTrait
 *
 * @package AreebaWoocommerceGateway\Client\Transaction\Base
 */
trait ScheduleTrait {

    /**
     * @var ScheduleData
     */
    protected $schedule;

    /**
     * @return ScheduleData|null
     */
    public function getSchedule() {
        return $this->schedule;
    }

    /**
     * @param ScheduleData|null $schedule
     *
     * @return $this
     */
    public function setSchedule(ScheduleData $schedule = null) {
        $this->schedule = $schedule;

        return $this;
    }

}
