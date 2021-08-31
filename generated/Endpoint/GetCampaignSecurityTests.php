<?php

namespace KnowBe4\Kmsat\Api\Endpoint;

class GetCampaignSecurityTests extends \KnowBe4\Kmsat\Api\Runtime\Client\BaseEndpoint implements \KnowBe4\Kmsat\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * 
     *
     * @param int $id 
     * @param array $queryParameters {
     *     @var int $page 
     *     @var int $per_page 
     * }
     */
    public function __construct(int $id, array $queryParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
    }
    use \KnowBe4\Kmsat\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/v1/phishing/campaigns/{id}/security_tests');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('page', 'per_page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('per_page' => 100));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\SecurityTest[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTest[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}