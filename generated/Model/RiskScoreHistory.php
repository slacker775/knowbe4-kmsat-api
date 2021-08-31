<?php

namespace KnowBe4\Kmsat\Api\Model;

class RiskScoreHistory
{
    /**
     * 
     *
     * @var float
     */
    protected $riskScore;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * 
     *
     * @return float
     */
    public function getRiskScore() : float
    {
        return $this->riskScore;
    }
    /**
     * 
     *
     * @param float $riskScore
     *
     * @return self
     */
    public function setRiskScore(float $riskScore) : self
    {
        $this->riskScore = $riskScore;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getDate() : \DateTime
    {
        return $this->date;
    }
    /**
     * 
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date) : self
    {
        $this->date = $date;
        return $this;
    }
}