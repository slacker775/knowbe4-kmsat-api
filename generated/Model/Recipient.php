<?php

namespace KnowBe4\Kmsat\Api\Model;

class Recipient
{
    /**
     * 
     *
     * @var int
     */
    protected $recipientId;
    /**
     * 
     *
     * @var int
     */
    protected $pstId;
    /**
     * 
     *
     * @var RecipientUser
     */
    protected $user;
    /**
     * 
     *
     * @var RecipientTemplate
     */
    protected $template;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $scheduledAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $deliveredAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $openedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $clickedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $repliedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $attachmentOpenedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $macroEnabledAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $dataEnteredAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $vulnerablePluginsAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $exploitedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $reportedAt;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $bouncedAt;
    /**
     * 
     *
     * @var string|null
     */
    protected $ip;
    /**
     * 
     *
     * @var string|null
     */
    protected $ipLocation;
    /**
     * 
     *
     * @var string|null
     */
    protected $browser;
    /**
     * 
     *
     * @var string|null
     */
    protected $browserVersion;
    /**
     * 
     *
     * @var string|null
     */
    protected $os;
    /**
     * 
     *
     * @return int
     */
    public function getRecipientId() : int
    {
        return $this->recipientId;
    }
    /**
     * 
     *
     * @param int $recipientId
     *
     * @return self
     */
    public function setRecipientId(int $recipientId) : self
    {
        $this->recipientId = $recipientId;
        return $this;
    }
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
     * @return RecipientUser
     */
    public function getUser() : RecipientUser
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param RecipientUser $user
     *
     * @return self
     */
    public function setUser(RecipientUser $user) : self
    {
        $this->user = $user;
        return $this;
    }
    /**
     * 
     *
     * @return RecipientTemplate
     */
    public function getTemplate() : RecipientTemplate
    {
        return $this->template;
    }
    /**
     * 
     *
     * @param RecipientTemplate $template
     *
     * @return self
     */
    public function setTemplate(RecipientTemplate $template) : self
    {
        $this->template = $template;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getScheduledAt() : ?\DateTime
    {
        return $this->scheduledAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $scheduledAt
     *
     * @return self
     */
    public function setScheduledAt(?\DateTime $scheduledAt) : self
    {
        $this->scheduledAt = $scheduledAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getDeliveredAt() : ?\DateTime
    {
        return $this->deliveredAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $deliveredAt
     *
     * @return self
     */
    public function setDeliveredAt(?\DateTime $deliveredAt) : self
    {
        $this->deliveredAt = $deliveredAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getOpenedAt() : ?\DateTime
    {
        return $this->openedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $openedAt
     *
     * @return self
     */
    public function setOpenedAt(?\DateTime $openedAt) : self
    {
        $this->openedAt = $openedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getClickedAt() : ?\DateTime
    {
        return $this->clickedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $clickedAt
     *
     * @return self
     */
    public function setClickedAt(?\DateTime $clickedAt) : self
    {
        $this->clickedAt = $clickedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getRepliedAt() : ?\DateTime
    {
        return $this->repliedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $repliedAt
     *
     * @return self
     */
    public function setRepliedAt(?\DateTime $repliedAt) : self
    {
        $this->repliedAt = $repliedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getAttachmentOpenedAt() : ?\DateTime
    {
        return $this->attachmentOpenedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $attachmentOpenedAt
     *
     * @return self
     */
    public function setAttachmentOpenedAt(?\DateTime $attachmentOpenedAt) : self
    {
        $this->attachmentOpenedAt = $attachmentOpenedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getMacroEnabledAt() : ?\DateTime
    {
        return $this->macroEnabledAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $macroEnabledAt
     *
     * @return self
     */
    public function setMacroEnabledAt(?\DateTime $macroEnabledAt) : self
    {
        $this->macroEnabledAt = $macroEnabledAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getDataEnteredAt() : ?\DateTime
    {
        return $this->dataEnteredAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $dataEnteredAt
     *
     * @return self
     */
    public function setDataEnteredAt(?\DateTime $dataEnteredAt) : self
    {
        $this->dataEnteredAt = $dataEnteredAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getVulnerablePluginsAt() : ?\DateTime
    {
        return $this->vulnerablePluginsAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $vulnerablePluginsAt
     *
     * @return self
     */
    public function setVulnerablePluginsAt(?\DateTime $vulnerablePluginsAt) : self
    {
        $this->vulnerablePluginsAt = $vulnerablePluginsAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getExploitedAt() : ?\DateTime
    {
        return $this->exploitedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $exploitedAt
     *
     * @return self
     */
    public function setExploitedAt(?\DateTime $exploitedAt) : self
    {
        $this->exploitedAt = $exploitedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getReportedAt() : ?\DateTime
    {
        return $this->reportedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $reportedAt
     *
     * @return self
     */
    public function setReportedAt(?\DateTime $reportedAt) : self
    {
        $this->reportedAt = $reportedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getBouncedAt() : ?\DateTime
    {
        return $this->bouncedAt;
    }
    /**
     * 
     *
     * @param \DateTime|null $bouncedAt
     *
     * @return self
     */
    public function setBouncedAt(?\DateTime $bouncedAt) : self
    {
        $this->bouncedAt = $bouncedAt;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIp() : ?string
    {
        return $this->ip;
    }
    /**
     * 
     *
     * @param string|null $ip
     *
     * @return self
     */
    public function setIp(?string $ip) : self
    {
        $this->ip = $ip;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getIpLocation() : ?string
    {
        return $this->ipLocation;
    }
    /**
     * 
     *
     * @param string|null $ipLocation
     *
     * @return self
     */
    public function setIpLocation(?string $ipLocation) : self
    {
        $this->ipLocation = $ipLocation;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBrowser() : ?string
    {
        return $this->browser;
    }
    /**
     * 
     *
     * @param string|null $browser
     *
     * @return self
     */
    public function setBrowser(?string $browser) : self
    {
        $this->browser = $browser;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getBrowserVersion() : ?string
    {
        return $this->browserVersion;
    }
    /**
     * 
     *
     * @param string|null $browserVersion
     *
     * @return self
     */
    public function setBrowserVersion(?string $browserVersion) : self
    {
        $this->browserVersion = $browserVersion;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getOs() : ?string
    {
        return $this->os;
    }
    /**
     * 
     *
     * @param string|null $os
     *
     * @return self
     */
    public function setOs(?string $os) : self
    {
        $this->os = $os;
        return $this;
    }
}