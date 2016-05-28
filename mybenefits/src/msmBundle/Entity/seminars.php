<?php

namespace msmBundle\Entity;

/**
 * seminars
 */
class seminars
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $seminarName;

    /**
     * @var \DateTime
     */
    private $seminarTime;

    /**
     * @var string
     */
    private $seminarDescription;

    /**
     * @var string
     */
    private $seminarVideo;

    /**
     * @var string
     */
    private $seminarHost;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set seminarName
     *
     * @param string $seminarName
     *
     * @return seminars
     */
    public function setSeminarName($seminarName)
    {
        $this->seminarName = $seminarName;

        return $this;
    }

    /**
     * Get seminarName
     *
     * @return string
     */
    public function getSeminarName()
    {
        return $this->seminarName;
    }

    /**
     * Set seminarTime
     *
     * @param \DateTime $seminarTime
     *
     * @return seminars
     */
    public function setSeminarTime($seminarTime)
    {
        $this->seminarTime = $seminarTime;

        return $this;
    }

    /**
     * Get seminarTime
     *
     * @return \DateTime
     */
    public function getSeminarTime()
    {
        return $this->seminarTime;
    }

    /**
     * Set seminarDescription
     *
     * @param string $seminarDescription
     *
     * @return seminars
     */
    public function setSeminarDescription($seminarDescription)
    {
        $this->seminarDescription = $seminarDescription;

        return $this;
    }

    /**
     * Get seminarDescription
     *
     * @return string
     */
    public function getSeminarDescription()
    {
        return $this->seminarDescription;
    }

    /**
     * Set seminarVideo
     *
     * @param string $seminarVideo
     *
     * @return seminars
     */
    public function setSeminarVideo($seminarVideo)
    {
        $this->seminarVideo = $seminarVideo;

        return $this;
    }

    /**
     * Get seminarVideo
     *
     * @return string
     */
    public function getSeminarVideo()
    {
        return $this->seminarVideo;
    }

    /**
     * Set seminarHost
     *
     * @param string $seminarHost
     *
     * @return seminars
     */
    public function setSeminarHost($seminarHost)
    {
        $this->seminarHost = $seminarHost;

        return $this;
    }

    /**
     * Get seminarHost
     *
     * @return string
     */
    public function getSeminarHost()
    {
        return $this->seminarHost;
    }
}

