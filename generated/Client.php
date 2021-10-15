<?php

namespace KnowBe4\Kmsat\Api;

class Client extends \KnowBe4\Kmsat\Api\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\Account|\Psr\Http\Message\ResponseInterface
     */
    public function getAccount(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetAccount(), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var bool $full 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\RiskScoreHistory[]|\Psr\Http\Message\ResponseInterface
     */
    public function getAccountRiskScoreHistory(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetAccountRiskScoreHistory($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     *     @var string $status 
     *     @var int $group_id 
     *     @var string $expand 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\User[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUsers(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetUsers($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\User|\Psr\Http\Message\ResponseInterface
     */
    public function getUser(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetUser($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var bool $full 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\RiskScoreHistory[]|\Psr\Http\Message\ResponseInterface
     */
    public function getUserRiskScoreHistory(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetUserRiskScoreHistory($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     *     @var string $status 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\Group[]|\Psr\Http\Message\ResponseInterface
     */
    public function getGroups(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetGroups($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\Group|\Psr\Http\Message\ResponseInterface
     */
    public function getGroup(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetGroup($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\User[]|\Psr\Http\Message\ResponseInterface
     */
    public function getGroupMembers(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetGroupMembers($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var bool $full 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\RiskScoreHistory[]|\Psr\Http\Message\ResponseInterface
     */
    public function getGroupRiskScoreHistory(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetGroupRiskScoreHistory($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\PhishingCampaign[]|\Psr\Http\Message\ResponseInterface
     */
    public function getPhishingCampaigns(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetPhishingCampaigns($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\PhishingCampaign|\Psr\Http\Message\ResponseInterface
     */
    public function getPhishingCampaign(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetPhishingCampaign($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\SecurityTest[]|\Psr\Http\Message\ResponseInterface
     */
    public function getCampaignSecurityTests(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetCampaignSecurityTests($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\SecurityTest[]|\Psr\Http\Message\ResponseInterface
     */
    public function getPhishingSecurityTests(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetPhishingSecurityTests($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Security Test ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\SecurityTest|\Psr\Http\Message\ResponseInterface
     */
    public function getPhishingSecurityTest(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetPhishingSecurityTest($id), $fetch);
    }
    /**
     * 
     *
     * @param int $id Security Test ID
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\Recipient[]|\Psr\Http\Message\ResponseInterface
     */
    public function getPhishingSecurityTestRecipients(int $id, array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetPhishingSecurityTestRecipients($id, $queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id Security Test ID
     * @param int $recipientId Recipient ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\Recipient|\Psr\Http\Message\ResponseInterface
     */
    public function getPhishingSecurityTestRecipient(int $id, int $recipientId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetPhishingSecurityTestRecipient($id, $recipientId), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\StorePurchase[]|\Psr\Http\Message\ResponseInterface
     */
    public function getStorePurchases(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetStorePurchases($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\StorePurchase|\Psr\Http\Message\ResponseInterface
     */
    public function getStorePurchase(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetStorePurchase($id), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\Policy[]|\Psr\Http\Message\ResponseInterface
     */
    public function getTrainingPolicies(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetTrainingPolicies($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\Policy|\Psr\Http\Message\ResponseInterface
     */
    public function getTrainingPolicy(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetTrainingPolicy($id), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\TrainingCampaign[]|\Psr\Http\Message\ResponseInterface
     */
    public function getTrainingCampaigns(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetTrainingCampaigns($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\TrainingCampaign|\Psr\Http\Message\ResponseInterface
     */
    public function getTrainingCampaign(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetTrainingCampaign($id), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\Enrollment[]|\Psr\Http\Message\ResponseInterface
     */
    public function getTrainingEnrollments(array $queryParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetTrainingEnrollments($queryParameters), $fetch);
    }
    /**
     * 
     *
     * @param int $id 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\Enrollment|\Psr\Http\Message\ResponseInterface
     */
    public function getTrainingEnrollment(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \KnowBe4\Kmsat\Api\Endpoint\GetTrainingEnrollment($id), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://{region}.api.knowbe4.com');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \KnowBe4\Kmsat\Api\Normalizer\JaneObjectNormalizer()), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}