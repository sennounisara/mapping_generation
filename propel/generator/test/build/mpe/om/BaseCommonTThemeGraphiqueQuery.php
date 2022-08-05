<?php


/**
 * Base class that represents a query for the 'T_Theme_Graphique' table.
 *
 * 
 *
 * @method CommonTThemeGraphiqueQuery orderByIdThemeGraphique($order = Criteria::ASC) Order by the id_theme_graphique column
 * @method CommonTThemeGraphiqueQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method CommonTThemeGraphiqueQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonTThemeGraphiqueQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method CommonTThemeGraphiqueQuery groupByIdThemeGraphique() Group by the id_theme_graphique column
 * @method CommonTThemeGraphiqueQuery groupByCode() Group by the code column
 * @method CommonTThemeGraphiqueQuery groupByLibelle() Group by the libelle column
 * @method CommonTThemeGraphiqueQuery groupByActif() Group by the actif column
 *
 * @method CommonTThemeGraphiqueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTThemeGraphiqueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTThemeGraphiqueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTThemeGraphique findOne(PropelPDO $con = null) Return the first CommonTThemeGraphique matching the query
 * @method CommonTThemeGraphique findOneOrCreate(PropelPDO $con = null) Return the first CommonTThemeGraphique matching the query, or a new CommonTThemeGraphique object populated from the query conditions when no match is found
 *
 * @method CommonTThemeGraphique findOneByCode(string $code) Return the first CommonTThemeGraphique filtered by the code column
 * @method CommonTThemeGraphique findOneByLibelle(string $libelle) Return the first CommonTThemeGraphique filtered by the libelle column
 * @method CommonTThemeGraphique findOneByActif(string $actif) Return the first CommonTThemeGraphique filtered by the actif column
 *
 * @method array findByIdThemeGraphique(int $id_theme_graphique) Return CommonTThemeGraphique objects filtered by the id_theme_graphique column
 * @method array findByCode(string $code) Return CommonTThemeGraphique objects filtered by the code column
 * @method array findByLibelle(string $libelle) Return CommonTThemeGraphique objects filtered by the libelle column
 * @method array findByActif(string $actif) Return CommonTThemeGraphique objects filtered by the actif column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTThemeGraphiqueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTThemeGraphiqueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTThemeGraphique', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTThemeGraphiqueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTThemeGraphiqueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTThemeGraphiqueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTThemeGraphiqueQuery) {
            return $criteria;
        }
        $query = new CommonTThemeGraphiqueQuery();
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
     * @return   CommonTThemeGraphique|CommonTThemeGraphique[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTThemeGraphiquePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTThemeGraphiquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTThemeGraphique A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdThemeGraphique($key, $con = null)
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
     * @return                 CommonTThemeGraphique A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_theme_graphique`, `code`, `libelle`, `actif` FROM `T_Theme_Graphique` WHERE `id_theme_graphique` = :p0';
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
            $obj = new CommonTThemeGraphique();
            $obj->hydrate($row);
            CommonTThemeGraphiquePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTThemeGraphique|CommonTThemeGraphique[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTThemeGraphique[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTThemeGraphiqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTThemeGraphiquePeer::ID_THEME_GRAPHIQUE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTThemeGraphiqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTThemeGraphiquePeer::ID_THEME_GRAPHIQUE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_theme_graphique column
     *
     * Example usage:
     * <code>
     * $query->filterByIdThemeGraphique(1234); // WHERE id_theme_graphique = 1234
     * $query->filterByIdThemeGraphique(array(12, 34)); // WHERE id_theme_graphique IN (12, 34)
     * $query->filterByIdThemeGraphique(array('min' => 12)); // WHERE id_theme_graphique >= 12
     * $query->filterByIdThemeGraphique(array('max' => 12)); // WHERE id_theme_graphique <= 12
     * </code>
     *
     * @param     mixed $idThemeGraphique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTThemeGraphiqueQuery The current query, for fluid interface
     */
    public function filterByIdThemeGraphique($idThemeGraphique = null, $comparison = null)
    {
        if (is_array($idThemeGraphique)) {
            $useMinMax = false;
            if (isset($idThemeGraphique['min'])) {
                $this->addUsingAlias(CommonTThemeGraphiquePeer::ID_THEME_GRAPHIQUE, $idThemeGraphique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idThemeGraphique['max'])) {
                $this->addUsingAlias(CommonTThemeGraphiquePeer::ID_THEME_GRAPHIQUE, $idThemeGraphique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTThemeGraphiquePeer::ID_THEME_GRAPHIQUE, $idThemeGraphique, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTThemeGraphiqueQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTThemeGraphiquePeer::CODE, $code, $comparison);
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
     * @return CommonTThemeGraphiqueQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTThemeGraphiquePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif('fooValue');   // WHERE actif = 'fooValue'
     * $query->filterByActif('%fooValue%'); // WHERE actif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTThemeGraphiqueQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif)) {
                $actif = str_replace('*', '%', $actif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTThemeGraphiquePeer::ACTIF, $actif, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTThemeGraphique $commonTThemeGraphique Object to remove from the list of results
     *
     * @return CommonTThemeGraphiqueQuery The current query, for fluid interface
     */
    public function prune($commonTThemeGraphique = null)
    {
        if ($commonTThemeGraphique) {
            $this->addUsingAlias(CommonTThemeGraphiquePeer::ID_THEME_GRAPHIQUE, $commonTThemeGraphique->getIdThemeGraphique(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
