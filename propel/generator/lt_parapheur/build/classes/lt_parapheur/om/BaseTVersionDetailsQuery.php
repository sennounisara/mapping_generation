<?php


/**
 * Base class that represents a query for the 't_version_details' table.
 *
 * 
 *
 * @method TVersionDetailsQuery orderByIdVersionDetail($order = Criteria::ASC) Order by the ID_VERSION_DETAIL column
 * @method TVersionDetailsQuery orderByIdVersion($order = Criteria::ASC) Order by the ID_VERSION column
 * @method TVersionDetailsQuery orderByTitreFr($order = Criteria::ASC) Order by the TITRE_FR column
 * @method TVersionDetailsQuery orderByTitreAr($order = Criteria::ASC) Order by the TITRE_AR column
 * @method TVersionDetailsQuery orderByDescriptionFr($order = Criteria::ASC) Order by the DESCRIPTION_FR column
 * @method TVersionDetailsQuery orderByDescriptionAr($order = Criteria::ASC) Order by the DESCRIPTION_AR column
 *
 * @method TVersionDetailsQuery groupByIdVersionDetail() Group by the ID_VERSION_DETAIL column
 * @method TVersionDetailsQuery groupByIdVersion() Group by the ID_VERSION column
 * @method TVersionDetailsQuery groupByTitreFr() Group by the TITRE_FR column
 * @method TVersionDetailsQuery groupByTitreAr() Group by the TITRE_AR column
 * @method TVersionDetailsQuery groupByDescriptionFr() Group by the DESCRIPTION_FR column
 * @method TVersionDetailsQuery groupByDescriptionAr() Group by the DESCRIPTION_AR column
 *
 * @method TVersionDetailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TVersionDetailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TVersionDetailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TVersionDetails findOne(PropelPDO $con = null) Return the first TVersionDetails matching the query
 * @method TVersionDetails findOneOrCreate(PropelPDO $con = null) Return the first TVersionDetails matching the query, or a new TVersionDetails object populated from the query conditions when no match is found
 *
 * @method TVersionDetails findOneByIdVersion(int $ID_VERSION) Return the first TVersionDetails filtered by the ID_VERSION column
 * @method TVersionDetails findOneByTitreFr(string $TITRE_FR) Return the first TVersionDetails filtered by the TITRE_FR column
 * @method TVersionDetails findOneByTitreAr(string $TITRE_AR) Return the first TVersionDetails filtered by the TITRE_AR column
 * @method TVersionDetails findOneByDescriptionFr(string $DESCRIPTION_FR) Return the first TVersionDetails filtered by the DESCRIPTION_FR column
 * @method TVersionDetails findOneByDescriptionAr(string $DESCRIPTION_AR) Return the first TVersionDetails filtered by the DESCRIPTION_AR column
 *
 * @method array findByIdVersionDetail(int $ID_VERSION_DETAIL) Return TVersionDetails objects filtered by the ID_VERSION_DETAIL column
 * @method array findByIdVersion(int $ID_VERSION) Return TVersionDetails objects filtered by the ID_VERSION column
 * @method array findByTitreFr(string $TITRE_FR) Return TVersionDetails objects filtered by the TITRE_FR column
 * @method array findByTitreAr(string $TITRE_AR) Return TVersionDetails objects filtered by the TITRE_AR column
 * @method array findByDescriptionFr(string $DESCRIPTION_FR) Return TVersionDetails objects filtered by the DESCRIPTION_FR column
 * @method array findByDescriptionAr(string $DESCRIPTION_AR) Return TVersionDetails objects filtered by the DESCRIPTION_AR column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTVersionDetailsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTVersionDetailsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TVersionDetails', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TVersionDetailsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TVersionDetailsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TVersionDetailsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TVersionDetailsQuery) {
            return $criteria;
        }
        $query = new TVersionDetailsQuery();
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
     * @return   TVersionDetails|TVersionDetails[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TVersionDetailsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TVersionDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TVersionDetails A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdVersionDetail($key, $con = null)
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
     * @return                 TVersionDetails A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_VERSION_DETAIL`, `ID_VERSION`, `TITRE_FR`, `TITRE_AR`, `DESCRIPTION_FR`, `DESCRIPTION_AR` FROM `t_version_details` WHERE `ID_VERSION_DETAIL` = :p0';
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
            $obj = new TVersionDetails();
            $obj->hydrate($row);
            TVersionDetailsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TVersionDetails|TVersionDetails[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TVersionDetails[]|mixed the list of results, formatted by the current formatter
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
     * @return TVersionDetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TVersionDetailsPeer::ID_VERSION_DETAIL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TVersionDetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TVersionDetailsPeer::ID_VERSION_DETAIL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_VERSION_DETAIL column
     *
     * Example usage:
     * <code>
     * $query->filterByIdVersionDetail(1234); // WHERE ID_VERSION_DETAIL = 1234
     * $query->filterByIdVersionDetail(array(12, 34)); // WHERE ID_VERSION_DETAIL IN (12, 34)
     * $query->filterByIdVersionDetail(array('min' => 12)); // WHERE ID_VERSION_DETAIL >= 12
     * $query->filterByIdVersionDetail(array('max' => 12)); // WHERE ID_VERSION_DETAIL <= 12
     * </code>
     *
     * @param     mixed $idVersionDetail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TVersionDetailsQuery The current query, for fluid interface
     */
    public function filterByIdVersionDetail($idVersionDetail = null, $comparison = null)
    {
        if (is_array($idVersionDetail)) {
            $useMinMax = false;
            if (isset($idVersionDetail['min'])) {
                $this->addUsingAlias(TVersionDetailsPeer::ID_VERSION_DETAIL, $idVersionDetail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVersionDetail['max'])) {
                $this->addUsingAlias(TVersionDetailsPeer::ID_VERSION_DETAIL, $idVersionDetail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TVersionDetailsPeer::ID_VERSION_DETAIL, $idVersionDetail, $comparison);
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
     * @return TVersionDetailsQuery The current query, for fluid interface
     */
    public function filterByIdVersion($idVersion = null, $comparison = null)
    {
        if (is_array($idVersion)) {
            $useMinMax = false;
            if (isset($idVersion['min'])) {
                $this->addUsingAlias(TVersionDetailsPeer::ID_VERSION, $idVersion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVersion['max'])) {
                $this->addUsingAlias(TVersionDetailsPeer::ID_VERSION, $idVersion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TVersionDetailsPeer::ID_VERSION, $idVersion, $comparison);
    }

    /**
     * Filter the query on the TITRE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByTitreFr('fooValue');   // WHERE TITRE_FR = 'fooValue'
     * $query->filterByTitreFr('%fooValue%'); // WHERE TITRE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titreFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TVersionDetailsQuery The current query, for fluid interface
     */
    public function filterByTitreFr($titreFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titreFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titreFr)) {
                $titreFr = str_replace('*', '%', $titreFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TVersionDetailsPeer::TITRE_FR, $titreFr, $comparison);
    }

    /**
     * Filter the query on the TITRE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByTitreAr('fooValue');   // WHERE TITRE_AR = 'fooValue'
     * $query->filterByTitreAr('%fooValue%'); // WHERE TITRE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titreAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TVersionDetailsQuery The current query, for fluid interface
     */
    public function filterByTitreAr($titreAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titreAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titreAr)) {
                $titreAr = str_replace('*', '%', $titreAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TVersionDetailsPeer::TITRE_AR, $titreAr, $comparison);
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
     * @return TVersionDetailsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TVersionDetailsPeer::DESCRIPTION_FR, $descriptionFr, $comparison);
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
     * @return TVersionDetailsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TVersionDetailsPeer::DESCRIPTION_AR, $descriptionAr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TVersionDetails $tVersionDetails Object to remove from the list of results
     *
     * @return TVersionDetailsQuery The current query, for fluid interface
     */
    public function prune($tVersionDetails = null)
    {
        if ($tVersionDetails) {
            $this->addUsingAlias(TVersionDetailsPeer::ID_VERSION_DETAIL, $tVersionDetails->getIdVersionDetail(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
