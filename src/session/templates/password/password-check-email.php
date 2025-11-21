<?php

use ChurchCRM\dto\SystemConfig;
use ChurchCRM\dto\SystemURLs;

$sPageTitle = gettext("Family Registration");
require(SystemURLs::getDocumentRoot() . "/Include/HeaderNotLoggedIn.php");
?>

    <div class="register-box" style="width: 600px;">
        <div class="register-logo">
            <?php
            $headerHTML = '<b>UnityConnect</b>CRM';
            $sHeader = SystemConfig::getValue("sHeader");
            $sTempleName = SystemConfig::getValue("sTempleName");
            if (!empty($sHeader)) {
                $headerHTML = html_entity_decode($sHeader, ENT_QUOTES);
            } else if (!empty($sTempleName)) {
                $headerHTML = $sTempleName;
            }
            ?>
            <a href="<?= SystemURLs::getRootPath() ?>/"><?= $headerHTML ?></a>
        </div>

        <div class="register-box-body">
            <?= gettext("A new password was sent to you. Please check your email"); ?>
        </div>
    </div>
<?php
require(SystemURLs::getDocumentRoot() . "/Include/FooterNotLoggedIn.php");
