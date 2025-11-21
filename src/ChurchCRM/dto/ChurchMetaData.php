<?php

namespace ChurchCRM\dto;

use ChurchCRM\Utils\GeoUtils;

class ChurchMetaData
{
    public static function getChurchName()
    {
        return SystemConfig::getValue('sTempleName');
    }

    public static function getChurchFullAddress(): string
    {
        $address = [];
        if (!empty(self::getChurchAddress())) {
            $address[] = self::getChurchAddress();
        }

        if (!empty(self::getChurchCity())) {
            $address[] = self::getChurchCity() . ',';
        }

        if (!empty(self::getChurchState())) {
            $address[] = self::getChurchState();
        }

        if (!empty(self::getChurchZip())) {
            $address[] = self::getChurchZip();
        }
        if (!empty(self::getChurchCountry())) {
            $address[] = self::getChurchCountry();
        }

        return implode(' ', $address);
    }

    public static function getChurchAddress()
    {
        return SystemConfig::getValue('sTempleAddress');
    }

    public static function getChurchCity()
    {
        return SystemConfig::getValue('sTempleCity');
    }

    public static function getChurchState()
    {
        return SystemConfig::getValue('sTempleState');
    }

    public static function getChurchZip()
    {
        return SystemConfig::getValue('sTempleZip');
    }

    public static function getChurchCountry()
    {
        return SystemConfig::getValue('sTempleCountry');
    }

    public static function getChurchEmail()
    {
        return SystemConfig::getValue('sTempleEmail');
    }

    public static function getChurchPhone()
    {
        return SystemConfig::getValue('sTemplePhone');
    }

    public static function getChurchWebSite()
    {
        return SystemConfig::getValue('sTempleWebSite');
    }

    public static function getChurchLatitude()
    {
        if (empty(SystemConfig::getValue('iTempleLatitude'))) {
            self::updateLatLng();
        }

        return SystemConfig::getValue('iTempleLatitude');
    }

    public static function getChurchLongitude()
    {
        if (empty(SystemConfig::getValue('iTempleLongitude'))) {
            self::updateLatLng();
        }

        return SystemConfig::getValue('iTempleLongitude');
    }

    public static function getChurchTimeZone()
    {
        return SystemConfig::getValue('sTimeZone');
    }

    private static function updateLatLng(): void
    {
        if (!empty(self::getChurchFullAddress())) {
            $latLng = GeoUtils::getLatLong(self::getChurchFullAddress());
            if (!empty($latLng['Latitude']) && !empty($latLng['Longitude'])) {
                SystemConfig::setValue('iTempleLatitude', $latLng['Latitude']);
                SystemConfig::setValue('iTempleLongitude', $latLng['Longitude']);
            }
        }
    }
}
