<?php


/**
 * Base class that represents a query for the 'membre_commission_consultation' table.
 *
 * 
 *
 * @method CommonMembreCommissionConsultationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonMembreCommissionConsultationQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonMembreCommissionConsultationQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonMembreCommissionConsultationQuery orderByIdMembre($order = Criteria::ASC) Order by the id_membre column
 * @method CommonMembreCommissionConsultationQuery orderByQualite($order = Criteria::ASC) Order by the qualite column
 * @method CommonMembreCommissionConsultationQuery orderByIdCommission($order = Criteria::ASC) Order by the id_commission column
 *
 * @method CommonMembreCommissionConsultationQuery groupById() Group by the id column
 * @method CommonMembreCommissionConsultationQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonMembreCommissionConsultationQuery groupByOrganisme() Group by the organisme column
 * @method CommonMembreCommissionConsultationQuery groupByIdMembre() Group by the id_membre column
 * @method CommonMembreCommissionConsultationQuery groupByQualite() Group by the qualite column
 * @method CommonMembreCommissionConsultationQuery groupByIdCommission() Group by the id_commission column
 *
 * @method CommonMembreCommissionConsultationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonMembreCommissionConsultationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonMembreCommissionConsultationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonMembreCommissionConsultation findOne(PropelPDO $con = null) Return the first CommonMembreCommissionConsultation matching the query
 * @method CommonMembreCommissionConsultation findOneOrCreate(PropelPDO $con = null) Return the first CommonMembreCommissionConsultation matching the query, or a new CommonMembreCommissionConsultation object populated from the query conditions when no match is found
 *
 * @method CommonMembreCommissionConsultation findOneByConsultationRef(int $consultation_ref) Return the first CommonMembreCommissionConsultation filtered by the consultation_ref column
 * @method CommonMembreCommissionConsultation findOneByOrganisme(string $organisme) Return the first CommonMembreCommissionConsultation filtered by the organisme column
 * @method CommonMembreCommissionConsultation findOneByIdMembre(int $id_membre) Return the first CommonMembreCommissionConsultation filtered by the id_membre column
 * @method CommonMembreCommissionConsultation findOneByQualite(string $qualite) Return the first CommonMembreCommissionConsultation filtered by the qualite column
 * @method CommonMembreCommissionConsultation findOneByIdCommission(int $id_commission) Return the first CommonMembreCommissionConsultation filtered by the id_commission column
 *
 * @method array findById(int $id) Return CommonMembreCommissionConsultation objects filtered by the id column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonMembreCommissionConsultation objects filtered by the consultation_ref column
 * @method array findByOrganisme(string $organisme) Return CommonMembreCommissionConsultation objects filtered by the organisme column
 * @method array findByIdMembre(int $id_membre) Return CommonMembreCommissionConsultation objects filtered by the id_membre column
 * @method array findByQualite(string $qualite) Return CommonMembreCommissionConsultation objects filtered by the qualite column
 * @method array findByIdCommission(int $id_commission) Return CommonMembreCommissionConsultation objects filtered by the id_commission column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonMembreCommissionConsultationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonMembreCommissionConsultationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonMembreCommissionConsultation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonMembreCommissionConsultationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonMembreCommissionConsultationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonMembreCommissionConsultationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonMembreCommissionConsultationQuery) {
            return $criteria;
        }
        $query = new CommonMembreCommissionConsultationQuery();
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
     * @return   CommonMembreCommissionConsultation|CommonMembreCommissionConsultation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonMembreCommissionConsultationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonMembreCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonMembreCommissionConsultation A model object, or null if the key is not found
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
     * @return                 CommonMembreCommissionConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `consultation_ref`, `organisme`, `id_membre`, `qualite`, `id_commission` FROM `membre_commission_consultation` WHERE `id` = :p0';
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
            $obj = new CommonMembreCommissionConsultation();
            $obj->hydrate($row);
            CommonMembreCommissionConsultationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonMembreCommissionConsultation|CommonMembreCommissionConsultation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonMembreCommissionConsultation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonMembreCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonMembreCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonMembreCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID, $id, $comparison);
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
     * @return CommonMembreCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonMembreCommissionConsultationPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonMembreCommissionConsultationPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMembreCommissionConsultationPeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return CommonMembreCommissionConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_membre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMembre(1234); // WHERE id_membre = 1234
     * $query->filterByIdMembre(array(12, 34)); // WHERE id_membre IN (12, 34)
     * $query->filterByIdMembre(array('min' => 12)); // WHERE id_membre >= 12
     * $query->filterByIdMembre(array('max' => 12)); // WHERE id_membre <= 12
     * </code>
     *
     * @param     mixed $idMembre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMembreCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByIdMembre($idMembre = null, $comparison = null)
    {
        if (is_array($idMembre)) {
            $useMinMax = false;
            if (isset($idMembre['min'])) {
                $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID_MEMBRE, $idMembre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMembre['max'])) {
                $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID_MEMBRE, $idMembre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID_MEMBRE, $idMembre, $comparison);
    }

    /**
     * Filter the query on the qualite column
     *
     * Example usage:
     * <code>
     * $query->filterByQualite('fooValue');   // WHERE qualite = 'fooValue'
     * $query->filterByQualite('%fooValue%'); // WHERE qualite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qualite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMembreCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByQualite($qualite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qualite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $qualite)) {
                $qualite = str_replace('*', '%', $qualite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMembreCommissionConsultationPeer::QUALITE, $qualite, $comparison);
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
     * @return CommonMembreCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByIdCommission($idCommission = null, $comparison = null)
    {
        if (is_array($idCommission)) {
            $useMinMax = false;
            if (isset($idCommission['min'])) {
                $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID_COMMISSION, $idCommission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommission['max'])) {
                $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID_COMMISSION, $idCommission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID_COMMISSION, $idCommission, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonMembreCommissionConsultation $commonMembreCommissionConsultation Object to remove from the list of results
     *
     * @return CommonMembreCommissionConsultationQuery The current query, for fluid interface
     */
    public function prune($commonMembreCommissionConsultation = null)
    {
        if ($commonMembreCommissionConsultation) {
            $this->addUsingAlias(CommonMembreCommissionConsultationPeer::ID, $commonMembreCommissionConsultation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
