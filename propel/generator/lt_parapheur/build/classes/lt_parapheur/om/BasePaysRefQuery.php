<?php


/**
 * Base class that represents a query for the 'pays_ref' table.
 *
 * 
 *
 * @method PaysRefQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method PaysRefQuery orderByNomPaysFr($order = Criteria::ASC) Order by the NOM_PAYS_FR column
 * @method PaysRefQuery orderByNomPaysAr($order = Criteria::ASC) Order by the NOM_PAYS_AR column
 *
 * @method PaysRefQuery groupById() Group by the ID column
 * @method PaysRefQuery groupByNomPaysFr() Group by the NOM_PAYS_FR column
 * @method PaysRefQuery groupByNomPaysAr() Group by the NOM_PAYS_AR column
 *
 * @method PaysRefQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PaysRefQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PaysRefQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PaysRef findOne(PropelPDO $con = null) Return the first PaysRef matching the query
 * @method PaysRef findOneOrCreate(PropelPDO $con = null) Return the first PaysRef matching the query, or a new PaysRef object populated from the query conditions when no match is found
 *
 * @method PaysRef findOneByNomPaysFr(string $NOM_PAYS_FR) Return the first PaysRef filtered by the NOM_PAYS_FR column
 * @method PaysRef findOneByNomPaysAr(string $NOM_PAYS_AR) Return the first PaysRef filtered by the NOM_PAYS_AR column
 *
 * @method array findById(int $ID) Return PaysRef objects filtered by the ID column
 * @method array findByNomPaysFr(string $NOM_PAYS_FR) Return PaysRef objects filtered by the NOM_PAYS_FR column
 * @method array findByNomPaysAr(string $NOM_PAYS_AR) Return PaysRef objects filtered by the NOM_PAYS_AR column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePaysRefQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePaysRefQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PaysRef', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PaysRefQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PaysRefQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PaysRefQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PaysRefQuery) {
            return $criteria;
        }
        $query = new PaysRefQuery();
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
     * @return   PaysRef|PaysRef[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PaysRefPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PaysRefPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PaysRef A model object, or null if the key is not found
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
     * @return                 PaysRef A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOM_PAYS_FR`, `NOM_PAYS_AR` FROM `pays_ref` WHERE `ID` = :p0';
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
            $obj = new PaysRef();
            $obj->hydrate($row);
            PaysRefPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PaysRef|PaysRef[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PaysRef[]|mixed the list of results, formatted by the current formatter
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
     * @return PaysRefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PaysRefPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PaysRefQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PaysRefPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaysRefQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(PaysRefPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(PaysRefPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PaysRefPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the NOM_PAYS_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPaysFr('fooValue');   // WHERE NOM_PAYS_FR = 'fooValue'
     * $query->filterByNomPaysFr('%fooValue%'); // WHERE NOM_PAYS_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPaysFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaysRefQuery The current query, for fluid interface
     */
    public function filterByNomPaysFr($nomPaysFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomPaysFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomPaysFr)) {
                $nomPaysFr = str_replace('*', '%', $nomPaysFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PaysRefPeer::NOM_PAYS_FR, $nomPaysFr, $comparison);
    }

    /**
     * Filter the query on the NOM_PAYS_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPaysAr('fooValue');   // WHERE NOM_PAYS_AR = 'fooValue'
     * $query->filterByNomPaysAr('%fooValue%'); // WHERE NOM_PAYS_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPaysAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PaysRefQuery The current query, for fluid interface
     */
    public function filterByNomPaysAr($nomPaysAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomPaysAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomPaysAr)) {
                $nomPaysAr = str_replace('*', '%', $nomPaysAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PaysRefPeer::NOM_PAYS_AR, $nomPaysAr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PaysRef $paysRef Object to remove from the list of results
     *
     * @return PaysRefQuery The current query, for fluid interface
     */
    public function prune($paysRef = null)
    {
        if ($paysRef) {
            $this->addUsingAlias(PaysRefPeer::ID, $paysRef->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
