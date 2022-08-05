<?php


/**
 * Base class that represents a query for the 't_critere_attribution' table.
 *
 * 
 *
 * @method CommonTCritereAttributionQuery orderByIdCritereAttribution($order = Criteria::ASC) Order by the id_critere_attribution column
 * @method CommonTCritereAttributionQuery orderByEnonce($order = Criteria::ASC) Order by the enonce column
 * @method CommonTCritereAttributionQuery orderByOrdre($order = Criteria::ASC) Order by the ordre column
 * @method CommonTCritereAttributionQuery orderByPonderation($order = Criteria::ASC) Order by the ponderation column
 * @method CommonTCritereAttributionQuery orderByIdDonneeComplementaire($order = Criteria::ASC) Order by the id_donnee_complementaire column
 *
 * @method CommonTCritereAttributionQuery groupByIdCritereAttribution() Group by the id_critere_attribution column
 * @method CommonTCritereAttributionQuery groupByEnonce() Group by the enonce column
 * @method CommonTCritereAttributionQuery groupByOrdre() Group by the ordre column
 * @method CommonTCritereAttributionQuery groupByPonderation() Group by the ponderation column
 * @method CommonTCritereAttributionQuery groupByIdDonneeComplementaire() Group by the id_donnee_complementaire column
 *
 * @method CommonTCritereAttributionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCritereAttributionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCritereAttributionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCritereAttribution findOne(PropelPDO $con = null) Return the first CommonTCritereAttribution matching the query
 * @method CommonTCritereAttribution findOneOrCreate(PropelPDO $con = null) Return the first CommonTCritereAttribution matching the query, or a new CommonTCritereAttribution object populated from the query conditions when no match is found
 *
 * @method CommonTCritereAttribution findOneByEnonce(string $enonce) Return the first CommonTCritereAttribution filtered by the enonce column
 * @method CommonTCritereAttribution findOneByOrdre(int $ordre) Return the first CommonTCritereAttribution filtered by the ordre column
 * @method CommonTCritereAttribution findOneByPonderation(string $ponderation) Return the first CommonTCritereAttribution filtered by the ponderation column
 * @method CommonTCritereAttribution findOneByIdDonneeComplementaire(int $id_donnee_complementaire) Return the first CommonTCritereAttribution filtered by the id_donnee_complementaire column
 *
 * @method array findByIdCritereAttribution(int $id_critere_attribution) Return CommonTCritereAttribution objects filtered by the id_critere_attribution column
 * @method array findByEnonce(string $enonce) Return CommonTCritereAttribution objects filtered by the enonce column
 * @method array findByOrdre(int $ordre) Return CommonTCritereAttribution objects filtered by the ordre column
 * @method array findByPonderation(string $ponderation) Return CommonTCritereAttribution objects filtered by the ponderation column
 * @method array findByIdDonneeComplementaire(int $id_donnee_complementaire) Return CommonTCritereAttribution objects filtered by the id_donnee_complementaire column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCritereAttributionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCritereAttributionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCritereAttribution', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCritereAttributionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCritereAttributionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCritereAttributionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCritereAttributionQuery) {
            return $criteria;
        }
        $query = new CommonTCritereAttributionQuery();
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
     * @return   CommonTCritereAttribution|CommonTCritereAttribution[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCritereAttributionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCritereAttributionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCritereAttribution A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdCritereAttribution($key, $con = null)
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
     * @return                 CommonTCritereAttribution A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_critere_attribution`, `enonce`, `ordre`, `ponderation`, `id_donnee_complementaire` FROM `t_critere_attribution` WHERE `id_critere_attribution` = :p0';
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
            $obj = new CommonTCritereAttribution();
            $obj->hydrate($row);
            CommonTCritereAttributionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTCritereAttribution|CommonTCritereAttribution[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCritereAttribution[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTCritereAttributionPeer::ID_CRITERE_ATTRIBUTION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTCritereAttributionPeer::ID_CRITERE_ATTRIBUTION, $keys, Criteria::IN);
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
     * @return CommonTCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByIdCritereAttribution($idCritereAttribution = null, $comparison = null)
    {
        if (is_array($idCritereAttribution)) {
            $useMinMax = false;
            if (isset($idCritereAttribution['min'])) {
                $this->addUsingAlias(CommonTCritereAttributionPeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCritereAttribution['max'])) {
                $this->addUsingAlias(CommonTCritereAttributionPeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCritereAttributionPeer::ID_CRITERE_ATTRIBUTION, $idCritereAttribution, $comparison);
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
     * @return CommonTCritereAttributionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCritereAttributionPeer::ENONCE, $enonce, $comparison);
    }

    /**
     * Filter the query on the ordre column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdre(1234); // WHERE ordre = 1234
     * $query->filterByOrdre(array(12, 34)); // WHERE ordre IN (12, 34)
     * $query->filterByOrdre(array('min' => 12)); // WHERE ordre >= 12
     * $query->filterByOrdre(array('max' => 12)); // WHERE ordre <= 12
     * </code>
     *
     * @param     mixed $ordre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByOrdre($ordre = null, $comparison = null)
    {
        if (is_array($ordre)) {
            $useMinMax = false;
            if (isset($ordre['min'])) {
                $this->addUsingAlias(CommonTCritereAttributionPeer::ORDRE, $ordre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordre['max'])) {
                $this->addUsingAlias(CommonTCritereAttributionPeer::ORDRE, $ordre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCritereAttributionPeer::ORDRE, $ordre, $comparison);
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
     * @return CommonTCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByPonderation($ponderation = null, $comparison = null)
    {
        if (is_array($ponderation)) {
            $useMinMax = false;
            if (isset($ponderation['min'])) {
                $this->addUsingAlias(CommonTCritereAttributionPeer::PONDERATION, $ponderation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ponderation['max'])) {
                $this->addUsingAlias(CommonTCritereAttributionPeer::PONDERATION, $ponderation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCritereAttributionPeer::PONDERATION, $ponderation, $comparison);
    }

    /**
     * Filter the query on the id_donnee_complementaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDonneeComplementaire(1234); // WHERE id_donnee_complementaire = 1234
     * $query->filterByIdDonneeComplementaire(array(12, 34)); // WHERE id_donnee_complementaire IN (12, 34)
     * $query->filterByIdDonneeComplementaire(array('min' => 12)); // WHERE id_donnee_complementaire >= 12
     * $query->filterByIdDonneeComplementaire(array('max' => 12)); // WHERE id_donnee_complementaire <= 12
     * </code>
     *
     * @param     mixed $idDonneeComplementaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCritereAttributionQuery The current query, for fluid interface
     */
    public function filterByIdDonneeComplementaire($idDonneeComplementaire = null, $comparison = null)
    {
        if (is_array($idDonneeComplementaire)) {
            $useMinMax = false;
            if (isset($idDonneeComplementaire['min'])) {
                $this->addUsingAlias(CommonTCritereAttributionPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDonneeComplementaire['max'])) {
                $this->addUsingAlias(CommonTCritereAttributionPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCritereAttributionPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCritereAttribution $commonTCritereAttribution Object to remove from the list of results
     *
     * @return CommonTCritereAttributionQuery The current query, for fluid interface
     */
    public function prune($commonTCritereAttribution = null)
    {
        if ($commonTCritereAttribution) {
            $this->addUsingAlias(CommonTCritereAttributionPeer::ID_CRITERE_ATTRIBUTION, $commonTCritereAttribution->getIdCritereAttribution(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
