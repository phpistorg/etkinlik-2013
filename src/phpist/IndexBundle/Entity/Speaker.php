<?php

namespace phpist\IndexBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Speaker
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Speaker
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
     * @ORM\Column(name="company_name", type="string", length=255)
     */
    private $companyName;

    /**
     * @var string
     *
     * @ORM\Column(name="slide_name", type="string", length=255)
     */
    private $slideName;

    /**
     * @var string
     *
     * @ORM\Column(name="slide_url", type="string", length=255)
     */
    private $slideUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string", length=255)
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="twitter", type="string", length=255)
     */
    private $twitter;

    /**
     * @var string
     *
     * @ORM\Column(name="slideshare", type="string", length=255)
     */
    private $slideshare;

    /**
     * @var string
     *
     * @ORM\Column(name="blog", type="string", length=255)
     */
    private $blog;

    /**
     * @var string
     *
     * @ORM\Column(name="github", type="string", length=255)
     */
    private $github;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedin", type="string", length=255)
     */
    private $linkedin;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="is_active", type="integer")
     */
    private $isActive;

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
     * @return Speaker
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
     * Set companyName
     *
     * @param string $companyName
     * @return Speaker
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    
        return $this;
    }

    /**
     * Get companyName
     *
     * @return string 
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set slideName
     *
     * @param string $slideName
     * @return Speaker
     */
    public function setSlideName($slideName)
    {
        $this->slideName = $slideName;
    
        return $this;
    }

    /**
     * Get slideName
     *
     * @return string 
     */
    public function getSlideName()
    {
        return $this->slideName;
    }

    /**
     * Set slideUrl
     *
     * @param string $slideUrl
     * @return Speaker
     */
    public function setSlideUrl($slideUrl)
    {
        $this->slideUrl = $slideUrl;
    
        return $this;
    }

    /**
     * Get slideUrl
     *
     * @return string 
     */
    public function getSlideUrl()
    {
        return $this->slideUrl;
    }

    /**
     * Set facebook
     *
     * @param string $facebook
     * @return Speaker
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    
        return $this;
    }

    /**
     * Get facebook
     *
     * @return string 
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     * @return Speaker
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    
        return $this;
    }

    /**
     * Get twitter
     *
     * @return string 
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set slideshare
     *
     * @param string $slideshare
     * @return Speaker
     */
    public function setSlideshare($slideshare)
    {
        $this->slideshare = $slideshare;
    
        return $this;
    }

    /**
     * Get slideshare
     *
     * @return string 
     */
    public function getSlideshare()
    {
        return $this->slideshare;
    }

    /**
     * Set blog
     *
     * @param string $blog
     * @return Speaker
     */
    public function setBlog($blog)
    {
        $this->blog = $blog;
    
        return $this;
    }

    /**
     * Get blog
     *
     * @return string 
     */
    public function getBlog()
    {
        return $this->blog;
    }

    /**
     * Set github
     *
     * @param string $github
     * @return Speaker
     */
    public function setGithub($github)
    {
        $this->github = $github;
    
        return $this;
    }

    /**
     * Get github
     *
     * @return string 
     */
    public function getGithub()
    {
        return $this->github;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     * @return Speaker
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;
    
        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string 
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Speaker
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set is_active
     *
     * @param integer $is_active
     * @return Speaker
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Speaker
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Speaker
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
