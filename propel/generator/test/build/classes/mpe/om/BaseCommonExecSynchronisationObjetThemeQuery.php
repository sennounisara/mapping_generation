<?php


/**
 * Base class that represents a query for the 'exec_synchronisation_objet_theme' table.
 *
 * 
 *
 * @method CommonExecSynchronisationObjetThemeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecSynchronisationObjetThemeQuery orderByIdTheme($order = Criteria::ASC) Order by the id_theme column
 * @method CommonExecSynchronisationObjetThemeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonExecSynchronisationObjetThemeQuery orderByLibelleObject($order = Criteria::ASC) Order by the libelle_object column
 *
 * @method CommonExecSynchronisationObjetThemeQuery groupById() Group by the id column
 * @method CommonExecSynchronisationObjetThemeQuery groupByIdTheme() Group by the id_theme column
 * @method CommonExecSynchronisationObjetThemeQuery groupByOrganisme() Group by the organisme column
 * @method CommonExecSynchronisationObjetThemeQuery groupByLibelleObject() Group by the libelle_object column
 *
 * @method CommonExecSynchronisationObjetThemeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecSynchronisationObjetThemeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecSynchronisationObjetThemeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecSynchronisationObjetTheme findOne(PropelPDO $con = null) Return the first CommonExecSynchronisationObjetTheme matching the query
 * @method CommonExecSynchronisationObjetTheme findOneOrCreate(PropelPDO $con = null) Return the first CommonExecSynchronisationObjetTheme matching the query, or a new CommonExecSynchronisationObjetTheme object populated from the query conditions when no match is found
 *
 * @method CommonExecSynchronisationObjetTheme findOneByIdTheme(int $id_theme) Return the first CommonExecSynchronisationObjetTheme filtered by the id_theme column
 * @method CommonExecSynchronisationObjetTheme findOneByOrganisme(string $organisme) Return the first CommonExecSynchronisationObjetTheme filtered by the organisme column
 * @method CommonExecSynchronisationObjetTheme findOneByLibelleObject(string $libelle_object) Return the first CommonExecSynchronisationObjetTheme filtered by the libelle_object column
 *
 * @method array findById(int $id) Return CommonExecSynchronisationObjetTheme objects filtered by the id column
 * @method array findByIdTheme(int $id_theme) Return CommonExecSynchronisationObjetTheme objects filtered by the id_theme column
 * @method array findByOrganisme(string $organisme) Return CommonExecSynchronisationObjetTheme objects filtered by the organisme column
 * @method array findByLibelleObject(string $libelle_object) Return CommonExecSynchronisationObjetTheme objects filtered by the libelle_object column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecSynchronisationObjetThemeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecSynchronisationObjetThemeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecSynchronisationObjetTheme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecSynchronisationObjetThemeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecSynchronisationObjetThemeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecSynchronisationObjetThemeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecSynchronisationObjetThemeQuery) {
            return $criteria;
        }
        $query = new CommonExecSynchronisationObjetThemeQuery();
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
     * @return   CommonExecSynchronisationObjetTheme|CommonExecSynchronisationObjetTheme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecSynchronisationObjetThemePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecSynchronisationObjetThemePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecSynchronisationObjetTheme A model object, or null if the key is not found
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
     * @return                 CommonExecSynchronisationObjetTheme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_theme`, `organisme`, `libelle_object` FROM `exec_synchronisation_objet_theme` WHERE `id` = :p0';
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
            $obj = new CommonExecSynchronisationObjetTheme();
            $obj->hydrate($row);
            CommonExecSynchronisationObjetThemePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecSynchronisationObjetTheme|CommonExecSynchronisationObjetTheme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecSynchronisationObjetTheme[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecSynchronisationObjetThemeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecSynchronisationObjetThemePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecSynchronisationObjetThemeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecSynchronisationObjetThemePeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecSynchronisationObjetThemeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecSynchronisationObjetThemePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecSynchronisationObjetThemePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecSynchronisationObjetThemePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_theme column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTheme(1234); // WHERE id_theme = 1234
     * $query->filterByIdTheme(array(12, 34)); // WHERE id_theme IN (12, 34)
     * $query->filterByIdTheme(array('min' => 12)); // WHERE id_theme >= 12
     * $query->filterByIdTheme(array('max' => 12)); // WHERE id_theme <= 12
     * </code>
     *
     * @param     mixed $idTheme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecSynchronisationObjetThemeQuery The current query, for fluid interface
     */
    public function filterByIdTheme($idTheme = null, $comparison = null)
    {
        if (is_array($idTheme)) {
            $useMinMax = false;
            if (isset($idTheme['min'])) {
                $this->addUsingAlias(CommonExecSynchronisationObjetThemePeer::ID_THEME, $idTheme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTheme['max'])) {
                $this->addUsingAlias(CommonExecSynchronisationObjetThemePeer::ID_THEME, $idTheme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecSynchronisationObjetThemePeer::ID_THEME, $idTheme, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecSynchronisationObjetThemeQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecSynchronisationObjetThemePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the libelle_object column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleObject('fooValue');   // WHERE libelle_object = 'fooValue'
     * $query->filterByLibelleObject('%fooValue%'); // WHERE libelle_object LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleObject The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecSynchronisationObjetThemeQuery The current query, for fluid interface
     */
    public function filterByLibelleObject($libelleObject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleObject)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleObject)) {
                $libelleObject = str_replace('*', '%', $libelleObject);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecSynchronisationObjetThemePeer::LIBELLE_OBJECT, $libelleObject, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecSynchronisationObjetTheme $commonExecSynchronisationObjetTheme Object to remove from the list of results
     *
     * @return CommonExecSynchronisationObjetThemeQuery The current query, for fluid interface
     */
    public function prune($commonExecSynchronisationObjetTheme = null)
    {
        if ($commonExecSynchronisationObjetTheme) {
            $this->addUsingAlias(CommonExecSynchronisationObjetThemePeer::ID, $commonExecSynchronisationObjetTheme->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
