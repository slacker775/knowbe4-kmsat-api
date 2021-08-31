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
class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'KnowBe4\\Kmsat\\Api\\Model\\User';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'KnowBe4\\Kmsat\\Api\\Model\\User';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \KnowBe4\Kmsat\Api\Model\User();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('employee_number', $data) && $data['employee_number'] !== null) {
            $object->setEmployeeNumber($data['employee_number']);
        }
        elseif (\array_key_exists('employee_number', $data) && $data['employee_number'] === null) {
            $object->setEmployeeNumber(null);
        }
        if (\array_key_exists('first_name', $data) && $data['first_name'] !== null) {
            $object->setFirstName($data['first_name']);
        }
        elseif (\array_key_exists('first_name', $data) && $data['first_name'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('last_name', $data) && $data['last_name'] !== null) {
            $object->setLastName($data['last_name']);
        }
        elseif (\array_key_exists('last_name', $data) && $data['last_name'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('job_title', $data) && $data['job_title'] !== null) {
            $object->setJobTitle($data['job_title']);
        }
        elseif (\array_key_exists('job_title', $data) && $data['job_title'] === null) {
            $object->setJobTitle(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('phish_prone_percentage', $data)) {
            $object->setPhishPronePercentage($data['phish_prone_percentage']);
        }
        if (\array_key_exists('phone_number', $data) && $data['phone_number'] !== null) {
            $object->setPhoneNumber($data['phone_number']);
        }
        elseif (\array_key_exists('phone_number', $data) && $data['phone_number'] === null) {
            $object->setPhoneNumber(null);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->setExtension($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->setExtension(null);
        }
        if (\array_key_exists('mobile_phone_number', $data) && $data['mobile_phone_number'] !== null) {
            $object->setMobilePhoneNumber($data['mobile_phone_number']);
        }
        elseif (\array_key_exists('mobile_phone_number', $data) && $data['mobile_phone_number'] === null) {
            $object->setMobilePhoneNumber(null);
        }
        if (\array_key_exists('location', $data) && $data['location'] !== null) {
            $object->setLocation($data['location']);
        }
        elseif (\array_key_exists('location', $data) && $data['location'] === null) {
            $object->setLocation(null);
        }
        if (\array_key_exists('division', $data) && $data['division'] !== null) {
            $object->setDivision($data['division']);
        }
        elseif (\array_key_exists('division', $data) && $data['division'] === null) {
            $object->setDivision(null);
        }
        if (\array_key_exists('manager_name', $data) && $data['manager_name'] !== null) {
            $object->setManagerName($data['manager_name']);
        }
        elseif (\array_key_exists('manager_name', $data) && $data['manager_name'] === null) {
            $object->setManagerName(null);
        }
        if (\array_key_exists('manager_email', $data) && $data['manager_email'] !== null) {
            $object->setManagerEmail($data['manager_email']);
        }
        elseif (\array_key_exists('manager_email', $data) && $data['manager_email'] === null) {
            $object->setManagerEmail(null);
        }
        if (\array_key_exists('adi_mangeable', $data)) {
            $object->setAdiMangeable($data['adi_mangeable']);
        }
        if (\array_key_exists('adi_guid', $data) && $data['adi_guid'] !== null) {
            $object->setAdiGuid($data['adi_guid']);
        }
        elseif (\array_key_exists('adi_guid', $data) && $data['adi_guid'] === null) {
            $object->setAdiGuid(null);
        }
        if (\array_key_exists('groups', $data)) {
            $values = array();
            foreach ($data['groups'] as $value) {
                $values[] = $value;
            }
            $object->setGroups($values);
        }
        if (\array_key_exists('current_risk_score', $data)) {
            $object->setCurrentRiskScore($data['current_risk_score']);
        }
        if (\array_key_exists('aliases', $data)) {
            $values_1 = array();
            foreach ($data['aliases'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAliases($values_1);
        }
        if (\array_key_exists('joined_on', $data)) {
            $object->setJoinedOn(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['joined_on']));
        }
        if (\array_key_exists('last_sign_in', $data) && $data['last_sign_in'] !== null) {
            $object->setLastSignIn(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['last_sign_in']));
        }
        elseif (\array_key_exists('last_sign_in', $data) && $data['last_sign_in'] === null) {
            $object->setLastSignIn(null);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('organization', $data) && $data['organization'] !== null) {
            $object->setOrganization($data['organization']);
        }
        elseif (\array_key_exists('organization', $data) && $data['organization'] === null) {
            $object->setOrganization(null);
        }
        if (\array_key_exists('department', $data) && $data['department'] !== null) {
            $object->setDepartment($data['department']);
        }
        elseif (\array_key_exists('department', $data) && $data['department'] === null) {
            $object->setDepartment(null);
        }
        if (\array_key_exists('language', $data) && $data['language'] !== null) {
            $object->setLanguage($data['language']);
        }
        elseif (\array_key_exists('language', $data) && $data['language'] === null) {
            $object->setLanguage(null);
        }
        if (\array_key_exists('comment', $data) && $data['comment'] !== null) {
            $object->setComment($data['comment']);
        }
        elseif (\array_key_exists('comment', $data) && $data['comment'] === null) {
            $object->setComment(null);
        }
        if (\array_key_exists('employee_start_date', $data)) {
            $object->setEmployeeStartDate(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['employee_start_date']));
        }
        if (\array_key_exists('archived_at', $data) && $data['archived_at'] !== null) {
            $object->setArchivedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.vP', $data['archived_at']));
        }
        elseif (\array_key_exists('archived_at', $data) && $data['archived_at'] === null) {
            $object->setArchivedAt(null);
        }
        if (\array_key_exists('custom_field_1', $data) && $data['custom_field_1'] !== null) {
            $object->setCustomField1($data['custom_field_1']);
        }
        elseif (\array_key_exists('custom_field_1', $data) && $data['custom_field_1'] === null) {
            $object->setCustomField1(null);
        }
        if (\array_key_exists('custom_field_2', $data) && $data['custom_field_2'] !== null) {
            $object->setCustomField2($data['custom_field_2']);
        }
        elseif (\array_key_exists('custom_field_2', $data) && $data['custom_field_2'] === null) {
            $object->setCustomField2(null);
        }
        if (\array_key_exists('custom_field_3', $data) && $data['custom_field_3'] !== null) {
            $object->setCustomField3($data['custom_field_3']);
        }
        elseif (\array_key_exists('custom_field_3', $data) && $data['custom_field_3'] === null) {
            $object->setCustomField3(null);
        }
        if (\array_key_exists('custom_field_4', $data) && $data['custom_field_4'] !== null) {
            $object->setCustomField4($data['custom_field_4']);
        }
        elseif (\array_key_exists('custom_field_4', $data) && $data['custom_field_4'] === null) {
            $object->setCustomField4(null);
        }
        if (\array_key_exists('custom_date_1', $data) && $data['custom_date_1'] !== null) {
            $object->setCustomDate1(\DateTime::createFromFormat('Y-m-d', $data['custom_date_1'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('custom_date_1', $data) && $data['custom_date_1'] === null) {
            $object->setCustomDate1(null);
        }
        if (\array_key_exists('custom_date_2', $data) && $data['custom_date_2'] !== null) {
            $object->setCustomDate2(\DateTime::createFromFormat('Y-m-d', $data['custom_date_2'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('custom_date_2', $data) && $data['custom_date_2'] === null) {
            $object->setCustomDate2(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getEmployeeNumber()) {
            $data['employee_number'] = $object->getEmployeeNumber();
        }
        if (null !== $object->getFirstName()) {
            $data['first_name'] = $object->getFirstName();
        }
        if (null !== $object->getLastName()) {
            $data['last_name'] = $object->getLastName();
        }
        if (null !== $object->getJobTitle()) {
            $data['job_title'] = $object->getJobTitle();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getPhishPronePercentage()) {
            $data['phish_prone_percentage'] = $object->getPhishPronePercentage();
        }
        if (null !== $object->getPhoneNumber()) {
            $data['phone_number'] = $object->getPhoneNumber();
        }
        if (null !== $object->getExtension()) {
            $data['extension'] = $object->getExtension();
        }
        if (null !== $object->getMobilePhoneNumber()) {
            $data['mobile_phone_number'] = $object->getMobilePhoneNumber();
        }
        if (null !== $object->getLocation()) {
            $data['location'] = $object->getLocation();
        }
        if (null !== $object->getDivision()) {
            $data['division'] = $object->getDivision();
        }
        if (null !== $object->getManagerName()) {
            $data['manager_name'] = $object->getManagerName();
        }
        if (null !== $object->getManagerEmail()) {
            $data['manager_email'] = $object->getManagerEmail();
        }
        if (null !== $object->getAdiMangeable()) {
            $data['adi_mangeable'] = $object->getAdiMangeable();
        }
        if (null !== $object->getAdiGuid()) {
            $data['adi_guid'] = $object->getAdiGuid();
        }
        if (null !== $object->getGroups()) {
            $values = array();
            foreach ($object->getGroups() as $value) {
                $values[] = $value;
            }
            $data['groups'] = $values;
        }
        if (null !== $object->getCurrentRiskScore()) {
            $data['current_risk_score'] = $object->getCurrentRiskScore();
        }
        if (null !== $object->getAliases()) {
            $values_1 = array();
            foreach ($object->getAliases() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['aliases'] = $values_1;
        }
        if (null !== $object->getJoinedOn()) {
            $data['joined_on'] = $object->getJoinedOn()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getLastSignIn()) {
            $data['last_sign_in'] = $object->getLastSignIn()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getOrganization()) {
            $data['organization'] = $object->getOrganization();
        }
        if (null !== $object->getDepartment()) {
            $data['department'] = $object->getDepartment();
        }
        if (null !== $object->getLanguage()) {
            $data['language'] = $object->getLanguage();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if (null !== $object->getEmployeeStartDate()) {
            $data['employee_start_date'] = $object->getEmployeeStartDate()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getArchivedAt()) {
            $data['archived_at'] = $object->getArchivedAt()->format('Y-m-d\\TH:i:s.vP');
        }
        if (null !== $object->getCustomField1()) {
            $data['custom_field_1'] = $object->getCustomField1();
        }
        if (null !== $object->getCustomField2()) {
            $data['custom_field_2'] = $object->getCustomField2();
        }
        if (null !== $object->getCustomField3()) {
            $data['custom_field_3'] = $object->getCustomField3();
        }
        if (null !== $object->getCustomField4()) {
            $data['custom_field_4'] = $object->getCustomField4();
        }
        if (null !== $object->getCustomDate1()) {
            $data['custom_date_1'] = $object->getCustomDate1()->format('Y-m-d');
        }
        if (null !== $object->getCustomDate2()) {
            $data['custom_date_2'] = $object->getCustomDate2()->format('Y-m-d');
        }
        return $data;
    }
}