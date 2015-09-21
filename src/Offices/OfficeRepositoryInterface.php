<?php
namespace Vanbrabantf\Offices;

interface OfficeRepositoryInterface
{

    /**
     * @param string $city
     * @param bool $openInWeekends
     * @param bool $hasSupportDesk
     * @param bool $strict
     * @return array offices
     */
    public function getOfficesByLocation($city, $openInWeekends, $hasSupportDesk, $strict);
}