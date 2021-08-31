<?php

namespace KnowBe4\Kmsat\Api\Model;

class TrainingCampaignGroupsItem
{
    /**
     * 
     *
     * @var int
     */
    protected $groupId;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @return int
     */
    public function getGroupId() : int
    {
        return $this->groupId;
    }
    /**
     * 
     *
     * @param int $groupId
     *
     * @return self
     */
    public function setGroupId(int $groupId) : self
    {
        $this->groupId = $groupId;
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
}