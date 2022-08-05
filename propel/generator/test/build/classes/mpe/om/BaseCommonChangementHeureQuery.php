<?php


/**
 * Base class that represents a query for the 'changement_heure' table.
 *
 * 
 *
 * @method CommonChangementHeureQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonChangementHeureQuery orderByDateDebutZone($order = Criteria::ASC) Order by the date_debut_zone column
 * @method CommonChangementHeureQuery orderByDateFinZone($order = Criteria::ASC) Order by the date_fin_zone column
 * @method CommonChangementHeureQuery orderByDecalage($order = Criteria::ASC) Order by the decalage column
 *
 * @method CommonChangementHeureQuery groupByOrganisme() Group by the organisme column
 * @method CommonChangementHeureQuery groupByDateDebutZone() Group by the date_debut_zone column
 * @method CommonChangementHeureQuery groupByDateFinZone() Group by the date_fin_zone column
 * @method CommonChangementHeureQuery groupByDecalage() Group by the decalage column
 *
 * @method CommonChangementHeureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonChangementHeureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonChangementHeureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonChangementHeure findOne(PropelPDO $con = null) Return the first CommonChangementHeure matching the query
 * @method CommonChangementHeure findOneOrCreate(PropelPDO $con = null) Return the first CommonChangementHeure matching the query, or a new CommonChangementHeure object populated from the query conditions when no match is found
 *
 * @method CommonChangementHeure findOneByOrganisme(string $organisme) Return the first CommonChangementHeure filtered by the organisme column
 * @method CommonChangementHeure findOneByDateDebutZone(string $date_debut_zone) Return the first CommonChangementHeure filtered by the date_debut_zone column
 * @method CommonChangementHeure findOneByDateFinZone(string $date_fin_zone) Return the first CommonChangementHeure filtered by the date_fin_zone column
 * @method CommonChangementHeure findOneByDecalage(string $decalage) Return the first CommonChangementHeure filtered by the decalage column
 *
 * @method array findByOrganisme(string $organisme) Return CommonChangementHeure objects filtered by the organisme column
 * @method array findByDateDebutZone(string $date_debut_zone) Return CommonChangementHeure objects filtered by the date_debut_zone column
 * @method array findByDateFinZone(string $date_fin_zone) Return CommonChangementHeure objects filtered by the date_fin_zone column
 * @method array findByDecalage(string $decalage) Return CommonChangementHeure objects filtered by the decalage column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonChangementHeureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonChangementHeureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonChangementHeure', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonChangementHeureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonChangementHeureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonChangementHeureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonChangementHeureQuery) {
            return $criteria;
        }
        $query = new CommonChangementHeureQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$organisme, $date_debut_zone, $date_fin_zone]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonChangementHeure|CommonChangementHeure[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonChangementHeurePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonChangementHeurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonChangementHeure A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `organisme`, `date_debut_zone`, `date_fin_zone`, `decalage` FROM `changement_heure` WHERE `organisme` = :p0 AND `date_debut_zone` = :p1 AND `date_fin_zone` = :p2';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonChangementHeure();
            $obj->hydrate($row);
            CommonChangementHeurePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return CommonChangementHeure|CommonChangementHeure[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonChangementHeure[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonChangementHeureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonChangementHeurePeer::ORGANISME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonChangementHeurePeer::DATE_DEBUT_ZONE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonChangementHeurePeer::DATE_FIN_ZONE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonChangementHeureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonChangementHeurePeer::ORGANISME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonChangementHeurePeer::DATE_DEBUT_ZONE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonChangementHeurePeer::DATE_FIN_ZONE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
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
     * @return CommonChangementHeureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChangementHeurePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the date_debut_zone column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebutZone('2011-03-14'); // WHERE date_debut_zone = '2011-03-14'
     * $query->filterByDateDebutZone('now'); // WHERE date_debut_zone = '2011-03-14'
     * $query->filterByDateDebutZone(array('max' => 'yesterday')); // WHERE date_debut_zone > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDebutZone The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChangementHeureQuery The current query, for fluid interface
     */
    public function filterByDateDebutZone($dateDebutZone = null, $comparison = null)
    {
        if (is_array($dateDebutZone)) {
            $useMinMax = false;
            if (isset($dateDebutZone['min'])) {
                $this->addUsingAlias(CommonChangementHeurePeer::DATE_DEBUT_ZONE, $dateDebutZone['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDebutZone['max'])) {
                $this->addUsingAlias(CommonChangementHeurePeer::DATE_DEBUT_ZONE, $dateDebutZone['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChangementHeurePeer::DATE_DEBUT_ZONE, $dateDebutZone, $comparison);
    }

    /**
     * Filter the query on the date_fin_zone column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinZone('2011-03-14'); // WHERE date_fin_zone = '2011-03-14'
     * $query->filterByDateFinZone('now'); // WHERE date_fin_zone = '2011-03-14'
     * $query->filterByDateFinZone(array('max' => 'yesterday')); // WHERE date_fin_zone > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateFinZone The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChangementHeureQuery The current query, for fluid interface
     */
    public function filterByDateFinZone($dateFinZone = null, $comparison = null)
    {
        if (is_array($dateFinZone)) {
            $useMinMax = false;
            if (isset($dateFinZone['min'])) {
                $this->addUsingAlias(CommonChangementHeurePeer::DATE_FIN_ZONE, $dateFinZone['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFinZone['max'])) {
                $this->addUsingAlias(CommonChangementHeurePeer::DATE_FIN_ZONE, $dateFinZone['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChangementHeurePeer::DATE_FIN_ZONE, $dateFinZone, $comparison);
    }

    /**
     * Filter the query on the decalage column
     *
     * Example usage:
     * <code>
     * $query->filterByDecalage('fooValue');   // WHERE decalage = 'fooValue'
     * $query->filterByDecalage('%fooValue%'); // WHERE decalage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decalage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChangementHeureQuery The current query, for fluid interface
     */
    public function filterByDecalage($decalage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decalage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decalage)) {
                $decalage = str_replace('*', '%', $decalage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChangementHeurePeer::DECALAGE, $decalage, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonChangementHeure $commonChangementHeure Object to remove from the list of results
     *
     * @return CommonChangementHeureQuery The current query, for fluid interface
     */
    public function prune($commonChangementHeure = null)
    {
        if ($commonChangementHeure) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonChangementHeurePeer::ORGANISME), $commonChangementHeure->getOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonChangementHeurePeer::DATE_DEBUT_ZONE), $commonChangementHeure->getDateDebutZone(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonChangementHeurePeer::DATE_FIN_ZONE), $commonChangementHeure->getDateFinZone(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
