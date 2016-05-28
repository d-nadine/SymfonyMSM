<?php

namespace msmBundle\Entity;

/**
 * sessions
 */
class sessions
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sessionName;

    /**
     * @var string
     */
    private $sessionid;

    /**
     * @var \DateTime
     */
    private $sessionDate;


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
     * Set sessionName
     *
     * @param string $sessionName
     *
     * @return sessions
     */
    public function setSessionName($sessionName)
    {
        $this->sessionName = $sessionName;

        return $this;
    }

    /**
     * Get sessionName
     *
     * @return string
     */
    public function getSessionName()
    {
        return $this->sessionName;
    }

    /**
     * Set sessionid
     *
     * @param string $sessionid
     *
     * @return sessions
     */
    public function setSessionid($sessionid)
    {
        $this->sessionid = $sessionid;

        return $this;
    }

    /**
     * Get sessionid
     *
     * @return string
     */
    public function getSessionid()
    {
        return $this->sessionid;
    }

    /**
     * Set sessionDate
     *
     * @param \DateTime $sessionDate
     *
     * @return sessions
     */
    public function setSessionDate($sessionDate)
    {
        $this->sessionDate = $sessionDate;

        return $this;
    }

    /**
     * Get sessionDate
     *
     * @return \DateTime
     */
    public function getSessionDate()
    {
        return $this->sessionDate;
    }
}

