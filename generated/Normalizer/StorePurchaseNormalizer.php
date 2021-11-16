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
class StorePurchaseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'KnowBe4\\Kmsat\\Api\\Model\\StorePurchase';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'KnowBe4\\Kmsat\\Api\\Model\\StorePurchase';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \KnowBe4\Kmsat\Api\Model\StorePurchase();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('store_purchase_id', $data)) {
            $object->setStorePurchaseId($data['store_purchase_id']);
        }
        if (\array_key_exists('content_type', $data)) {
            $object->setContentType($data['content_type']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('duration', $data) && $data['duration'] !== null) {
            $object->setDuration($data['duration']);
        }
        elseif (\array_key_exists('duration', $data) && $data['duration'] === null) {
            $object->setDuration(null);
        }
        if (\array_key_exists('retired', $data)) {
            $object->setRetired($data['retired']);
        }
        if (\array_key_exists('retirement_date', $data) && $data['retirement_date'] !== null) {
            $object->setRetirementDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['retirement_date']));
        }
        elseif (\array_key_exists('retirement_date', $data) && $data['retirement_date'] === null) {
            $object->setRetirementDate(null);
        }
        if (\array_key_exists('publish_date', $data) && $data['publish_date'] !== null) {
            $object->setPublishDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['publish_date']));
        }
        elseif (\array_key_exists('publish_date', $data) && $data['publish_date'] === null) {
            $object->setPublishDate(null);
        }
        if (\array_key_exists('publisher', $data) && $data['publisher'] !== null) {
            $object->setPublisher($data['publisher']);
        }
        elseif (\array_key_exists('publisher', $data) && $data['publisher'] === null) {
            $object->setPublisher(null);
        }
        if (\array_key_exists('purchase_date', $data)) {
            $object->setPurchaseDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['purchase_date']));
        }
        if (\array_key_exists('policy_urL', $data) && $data['policy_urL'] !== null) {
            $object->setPolicyUrL($data['policy_urL']);
        }
        elseif (\array_key_exists('policy_urL', $data) && $data['policy_urL'] === null) {
            $object->setPolicyUrL(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getStorePurchaseId()) {
            $data['store_purchase_id'] = $object->getStorePurchaseId();
        }
        if (null !== $object->getContentType()) {
            $data['content_type'] = $object->getContentType();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        if (null !== $object->getRetired()) {
            $data['retired'] = $object->getRetired();
        }
        if (null !== $object->getRetirementDate()) {
            $data['retirement_date'] = $object->getRetirementDate()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getPublishDate()) {
            $data['publish_date'] = $object->getPublishDate()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getPublisher()) {
            $data['publisher'] = $object->getPublisher();
        }
        if (null !== $object->getPurchaseDate()) {
            $data['purchase_date'] = $object->getPurchaseDate()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getPolicyUrL()) {
            $data['policy_urL'] = $object->getPolicyUrL();
        }
        return $data;
    }
}