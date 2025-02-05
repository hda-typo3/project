<?php

declare(strict_types=1);

namespace Hda\Project\Domain\Model;

use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Person extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $name = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $firstname = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $lastname = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $email = '';
    
    // getter/setter ------------------------------------------
    
    
    /**
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @return string $lastname
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /**
     * @return string $firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }  
}
