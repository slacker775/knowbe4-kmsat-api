<?php

namespace KnowBe4\Kmsat\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use KnowBe4\Kmsat\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PhishingCampaignPstsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'KnowBe4\\Kmsat\\Api\\Model\\PhishingCampaignPstsItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'KnowBe4\\Kmsat\\Api\\Model\\PhishingCampaignPstsItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \KnowBe4\Kmsat\Api\Model\PhishingCampaignPstsItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('pst_id', $data)) {
            $object->setPstId($data['pst_id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('start_date', $data)) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['start_date']));
        }
        if (\array_key_exists('users_count', $data)) {
            $object->setUsersCount($data['users_count']);
        }
        if (\array_key_exists('phish_prone_percentage', $data)) {
            $object->setPhishPronePercentage($data['phish_prone_percentage']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getPstId()) {
            $data['pst_id'] = $object->getPstId();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getUsersCount()) {
            $data['users_count'] = $object->getUsersCount();
        }
        if (null !== $object->getPhishPronePercentage()) {
            $data['phish_prone_percentage'] = $object->getPhishPronePercentage();
        }
        return $data;
    }
}