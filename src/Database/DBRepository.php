<?php 

namespace Qik\Database;

class DBRepository extends DBQuery
{
    public $pagination = false;
    public $paginationPage = 0;
    public $paginationSize = 0;
    public $queryTotalRows = null;

    public function setPagination($paginationParams)
    {
        if (!empty($paginationParams)) {
            $this->pagination = true;
            $this->paginationPage = $paginationParams['_page'];
            $this->paginationSize = $paginationParams['_pageSize'];
        }
    }

    public function getPaginationData()
    {
        return [
            '_page' => $this->paginationPage,
            '_pageSize' => $this->paginationSize,
            '_totalRows' => $this->queryTotalRows,
        ];
    }

    public function addPagination($dbq) 
    {
        if ($this->pagination) {
            $this->queryTotalRows = $dbq->count();
            $offset = ($this->paginationPage - 1)  * $this->paginationSize;
            $dbq->offset($offset);            
            $dbq->limit($this->paginationSize);
        }

        return $dbq;
    }
}