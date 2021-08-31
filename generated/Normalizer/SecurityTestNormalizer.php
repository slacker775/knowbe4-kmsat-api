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
class SecurityTestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \KnowBe4\Kmsat\Api\Model\SecurityTest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('campaign_id', $data)) {
            $object->setCampaignId($data['campaign_id']);
        }
        if (\array_key_exists('pst_id', $data)) {
            $object->setPstId($data['pst_id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('groups', $data)) {
            $values = array();
            foreach ($data['groups'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTestGroupsItem', 'json', $context);
            }
            $object->setGroups($values);
        }
        if (\array_key_exists('phish_prone_percentage', $data)) {
            $object->setPhishPronePercentage($data['phish_prone_percentage']);
        }
        if (\array_key_exists('started_at', $data)) {
            $object->setStartedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['started_at']));
        }
        if (\array_key_exists('duration', $data)) {
            $object->setDuration($data['duration']);
        }
        if (\array_key_exists('categories', $data)) {
            $values_1 = array();
            foreach ($data['categories'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTestCategoriesItem', 'json', $context);
            }
            $object->setCategories($values_1);
        }
        if (\array_key_exists('template', $data)) {
            $object->setTemplate($this->denormalizer->denormalize($data['template'], 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTestTemplate', 'json', $context));
        }
        if (\array_key_exists('landing-page', $data)) {
            $object->setLandingPage($this->denormalizer->denormalize($data['landing-page'], 'KnowBe4\\Kmsat\\Api\\Model\\SecurityTestLandingPage', 'json', $context));
        }
        if (\array_key_exists('scheduled_count', $data)) {
            $object->setScheduledCount($data['scheduled_count']);
        }
        if (\array_key_exists('delivered_count', $data)) {
            $object->setDeliveredCount($data['delivered_count']);
        }
        if (\array_key_exists('opened_count', $data)) {
            $object->setOpenedCount($data['opened_count']);
        }
        if (\array_key_exists('clicked_count', $data)) {
            $object->setClickedCount($data['clicked_count']);
        }
        if (\array_key_exists('replied_count', $data)) {
            $object->setRepliedCount($data['replied_count']);
        }
        if (\array_key_exists('attachment_open_count', $data)) {
            $object->setAttachmentOpenCount($data['attachment_open_count']);
        }
        if (\array_key_exists('macro_enabled_count', $data)) {
            $object->setMacroEnabledCount($data['macro_enabled_count']);
        }
        if (\array_key_exists('data_entered_count', $data)) {
            $object->setDataEnteredCount($data['data_entered_count']);
        }
        if (\array_key_exists('vulnerable_plugin_count', $data)) {
            $object->setVulnerablePluginCount($data['vulnerable_plugin_count']);
        }
        if (\array_key_exists('exploited_count', $data)) {
            $object->setExploitedCount($data['exploited_count']);
        }
        if (\array_key_exists('reported_count', $data)) {
            $object->setReportedCount($data['reported_count']);
        }
        if (\array_key_exists('bounced_count', $data)) {
            $object->setBouncedCount($data['bounced_count']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCampaignId()) {
            $data['campaign_id'] = $object->getCampaignId();
        }
        if (null !== $object->getPstId()) {
            $data['pst_id'] = $object->getPstId();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
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
        if (null !== $object->getPhishPronePercentage()) {
            $data['phish_prone_percentage'] = $object->getPhishPronePercentage();
        }
        if (null !== $object->getStartedAt()) {
            $data['started_at'] = $object->getStartedAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getDuration()) {
            $data['duration'] = $object->getDuration();
        }
        if (null !== $object->getCategories()) {
            $values_1 = array();
            foreach ($object->getCategories() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['categories'] = $values_1;
        }
        if (null !== $object->getTemplate()) {
            $data['template'] = $this->normalizer->normalize($object->getTemplate(), 'json', $context);
        }
        if (null !== $object->getLandingPage()) {
            $data['landing-page'] = $this->normalizer->normalize($object->getLandingPage(), 'json', $context);
        }
        if (null !== $object->getScheduledCount()) {
            $data['scheduled_count'] = $object->getScheduledCount();
        }
        if (null !== $object->getDeliveredCount()) {
            $data['delivered_count'] = $object->getDeliveredCount();
        }
        if (null !== $object->getOpenedCount()) {
            $data['opened_count'] = $object->getOpenedCount();
        }
        if (null !== $object->getClickedCount()) {
            $data['clicked_count'] = $object->getClickedCount();
        }
        if (null !== $object->getRepliedCount()) {
            $data['replied_count'] = $object->getRepliedCount();
        }
        if (null !== $object->getAttachmentOpenCount()) {
            $data['attachment_open_count'] = $object->getAttachmentOpenCount();
        }
        if (null !== $object->getMacroEnabledCount()) {
            $data['macro_enabled_count'] = $object->getMacroEnabledCount();
        }
        if (null !== $object->getDataEnteredCount()) {
            $data['data_entered_count'] = $object->getDataEnteredCount();
        }
        if (null !== $object->getVulnerablePluginCount()) {
            $data['vulnerable_plugin_count'] = $object->getVulnerablePluginCount();
        }
        if (null !== $object->getExploitedCount()) {
            $data['exploited_count'] = $object->getExploitedCount();
        }
        if (null !== $object->getReportedCount()) {
            $data['reported_count'] = $object->getReportedCount();
        }
        if (null !== $object->getBouncedCount()) {
            $data['bounced_count'] = $object->getBouncedCount();
        }
        return $data;
    }
}