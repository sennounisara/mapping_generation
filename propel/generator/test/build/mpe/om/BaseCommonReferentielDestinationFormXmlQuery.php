<?php


/**
 * Base class that represents a query for the 'ReferentielDestinationFormXml' table.
 *
 * 
 *
 * @method CommonReferentielDestinationFormXmlQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonReferentielDestinationFormXmlQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonReferentielDestinationFormXmlQuery orderByDestinataire($order = Criteria::ASC) Order by the destinataire column
 *
 * @method CommonReferentielDestinationFormXmlQuery groupById() Group by the id column
 * @method CommonReferentielDestinationFormXmlQuery groupByOrganisme() Group by the organisme column
 * @method CommonReferentielDestinationFormXmlQuery groupByDestinataire() Group by the destinataire column
 *
 * @method CommonReferentielDestinationFormXmlQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReferentielDestinationFormXmlQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReferentielDestinationFormXmlQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReferentielDestinationFormXmlQuery leftJoinCommonAnnonceMoniteur($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAnnonceMoniteur relation
 * @method CommonReferentielDestinationFormXmlQuery rightJoinCommonAnnonceMoniteur($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAnnonceMoniteur relation
 * @method CommonReferentielDestinationFormXmlQuery innerJoinCommonAnnonceMoniteur($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAnnonceMoniteur relation
 *
 * @method CommonReferentielDestinationFormXml findOne(PropelPDO $con = null) Return the first CommonReferentielDestinationFormXml matching the query
 * @method CommonReferentielDestinationFormXml findOneOrCreate(PropelPDO $con = null) Return the first CommonReferentielDestinationFormXml matching the query, or a new CommonReferentielDestinationFormXml object populated from the query conditions when no match is found
 *
 * @method CommonReferentielDestinationFormXml findOneById(int $id) Return the first CommonReferentielDestinationFormXml filtered by the id column
 * @method CommonReferentielDestinationFormXml findOneByOrganisme(string $organisme) Return the first CommonReferentielDestinationFormXml filtered by the organisme column
 * @method CommonReferentielDestinationFormXml findOneByDestinataire(string $destinataire) Return the first CommonReferentielDestinationFormXml filtered by the destinataire column
 *
 * @method array findById(int $id) Return CommonReferentielDestinationFormXml objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonReferentielDestinationFormXml objects filtered by the organisme column
 * @method array findByDestinataire(string $destinataire) Return CommonReferentielDestinationFormXml objects filtered by the destinataire column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonReferentielDestinationFormXmlQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReferentielDestinationFormXmlQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReferentielDestinationFormXml', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReferentielDestinationFormXmlQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReferentielDestinationFormXmlQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReferentielDestinationFormXmlQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReferentielDestinationFormXmlQuery) {
            return $criteria;
        }
        $query = new CommonReferentielDestinationFormXmlQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonReferentielDestinationFormXml|CommonReferentielDestinationFormXml[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReferentielDestinationFormXmlPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielDestinationFormXmlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReferentielDestinationFormXml A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `destinataire` FROM `ReferentielDestinationFormXml` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonReferentielDestinationFormXml();
            $obj->hydrate($row);
            CommonReferentielDestinationFormXmlPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonReferentielDestinationFormXml|CommonReferentielDestinationFormXml[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReferentielDestinationFormXml[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReferentielDestinationFormXmlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonReferentielDestinationFormXmlPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonReferentielDestinationFormXmlPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReferentielDestinationFormXmlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonReferentielDestinationFormXmlPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonReferentielDestinationFormXmlPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielDestinationFormXmlQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonReferentielDestinationFormXmlPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonReferentielDestinationFormXmlPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielDestinationFormXmlPeer::ID, $id, $comparison);
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
     * @return CommonReferentielDestinationFormXmlQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonReferentielDestinationFormXmlPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the destinataire column
     *
     * Example usage:
     * <code>
     * $query->filterByDestinataire('fooValue');   // WHERE destinataire = 'fooValue'
     * $query->filterByDestinataire('%fooValue%'); // WHERE destinataire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $destinataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielDestinationFormXmlQuery The current query, for fluid interface
     */
    public function filterByDestinataire($destinataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($destinataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $destinataire)) {
                $destinataire = str_replace('*', '%', $destinataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielDestinationFormXmlPeer::DESTINATAIRE, $destinataire, $comparison);
    }

    /**
     * Filter the query by a related CommonAnnonceMoniteur object
     *
     * @param   CommonAnnonceMoniteur|PropelObjectCollection $commonAnnonceMoniteur  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonReferentielDestinationFormXmlQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAnnonceMoniteur($commonAnnonceMoniteur, $comparison = null)
    {
        if ($commonAnnonceMoniteur instanceof CommonAnnonceMoniteur) {
            return $this
                ->addUsingAlias(CommonReferentielDestinationFormXmlPeer::ID, $commonAnnonceMoniteur->getIdDestinationFormXml(), $comparison);
        } elseif ($commonAnnonceMoniteur instanceof PropelObjectCollection) {
            return $this
                ->useCommonAnnonceMoniteurQuery()
                ->filterByPrimaryKeys($commonAnnonceMoniteur->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonAnnonceMoniteur() only accepts arguments of type CommonAnnonceMoniteur or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAnnonceMoniteur relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonReferentielDestinationFormXmlQuery The current query, for fluid interface
     */
    public function joinCommonAnnonceMoniteur($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAnnonceMoniteur');

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
            $this->addJoinObject($join, 'CommonAnnonceMoniteur');
        }

        return $this;
    }

    /**
     * Use the CommonAnnonceMoniteur relation CommonAnnonceMoniteur object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAnnonceMoniteurQuery A secondary query class using the current class as primary query
     */
    public function useCommonAnnonceMoniteurQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonAnnonceMoniteur($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAnnonceMoniteur', 'CommonAnnonceMoniteurQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReferentielDestinationFormXml $commonReferentielDestinationFormXml Object to remove from the list of results
     *
     * @return CommonReferentielDestinationFormXmlQuery The current query, for fluid interface
     */
    public function prune($commonReferentielDestinationFormXml = null)
    {
        if ($commonReferentielDestinationFormXml) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonReferentielDestinationFormXmlPeer::ID), $commonReferentielDestinationFormXml->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonReferentielDestinationFormXmlPeer::ORGANISME), $commonReferentielDestinationFormXml->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
