<?php


/**
 * Base class that represents a query for the 'CG76_Domaine' table.
 *
 * 
 *
 * @method CommonCG76DomaineQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method CommonCG76DomaineQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonCG76DomaineQuery orderByParent($order = Criteria::ASC) Order by the Parent column
 *
 * @method CommonCG76DomaineQuery groupById() Group by the Id column
 * @method CommonCG76DomaineQuery groupByLibelle() Group by the libelle column
 * @method CommonCG76DomaineQuery groupByParent() Group by the Parent column
 *
 * @method CommonCG76DomaineQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCG76DomaineQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCG76DomaineQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCG76Domaine findOne(PropelPDO $con = null) Return the first CommonCG76Domaine matching the query
 * @method CommonCG76Domaine findOneOrCreate(PropelPDO $con = null) Return the first CommonCG76Domaine matching the query, or a new CommonCG76Domaine object populated from the query conditions when no match is found
 *
 * @method CommonCG76Domaine findOneByLibelle(string $libelle) Return the first CommonCG76Domaine filtered by the libelle column
 * @method CommonCG76Domaine findOneByParent(int $Parent) Return the first CommonCG76Domaine filtered by the Parent column
 *
 * @method array findById(int $Id) Return CommonCG76Domaine objects filtered by the Id column
 * @method array findByLibelle(string $libelle) Return CommonCG76Domaine objects filtered by the libelle column
 * @method array findByParent(int $Parent) Return CommonCG76Domaine objects filtered by the Parent column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCG76DomaineQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCG76DomaineQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCG76Domaine', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCG76DomaineQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCG76DomaineQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCG76DomaineQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCG76DomaineQuery) {
            return $criteria;
        }
        $query = new CommonCG76DomaineQuery();
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
     * @return   CommonCG76Domaine|CommonCG76Domaine[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCG76DomainePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCG76DomainePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCG76Domaine A model object, or null if the key is not found
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
     * @return                 CommonCG76Domaine A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Id`, `libelle`, `Parent` FROM `CG76_Domaine` WHERE `Id` = :p0';
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
            $obj = new CommonCG76Domaine();
            $obj->hydrate($row);
            CommonCG76DomainePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCG76Domaine|CommonCG76Domaine[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCG76Domaine[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCG76DomaineQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCG76DomainePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCG76DomaineQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCG76DomainePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE Id = 1234
     * $query->filterById(array(12, 34)); // WHERE Id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE Id >= 12
     * $query->filterById(array('max' => 12)); // WHERE Id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DomaineQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCG76DomainePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCG76DomainePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DomainePeer::ID, $id, $comparison);
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
     * @return CommonCG76DomaineQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCG76DomainePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the Parent column
     *
     * Example usage:
     * <code>
     * $query->filterByParent(1234); // WHERE Parent = 1234
     * $query->filterByParent(array(12, 34)); // WHERE Parent IN (12, 34)
     * $query->filterByParent(array('min' => 12)); // WHERE Parent >= 12
     * $query->filterByParent(array('max' => 12)); // WHERE Parent <= 12
     * </code>
     *
     * @param     mixed $parent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DomaineQuery The current query, for fluid interface
     */
    public function filterByParent($parent = null, $comparison = null)
    {
        if (is_array($parent)) {
            $useMinMax = false;
            if (isset($parent['min'])) {
                $this->addUsingAlias(CommonCG76DomainePeer::PARENT, $parent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($parent['max'])) {
                $this->addUsingAlias(CommonCG76DomainePeer::PARENT, $parent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DomainePeer::PARENT, $parent, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCG76Domaine $commonCG76Domaine Object to remove from the list of results
     *
     * @return CommonCG76DomaineQuery The current query, for fluid interface
     */
    public function prune($commonCG76Domaine = null)
    {
        if ($commonCG76Domaine) {
            $this->addUsingAlias(CommonCG76DomainePeer::ID, $commonCG76Domaine->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
