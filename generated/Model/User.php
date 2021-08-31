<?php

namespace KnowBe4\Kmsat\Api\Model;

class User
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $employeeNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * 
     *
     * @var string|null
     */
    protected $jobTitle;
    /**
     * 
     *
     * @var string|null
     */
    protected $email;
    /**
     * 
     *
     * @var float
     */
    protected $phishPronePercentage;
    /**
     * 
     *
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $extension;
    /**
     * 
     *
     * @var string|null
     */
    protected $mobilePhoneNumber;
    /**
     * 
     *
     * @var string|null
     */
    protected $location;
    /**
     * 
     *
     * @var string|null
     */
    protected $division;
    /**
     * 
     *
     * @var string|null
     */
    protected $managerName;
    /**
     * 
     *
     * @var string|null
     */
    protected $managerEmail;
    /**
     * 
     *
     * @var bool
     */
    protected $adiMangeable;
    /**
     * 
     *
     * @var string|null
     */
    protected $adiGuid;
    /**
     * 
     *
     * @var int[]
     */
    protected $groups;
    /**
     * 
     *
     * @var float
     */
    protected $currentRiskScore;
    /**
     * 
     *
     * @var string[]
     */
    protected $aliases;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $joinedOn;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $lastSignIn;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var string|null
     */
    protected $organization;
    /**
     * 
     *
     * @var string|null
     */
    protected $department;
    /**
     * 
     *
     * @var string|null
     */
    protected $language;
    /**
     * 
     *
     * @var string|null
     */
    protected $comment;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $employeeStartDate;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $archivedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $customField1;
    /**
     * 
     *
     * @var string|null
     */
    protected $customField2;
    /**
     * 
     *
     * @var string|null
     */
    protected $customField3;
    /**
     * 
     *
     * @var string|null
     */
    protected $customField4;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $customDate1;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $customDate2;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmployeeNumber() : ?string
    {
        return $this->employeeNumber;
    }
    /**
     * 
     *
     * @param string|null $employeeNumber
     *
     * @return self
     */
    public function setEmployeeNumber(?string $employeeNumber) : self
    {
        $this->employeeNumber = $employeeNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getJobTitle() : ?string
    {
        return $this->jobTitle;
    }
    /**
     * 
     *
     * @param string|null $jobTitle
     *
     * @return self
     */
    public function setJobTitle(?string $jobTitle) : self
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getPhishPronePercentage() : float
    {
        return $this->phishPronePercentage;
    }
    /**
     * 
     *
     * @param float $phishPronePercentage
     *
     * @return self
     */
    public function setPhishPronePercentage(float $phishPronePercentage) : self
    {
        $this->phishPronePercentage = $phishPronePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPhoneNumber() : ?string
    {
        return $this->phoneNumber;
    }
    /**
     * 
     *
     * @param string|null $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber) : self
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getExtension() : ?string
    {
        return $this->extension;
    }
    /**
     * 
     *
     * @param string|null $extension
     *
     * @return self
     */
    public function setExtension(?string $extension) : self
    {
        $this->extension = $extension;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getMobilePhoneNumber() : ?string
    {
        return $this->mobilePhoneNumber;
    }
    /**
     * 
     *
     * @param string|null $mobilePhoneNumber
     *
     * @return self
     */
    public function setMobilePhoneNumber(?string $mobilePhoneNumber) : self
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLocation() : ?string
    {
        return $this->location;
    }
    /**
     * 
     *
     * @param string|null $location
     *
     * @return self
     */
    public function setLocation(?string $location) : self
    {
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDivision() : ?string
    {
        return $this->division;
    }
    /**
     * 
     *
     * @param string|null $division
     *
     * @return self
     */
    public function setDivision(?string $division) : self
    {
        $this->division = $division;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getManagerName() : ?string
    {
        return $this->managerName;
    }
    /**
     * 
     *
     * @param string|null $managerName
     *
     * @return self
     */
    public function setManagerName(?string $managerName) : self
    {
        $this->managerName = $managerName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getManagerEmail() : ?string
    {
        return $this->managerEmail;
    }
    /**
     * 
     *
     * @param string|null $managerEmail
     *
     * @return self
     */
    public function setManagerEmail(?string $managerEmail) : self
    {
        $this->managerEmail = $managerEmail;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAdiMangeable() : bool
    {
        return $this->adiMangeable;
    }
    /**
     * 
     *
     * @param bool $adiMangeable
     *
     * @return self
     */
    public function setAdiMangeable(bool $adiMangeable) : self
    {
        $this->adiMangeable = $adiMangeable;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getAdiGuid() : ?string
    {
        return $this->adiGuid;
    }
    /**
     * 
     *
     * @param string|null $adiGuid
     *
     * @return self
     */
    public function setAdiGuid(?string $adiGuid) : self
    {
        $this->adiGuid = $adiGuid;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * 
     *
     * @param int[] $groups
     *
     * @return self
     */
    public function setGroups(array $groups) : self
    {
        $this->groups = $groups;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getCurrentRiskScore() : float
    {
        return $this->currentRiskScore;
    }
    /**
     * 
     *
     * @param float $currentRiskScore
     *
     * @return self
     */
    public function setCurrentRiskScore(float $currentRiskScore) : self
    {
        $this->currentRiskScore = $currentRiskScore;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getAliases() : array
    {
        return $this->aliases;
    }
    /**
     * 
     *
     * @param string[] $aliases
     *
     * @return self
     */
    public function setAliases(array $aliases) : self
    {
        $this->aliases = $aliases;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getJoinedOn() : \DateTime
    {
        return $this->joinedOn;
    }
    /**
     * 
     *
     * @param \DateTime $joinedOn
     *
     * @return self
     */
    public function setJoinedOn(\DateTime $joinedOn) : self
    {
        $this->joinedOn = $joinedOn;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getLastSignIn() : ?\DateTime
    {
        return $this->lastSignIn;
    }
    /**
     * 
     *
     * @param \DateTime|null $lastSignIn
     *
     * @return self
     */
    public function setLastSignIn(?\DateTime $lastSignIn) : self
    {
        $this->lastSignIn = $lastSignIn;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOrganization() : ?string
    {
        return $this->organization;
    }
    /**
     * 
     *
     * @param string|null $organization
     *
     * @return self
     */
    public function setOrganization(?string $organization) : self
    {
        $this->organization = $organization;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getDepartment() : ?string
    {
        return $this->department;
    }
    /**
     * 
     *
     * @param string|null $department
     *
     * @return self
     */
    public function setDepartment(?string $department) : self
    {
        $this->department = $department;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }
    /**
     * 
     *
     * @param string|null $language
     *
     * @return self
     */
    public function setLanguage(?string $language) : self
    {
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getComment() : ?string
    {
        return $this->comment;
    }
    /**
     * 
     *
     * @param string|null $comment
     *
     * @return self
     */
    public function setComment(?string $comment) : self
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getEmployeeStartDate() : \DateTime
    {
        return $this->employeeStartDate;
    }
    /**
     * 
     *
     * @param \DateTime $employeeStartDate
     *
     * @return self
     */
    public function setEmployeeStartDate(\DateTime $employeeStartDate) : self
    {
        $this->employeeStartDate = $employeeStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getArchivedAt() : ?\DateTime
    {
        return $this->archivedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $archivedAt
     *
     * @return self
     */
    public function setArchivedAt(?\DateTime $archivedAt) : self
    {
        $this->archivedAt = $archivedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomField1() : ?string
    {
        return $this->customField1;
    }
    /**
     * 
     *
     * @param string|null $customField1
     *
     * @return self
     */
    public function setCustomField1(?string $customField1) : self
    {
        $this->customField1 = $customField1;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomField2() : ?string
    {
        return $this->customField2;
    }
    /**
     * 
     *
     * @param string|null $customField2
     *
     * @return self
     */
    public function setCustomField2(?string $customField2) : self
    {
        $this->customField2 = $customField2;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomField3() : ?string
    {
        return $this->customField3;
    }
    /**
     * 
     *
     * @param string|null $customField3
     *
     * @return self
     */
    public function setCustomField3(?string $customField3) : self
    {
        $this->customField3 = $customField3;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCustomField4() : ?string
    {
        return $this->customField4;
    }
    /**
     * 
     *
     * @param string|null $customField4
     *
     * @return self
     */
    public function setCustomField4(?string $customField4) : self
    {
        $this->customField4 = $customField4;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCustomDate1() : ?\DateTime
    {
        return $this->customDate1;
    }
    /**
     * 
     *
     * @param \DateTime|null $customDate1
     *
     * @return self
     */
    public function setCustomDate1(?\DateTime $customDate1) : self
    {
        $this->customDate1 = $customDate1;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCustomDate2() : ?\DateTime
    {
        return $this->customDate2;
    }
    /**
     * 
     *
     * @param \DateTime|null $customDate2
     *
     * @return self
     */
    public function setCustomDate2(?\DateTime $customDate2) : self
    {
        $this->customDate2 = $customDate2;
        return $this;
    }
}