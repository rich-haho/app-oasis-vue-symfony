<?php
/*
 * This file has been automatically generated by TDBM.
 * You can edit this file as it will not be overwritten.
 */

declare(strict_types=1);

namespace App\Infrastructure\Dao;

use App\Domain\Exception\NotFound;
use App\Domain\Model\Right;
use App\Domain\Repository\RightRepository;
use App\Infrastructure\Dao\Generated\AbstractRightDao;
use TheCodingMachine\TDBM\ResultIterator;

/**
 * The RightDao class will maintain the persistence of Right class into the rights table.
 */
class RightDao extends AbstractRightDao implements RightRepository
{
    /**
     * @throws NotFound
     */
    public function mustFindOneByCode(string $code): Right
    {
        $right = $this->findOne(['code' => $code]);
        if ($right === null) {
            throw new NotFound(Right::class, ['code' => $code]);
        }

        return $right;
    }

    /**
     * @throws NotFound
     */
    public function mustFindOneById(string $id): Right
    {
        $right = $this->findOne(['id' => $id]);
        if ($right === null) {
            throw new NotFound(Right::class, ['id' => $id]);
        }

        return $right;
    }

    public function findByFilters(): ResultIterator
    {
        return $this->find(null, [], 'order_view');
    }
}