<?php

namespace KnowBe4\Kmsat\Api\Model;

class Account
{
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var string[]
     */
    protected $domains;
    /**
     * 
     *
     * @var AccountAdminsItem[]
     */
    protected $admins;
    /**
     * 
     *
     * @var string
     */
    protected $subscriptionLevel;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $subscriptionEndDate;
    /**
     * 
     *
     * @var int
     */
    protected $numberOfSeats;
    /**
     * 
     *
     * @var float
     */
    protected $currentRiskScore;
    /**
     * 
     *
     * @var RiskScoreHistory[]
     */
    protected $riskScoreHistory;
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
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getDomains() : array
    {
        return $this->domains;
    }
    /**
     * 
     *
     * @param string[] $domains
     *
     * @return self
     */
    public function setDomains(array $domains) : self
    {
        $this->domains = $domains;
        return $this;
    }
    /**
     * 
     *
     * @return AccountAdminsItem[]
     */
    public function getAdmins() : array
    {
        return $this->admins;
    }
    /**
     * 
     *
     * @param AccountAdminsItem[] $admins
     *
     * @return self
     */
    public function setAdmins(array $admins) : self
    {
        $this->admins = $admins;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSubscriptionLevel() : string
    {
        return $this->subscriptionLevel;
    }
    /**
     * 
     *
     * @param string $subscriptionLevel
     *
     * @return self
     */
    public function setSubscriptionLevel(string $subscriptionLevel) : self
    {
        $this->subscriptionLevel = $subscriptionLevel;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getSubscriptionEndDate() : \DateTime
    {
        return $this->subscriptionEndDate;
    }
    /**
     * 
     *
     * @param \DateTime $subscriptionEndDate
     *
     * @return self
     */
    public function setSubscriptionEndDate(\DateTime $subscriptionEndDate) : self
    {
        $this->subscriptionEndDate = $subscriptionEndDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getNumberOfSeats() : int
    {
        return $this->numberOfSeats;
    }
    /**
     * 
     *
     * @param int $numberOfSeats
     *
     * @return self
     */
    public function setNumberOfSeats(int $numberOfSeats) : self
    {
        $this->numberOfSeats = $numberOfSeats;
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
     * @return RiskScoreHistory[]
     */
    public function getRiskScoreHistory() : array
    {
        return $this->riskScoreHistory;
    }
    /**
     * 
     *
     * @param RiskScoreHistory[] $riskScoreHistory
     *
     * @return self
     */
    public function setRiskScoreHistory(array $riskScoreHistory) : self
    {
        $this->riskScoreHistory = $riskScoreHistory;
        return $this;
    }
}