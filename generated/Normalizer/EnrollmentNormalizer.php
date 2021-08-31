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
class EnrollmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'KnowBe4\\Kmsat\\Api\\Model\\Enrollment';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'KnowBe4\\Kmsat\\Api\\Model\\Enrollment';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \KnowBe4\Kmsat\Api\Model\Enrollment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enrollment_id', $data)) {
            $object->setEnrollmentId($data['enrollment_id']);
        }
        if (\array_key_exists('content_type', $data)) {
            $object->setContentType($data['content_type']);
        }
        if (\array_key_exists('module_name', $data)) {
            $object->setModuleName($data['module_name']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'KnowBe4\\Kmsat\\Api\\Model\\User', 'json', $context));
        }
        if (\array_key_exists('campaign_name', $data)) {
            $object->setCampaignName($data['campaign_name']);
        }
        if (\array_key_exists('enrollment_date', $data) && $data['enrollment_date'] !== null) {
            $object->setEnrollmentDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['enrollment_date']));
        }
        elseif (\array_key_exists('enrollment_date', $data) && $data['enrollment_date'] === null) {
            $object->setEnrollmentDate(null);
        }
        if (\array_key_exists('start_date', $data) && $data['start_date'] !== null) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['start_date']));
        }
        elseif (\array_key_exists('start_date', $data) && $data['start_date'] === null) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('completion_date', $data) && $data['completion_date'] !== null) {
            $object->setCompletionDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['completion_date']));
        }
        elseif (\array_key_exists('completion_date', $data) && $data['completion_date'] === null) {
            $object->setCompletionDate(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('time_spent', $data)) {
            $object->setTimeSpent($data['time_spent']);
        }
        if (\array_key_exists('policy_acknowledged', $data)) {
            $object->setPolicyAcknowledged($data['policy_acknowledged']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getEnrollmentId()) {
            $data['enrollment_id'] = $object->getEnrollmentId();
        }
        if (null !== $object->getContentType()) {
            $data['content_type'] = $object->getContentType();
        }
        if (null !== $object->getModuleName()) {
            $data['module_name'] = $object->getModuleName();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if (null !== $object->getCampaignName()) {
            $data['campaign_name'] = $object->getCampaignName();
        }
        if (null !== $object->getEnrollmentDate()) {
            $data['enrollment_date'] = $object->getEnrollmentDate()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getStartDate()) {
            $data['start_date'] = $object->getStartDate()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getCompletionDate()) {
            $data['completion_date'] = $object->getCompletionDate()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getTimeSpent()) {
            $data['time_spent'] = $object->getTimeSpent();
        }
        if (null !== $object->getPolicyAcknowledged()) {
            $data['policy_acknowledged'] = $object->getPolicyAcknowledged();
        }
        return $data;
    }
}