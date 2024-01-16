<?php

class BlogPagination
{
    private $baseUrl = '';
    private $countPages = 0;
    private $currentPage = 1;

    private $paginationList = [];

    /**
     * Constructor BlogPagination class
     *
     * @return void
     */
    public function __construct($countPages = 0, $currentPage = 1)
    {
        $this->baseUrl = home_url() . '/blog/page/';
        $this->countPages = $countPages;
        $this->currentPage = $currentPage;

        $this->initPaginationList();
    }

    /**
     * @return void
     */
    protected function initPaginationList()
    {
        for ($i = 0; $i < $this->countPages; $i++) {
            array_push($this->paginationList, [
                'id' => $i,
                'label' => $i + 1,
                'link' => $this->baseUrl . ($i + 1),
                'selected' => $this->currentPage === ($i + 1),
                'hidden' => false
            ]);
        }
    }

    /**
     * @return array
     */
    protected function filterHiddenItems()
    {
        if (count($this->paginationList) <= 8) return $this->paginationList;

        $emptyItem = [
            'label' => '...',
            'link' => '',
            'selected' => false
        ];

        $newPaginationList = [];

        if ($this->currentPage <= 4) {
            $newPaginationList = array_merge(
                $newPaginationList,
                array_slice($this->paginationList, 0, 4)
            );

            if ($this->currentPage == 4) array_push($newPaginationList, $this->paginationList[4]);

            array_push($newPaginationList, $emptyItem);

            array_push($newPaginationList, end($this->paginationList));
        } else if ((count($this->paginationList) - $this->currentPage) < 4) {
            array_push($newPaginationList, reset($this->paginationList));

            array_push($newPaginationList, $emptyItem);

            if ((count($this->paginationList) - $this->currentPage) == 3) array_push($newPaginationList, $this->paginationList[$this->currentPage - 2]);

            $newPaginationList = array_merge(
                $newPaginationList,
                array_slice($this->paginationList, -4, 4)
            );
        } else {
            array_push($newPaginationList, reset($this->paginationList));
            array_push($newPaginationList, $emptyItem);

            array_push($newPaginationList, $this->paginationList[$this->currentPage - 2]);
            array_push($newPaginationList, $this->paginationList[$this->currentPage - 1]);
            array_push($newPaginationList, $this->paginationList[$this->currentPage]);

            array_push($newPaginationList, $emptyItem);
            array_push($newPaginationList, end($this->paginationList));
        }

        return $newPaginationList;
    }

    /**
     * @return array
     */
    public function getPaginationList()
    {
        return $this->filterHiddenItems();
    }
}
