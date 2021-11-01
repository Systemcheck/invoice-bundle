<?php
/**
 * This file is part of the vardius/list-bundle package.
 *
 * (c) Rafał Lorenz <vardius@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vardius\Bundle\ListBundle\Paginator\Factory;

use Doctrine\ORM\QueryBuilder;
use Symfony\Bridge\Twig\TwigEngine;
use Vardius\Bundle\ListBundle\Paginator\Paginator;

/**
 * PaginatorFactory
 *
 * @author Rafał Lorenz <vardius@gmail.com>
 */
class PaginatorFactory
{
    /** @var TwigEngine */
    protected $templating;
    /** @var string */
    protected $templatePath;

    /**
     * @param TwigEngine $templating
     * @param string $templatePath
     */
    function __construct(TwigEngine $templating, $templatePath = 'VardiusListBundle:Paginator:')
    {
        $this->templating = $templating;
        $this->templatePath = $templatePath;
    }

    public function get(QueryBuilder $queryBuilder, $page, $limit)
    {
        $paginator = new Paginator($queryBuilder, $page, $limit);
        $paginator->setTemplatePath($this->templatePath);
        $paginator->setTemplating($this->templating);

        return $paginator;
    }
}
