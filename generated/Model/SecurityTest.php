<?php

namespace KnowBe4\Kmsat\Api\Model;

class SecurityTest
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var SecurityTestGroupsItem[]
     */
    protected $groups;
    /**
     * 
     *
     * @var float
     */
    protected $phishPronePercentage;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * 
     *
     * @var int
     */
    protected $duration;
    /**
     * 
     *
     * @var SecurityTestCategoriesItem[]
     */
    protected $categories;
    /**
     * 
     *
     * @var SecurityTestTemplate
     */
    protected $template;
    /**
     * 
     *
     * @var SecurityTestLandingPage
     */
    protected $landingPage;
    /**
     * 
     *
     * @var int
     */
    protected $scheduledCount;
    /**
     * 
     *
     * @var int
     */
    protected $deliveredCount;
    /**
     * 
     *
     * @var int
     */
    protected $openedCount;
    /**
     * 
     *
     * @var int
     */
    protected $clickedCount;
    /**
     * 
     *
     * @var int
     */
    protected $repliedCount;
    /**
     * 
     *
     * @var int
     */
    protected $attachmentOpenCount;
    /**
     * 
     *
     * @var int
     */
    protected $macroEnabledCount;
    /**
     * 
     *
     * @var int
     */
    protected $dataEnteredCount;
    /**
     * 
     *
     * @var int
     */
    protected $vulnerablePluginCount;
    /**
     * 
     *
     * @var int
     */
    protected $exploitedCount;
    /**
     * 
     *
     * @var int
     */
    protected $reportedCount;
    /**
     * 
     *
     * @var int
     */
    protected $bouncedCount;
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
     * @return SecurityTestGroupsItem[]
     */
    public function getGroups() : array
    {
        return $this->groups;
    }
    /**
     * 
     *
     * @param SecurityTestGroupsItem[] $groups
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
     * @return \DateTime
     */
    public function getStartedAt() : \DateTime
    {
        return $this->startedAt;
    }
    /**
     * 
     *
     * @param \DateTime $startedAt
     *
     * @return self
     */
    public function setStartedAt(\DateTime $startedAt) : self
    {
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDuration() : int
    {
        return $this->duration;
    }
    /**
     * 
     *
     * @param int $duration
     *
     * @return self
     */
    public function setDuration(int $duration) : self
    {
        $this->duration = $duration;
        return $this;
    }
    /**
     * 
     *
     * @return SecurityTestCategoriesItem[]
     */
    public function getCategories() : array
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param SecurityTestCategoriesItem[] $categories
     *
     * @return self
     */
    public function setCategories(array $categories) : self
    {
        $this->categories = $categories;
        return $this;
    }
    /**
     * 
     *
     * @return SecurityTestTemplate
     */
    public function getTemplate() : SecurityTestTemplate
    {
        return $this->template;
    }
    /**
     * 
     *
     * @param SecurityTestTemplate $template
     *
     * @return self
     */
    public function setTemplate(SecurityTestTemplate $template) : self
    {
        $this->template = $template;
        return $this;
    }
    /**
     * 
     *
     * @return SecurityTestLandingPage
     */
    public function getLandingPage() : SecurityTestLandingPage
    {
        return $this->landingPage;
    }
    /**
     * 
     *
     * @param SecurityTestLandingPage $landingPage
     *
     * @return self
     */
    public function setLandingPage(SecurityTestLandingPage $landingPage) : self
    {
        $this->landingPage = $landingPage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getScheduledCount() : int
    {
        return $this->scheduledCount;
    }
    /**
     * 
     *
     * @param int $scheduledCount
     *
     * @return self
     */
    public function setScheduledCount(int $scheduledCount) : self
    {
        $this->scheduledCount = $scheduledCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDeliveredCount() : int
    {
        return $this->deliveredCount;
    }
    /**
     * 
     *
     * @param int $deliveredCount
     *
     * @return self
     */
    public function setDeliveredCount(int $deliveredCount) : self
    {
        $this->deliveredCount = $deliveredCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getOpenedCount() : int
    {
        return $this->openedCount;
    }
    /**
     * 
     *
     * @param int $openedCount
     *
     * @return self
     */
    public function setOpenedCount(int $openedCount) : self
    {
        $this->openedCount = $openedCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getClickedCount() : int
    {
        return $this->clickedCount;
    }
    /**
     * 
     *
     * @param int $clickedCount
     *
     * @return self
     */
    public function setClickedCount(int $clickedCount) : self
    {
        $this->clickedCount = $clickedCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getRepliedCount() : int
    {
        return $this->repliedCount;
    }
    /**
     * 
     *
     * @param int $repliedCount
     *
     * @return self
     */
    public function setRepliedCount(int $repliedCount) : self
    {
        $this->repliedCount = $repliedCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getAttachmentOpenCount() : int
    {
        return $this->attachmentOpenCount;
    }
    /**
     * 
     *
     * @param int $attachmentOpenCount
     *
     * @return self
     */
    public function setAttachmentOpenCount(int $attachmentOpenCount) : self
    {
        $this->attachmentOpenCount = $attachmentOpenCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMacroEnabledCount() : int
    {
        return $this->macroEnabledCount;
    }
    /**
     * 
     *
     * @param int $macroEnabledCount
     *
     * @return self
     */
    public function setMacroEnabledCount(int $macroEnabledCount) : self
    {
        $this->macroEnabledCount = $macroEnabledCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDataEnteredCount() : int
    {
        return $this->dataEnteredCount;
    }
    /**
     * 
     *
     * @param int $dataEnteredCount
     *
     * @return self
     */
    public function setDataEnteredCount(int $dataEnteredCount) : self
    {
        $this->dataEnteredCount = $dataEnteredCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getVulnerablePluginCount() : int
    {
        return $this->vulnerablePluginCount;
    }
    /**
     * 
     *
     * @param int $vulnerablePluginCount
     *
     * @return self
     */
    public function setVulnerablePluginCount(int $vulnerablePluginCount) : self
    {
        $this->vulnerablePluginCount = $vulnerablePluginCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExploitedCount() : int
    {
        return $this->exploitedCount;
    }
    /**
     * 
     *
     * @param int $exploitedCount
     *
     * @return self
     */
    public function setExploitedCount(int $exploitedCount) : self
    {
        $this->exploitedCount = $exploitedCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getReportedCount() : int
    {
        return $this->reportedCount;
    }
    /**
     * 
     *
     * @param int $reportedCount
     *
     * @return self
     */
    public function setReportedCount(int $reportedCount) : self
    {
        $this->reportedCount = $reportedCount;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getBouncedCount() : int
    {
        return $this->bouncedCount;
    }
    /**
     * 
     *
     * @param int $bouncedCount
     *
     * @return self
     */
    public function setBouncedCount(int $bouncedCount) : self
    {
        $this->bouncedCount = $bouncedCount;
        return $this;
    }
}