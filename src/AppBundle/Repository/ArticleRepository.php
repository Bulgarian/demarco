<?php


namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Article;

/**
 * This custom Doctrine repository contains some methods which are useful when
 * querying for blog post information.
 */
class ArticleRepository extends EntityRepository
{
    /**
     * @param array $sections
     * @param int   $limit
     * @return array
     */
    public function findArticlesForPage($sections, $limit = Article::NUM_ITEMS)
    {
        return $this
            ->createQueryBuilder('a')
            ->select('a')
            ->where('a.publishedAt <= :now')->setParameter('now', new \DateTime())
            ->andWhere('a.section in (:section)')->setParameter('section', $sections)
            ->orderBy('a.publishedAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY)
        ;
    }

    public function getAllSections()
    {
        return $this
            ->createQueryBuilder('a')
            ->select('a.section')
            ->add('groupBy', 'a.section')
            ->getQuery()
            ->getResult()
        ;
    }
}
