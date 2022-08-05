<?php


/**
 * Base class that represents a query for the 'exec_profil' table.
 *
 * 
 *
 * @method CommonExecProfilQuery orderByIdProfil($order = Criteria::ASC) Order by the id_profil column
 * @method CommonExecProfilQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 *
 * @method CommonExecProfilQuery groupByIdProfil() Group by the id_profil column
 * @method CommonExecProfilQuery groupByLibelle() Group by the libelle column
 *
 * @method CommonExecProfilQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecProfilQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecProfilQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecProfil findOne(PropelPDO $con = null) Return the first CommonExecProfil matching the query
 * @method CommonExecProfil findOneOrCreate(PropelPDO $con = null) Return the first CommonExecProfil matching the query, or a new CommonExecProfil object populated from the query conditions when no match is found
 *
 * @method CommonExecProfil findOneByLibelle(string $libelle) Return the first CommonExecProfil filtered by the libelle column
 *
 * @method array findByIdProfil(int $id_profil) Return CommonExecProfil objects filtered by the id_profil column
 * @method array findByLibelle(string $libelle) Return CommonExecProfil objects filtered by the libelle column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecProfilQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecProfilQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecProfil', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecProfilQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecProfilQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecProfilQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecProfilQuery) {
            return $criteria;
        }
        $query = new CommonExecProfilQuery();
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
     * @return   CommonExecProfil|CommonExecProfil[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecProfilPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecProfil A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdProfil($key, $con = null)
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
     * @return                 CommonExecProfil A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_profil`, `libelle` FROM `exec_profil` WHERE `id_profil` = :p0';
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
            $obj = new CommonExecProfil();
            $obj->hydrate($row);
            CommonExecProfilPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecProfil|CommonExecProfil[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecProfil[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecProfilQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecProfilPeer::ID_PROFIL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecProfilQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecProfilPeer::ID_PROFIL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_profil column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProfil(1234); // WHERE id_profil = 1234
     * $query->filterByIdProfil(array(12, 34)); // WHERE id_profil IN (12, 34)
     * $query->filterByIdProfil(array('min' => 12)); // WHERE id_profil >= 12
     * $query->filterByIdProfil(array('max' => 12)); // WHERE id_profil <= 12
     * </code>
     *
     * @param     mixed $idProfil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecProfilQuery The current query, for fluid interface
     */
    public function filterByIdProfil($idProfil = null, $comparison = null)
    {
        if (is_array($idProfil)) {
            $useMinMax = false;
            if (isset($idProfil['min'])) {
                $this->addUsingAlias(CommonExecProfilPeer::ID_PROFIL, $idProfil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProfil['max'])) {
                $this->addUsingAlias(CommonExecProfilPeer::ID_PROFIL, $idProfil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecProfilPeer::ID_PROFIL, $idProfil, $comparison);
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
     * @return CommonExecProfilQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecProfilPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecProfil $commonExecProfil Object to remove from the list of results
     *
     * @return CommonExecProfilQuery The current query, for fluid interface
     */
    public function prune($commonExecProfil = null)
    {
        if ($commonExecProfil) {
            $this->addUsingAlias(CommonExecProfilPeer::ID_PROFIL, $commonExecProfil->getIdProfil(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
