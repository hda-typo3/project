<?php

declare(strict_types=1);

namespace Hda\Project\Controller;

use Hda\Project\Domain\Model\Project;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Pagination\SlidingWindowPagination;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Pagination\QueryResultPaginator;
use TYPO3\CMS\Core\Utility\GeneralUtility;


class ProjectController extends ActionController
{
    
    protected ProjectRepository $projectRepository;
    protected CategoryRepository $categoryRepository;
    protected SemesterRepository $semesterRepository;
    protected DegreecourseRepository $degreecourseRepository;
    
    
    public function __construct(
        ProjectRepository $projectRepository,
        CategoryRepository $categoryRepository,
        SemesterRepository $semesterRepository,
        DegreecourseRepository $degreecourseRepository        
        ){
            $this->projectRepository = $projectRepository;
            $this->categoryRepository = $categoryRepository;
            $this->semesterRepository = $semesterRepository;
            $this->degreecourseRepository = $degreecourseRepository;
    }
 
    public function indexAction(): ResponseInterface
    {
        $this->view->assign('projects', $this->projectRepository->findAll());
        return $this->htmlResponse();
    }
    
    public function showAction(Project $project): ResponseInterface
    {
        $this->view->assign('project', $project);
        // \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($project);
        return $this->htmlResponse();
    }
    
    
    
}
