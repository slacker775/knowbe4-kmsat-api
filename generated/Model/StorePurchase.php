<?php

namespace KnowBe4\Kmsat\Api\Model;

class StorePurchase
{
    /**
     * 
     *
     * @var int
     */
    protected $storePurchaseId;
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
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var int|null
     */
    protected $duration;
    /**
     * 
     *
     * @var bool
     */
    protected $retired;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $retirementDate;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $publishDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $publisher;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $purchaseDate;
    /**
     * 
     *
     * @var string|null
     */
    protected $policyUrL;
    /**
     * 
     *
     * @return int
     */
    public function getStorePurchaseId() : int
    {
        return $this->storePurchaseId;
    }
    /**
     * 
     *
     * @param int $storePurchaseId
     *
     * @return self
     */
    public function setStorePurchaseId(int $storePurchaseId) : self
    {
        $this->storePurchaseId = $storePurchaseId;
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
    public function getDescription() : string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description) : self
    {
        $this->description = $description;
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
     * @return int|null
     */
    public function getDuration() : ?int
    {
        return $this->duration;
    }
    /**
     * 
     *
     * @param int|null $duration
     *
     * @return self
     */
    public function setDuration(?int $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getRetired() : bool
    {
        return $this->retired;
    }
    /**
     * 
     *
     * @param bool $retired
     *
     * @return self
     */
    public function setRetired(bool $retired) : self
    {
        $this->retired = $retired;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getRetirementDate() : ?\DateTime
    {
        return $this->retirementDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $retirementDate
     *
     * @return self
     */
    public function setRetirementDate(?\DateTime $retirementDate) : self
    {
        $this->retirementDate = $retirementDate;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getPublishDate() : ?\DateTime
    {
        return $this->publishDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $publishDate
     *
     * @return self
     */
    public function setPublishDate(?\DateTime $publishDate) : self
    {
        $this->publishDate = $publishDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPublisher() : ?string
    {
        return $this->publisher;
    }
    /**
     * 
     *
     * @param string|null $publisher
     *
     * @return self
     */
    public function setPublisher(?string $publisher) : self
    {
        $this->publisher = $publisher;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getPurchaseDate() : \DateTime
    {
        return $this->purchaseDate;
    }
    /**
     * 
     *
     * @param \DateTime $purchaseDate
     *
     * @return self
     */
    public function setPurchaseDate(\DateTime $purchaseDate) : self
    {
        $this->purchaseDate = $purchaseDate;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPolicyUrL() : ?string
    {
        return $this->policyUrL;
    }
    /**
     * 
     *
     * @param string|null $policyUrL
     *
     * @return self
     */
    public function setPolicyUrL(?string $policyUrL) : self
    {
        $this->policyUrL = $policyUrL;
        return $this;
    }
}