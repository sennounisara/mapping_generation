<?php


/**
 * Base class that represents a query for the 't_version' table.
 *
 * 
 *
 * @method TVersionQuery orderByIdVersion($order = Criteria::ASC) Order by the ID_VERSION column
 * @method TVersionQuery orderByLibelle($order = Criteria::ASC) Order by the LIBELLE column
 * @method TVersionQuery orderByDescriptionFr($order = Criteria::ASC) Order by the DESCRIPTION_FR column
 * @method TVersionQuery orderByDescriptionAr($order = Criteria::ASC) Order by the DESCRIPTION_AR column
 * @method TVersionQuery orderByStatut($order = Criteria::ASC) Order by the STATUT column
 * @method TVersionQuery orderByDateVersion($order = Criteria::ASC) Order by the DATE_VERSION column
 *
 * @method TVersionQuery groupByIdVersion() Group by the ID_VERSION column
 * @method TVersionQuery groupByLibelle() Group by the LIBELLE column
 * @method TVersionQuery groupByDescriptionFr() Group by the DESCRIPTION_FR column
 * @method TVersionQuery groupByDescriptionAr() Group by the DESCRIPTION_AR column
 * @method TVersionQuery groupByStatut() Group by the STATUT column
 * @method TVersionQuery groupByDateVersion() Group by the DATE_VERSION column
 *
 * @method TVersionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TVersionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TVersionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TVersion findOne(PropelPDO $con = null) Return the first TVersion matching the query
 * @method TVersion findOneOrCreate(PropelPDO $con = null) Return the first TVersion matching the query, or a new TVersion object populated from the query conditions when no match is found
 *
 * @method TVersion findOneByLibelle(string $LIBELLE) Return the first TVersion filtered by the LIBELLE column
 * @method TVersion findOneByDescriptionFr(string $DESCRIPTION_FR) Return the first TVersion filtered by the DESCRIPTION_FR column
 * @method TVersion findOneByDescriptionAr(string $DESCRIPTION_AR) Return the first TVersion filtered by the DESCRIPTION_AR column
 * @method TVersion findOneByStatut(string $STATUT) Return the first TVersion filtered by the STATUT column
 * @method TVersion findOneByDateVersion(string $DATE_VERSION) Return the first TVersion filtered by the DATE_VERSION column
 *
 * @method array findByIdVersion(int $ID_VERSION) Return TVersion objects filtered by the ID_VERSION column
 * @method array findByLibelle(string $LIBELLE) Return TVersion objects filtered by the LIBELLE column
 * @method array findByDescriptionFr(string $DESCRIPTION_FR) Return TVersion objects filtered by the DESCRIPTION_FR column
 * @method array findByDescriptionAr(string $DESCRIPTION_AR) Return TVersion objects filtered by the DESCRIPTION_AR column
 * @method array findByStatut(string $STATUT) Return TVersion objects filtered by the STATUT column
 * @method array findByDateVersion(string $DATE_VERSION) Return TVersion objects filtered by the DATE_VERSION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTVersionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTVersionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TVersion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TVersionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TVersionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TVersionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TVersionQuery) {
            return $criteria;
        }
        $query = new TVersionQuery();
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
     * @return   TVersion|TVersion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TVersionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TVersionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TVersion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdVersion($key, $con = null)
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
     * @return                 TVersion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_VERSION`, `LIBELLE`, `DESCRIPTION_FR`, `DESCRIPTION_AR`, `STATUT`, `DATE_VERSION` FROM `t_version` WHERE `ID_VERSION` = :p0';
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
            $obj = new TVersion();
            $obj->hydrate($row);
            TVersionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TVersion|TVersion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TVersion[]|mixed the list of results, formatted by the current formatter
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
     * @return TVersionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TVersionPeer::ID_VERSION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TVersionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TVersionPeer::ID_VERSION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_VERSION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdVersion(1234); // WHERE ID_VERSION = 1234
     * $query->filterByIdVersion(array(12, 34)); // WHERE ID_VERSION IN (12, 34)
     * $query->filterByIdVersion(array('min' => 12)); // WHERE ID_VERSION >= 12
     * $query->filterByIdVersion(array('max' => 12)); // WHERE ID_VERSION <= 12
     * </code>
     *
     * @param     mixed $idVersion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TVersionQuery The current query, for fluid interface
     */
    public function filterByIdVersion($idVersion = null, $comparison = null)
    {
        if (is_array($idVersion)) {
            $useMinMax = false;
            if (isset($idVersion['min'])) {
                $this->addUsingAlias(TVersionPeer::ID_VERSION, $idVersion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVersion['max'])) {
                $this->addUsingAlias(TVersionPeer::ID_VERSION, $idVersion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TVersionPeer::ID_VERSION, $idVersion, $comparison);
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
     * @return TVersionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TVersionPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the DESCRIPTION_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionFr('fooValue');   // WHERE DESCRIPTION_FR = 'fooValue'
     * $query->filterByDescriptionFr('%fooValue%'); // WHERE DESCRIPTION_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TVersionQuery The current query, for fluid interface
     */
    public function filterByDescriptionFr($descriptionFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionFr)) {
                $descriptionFr = str_replace('*', '%', $descriptionFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TVersionPeer::DESCRIPTION_FR, $descriptionFr, $comparison);
    }

    /**
     * Filter the query on the DESCRIPTION_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionAr('fooValue');   // WHERE DESCRIPTION_AR = 'fooValue'
     * $query->filterByDescriptionAr('%fooValue%'); // WHERE DESCRIPTION_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TVersionQuery The current query, for fluid interface
     */
    public function filterByDescriptionAr($descriptionAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionAr)) {
                $descriptionAr = str_replace('*', '%', $descriptionAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TVersionPeer::DESCRIPTION_AR, $descriptionAr, $comparison);
    }

    /**
     * Filter the query on the STATUT column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE STATUT = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE STATUT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TVersionQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut)) {
                $statut = str_replace('*', '%', $statut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TVersionPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the DATE_VERSION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateVersion('2011-03-14'); // WHERE DATE_VERSION = '2011-03-14'
     * $query->filterByDateVersion('now'); // WHERE DATE_VERSION = '2011-03-14'
     * $query->filterByDateVersion(array('max' => 'yesterday')); // WHERE DATE_VERSION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateVersion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TVersionQuery The current query, for fluid interface
     */
    public function filterByDateVersion($dateVersion = null, $comparison = null)
    {
        if (is_array($dateVersion)) {
            $useMinMax = false;
            if (isset($dateVersion['min'])) {
                $this->addUsingAlias(TVersionPeer::DATE_VERSION, $dateVersion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateVersion['max'])) {
                $this->addUsingAlias(TVersionPeer::DATE_VERSION, $dateVersion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TVersionPeer::DATE_VERSION, $dateVersion, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TVersion $tVersion Object to remove from the list of results
     *
     * @return TVersionQuery The current query, for fluid interface
     */
    public function prune($tVersion = null)
    {
        if ($tVersion) {
            $this->addUsingAlias(TVersionPeer::ID_VERSION, $tVersion->getIdVersion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
