<?php


/**
 * Base class that represents a query for the 't_CAO_Seance' table.
 *
 * 
 *
 * @method CommonTCAOSeanceQuery orderByIdSeance($order = Criteria::ASC) Order by the id_seance column
 * @method CommonTCAOSeanceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTCAOSeanceQuery orderByIdCommission($order = Criteria::ASC) Order by the id_commission column
 * @method CommonTCAOSeanceQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonTCAOSeanceQuery orderByLieu($order = Criteria::ASC) Order by the lieu column
 * @method CommonTCAOSeanceQuery orderBySalle($order = Criteria::ASC) Order by the salle column
 * @method CommonTCAOSeanceQuery orderByIdRefValStatut($order = Criteria::ASC) Order by the id_ref_val_statut column
 *
 * @method CommonTCAOSeanceQuery groupByIdSeance() Group by the id_seance column
 * @method CommonTCAOSeanceQuery groupByOrganisme() Group by the organisme column
 * @method CommonTCAOSeanceQuery groupByIdCommission() Group by the id_commission column
 * @method CommonTCAOSeanceQuery groupByDate() Group by the date column
 * @method CommonTCAOSeanceQuery groupByLieu() Group by the lieu column
 * @method CommonTCAOSeanceQuery groupBySalle() Group by the salle column
 * @method CommonTCAOSeanceQuery groupByIdRefValStatut() Group by the id_ref_val_statut column
 *
 * @method CommonTCAOSeanceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCAOSeanceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCAOSeanceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCAOSeance findOne(PropelPDO $con = null) Return the first CommonTCAOSeance matching the query
 * @method CommonTCAOSeance findOneOrCreate(PropelPDO $con = null) Return the first CommonTCAOSeance matching the query, or a new CommonTCAOSeance object populated from the query conditions when no match is found
 *
 * @method CommonTCAOSeance findOneByIdSeance(string $id_seance) Return the first CommonTCAOSeance filtered by the id_seance column
 * @method CommonTCAOSeance findOneByOrganisme(string $organisme) Return the first CommonTCAOSeance filtered by the organisme column
 * @method CommonTCAOSeance findOneByIdCommission(string $id_commission) Return the first CommonTCAOSeance filtered by the id_commission column
 * @method CommonTCAOSeance findOneByDate(string $date) Return the first CommonTCAOSeance filtered by the date column
 * @method CommonTCAOSeance findOneByLieu(string $lieu) Return the first CommonTCAOSeance filtered by the lieu column
 * @method CommonTCAOSeance findOneBySalle(string $salle) Return the first CommonTCAOSeance filtered by the salle column
 * @method CommonTCAOSeance findOneByIdRefValStatut(int $id_ref_val_statut) Return the first CommonTCAOSeance filtered by the id_ref_val_statut column
 *
 * @method array findByIdSeance(string $id_seance) Return CommonTCAOSeance objects filtered by the id_seance column
 * @method array findByOrganisme(string $organisme) Return CommonTCAOSeance objects filtered by the organisme column
 * @method array findByIdCommission(string $id_commission) Return CommonTCAOSeance objects filtered by the id_commission column
 * @method array findByDate(string $date) Return CommonTCAOSeance objects filtered by the date column
 * @method array findByLieu(string $lieu) Return CommonTCAOSeance objects filtered by the lieu column
 * @method array findBySalle(string $salle) Return CommonTCAOSeance objects filtered by the salle column
 * @method array findByIdRefValStatut(int $id_ref_val_statut) Return CommonTCAOSeance objects filtered by the id_ref_val_statut column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCAOSeanceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCAOSeanceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCAOSeance', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCAOSeanceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCAOSeanceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCAOSeanceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCAOSeanceQuery) {
            return $criteria;
        }
        $query = new CommonTCAOSeanceQuery();
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
                         A Primary key composition: [$id_seance, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCAOSeance|CommonTCAOSeance[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCAOSeancePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOSeance A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_seance`, `organisme`, `id_commission`, `date`, `lieu`, `salle`, `id_ref_val_statut` FROM `t_CAO_Seance` WHERE `id_seance` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTCAOSeance();
            $obj->hydrate($row);
            CommonTCAOSeancePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTCAOSeance|CommonTCAOSeance[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCAOSeance[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCAOSeanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCAOSeancePeer::ID_SEANCE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCAOSeancePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCAOSeanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCAOSeancePeer::ID_SEANCE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCAOSeancePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_seance column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSeance(1234); // WHERE id_seance = 1234
     * $query->filterByIdSeance(array(12, 34)); // WHERE id_seance IN (12, 34)
     * $query->filterByIdSeance(array('min' => 12)); // WHERE id_seance >= 12
     * $query->filterByIdSeance(array('max' => 12)); // WHERE id_seance <= 12
     * </code>
     *
     * @param     mixed $idSeance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceQuery The current query, for fluid interface
     */
    public function filterByIdSeance($idSeance = null, $comparison = null)
    {
        if (is_array($idSeance)) {
            $useMinMax = false;
            if (isset($idSeance['min'])) {
                $this->addUsingAlias(CommonTCAOSeancePeer::ID_SEANCE, $idSeance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSeance['max'])) {
                $this->addUsingAlias(CommonTCAOSeancePeer::ID_SEANCE, $idSeance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeancePeer::ID_SEANCE, $idSeance, $comparison);
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
     * @return CommonTCAOSeanceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOSeancePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_commission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommission(1234); // WHERE id_commission = 1234
     * $query->filterByIdCommission(array(12, 34)); // WHERE id_commission IN (12, 34)
     * $query->filterByIdCommission(array('min' => 12)); // WHERE id_commission >= 12
     * $query->filterByIdCommission(array('max' => 12)); // WHERE id_commission <= 12
     * </code>
     *
     * @param     mixed $idCommission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceQuery The current query, for fluid interface
     */
    public function filterByIdCommission($idCommission = null, $comparison = null)
    {
        if (is_array($idCommission)) {
            $useMinMax = false;
            if (isset($idCommission['min'])) {
                $this->addUsingAlias(CommonTCAOSeancePeer::ID_COMMISSION, $idCommission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommission['max'])) {
                $this->addUsingAlias(CommonTCAOSeancePeer::ID_COMMISSION, $idCommission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeancePeer::ID_COMMISSION, $idCommission, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CommonTCAOSeancePeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CommonTCAOSeancePeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeancePeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the lieu column
     *
     * Example usage:
     * <code>
     * $query->filterByLieu('fooValue');   // WHERE lieu = 'fooValue'
     * $query->filterByLieu('%fooValue%'); // WHERE lieu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceQuery The current query, for fluid interface
     */
    public function filterByLieu($lieu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieu)) {
                $lieu = str_replace('*', '%', $lieu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeancePeer::LIEU, $lieu, $comparison);
    }

    /**
     * Filter the query on the salle column
     *
     * Example usage:
     * <code>
     * $query->filterBySalle('fooValue');   // WHERE salle = 'fooValue'
     * $query->filterBySalle('%fooValue%'); // WHERE salle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceQuery The current query, for fluid interface
     */
    public function filterBySalle($salle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salle)) {
                $salle = str_replace('*', '%', $salle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeancePeer::SALLE, $salle, $comparison);
    }

    /**
     * Filter the query on the id_ref_val_statut column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefValStatut(1234); // WHERE id_ref_val_statut = 1234
     * $query->filterByIdRefValStatut(array(12, 34)); // WHERE id_ref_val_statut IN (12, 34)
     * $query->filterByIdRefValStatut(array('min' => 12)); // WHERE id_ref_val_statut >= 12
     * $query->filterByIdRefValStatut(array('max' => 12)); // WHERE id_ref_val_statut <= 12
     * </code>
     *
     * @param     mixed $idRefValStatut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceQuery The current query, for fluid interface
     */
    public function filterByIdRefValStatut($idRefValStatut = null, $comparison = null)
    {
        if (is_array($idRefValStatut)) {
            $useMinMax = false;
            if (isset($idRefValStatut['min'])) {
                $this->addUsingAlias(CommonTCAOSeancePeer::ID_REF_VAL_STATUT, $idRefValStatut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefValStatut['max'])) {
                $this->addUsingAlias(CommonTCAOSeancePeer::ID_REF_VAL_STATUT, $idRefValStatut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeancePeer::ID_REF_VAL_STATUT, $idRefValStatut, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCAOSeance $commonTCAOSeance Object to remove from the list of results
     *
     * @return CommonTCAOSeanceQuery The current query, for fluid interface
     */
    public function prune($commonTCAOSeance = null)
    {
        if ($commonTCAOSeance) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCAOSeancePeer::ID_SEANCE), $commonTCAOSeance->getIdSeance(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCAOSeancePeer::ORGANISME), $commonTCAOSeance->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
