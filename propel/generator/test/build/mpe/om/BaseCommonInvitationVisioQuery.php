<?php


/**
 * Base class that represents a query for the 'invitation_visio' table.
 *
 * 
 *
 * @method CommonInvitationVisioQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonInvitationVisioQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonInvitationVisioQuery orderByInterneId($order = Criteria::ASC) Order by the interne_id column
 * @method CommonInvitationVisioQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 *
 * @method CommonInvitationVisioQuery groupById() Group by the id column
 * @method CommonInvitationVisioQuery groupByOrganisme() Group by the organisme column
 * @method CommonInvitationVisioQuery groupByInterneId() Group by the interne_id column
 * @method CommonInvitationVisioQuery groupByConsultationRef() Group by the consultation_ref column
 *
 * @method CommonInvitationVisioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonInvitationVisioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonInvitationVisioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonInvitationVisio findOne(PropelPDO $con = null) Return the first CommonInvitationVisio matching the query
 * @method CommonInvitationVisio findOneOrCreate(PropelPDO $con = null) Return the first CommonInvitationVisio matching the query, or a new CommonInvitationVisio object populated from the query conditions when no match is found
 *
 * @method CommonInvitationVisio findOneByOrganisme(string $organisme) Return the first CommonInvitationVisio filtered by the organisme column
 * @method CommonInvitationVisio findOneByInterneId(int $interne_id) Return the first CommonInvitationVisio filtered by the interne_id column
 * @method CommonInvitationVisio findOneByConsultationRef(int $consultation_ref) Return the first CommonInvitationVisio filtered by the consultation_ref column
 *
 * @method array findById(int $id) Return CommonInvitationVisio objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonInvitationVisio objects filtered by the organisme column
 * @method array findByInterneId(int $interne_id) Return CommonInvitationVisio objects filtered by the interne_id column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonInvitationVisio objects filtered by the consultation_ref column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonInvitationVisioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonInvitationVisioQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonInvitationVisio', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonInvitationVisioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonInvitationVisioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonInvitationVisioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonInvitationVisioQuery) {
            return $criteria;
        }
        $query = new CommonInvitationVisioQuery();
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
     * @return   CommonInvitationVisio|CommonInvitationVisio[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonInvitationVisioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonInvitationVisioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonInvitationVisio A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 CommonInvitationVisio A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `interne_id`, `consultation_ref` FROM `invitation_visio` WHERE `id` = :p0';
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
            $obj = new CommonInvitationVisio();
            $obj->hydrate($row);
            CommonInvitationVisioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonInvitationVisio|CommonInvitationVisio[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonInvitationVisio[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonInvitationVisioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonInvitationVisioPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonInvitationVisioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonInvitationVisioPeer::ID, $keys, Criteria::IN);
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
     * @return CommonInvitationVisioQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonInvitationVisioPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonInvitationVisioPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInvitationVisioPeer::ID, $id, $comparison);
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
     * @return CommonInvitationVisioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonInvitationVisioPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the interne_id column
     *
     * Example usage:
     * <code>
     * $query->filterByInterneId(1234); // WHERE interne_id = 1234
     * $query->filterByInterneId(array(12, 34)); // WHERE interne_id IN (12, 34)
     * $query->filterByInterneId(array('min' => 12)); // WHERE interne_id >= 12
     * $query->filterByInterneId(array('max' => 12)); // WHERE interne_id <= 12
     * </code>
     *
     * @param     mixed $interneId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInvitationVisioQuery The current query, for fluid interface
     */
    public function filterByInterneId($interneId = null, $comparison = null)
    {
        if (is_array($interneId)) {
            $useMinMax = false;
            if (isset($interneId['min'])) {
                $this->addUsingAlias(CommonInvitationVisioPeer::INTERNE_ID, $interneId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($interneId['max'])) {
                $this->addUsingAlias(CommonInvitationVisioPeer::INTERNE_ID, $interneId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInvitationVisioPeer::INTERNE_ID, $interneId, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInvitationVisioQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonInvitationVisioPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonInvitationVisioPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInvitationVisioPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonInvitationVisio $commonInvitationVisio Object to remove from the list of results
     *
     * @return CommonInvitationVisioQuery The current query, for fluid interface
     */
    public function prune($commonInvitationVisio = null)
    {
        if ($commonInvitationVisio) {
            $this->addUsingAlias(CommonInvitationVisioPeer::ID, $commonInvitationVisio->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
