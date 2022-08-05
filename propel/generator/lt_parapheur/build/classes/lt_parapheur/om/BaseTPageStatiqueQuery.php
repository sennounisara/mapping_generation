<?php


/**
 * Base class that represents a query for the 't_page_statique' table.
 *
 * 
 *
 * @method TPageStatiqueQuery orderByIdPage($order = Criteria::ASC) Order by the ID_PAGE column
 * @method TPageStatiqueQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 * @method TPageStatiqueQuery orderByOrdrePage($order = Criteria::ASC) Order by the ORDRE_PAGE column
 * @method TPageStatiqueQuery orderByMenuAr($order = Criteria::ASC) Order by the MENU_AR column
 * @method TPageStatiqueQuery orderByMenuFr($order = Criteria::ASC) Order by the MENU_FR column
 * @method TPageStatiqueQuery orderByContenuAr($order = Criteria::ASC) Order by the CONTENU_AR column
 * @method TPageStatiqueQuery orderByContenuFr($order = Criteria::ASC) Order by the CONTENU_FR column
 *
 * @method TPageStatiqueQuery groupByIdPage() Group by the ID_PAGE column
 * @method TPageStatiqueQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 * @method TPageStatiqueQuery groupByOrdrePage() Group by the ORDRE_PAGE column
 * @method TPageStatiqueQuery groupByMenuAr() Group by the MENU_AR column
 * @method TPageStatiqueQuery groupByMenuFr() Group by the MENU_FR column
 * @method TPageStatiqueQuery groupByContenuAr() Group by the CONTENU_AR column
 * @method TPageStatiqueQuery groupByContenuFr() Group by the CONTENU_FR column
 *
 * @method TPageStatiqueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TPageStatiqueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TPageStatiqueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TPageStatique findOne(PropelPDO $con = null) Return the first TPageStatique matching the query
 * @method TPageStatique findOneOrCreate(PropelPDO $con = null) Return the first TPageStatique matching the query, or a new TPageStatique object populated from the query conditions when no match is found
 *
 * @method TPageStatique findOneByIdOrganisme(int $ID_ORGANISME) Return the first TPageStatique filtered by the ID_ORGANISME column
 * @method TPageStatique findOneByOrdrePage(int $ORDRE_PAGE) Return the first TPageStatique filtered by the ORDRE_PAGE column
 * @method TPageStatique findOneByMenuAr(string $MENU_AR) Return the first TPageStatique filtered by the MENU_AR column
 * @method TPageStatique findOneByMenuFr(string $MENU_FR) Return the first TPageStatique filtered by the MENU_FR column
 * @method TPageStatique findOneByContenuAr(string $CONTENU_AR) Return the first TPageStatique filtered by the CONTENU_AR column
 * @method TPageStatique findOneByContenuFr(string $CONTENU_FR) Return the first TPageStatique filtered by the CONTENU_FR column
 *
 * @method array findByIdPage(int $ID_PAGE) Return TPageStatique objects filtered by the ID_PAGE column
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return TPageStatique objects filtered by the ID_ORGANISME column
 * @method array findByOrdrePage(int $ORDRE_PAGE) Return TPageStatique objects filtered by the ORDRE_PAGE column
 * @method array findByMenuAr(string $MENU_AR) Return TPageStatique objects filtered by the MENU_AR column
 * @method array findByMenuFr(string $MENU_FR) Return TPageStatique objects filtered by the MENU_FR column
 * @method array findByContenuAr(string $CONTENU_AR) Return TPageStatique objects filtered by the CONTENU_AR column
 * @method array findByContenuFr(string $CONTENU_FR) Return TPageStatique objects filtered by the CONTENU_FR column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTPageStatiqueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTPageStatiqueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TPageStatique', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TPageStatiqueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TPageStatiqueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TPageStatiqueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TPageStatiqueQuery) {
            return $criteria;
        }
        $query = new TPageStatiqueQuery();
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
     * @return   TPageStatique|TPageStatique[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TPageStatiquePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TPageStatiquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TPageStatique A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPage($key, $con = null)
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
     * @return                 TPageStatique A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PAGE`, `ID_ORGANISME`, `ORDRE_PAGE`, `MENU_AR`, `MENU_FR`, `CONTENU_AR`, `CONTENU_FR` FROM `t_page_statique` WHERE `ID_PAGE` = :p0';
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
            $obj = new TPageStatique();
            $obj->hydrate($row);
            TPageStatiquePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TPageStatique|TPageStatique[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TPageStatique[]|mixed the list of results, formatted by the current formatter
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
     * @return TPageStatiqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TPageStatiquePeer::ID_PAGE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TPageStatiqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TPageStatiquePeer::ID_PAGE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_PAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPage(1234); // WHERE ID_PAGE = 1234
     * $query->filterByIdPage(array(12, 34)); // WHERE ID_PAGE IN (12, 34)
     * $query->filterByIdPage(array('min' => 12)); // WHERE ID_PAGE >= 12
     * $query->filterByIdPage(array('max' => 12)); // WHERE ID_PAGE <= 12
     * </code>
     *
     * @param     mixed $idPage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TPageStatiqueQuery The current query, for fluid interface
     */
    public function filterByIdPage($idPage = null, $comparison = null)
    {
        if (is_array($idPage)) {
            $useMinMax = false;
            if (isset($idPage['min'])) {
                $this->addUsingAlias(TPageStatiquePeer::ID_PAGE, $idPage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPage['max'])) {
                $this->addUsingAlias(TPageStatiquePeer::ID_PAGE, $idPage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TPageStatiquePeer::ID_PAGE, $idPage, $comparison);
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
     * @return TPageStatiqueQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(TPageStatiquePeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(TPageStatiquePeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TPageStatiquePeer::ID_ORGANISME, $idOrganisme, $comparison);
    }

    /**
     * Filter the query on the ORDRE_PAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdrePage(1234); // WHERE ORDRE_PAGE = 1234
     * $query->filterByOrdrePage(array(12, 34)); // WHERE ORDRE_PAGE IN (12, 34)
     * $query->filterByOrdrePage(array('min' => 12)); // WHERE ORDRE_PAGE >= 12
     * $query->filterByOrdrePage(array('max' => 12)); // WHERE ORDRE_PAGE <= 12
     * </code>
     *
     * @param     mixed $ordrePage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TPageStatiqueQuery The current query, for fluid interface
     */
    public function filterByOrdrePage($ordrePage = null, $comparison = null)
    {
        if (is_array($ordrePage)) {
            $useMinMax = false;
            if (isset($ordrePage['min'])) {
                $this->addUsingAlias(TPageStatiquePeer::ORDRE_PAGE, $ordrePage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordrePage['max'])) {
                $this->addUsingAlias(TPageStatiquePeer::ORDRE_PAGE, $ordrePage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TPageStatiquePeer::ORDRE_PAGE, $ordrePage, $comparison);
    }

    /**
     * Filter the query on the MENU_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuAr('fooValue');   // WHERE MENU_AR = 'fooValue'
     * $query->filterByMenuAr('%fooValue%'); // WHERE MENU_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TPageStatiqueQuery The current query, for fluid interface
     */
    public function filterByMenuAr($menuAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuAr)) {
                $menuAr = str_replace('*', '%', $menuAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TPageStatiquePeer::MENU_AR, $menuAr, $comparison);
    }

    /**
     * Filter the query on the MENU_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByMenuFr('fooValue');   // WHERE MENU_FR = 'fooValue'
     * $query->filterByMenuFr('%fooValue%'); // WHERE MENU_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $menuFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TPageStatiqueQuery The current query, for fluid interface
     */
    public function filterByMenuFr($menuFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($menuFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $menuFr)) {
                $menuFr = str_replace('*', '%', $menuFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TPageStatiquePeer::MENU_FR, $menuFr, $comparison);
    }

    /**
     * Filter the query on the CONTENU_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByContenuAr('fooValue');   // WHERE CONTENU_AR = 'fooValue'
     * $query->filterByContenuAr('%fooValue%'); // WHERE CONTENU_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contenuAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TPageStatiqueQuery The current query, for fluid interface
     */
    public function filterByContenuAr($contenuAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contenuAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contenuAr)) {
                $contenuAr = str_replace('*', '%', $contenuAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TPageStatiquePeer::CONTENU_AR, $contenuAr, $comparison);
    }

    /**
     * Filter the query on the CONTENU_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByContenuFr('fooValue');   // WHERE CONTENU_FR = 'fooValue'
     * $query->filterByContenuFr('%fooValue%'); // WHERE CONTENU_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contenuFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TPageStatiqueQuery The current query, for fluid interface
     */
    public function filterByContenuFr($contenuFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contenuFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contenuFr)) {
                $contenuFr = str_replace('*', '%', $contenuFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TPageStatiquePeer::CONTENU_FR, $contenuFr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TPageStatique $tPageStatique Object to remove from the list of results
     *
     * @return TPageStatiqueQuery The current query, for fluid interface
     */
    public function prune($tPageStatique = null)
    {
        if ($tPageStatique) {
            $this->addUsingAlias(TPageStatiquePeer::ID_PAGE, $tPageStatique->getIdPage(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
