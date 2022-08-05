<?php


/**
 * Base class that represents a query for the 'pf_theme' table.
 *
 * 
 *
 * @method PfThemeQuery orderByIdTheme($order = Criteria::ASC) Order by the ID_THEME column
 * @method PfThemeQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 * @method PfThemeQuery orderByLibelleFr($order = Criteria::ASC) Order by the LIBELLE_FR column
 * @method PfThemeQuery orderByLibelleAr($order = Criteria::ASC) Order by the LIBELLE_AR column
 * @method PfThemeQuery orderByDateModification($order = Criteria::ASC) Order by the DATE_MODIFICATION column
 * @method PfThemeQuery orderByTypeTheme($order = Criteria::ASC) Order by the TYPE_THEME column
 *
 * @method PfThemeQuery groupByIdTheme() Group by the ID_THEME column
 * @method PfThemeQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 * @method PfThemeQuery groupByLibelleFr() Group by the LIBELLE_FR column
 * @method PfThemeQuery groupByLibelleAr() Group by the LIBELLE_AR column
 * @method PfThemeQuery groupByDateModification() Group by the DATE_MODIFICATION column
 * @method PfThemeQuery groupByTypeTheme() Group by the TYPE_THEME column
 *
 * @method PfThemeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfThemeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfThemeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfTheme findOne(PropelPDO $con = null) Return the first PfTheme matching the query
 * @method PfTheme findOneOrCreate(PropelPDO $con = null) Return the first PfTheme matching the query, or a new PfTheme object populated from the query conditions when no match is found
 *
 * @method PfTheme findOneByIdOrganisme(int $ID_ORGANISME) Return the first PfTheme filtered by the ID_ORGANISME column
 * @method PfTheme findOneByLibelleFr(string $LIBELLE_FR) Return the first PfTheme filtered by the LIBELLE_FR column
 * @method PfTheme findOneByLibelleAr(string $LIBELLE_AR) Return the first PfTheme filtered by the LIBELLE_AR column
 * @method PfTheme findOneByDateModification(string $DATE_MODIFICATION) Return the first PfTheme filtered by the DATE_MODIFICATION column
 * @method PfTheme findOneByTypeTheme(int $TYPE_THEME) Return the first PfTheme filtered by the TYPE_THEME column
 *
 * @method array findByIdTheme(int $ID_THEME) Return PfTheme objects filtered by the ID_THEME column
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return PfTheme objects filtered by the ID_ORGANISME column
 * @method array findByLibelleFr(string $LIBELLE_FR) Return PfTheme objects filtered by the LIBELLE_FR column
 * @method array findByLibelleAr(string $LIBELLE_AR) Return PfTheme objects filtered by the LIBELLE_AR column
 * @method array findByDateModification(string $DATE_MODIFICATION) Return PfTheme objects filtered by the DATE_MODIFICATION column
 * @method array findByTypeTheme(int $TYPE_THEME) Return PfTheme objects filtered by the TYPE_THEME column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfThemeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfThemeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PfTheme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfThemeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfThemeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfThemeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfThemeQuery) {
            return $criteria;
        }
        $query = new PfThemeQuery();
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
     * @return   PfTheme|PfTheme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfThemePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfThemePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfTheme A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTheme($key, $con = null)
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
     * @return                 PfTheme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_THEME`, `ID_ORGANISME`, `LIBELLE_FR`, `LIBELLE_AR`, `DATE_MODIFICATION`, `TYPE_THEME` FROM `pf_theme` WHERE `ID_THEME` = :p0';
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
            $obj = new PfTheme();
            $obj->hydrate($row);
            PfThemePeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfTheme|PfTheme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfTheme[]|mixed the list of results, formatted by the current formatter
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
     * @return PfThemeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfThemePeer::ID_THEME, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfThemeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfThemePeer::ID_THEME, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_THEME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTheme(1234); // WHERE ID_THEME = 1234
     * $query->filterByIdTheme(array(12, 34)); // WHERE ID_THEME IN (12, 34)
     * $query->filterByIdTheme(array('min' => 12)); // WHERE ID_THEME >= 12
     * $query->filterByIdTheme(array('max' => 12)); // WHERE ID_THEME <= 12
     * </code>
     *
     * @param     mixed $idTheme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfThemeQuery The current query, for fluid interface
     */
    public function filterByIdTheme($idTheme = null, $comparison = null)
    {
        if (is_array($idTheme)) {
            $useMinMax = false;
            if (isset($idTheme['min'])) {
                $this->addUsingAlias(PfThemePeer::ID_THEME, $idTheme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTheme['max'])) {
                $this->addUsingAlias(PfThemePeer::ID_THEME, $idTheme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfThemePeer::ID_THEME, $idTheme, $comparison);
    }

    /**
     * Filter the query on the ID_ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrganisme(1234); // WHERE ID_ORGANISME = 1234
     * $query->filterByIdOrganisme(array(12, 34)); // WHERE ID_ORGANISME IN (12, 34)
     * $query->filterByIdOrganisme(array('min' => 12)); // WHERE ID_ORGANISME >= 12
     * $query->filterByIdOrganisme(array('max' => 12)); // WHERE ID_ORGANISME <= 12
     * </code>
     *
     * @param     mixed $idOrganisme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfThemeQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(PfThemePeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(PfThemePeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfThemePeer::ID_ORGANISME, $idOrganisme, $comparison);
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
     * @return PfThemeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PfThemePeer::LIBELLE_FR, $libelleFr, $comparison);
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
     * @return PfThemeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PfThemePeer::LIBELLE_AR, $libelleAr, $comparison);
    }

    /**
     * Filter the query on the DATE_MODIFICATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('2011-03-14'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification('now'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification(array('max' => 'yesterday')); // WHERE DATE_MODIFICATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfThemeQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (is_array($dateModification)) {
            $useMinMax = false;
            if (isset($dateModification['min'])) {
                $this->addUsingAlias(PfThemePeer::DATE_MODIFICATION, $dateModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModification['max'])) {
                $this->addUsingAlias(PfThemePeer::DATE_MODIFICATION, $dateModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfThemePeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the TYPE_THEME column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeTheme(1234); // WHERE TYPE_THEME = 1234
     * $query->filterByTypeTheme(array(12, 34)); // WHERE TYPE_THEME IN (12, 34)
     * $query->filterByTypeTheme(array('min' => 12)); // WHERE TYPE_THEME >= 12
     * $query->filterByTypeTheme(array('max' => 12)); // WHERE TYPE_THEME <= 12
     * </code>
     *
     * @param     mixed $typeTheme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfThemeQuery The current query, for fluid interface
     */
    public function filterByTypeTheme($typeTheme = null, $comparison = null)
    {
        if (is_array($typeTheme)) {
            $useMinMax = false;
            if (isset($typeTheme['min'])) {
                $this->addUsingAlias(PfThemePeer::TYPE_THEME, $typeTheme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeTheme['max'])) {
                $this->addUsingAlias(PfThemePeer::TYPE_THEME, $typeTheme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfThemePeer::TYPE_THEME, $typeTheme, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfTheme $pfTheme Object to remove from the list of results
     *
     * @return PfThemeQuery The current query, for fluid interface
     */
    public function prune($pfTheme = null)
    {
        if ($pfTheme) {
            $this->addUsingAlias(PfThemePeer::ID_THEME, $pfTheme->getIdTheme(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
