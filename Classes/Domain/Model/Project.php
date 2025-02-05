<?php

declare(strict_types=1);

namespace Hda\Project\Domain\Model;

use TYPO3\CMS\Extbase\Annotation as Extbase;
use TYPO3\CMS\Extbase\Domain\Model\FileReference;
use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\Generic\LazyLoadingProxy;

class Project extends AbstractEntity
{
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $title = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $teaser = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $description = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $studentsfreetext = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $lecturersfreetext = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $date = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $copartner = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $copartnerlink = '';
    
    /**
     * @var FileReference|null
     * @phpstan-var FileReference|LazyLoadingProxy|null
     * @Extbase\ORM\Lazy
     */
    protected $topimage;
    
        /**
     * @var FileReference|null
     * @phpstan-var FileReference|LazyLoadingProxy|null
     * @Extbase\ORM\Lazy
     */
    protected $media;
    
    /**
     * @var FileReference|null
     * @phpstan-var FileReference|LazyLoadingProxy|null
     * @Extbase\ORM\Lazy
     */
    protected $thumbimage;
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $lightboxstyle = '';
    
    /**
     * @Extbase\Validate("StringLength", options={"maximum": 255})
     * @Extbase\Validate("NotEmpty")
     */
    protected string $pathSegment = '';
    
    /**
     * category
     *
     * @var \Hda\Project\Domain\Model\Category
     */
    protected $category = null;
    
    /**
     * degreecourse
     *
     * @var \Hda\Project\Domain\Model\Degreecourse
     */
    protected $degreecourse = null;
    
    /**
     * semester
     *
     * @var \Hda\Project\Domain\Model\Semester
     */
    protected $semester = null;
    
    /**
     * students
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Project\Domain\Model\Students>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $students = null;
    
    /**
     * lecturers
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Project\Domain\Model\Lecturers>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $lecturers = null;
    
    
    /**
     * __construct
     */
    public function __construct()
    {
        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }
    
    /**
     * @return string title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
    
    /**
     * Returns the category
     *
     * @return \Hda\Project\Domain\Model\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * Sets the category
     *
     * @param \Hda\Project\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(\Hda\Project\Domain\Model\Category $category)
    {
        $this->category = $category;
    }
    
    /**
     * Returns the degreecourse
     *
     * @return \Hda\Project\Domain\Model\Degreecourse
     */
    public function getDegreecourse()
    {
        return $this->degreecourse;
    }
    
    /**
     * Sets the degreecourse
     *
     * @param \Hda\Project\Domain\Model\Degreecourse $degreecourse
     * @return void
     */
    public function setDegreecourse(\Hda\Project\Domain\Model\Degreecourse $degreecourse)
    {
        $this->degreecourse = $degreecourse;
    }
    
    /**
     * Returns the semester
     *
     * @return \Hda\Project\Domain\Model\Semester
     */
    public function getSemester()
    {
        return $this->semester;
    }
    
    /**
     * Sets the semester
     *
     * @param \Hda\Project\Domain\Model\Semester $semester
     * @return void
     */
    public function setSemester(\Hda\Project\Domain\Model\Semester $semester)
    {
        $this->semester = $semester;
    }
    
    /**
     * Returns the teaser
     *
     * @return string
     */
    public function getTeaser()
    {
        return $this->teaser;
    }
    
    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser(string $teaser)
    {
        $this->teaser = $teaser;
    }
    
    /**
     * Returns the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }
    
    /**
     * Returns the studentsfreetext
     *
     * @return string
     */
    public function getStudentsfreetext()
    {
        return $this->studentsfreetext;
    }
    
    /**
     * Sets the studentsfreetext
     *
     * @param string $studentsfreetext
     * @return void
     */
    public function setStudentsfreetext(string $studentsfreetext)
    {
        $this->studentsfreetext = $studentsfreetext;
    }
    
    /**
     * Returns the lecturersfreetext
     *
     * @return string
     */
    public function getLecturersfreetext()
    {
        return $this->lecturersfreetext;
    }
    
    /**
     * Sets the lecturersfreetext
     *
     * @param string $lecturersfreetext
     * @return void
     */
    public function setLecturersfreetext(\DateTime $lecturersfreetext)
    {
        $this->lecturersfreetext = $lecturersfreetext;
    }
    
