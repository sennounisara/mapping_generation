<?php


/**
 * Base class that represents a query for the 'exec_type_evenement_organisme' table.
 *
 * 
 *
 * @method CommonExecTypeEvenementOrganismeQuery orderByIdTypeEvenement($order = Criteria::ASC) Order by the id_type_evenement column
 * @method CommonExecTypeEvenementOrganismeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonExecTypeEvenementOrganismeQuery orderByHabilitation($order = Criteria::ASC) Order by the habilitation column
 * @method CommonExecTypeEvenementOrganismeQuery orderByViaDemande($order = Criteria::ASC) Order by the via_demande column
 * @method CommonExecTypeEvenementOrganismeQuery orderByIdTheme($order = Criteria::ASC) Order by the id_theme column
 * @method CommonExecTypeEvenementOrganismeQuery orderByIdModeleDocument($order = Criteria::ASC) Order by the id_modele_document column
 *
 * @method CommonExecTypeEvenementOrganismeQuery groupByIdTypeEvenement() Group by the id_type_evenement column
 * @method CommonExecTypeEvenementOrganismeQuery groupByOrganisme() Group by the organisme column
 * @method CommonExecTypeEvenementOrganismeQuery groupByHabilitation() Group by the habilitation column
 * @method CommonExecTypeEvenementOrganismeQuery groupByViaDemande() Group by the via_demande column
 * @method CommonExecTypeEvenementOrganismeQuery groupByIdTheme() Group by the id_theme column
 * @method CommonExecTypeEvenementOrganismeQuery groupByIdModeleDocument() Group by the id_modele_document column
 *
 * @method CommonExecTypeEvenementOrganismeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecTypeEvenementOrganismeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecTypeEvenementOrganismeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecTypeEvenementOrganismeQuery leftJoinCommonExecTypeEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeEvenement relation
 * @method CommonExecTypeEvenementOrganismeQuery rightJoinCommonExecTypeEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeEvenement relation
 * @method CommonExecTypeEvenementOrganismeQuery innerJoinCommonExecTypeEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeEvenement relation
 *
 * @method CommonExecTypeEvenementOrganisme findOne(PropelPDO $con = null) Return the first CommonExecTypeEvenementOrganisme matching the query
 * @method CommonExecTypeEvenementOrganisme findOneOrCreate(PropelPDO $con = null) Return the first CommonExecTypeEvenementOrganisme matching the query, or a new CommonExecTypeEvenementOrganisme object populated from the query conditions when no match is found
 *
 * @method CommonExecTypeEvenementOrganisme findOneByIdTypeEvenement(int $id_type_evenement) Return the first CommonExecTypeEvenementOrganisme filtered by the id_type_evenement column
 * @method CommonExecTypeEvenementOrganisme findOneByOrganisme(string $organisme) Return the first CommonExecTypeEvenementOrganisme filtered by the organisme column
 * @method CommonExecTypeEvenementOrganisme findOneByHabilitation(string $habilitation) Return the first CommonExecTypeEvenementOrganisme filtered by the habilitation column
 * @method CommonExecTypeEvenementOrganisme findOneByViaDemande(int $via_demande) Return the first CommonExecTypeEvenementOrganisme filtered by the via_demande column
 * @method CommonExecTypeEvenementOrganisme findOneByIdTheme(int $id_theme) Return the first CommonExecTypeEvenementOrganisme filtered by the id_theme column
 * @method CommonExecTypeEvenementOrganisme findOneByIdModeleDocument(int $id_modele_document) Return the first CommonExecTypeEvenementOrganisme filtered by the id_modele_document column
 *
 * @method array findByIdTypeEvenement(int $id_type_evenement) Return CommonExecTypeEvenementOrganisme objects filtered by the id_type_evenement column
 * @method array findByOrganisme(string $organisme) Return CommonExecTypeEvenementOrganisme objects filtered by the organisme column
 * @method array findByHabilitation(string $habilitation) Return CommonExecTypeEvenementOrganisme objects filtered by the habilitation column
 * @method array findByViaDemande(int $via_demande) Return CommonExecTypeEvenementOrganisme objects filtered by the via_demande column
 * @method array findByIdTheme(int $id_theme) Return CommonExecTypeEvenementOrganisme objects filtered by the id_theme column
 * @method array findByIdModeleDocument(int $id_modele_document) Return CommonExecTypeEvenementOrganisme objects filtered by the id_modele_document column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecTypeEvenementOrganismeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecTypeEvenementOrganismeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecTypeEvenementOrganisme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecTypeEvenementOrganismeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecTypeEvenementOrganismeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecTypeEvenementOrganismeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecTypeEvenementOrganismeQuery) {
            return $criteria;
        }
        $query = new CommonExecTypeEvenementOrganismeQuery();
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
                         A Primary key composition: [$id_type_evenement, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonExecTypeEvenementOrganisme|CommonExecTypeEvenementOrganisme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecTypeEvenementOrganismePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypeEvenementOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecTypeEvenementOrganisme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_type_evenement`, `organisme`, `habilitation`, `via_demande`, `id_theme`, `id_modele_document` FROM `exec_type_evenement_organisme` WHERE `id_type_evenement` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonExecTypeEvenementOrganisme();
            $obj->hydrate($row);
            CommonExecTypeEvenementOrganismePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonExecTypeEvenementOrganisme|CommonExecTypeEvenementOrganisme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecTypeEvenementOrganisme[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecTypeEvenementOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecTypeEvenementOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonExecTypeEvenementOrganismePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_type_evenement column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeEvenement(1234); // WHERE id_type_evenement = 1234
     * $query->filterByIdTypeEvenement(array(12, 34)); // WHERE id_type_evenement IN (12, 34)
     * $query->filterByIdTypeEvenement(array('min' => 12)); // WHERE id_type_evenement >= 12
     * $query->filterByIdTypeEvenement(array('max' => 12)); // WHERE id_type_evenement <= 12
     * </code>
     *
     * @see       filterByCommonExecTypeEvenement()
     *
     * @param     mixed $idTypeEvenement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeEvenementOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdTypeEvenement($idTypeEvenement = null, $comparison = null)
    {
        if (is_array($idTypeEvenement)) {
            $useMinMax = false;
            if (isset($idTypeEvenement['min'])) {
                $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, $idTypeEvenement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeEvenement['max'])) {
                $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, $idTypeEvenement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, $idTypeEvenement, $comparison);
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
     * @return CommonExecTypeEvenementOrganismeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the habilitation column
     *
     * Example usage:
     * <code>
     * $query->filterByHabilitation('fooValue');   // WHERE habilitation = 'fooValue'
     * $query->filterByHabilitation('%fooValue%'); // WHERE habilitation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $habilitation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeEvenementOrganismeQuery The current query, for fluid interface
     */
    public function filterByHabilitation($habilitation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($habilitation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $habilitation)) {
                $habilitation = str_replace('*', '%', $habilitation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::HABILITATION, $habilitation, $comparison);
    }

    /**
     * Filter the query on the via_demande column
     *
     * Example usage:
     * <code>
     * $query->filterByViaDemande(1234); // WHERE via_demande = 1234
     * $query->filterByViaDemande(array(12, 34)); // WHERE via_demande IN (12, 34)
     * $query->filterByViaDemande(array('min' => 12)); // WHERE via_demande >= 12
     * $query->filterByViaDemande(array('max' => 12)); // WHERE via_demande <= 12
     * </code>
     *
     * @param     mixed $viaDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeEvenementOrganismeQuery The current query, for fluid interface
     */
    public function filterByViaDemande($viaDemande = null, $comparison = null)
    {
        if (is_array($viaDemande)) {
            $useMinMax = false;
            if (isset($viaDemande['min'])) {
                $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::VIA_DEMANDE, $viaDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($viaDemande['max'])) {
                $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::VIA_DEMANDE, $viaDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::VIA_DEMANDE, $viaDemande, $comparison);
    }

    /**
     * Filter the query on the id_theme column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTheme(1234); // WHERE id_theme = 1234
     * $query->filterByIdTheme(array(12, 34)); // WHERE id_theme IN (12, 34)
     * $query->filterByIdTheme(array('min' => 12)); // WHERE id_theme >= 12
     * $query->filterByIdTheme(array('max' => 12)); // WHERE id_theme <= 12
     * </code>
     *
     * @param     mixed $idTheme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeEvenementOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdTheme($idTheme = null, $comparison = null)
    {
        if (is_array($idTheme)) {
            $useMinMax = false;
            if (isset($idTheme['min'])) {
                $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_THEME, $idTheme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTheme['max'])) {
                $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_THEME, $idTheme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_THEME, $idTheme, $comparison);
    }

    /**
     * Filter the query on the id_modele_document column
     *
     * Example usage:
     * <code>
     * $query->filterByIdModeleDocument(1234); // WHERE id_modele_document = 1234
     * $query->filterByIdModeleDocument(array(12, 34)); // WHERE id_modele_document IN (12, 34)
     * $query->filterByIdModeleDocument(array('min' => 12)); // WHERE id_modele_document >= 12
     * $query->filterByIdModeleDocument(array('max' => 12)); // WHERE id_modele_document <= 12
     * </code>
     *
     * @param     mixed $idModeleDocument The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeEvenementOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdModeleDocument($idModeleDocument = null, $comparison = null)
    {
        if (is_array($idModeleDocument)) {
            $useMinMax = false;
            if (isset($idModeleDocument['min'])) {
                $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_MODELE_DOCUMENT, $idModeleDocument['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idModeleDocument['max'])) {
                $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_MODELE_DOCUMENT, $idModeleDocument['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_MODELE_DOCUMENT, $idModeleDocument, $comparison);
    }

    /**
     * Filter the query by a related CommonExecTypeEvenement object
     *
     * @param   CommonExecTypeEvenement|PropelObjectCollection $commonExecTypeEvenement The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecTypeEvenementOrganismeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeEvenement($commonExecTypeEvenement, $comparison = null)
    {
        if ($commonExecTypeEvenement instanceof CommonExecTypeEvenement) {
            return $this
                ->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, $commonExecTypeEvenement->getId(), $comparison);
        } elseif ($commonExecTypeEvenement instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT, $commonExecTypeEvenement->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypeEvenement() only accepts arguments of type CommonExecTypeEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeEvenement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecTypeEvenementOrganismeQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeEvenement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeEvenement');

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
            $this->addJoinObject($join, 'CommonExecTypeEvenement');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeEvenement relation CommonExecTypeEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeEvenementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecTypeEvenement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeEvenement', 'CommonExecTypeEvenementQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecTypeEvenementOrganisme $commonExecTypeEvenementOrganisme Object to remove from the list of results
     *
     * @return CommonExecTypeEvenementOrganismeQuery The current query, for fluid interface
     */
    public function prune($commonExecTypeEvenementOrganisme = null)
    {
        if ($commonExecTypeEvenementOrganisme) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonExecTypeEvenementOrganismePeer::ID_TYPE_EVENEMENT), $commonExecTypeEvenementOrganisme->getIdTypeEvenement(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonExecTypeEvenementOrganismePeer::ORGANISME), $commonExecTypeEvenementOrganisme->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
