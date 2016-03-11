OlixDatatablesBootstrapBundle
=============================

See https://github.com/stwe/DatatablesBundle

Change only in your Datatable class :

`use Sg\DatatablesBundle\Datatable\View\AbstractDatatableView;`

by

`use Olix\DatatablesBootstrapBundle\Datatable\AbstractDatatableView;`


Pour la correction sous PostgreSQL

``` php
foreach ($this->columns as $key => $column) {
    if (true === $this->isSearchColumn($column)) {
        $searchField = $this->searchColumns[$key];
        //$orExpr->add($qb->expr()->like($searchField, '?' . $key));
        //$qb->setParameter($key, '%' . $globalSearch . '%');
        $searchType = $column->getSearchType();
        if ($searchType == 'like') {
            $orExpr->add($qb->expr()->like($qb->expr()->lower($searchField), '?' . $key));
            $qb->setParameter($key, '%' . strtolower($globalSearch) . '%');
        }
    }
}
```