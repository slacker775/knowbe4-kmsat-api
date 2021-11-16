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
class GroupNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'KnowBe4\\Kmsat\\Api\\Model\\Group';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'KnowBe4\\Kmsat\\Api\\Model\\Group';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \KnowBe4\Kmsat\Api\Model\Group();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('group_type', $data)) {
            $object->setGroupType($data['group_type']);
        }
        if (\array_key_exists('adi_guid', $data) && $data['adi_guid'] !== null) {
            $object->setAdiGuid($data['adi_guid']);
        }
        elseif (\array_key_exists('adi_guid', $data) && $data['adi_guid'] === null) {
            $object->setAdiGuid(null);
        }
        if (\array_key_exists('member_count', $data)) {
            $object->setMemberCount($data['member_count']);
        }
        if (\array_key_exists('current_risk_score', $data)) {
            $object->setCurrentRiskScore($data['current_risk_score']);
        }
        if (\array_key_exists('risk_score_history', $data)) {
            $values = array();
            foreach ($data['risk_score_history'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'KnowBe4\\Kmsat\\Api\\Model\\RiskScoreHistory', 'json', $context);
            }
            $object->setRiskScoreHistory($values);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getGroupType()) {
            $data['group_type'] = $object->getGroupType();
        }
        if (null !== $object->getAdiGuid()) {
            $data['adi_guid'] = $object->getAdiGuid();
        }
        if (null !== $object->getMemberCount()) {
            $data['member_count'] = $object->getMemberCount();
        }
        if (null !== $object->getCurrentRiskScore()) {
            $data['current_risk_score'] = $object->getCurrentRiskScore();
        }
        if (null !== $object->getRiskScoreHistory()) {
            $values = array();
            foreach ($object->getRiskScoreHistory() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['risk_score_history'] = $values;
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        return $data;
    }
}