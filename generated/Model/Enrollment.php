<?php

namespace KnowBe4\Kmsat\Api\Model;

class Enrollment
{
    /**
     * 
     *
     * @var int
     */
    protected $enrollmentId;
    /**
     * 
     *
     * @var string
     */
    protected $contentType;
    /**
     * 
     *
     * @var string
     */
    protected $moduleName;
    /**
     * 
     *
     * @var User
     */
    protected $user;
    /**
     * 
     *
     * @var string
     */
    protected $campaignName;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $enrollmentDate;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $startDate;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $completionDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $timeSpent;
    /**
     * 
     *
     * @var bool
     */
    protected $policyAcknowledged;
    /**
     * 
     *
     * @return int
     */
    public function getEnrollmentId() : int
    {
        return $this->enrollmentId;
    }
    /**
     * 
     *
     * @param int $enrollmentId
     *
     * @return self
     */
    public function setEnrollmentId(int $enrollmentId) : self
    {
        $this->enrollmentId = $enrollmentId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getContentType() : string
    {
        return $this->contentType;
    }
    /**
     * 
     *
     * @param string $contentType
     *
     * @return self
     */
    public function setContentType(string $contentType) : self
    {
        $this->contentType = $contentType;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getModuleName() : string
    {
        return $this->moduleName;
    }
    /**
     * 
     *
     * @param string $moduleName
     *
     * @return self
     */
    public function setModuleName(string $moduleName) : self
    {
        $this->moduleName = $moduleName;
        return $this;
    }
    /**
     * 
     *
     * @return User
     */
    public function getUser() : User
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param User $user
     *
     * @return self
     */
    public function setUser(User $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCampaignName() : string
    {
        return $this->campaignName;
    }
    /**
     * 
     *
     * @param string $campaignName
     *
     * @return self
     */
    public function setCampaignName(string $campaignName) : self
    {
        $this->campaignName = $campaignName;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getEnrollmentDate() : ?\DateTime
    {
        return $this->enrollmentDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $enrollmentDate
     *
     * @return self
     */
    public function setEnrollmentDate(?\DateTime $enrollmentDate) : self
    {
        $this->enrollmentDate = $enrollmentDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getStartDate() : ?\DateTime
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $startDate
     *
     * @return self
     */
    public function setStartDate(?\DateTime $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getCompletionDate() : ?\DateTime
    {
        return $this->completionDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $completionDate
     *
     * @return self
     */
    public function setCompletionDate(?\DateTime $completionDate) : self
    {
        $this->completionDate = $completionDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTimeSpent() : int
    {
        return $this->timeSpent;
    }
    /**
     * 
     *
     * @param int $timeSpent
     *
     * @return self
     */
    public function setTimeSpent(int $timeSpent) : self
    {
        $this->timeSpent = $timeSpent;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPolicyAcknowledged() : bool
    {
        return $this->policyAcknowledged;
    }
    /**
     * 
     *
     * @param bool $policyAcknowledged
     *
     * @return self
     */
    public function setPolicyAcknowledged(bool $policyAcknowledged) : self
    {
        $this->policyAcknowledged = $policyAcknowledged;
        return $this;
    }
}