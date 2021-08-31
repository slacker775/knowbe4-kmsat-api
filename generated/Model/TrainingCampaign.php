<?php

namespace KnowBe4\Kmsat\Api\Model;

class TrainingCampaign
{
    /**
     * 
     *
     * @var int
     */
    protected $campaignId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var TrainingCampaignGroupsItem[]
     */
    protected $groups;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $modules;
    /**
     * 
     *
     * @var mixed[]
     */
    protected $content;
    /**
     * 
     *
     * @var string
     */
    protected $durationType;
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
    protected $endDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $relativeDuration;
    /**
     * 
     *
     * @var bool
     */
    protected $autoEnroll;
    /**
     * 
     *
     * @var bool
     */
    protected $allowMultipleEnrollments;
    /**
     * 
     *
     * @var int
     */
    protected $completionPercentage;
    /**
     * 
     *
     * @return int
     */
    public function getCampaignId() : int
    {
        return $this->campaignId;
    }
    /**
     * 
     *
     * @param int $campaignId
     *
     * @return self
     */
    public function setCampaignId(int $campaignId) : self
    {
        $this->campaignId = $campaignId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return TrainingCampaignGroupsItem[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * 
     *
     * @param TrainingCampaignGroupsItem[] $groups
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
     * @return mixed[]
     */
    public function getModules() : array
    {
        return $this->modules;
    }
    /**
     * 
     *
     * @param mixed[] $modules
     *
     * @return self
     */
    public function setModules(array $modules) : self
    {
        $this->modules = $modules;
        return $this;
    }
    /**
     * 
     *
     * @return mixed[]
     */
    public function getContent() : array
    {
        return $this->content;
    }
    /**
     * 
     *
     * @param mixed[] $content
     *
     * @return self
     */
    public function setContent(array $content) : self
    {
        $this->content = $content;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDurationType() : string
    {
        return $this->durationType;
    }
    /**
     * 
     *
     * @param string $durationType
     *
     * @return self
     */
    public function setDurationType(string $durationType) : self
    {
        $this->durationType = $durationType;
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
    public function getEndDate() : ?\DateTime
    {
        return $this->endDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $endDate
     *
     * @return self
     */
    public function setEndDate(?\DateTime $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getRelativeDuration() : ?string
    {
        return $this->relativeDuration;
    }
    /**
     * 
     *
     * @param string|null $relativeDuration
     *
     * @return self
     */
    public function setRelativeDuration(?string $relativeDuration) : self
    {
        $this->relativeDuration = $relativeDuration;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAutoEnroll() : bool
    {
        return $this->autoEnroll;
    }
    /**
     * 
     *
     * @param bool $autoEnroll
     *
     * @return self
     */
    public function setAutoEnroll(bool $autoEnroll) : self
    {
        $this->autoEnroll = $autoEnroll;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getAllowMultipleEnrollments() : bool
    {
        return $this->allowMultipleEnrollments;
    }
    /**
     * 
     *
     * @param bool $allowMultipleEnrollments
     *
     * @return self
     */
    public function setAllowMultipleEnrollments(bool $allowMultipleEnrollments) : self
    {
        $this->allowMultipleEnrollments = $allowMultipleEnrollments;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCompletionPercentage() : int
    {
        return $this->completionPercentage;
    }
    /**
     * 
     *
     * @param int $completionPercentage
     *
     * @return self
     */
    public function setCompletionPercentage(int $completionPercentage) : self
    {
        $this->completionPercentage = $completionPercentage;
        return $this;
    }
}