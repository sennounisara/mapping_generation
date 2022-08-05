<?php


/**
 * Base class that represents a query for the 'Destinataire_Annonce_Press' table.
 *
 * 
 *
 * @method CommonDestinataireAnnoncePressQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDestinataireAnnoncePressQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonDestinataireAnnoncePressQuery orderByIdAnnoncePress($order = Criteria::ASC) Order by the id_annonce_press column
 * @method CommonDestinataireAnnoncePressQuery orderByIdJal($order = Criteria::ASC) Order by the id_jal column
 *
 * @method CommonDestinataireAnnoncePressQuery groupById() Group by the id column
 * @method CommonDestinataireAnnoncePressQuery groupByOrganisme() Group by the organisme column
 * @method CommonDestinataireAnnoncePressQuery groupByIdAnnoncePress() Group by the id_annonce_press column
 * @method CommonDestinataireAnnoncePressQuery groupByIdJal() Group by the id_jal column
 *
 * @method CommonDestinataireAnnoncePressQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDestinataireAnnoncePressQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDestinataireAnnoncePressQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDestinataireAnnoncePress findOne(PropelPDO $con = null) Return the first CommonDestinataireAnnoncePress matching the query
 * @method CommonDestinataireAnnoncePress findOneOrCreate(PropelPDO $con = null) Return the first CommonDestinataireAnnoncePress matching the query, or a new CommonDestinataireAnnoncePress object populated from the query conditions when no match is found
 *
 * @method CommonDestinataireAnnoncePress findOneById(int $id) Return the first CommonDestinataireAnnoncePress filtered by the id column
 * @method CommonDestinataireAnnoncePress findOneByOrganisme(string $organisme) Return the first CommonDestinataireAnnoncePress filtered by the organisme column
 * @method CommonDestinataireAnnoncePress findOneByIdAnnoncePress(int $id_annonce_press) Return the first CommonDestinataireAnnoncePress filtered by the id_annonce_press column
 * @method CommonDestinataireAnnoncePress findOneByIdJal(int $id_jal) Return the first CommonDestinataireAnnoncePress filtered by the id_jal column
 *
 * @method array findById(int $id) Return CommonDestinataireAnnoncePress objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonDestinataireAnnoncePress objects filtered by the organisme column
 * @method array findByIdAnnoncePress(int $id_annonce_press) Return CommonDestinataireAnnoncePress objects filtered by the id_annonce_press column
 * @method array findByIdJal(int $id_jal) Return CommonDestinataireAnnoncePress objects filtered by the id_jal column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDestinataireAnnoncePressQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDestinataireAnnoncePressQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDestinataireAnnoncePress', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDestinataireAnnoncePressQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDestinataireAnnoncePressQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDestinataireAnnoncePressQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDestinataireAnnoncePressQuery) {
            return $criteria;
        }
        $query = new CommonDestinataireAnnoncePressQuery();
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
     * @return   CommonDestinataireAnnoncePress|CommonDestinataireAnnoncePress[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDestinataireAnnoncePressPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDestinataireAnnoncePressPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDestinataireAnnoncePress A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_annonce_press`, `id_jal` FROM `Destinataire_Annonce_Press` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonDestinataireAnnoncePress();
            $obj->hydrate($row);
            CommonDestinataireAnnoncePressPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonDestinataireAnnoncePress|CommonDestinataireAnnoncePress[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDestinataireAnnoncePress[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDestinataireAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDestinataireAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonDestinataireAnnoncePressPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonDestinataireAnnoncePressPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonDestinataireAnnoncePressQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ID, $id, $comparison);
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
     * @return CommonDestinataireAnnoncePressQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_annonce_press column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAnnoncePress(1234); // WHERE id_annonce_press = 1234
     * $query->filterByIdAnnoncePress(array(12, 34)); // WHERE id_annonce_press IN (12, 34)
     * $query->filterByIdAnnoncePress(array('min' => 12)); // WHERE id_annonce_press >= 12
     * $query->filterByIdAnnoncePress(array('max' => 12)); // WHERE id_annonce_press <= 12
     * </code>
     *
     * @param     mixed $idAnnoncePress The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByIdAnnoncePress($idAnnoncePress = null, $comparison = null)
    {
        if (is_array($idAnnoncePress)) {
            $useMinMax = false;
            if (isset($idAnnoncePress['min'])) {
                $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ID_ANNONCE_PRESS, $idAnnoncePress['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAnnoncePress['max'])) {
                $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ID_ANNONCE_PRESS, $idAnnoncePress['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ID_ANNONCE_PRESS, $idAnnoncePress, $comparison);
    }

    /**
     * Filter the query on the id_jal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdJal(1234); // WHERE id_jal = 1234
     * $query->filterByIdJal(array(12, 34)); // WHERE id_jal IN (12, 34)
     * $query->filterByIdJal(array('min' => 12)); // WHERE id_jal >= 12
     * $query->filterByIdJal(array('max' => 12)); // WHERE id_jal <= 12
     * </code>
     *
     * @param     mixed $idJal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinataireAnnoncePressQuery The current query, for fluid interface
     */
    public function filterByIdJal($idJal = null, $comparison = null)
    {
        if (is_array($idJal)) {
            $useMinMax = false;
            if (isset($idJal['min'])) {
                $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ID_JAL, $idJal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idJal['max'])) {
                $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ID_JAL, $idJal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinataireAnnoncePressPeer::ID_JAL, $idJal, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDestinataireAnnoncePress $commonDestinataireAnnoncePress Object to remove from the list of results
     *
     * @return CommonDestinataireAnnoncePressQuery The current query, for fluid interface
     */
    public function prune($commonDestinataireAnnoncePress = null)
    {
        if ($commonDestinataireAnnoncePress) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonDestinataireAnnoncePressPeer::ID), $commonDestinataireAnnoncePress->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonDestinataireAnnoncePressPeer::ORGANISME), $commonDestinataireAnnoncePress->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
