<?php


/**
 * Base class that represents a query for the 't_calendrier_transition' table.
 *
 * 
 *
 * @method CommonTCalendrierTransitionQuery orderByIdCalendrierTransition($order = Criteria::ASC) Order by the ID_CALENDRIER_TRANSITION column
 * @method CommonTCalendrierTransitionQuery orderByIdEtapeSource($order = Criteria::ASC) Order by the ID_ETAPE_SOURCE column
 * @method CommonTCalendrierTransitionQuery orderByIdEtapeCible($order = Criteria::ASC) Order by the ID_ETAPE_CIBLE column
 * @method CommonTCalendrierTransitionQuery orderByValeurFixe($order = Criteria::ASC) Order by the VALEUR_FIXE column
 * @method CommonTCalendrierTransitionQuery orderByValeurVariableInitiale($order = Criteria::ASC) Order by the VALEUR_VARIABLE_INITIALE column
 * @method CommonTCalendrierTransitionQuery orderByValeurVariableReelle($order = Criteria::ASC) Order by the VALEUR_VARIABLE_REELLE column
 *
 * @method CommonTCalendrierTransitionQuery groupByIdCalendrierTransition() Group by the ID_CALENDRIER_TRANSITION column
 * @method CommonTCalendrierTransitionQuery groupByIdEtapeSource() Group by the ID_ETAPE_SOURCE column
 * @method CommonTCalendrierTransitionQuery groupByIdEtapeCible() Group by the ID_ETAPE_CIBLE column
 * @method CommonTCalendrierTransitionQuery groupByValeurFixe() Group by the VALEUR_FIXE column
 * @method CommonTCalendrierTransitionQuery groupByValeurVariableInitiale() Group by the VALEUR_VARIABLE_INITIALE column
 * @method CommonTCalendrierTransitionQuery groupByValeurVariableReelle() Group by the VALEUR_VARIABLE_REELLE column
 *
 * @method CommonTCalendrierTransitionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCalendrierTransitionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCalendrierTransitionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCalendrierTransitionQuery leftJoinCommonTCalendrierEtapeRelatedByIdEtapeSource($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCalendrierEtapeRelatedByIdEtapeSource relation
 * @method CommonTCalendrierTransitionQuery rightJoinCommonTCalendrierEtapeRelatedByIdEtapeSource($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCalendrierEtapeRelatedByIdEtapeSource relation
 * @method CommonTCalendrierTransitionQuery innerJoinCommonTCalendrierEtapeRelatedByIdEtapeSource($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCalendrierEtapeRelatedByIdEtapeSource relation
 *
 * @method CommonTCalendrierTransitionQuery leftJoinCommonTCalendrierEtapeRelatedByIdEtapeCible($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCalendrierEtapeRelatedByIdEtapeCible relation
 * @method CommonTCalendrierTransitionQuery rightJoinCommonTCalendrierEtapeRelatedByIdEtapeCible($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCalendrierEtapeRelatedByIdEtapeCible relation
 * @method CommonTCalendrierTransitionQuery innerJoinCommonTCalendrierEtapeRelatedByIdEtapeCible($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCalendrierEtapeRelatedByIdEtapeCible relation
 *
 * @method CommonTCalendrierTransition findOne(PropelPDO $con = null) Return the first CommonTCalendrierTransition matching the query
 * @method CommonTCalendrierTransition findOneOrCreate(PropelPDO $con = null) Return the first CommonTCalendrierTransition matching the query, or a new CommonTCalendrierTransition object populated from the query conditions when no match is found
 *
 * @method CommonTCalendrierTransition findOneByIdEtapeSource(int $ID_ETAPE_SOURCE) Return the first CommonTCalendrierTransition filtered by the ID_ETAPE_SOURCE column
 * @method CommonTCalendrierTransition findOneByIdEtapeCible(int $ID_ETAPE_CIBLE) Return the first CommonTCalendrierTransition filtered by the ID_ETAPE_CIBLE column
 * @method CommonTCalendrierTransition findOneByValeurFixe(int $VALEUR_FIXE) Return the first CommonTCalendrierTransition filtered by the VALEUR_FIXE column
 * @method CommonTCalendrierTransition findOneByValeurVariableInitiale(int $VALEUR_VARIABLE_INITIALE) Return the first CommonTCalendrierTransition filtered by the VALEUR_VARIABLE_INITIALE column
 * @method CommonTCalendrierTransition findOneByValeurVariableReelle(int $VALEUR_VARIABLE_REELLE) Return the first CommonTCalendrierTransition filtered by the VALEUR_VARIABLE_REELLE column
 *
 * @method array findByIdCalendrierTransition(int $ID_CALENDRIER_TRANSITION) Return CommonTCalendrierTransition objects filtered by the ID_CALENDRIER_TRANSITION column
 * @method array findByIdEtapeSource(int $ID_ETAPE_SOURCE) Return CommonTCalendrierTransition objects filtered by the ID_ETAPE_SOURCE column
 * @method array findByIdEtapeCible(int $ID_ETAPE_CIBLE) Return CommonTCalendrierTransition objects filtered by the ID_ETAPE_CIBLE column
 * @method array findByValeurFixe(int $VALEUR_FIXE) Return CommonTCalendrierTransition objects filtered by the VALEUR_FIXE column
 * @method array findByValeurVariableInitiale(int $VALEUR_VARIABLE_INITIALE) Return CommonTCalendrierTransition objects filtered by the VALEUR_VARIABLE_INITIALE column
 * @method array findByValeurVariableReelle(int $VALEUR_VARIABLE_REELLE) Return CommonTCalendrierTransition objects filtered by the VALEUR_VARIABLE_REELLE column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCalendrierTransitionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCalendrierTransitionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCalendrierTransition', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCalendrierTransitionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCalendrierTransitionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCalendrierTransitionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCalendrierTransitionQuery) {
            return $criteria;
        }
        $query = new CommonTCalendrierTransitionQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCalendrierTransition|CommonTCalendrierTransition[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCalendrierTransitionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierTransitionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTCalendrierTransition A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdCalendrierTransition($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTCalendrierTransition A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_CALENDRIER_TRANSITION`, `ID_ETAPE_SOURCE`, `ID_ETAPE_CIBLE`, `VALEUR_FIXE`, `VALEUR_VARIABLE_INITIALE`, `VALEUR_VARIABLE_REELLE` FROM `t_calendrier_transition` WHERE `ID_CALENDRIER_TRANSITION` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTCalendrierTransition();
            $obj->hydrate($row);
            CommonTCalendrierTransitionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTCalendrierTransition|CommonTCalendrierTransition[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonTCalendrierTransition[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCalendrierTransitionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_CALENDRIER_TRANSITION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCalendrierTransitionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_CALENDRIER_TRANSITION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_CALENDRIER_TRANSITION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCalendrierTransition(1234); // WHERE ID_CALENDRIER_TRANSITION = 1234
     * $query->filterByIdCalendrierTransition(array(12, 34)); // WHERE ID_CALENDRIER_TRANSITION IN (12, 34)
     * $query->filterByIdCalendrierTransition(array('min' => 12)); // WHERE ID_CALENDRIER_TRANSITION >= 12
     * $query->filterByIdCalendrierTransition(array('max' => 12)); // WHERE ID_CALENDRIER_TRANSITION <= 12
     * </code>
     *
     * @param     mixed $idCalendrierTransition The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierTransitionQuery The current query, for fluid interface
     */
    public function filterByIdCalendrierTransition($idCalendrierTransition = null, $comparison = null)
    {
        if (is_array($idCalendrierTransition)) {
            $useMinMax = false;
            if (isset($idCalendrierTransition['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_CALENDRIER_TRANSITION, $idCalendrierTransition['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCalendrierTransition['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_CALENDRIER_TRANSITION, $idCalendrierTransition['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_CALENDRIER_TRANSITION, $idCalendrierTransition, $comparison);
    }

    /**
     * Filter the query on the ID_ETAPE_SOURCE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtapeSource(1234); // WHERE ID_ETAPE_SOURCE = 1234
     * $query->filterByIdEtapeSource(array(12, 34)); // WHERE ID_ETAPE_SOURCE IN (12, 34)
     * $query->filterByIdEtapeSource(array('min' => 12)); // WHERE ID_ETAPE_SOURCE >= 12
     * $query->filterByIdEtapeSource(array('max' => 12)); // WHERE ID_ETAPE_SOURCE <= 12
     * </code>
     *
     * @see       filterByCommonTCalendrierEtapeRelatedByIdEtapeSource()
     *
     * @param     mixed $idEtapeSource The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierTransitionQuery The current query, for fluid interface
     */
    public function filterByIdEtapeSource($idEtapeSource = null, $comparison = null)
    {
        if (is_array($idEtapeSource)) {
            $useMinMax = false;
            if (isset($idEtapeSource['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_ETAPE_SOURCE, $idEtapeSource['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtapeSource['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_ETAPE_SOURCE, $idEtapeSource['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_ETAPE_SOURCE, $idEtapeSource, $comparison);
    }

    /**
     * Filter the query on the ID_ETAPE_CIBLE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtapeCible(1234); // WHERE ID_ETAPE_CIBLE = 1234
     * $query->filterByIdEtapeCible(array(12, 34)); // WHERE ID_ETAPE_CIBLE IN (12, 34)
     * $query->filterByIdEtapeCible(array('min' => 12)); // WHERE ID_ETAPE_CIBLE >= 12
     * $query->filterByIdEtapeCible(array('max' => 12)); // WHERE ID_ETAPE_CIBLE <= 12
     * </code>
     *
     * @see       filterByCommonTCalendrierEtapeRelatedByIdEtapeCible()
     *
     * @param     mixed $idEtapeCible The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierTransitionQuery The current query, for fluid interface
     */
    public function filterByIdEtapeCible($idEtapeCible = null, $comparison = null)
    {
        if (is_array($idEtapeCible)) {
            $useMinMax = false;
            if (isset($idEtapeCible['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_ETAPE_CIBLE, $idEtapeCible['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtapeCible['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_ETAPE_CIBLE, $idEtapeCible['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_ETAPE_CIBLE, $idEtapeCible, $comparison);
    }

    /**
     * Filter the query on the VALEUR_FIXE column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurFixe(1234); // WHERE VALEUR_FIXE = 1234
     * $query->filterByValeurFixe(array(12, 34)); // WHERE VALEUR_FIXE IN (12, 34)
     * $query->filterByValeurFixe(array('min' => 12)); // WHERE VALEUR_FIXE >= 12
     * $query->filterByValeurFixe(array('max' => 12)); // WHERE VALEUR_FIXE <= 12
     * </code>
     *
     * @param     mixed $valeurFixe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierTransitionQuery The current query, for fluid interface
     */
    public function filterByValeurFixe($valeurFixe = null, $comparison = null)
    {
        if (is_array($valeurFixe)) {
            $useMinMax = false;
            if (isset($valeurFixe['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::VALEUR_FIXE, $valeurFixe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurFixe['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::VALEUR_FIXE, $valeurFixe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionPeer::VALEUR_FIXE, $valeurFixe, $comparison);
    }

    /**
     * Filter the query on the VALEUR_VARIABLE_INITIALE column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurVariableInitiale(1234); // WHERE VALEUR_VARIABLE_INITIALE = 1234
     * $query->filterByValeurVariableInitiale(array(12, 34)); // WHERE VALEUR_VARIABLE_INITIALE IN (12, 34)
     * $query->filterByValeurVariableInitiale(array('min' => 12)); // WHERE VALEUR_VARIABLE_INITIALE >= 12
     * $query->filterByValeurVariableInitiale(array('max' => 12)); // WHERE VALEUR_VARIABLE_INITIALE <= 12
     * </code>
     *
     * @param     mixed $valeurVariableInitiale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierTransitionQuery The current query, for fluid interface
     */
    public function filterByValeurVariableInitiale($valeurVariableInitiale = null, $comparison = null)
    {
        if (is_array($valeurVariableInitiale)) {
            $useMinMax = false;
            if (isset($valeurVariableInitiale['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::VALEUR_VARIABLE_INITIALE, $valeurVariableInitiale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurVariableInitiale['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::VALEUR_VARIABLE_INITIALE, $valeurVariableInitiale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionPeer::VALEUR_VARIABLE_INITIALE, $valeurVariableInitiale, $comparison);
    }

    /**
     * Filter the query on the VALEUR_VARIABLE_REELLE column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurVariableReelle(1234); // WHERE VALEUR_VARIABLE_REELLE = 1234
     * $query->filterByValeurVariableReelle(array(12, 34)); // WHERE VALEUR_VARIABLE_REELLE IN (12, 34)
     * $query->filterByValeurVariableReelle(array('min' => 12)); // WHERE VALEUR_VARIABLE_REELLE >= 12
     * $query->filterByValeurVariableReelle(array('max' => 12)); // WHERE VALEUR_VARIABLE_REELLE <= 12
     * </code>
     *
     * @param     mixed $valeurVariableReelle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierTransitionQuery The current query, for fluid interface
     */
    public function filterByValeurVariableReelle($valeurVariableReelle = null, $comparison = null)
    {
        if (is_array($valeurVariableReelle)) {
            $useMinMax = false;
            if (isset($valeurVariableReelle['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::VALEUR_VARIABLE_REELLE, $valeurVariableReelle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurVariableReelle['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionPeer::VALEUR_VARIABLE_REELLE, $valeurVariableReelle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionPeer::VALEUR_VARIABLE_REELLE, $valeurVariableReelle, $comparison);
    }

    /**
     * Filter the query by a related CommonTCalendrierEtape object
     *
     * @param   CommonTCalendrierEtape|PropelObjectCollection $commonTCalendrierEtape The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCalendrierTransitionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCalendrierEtapeRelatedByIdEtapeSource($commonTCalendrierEtape, $comparison = null)
    {
        if ($commonTCalendrierEtape instanceof CommonTCalendrierEtape) {
            return $this
                ->addUsingAlias(CommonTCalendrierTransitionPeer::ID_ETAPE_SOURCE, $commonTCalendrierEtape->getIdCalendrierEtape(), $comparison);
        } elseif ($commonTCalendrierEtape instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCalendrierTransitionPeer::ID_ETAPE_SOURCE, $commonTCalendrierEtape->toKeyValue('PrimaryKey', 'IdCalendrierEtape'), $comparison);
        } else {
            throw new PropelException('filterByCommonTCalendrierEtapeRelatedByIdEtapeSource() only accepts arguments of type CommonTCalendrierEtape or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCalendrierEtapeRelatedByIdEtapeSource relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCalendrierTransitionQuery The current query, for fluid interface
     */
    public function joinCommonTCalendrierEtapeRelatedByIdEtapeSource($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCalendrierEtapeRelatedByIdEtapeSource');

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
            $this->addJoinObject($join, 'CommonTCalendrierEtapeRelatedByIdEtapeSource');
        }

        return $this;
    }

    /**
     * Use the CommonTCalendrierEtapeRelatedByIdEtapeSource relation CommonTCalendrierEtape object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCalendrierEtapeQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCalendrierEtapeRelatedByIdEtapeSourceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTCalendrierEtapeRelatedByIdEtapeSource($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCalendrierEtapeRelatedByIdEtapeSource', 'CommonTCalendrierEtapeQuery');
    }

    /**
     * Filter the query by a related CommonTCalendrierEtape object
     *
     * @param   CommonTCalendrierEtape|PropelObjectCollection $commonTCalendrierEtape The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCalendrierTransitionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCalendrierEtapeRelatedByIdEtapeCible($commonTCalendrierEtape, $comparison = null)
    {
        if ($commonTCalendrierEtape instanceof CommonTCalendrierEtape) {
            return $this
                ->addUsingAlias(CommonTCalendrierTransitionPeer::ID_ETAPE_CIBLE, $commonTCalendrierEtape->getIdCalendrierEtape(), $comparison);
        } elseif ($commonTCalendrierEtape instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCalendrierTransitionPeer::ID_ETAPE_CIBLE, $commonTCalendrierEtape->toKeyValue('PrimaryKey', 'IdCalendrierEtape'), $comparison);
        } else {
            throw new PropelException('filterByCommonTCalendrierEtapeRelatedByIdEtapeCible() only accepts arguments of type CommonTCalendrierEtape or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCalendrierEtapeRelatedByIdEtapeCible relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCalendrierTransitionQuery The current query, for fluid interface
     */
    public function joinCommonTCalendrierEtapeRelatedByIdEtapeCible($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCalendrierEtapeRelatedByIdEtapeCible');

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
            $this->addJoinObject($join, 'CommonTCalendrierEtapeRelatedByIdEtapeCible');
        }

        return $this;
    }

    /**
     * Use the CommonTCalendrierEtapeRelatedByIdEtapeCible relation CommonTCalendrierEtape object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCalendrierEtapeQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCalendrierEtapeRelatedByIdEtapeCibleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTCalendrierEtapeRelatedByIdEtapeCible($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCalendrierEtapeRelatedByIdEtapeCible', 'CommonTCalendrierEtapeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCalendrierTransition $commonTCalendrierTransition Object to remove from the list of results
     *
     * @return CommonTCalendrierTransitionQuery The current query, for fluid interface
     */
    public function prune($commonTCalendrierTransition = null)
    {
        if ($commonTCalendrierTransition) {
            $this->addUsingAlias(CommonTCalendrierTransitionPeer::ID_CALENDRIER_TRANSITION, $commonTCalendrierTransition->getIdCalendrierTransition(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
