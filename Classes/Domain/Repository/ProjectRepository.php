<?php

declare(strict_types=1);

namespace Hda\Project\Domain\Repository;


use Hda\Project\Domain\Model\Project;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;

class ProjectRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    protected $defaultOrderings = ['title' => QueryInterface::ORDER_ASCENDING];
    
    public function findAll(
        ): QueryResultInterface
        {
    
    $query = $this->createQuery();
    $query->getQuerySettings()->setRespectStoragePage(false);
    $query->setOrderings([
        'title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    ]);
    
    return $query->execute();
    }
}