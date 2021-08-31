<?php

namespace KnowBe4\Kmsat\Api\Model;

class PhishingCampaign
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
     * @var PhishingCampaignGroupsItem[]
     */
    protected $groups;
    /**
     * 
     *
     * @var float
     */
    protected $lastPhishPronePercentage;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $lastRun;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var bool
     */
    protected $hidden;
    /**
     * 
     *
     * @var string
     */
    protected $sendDuration;
    /**
     * 
     *
     * @var string
     */
    protected $trackDuration;
    /**
     * 
     *
     * @var string
     */
    protected $frequency;
    /**
     * 
     *
     * @var int[]
     */
    protected $difficultyFilter;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createDate;
    /**
     * 
     *
     * @var int
     */
    protected $pstsCount;
    /**
     * 
     *
     * @var PhishingCampaignPstsItem[]
     */
    protected $psts;
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
     * @return PhishingCampaignGroupsItem[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * 
     *
     * @param PhishingCampaignGroupsItem[] $groups
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
    public function getLastPhishPronePercentage() : float
    {
        return $this->lastPhishPronePercentage;
    }
    /**
     * 
     *
     * @param float $lastPhishPronePercentage
     *
     * @return self
     */
    public function setLastPhishPronePercentage(float $lastPhishPronePercentage) : self
    {
        $this->lastPhishPronePercentage = $lastPhishPronePercentage;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getLastRun() : \DateTime
    {
        return $this->lastRun;
    }
    /**
     * 
     *
     * @param \DateTime $lastRun
     *
     * @return self
     */
    public function setLastRun(\DateTime $lastRun) : self
    {
        $this->lastRun = $lastRun;
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
     * @return bool
     */
    public function getHidden() : bool
    {
        return $this->hidden;
    }
    /**
     * 
     *
     * @param bool $hidden
     *
     * @return self
     */
    public function setHidden(bool $hidden) : self
    {
        $this->hidden = $hidden;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSendDuration() : string
    {
        return $this->sendDuration;
    }
    /**
     * 
     *
     * @param string $sendDuration
     *
     * @return self
     */
    public function setSendDuration(string $sendDuration) : self
    {
        $this->sendDuration = $sendDuration;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTrackDuration() : string
    {
        return $this->trackDuration;
    }
    /**
     * 
     *
     * @param string $trackDuration
     *
     * @return self
     */
    public function setTrackDuration(string $trackDuration) : self
    {
        $this->trackDuration = $trackDuration;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFrequency() : string
    {
        return $this->frequency;
    }
    /**
     * 
     *
     * @param string $frequency
     *
     * @return self
     */
    public function setFrequency(string $frequency) : self
    {
        $this->frequency = $frequency;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getDifficultyFilter() : array
    {
        return $this->difficultyFilter;
    }
    /**
     * 
     *
     * @param int[] $difficultyFilter
     *
     * @return self
     */
    public function setDifficultyFilter(array $difficultyFilter) : self
    {
        $this->difficultyFilter = $difficultyFilter;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreateDate() : \DateTime
    {
        return $this->createDate;
    }
    /**
     * 
     *
     * @param \DateTime $createDate
     *
     * @return self
     */
    public function setCreateDate(\DateTime $createDate) : self
    {
        $this->createDate = $createDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPstsCount() : int
    {
        return $this->pstsCount;
    }
    /**
     * 
     *
     * @param int $pstsCount
     *
     * @return self
     */
    public function setPstsCount(int $pstsCount) : self
    {
        $this->pstsCount = $pstsCount;
        return $this;
    }
    /**
     * 
     *
     * @return PhishingCampaignPstsItem[]
     */
    public function getPsts() : array
    {
        return $this->psts;
    }
    /**
     * 
     *
     * @param PhishingCampaignPstsItem[] $psts
     *
     * @return self
     */
    public function setPsts(array $psts) : self
    {
        $this->psts = $psts;
        return $this;
    }
}