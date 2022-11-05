<?php

class Post
{
    private $id;
    private $title;
    private $sumary;
    private $content;
    private $imgThummail;
    private $createdAt;
    private $createdBy;
    private bool $hotNews;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Post
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSumary()
    {
        return $this->sumary;
    }

    /**
     * @param mixed $sumary
     * @return Post
     */
    public function setSumary($sumary)
    {
        $this->sumary = $sumary;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImgThummail()
    {
        return $this->imgThummail;
    }

    /**
     * @param mixed $imgThummail
     * @return Post
     */
    public function setImgThummail($imgThummail)
    {
        $this->imgThummail = $imgThummail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     * @return Post
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     * @return Post
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHotNews()
    {
        return $this->hotNews;
    }

    /**
     * @param mixed $hotNews
     * @return Post
     */
    public function setHotNews($hotNews)
    {
        $this->hotNews = $hotNews;
        return $this;
    }
}