<?php


/**
 * Base class that represents a query for the 'DestinataireAnnonceJAL' table.
 *
 * 
 *
 * @method CommonDestinataireAnnonceJALQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDestinataireAnnonceJALQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonDestinataireAnnonceJALQuery orderByIdjal($order = Criteria::ASC) Order by the idJAL column
 * @method CommonDestinataireAnnonceJALQuery orderByIdannoncejal($order = Criteria::ASC) Order by the idAnnonceJAL column
 * @method CommonDestinataireAnnonceJALQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonDestinataireAnnonceJALQuery orderByDatePub($order = Criteria::ASC) Order by the date_pub column
 * @method CommonDestinataireAnnonceJALQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonDestinataireAnnonceJALQuery orderByAccuse($order = Criteria::ASC) Order by the accuse column
 * @method CommonDestinataireAnnonceJALQuery orderByIdEchange($order = Criteria::ASC) Order by the id_echange column
 * @method CommonDestinataireAnnonceJALQuery orderByDateAr($order = Criteria::ASC) Order by the date_ar column
 *
 * @method CommonDestinataireAnnonceJALQuery groupById() Group by the id column
 * @method CommonDestinataireAnnonceJALQuery groupByOrganisme() Group by the organisme column
 * @method CommonDestinataireAnnonceJALQuery groupByIdjal() Group by the idJAL column
 * @method CommonDestinataireAnnonceJALQuery groupByIdannoncejal() Group by the idAnnonceJAL column
 * @method CommonDestinataireAnnonceJALQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonDestinataireAnnonceJALQuery groupByDatePub() Group by the date_pub column
 * @method CommonDestinataireAnnonceJALQuery groupByStatut() Group by the statut column
 * @method CommonDestinataireAnnonceJALQuery groupByAccuse() Group by the accuse column
 * @method CommonDestinataireAnnonceJALQuery groupByIdEchange() Group by the id_echange column
 * @method CommonDestinataireAnnonceJALQuery groupByDateAr() Group by the date_ar column
 *
 * @method CommonDestinataireAnnonceJALQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDestinataireAnnonceJALQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDestinataireAnnonceJALQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDestinataireAnnonceJALQuery leftJoinCommonJAL($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonJAL relation
 * @method CommonDestinataireAnnonceJALQuery rightJoinCommonJAL($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonJAL relation
 * @method CommonDestinataireAnnonceJALQuery innerJoinCommonJAL($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonJAL relation
 *
 * @method CommonDestinataireAnnonceJALQuery leftJoinCommonAnnonceJAL($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAnnonceJAL relation
 * @method CommonDestinataireAnnonceJALQuery rightJoinCommonAnnonceJAL($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAnnonceJAL relation
 * @method CommonDestinataireAnnonceJALQuery innerJoinCommonAnnonceJAL($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAnnonceJAL relation
 *
 * @method CommonDestinataireAnnonceJAL findOne(PropelPDO $con = null) Return the first CommonDestinataireAnnonceJAL matching the query
 * @method CommonDestinataireAnnonceJAL findOneOrCreate(PropelPDO $con = null) Return the first CommonDestinataireAnnonceJAL matching the query, or a new CommonDestinataireAnnonceJAL object populated from the query conditions when no match is found
 *
 * @method CommonDestinataireAnnonceJAL findOneById(int $id) Return the first CommonDestinataireAnnonceJAL filtered by the id column
 * @method CommonDestinataireAnnonceJAL findOneByOrganisme(string $organisme) Return the first CommonDestinataireAnnonceJAL filtered by the organisme column
 * @method CommonDestinataireAnnonceJAL findOneByIdjal(int $idJAL) Return the first CommonDestinataireAnnonceJAL filtered by the idJAL column
 * @method CommonDestinataireAnnonceJAL findOneByIdannoncejal(int $idAnnonceJAL) Return the first CommonDestinataireAnnonceJAL filtered by the idAnnonceJAL column
 * @method CommonDestinataireAnnonceJAL findOneByDateEnvoi(string $date_envoi) Return the first CommonDestinataireAnnonceJAL filtered by the date_envoi column
 * @method CommonDestinataireAnnonceJAL findOneByDatePub(string $date_pub) Return the first CommonDestinataireAnnonceJAL filtered by the date_pub column
 * @method CommonDestinataireAnnonceJAL findOneByStatut(string $statut) Return the first CommonDestinataireAnnonceJAL filtered by the statut column
 * @method CommonDestinataireAnnonceJAL findOneByAccuse(string $accuse) Return the first CommonDestinataireAnnonceJAL filtered by the accuse column
 * @method CommonDestinataireAnnonceJAL findOneByIdEchange(int $id_echange) Return the first CommonDestinataireAnnonceJAL filtered by the id_echange column
 * @method CommonDestinataireAnnonceJAL findOneByDateAr(string $date_ar) Return the first CommonDestinataireAnnonceJAL filtered by the date_ar column
 *
 * @method array findById(int $id) Return CommonDestinataireAnnonceJAL objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonDestinataireAnnonceJAL objects filtered by the organisme column
 * @method array findByIdjal(int $idJAL) Return CommonDestinataireAnnonceJAL objects filtered by the idJAL column
 * @method array findByIdannoncejal(int $idAnnonceJAL) Return CommonDestinataireAnnonceJAL objects filtered by the idAnnonceJAL column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonDestinataireAnnonceJAL objects filtered by the date_envoi column
 * @method array findByDatePub(string $date_pub) Return CommonDestinataireAnnonceJAL objects filtered by the date_pub column
 * @method array findByStatut(string $statut) Return CommonDestinataireAnnonceJAL objects filtered by the statut column
 * @method array findByAccuse(string $accuse) Return CommonDestinataireAnnonceJAL objects filtered by the accuse column
 * @method array findByIdEchange(int $id_echange) Return CommonDestinataireAnnonceJAL objects filtered by the id_echange column
 * @method array findByDateAr(string $date_ar) Return CommonDestinataireAnnonceJAL objects filtered by the date_ar column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDestinataireAnnonceJALQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDestinataireAnnonceJALQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDestinataireAnnonceJAL', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDestinataireAnnonceJALQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDestinataireAnnonceJALQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDestinataireAnnonceJALQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDestinataireAnnonceJALQuery) {
            return $criteria;
        }
        $query = new CommonDestinataireAnnonceJALQuery();
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
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonDestinataireAnnonceJAL|CommonDestinataireAnnonceJAL[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDestinataireAnnonceJALPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDestinataireAnnonceJALPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDestinataireAnnonceJAL A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `idJAL`, `idAnnonceJAL`, `date_envoi`, `date_pub`, `statut`, `accuse`, `id_echange`, `date_ar` FROM `DestinataireAnnonceJAL` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonDestinataireAnnonceJAL();
            $obj->hydrate($row);
            CommonDestinataireAnnonceJALPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonDestinataireAnnonceJAL|CommonDestinataireAnnonceJAL[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDestinataireAnnonceJAL[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonDestinataireAnnonceJALPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonDestinataireAnnonceJALPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::ID, $id, $comparison);
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
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the idJAL column
     *
     * Example usage:
     * <code>
     * $query->filterByIdjal(1234); // WHERE idJAL = 1234
     * $query->filterByIdjal(array(12, 34)); // WHERE idJAL IN (12, 34)
     * $query->filterByIdjal(array('min' => 12)); // WHERE idJAL >= 12
     * $query->filterByIdjal(array('max' => 12)); // WHERE idJAL <= 12
     * </code>
     *
     * @see       filterByCommonJAL()
     *
     * @param     mixed $idjal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function filterByIdjal($idjal = null, $comparison = null)
    {
        if (is_array($idjal)) {
            $useMinMax = false;
            if (isset($idjal['min'])) {
                $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::IDJAL, $idjal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idjal['max'])) {
                $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::IDJAL, $idjal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::IDJAL, $idjal, $comparison);
    }

    /**
     * Filter the query on the idAnnonceJAL column
     *
     * Example usage:
     * <code>
     * $query->filterByIdannoncejal(1234); // WHERE idAnnonceJAL = 1234
     * $query->filterByIdannoncejal(array(12, 34)); // WHERE idAnnonceJAL IN (12, 34)
     * $query->filterByIdannoncejal(array('min' => 12)); // WHERE idAnnonceJAL >= 12
     * $query->filterByIdannoncejal(array('max' => 12)); // WHERE idAnnonceJAL <= 12
     * </code>
     *
     * @see       filterByCommonAnnonceJAL()
     *
     * @param     mixed $idannoncejal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function filterByIdannoncejal($idannoncejal = null, $comparison = null)
    {
        if (is_array($idannoncejal)) {
            $useMinMax = false;
            if (isset($idannoncejal['min'])) {
                $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::IDANNONCEJAL, $idannoncejal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idannoncejal['max'])) {
                $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::IDANNONCEJAL, $idannoncejal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::IDANNONCEJAL, $idannoncejal, $comparison);
    }

    /**
     * Filter the query on the date_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('fooValue');   // WHERE date_envoi = 'fooValue'
     * $query->filterByDateEnvoi('%fooValue%'); // WHERE date_envoi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateEnvoi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateEnvoi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateEnvoi)) {
                $dateEnvoi = str_replace('*', '%', $dateEnvoi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the date_pub column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePub('fooValue');   // WHERE date_pub = 'fooValue'
     * $query->filterByDatePub('%fooValue%'); // WHERE date_pub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datePub The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function filterByDatePub($datePub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datePub)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datePub)) {
                $datePub = str_replace('*', '%', $datePub);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::DATE_PUB, $datePub, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE statut = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE statut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut)) {
                $statut = str_replace('*', '%', $statut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the accuse column
     *
     * Example usage:
     * <code>
     * $query->filterByAccuse('fooValue');   // WHERE accuse = 'fooValue'
     * $query->filterByAccuse('%fooValue%'); // WHERE accuse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accuse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function filterByAccuse($accuse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accuse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accuse)) {
                $accuse = str_replace('*', '%', $accuse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::ACCUSE, $accuse, $comparison);
    }

    /**
     * Filter the query on the id_echange column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEchange(1234); // WHERE id_echange = 1234
     * $query->filterByIdEchange(array(12, 34)); // WHERE id_echange IN (12, 34)
     * $query->filterByIdEchange(array('min' => 12)); // WHERE id_echange >= 12
     * $query->filterByIdEchange(array('max' => 12)); // WHERE id_echange <= 12
     * </code>
     *
     * @param     mixed $idEchange The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function filterByIdEchange($idEchange = null, $comparison = null)
    {
        if (is_array($idEchange)) {
            $useMinMax = false;
            if (isset($idEchange['min'])) {
                $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::ID_ECHANGE, $idEchange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEchange['max'])) {
                $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::ID_ECHANGE, $idEchange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::ID_ECHANGE, $idEchange, $comparison);
    }

    /**
     * Filter the query on the date_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAr('fooValue');   // WHERE date_ar = 'fooValue'
     * $query->filterByDateAr('%fooValue%'); // WHERE date_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function filterByDateAr($dateAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAr)) {
                $dateAr = str_replace('*', '%', $dateAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnonceJALPeer::DATE_AR, $dateAr, $comparison);
    }

    /**
     * Filter the query by a related CommonJAL object
     *
     * @param   CommonJAL|PropelObjectCollection $commonJAL The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonJAL($commonJAL, $comparison = null)
    {
        if ($commonJAL instanceof CommonJAL) {
            return $this
                ->addUsingAlias(CommonDestinataireAnnonceJALPeer::IDJAL, $commonJAL->getId(), $comparison);
        } elseif ($commonJAL instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonDestinataireAnnonceJALPeer::IDJAL, $commonJAL->toKeyValue('Id', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonJAL() only accepts arguments of type CommonJAL or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonJAL relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function joinCommonJAL($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonJAL');

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
            $this->addJoinObject($join, 'CommonJAL');
        }

        return $this;
    }

    /**
     * Use the CommonJAL relation CommonJAL object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonJALQuery A secondary query class using the current class as primary query
     */
    public function useCommonJALQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonJAL($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonJAL', 'CommonJALQuery');
    }

    /**
     * Filter the query by a related CommonAnnonceJAL object
     *
     * @param   CommonAnnonceJAL|PropelObjectCollection $commonAnnonceJAL The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAnnonceJAL($commonAnnonceJAL, $comparison = null)
    {
        if ($commonAnnonceJAL instanceof CommonAnnonceJAL) {
            return $this
                ->addUsingAlias(CommonDestinataireAnnonceJALPeer::IDANNONCEJAL, $commonAnnonceJAL->getId(), $comparison);
        } elseif ($commonAnnonceJAL instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonDestinataireAnnonceJALPeer::IDANNONCEJAL, $commonAnnonceJAL->toKeyValue('Id', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAnnonceJAL() only accepts arguments of type CommonAnnonceJAL or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAnnonceJAL relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function joinCommonAnnonceJAL($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAnnonceJAL');

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
            $this->addJoinObject($join, 'CommonAnnonceJAL');
        }

        return $this;
    }

    /**
     * Use the CommonAnnonceJAL relation CommonAnnonceJAL object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAnnonceJALQuery A secondary query class using the current class as primary query
     */
    public function useCommonAnnonceJALQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonAnnonceJAL($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAnnonceJAL', 'CommonAnnonceJALQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDestinataireAnnonceJAL $commonDestinataireAnnonceJAL Object to remove from the list of results
     *
     * @return CommonDestinataireAnnonceJALQuery The current query, for fluid interface
     */
    public function prune($commonDestinataireAnnonceJAL = null)
    {
        if ($commonDestinataireAnnonceJAL) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonDestinataireAnnonceJALPeer::ID), $commonDestinataireAnnonceJAL->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonDestinataireAnnonceJALPeer::ORGANISME), $commonDestinataireAnnonceJAL->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
