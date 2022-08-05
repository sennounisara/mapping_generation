<?php


/**
 * Base class that represents a query for the 'pf_mots_cles' table.
 *
 * 
 *
 * @method PfMotsClesQuery orderByIdMotsCles($order = Criteria::ASC) Order by the ID_MOTS_CLES column
 * @method PfMotsClesQuery orderByLibelle($order = Criteria::ASC) Order by the LIBELLE column
 * @method PfMotsClesQuery orderByOccurence($order = Criteria::ASC) Order by the OCCURENCE column
 * @method PfMotsClesQuery orderByTraite($order = Criteria::ASC) Order by the TRAITE column
 *
 * @method PfMotsClesQuery groupByIdMotsCles() Group by the ID_MOTS_CLES column
 * @method PfMotsClesQuery groupByLibelle() Group by the LIBELLE column
 * @method PfMotsClesQuery groupByOccurence() Group by the OCCURENCE column
 * @method PfMotsClesQuery groupByTraite() Group by the TRAITE column
 *
 * @method PfMotsClesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfMotsClesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfMotsClesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfMotsCles findOne(PropelPDO $con = null) Return the first PfMotsCles matching the query
 * @method PfMotsCles findOneOrCreate(PropelPDO $con = null) Return the first PfMotsCles matching the query, or a new PfMotsCles object populated from the query conditions when no match is found
 *
 * @method PfMotsCles findOneByLibelle(string $LIBELLE) Return the first PfMotsCles filtered by the LIBELLE column
 * @method PfMotsCles findOneByOccurence(int $OCCURENCE) Return the first PfMotsCles filtered by the OCCURENCE column
 * @method PfMotsCles findOneByTraite(string $TRAITE) Return the first PfMotsCles filtered by the TRAITE column
 *
 * @method array findByIdMotsCles(int $ID_MOTS_CLES) Return PfMotsCles objects filtered by the ID_MOTS_CLES column
 * @method array findByLibelle(string $LIBELLE) Return PfMotsCles objects filtered by the LIBELLE column
 * @method array findByOccurence(int $OCCURENCE) Return PfMotsCles objects filtered by the OCCURENCE column
 * @method array findByTraite(string $TRAITE) Return PfMotsCles objects filtered by the TRAITE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfMotsClesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfMotsClesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PfMotsCles', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfMotsClesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfMotsClesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfMotsClesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfMotsClesQuery) {
            return $criteria;
        }
        $query = new PfMotsClesQuery();
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
     * @return   PfMotsCles|PfMotsCles[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfMotsClesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfMotsClesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfMotsCles A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdMotsCles($key, $con = null)
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
     * @return                 PfMotsCles A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_MOTS_CLES`, `LIBELLE`, `OCCURENCE`, `TRAITE` FROM `pf_mots_cles` WHERE `ID_MOTS_CLES` = :p0';
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
            $obj = new PfMotsCles();
            $obj->hydrate($row);
            PfMotsClesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfMotsCles|PfMotsCles[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfMotsCles[]|mixed the list of results, formatted by the current formatter
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
     * @return PfMotsClesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfMotsClesPeer::ID_MOTS_CLES, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfMotsClesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfMotsClesPeer::ID_MOTS_CLES, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_MOTS_CLES column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMotsCles(1234); // WHERE ID_MOTS_CLES = 1234
     * $query->filterByIdMotsCles(array(12, 34)); // WHERE ID_MOTS_CLES IN (12, 34)
     * $query->filterByIdMotsCles(array('min' => 12)); // WHERE ID_MOTS_CLES >= 12
     * $query->filterByIdMotsCles(array('max' => 12)); // WHERE ID_MOTS_CLES <= 12
     * </code>
     *
     * @param     mixed $idMotsCles The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfMotsClesQuery The current query, for fluid interface
     */
    public function filterByIdMotsCles($idMotsCles = null, $comparison = null)
    {
        if (is_array($idMotsCles)) {
            $useMinMax = false;
            if (isset($idMotsCles['min'])) {
                $this->addUsingAlias(PfMotsClesPeer::ID_MOTS_CLES, $idMotsCles['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMotsCles['max'])) {
                $this->addUsingAlias(PfMotsClesPeer::ID_MOTS_CLES, $idMotsCles['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfMotsClesPeer::ID_MOTS_CLES, $idMotsCles, $comparison);
    }

    /**
     * Filter the query on the LIBELLE column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE LIBELLE = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE LIBELLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfMotsClesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PfMotsClesPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the OCCURENCE column
     *
     * Example usage:
     * <code>
     * $query->filterByOccurence(1234); // WHERE OCCURENCE = 1234
     * $query->filterByOccurence(array(12, 34)); // WHERE OCCURENCE IN (12, 34)
     * $query->filterByOccurence(array('min' => 12)); // WHERE OCCURENCE >= 12
     * $query->filterByOccurence(array('max' => 12)); // WHERE OCCURENCE <= 12
     * </code>
     *
     * @param     mixed $occurence The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfMotsClesQuery The current query, for fluid interface
     */
    public function filterByOccurence($occurence = null, $comparison = null)
    {
        if (is_array($occurence)) {
            $useMinMax = false;
            if (isset($occurence['min'])) {
                $this->addUsingAlias(PfMotsClesPeer::OCCURENCE, $occurence['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($occurence['max'])) {
                $this->addUsingAlias(PfMotsClesPeer::OCCURENCE, $occurence['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfMotsClesPeer::OCCURENCE, $occurence, $comparison);
    }

    /**
     * Filter the query on the TRAITE column
     *
     * Example usage:
     * <code>
     * $query->filterByTraite('fooValue');   // WHERE TRAITE = 'fooValue'
     * $query->filterByTraite('%fooValue%'); // WHERE TRAITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $traite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfMotsClesQuery The current query, for fluid interface
     */
    public function filterByTraite($traite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($traite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $traite)) {
                $traite = str_replace('*', '%', $traite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfMotsClesPeer::TRAITE, $traite, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfMotsCles $pfMotsCles Object to remove from the list of results
     *
     * @return PfMotsClesQuery The current query, for fluid interface
     */
    public function prune($pfMotsCles = null)
    {
        if ($pfMotsCles) {
            $this->addUsingAlias(PfMotsClesPeer::ID_MOTS_CLES, $pfMotsCles->getIdMotsCles(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
