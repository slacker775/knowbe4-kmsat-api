# KnowBe4 Training API for PHP
This library provices access to the KnowBe4 training, phishing, user and group
data.  It leverages PSR18 HTTP clients (symfony/http-client or others) to provide 
flexibility with your project.

###Really basic usage
```
$KNOWBE4_API_TOKEN = '12345';

$bearerAuth = new BearerAuthAuthentication(
$KNOWBE4_API_TOKEN
);

$httpClient = getHttpClient([new AuthenticationRegistry([$bearerAuth])]);
$apiClient = \KnowBe4\Kmsat\Api\Client::create($httpClient);

$result = $apiClient->getAccount();

function getHttpClient(array $additionalPlugins = []): PluginClient
{
    $httpClient = Psr18ClientDiscovery::find();
    $plugins = [];
    $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri(
        'https://us.api.knowbe4.com'
    );
    $plugins[] = new AddHostPlugin($uri);
    if (count($additionalPlugins) > 0) {
        $plugins = array_merge($plugins, $additionalPlugins);
    }
    return new PluginClient($httpClient, $plugins);
}
```