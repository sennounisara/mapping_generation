<?php


/**
 * Base class that represents a query for the 'Chorus_groupement_achat' table.
 *
 * 
 *
 * @method CommonChorusGroupementAchatQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonChorusGroupementAchatQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonChorusGroupementAchatQuery orderByIdOa($order = Criteria::ASC) Order by the id_oa column
 * @method CommonChorusGroupementAchatQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonChorusGroupementAchatQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method CommonChorusGroupementAchatQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method CommonChorusGroupementAchatQuery groupById() Group by the id column
 * @method CommonChorusGroupementAchatQuery groupByOrganisme() Group by the organisme column
 * @method CommonChorusGroupementAchatQuery groupByIdOa() Group by the id_oa column
 * @method CommonChorusGroupementAchatQuery groupByLibelle() Group by the libelle column
 * @method CommonChorusGroupementAchatQuery groupByCode() Group by the code column
 * @method CommonChorusGroupementAchatQuery groupByActif() Group by the actif column
 *
 * @method CommonChorusGroupementAchatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonChorusGroupementAchatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonChorusGroupementAchatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonChorusGroupementAchat findOne(PropelPDO $con = null) Return the first CommonChorusGroupementAchat matching the query
 * @method CommonChorusGroupementAchat findOneOrCreate(PropelPDO $con = null) Return the first CommonChorusGroupementAchat matching the query, or a new CommonChorusGroupementAchat object populated from the query conditions when no match is found
 *
 * @method CommonChorusGroupementAchat findOneByOrganisme(string $organisme) Return the first CommonChorusGroupementAchat filtered by the organisme column
 * @method CommonChorusGroupementAchat findOneByIdOa(int $id_oa) Return the first CommonChorusGroupementAchat filtered by the id_oa column
 * @method CommonChorusGroupementAchat findOneByLibelle(string $libelle) Return the first CommonChorusGroupementAchat filtered by the libelle column
 * @method CommonChorusGroupementAchat findOneByCode(string $code) Return the first CommonChorusGroupementAchat filtered by the code column
 * @method CommonChorusGroupementAchat findOneByActif(int $actif) Return the first CommonChorusGroupementAchat filtered by the actif column
 *
 * @method array findById(int $id) Return CommonChorusGroupementAchat objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonChorusGroupementAchat objects filtered by the organisme column
 * @method array findByIdOa(int $id_oa) Return CommonChorusGroupementAchat objects filtered by the id_oa column
 * @method array findByLibelle(string $libelle) Return CommonChorusGroupementAchat objects filtered by the libelle column
 * @method array findByCode(string $code) Return CommonChorusGroupementAchat objects filtered by the code column
 * @method array findByActif(int $actif) Return CommonChorusGroupementAchat objects filtered by the actif column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonChorusGroupementAchatQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonChorusGroupementAchatQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonChorusGroupementAchat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonChorusGroupementAchatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonChorusGroupementAchatQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonChorusGroupementAchatQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonChorusGroupementAchatQuery) {
            return $criteria;
        }
        $query = new CommonChorusGroupementAchatQuery();
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
     * @return   CommonChorusGroupementAchat|CommonChorusGroupementAchat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonChorusGroupementAchatPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusGroupementAchatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonChorusGroupementAchat A model object, or null if the key is not found
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
     * @return                 CommonChorusGroupementAchat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_oa`, `libelle`, `code`, `actif` FROM `Chorus_groupement_achat` WHERE `id` = :p0';
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
            $obj = new CommonChorusGroupementAchat();
            $obj->hydrate($row);
            CommonChorusGroupementAchatPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonChorusGroupementAchat|CommonChorusGroupementAchat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonChorusGroupementAchat[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonChorusGroupementAchatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonChorusGroupementAchatPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonChorusGroupementAchatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonChorusGroupementAchatPeer::ID, $keys, Criteria::IN);
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
     * @return CommonChorusGroupementAchatQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonChorusGroupementAchatPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonChorusGroupementAchatPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusGroupementAchatPeer::ID, $id, $comparison);
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
     * @return CommonChorusGroupementAchatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChorusGroupementAchatPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_oa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOa(1234); // WHERE id_oa = 1234
     * $query->filterByIdOa(array(12, 34)); // WHERE id_oa IN (12, 34)
     * $query->filterByIdOa(array('min' => 12)); // WHERE id_oa >= 12
     * $query->filterByIdOa(array('max' => 12)); // WHERE id_oa <= 12
     * </code>
     *
     * @param     mixed $idOa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusGroupementAchatQuery The current query, for fluid interface
     */
    public function filterByIdOa($idOa = null, $comparison = null)
    {
        if (is_array($idOa)) {
            $useMinMax = false;
            if (isset($idOa['min'])) {
                $this->addUsingAlias(CommonChorusGroupementAchatPeer::ID_OA, $idOa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOa['max'])) {
                $this->addUsingAlias(CommonChorusGroupementAchatPeer::ID_OA, $idOa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusGroupementAchatPeer::ID_OA, $idOa, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusGroupementAchatQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusGroupementAchatPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusGroupementAchatQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusGroupementAchatPeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(1234); // WHERE actif = 1234
     * $query->filterByActif(array(12, 34)); // WHERE actif IN (12, 34)
     * $query->filterByActif(array('min' => 12)); // WHERE actif >= 12
     * $query->filterByActif(array('max' => 12)); // WHERE actif <= 12
     * </code>
     *
     * @param     mixed $actif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusGroupementAchatQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_array($actif)) {
            $useMinMax = false;
            if (isset($actif['min'])) {
                $this->addUsingAlias(CommonChorusGroupementAchatPeer::ACTIF, $actif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actif['max'])) {
                $this->addUsingAlias(CommonChorusGroupementAchatPeer::ACTIF, $actif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusGroupementAchatPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonChorusGroupementAchat $commonChorusGroupementAchat Object to remove from the list of results
     *
     * @return CommonChorusGroupementAchatQuery The current query, for fluid interface
     */
    public function prune($commonChorusGroupementAchat = null)
    {
        if ($commonChorusGroupementAchat) {
            $this->addUsingAlias(CommonChorusGroupementAchatPeer::ID, $commonChorusGroupementAchat->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
