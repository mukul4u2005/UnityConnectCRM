<?php

namespace ChurchCRM\Emails\users;

class LockedEmail extends BaseUserEmail
{
    protected function getSubSubject(): string
    {
        return gettext('Account Locked');
    }

    protected function buildMessageBody(): string
    {
        return gettext('Your UnityConnectCRM account was locked.');
    }
}
