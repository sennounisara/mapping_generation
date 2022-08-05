<?php


/**
 * Base class that represents a query for the 'Panier_Entreprise' table.
 *
 * 
 *
 * @method CommonPanierEntrepriseQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonPanierEntrepriseQuery orderByRefConsultation($order = Criteria::ASC) Order by the ref_consultation column
 * @method CommonPanierEntrepriseQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonPanierEntrepriseQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonPanierEntrepriseQuery orderByDateAjout($order = Criteria::ASC) Order by the date_ajout column
 *
 * @method CommonPanierEntrepriseQuery groupByOrganisme() Group by the organisme column
 * @method CommonPanierEntrepriseQuery groupByRefConsultation() Group by the ref_consultation column
 * @method CommonPanierEntrepriseQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonPanierEntrepriseQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonPanierEntrepriseQuery groupByDateAjout() Group by the date_ajout column
 *
 * @method CommonPanierEntrepriseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonPanierEntrepriseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonPanierEntrepriseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonPanierEntrepriseQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonPanierEntrepriseQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonPanierEntrepriseQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonPanierEntreprise findOne(PropelPDO $con = null) Return the first CommonPanierEntreprise matching the query
 * @method CommonPanierEntreprise findOneOrCreate(PropelPDO $con = null) Return the first CommonPanierEntreprise matching the query, or a new CommonPanierEntreprise object populated from the query conditions when no match is found
 *
 * @method CommonPanierEntreprise findOneByOrganisme(string $organisme) Return the first CommonPanierEntreprise filtered by the organisme column
 * @method CommonPanierEntreprise findOneByRefConsultation(int $ref_consultation) Return the first CommonPanierEntreprise filtered by the ref_consultation column
 * @method CommonPanierEntreprise findOneByIdEntreprise(int $id_entreprise) Return the first CommonPanierEntreprise filtered by the id_entreprise column
 * @method CommonPanierEntreprise findOneByIdInscrit(int $id_inscrit) Return the first CommonPanierEntreprise filtered by the id_inscrit column
 * @method CommonPanierEntreprise findOneByDateAjout(string $date_ajout) Return the first CommonPanierEntreprise filtered by the date_ajout column
 *
 * @method array findByOrganisme(string $organisme) Return CommonPanierEntreprise objects filtered by the organisme column
 * @method array findByRefConsultation(int $ref_consultation) Return CommonPanierEntreprise objects filtered by the ref_consultation column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonPanierEntreprise objects filtered by the id_entreprise column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonPanierEntreprise objects filtered by the id_inscrit column
 * @method array findByDateAjout(string $date_ajout) Return CommonPanierEntreprise objects filtered by the date_ajout column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPanierEntrepriseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonPanierEntrepriseQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonPanierEntreprise', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonPanierEntrepriseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonPanierEntrepriseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonPanierEntrepriseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonPanierEntrepriseQuery) {
            return $criteria;
        }
        $query = new CommonPanierEntrepriseQuery();
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
                         A Primary key composition: [$organisme, $ref_consultation, $id_entreprise, $id_inscrit]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonPanierEntreprise|CommonPanierEntreprise[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonPanierEntreprisePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonPanierEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPanierEntreprise A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `organisme`, `ref_consultation`, `id_entreprise`, `id_inscrit`, `date_ajout` FROM `Panier_Entreprise` WHERE `organisme` = :p0 AND `ref_consultation` = :p1 AND `id_entreprise` = :p2 AND `id_inscrit` = :p3';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);			
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonPanierEntreprise();
            $obj->hydrate($row);
            CommonPanierEntreprisePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3])));
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
     * @return CommonPanierEntreprise|CommonPanierEntreprise[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonPanierEntreprise[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonPanierEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonPanierEntreprisePeer::ORGANISME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonPanierEntreprisePeer::REF_CONSULTATION, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonPanierEntreprisePeer::ID_ENTREPRISE, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CommonPanierEntreprisePeer::ID_INSCRIT, $key[3], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonPanierEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonPanierEntreprisePeer::ORGANISME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonPanierEntreprisePeer::REF_CONSULTATION, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonPanierEntreprisePeer::ID_ENTREPRISE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CommonPanierEntreprisePeer::ID_INSCRIT, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonPanierEntrepriseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonPanierEntreprisePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the ref_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByRefConsultation(1234); // WHERE ref_consultation = 1234
     * $query->filterByRefConsultation(array(12, 34)); // WHERE ref_consultation IN (12, 34)
     * $query->filterByRefConsultation(array('min' => 12)); // WHERE ref_consultation >= 12
     * $query->filterByRefConsultation(array('max' => 12)); // WHERE ref_consultation <= 12
     * </code>
     *
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $refConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPanierEntrepriseQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (is_array($refConsultation)) {
            $useMinMax = false;
            if (isset($refConsultation['min'])) {
                $this->addUsingAlias(CommonPanierEntreprisePeer::REF_CONSULTATION, $refConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refConsultation['max'])) {
                $this->addUsingAlias(CommonPanierEntreprisePeer::REF_CONSULTATION, $refConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPanierEntreprisePeer::REF_CONSULTATION, $refConsultation, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPanierEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonPanierEntreprisePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonPanierEntreprisePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPanierEntreprisePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPanierEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonPanierEntreprisePeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonPanierEntreprisePeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPanierEntreprisePeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the date_ajout column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAjout('fooValue');   // WHERE date_ajout = 'fooValue'
     * $query->filterByDateAjout('%fooValue%'); // WHERE date_ajout LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAjout The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPanierEntrepriseQuery The current query, for fluid interface
     */
    public function filterByDateAjout($dateAjout = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAjout)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAjout)) {
                $dateAjout = str_replace('*', '%', $dateAjout);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPanierEntreprisePeer::DATE_AJOUT, $dateAjout, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation|PropelObjectCollection $commonConsultation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonPanierEntrepriseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonPanierEntreprisePeer::REF_CONSULTATION, $commonConsultation->getReference(), $comparison);
        } elseif ($commonConsultation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonPanierEntreprisePeer::REF_CONSULTATION, $commonConsultation->toKeyValue('Reference', 'Reference'), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonPanierEntrepriseQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonPanierEntreprise $commonPanierEntreprise Object to remove from the list of results
     *
     * @return CommonPanierEntrepriseQuery The current query, for fluid interface
     */
    public function prune($commonPanierEntreprise = null)
    {
        if ($commonPanierEntreprise) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonPanierEntreprisePeer::ORGANISME), $commonPanierEntreprise->getOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonPanierEntreprisePeer::REF_CONSULTATION), $commonPanierEntreprise->getRefConsultation(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonPanierEntreprisePeer::ID_ENTREPRISE), $commonPanierEntreprise->getIdEntreprise(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CommonPanierEntreprisePeer::ID_INSCRIT), $commonPanierEntreprise->getIdInscrit(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
