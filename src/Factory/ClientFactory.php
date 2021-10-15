<?php declare(strict_types=1);

namespace KnowBe4\Kmsat\Api\Factory;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Jane\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use KnowBe4\Kmsat\Api\Authentication\BearerAuthAuthentication;
use KnowBe4\Kmsat\Api\Client;

class ClientFactory
{

    public static function create($httpClient, string $token,
        string $region = 'us', array $additionalPlugins = []
    ): Client {
        $url = str_replace(
            ['{region}'], [$region], 'https://{region}.api.knowbe4.com'
        );
        $plugins = [
            new AddHostPlugin(
                Psr17FactoryDiscovery::findUriFactory()->createUri($url)
            ),
            new AuthenticationRegistry([
                new BearerAuthAuthentication(
                    $token
                ),
            ]),
        ];

        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }

        $httpClient = new PluginClient($httpClient, $plugins);

        return Client::create($httpClient);
    }

}