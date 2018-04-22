<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApiUser
 *
 * @ORM\Table(name="api_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ApiUserRepository")
 */
class ApiUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="index", type="integer", nullable=true)
     */
    private $index;

    /**
     * @var int|null
     *
     * @ORM\Column(name="indexStartAt", type="integer", nullable=true)
     */
    private $indexStartAt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="_integer", type="integer", nullable=true)
     */
    private $integer;

    /**
     * @var float|null
     *
     * @ORM\Column(name="_float", type="float", nullable=true)
     */
    private $float;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="surname", type="string", length=255, nullable=true)
     */
    private $surname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fullname", type="string", length=255, nullable=true)
     */
    private $fullname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="bool", type="boolean", nullable=true)
     */
    private $bool;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set index.
     *
     * @param int|null $index
     *
     * @return ApiUser
     */
    public function setIndex($index = null)
    {
        $this->index = $index;

        return $this;
    }

    /**
     * Get index.
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Set indexStartAt.
     *
     * @param int|null $indexStartAt
     *
     * @return ApiUser
     */
    public function setIndexStartAt($indexStartAt = null)
    {
        $this->indexStartAt = $indexStartAt;

        return $this;
    }

    /**
     * Get indexStartAt.
     *
     * @return int|null
     */
    public function getIndexStartAt()
    {
        return $this->indexStartAt;
    }

    /**
     * Set integer.
     *
     * @param int|null $integer
     *
     * @return ApiUser
     */
    public function setInteger($integer = null)
    {
        $this->integer = $integer;

        return $this;
    }

    /**
     * Get integer.
     *
     * @return int|null
     */
    public function getInteger()
    {
        return $this->integer;
    }

    /**
     * Set float.
     *
     * @param float|null $float
     *
     * @return ApiUser
     */
    public function setFloat($float = null)
    {
        $this->float = $float;

        return $this;
    }

    /**
     * Get float.
     *
     * @return float|null
     */
    public function getFloat()
    {
        return $this->float;
    }

    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return ApiUser
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname.
     *
     * @param string|null $surname
     *
     * @return ApiUser
     */
    public function setSurname($surname = null)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname.
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set fullname.
     *
     * @param string|null $fullname
     *
     * @return ApiUser
     */
    public function setFullname($fullname = null)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get fullname.
     *
     * @return string|null
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set email.
     *
     * @param string|null $email
     *
     * @return ApiUser
     */
    public function setEmail($email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set bool.
     *
     * @param bool|null $bool
     *
     * @return ApiUser
     */
    public function setBool($bool = null)
    {
        $this->bool = $bool;

        return $this;
    }

    /**
     * Get bool.
     *
     * @return bool|null
     */
    public function getBool()
    {
        return $this->bool;
    }
}
