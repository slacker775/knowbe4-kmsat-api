<?php

namespace KnowBe4\Kmsat\Api\Model;

class Policy
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
     * @var int
     */
    protected $minimumTime;
    /**
     * 
     *
     * @var string
     */
    protected $defaultLanguage;
    /**
     * 
     *
     * @var int
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
     * @return int
     */
    public function getMinimumTime() : int
    {
        return $this->minimumTime;
    }
    /**
     * 
     *
     * @param int $minimumTime
     *
     * @return self
     */
    public function setMinimumTime(int $minimumTime) : self
    {
        $this->minimumTime = $minimumTime;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDefaultLanguage() : string
    {
        return $this->defaultLanguage;
    }
    /**
     * 
     *
     * @param string $defaultLanguage
     *
     * @return self
     */
    public function setDefaultLanguage(string $defaultLanguage) : self
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status) : self
    {
        $this->status = $status;
        return $this;
    }
}