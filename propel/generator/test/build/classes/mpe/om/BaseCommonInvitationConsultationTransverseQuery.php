<?php


/**
 * Base class that represents a query for the 'InvitationConsultationTransverse' table.
 *
 * 
 *
 * @method CommonInvitationConsultationTransverseQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonInvitationConsultationTransverseQuery orderByOrganismeEmetteur($order = Criteria::ASC) Order by the organisme_emetteur column
 * @method CommonInvitationConsultationTransverseQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonInvitationConsultationTransverseQuery orderByOrganismeInvite($order = Criteria::ASC) Order by the organisme_invite column
 * @method CommonInvitationConsultationTransverseQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonInvitationConsultationTransverseQuery orderByDateDecision($order = Criteria::ASC) Order by the date_decision column
 *
 * @method CommonInvitationConsultationTransverseQuery groupById() Group by the id column
 * @method CommonInvitationConsultationTransverseQuery groupByOrganismeEmetteur() Group by the organisme_emetteur column
 * @method CommonInvitationConsultationTransverseQuery groupByReference() Group by the reference column
 * @method CommonInvitationConsultationTransverseQuery groupByOrganismeInvite() Group by the organisme_invite column
 * @method CommonInvitationConsultationTransverseQuery groupByLot() Group by the lot column
 * @method CommonInvitationConsultationTransverseQuery groupByDateDecision() Group by the date_decision column
 *
 * @method CommonInvitationConsultationTransverseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonInvitationConsultationTransverseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonInvitationConsultationTransverseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonInvitationConsultationTransverse findOne(PropelPDO $con = null) Return the first CommonInvitationConsultationTransverse matching the query
 * @method CommonInvitationConsultationTransverse findOneOrCreate(PropelPDO $con = null) Return the first CommonInvitationConsultationTransverse matching the query, or a new CommonInvitationConsultationTransverse object populated from the query conditions when no match is found
 *
 * @method CommonInvitationConsultationTransverse findOneByOrganismeEmetteur(string $organisme_emetteur) Return the first CommonInvitationConsultationTransverse filtered by the organisme_emetteur column
 * @method CommonInvitationConsultationTransverse findOneByReference(string $reference) Return the first CommonInvitationConsultationTransverse filtered by the reference column
 * @method CommonInvitationConsultationTransverse findOneByOrganismeInvite(string $organisme_invite) Return the first CommonInvitationConsultationTransverse filtered by the organisme_invite column
 * @method CommonInvitationConsultationTransverse findOneByLot(int $lot) Return the first CommonInvitationConsultationTransverse filtered by the lot column
 * @method CommonInvitationConsultationTransverse findOneByDateDecision(string $date_decision) Return the first CommonInvitationConsultationTransverse filtered by the date_decision column
 *
 * @method array findById(int $id) Return CommonInvitationConsultationTransverse objects filtered by the id column
 * @method array findByOrganismeEmetteur(string $organisme_emetteur) Return CommonInvitationConsultationTransverse objects filtered by the organisme_emetteur column
 * @method array findByReference(string $reference) Return CommonInvitationConsultationTransverse objects filtered by the reference column
 * @method array findByOrganismeInvite(string $organisme_invite) Return CommonInvitationConsultationTransverse objects filtered by the organisme_invite column
 * @method array findByLot(int $lot) Return CommonInvitationConsultationTransverse objects filtered by the lot column
 * @method array findByDateDecision(string $date_decision) Return CommonInvitationConsultationTransverse objects filtered by the date_decision column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonInvitationConsultationTransverseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonInvitationConsultationTransverseQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonInvitationConsultationTransverse', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonInvitationConsultationTransverseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonInvitationConsultationTransverseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonInvitationConsultationTransverseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonInvitationConsultationTransverseQuery) {
            return $criteria;
        }
        $query = new CommonInvitationConsultationTransverseQuery();
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
     * @return   CommonInvitationConsultationTransverse|CommonInvitationConsultationTransverse[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonInvitationConsultationTransversePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonInvitationConsultationTransversePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonInvitationConsultationTransverse A model object, or null if the key is not found
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
     * @return                 CommonInvitationConsultationTransverse A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme_emetteur`, `reference`, `organisme_invite`, `lot`, `date_decision` FROM `InvitationConsultationTransverse` WHERE `id` = :p0';
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
            $obj = new CommonInvitationConsultationTransverse();
            $obj->hydrate($row);
            CommonInvitationConsultationTransversePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonInvitationConsultationTransverse|CommonInvitationConsultationTransverse[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonInvitationConsultationTransverse[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonInvitationConsultationTransverseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonInvitationConsultationTransversePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonInvitationConsultationTransverseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonInvitationConsultationTransversePeer::ID, $keys, Criteria::IN);
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
     * @return CommonInvitationConsultationTransverseQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonInvitationConsultationTransversePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonInvitationConsultationTransversePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInvitationConsultationTransversePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme_emetteur column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismeEmetteur('fooValue');   // WHERE organisme_emetteur = 'fooValue'
     * $query->filterByOrganismeEmetteur('%fooValue%'); // WHERE organisme_emetteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organismeEmetteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInvitationConsultationTransverseQuery The current query, for fluid interface
     */
    public function filterByOrganismeEmetteur($organismeEmetteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organismeEmetteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organismeEmetteur)) {
                $organismeEmetteur = str_replace('*', '%', $organismeEmetteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInvitationConsultationTransversePeer::ORGANISME_EMETTEUR, $organismeEmetteur, $comparison);
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference('fooValue');   // WHERE reference = 'fooValue'
     * $query->filterByReference('%fooValue%'); // WHERE reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInvitationConsultationTransverseQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reference)) {
                $reference = str_replace('*', '%', $reference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInvitationConsultationTransversePeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the organisme_invite column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismeInvite('fooValue');   // WHERE organisme_invite = 'fooValue'
     * $query->filterByOrganismeInvite('%fooValue%'); // WHERE organisme_invite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organismeInvite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInvitationConsultationTransverseQuery The current query, for fluid interface
     */
    public function filterByOrganismeInvite($organismeInvite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organismeInvite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organismeInvite)) {
                $organismeInvite = str_replace('*', '%', $organismeInvite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInvitationConsultationTransversePeer::ORGANISME_INVITE, $organismeInvite, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInvitationConsultationTransverseQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonInvitationConsultationTransversePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonInvitationConsultationTransversePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInvitationConsultationTransversePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the date_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDecision('2011-03-14'); // WHERE date_decision = '2011-03-14'
     * $query->filterByDateDecision('now'); // WHERE date_decision = '2011-03-14'
     * $query->filterByDateDecision(array('max' => 'yesterday')); // WHERE date_decision > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDecision The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInvitationConsultationTransverseQuery The current query, for fluid interface
     */
    public function filterByDateDecision($dateDecision = null, $comparison = null)
    {
        if (is_array($dateDecision)) {
            $useMinMax = false;
            if (isset($dateDecision['min'])) {
                $this->addUsingAlias(CommonInvitationConsultationTransversePeer::DATE_DECISION, $dateDecision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDecision['max'])) {
                $this->addUsingAlias(CommonInvitationConsultationTransversePeer::DATE_DECISION, $dateDecision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInvitationConsultationTransversePeer::DATE_DECISION, $dateDecision, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonInvitationConsultationTransverse $commonInvitationConsultationTransverse Object to remove from the list of results
     *
     * @return CommonInvitationConsultationTransverseQuery The current query, for fluid interface
     */
    public function prune($commonInvitationConsultationTransverse = null)
    {
        if ($commonInvitationConsultationTransverse) {
            $this->addUsingAlias(CommonInvitationConsultationTransversePeer::ID, $commonInvitationConsultationTransverse->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
