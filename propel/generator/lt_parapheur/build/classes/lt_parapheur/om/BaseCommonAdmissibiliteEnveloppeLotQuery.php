<?php


/**
 * Base class that represents a query for the 'Admissibilite_Enveloppe_Lot' table.
 *
 * 
 *
 * @method CommonAdmissibiliteEnveloppeLotQuery orderByIdOffre($order = Criteria::ASC) Order by the id_Offre column
 * @method CommonAdmissibiliteEnveloppeLotQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAdmissibiliteEnveloppeLotQuery orderBySousPli($order = Criteria::ASC) Order by the sous_pli column
 * @method CommonAdmissibiliteEnveloppeLotQuery orderByAdmissibilite($order = Criteria::ASC) Order by the admissibilite column
 * @method CommonAdmissibiliteEnveloppeLotQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonAdmissibiliteEnveloppeLotQuery orderByTypeEnveloppe($order = Criteria::ASC) Order by the type_enveloppe column
 * @method CommonAdmissibiliteEnveloppeLotQuery orderBySousReserve($order = Criteria::ASC) Order by the sous_reserve column
 *
 * @method CommonAdmissibiliteEnveloppeLotQuery groupByIdOffre() Group by the id_Offre column
 * @method CommonAdmissibiliteEnveloppeLotQuery groupByOrganisme() Group by the organisme column
 * @method CommonAdmissibiliteEnveloppeLotQuery groupBySousPli() Group by the sous_pli column
 * @method CommonAdmissibiliteEnveloppeLotQuery groupByAdmissibilite() Group by the admissibilite column
 * @method CommonAdmissibiliteEnveloppeLotQuery groupByCommentaire() Group by the commentaire column
 * @method CommonAdmissibiliteEnveloppeLotQuery groupByTypeEnveloppe() Group by the type_enveloppe column
 * @method CommonAdmissibiliteEnveloppeLotQuery groupBySousReserve() Group by the sous_reserve column
 *
 * @method CommonAdmissibiliteEnveloppeLotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAdmissibiliteEnveloppeLotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAdmissibiliteEnveloppeLotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAdmissibiliteEnveloppeLot findOne(PropelPDO $con = null) Return the first CommonAdmissibiliteEnveloppeLot matching the query
 * @method CommonAdmissibiliteEnveloppeLot findOneOrCreate(PropelPDO $con = null) Return the first CommonAdmissibiliteEnveloppeLot matching the query, or a new CommonAdmissibiliteEnveloppeLot object populated from the query conditions when no match is found
 *
 * @method CommonAdmissibiliteEnveloppeLot findOneByIdOffre(int $id_Offre) Return the first CommonAdmissibiliteEnveloppeLot filtered by the id_Offre column
 * @method CommonAdmissibiliteEnveloppeLot findOneByOrganisme(string $organisme) Return the first CommonAdmissibiliteEnveloppeLot filtered by the organisme column
 * @method CommonAdmissibiliteEnveloppeLot findOneBySousPli(int $sous_pli) Return the first CommonAdmissibiliteEnveloppeLot filtered by the sous_pli column
 * @method CommonAdmissibiliteEnveloppeLot findOneByAdmissibilite(int $admissibilite) Return the first CommonAdmissibiliteEnveloppeLot filtered by the admissibilite column
 * @method CommonAdmissibiliteEnveloppeLot findOneByCommentaire(string $commentaire) Return the first CommonAdmissibiliteEnveloppeLot filtered by the commentaire column
 * @method CommonAdmissibiliteEnveloppeLot findOneByTypeEnveloppe(int $type_enveloppe) Return the first CommonAdmissibiliteEnveloppeLot filtered by the type_enveloppe column
 * @method CommonAdmissibiliteEnveloppeLot findOneBySousReserve(string $sous_reserve) Return the first CommonAdmissibiliteEnveloppeLot filtered by the sous_reserve column
 *
 * @method array findByIdOffre(int $id_Offre) Return CommonAdmissibiliteEnveloppeLot objects filtered by the id_Offre column
 * @method array findByOrganisme(string $organisme) Return CommonAdmissibiliteEnveloppeLot objects filtered by the organisme column
 * @method array findBySousPli(int $sous_pli) Return CommonAdmissibiliteEnveloppeLot objects filtered by the sous_pli column
 * @method array findByAdmissibilite(int $admissibilite) Return CommonAdmissibiliteEnveloppeLot objects filtered by the admissibilite column
 * @method array findByCommentaire(string $commentaire) Return CommonAdmissibiliteEnveloppeLot objects filtered by the commentaire column
 * @method array findByTypeEnveloppe(int $type_enveloppe) Return CommonAdmissibiliteEnveloppeLot objects filtered by the type_enveloppe column
 * @method array findBySousReserve(string $sous_reserve) Return CommonAdmissibiliteEnveloppeLot objects filtered by the sous_reserve column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAdmissibiliteEnveloppeLotQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAdmissibiliteEnveloppeLotQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAdmissibiliteEnveloppeLot', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAdmissibiliteEnveloppeLotQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAdmissibiliteEnveloppeLotQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAdmissibiliteEnveloppeLotQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAdmissibiliteEnveloppeLotQuery) {
            return $criteria;
        }
        $query = new CommonAdmissibiliteEnveloppeLotQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34, 56, 78), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id_Offre, $organisme, $sous_pli, $type_enveloppe]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonAdmissibiliteEnveloppeLot|CommonAdmissibiliteEnveloppeLot[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAdmissibiliteEnveloppeLotPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteEnveloppeLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonAdmissibiliteEnveloppeLot A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_Offre`, `organisme`, `sous_pli`, `admissibilite`, `commentaire`, `type_enveloppe`, `sous_reserve` FROM `Admissibilite_Enveloppe_Lot` WHERE `id_Offre` = :p0 AND `organisme` = :p1 AND `sous_pli` = :p2 AND `type_enveloppe` = :p3';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);			
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonAdmissibiliteEnveloppeLot();
            $obj->hydrate($row);
            CommonAdmissibiliteEnveloppeLotPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonAdmissibiliteEnveloppeLot|CommonAdmissibiliteEnveloppeLot[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonAdmissibiliteEnveloppeLot[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonAdmissibiliteEnveloppeLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAdmissibiliteEnveloppeLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_Offre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOffre(1234); // WHERE id_Offre = 1234
     * $query->filterByIdOffre(array(12, 34)); // WHERE id_Offre IN (12, 34)
     * $query->filterByIdOffre(array('min' => 12)); // WHERE id_Offre >= 12
     * $query->filterByIdOffre(array('max' => 12)); // WHERE id_Offre <= 12
     * </code>
     *
     * @param     mixed $idOffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdmissibiliteEnveloppeLotQuery The current query, for fluid interface
     */
    public function filterByIdOffre($idOffre = null, $comparison = null)
    {
        if (is_array($idOffre)) {
            $useMinMax = false;
            if (isset($idOffre['min'])) {
                $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE, $idOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOffre['max'])) {
                $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE, $idOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE, $idOffre, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdmissibiliteEnveloppeLotQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the sous_pli column
     *
     * Example usage:
     * <code>
     * $query->filterBySousPli(1234); // WHERE sous_pli = 1234
     * $query->filterBySousPli(array(12, 34)); // WHERE sous_pli IN (12, 34)
     * $query->filterBySousPli(array('min' => 12)); // WHERE sous_pli >= 12
     * $query->filterBySousPli(array('max' => 12)); // WHERE sous_pli <= 12
     * </code>
     *
     * @param     mixed $sousPli The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdmissibiliteEnveloppeLotQuery The current query, for fluid interface
     */
    public function filterBySousPli($sousPli = null, $comparison = null)
    {
        if (is_array($sousPli)) {
            $useMinMax = false;
            if (isset($sousPli['min'])) {
                $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI, $sousPli['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sousPli['max'])) {
                $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI, $sousPli['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI, $sousPli, $comparison);
    }

    /**
     * Filter the query on the admissibilite column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmissibilite(1234); // WHERE admissibilite = 1234
     * $query->filterByAdmissibilite(array(12, 34)); // WHERE admissibilite IN (12, 34)
     * $query->filterByAdmissibilite(array('min' => 12)); // WHERE admissibilite >= 12
     * $query->filterByAdmissibilite(array('max' => 12)); // WHERE admissibilite <= 12
     * </code>
     *
     * @param     mixed $admissibilite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdmissibiliteEnveloppeLotQuery The current query, for fluid interface
     */
    public function filterByAdmissibilite($admissibilite = null, $comparison = null)
    {
        if (is_array($admissibilite)) {
            $useMinMax = false;
            if (isset($admissibilite['min'])) {
                $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::ADMISSIBILITE, $admissibilite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($admissibilite['max'])) {
                $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::ADMISSIBILITE, $admissibilite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::ADMISSIBILITE, $admissibilite, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdmissibiliteEnveloppeLotQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the type_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnveloppe(1234); // WHERE type_enveloppe = 1234
     * $query->filterByTypeEnveloppe(array(12, 34)); // WHERE type_enveloppe IN (12, 34)
     * $query->filterByTypeEnveloppe(array('min' => 12)); // WHERE type_enveloppe >= 12
     * $query->filterByTypeEnveloppe(array('max' => 12)); // WHERE type_enveloppe <= 12
     * </code>
     *
     * @param     mixed $typeEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdmissibiliteEnveloppeLotQuery The current query, for fluid interface
     */
    public function filterByTypeEnveloppe($typeEnveloppe = null, $comparison = null)
    {
        if (is_array($typeEnveloppe)) {
            $useMinMax = false;
            if (isset($typeEnveloppe['min'])) {
                $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE, $typeEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnveloppe['max'])) {
                $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE, $typeEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE, $typeEnveloppe, $comparison);
    }

    /**
     * Filter the query on the sous_reserve column
     *
     * Example usage:
     * <code>
     * $query->filterBySousReserve('fooValue');   // WHERE sous_reserve = 'fooValue'
     * $query->filterBySousReserve('%fooValue%'); // WHERE sous_reserve LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sousReserve The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdmissibiliteEnveloppeLotQuery The current query, for fluid interface
     */
    public function filterBySousReserve($sousReserve = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sousReserve)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sousReserve)) {
                $sousReserve = str_replace('*', '%', $sousReserve);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteEnveloppeLotPeer::SOUS_RESERVE, $sousReserve, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAdmissibiliteEnveloppeLot $commonAdmissibiliteEnveloppeLot Object to remove from the list of results
     *
     * @return CommonAdmissibiliteEnveloppeLotQuery The current query, for fluid interface
     */
    public function prune($commonAdmissibiliteEnveloppeLot = null)
    {
        if ($commonAdmissibiliteEnveloppeLot) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAdmissibiliteEnveloppeLotPeer::ID_OFFRE), $commonAdmissibiliteEnveloppeLot->getIdOffre(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAdmissibiliteEnveloppeLotPeer::ORGANISME), $commonAdmissibiliteEnveloppeLot->getOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonAdmissibiliteEnveloppeLotPeer::SOUS_PLI), $commonAdmissibiliteEnveloppeLot->getSousPli(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CommonAdmissibiliteEnveloppeLotPeer::TYPE_ENVELOPPE), $commonAdmissibiliteEnveloppeLot->getTypeEnveloppe(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
