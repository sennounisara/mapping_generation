<?php


/**
 * Base class that represents a query for the 'Fcsp_Lieu' table.
 *
 * 
 *
 * @method CommonFcspLieuQuery orderByIdAuto($order = Criteria::ASC) Order by the id_auto column
 * @method CommonFcspLieuQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonFcspLieuQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonFcspLieuQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 *
 * @method CommonFcspLieuQuery groupByIdAuto() Group by the id_auto column
 * @method CommonFcspLieuQuery groupById() Group by the id column
 * @method CommonFcspLieuQuery groupByOrganisme() Group by the organisme column
 * @method CommonFcspLieuQuery groupByLibelle() Group by the libelle column
 *
 * @method CommonFcspLieuQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonFcspLieuQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonFcspLieuQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonFcspLieu findOne(PropelPDO $con = null) Return the first CommonFcspLieu matching the query
 * @method CommonFcspLieu findOneOrCreate(PropelPDO $con = null) Return the first CommonFcspLieu matching the query, or a new CommonFcspLieu object populated from the query conditions when no match is found
 *
 * @method CommonFcspLieu findOneById(int $id) Return the first CommonFcspLieu filtered by the id column
 * @method CommonFcspLieu findOneByOrganisme(string $organisme) Return the first CommonFcspLieu filtered by the organisme column
 * @method CommonFcspLieu findOneByLibelle(string $libelle) Return the first CommonFcspLieu filtered by the libelle column
 *
 * @method array findByIdAuto(int $id_auto) Return CommonFcspLieu objects filtered by the id_auto column
 * @method array findById(int $id) Return CommonFcspLieu objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonFcspLieu objects filtered by the organisme column
 * @method array findByLibelle(string $libelle) Return CommonFcspLieu objects filtered by the libelle column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonFcspLieuQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonFcspLieuQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonFcspLieu', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonFcspLieuQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonFcspLieuQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonFcspLieuQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonFcspLieuQuery) {
            return $criteria;
        }
        $query = new CommonFcspLieuQuery();
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
     * @return   CommonFcspLieu|CommonFcspLieu[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonFcspLieuPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonFcspLieuPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonFcspLieu A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAuto($key, $con = null)
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
     * @return                 CommonFcspLieu A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_auto`, `id`, `organisme`, `libelle` FROM `Fcsp_Lieu` WHERE `id_auto` = :p0';
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
            $obj = new CommonFcspLieu();
            $obj->hydrate($row);
            CommonFcspLieuPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonFcspLieu|CommonFcspLieu[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonFcspLieu[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonFcspLieuQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonFcspLieuPeer::ID_AUTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonFcspLieuQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonFcspLieuPeer::ID_AUTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_auto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAuto(1234); // WHERE id_auto = 1234
     * $query->filterByIdAuto(array(12, 34)); // WHERE id_auto IN (12, 34)
     * $query->filterByIdAuto(array('min' => 12)); // WHERE id_auto >= 12
     * $query->filterByIdAuto(array('max' => 12)); // WHERE id_auto <= 12
     * </code>
     *
     * @param     mixed $idAuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFcspLieuQuery The current query, for fluid interface
     */
    public function filterByIdAuto($idAuto = null, $comparison = null)
    {
        if (is_array($idAuto)) {
            $useMinMax = false;
            if (isset($idAuto['min'])) {
                $this->addUsingAlias(CommonFcspLieuPeer::ID_AUTO, $idAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAuto['max'])) {
                $this->addUsingAlias(CommonFcspLieuPeer::ID_AUTO, $idAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFcspLieuPeer::ID_AUTO, $idAuto, $comparison);
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
     * @return CommonFcspLieuQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonFcspLieuPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonFcspLieuPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFcspLieuPeer::ID, $id, $comparison);
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
     * @return CommonFcspLieuQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonFcspLieuPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonFcspLieuQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonFcspLieuPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonFcspLieu $commonFcspLieu Object to remove from the list of results
     *
     * @return CommonFcspLieuQuery The current query, for fluid interface
     */
    public function prune($commonFcspLieu = null)
    {
        if ($commonFcspLieu) {
            $this->addUsingAlias(CommonFcspLieuPeer::ID_AUTO, $commonFcspLieu->getIdAuto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
