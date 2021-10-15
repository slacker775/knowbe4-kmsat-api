<?php

namespace KnowBe4\Kmsat\Api\Endpoint;

class GetUsers extends \KnowBe4\Kmsat\Api\Runtime\Client\BaseEndpoint implements \KnowBe4\Kmsat\Api\Runtime\Client\Endpoint
{
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
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \KnowBe4\Kmsat\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/v1/users';
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
        $optionsResolver->setDefined(array('page', 'per_page', 'status', 'group_id', 'expand'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('per_page' => 100));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('per_page', array('int'));
        $optionsResolver->setAllowedTypes('status', array('string'));
        $optionsResolver->setAllowedTypes('group_id', array('int'));
        $optionsResolver->setAllowedTypes('expand', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\KnowBe4\Kmsat\Api\Model\User[]
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'KnowBe4\\Kmsat\\Api\\Model\\User[]', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('bearerAuth');
    }
}