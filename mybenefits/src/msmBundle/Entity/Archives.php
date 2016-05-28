<?php

namespace msmBundle\Entity;

/**
 * Archives
 */
class Archives
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $archiveid;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $sessionid;


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
     * Set archiveid
     *
     * @param string $archiveid
     *
     * @return Archives
     */
    public function setArchiveid($archiveid)
    {
        $this->archiveid = $archiveid;

        return $this;
    }

    /**
     * Get archiveid
     *
     * @return string
     */
    public function getArchiveid()
    {
        return $this->archiveid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Archives
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Archives
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set sessionid
     *
     * @param string $sessionid
     *
     * @return Archives
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
}

