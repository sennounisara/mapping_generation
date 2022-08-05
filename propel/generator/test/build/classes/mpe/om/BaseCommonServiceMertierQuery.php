<?php


/**
 * Base class that represents a query for the 'Service_Mertier' table.
 *
 * 
 *
 * @method CommonServiceMertierQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonServiceMertierQuery orderBySigle($order = Criteria::ASC) Order by the sigle column
 * @method CommonServiceMertierQuery orderByDenomination($order = Criteria::ASC) Order by the denomination column
 * @method CommonServiceMertierQuery orderByUrlAcces($order = Criteria::ASC) Order by the url_acces column
 * @method CommonServiceMertierQuery orderByLogo($order = Criteria::ASC) Order by the logo column
 * @method CommonServiceMertierQuery orderByUrlDeconnexion($order = Criteria::ASC) Order by the url_deconnexion column
 * @method CommonServiceMertierQuery orderByOrdre($order = Criteria::ASC) Order by the ordre column
 * @method CommonServiceMertierQuery orderByCouleur($order = Criteria::ASC) Order by the couleur column
 *
 * @method CommonServiceMertierQuery groupById() Group by the id column
 * @method CommonServiceMertierQuery groupBySigle() Group by the sigle column
 * @method CommonServiceMertierQuery groupByDenomination() Group by the denomination column
 * @method CommonServiceMertierQuery groupByUrlAcces() Group by the url_acces column
 * @method CommonServiceMertierQuery groupByLogo() Group by the logo column
 * @method CommonServiceMertierQuery groupByUrlDeconnexion() Group by the url_deconnexion column
 * @method CommonServiceMertierQuery groupByOrdre() Group by the ordre column
 * @method CommonServiceMertierQuery groupByCouleur() Group by the couleur column
 *
 * @method CommonServiceMertierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonServiceMertierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonServiceMertierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonServiceMertier findOne(PropelPDO $con = null) Return the first CommonServiceMertier matching the query
 * @method CommonServiceMertier findOneOrCreate(PropelPDO $con = null) Return the first CommonServiceMertier matching the query, or a new CommonServiceMertier object populated from the query conditions when no match is found
 *
 * @method CommonServiceMertier findOneBySigle(string $sigle) Return the first CommonServiceMertier filtered by the sigle column
 * @method CommonServiceMertier findOneByDenomination(string $denomination) Return the first CommonServiceMertier filtered by the denomination column
 * @method CommonServiceMertier findOneByUrlAcces(string $url_acces) Return the first CommonServiceMertier filtered by the url_acces column
 * @method CommonServiceMertier findOneByLogo(string $logo) Return the first CommonServiceMertier filtered by the logo column
 * @method CommonServiceMertier findOneByUrlDeconnexion(string $url_deconnexion) Return the first CommonServiceMertier filtered by the url_deconnexion column
 * @method CommonServiceMertier findOneByOrdre(int $ordre) Return the first CommonServiceMertier filtered by the ordre column
 * @method CommonServiceMertier findOneByCouleur(string $couleur) Return the first CommonServiceMertier filtered by the couleur column
 *
 * @method array findById(int $id) Return CommonServiceMertier objects filtered by the id column
 * @method array findBySigle(string $sigle) Return CommonServiceMertier objects filtered by the sigle column
 * @method array findByDenomination(string $denomination) Return CommonServiceMertier objects filtered by the denomination column
 * @method array findByUrlAcces(string $url_acces) Return CommonServiceMertier objects filtered by the url_acces column
 * @method array findByLogo(string $logo) Return CommonServiceMertier objects filtered by the logo column
 * @method array findByUrlDeconnexion(string $url_deconnexion) Return CommonServiceMertier objects filtered by the url_deconnexion column
 * @method array findByOrdre(int $ordre) Return CommonServiceMertier objects filtered by the ordre column
 * @method array findByCouleur(string $couleur) Return CommonServiceMertier objects filtered by the couleur column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonServiceMertierQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonServiceMertierQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonServiceMertier', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonServiceMertierQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonServiceMertierQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonServiceMertierQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonServiceMertierQuery) {
            return $criteria;
        }
        $query = new CommonServiceMertierQuery();
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
     * @return   CommonServiceMertier|CommonServiceMertier[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonServiceMertierPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonServiceMertierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonServiceMertier A model object, or null if the key is not found
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
     * @return                 CommonServiceMertier A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `sigle`, `denomination`, `url_acces`, `logo`, `url_deconnexion`, `ordre`, `couleur` FROM `Service_Mertier` WHERE `id` = :p0';
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
            $obj = new CommonServiceMertier();
            $obj->hydrate($row);
            CommonServiceMertierPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonServiceMertier|CommonServiceMertier[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonServiceMertier[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonServiceMertierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonServiceMertierPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonServiceMertierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonServiceMertierPeer::ID, $keys, Criteria::IN);
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
     * @return CommonServiceMertierQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonServiceMertierPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonServiceMertierPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the sigle column
     *
     * Example usage:
     * <code>
     * $query->filterBySigle('fooValue');   // WHERE sigle = 'fooValue'
     * $query->filterBySigle('%fooValue%'); // WHERE sigle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierQuery The current query, for fluid interface
     */
    public function filterBySigle($sigle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigle)) {
                $sigle = str_replace('*', '%', $sigle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierPeer::SIGLE, $sigle, $comparison);
    }

    /**
     * Filter the query on the denomination column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination('fooValue');   // WHERE denomination = 'fooValue'
     * $query->filterByDenomination('%fooValue%'); // WHERE denomination LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierQuery The current query, for fluid interface
     */
    public function filterByDenomination($denomination = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination)) {
                $denomination = str_replace('*', '%', $denomination);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierPeer::DENOMINATION, $denomination, $comparison);
    }

    /**
     * Filter the query on the url_acces column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlAcces('fooValue');   // WHERE url_acces = 'fooValue'
     * $query->filterByUrlAcces('%fooValue%'); // WHERE url_acces LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlAcces The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierQuery The current query, for fluid interface
     */
    public function filterByUrlAcces($urlAcces = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlAcces)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlAcces)) {
                $urlAcces = str_replace('*', '%', $urlAcces);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierPeer::URL_ACCES, $urlAcces, $comparison);
    }

    /**
     * Filter the query on the logo column
     *
     * Example usage:
     * <code>
     * $query->filterByLogo('fooValue');   // WHERE logo = 'fooValue'
     * $query->filterByLogo('%fooValue%'); // WHERE logo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierQuery The current query, for fluid interface
     */
    public function filterByLogo($logo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logo)) {
                $logo = str_replace('*', '%', $logo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierPeer::LOGO, $logo, $comparison);
    }

    /**
     * Filter the query on the url_deconnexion column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlDeconnexion('fooValue');   // WHERE url_deconnexion = 'fooValue'
     * $query->filterByUrlDeconnexion('%fooValue%'); // WHERE url_deconnexion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlDeconnexion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierQuery The current query, for fluid interface
     */
    public function filterByUrlDeconnexion($urlDeconnexion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlDeconnexion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlDeconnexion)) {
                $urlDeconnexion = str_replace('*', '%', $urlDeconnexion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierPeer::URL_DECONNEXION, $urlDeconnexion, $comparison);
    }

    /**
     * Filter the query on the ordre column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdre(1234); // WHERE ordre = 1234
     * $query->filterByOrdre(array(12, 34)); // WHERE ordre IN (12, 34)
     * $query->filterByOrdre(array('min' => 12)); // WHERE ordre >= 12
     * $query->filterByOrdre(array('max' => 12)); // WHERE ordre <= 12
     * </code>
     *
     * @param     mixed $ordre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierQuery The current query, for fluid interface
     */
    public function filterByOrdre($ordre = null, $comparison = null)
    {
        if (is_array($ordre)) {
            $useMinMax = false;
            if (isset($ordre['min'])) {
                $this->addUsingAlias(CommonServiceMertierPeer::ORDRE, $ordre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordre['max'])) {
                $this->addUsingAlias(CommonServiceMertierPeer::ORDRE, $ordre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierPeer::ORDRE, $ordre, $comparison);
    }

    /**
     * Filter the query on the couleur column
     *
     * Example usage:
     * <code>
     * $query->filterByCouleur('fooValue');   // WHERE couleur = 'fooValue'
     * $query->filterByCouleur('%fooValue%'); // WHERE couleur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $couleur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierQuery The current query, for fluid interface
     */
    public function filterByCouleur($couleur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($couleur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $couleur)) {
                $couleur = str_replace('*', '%', $couleur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierPeer::COULEUR, $couleur, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonServiceMertier $commonServiceMertier Object to remove from the list of results
     *
     * @return CommonServiceMertierQuery The current query, for fluid interface
     */
    public function prune($commonServiceMertier = null)
    {
        if ($commonServiceMertier) {
            $this->addUsingAlias(CommonServiceMertierPeer::ID, $commonServiceMertier->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
