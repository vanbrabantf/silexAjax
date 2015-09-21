<?php
namespace Vanbrabantf\Offices;

class EloquentOfficeRepository implements OfficeRepositoryInterface
{
    /**
     * @var \Geocoder\Provider\GoogleMaps
     */
    private $geocoder;

    /**
     * @param \Geocoder\Provider\GoogleMaps $geocoder
     */
    public function __construct($geocoder)
    {
        $this->geocoder = $geocoder;
    }

    /**
     * @param string $city
     * @param bool $openInWeekends
     * @param bool $hasSupportDesk
     * @param bool $strict
     * @return array offices
     */
    public function getOfficesByLocation($city, $openInWeekends, $hasSupportDesk, $strict)
    {
        $offices = Office::query();

        if(filter_var($openInWeekends, FILTER_VALIDATE_BOOLEAN)) {
            $offices->where('is_open_in_weekends', '=', 'Y');
        }

        if(filter_var($hasSupportDesk, FILTER_VALIDATE_BOOLEAN)) {
            $offices->where('has_support_desk', '=', 'Y');
        }

        if(! filter_var($strict, FILTER_VALIDATE_BOOLEAN)) {
            $bounds = $this->geocoder->geocode($city)->first()->getBounds();

            $offices->where('latitude', '<', $bounds->getNorth());
            $offices->where('latitude', '>', $bounds->getSouth());
            $offices->where('longitude', '<', $bounds->getEast());
            $offices->where('longitude', '>', $bounds->getWest());

        } else {
            $offices->where('city', '=', $city);
        }

        return $offices->get();
    }
}