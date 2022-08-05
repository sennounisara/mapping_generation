<?php


/**
 * Base class that represents a query for the 'catalogues' table.
 *
 * 
 *
 * @method CommonCataloguesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCataloguesQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonCataloguesQuery orderByDateExpiration($order = Criteria::ASC) Order by the date_expiration column
 * @method CommonCataloguesQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonCataloguesQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method CommonCataloguesQuery groupById() Group by the id column
 * @method CommonCataloguesQuery groupByLibelle() Group by the libelle column
 * @method CommonCataloguesQuery groupByDateExpiration() Group by the date_expiration column
 * @method CommonCataloguesQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonCataloguesQuery groupByActif() Group by the actif column
 *
 * @method CommonCataloguesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCataloguesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCataloguesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCatalogues findOne(PropelPDO $con = null) Return the first CommonCatalogues matching the query
 * @method CommonCatalogues findOneOrCreate(PropelPDO $con = null) Return the first CommonCatalogues matching the query, or a new CommonCatalogues object populated from the query conditions when no match is found
 *
 * @method CommonCatalogues findOneByLibelle(string $libelle) Return the first CommonCatalogues filtered by the libelle column
 * @method CommonCatalogues findOneByDateExpiration(string $date_expiration) Return the first CommonCatalogues filtered by the date_expiration column
 * @method CommonCatalogues findOneByIdEntreprise(int $id_entreprise) Return the first CommonCatalogues filtered by the id_entreprise column
 * @method CommonCatalogues findOneByActif(boolean $actif) Return the first CommonCatalogues filtered by the actif column
 *
 * @method array findById(int $id) Return CommonCatalogues objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonCatalogues objects filtered by the libelle column
 * @method array findByDateExpiration(string $date_expiration) Return CommonCatalogues objects filtered by the date_expiration column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonCatalogues objects filtered by the id_entreprise column
 * @method array findByActif(boolean $actif) Return CommonCatalogues objects filtered by the actif column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCataloguesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCataloguesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCatalogues', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCataloguesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCataloguesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCataloguesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCataloguesQuery) {
            return $criteria;
        }
        $query = new CommonCataloguesQuery();
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
     * @return   CommonCatalogues|CommonCatalogues[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCataloguesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCataloguesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCatalogues A model object, or null if the key is not found
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
     * @return                 CommonCatalogues A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `date_expiration`, `id_entreprise`, `actif` FROM `catalogues` WHERE `id` = :p0';
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
            $obj = new CommonCatalogues();
            $obj->hydrate($row);
            CommonCataloguesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCatalogues|CommonCatalogues[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCatalogues[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCataloguesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCataloguesPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCataloguesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCataloguesPeer::ID, $keys, Criteria::IN);
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
     * @return CommonCataloguesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCataloguesPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCataloguesPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCataloguesPeer::ID, $id, $comparison);
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
     * @return CommonCataloguesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCataloguesPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the date_expiration column
     *
     * Example usage:
     * <code>
     * $query->filterByDateExpiration('2011-03-14'); // WHERE date_expiration = '2011-03-14'
     * $query->filterByDateExpiration('now'); // WHERE date_expiration = '2011-03-14'
     * $query->filterByDateExpiration(array('max' => 'yesterday')); // WHERE date_expiration > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateExpiration The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCataloguesQuery The current query, for fluid interface
     */
    public function filterByDateExpiration($dateExpiration = null, $comparison = null)
    {
        if (is_array($dateExpiration)) {
            $useMinMax = false;
            if (isset($dateExpiration['min'])) {
                $this->addUsingAlias(CommonCataloguesPeer::DATE_EXPIRATION, $dateExpiration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateExpiration['max'])) {
                $this->addUsingAlias(CommonCataloguesPeer::DATE_EXPIRATION, $dateExpiration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCataloguesPeer::DATE_EXPIRATION, $dateExpiration, $comparison);
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
     * @return CommonCataloguesQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonCataloguesPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonCataloguesPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCataloguesPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(true); // WHERE actif = true
     * $query->filterByActif('yes'); // WHERE actif = true
     * </code>
     *
     * @param     boolean|string $actif The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCataloguesQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonCataloguesPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCatalogues $commonCatalogues Object to remove from the list of results
     *
     * @return CommonCataloguesQuery The current query, for fluid interface
     */
    public function prune($commonCatalogues = null)
    {
        if ($commonCatalogues) {
            $this->addUsingAlias(CommonCataloguesPeer::ID, $commonCatalogues->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
