<?php

namespace KnowBe4\Kmsat\Api\Model;

class Group
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $groupType;
    /**
     * 
     *
     * @var string|null
     */
    protected $adiGuid;
    /**
     * 
     *
     * @var int
     */
    protected $memberCount;
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
     * @var string
     */
    protected $status;
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
    public function getGroupType() : string
    {
        return $this->groupType;
    }
    /**
     * 
     *
     * @param string $groupType
     *
     * @return self
     */
    public function setGroupType(string $groupType) : self
    {
        $this->groupType = $groupType;
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
     * @return int
     */
    public function getMemberCount() : int
    {
        return $this->memberCount;
    }
    /**
     * 
     *
     * @param int $memberCount
     *
     * @return self
     */
    public function setMemberCount(int $memberCount) : self
    {
        $this->memberCount = $memberCount;
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
}