    /**
     * Returns the date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
    
    /**
     * Sets the date
     *
     * @param string $date
     * @return void
     */
    public function setDate(string $date)
    {
        $this->date = $date;
    }
    
    /**
     * Returns the copartner
     *
     * @return string
     */
    public function getCopartner()
    {
        return $this->copartner;
    }
    
    /**
     * Sets the copartner
     *
     * @param string $copartner
     * @return void
     */
    public function setCopartner(string $copartner)
    {
        $this->copartner = $copartner;
    }
    
    /**
     * Returns the copartnerlink
     *
     * @return string
     */
    public function getCopartnerlink()
    {
        return $this->copartnerlink;
    }
    
    /**
     * Sets the copartnerlink
     *
     * @param string $copartnerlink
     * @return void
     */
    public function setCopartnerlink(string $copartnerlink)
    {
        $this->copartnerlink = $copartnerlink;
    }
    
    /**
     * Returns the topimage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getTopimage()
    {
        return $this->topimage;
    }
    
    /**
     * Sets the topimage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $topimage
     * @return void
     */
    public function setTopimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $topimage)
    {
        $this->topimage = $topimage;
    }
    
    /**
     * Returns the media
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getMedia()
    {
        return $this->media;
    }
    
    /**
     * Sets the media
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $media
     * @return void
     */
    public function setMedia(\TYPO3\CMS\Extbase\Domain\Model\FileReference $media)
    {
        $this->media = $media;
    }
    
    /**
     * Returns the thumbimage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getThumbimage()
    {
        return $this->thumbimage;
    }
    
    /**
     * Sets the thumbimage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbimage
     * @return void
     */
    public function setThumbimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbimage)
    {
        $this->thumbimage = $thumbimage;
    }
    
    /**
     * Returns the lightboxstyle
     *
     * @return int
     */
    public function getLightboxstyle()
    {
        return $this->lightboxstyle;
    }
    
    /**
     * Sets the lightboxstyle
     *
     * @param int $lightboxstyle
     * @return void
     */
    public function setLightboxstyle(int $lightboxstyle)
    {
        $this->lightboxstyle = $lightboxstyle;
    }
    
    /**
     * Returns the pathSegment
     *
     * @return string
     */
    public function getPathSegment()
    {
        return $this->pathSegment;
    }
    
    /**
     * Sets the pathSegment
     *
     * @param string $pathSegment
     * @return void
     */
    public function setPathSegment(string $pathSegment)
    {
        $this->pathSegment = $pathSegment;
    }
    
    /**
     * __construct
     */
    public function __construct()
    {
        
        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->media = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->lecturers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->students = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    
    /**
     * Adds a student
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $students
     * @return void
     */
    public function addStudents(\TYPO3\CMS\Extbase\Domain\Model\FrontendUser $students)
    {
        $this->students->attach($students);
    }
    
    /**
     * Removes a student
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $studentsToRemove The FileReference to be removed
     * @return void
     */
    public function removeStudents(\TYPO3\CMS\Extbase\Domain\Model\FrontendUser $studentsToRemove)
    {
        $this->students->detach($studentsToRemove);
    }
    
    /**
     * Returns the students
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $students
     */
    public function getStudents()
    {
        return $this->students;
    }
    
    /**
     * Sets the students
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $students
     * @return void
     */
    public function setStudents(\TYPO3\CMS\Extbase\Domain\Model\FrontendUser $students)
    {
        $this->students = $students;
    }
    
    
    /**
     * Adds a lecturer
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $lecturers
     * @return void
     */
    public function addLecturers(\TYPO3\CMS\Extbase\Domain\Model\FrontendUser $lecturers)
    {
        $this->lecturers->attach($lecturers);
    }
    
    /**
     * Removes a lecturer
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FrontendUser $lecturersToRemove The FileReference to be removed
     * @return void
     */
    public function removeLecturers(\TYPO3\CMS\Extbase\Domain\Model\FrontendUser $lecturersToRemove)
    {
        $this->lecturers->detach($lecturersToRemove);
    }
    
    /**
     * Returns the lecturers
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FrontendUser> $lecturers
     */
    public function getLecturers()
    {
        return $this->lecturers;
    }
    
    /**
     * Sets the lecturers
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FrontendUser> $lecturers
     * @return void
     */
    public function setLecturers(\TYPO3\CMS\Extbase\Domain\Model\FrontendUser $lecturers)
    {
        $this->lecturers = $lecturers;
    }
}