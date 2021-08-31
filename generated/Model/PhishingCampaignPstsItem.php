<?php

namespace KnowBe4\Kmsat\Api\Model;

class PhishingCampaignPstsItem
{
    /**
     * 
     *
     * @var int
     */
    protected $pstId;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $startDate;
    /**
     * 
     *
     * @var int
     */
    protected $usersCount;
    /**
     * 
     *
     * @var float
     */
    protected $phishPronePercentage;
    /**
     * 
     *
     * @return int
     */
    public function getPstId() : int
    {
        return $this->pstId;
    }
    /**
     * 
     *
     * @param int $pstId
     *
     * @return self
     */
    public function setPstId(int $pstId) : self
    {
        $this->pstId = $pstId;
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
     * @return \DateTime
     */
    public function getStartDate() : \DateTime
    {
        return $this->startDate;
    }
    /**
     * 
     *
     * @param \DateTime $startDate
     *
     * @return self
     */
    public function setStartDate(\DateTime $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getUsersCount() : int
    {
        return $this->usersCount;
    }
    /**
     * 
     *
     * @param int $usersCount
     *
     * @return self
     */
    public function setUsersCount(int $usersCount) : self
    {
        $this->usersCount = $usersCount;
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
}