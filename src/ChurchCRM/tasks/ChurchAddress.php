<?php

namespace ChurchCRM\Tasks;

use ChurchCRM\Authentication\AuthenticationManager;
use ChurchCRM\dto\SystemConfig;
use ChurchCRM\dto\SystemURLs;

class ChurchAddress implements TaskInterface
{
    public function isActive(): bool
    {
        return AuthenticationManager::getCurrentUser()->isAdmin() && empty(SystemConfig::getValue('sTempleAddress'));
    }

    public function isAdmin(): bool
    {
        return true;
    }

    public function getLink(): string
    {
        return SystemURLs::getRootPath() . '/SystemSettings.php';
    }

    public function getTitle(): string
    {
        return gettext('Set Temple/TrustAddress');
    }

    public function getDesc(): string
    {
        return gettext('Temple/TrustAddress is not Set.');
    }
}
