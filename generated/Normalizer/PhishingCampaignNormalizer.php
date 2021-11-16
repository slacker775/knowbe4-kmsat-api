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
class PhishingCampaignNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'KnowBe4\\Kmsat\\Api\\Model\\PhishingCampaign';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'KnowBe4\\Kmsat\\Api\\Model\\PhishingCampaign';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \KnowBe4\Kmsat\Api\Model\PhishingCampaign();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('campaign_id', $data)) {
            $object->setCampaignId($data['campaign_id']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('groups', $data)) {
            $values = array();
            foreach ($data['groups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'KnowBe4\\Kmsat\\Api\\Model\\PhishingCampaignGroupsItem', 'json', $context);
            }
            $object->setGroups($values);
        }
        if (\array_key_exists('last_phish_prone_percentage', $data)) {
            $object->setLastPhishPronePercentage($data['last_phish_prone_percentage']);
        }
        if (\array_key_exists('last_run', $data)) {
            $object->setLastRun(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['last_run']));
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('hidden', $data)) {
            $object->setHidden($data['hidden']);
        }
        if (\array_key_exists('send_duration', $data)) {
            $object->setSendDuration($data['send_duration']);
        }
        if (\array_key_exists('track_duration', $data)) {
            $object->setTrackDuration($data['track_duration']);
        }
        if (\array_key_exists('frequency', $data)) {
            $object->setFrequency($data['frequency']);
        }
        if (\array_key_exists('difficulty_filter', $data)) {
            $values_1 = array();
            foreach ($data['difficulty_filter'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setDifficultyFilter($values_1);
        }
        if (\array_key_exists('create_date', $data)) {
            $object->setCreateDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['create_date']));
        }
        if (\array_key_exists('psts_count', $data)) {
            $object->setPstsCount($data['psts_count']);
        }
        if (\array_key_exists('psts', $data)) {
            $values_2 = array();
            foreach ($data['psts'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'KnowBe4\\Kmsat\\Api\\Model\\PhishingCampaignPstsItem', 'json', $context);
            }
            $object->setPsts($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCampaignId()) {
            $data['campaign_id'] = $object->getCampaignId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getGroups()) {
            $values = array();
            foreach ($object->getGroups() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['groups'] = $values;
        }
        if (null !== $object->getLastPhishPronePercentage()) {
            $data['last_phish_prone_percentage'] = $object->getLastPhishPronePercentage();
        }
        if (null !== $object->getLastRun()) {
            $data['last_run'] = $object->getLastRun()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getHidden()) {
            $data['hidden'] = $object->getHidden();
        }
        if (null !== $object->getSendDuration()) {
            $data['send_duration'] = $object->getSendDuration();
        }
        if (null !== $object->getTrackDuration()) {
            $data['track_duration'] = $object->getTrackDuration();
        }
        if (null !== $object->getFrequency()) {
            $data['frequency'] = $object->getFrequency();
        }
        if (null !== $object->getDifficultyFilter()) {
            $values_1 = array();
            foreach ($object->getDifficultyFilter() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['difficulty_filter'] = $values_1;
        }
        if (null !== $object->getCreateDate()) {
            $data['create_date'] = $object->getCreateDate()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getPstsCount()) {
            $data['psts_count'] = $object->getPstsCount();
        }
        if (null !== $object->getPsts()) {
            $values_2 = array();
            foreach ($object->getPsts() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['psts'] = $values_2;
        }
        return $data;
    }
}