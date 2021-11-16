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
class AccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'KnowBe4\\Kmsat\\Api\\Model\\Account';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'KnowBe4\\Kmsat\\Api\\Model\\Account';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \KnowBe4\Kmsat\Api\Model\Account();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('domains', $data)) {
            $values = array();
            foreach ($data['domains'] as $value) {
                $values[] = $value;
            }
            $object->setDomains($values);
        }
        if (\array_key_exists('admins', $data)) {
            $values_1 = array();
            foreach ($data['admins'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'KnowBe4\\Kmsat\\Api\\Model\\AccountAdminsItem', 'json', $context);
            }
            $object->setAdmins($values_1);
        }
        if (\array_key_exists('subscription_level', $data)) {
            $object->setSubscriptionLevel($data['subscription_level']);
        }
        if (\array_key_exists('subscription_end_date', $data)) {
            $object->setSubscriptionEndDate(\DateTime::createFromFormat('Y-m-d', $data['subscription_end_date'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('number_of_seats', $data)) {
            $object->setNumberOfSeats($data['number_of_seats']);
        }
        if (\array_key_exists('current_risk_score', $data)) {
            $object->setCurrentRiskScore($data['current_risk_score']);
        }
        if (\array_key_exists('risk_score_history', $data)) {
            $values_2 = array();
            foreach ($data['risk_score_history'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'KnowBe4\\Kmsat\\Api\\Model\\RiskScoreHistory', 'json', $context);
            }
            $object->setRiskScoreHistory($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getDomains()) {
            $values = array();
            foreach ($object->getDomains() as $value) {
                $values[] = $value;
            }
            $data['domains'] = $values;
        }
        if (null !== $object->getAdmins()) {
            $values_1 = array();
            foreach ($object->getAdmins() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['admins'] = $values_1;
        }
        if (null !== $object->getSubscriptionLevel()) {
            $data['subscription_level'] = $object->getSubscriptionLevel();
        }
        if (null !== $object->getSubscriptionEndDate()) {
            $data['subscription_end_date'] = $object->getSubscriptionEndDate()->format('Y-m-d');
        }
        if (null !== $object->getNumberOfSeats()) {
            $data['number_of_seats'] = $object->getNumberOfSeats();
        }
        if (null !== $object->getCurrentRiskScore()) {
            $data['current_risk_score'] = $object->getCurrentRiskScore();
        }
        if (null !== $object->getRiskScoreHistory()) {
            $values_2 = array();
            foreach ($object->getRiskScoreHistory() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['risk_score_history'] = $values_2;
        }
        return $data;
    }
}