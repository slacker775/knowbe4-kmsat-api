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
class RecipientNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'KnowBe4\\Kmsat\\Api\\Model\\Recipient';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'KnowBe4\\Kmsat\\Api\\Model\\Recipient';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \KnowBe4\Kmsat\Api\Model\Recipient();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('recipient_id', $data)) {
            $object->setRecipientId($data['recipient_id']);
        }
        if (\array_key_exists('pst_id', $data)) {
            $object->setPstId($data['pst_id']);
        }
        if (\array_key_exists('user', $data)) {
            $object->setUser($this->denormalizer->denormalize($data['user'], 'KnowBe4\\Kmsat\\Api\\Model\\RecipientUser', 'json', $context));
        }
        if (\array_key_exists('template', $data)) {
            $object->setTemplate($this->denormalizer->denormalize($data['template'], 'KnowBe4\\Kmsat\\Api\\Model\\RecipientTemplate', 'json', $context));
        }
        if (\array_key_exists('scheduled_at', $data) && $data['scheduled_at'] !== null) {
            $object->setScheduledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['scheduled_at']));
        }
        elseif (\array_key_exists('scheduled_at', $data) && $data['scheduled_at'] === null) {
            $object->setScheduledAt(null);
        }
        if (\array_key_exists('delivered_at', $data) && $data['delivered_at'] !== null) {
            $object->setDeliveredAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['delivered_at']));
        }
        elseif (\array_key_exists('delivered_at', $data) && $data['delivered_at'] === null) {
            $object->setDeliveredAt(null);
        }
        if (\array_key_exists('opened_at', $data) && $data['opened_at'] !== null) {
            $object->setOpenedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['opened_at']));
        }
        elseif (\array_key_exists('opened_at', $data) && $data['opened_at'] === null) {
            $object->setOpenedAt(null);
        }
        if (\array_key_exists('clicked_at', $data) && $data['clicked_at'] !== null) {
            $object->setClickedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['clicked_at']));
        }
        elseif (\array_key_exists('clicked_at', $data) && $data['clicked_at'] === null) {
            $object->setClickedAt(null);
        }
        if (\array_key_exists('replied_at', $data) && $data['replied_at'] !== null) {
            $object->setRepliedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['replied_at']));
        }
        elseif (\array_key_exists('replied_at', $data) && $data['replied_at'] === null) {
            $object->setRepliedAt(null);
        }
        if (\array_key_exists('attachment_opened_at', $data) && $data['attachment_opened_at'] !== null) {
            $object->setAttachmentOpenedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['attachment_opened_at']));
        }
        elseif (\array_key_exists('attachment_opened_at', $data) && $data['attachment_opened_at'] === null) {
            $object->setAttachmentOpenedAt(null);
        }
        if (\array_key_exists('macro_enabled_at', $data) && $data['macro_enabled_at'] !== null) {
            $object->setMacroEnabledAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['macro_enabled_at']));
        }
        elseif (\array_key_exists('macro_enabled_at', $data) && $data['macro_enabled_at'] === null) {
            $object->setMacroEnabledAt(null);
        }
        if (\array_key_exists('data_entered_at', $data) && $data['data_entered_at'] !== null) {
            $object->setDataEnteredAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['data_entered_at']));
        }
        elseif (\array_key_exists('data_entered_at', $data) && $data['data_entered_at'] === null) {
            $object->setDataEnteredAt(null);
        }
        if (\array_key_exists('vulnerable-plugins_at', $data) && $data['vulnerable-plugins_at'] !== null) {
            $object->setVulnerablePluginsAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['vulnerable-plugins_at']));
        }
        elseif (\array_key_exists('vulnerable-plugins_at', $data) && $data['vulnerable-plugins_at'] === null) {
            $object->setVulnerablePluginsAt(null);
        }
        if (\array_key_exists('exploited_at', $data) && $data['exploited_at'] !== null) {
            $object->setExploitedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['exploited_at']));
        }
        elseif (\array_key_exists('exploited_at', $data) && $data['exploited_at'] === null) {
            $object->setExploitedAt(null);
        }
        if (\array_key_exists('reported_at', $data) && $data['reported_at'] !== null) {
            $object->setReportedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['reported_at']));
        }
        elseif (\array_key_exists('reported_at', $data) && $data['reported_at'] === null) {
            $object->setReportedAt(null);
        }
        if (\array_key_exists('bounced_at', $data) && $data['bounced_at'] !== null) {
            $object->setBouncedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['bounced_at']));
        }
        elseif (\array_key_exists('bounced_at', $data) && $data['bounced_at'] === null) {
            $object->setBouncedAt(null);
        }
        if (\array_key_exists('ip', $data) && $data['ip'] !== null) {
            $object->setIp($data['ip']);
        }
        elseif (\array_key_exists('ip', $data) && $data['ip'] === null) {
            $object->setIp(null);
        }
        if (\array_key_exists('ip_location', $data) && $data['ip_location'] !== null) {
            $object->setIpLocation($data['ip_location']);
        }
        elseif (\array_key_exists('ip_location', $data) && $data['ip_location'] === null) {
            $object->setIpLocation(null);
        }
        if (\array_key_exists('browser', $data) && $data['browser'] !== null) {
            $object->setBrowser($data['browser']);
        }
        elseif (\array_key_exists('browser', $data) && $data['browser'] === null) {
            $object->setBrowser(null);
        }
        if (\array_key_exists('browser_version', $data) && $data['browser_version'] !== null) {
            $object->setBrowserVersion($data['browser_version']);
        }
        elseif (\array_key_exists('browser_version', $data) && $data['browser_version'] === null) {
            $object->setBrowserVersion(null);
        }
        if (\array_key_exists('os', $data) && $data['os'] !== null) {
            $object->setOs($data['os']);
        }
        elseif (\array_key_exists('os', $data) && $data['os'] === null) {
            $object->setOs(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getRecipientId()) {
            $data['recipient_id'] = $object->getRecipientId();
        }
        if (null !== $object->getPstId()) {
            $data['pst_id'] = $object->getPstId();
        }
        if (null !== $object->getUser()) {
            $data['user'] = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if (null !== $object->getTemplate()) {
            $data['template'] = $this->normalizer->normalize($object->getTemplate(), 'json', $context);
        }
        if (null !== $object->getScheduledAt()) {
            $data['scheduled_at'] = $object->getScheduledAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getDeliveredAt()) {
            $data['delivered_at'] = $object->getDeliveredAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getOpenedAt()) {
            $data['opened_at'] = $object->getOpenedAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getClickedAt()) {
            $data['clicked_at'] = $object->getClickedAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getRepliedAt()) {
            $data['replied_at'] = $object->getRepliedAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getAttachmentOpenedAt()) {
            $data['attachment_opened_at'] = $object->getAttachmentOpenedAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getMacroEnabledAt()) {
            $data['macro_enabled_at'] = $object->getMacroEnabledAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getDataEnteredAt()) {
            $data['data_entered_at'] = $object->getDataEnteredAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getVulnerablePluginsAt()) {
            $data['vulnerable-plugins_at'] = $object->getVulnerablePluginsAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getExploitedAt()) {
            $data['exploited_at'] = $object->getExploitedAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getReportedAt()) {
            $data['reported_at'] = $object->getReportedAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getBouncedAt()) {
            $data['bounced_at'] = $object->getBouncedAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getIp()) {
            $data['ip'] = $object->getIp();
        }
        if (null !== $object->getIpLocation()) {
            $data['ip_location'] = $object->getIpLocation();
        }
        if (null !== $object->getBrowser()) {
            $data['browser'] = $object->getBrowser();
        }
        if (null !== $object->getBrowserVersion()) {
            $data['browser_version'] = $object->getBrowserVersion();
        }
        if (null !== $object->getOs()) {
            $data['os'] = $object->getOs();
        }
        return $data;
    }
}