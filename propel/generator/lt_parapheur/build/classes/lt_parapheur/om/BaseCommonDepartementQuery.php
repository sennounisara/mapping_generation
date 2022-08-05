<?php


/**
 * Base class that represents a query for the 'Departement' table.
 *
 * 
 *
 * @method CommonDepartementQuery orderByIdDepartement($order = Criteria::ASC) Order by the id_departement column
 * @method CommonDepartementQuery orderByNomDepartement($order = Criteria::ASC) Order by the nom_departement column
 *
 * @method CommonDepartementQuery groupByIdDepartement() Group by the id_departement column
 * @method CommonDepartementQuery groupByNomDepartement() Group by the nom_departement column
 *
 * @method CommonDepartementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDepartementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDepartementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDepartement findOne(PropelPDO $con = null) Return the first CommonDepartement matching the query
 * @method CommonDepartement findOneOrCreate(PropelPDO $con = null) Return the first CommonDepartement matching the query, or a new CommonDepartement object populated from the query conditions when no match is found
 *
 * @method CommonDepartement findOneByNomDepartement(string $nom_departement) Return the first CommonDepartement filtered by the nom_departement column
 *
 * @method array findByIdDepartement(int $id_departement) Return CommonDepartement objects filtered by the id_departement column
 * @method array findByNomDepartement(string $nom_departement) Return CommonDepartement objects filtered by the nom_departement column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDepartementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDepartementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDepartement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDepartementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDepartementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDepartementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDepartementQuery) {
            return $criteria;
        }
        $query = new CommonDepartementQuery();
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
     * @return   CommonDepartement|CommonDepartement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDepartementPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDepartementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDepartement A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdDepartement($key, $con = null)
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
     * @return                 CommonDepartement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_departement`, `nom_departement` FROM `Departement` WHERE `id_departement` = :p0';
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
            $obj = new CommonDepartement();
            $obj->hydrate($row);
            CommonDepartementPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonDepartement|CommonDepartement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDepartement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDepartementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonDepartementPeer::ID_DEPARTEMENT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDepartementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonDepartementPeer::ID_DEPARTEMENT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_departement column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDepartement(1234); // WHERE id_departement = 1234
     * $query->filterByIdDepartement(array(12, 34)); // WHERE id_departement IN (12, 34)
     * $query->filterByIdDepartement(array('min' => 12)); // WHERE id_departement >= 12
     * $query->filterByIdDepartement(array('max' => 12)); // WHERE id_departement <= 12
     * </code>
     *
     * @param     mixed $idDepartement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDepartementQuery The current query, for fluid interface
     */
    public function filterByIdDepartement($idDepartement = null, $comparison = null)
    {
        if (is_array($idDepartement)) {
            $useMinMax = false;
            if (isset($idDepartement['min'])) {
                $this->addUsingAlias(CommonDepartementPeer::ID_DEPARTEMENT, $idDepartement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDepartement['max'])) {
                $this->addUsingAlias(CommonDepartementPeer::ID_DEPARTEMENT, $idDepartement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDepartementPeer::ID_DEPARTEMENT, $idDepartement, $comparison);
    }

    /**
     * Filter the query on the nom_departement column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDepartement('fooValue');   // WHERE nom_departement = 'fooValue'
     * $query->filterByNomDepartement('%fooValue%'); // WHERE nom_departement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDepartement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDepartementQuery The current query, for fluid interface
     */
    public function filterByNomDepartement($nomDepartement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDepartement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDepartement)) {
                $nomDepartement = str_replace('*', '%', $nomDepartement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDepartementPeer::NOM_DEPARTEMENT, $nomDepartement, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDepartement $commonDepartement Object to remove from the list of results
     *
     * @return CommonDepartementQuery The current query, for fluid interface
     */
    public function prune($commonDepartement = null)
    {
        if ($commonDepartement) {
            $this->addUsingAlias(CommonDepartementPeer::ID_DEPARTEMENT, $commonDepartement->getIdDepartement(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
