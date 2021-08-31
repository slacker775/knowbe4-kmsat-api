<?php

namespace KnowBe4\Kmsat\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use KnowBe4\Kmsat\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TrainingCampaignNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'KnowBe4\\Kmsat\\Api\\Model\\TrainingCampaign';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'KnowBe4\\Kmsat\\Api\\Model\\TrainingCampaign';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \KnowBe4\Kmsat\Api\Model\TrainingCampaign();
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
                $values[] = $this->denormalizer->denormalize($value, 'KnowBe4\\Kmsat\\Api\\Model\\TrainingCampaignGroupsItem', 'json', $context);
            }
            $object->setGroups($values);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('modules', $data)) {
            $values_1 = array();
            foreach ($data['modules'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setModules($values_1);
        }
        if (\array_key_exists('content', $data)) {
            $values_2 = array();
            foreach ($data['content'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setContent($values_2);
        }
        if (\array_key_exists('duration_type', $data)) {
            $object->setDurationType($data['duration_type']);
        }
        if (\array_key_exists('start_date', $data) && $data['start_date'] !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['start_date']));
        }
        elseif (\array_key_exists('start_date', $data) && $data['start_date'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('end_date', $data) && $data['end_date'] !== null) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['end_date']));
        }
        elseif (\array_key_exists('end_date', $data) && $data['end_date'] === null) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('relative_duration', $data) && $data['relative_duration'] !== null) {
            $object->setRelativeDuration($data['relative_duration']);
        }
        elseif (\array_key_exists('relative_duration', $data) && $data['relative_duration'] === null) {
            $object->setRelativeDuration(null);
        }
        if (\array_key_exists('auto_enroll', $data)) {
            $object->setAutoEnroll($data['auto_enroll']);
        }
        if (\array_key_exists('allow_multiple_enrollments', $data)) {
            $object->setAllowMultipleEnrollments($data['allow_multiple_enrollments']);
        }
        if (\array_key_exists('completion_percentage', $data)) {
            $object->setCompletionPercentage($data['completion_percentage']);
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
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getModules()) {
            $values_1 = array();
            foreach ($object->getModules() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['modules'] = $values_1;
        }
        if (null !== $object->getContent()) {
            $values_2 = array();
            foreach ($object->getContent() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['content'] = $values_2;
        }
        if (null !== $object->getDurationType()) {
            $data['duration_type'] = $object->getDurationType();
        }
        if (null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getEndDate()) {
            $data['end_date'] = $object->getEndDate()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getRelativeDuration()) {
            $data['relative_duration'] = $object->getRelativeDuration();
        }
        if (null !== $object->getAutoEnroll()) {
            $data['auto_enroll'] = $object->getAutoEnroll();
        }
        if (null !== $object->getAllowMultipleEnrollments()) {
            $data['allow_multiple_enrollments'] = $object->getAllowMultipleEnrollments();
        }
        if (null !== $object->getCompletionPercentage()) {
            $data['completion_percentage'] = $object->getCompletionPercentage();
        }
        return $data;
    }
}