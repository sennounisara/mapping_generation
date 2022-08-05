<?php


/**
 * Base class that represents a query for the 'EnchereOffre' table.
 *
 * 
 *
 * @method CommonEnchereOffreQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEnchereOffreQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEnchereOffreQuery orderByIdenchere($order = Criteria::ASC) Order by the idEnchere column
 * @method CommonEnchereOffreQuery orderByIdenchereentreprise($order = Criteria::ASC) Order by the idEnchereEntreprise column
 * @method CommonEnchereOffreQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonEnchereOffreQuery orderByValeurtic($order = Criteria::ASC) Order by the valeurTIC column
 * @method CommonEnchereOffreQuery orderByValeurtc($order = Criteria::ASC) Order by the valeurTC column
 * @method CommonEnchereOffreQuery orderByValeurnetc($order = Criteria::ASC) Order by the valeurNETC column
 * @method CommonEnchereOffreQuery orderByValeurngc($order = Criteria::ASC) Order by the valeurNGC column
 * @method CommonEnchereOffreQuery orderByRang($order = Criteria::ASC) Order by the rang column
 *
 * @method CommonEnchereOffreQuery groupById() Group by the id column
 * @method CommonEnchereOffreQuery groupByOrganisme() Group by the organisme column
 * @method CommonEnchereOffreQuery groupByIdenchere() Group by the idEnchere column
 * @method CommonEnchereOffreQuery groupByIdenchereentreprise() Group by the idEnchereEntreprise column
 * @method CommonEnchereOffreQuery groupByDate() Group by the date column
 * @method CommonEnchereOffreQuery groupByValeurtic() Group by the valeurTIC column
 * @method CommonEnchereOffreQuery groupByValeurtc() Group by the valeurTC column
 * @method CommonEnchereOffreQuery groupByValeurnetc() Group by the valeurNETC column
 * @method CommonEnchereOffreQuery groupByValeurngc() Group by the valeurNGC column
 * @method CommonEnchereOffreQuery groupByRang() Group by the rang column
 *
 * @method CommonEnchereOffreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEnchereOffreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEnchereOffreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEnchereOffreQuery leftJoinCommonEnchereEntreprisePmi($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEnchereEntreprisePmi relation
 * @method CommonEnchereOffreQuery rightJoinCommonEnchereEntreprisePmi($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEnchereEntreprisePmi relation
 * @method CommonEnchereOffreQuery innerJoinCommonEnchereEntreprisePmi($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEnchereEntreprisePmi relation
 *
 * @method CommonEnchereOffreQuery leftJoinCommonEncherePmiRelatedByIdenchereOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEncherePmiRelatedByIdenchereOrganisme relation
 * @method CommonEnchereOffreQuery rightJoinCommonEncherePmiRelatedByIdenchereOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEncherePmiRelatedByIdenchereOrganisme relation
 * @method CommonEnchereOffreQuery innerJoinCommonEncherePmiRelatedByIdenchereOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEncherePmiRelatedByIdenchereOrganisme relation
 *
 * @method CommonEnchereOffreQuery leftJoinCommonEncherePmiRelatedByIdenchere($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEncherePmiRelatedByIdenchere relation
 * @method CommonEnchereOffreQuery rightJoinCommonEncherePmiRelatedByIdenchere($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEncherePmiRelatedByIdenchere relation
 * @method CommonEnchereOffreQuery innerJoinCommonEncherePmiRelatedByIdenchere($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEncherePmiRelatedByIdenchere relation
 *
 * @method CommonEnchereOffreQuery leftJoinCommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme relation
 * @method CommonEnchereOffreQuery rightJoinCommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme relation
 * @method CommonEnchereOffreQuery innerJoinCommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme relation
 *
 * @method CommonEnchereOffreQuery leftJoinCommonEnchereOffreReferenceRelatedByIdenchereoffre($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEnchereOffreReferenceRelatedByIdenchereoffre relation
 * @method CommonEnchereOffreQuery rightJoinCommonEnchereOffreReferenceRelatedByIdenchereoffre($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEnchereOffreReferenceRelatedByIdenchereoffre relation
 * @method CommonEnchereOffreQuery innerJoinCommonEnchereOffreReferenceRelatedByIdenchereoffre($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEnchereOffreReferenceRelatedByIdenchereoffre relation
 *
 * @method CommonEnchereOffre findOne(PropelPDO $con = null) Return the first CommonEnchereOffre matching the query
 * @method CommonEnchereOffre findOneOrCreate(PropelPDO $con = null) Return the first CommonEnchereOffre matching the query, or a new CommonEnchereOffre object populated from the query conditions when no match is found
 *
 * @method CommonEnchereOffre findOneById(int $id) Return the first CommonEnchereOffre filtered by the id column
 * @method CommonEnchereOffre findOneByOrganisme(string $organisme) Return the first CommonEnchereOffre filtered by the organisme column
 * @method CommonEnchereOffre findOneByIdenchere(int $idEnchere) Return the first CommonEnchereOffre filtered by the idEnchere column
 * @method CommonEnchereOffre findOneByIdenchereentreprise(int $idEnchereEntreprise) Return the first CommonEnchereOffre filtered by the idEnchereEntreprise column
 * @method CommonEnchereOffre findOneByDate(string $date) Return the first CommonEnchereOffre filtered by the date column
 * @method CommonEnchereOffre findOneByValeurtic(double $valeurTIC) Return the first CommonEnchereOffre filtered by the valeurTIC column
 * @method CommonEnchereOffre findOneByValeurtc(double $valeurTC) Return the first CommonEnchereOffre filtered by the valeurTC column
 * @method CommonEnchereOffre findOneByValeurnetc(double $valeurNETC) Return the first CommonEnchereOffre filtered by the valeurNETC column
 * @method CommonEnchereOffre findOneByValeurngc(double $valeurNGC) Return the first CommonEnchereOffre filtered by the valeurNGC column
 * @method CommonEnchereOffre findOneByRang(int $rang) Return the first CommonEnchereOffre filtered by the rang column
 *
 * @method array findById(int $id) Return CommonEnchereOffre objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonEnchereOffre objects filtered by the organisme column
 * @method array findByIdenchere(int $idEnchere) Return CommonEnchereOffre objects filtered by the idEnchere column
 * @method array findByIdenchereentreprise(int $idEnchereEntreprise) Return CommonEnchereOffre objects filtered by the idEnchereEntreprise column
 * @method array findByDate(string $date) Return CommonEnchereOffre objects filtered by the date column
 * @method array findByValeurtic(double $valeurTIC) Return CommonEnchereOffre objects filtered by the valeurTIC column
 * @method array findByValeurtc(double $valeurTC) Return CommonEnchereOffre objects filtered by the valeurTC column
 * @method array findByValeurnetc(double $valeurNETC) Return CommonEnchereOffre objects filtered by the valeurNETC column
 * @method array findByValeurngc(double $valeurNGC) Return CommonEnchereOffre objects filtered by the valeurNGC column
 * @method array findByRang(int $rang) Return CommonEnchereOffre objects filtered by the rang column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEnchereOffreQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEnchereOffreQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEnchereOffre', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEnchereOffreQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEnchereOffreQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEnchereOffreQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEnchereOffreQuery) {
            return $criteria;
        }
        $query = new CommonEnchereOffreQuery();
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
     * @return   CommonEnchereOffre|CommonEnchereOffre[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEnchereOffrePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereOffrePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnchereOffre A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `idEnchere`, `idEnchereEntreprise`, `date`, `valeurTIC`, `valeurTC`, `valeurNETC`, `valeurNGC`, `rang` FROM `EnchereOffre` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonEnchereOffre();
            $obj->hydrate($row);
            CommonEnchereOffrePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEnchereOffre|CommonEnchereOffre[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEnchereOffre[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEnchereOffrePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEnchereOffrePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEnchereOffrePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEnchereOffrePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffrePeer::ID, $id, $comparison);
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
     * @return CommonEnchereOffreQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnchereOffrePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the idEnchere column
     *
     * Example usage:
     * <code>
     * $query->filterByIdenchere(1234); // WHERE idEnchere = 1234
     * $query->filterByIdenchere(array(12, 34)); // WHERE idEnchere IN (12, 34)
     * $query->filterByIdenchere(array('min' => 12)); // WHERE idEnchere >= 12
     * $query->filterByIdenchere(array('max' => 12)); // WHERE idEnchere <= 12
     * </code>
     *
     * @see       filterByCommonEncherePmiRelatedByIdenchereOrganisme()
     *
     * @see       filterByCommonEncherePmiRelatedByIdenchere()
     *
     * @param     mixed $idenchere The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function filterByIdenchere($idenchere = null, $comparison = null)
    {
        if (is_array($idenchere)) {
            $useMinMax = false;
            if (isset($idenchere['min'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::IDENCHERE, $idenchere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idenchere['max'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::IDENCHERE, $idenchere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffrePeer::IDENCHERE, $idenchere, $comparison);
    }

    /**
     * Filter the query on the idEnchereEntreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdenchereentreprise(1234); // WHERE idEnchereEntreprise = 1234
     * $query->filterByIdenchereentreprise(array(12, 34)); // WHERE idEnchereEntreprise IN (12, 34)
     * $query->filterByIdenchereentreprise(array('min' => 12)); // WHERE idEnchereEntreprise >= 12
     * $query->filterByIdenchereentreprise(array('max' => 12)); // WHERE idEnchereEntreprise <= 12
     * </code>
     *
     * @see       filterByCommonEnchereEntreprisePmi()
     *
     * @param     mixed $idenchereentreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function filterByIdenchereentreprise($idenchereentreprise = null, $comparison = null)
    {
        if (is_array($idenchereentreprise)) {
            $useMinMax = false;
            if (isset($idenchereentreprise['min'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::IDENCHEREENTREPRISE, $idenchereentreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idenchereentreprise['max'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::IDENCHEREENTREPRISE, $idenchereentreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffrePeer::IDENCHEREENTREPRISE, $idenchereentreprise, $comparison);
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
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffrePeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the valeurTIC column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurtic(1234); // WHERE valeurTIC = 1234
     * $query->filterByValeurtic(array(12, 34)); // WHERE valeurTIC IN (12, 34)
     * $query->filterByValeurtic(array('min' => 12)); // WHERE valeurTIC >= 12
     * $query->filterByValeurtic(array('max' => 12)); // WHERE valeurTIC <= 12
     * </code>
     *
     * @param     mixed $valeurtic The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function filterByValeurtic($valeurtic = null, $comparison = null)
    {
        if (is_array($valeurtic)) {
            $useMinMax = false;
            if (isset($valeurtic['min'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::VALEURTIC, $valeurtic['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurtic['max'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::VALEURTIC, $valeurtic['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffrePeer::VALEURTIC, $valeurtic, $comparison);
    }

    /**
     * Filter the query on the valeurTC column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurtc(1234); // WHERE valeurTC = 1234
     * $query->filterByValeurtc(array(12, 34)); // WHERE valeurTC IN (12, 34)
     * $query->filterByValeurtc(array('min' => 12)); // WHERE valeurTC >= 12
     * $query->filterByValeurtc(array('max' => 12)); // WHERE valeurTC <= 12
     * </code>
     *
     * @param     mixed $valeurtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function filterByValeurtc($valeurtc = null, $comparison = null)
    {
        if (is_array($valeurtc)) {
            $useMinMax = false;
            if (isset($valeurtc['min'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::VALEURTC, $valeurtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurtc['max'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::VALEURTC, $valeurtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffrePeer::VALEURTC, $valeurtc, $comparison);
    }

    /**
     * Filter the query on the valeurNETC column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurnetc(1234); // WHERE valeurNETC = 1234
     * $query->filterByValeurnetc(array(12, 34)); // WHERE valeurNETC IN (12, 34)
     * $query->filterByValeurnetc(array('min' => 12)); // WHERE valeurNETC >= 12
     * $query->filterByValeurnetc(array('max' => 12)); // WHERE valeurNETC <= 12
     * </code>
     *
     * @param     mixed $valeurnetc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function filterByValeurnetc($valeurnetc = null, $comparison = null)
    {
        if (is_array($valeurnetc)) {
            $useMinMax = false;
            if (isset($valeurnetc['min'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::VALEURNETC, $valeurnetc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurnetc['max'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::VALEURNETC, $valeurnetc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffrePeer::VALEURNETC, $valeurnetc, $comparison);
    }

    /**
     * Filter the query on the valeurNGC column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurngc(1234); // WHERE valeurNGC = 1234
     * $query->filterByValeurngc(array(12, 34)); // WHERE valeurNGC IN (12, 34)
     * $query->filterByValeurngc(array('min' => 12)); // WHERE valeurNGC >= 12
     * $query->filterByValeurngc(array('max' => 12)); // WHERE valeurNGC <= 12
     * </code>
     *
     * @param     mixed $valeurngc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function filterByValeurngc($valeurngc = null, $comparison = null)
    {
        if (is_array($valeurngc)) {
            $useMinMax = false;
            if (isset($valeurngc['min'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::VALEURNGC, $valeurngc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurngc['max'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::VALEURNGC, $valeurngc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffrePeer::VALEURNGC, $valeurngc, $comparison);
    }

    /**
     * Filter the query on the rang column
     *
     * Example usage:
     * <code>
     * $query->filterByRang(1234); // WHERE rang = 1234
     * $query->filterByRang(array(12, 34)); // WHERE rang IN (12, 34)
     * $query->filterByRang(array('min' => 12)); // WHERE rang >= 12
     * $query->filterByRang(array('max' => 12)); // WHERE rang <= 12
     * </code>
     *
     * @param     mixed $rang The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function filterByRang($rang = null, $comparison = null)
    {
        if (is_array($rang)) {
            $useMinMax = false;
            if (isset($rang['min'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::RANG, $rang['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rang['max'])) {
                $this->addUsingAlias(CommonEnchereOffrePeer::RANG, $rang['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffrePeer::RANG, $rang, $comparison);
    }

    /**
     * Filter the query by a related CommonEnchereEntreprisePmi object
     *
     * @param   CommonEnchereEntreprisePmi $commonEnchereEntreprisePmi The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnchereOffreQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEnchereEntreprisePmi($commonEnchereEntreprisePmi, $comparison = null)
    {
        if ($commonEnchereEntreprisePmi instanceof CommonEnchereEntreprisePmi) {
            return $this
                ->addUsingAlias(CommonEnchereOffrePeer::IDENCHEREENTREPRISE, $commonEnchereEntreprisePmi->getId(), $comparison)
                ->addUsingAlias(CommonEnchereOffrePeer::ORGANISME, $commonEnchereEntreprisePmi->getOrganisme(), $comparison);
        } else {
            throw new PropelException('filterByCommonEnchereEntreprisePmi() only accepts arguments of type CommonEnchereEntreprisePmi');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEnchereEntreprisePmi relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function joinCommonEnchereEntreprisePmi($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEnchereEntreprisePmi');

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
            $this->addJoinObject($join, 'CommonEnchereEntreprisePmi');
        }

        return $this;
    }

    /**
     * Use the CommonEnchereEntreprisePmi relation CommonEnchereEntreprisePmi object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEnchereEntreprisePmiQuery A secondary query class using the current class as primary query
     */
    public function useCommonEnchereEntreprisePmiQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEnchereEntreprisePmi($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEnchereEntreprisePmi', 'CommonEnchereEntreprisePmiQuery');
    }

    /**
     * Filter the query by a related CommonEncherePmi object
     *
     * @param   CommonEncherePmi $commonEncherePmi The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnchereOffreQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEncherePmiRelatedByIdenchereOrganisme($commonEncherePmi, $comparison = null)
    {
        if ($commonEncherePmi instanceof CommonEncherePmi) {
            return $this
                ->addUsingAlias(CommonEnchereOffrePeer::IDENCHERE, $commonEncherePmi->getId(), $comparison)
                ->addUsingAlias(CommonEnchereOffrePeer::ORGANISME, $commonEncherePmi->getOrganisme(), $comparison);
        } else {
            throw new PropelException('filterByCommonEncherePmiRelatedByIdenchereOrganisme() only accepts arguments of type CommonEncherePmi');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEncherePmiRelatedByIdenchereOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function joinCommonEncherePmiRelatedByIdenchereOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEncherePmiRelatedByIdenchereOrganisme');

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
            $this->addJoinObject($join, 'CommonEncherePmiRelatedByIdenchereOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonEncherePmiRelatedByIdenchereOrganisme relation CommonEncherePmi object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEncherePmiQuery A secondary query class using the current class as primary query
     */
    public function useCommonEncherePmiRelatedByIdenchereOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEncherePmiRelatedByIdenchereOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEncherePmiRelatedByIdenchereOrganisme', 'CommonEncherePmiQuery');
    }

    /**
     * Filter the query by a related CommonEncherePmi object
     *
     * @param   CommonEncherePmi|PropelObjectCollection $commonEncherePmi The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnchereOffreQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEncherePmiRelatedByIdenchere($commonEncherePmi, $comparison = null)
    {
        if ($commonEncherePmi instanceof CommonEncherePmi) {
            return $this
                ->addUsingAlias(CommonEnchereOffrePeer::IDENCHERE, $commonEncherePmi->getId(), $comparison);
        } elseif ($commonEncherePmi instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonEnchereOffrePeer::IDENCHERE, $commonEncherePmi->toKeyValue('Id', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonEncherePmiRelatedByIdenchere() only accepts arguments of type CommonEncherePmi or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEncherePmiRelatedByIdenchere relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function joinCommonEncherePmiRelatedByIdenchere($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEncherePmiRelatedByIdenchere');

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
            $this->addJoinObject($join, 'CommonEncherePmiRelatedByIdenchere');
        }

        return $this;
    }

    /**
     * Use the CommonEncherePmiRelatedByIdenchere relation CommonEncherePmi object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEncherePmiQuery A secondary query class using the current class as primary query
     */
    public function useCommonEncherePmiRelatedByIdenchereQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEncherePmiRelatedByIdenchere($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEncherePmiRelatedByIdenchere', 'CommonEncherePmiQuery');
    }

    /**
     * Filter the query by a related CommonEnchereOffreReference object
     *
     * @param   CommonEnchereOffreReference|PropelObjectCollection $commonEnchereOffreReference  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnchereOffreQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme($commonEnchereOffreReference, $comparison = null)
    {
        if ($commonEnchereOffreReference instanceof CommonEnchereOffreReference) {
            return $this
                ->addUsingAlias(CommonEnchereOffrePeer::ID, $commonEnchereOffreReference->getIdenchereoffre(), $comparison)
                ->addUsingAlias(CommonEnchereOffrePeer::ORGANISME, $commonEnchereOffreReference->getOrganisme(), $comparison);
        } else {
            throw new PropelException('filterByCommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme() only accepts arguments of type CommonEnchereOffreReference');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function joinCommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme');

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
            $this->addJoinObject($join, 'CommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme relation CommonEnchereOffreReference object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEnchereOffreReferenceQuery A secondary query class using the current class as primary query
     */
    public function useCommonEnchereOffreReferenceRelatedByIdenchereoffreOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEnchereOffreReferenceRelatedByIdenchereoffreOrganisme', 'CommonEnchereOffreReferenceQuery');
    }

    /**
     * Filter the query by a related CommonEnchereOffreReference object
     *
     * @param   CommonEnchereOffreReference|PropelObjectCollection $commonEnchereOffreReference  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnchereOffreQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEnchereOffreReferenceRelatedByIdenchereoffre($commonEnchereOffreReference, $comparison = null)
    {
        if ($commonEnchereOffreReference instanceof CommonEnchereOffreReference) {
            return $this
                ->addUsingAlias(CommonEnchereOffrePeer::ID, $commonEnchereOffreReference->getIdenchereoffre(), $comparison);
        } elseif ($commonEnchereOffreReference instanceof PropelObjectCollection) {
            return $this
                ->useCommonEnchereOffreReferenceRelatedByIdenchereoffreQuery()
                ->filterByPrimaryKeys($commonEnchereOffreReference->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonEnchereOffreReferenceRelatedByIdenchereoffre() only accepts arguments of type CommonEnchereOffreReference or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEnchereOffreReferenceRelatedByIdenchereoffre relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function joinCommonEnchereOffreReferenceRelatedByIdenchereoffre($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEnchereOffreReferenceRelatedByIdenchereoffre');

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
            $this->addJoinObject($join, 'CommonEnchereOffreReferenceRelatedByIdenchereoffre');
        }

        return $this;
    }

    /**
     * Use the CommonEnchereOffreReferenceRelatedByIdenchereoffre relation CommonEnchereOffreReference object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEnchereOffreReferenceQuery A secondary query class using the current class as primary query
     */
    public function useCommonEnchereOffreReferenceRelatedByIdenchereoffreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEnchereOffreReferenceRelatedByIdenchereoffre($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEnchereOffreReferenceRelatedByIdenchereoffre', 'CommonEnchereOffreReferenceQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEnchereOffre $commonEnchereOffre Object to remove from the list of results
     *
     * @return CommonEnchereOffreQuery The current query, for fluid interface
     */
    public function prune($commonEnchereOffre = null)
    {
        if ($commonEnchereOffre) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEnchereOffrePeer::ID), $commonEnchereOffre->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEnchereOffrePeer::ORGANISME), $commonEnchereOffre->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
