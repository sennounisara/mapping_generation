<?php


/**
 * Base class that represents a query for the 't_sous_critere_attribution' table.
 *
 * 
 *
 * @method CommonTSousCritereAttributionQuery orderByIdSousCritereAttribution($order = Criteria::ASC) Order by the id_sous_critere_attribution column
 * @method CommonTSousCritereAttributionQuery orderByEnonce($order = Criteria::ASC) Order by the enonce column
 * @method CommonTSousCritereAttributionQuery orderByPonderation($order = Criteria::ASC) Order by the ponderation column
 * @method CommonTSousCritereAttributionQuery orderByIdCritereAttribution($order = Criteria::ASC) Order by the id_critere_attribution column
 *
 * @method CommonTSousCritereAttributionQuery groupByIdSousCritereAttribution() Group by the id_sous_critere_attribution column
 * @method CommonTSousCritereAttributionQuery groupByEnonce() Group by the enonce column
 * @method CommonTSousCritereAttributionQuery groupByPonderation() Group by the ponderation column
 * @method CommonTSousCritereAttributionQuery groupByIdCritereAttribution() Group by the id_critere_attribution column
 *
 * @method CommonTSousCritereAttributionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTSousCritereAttributionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTSousCritereAttributionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTSousCritereAttribution findOne(PropelPDO $con = null) Return the first CommonTSousCritereAttribution matching the query
 * @method CommonTSousCritereAttribution findOneOrCreate(PropelPDO $con = null) Return the first CommonTSousCritereAttribution matching the query, or a new CommonTSousCritereAttribution object populated from the query conditions when no match is found
 *
 * @method CommonTSousCritereAttribution findOneByEnonce(string $enonce) Return the first CommonTSousCritereAttribution filtered by the enonce column
 * @method CommonTSousCritereAttribution findOneByPonderation(string $ponderation) Return the first CommonTSousCritereAttribution filtered by the ponderation column
 * @method CommonTSousCritereAttribution findOneByIdCritereAttribution(int $id_critere_attribution) Return the first CommonTSousCritereAttribution filtered by the id_critere_attribution column
 *
 * @method array findByIdSousCritereAttribution(int $id_sous_critere_attribution) Return CommonTSousCritereAttribution objects filtered by the id_sous_critere_attribution column
 * @method array findByEnonce(string $enonce) Return CommonTSousCritereAttribution objects filtered by the enonce column
 * @method array findByPonderation(string $ponderation) Return CommonTSousCritereAttribution objects filtered by the ponderation column
 * @method array findByIdCritereAttribution(int $id_critere_attribution) Return CommonTSousCritereAttribution objects filtered by the id_critere_attribution column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTSousCritereAttributionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTSousCritereAttributionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTSousCritereAttribution', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTSousCritereAttributionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTSousCritereAttributionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTSousCritereAttributionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTSousCritereAttributionQuery) {
            return $criteria;
        }
        $query = new CommonTSousCritereAttributionQuery();
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
     * @return   CommonTSousCritereAttribution|CommonTSousCritereAttribution[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTSousCritereAttributionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTSousCritereAttributionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTSousCritereAttribution A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdSousCritereAttribution($key, $con = null)
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
     * @return                 CommonTSousCritereAttribution A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_sous_critere_attribution`, `enonce`, `ponderation`, `id_critere_attribution` FROM `t_sous_critere_attribution` WHERE `id_sous_critere_attribution` = :p0';
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
            $obj = new CommonTSousCritereAttribution();
            $obj->hydrate($row);
            CommonTSousCritereAttributionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTSousCritereAttribution|CommonTSousCritereAttribution[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTSousCritereAttribution[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTSousCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTSousCritereAttributionPeer::ID_SOUS_CRITERE_ATTRIBUTION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTSousCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTSousCritereAttributionPeer::ID_SOUS_CRITERE_ATTRIBUTION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_sous_critere_attribution column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSousCritereAttribution(1234); // WHERE id_sous_critere_attribution = 1234
     * $query->filterByIdSousCritereAttribution(array(12, 34)); // WHERE id_sous_critere_attribution IN (12, 34)
     * $query->filterByIdSousCritereAttribution(array('min' => 12)); // WHERE id_sous_critere_attribution >= 12
     * $query->filterByIdSousCritereAttribution(array('max' => 12)); // WHERE id_sous_critere_attribution <= 12
     * </code>
     *
     * @param     mixed $idSousCritereAttribution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTSousCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByIdSousCritereAttribution($idSousCritereAttribution = null, $comparison = null)
    {
        if (is_array($idSousCritereAttribution)) {
            $useMinMax = false;
            if (isset($idSousCritereAttribution['min'])) {
                $this->addUsingAlias(CommonTSousCritereAttributionPeer::ID_SOUS_CRITERE_ATTRIBUTION, $idSousCritereAttribution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSousCritereAttribution['max'])) {
                $this->addUsingAlias(CommonTSousCritereAttributionPeer::ID_SOUS_CRITERE_ATTRIBUTION, $idSousCritereAttribution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTSousCritereAttributionPeer::ID_SOUS_CRITERE_ATTRIBUTION, $idSousCritereAttribution, $comparison);
    }

    /**
     * Filter the query on the enonce column
     *
     * Example usage:
     * <code>
     * $query->filterByEnonce('fooValue');   // WHERE enonce = 'fooValue'
     * $query->filterByEnonce('%fooValue%'); // WHERE enonce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $enonce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTSousCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByEnonce($enonce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($enonce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $enonce)) {
                $enonce = str_replace('*', '%', $enonce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTSousCritereAttributionPeer::ENONCE, $enonce, $comparison);
    }

    /**
     * Filter the query on the ponderation column
     *
     * Example usage:
     * <code>
     * $query->filterByPonderation(1234); // WHERE ponderation = 1234
     * $query->filterByPonderation(array(12, 34)); // WHERE ponderation IN (12, 34)
     * $query->filterByPonderation(array('min' => 12)); // WHERE ponderation >= 12
     * $query->filterByPonderation(array('max' => 12)); // WHERE ponderation <= 12
     * </code>
     *
     * @param     mixed $ponderation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTSousCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByPonderation($ponderation = null, $comparison = null)
    {
        if (is_array($ponderation)) {
            $useMinMax = false;
            if (isset($ponderation['min'])) {
                $this->addUsingAlias(CommonTSousCritereAttributionPeer::PONDERATION, $ponderation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ponderation['max'])) {
                $this->addUsingAlias(CommonTSousCritereAttributionPeer::PONDERATION, $ponderation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTSousCritereAttributionPeer::PONDERATION, $ponderation, $comparison);
    }

    /**
     * Filter the query on the id_critere_attribution column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCritereAttribution(1234); // WHERE id_critere_attribution = 1234
     * $query->filterByIdCritereAttribution(array(12, 34)); // WHERE id_critere_attribution IN (12, 34)
     * $query->filterByIdCritereAttribution(array('min' => 12)); // WHERE id_critere_attribution >= 12
     * $query->filterByIdCritereAttribution(array('max' => 12)); // WHERE id_critere_attribution <= 12
     * </code>
     *
     * @param     mixed $idCritereAttribution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTSousCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByIdCritereAttribution($idCritereAttribution = null, $comparison = null)
    {
        if (is_array($idCritereAttribution)) {
            $useMinMax = false;
            if (isset($idCritereAttribution['min'])) {
                $this->addUsingAlias(CommonTSousCritereAttributionPeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCritereAttribution['max'])) {
                $this->addUsingAlias(CommonTSousCritereAttributionPeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTSousCritereAttributionPeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTSousCritereAttribution $commonTSousCritereAttribution Object to remove from the list of results
     *
     * @return CommonTSousCritereAttributionQuery The current query, for fluid interface
     */
    public function prune($commonTSousCritereAttribution = null)
    {
        if ($commonTSousCritereAttribution) {
            $this->addUsingAlias(CommonTSousCritereAttributionPeer::ID_SOUS_CRITERE_ATTRIBUTION, $commonTSousCritereAttribution->getIdSousCritereAttribution(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
