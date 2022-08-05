<?php


/**
 * Base class that represents a query for the 'trace_operations_inscrit' table.
 *
 * 
 *
 * @method CommonTraceOperationsInscritQuery orderByIdTrace($order = Criteria::ASC) Order by the id_trace column
 * @method CommonTraceOperationsInscritQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonTraceOperationsInscritQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonTraceOperationsInscritQuery orderByAddrIp($order = Criteria::ASC) Order by the addr_ip column
 * @method CommonTraceOperationsInscritQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonTraceOperationsInscritQuery orderByOperations($order = Criteria::ASC) Order by the operations column
 * @method CommonTraceOperationsInscritQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTraceOperationsInscritQuery orderByRefConsultation($order = Criteria::ASC) Order by the ref_consultation column
 * @method CommonTraceOperationsInscritQuery orderByAfficher($order = Criteria::ASC) Order by the afficher column
 *
 * @method CommonTraceOperationsInscritQuery groupByIdTrace() Group by the id_trace column
 * @method CommonTraceOperationsInscritQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonTraceOperationsInscritQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonTraceOperationsInscritQuery groupByAddrIp() Group by the addr_ip column
 * @method CommonTraceOperationsInscritQuery groupByDate() Group by the date column
 * @method CommonTraceOperationsInscritQuery groupByOperations() Group by the operations column
 * @method CommonTraceOperationsInscritQuery groupByOrganisme() Group by the organisme column
 * @method CommonTraceOperationsInscritQuery groupByRefConsultation() Group by the ref_consultation column
 * @method CommonTraceOperationsInscritQuery groupByAfficher() Group by the afficher column
 *
 * @method CommonTraceOperationsInscritQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTraceOperationsInscritQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTraceOperationsInscritQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTraceOperationsInscrit findOne(PropelPDO $con = null) Return the first CommonTraceOperationsInscrit matching the query
 * @method CommonTraceOperationsInscrit findOneOrCreate(PropelPDO $con = null) Return the first CommonTraceOperationsInscrit matching the query, or a new CommonTraceOperationsInscrit object populated from the query conditions when no match is found
 *
 * @method CommonTraceOperationsInscrit findOneByIdInscrit(int $id_inscrit) Return the first CommonTraceOperationsInscrit filtered by the id_inscrit column
 * @method CommonTraceOperationsInscrit findOneByIdEntreprise(int $id_entreprise) Return the first CommonTraceOperationsInscrit filtered by the id_entreprise column
 * @method CommonTraceOperationsInscrit findOneByAddrIp(string $addr_ip) Return the first CommonTraceOperationsInscrit filtered by the addr_ip column
 * @method CommonTraceOperationsInscrit findOneByDate(string $date) Return the first CommonTraceOperationsInscrit filtered by the date column
 * @method CommonTraceOperationsInscrit findOneByOperations(string $operations) Return the first CommonTraceOperationsInscrit filtered by the operations column
 * @method CommonTraceOperationsInscrit findOneByOrganisme(string $organisme) Return the first CommonTraceOperationsInscrit filtered by the organisme column
 * @method CommonTraceOperationsInscrit findOneByRefConsultation(string $ref_consultation) Return the first CommonTraceOperationsInscrit filtered by the ref_consultation column
 * @method CommonTraceOperationsInscrit findOneByAfficher(string $afficher) Return the first CommonTraceOperationsInscrit filtered by the afficher column
 *
 * @method array findByIdTrace(int $id_trace) Return CommonTraceOperationsInscrit objects filtered by the id_trace column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonTraceOperationsInscrit objects filtered by the id_inscrit column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonTraceOperationsInscrit objects filtered by the id_entreprise column
 * @method array findByAddrIp(string $addr_ip) Return CommonTraceOperationsInscrit objects filtered by the addr_ip column
 * @method array findByDate(string $date) Return CommonTraceOperationsInscrit objects filtered by the date column
 * @method array findByOperations(string $operations) Return CommonTraceOperationsInscrit objects filtered by the operations column
 * @method array findByOrganisme(string $organisme) Return CommonTraceOperationsInscrit objects filtered by the organisme column
 * @method array findByRefConsultation(string $ref_consultation) Return CommonTraceOperationsInscrit objects filtered by the ref_consultation column
 * @method array findByAfficher(string $afficher) Return CommonTraceOperationsInscrit objects filtered by the afficher column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTraceOperationsInscritQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTraceOperationsInscritQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTraceOperationsInscrit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTraceOperationsInscritQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTraceOperationsInscritQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTraceOperationsInscritQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTraceOperationsInscritQuery) {
            return $criteria;
        }
        $query = new CommonTraceOperationsInscritQuery();
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
     * @return   CommonTraceOperationsInscrit|CommonTraceOperationsInscrit[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTraceOperationsInscritPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTraceOperationsInscritPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTraceOperationsInscrit A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTrace($key, $con = null)
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
     * @return                 CommonTraceOperationsInscrit A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_trace`, `id_inscrit`, `id_entreprise`, `addr_ip`, `date`, `operations`, `organisme`, `ref_consultation`, `afficher` FROM `trace_operations_inscrit` WHERE `id_trace` = :p0';
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
            $obj = new CommonTraceOperationsInscrit();
            $obj->hydrate($row);
            CommonTraceOperationsInscritPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTraceOperationsInscrit|CommonTraceOperationsInscrit[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTraceOperationsInscrit[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_TRACE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_TRACE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_trace column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrace(1234); // WHERE id_trace = 1234
     * $query->filterByIdTrace(array(12, 34)); // WHERE id_trace IN (12, 34)
     * $query->filterByIdTrace(array('min' => 12)); // WHERE id_trace >= 12
     * $query->filterByIdTrace(array('max' => 12)); // WHERE id_trace <= 12
     * </code>
     *
     * @param     mixed $idTrace The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
     */
    public function filterByIdTrace($idTrace = null, $comparison = null)
    {
        if (is_array($idTrace)) {
            $useMinMax = false;
            if (isset($idTrace['min'])) {
                $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_TRACE, $idTrace['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrace['max'])) {
                $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_TRACE, $idTrace['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_TRACE, $idTrace, $comparison);
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
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_INSCRIT, $idInscrit, $comparison);
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
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the addr_ip column
     *
     * Example usage:
     * <code>
     * $query->filterByAddrIp('fooValue');   // WHERE addr_ip = 'fooValue'
     * $query->filterByAddrIp('%fooValue%'); // WHERE addr_ip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addrIp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
     */
    public function filterByAddrIp($addrIp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addrIp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addrIp)) {
                $addrIp = str_replace('*', '%', $addrIp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTraceOperationsInscritPeer::ADDR_IP, $addrIp, $comparison);
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
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CommonTraceOperationsInscritPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CommonTraceOperationsInscritPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTraceOperationsInscritPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the operations column
     *
     * Example usage:
     * <code>
     * $query->filterByOperations('fooValue');   // WHERE operations = 'fooValue'
     * $query->filterByOperations('%fooValue%'); // WHERE operations LIKE '%fooValue%'
     * </code>
     *
     * @param     string $operations The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
     */
    public function filterByOperations($operations = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($operations)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $operations)) {
                $operations = str_replace('*', '%', $operations);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTraceOperationsInscritPeer::OPERATIONS, $operations, $comparison);
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
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTraceOperationsInscritPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the ref_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByRefConsultation('fooValue');   // WHERE ref_consultation = 'fooValue'
     * $query->filterByRefConsultation('%fooValue%'); // WHERE ref_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $refConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($refConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $refConsultation)) {
                $refConsultation = str_replace('*', '%', $refConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTraceOperationsInscritPeer::REF_CONSULTATION, $refConsultation, $comparison);
    }

    /**
     * Filter the query on the afficher column
     *
     * Example usage:
     * <code>
     * $query->filterByAfficher('fooValue');   // WHERE afficher = 'fooValue'
     * $query->filterByAfficher('%fooValue%'); // WHERE afficher LIKE '%fooValue%'
     * </code>
     *
     * @param     string $afficher The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
     */
    public function filterByAfficher($afficher = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($afficher)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $afficher)) {
                $afficher = str_replace('*', '%', $afficher);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTraceOperationsInscritPeer::AFFICHER, $afficher, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTraceOperationsInscrit $commonTraceOperationsInscrit Object to remove from the list of results
     *
     * @return CommonTraceOperationsInscritQuery The current query, for fluid interface
     */
    public function prune($commonTraceOperationsInscrit = null)
    {
        if ($commonTraceOperationsInscrit) {
            $this->addUsingAlias(CommonTraceOperationsInscritPeer::ID_TRACE, $commonTraceOperationsInscrit->getIdTrace(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
