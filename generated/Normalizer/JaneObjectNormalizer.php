<?php

namespace KnowBe4\Kmsat\Api\Normalizer;

use KnowBe4\Kmsat\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = array('KnowBe4\\Kmsat\\Api\\Model\\Account' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\AccountNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\AccountAdminsItem' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\AccountAdminsItemNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\Enrollment' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\EnrollmentNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\Group' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\GroupNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\PhishingCampaign' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\PhishingCampaignNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\PhishingCampaignGroupsItem' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\PhishingCampaignGroupsItemNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\PhishingCampaignPstsItem' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\PhishingCampaignPstsItemNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\Policy' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\PolicyNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\Recipient' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\RecipientNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\RecipientUser' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\RecipientUserNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\RecipientTemplate' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\RecipientTemplateNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\RiskScoreHistory' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\RiskScoreHistoryNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTest' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\SecurityTestNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTestGroupsItem' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\SecurityTestGroupsItemNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTestCategoriesItem' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\SecurityTestCategoriesItemNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTestTemplate' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\SecurityTestTemplateNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTestLandingPage' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\SecurityTestLandingPageNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\StorePurchase' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\StorePurchaseNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\TrainingCampaign' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\TrainingCampaignNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\TrainingCampaignGroupsItem' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\TrainingCampaignGroupsItemNormalizer', 'KnowBe4\\Kmsat\\Api\\Model\\User' => 'KnowBe4\\Kmsat\\Api\\Normalizer\\UserNormalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\KnowBe4\\Kmsat\\Api\\Runtime\\Normalizer\\ReferenceNormalizer'), $normalizersCache = array();
    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($object, $format, $context);
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $class, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
}