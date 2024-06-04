<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Socialite\HyperfSocialite;

use Socialite\HyperfSocialite\Contracts\SocialiteInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                SocialiteInterface::class => SocialiteManager::class,
            ],
            'commands'     => [
            ],
            'annotations'  => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish'      => [
                [
                    'id'          => 'config',
                    'description' => 'socialite config files.', // 描述
                    'source'      => __DIR__ . '/../publish/socialite.php',  // 对应的配置文件路径
                    'destination' => BASE_PATH . '/config/autoload/socialite.php', // 复制为这个路径下的该文件
                ],
            ],
        ];
    }
}
