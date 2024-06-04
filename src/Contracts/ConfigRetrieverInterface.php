<?php

namespace Socialite\HyperfSocialite\Contracts;

interface ConfigRetrieverInterface
{
    /**
     * @param string $providerName
     * @param array  $additionalConfigKeys
     *
     * @return ConfigInterface
     */
    public function fromServices($providerName, array $additionalConfigKeys = []);
}