<?php


/**
 * Base class that represents a query for the 't_type_theme' table.
 *
 * 
 *
 * @method TTypeThemeQuery orderByIdTypeTheme($order = Criteria::ASC) Order by the ID_TYPE_THEME column
 * @method TTypeThemeQuery orderByLibelleFr($order = Criteria::ASC) Order by the LIBELLE_FR column
 * @method TTypeThemeQuery orderByLibelleAr($order = Criteria::ASC) Order by the LIBELLE_AR column
 *
 * @method TTypeThemeQuery groupByIdTypeTheme() Group by the ID_TYPE_THEME column
 * @method TTypeThemeQuery groupByLibelleFr() Group by the LIBELLE_FR column
 * @method TTypeThemeQuery groupByLibelleAr() Group by the LIBELLE_AR column
 *
 * @method TTypeThemeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TTypeThemeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TTypeThemeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TTypeTheme findOne(PropelPDO $con = null) Return the first TTypeTheme matching the query
 * @method TTypeTheme findOneOrCreate(PropelPDO $con = null) Return the first TTypeTheme matching the query, or a new TTypeTheme object populated from the query conditions when no match is found
 *
 * @method TTypeTheme findOneByLibelleFr(string $LIBELLE_FR) Return the first TTypeTheme filtered by the LIBELLE_FR column
 * @method TTypeTheme findOneByLibelleAr(string $LIBELLE_AR) Return the first TTypeTheme filtered by the LIBELLE_AR column
 *
 * @method array findByIdTypeTheme(int $ID_TYPE_THEME) Return TTypeTheme objects filtered by the ID_TYPE_THEME column
 * @method array findByLibelleFr(string $LIBELLE_FR) Return TTypeTheme objects filtered by the LIBELLE_FR column
 * @method array findByLibelleAr(string $LIBELLE_AR) Return TTypeTheme objects filtered by the LIBELLE_AR column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTTypeThemeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTTypeThemeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TTypeTheme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TTypeThemeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TTypeThemeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TTypeThemeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TTypeThemeQuery) {
            return $criteria;
        }
        $query = new TTypeThemeQuery();
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
     * @return   TTypeTheme|TTypeTheme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TTypeThemePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TTypeThemePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TTypeTheme A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTypeTheme($key, $con = null)
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
     * @return                 TTypeTheme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TYPE_THEME`, `LIBELLE_FR`, `LIBELLE_AR` FROM `t_type_theme` WHERE `ID_TYPE_THEME` = :p0';
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
            $obj = new TTypeTheme();
            $obj->hydrate($row);
            TTypeThemePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TTypeTheme|TTypeTheme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TTypeTheme[]|mixed the list of results, formatted by the current formatter
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
     * @return TTypeThemeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TTypeThemePeer::ID_TYPE_THEME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TTypeThemeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TTypeThemePeer::ID_TYPE_THEME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_TYPE_THEME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeTheme(1234); // WHERE ID_TYPE_THEME = 1234
     * $query->filterByIdTypeTheme(array(12, 34)); // WHERE ID_TYPE_THEME IN (12, 34)
     * $query->filterByIdTypeTheme(array('min' => 12)); // WHERE ID_TYPE_THEME >= 12
     * $query->filterByIdTypeTheme(array('max' => 12)); // WHERE ID_TYPE_THEME <= 12
     * </code>
     *
     * @param     mixed $idTypeTheme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTypeThemeQuery The current query, for fluid interface
     */
    public function filterByIdTypeTheme($idTypeTheme = null, $comparison = null)
    {
        if (is_array($idTypeTheme)) {
            $useMinMax = false;
            if (isset($idTypeTheme['min'])) {
                $this->addUsingAlias(TTypeThemePeer::ID_TYPE_THEME, $idTypeTheme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeTheme['max'])) {
                $this->addUsingAlias(TTypeThemePeer::ID_TYPE_THEME, $idTypeTheme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TTypeThemePeer::ID_TYPE_THEME, $idTypeTheme, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFr('fooValue');   // WHERE LIBELLE_FR = 'fooValue'
     * $query->filterByLibelleFr('%fooValue%'); // WHERE LIBELLE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTypeThemeQuery The current query, for fluid interface
     */
    public function filterByLibelleFr($libelleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFr)) {
                $libelleFr = str_replace('*', '%', $libelleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TTypeThemePeer::LIBELLE_FR, $libelleFr, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAr('fooValue');   // WHERE LIBELLE_AR = 'fooValue'
     * $query->filterByLibelleAr('%fooValue%'); // WHERE LIBELLE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTypeThemeQuery The current query, for fluid interface
     */
    public function filterByLibelleAr($libelleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAr)) {
                $libelleAr = str_replace('*', '%', $libelleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TTypeThemePeer::LIBELLE_AR, $libelleAr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TTypeTheme $tTypeTheme Object to remove from the list of results
     *
     * @return TTypeThemeQuery The current query, for fluid interface
     */
    public function prune($tTypeTheme = null)
    {
        if ($tTypeTheme) {
            $this->addUsingAlias(TTypeThemePeer::ID_TYPE_THEME, $tTypeTheme->getIdTypeTheme(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
