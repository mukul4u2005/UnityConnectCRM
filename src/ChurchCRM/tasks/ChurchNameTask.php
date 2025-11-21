<?php

namespace ChurchCRM\Tasks;

use ChurchCRM\Authentication\AuthenticationManager;
use ChurchCRM\dto\SystemConfig;
use ChurchCRM\dto\SystemURLs;

class ChurchNameTask implements TaskInterface
{
    public function isActive(): bool
    {
        return AuthenticationManager::getCurrentUser()->isAdmin() && SystemConfig::getValue('sTempleName') == 'Some Church';
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
        return gettext('Update Temple/TrustInfo');
    }

    public function getDesc(): string
    {
        return gettext('Temple/TrustName is set to default value');
    }
}
