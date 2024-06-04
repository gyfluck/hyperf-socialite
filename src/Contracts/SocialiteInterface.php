<?php

namespace Socialite\HyperfSocialite\Contracts;

use Socialite\HyperfSocialite\Two\AbstractProvider;

interface SocialiteInterface
{
    /**
     * @param string|null $driver
     * @return AbstractProvider
     */
    public function driver($driver = null);
}