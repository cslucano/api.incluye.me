<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProjectRepository")
 */
class Project
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="short_name", type="string", length=255)
     */
    private $shortName;

    /**
     * @var array
     *
     * @ORM\Column(name="disability_type", type="array")
     */
    private $disabilityType;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="project_level", type="string", length=255)
     */
    private $projectLevel;

    /**
     * @var string
     *
     * @ORM\Column(name="project_type", type="string", length=255)
     */
    private $projectType;


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
     * Set name
     *
     * @param string $name
     *
     * @return Project
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
     * Set shortName
     *
     * @param string $shortName
     *
     * @return Project
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set disabilityType
     *
     * @param array $disabilityType
     *
     * @return Project
     */
    public function setDisabilityType($disabilityType)
    {
        $this->disabilityType = $disabilityType;

        return $this;
    }

    /**
     * Get disabilityType
     *
     * @return array
     */
    public function getDisabilityType()
    {
        return $this->disabilityType;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Project
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set projectLevel
     *
     * @param string $projectLevel
     *
     * @return Project
     */
    public function setProjectLevel($projectLevel)
    {
        $this->projectLevel = $projectLevel;

        return $this;
    }

    /**
     * Get projectLevel
     *
     * @return string
     */
    public function getProjectLevel()
    {
        return $this->projectLevel;
    }

    /**
     * Set projectType
     *
     * @param string $projectType
     *
     * @return Project
     */
    public function setProjectType($projectType)
    {
        $this->projectType = $projectType;

        return $this;
    }

    /**
     * Get projectType
     *
     * @return string
     */
    public function getProjectType()
    {
        return $this->projectType;
    }
}

