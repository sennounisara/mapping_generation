<?php


/**
 * Base class that represents a query for the 'Tiers' table.
 *
 * 
 *
 * @method CommonTiersQuery orderByIdTiers($order = Criteria::ASC) Order by the id_tiers column
 * @method CommonTiersQuery orderByLogin($order = Criteria::ASC) Order by the login column
 * @method CommonTiersQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method CommonTiersQuery orderByDenomination($order = Criteria::ASC) Order by the denomination column
 * @method CommonTiersQuery orderByFonctionnalite($order = Criteria::ASC) Order by the fonctionnalite column
 * @method CommonTiersQuery orderByIdEntite($order = Criteria::ASC) Order by the id_entite column
 *
 * @method CommonTiersQuery groupByIdTiers() Group by the id_tiers column
 * @method CommonTiersQuery groupByLogin() Group by the login column
 * @method CommonTiersQuery groupByPassword() Group by the password column
 * @method CommonTiersQuery groupByDenomination() Group by the denomination column
 * @method CommonTiersQuery groupByFonctionnalite() Group by the fonctionnalite column
 * @method CommonTiersQuery groupByIdEntite() Group by the id_entite column
 *
 * @method CommonTiersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTiersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTiersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTiers findOne(PropelPDO $con = null) Return the first CommonTiers matching the query
 * @method CommonTiers findOneOrCreate(PropelPDO $con = null) Return the first CommonTiers matching the query, or a new CommonTiers object populated from the query conditions when no match is found
 *
 * @method CommonTiers findOneByLogin(string $login) Return the first CommonTiers filtered by the login column
 * @method CommonTiers findOneByPassword(string $password) Return the first CommonTiers filtered by the password column
 * @method CommonTiers findOneByDenomination(string $denomination) Return the first CommonTiers filtered by the denomination column
 * @method CommonTiers findOneByFonctionnalite(string $fonctionnalite) Return the first CommonTiers filtered by the fonctionnalite column
 * @method CommonTiers findOneByIdEntite(string $id_entite) Return the first CommonTiers filtered by the id_entite column
 *
 * @method array findByIdTiers(int $id_tiers) Return CommonTiers objects filtered by the id_tiers column
 * @method array findByLogin(string $login) Return CommonTiers objects filtered by the login column
 * @method array findByPassword(string $password) Return CommonTiers objects filtered by the password column
 * @method array findByDenomination(string $denomination) Return CommonTiers objects filtered by the denomination column
 * @method array findByFonctionnalite(string $fonctionnalite) Return CommonTiers objects filtered by the fonctionnalite column
 * @method array findByIdEntite(string $id_entite) Return CommonTiers objects filtered by the id_entite column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTiersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTiersQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTiers', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTiersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTiersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTiersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTiersQuery) {
            return $criteria;
        }
        $query = new CommonTiersQuery();
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
     * @return   CommonTiers|CommonTiers[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTiersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTiersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTiers A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTiers($key, $con = null)
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
     * @return                 CommonTiers A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_tiers`, `login`, `password`, `denomination`, `fonctionnalite`, `id_entite` FROM `Tiers` WHERE `id_tiers` = :p0';
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
            $obj = new CommonTiers();
            $obj->hydrate($row);
            CommonTiersPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTiers|CommonTiers[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTiers[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTiersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTiersPeer::ID_TIERS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTiersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTiersPeer::ID_TIERS, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tiers column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTiers(1234); // WHERE id_tiers = 1234
     * $query->filterByIdTiers(array(12, 34)); // WHERE id_tiers IN (12, 34)
     * $query->filterByIdTiers(array('min' => 12)); // WHERE id_tiers >= 12
     * $query->filterByIdTiers(array('max' => 12)); // WHERE id_tiers <= 12
     * </code>
     *
     * @param     mixed $idTiers The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTiersQuery The current query, for fluid interface
     */
    public function filterByIdTiers($idTiers = null, $comparison = null)
    {
        if (is_array($idTiers)) {
            $useMinMax = false;
            if (isset($idTiers['min'])) {
                $this->addUsingAlias(CommonTiersPeer::ID_TIERS, $idTiers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTiers['max'])) {
                $this->addUsingAlias(CommonTiersPeer::ID_TIERS, $idTiers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTiersPeer::ID_TIERS, $idTiers, $comparison);
    }

    /**
     * Filter the query on the login column
     *
     * Example usage:
     * <code>
     * $query->filterByLogin('fooValue');   // WHERE login = 'fooValue'
     * $query->filterByLogin('%fooValue%'); // WHERE login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $login The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTiersQuery The current query, for fluid interface
     */
    public function filterByLogin($login = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($login)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $login)) {
                $login = str_replace('*', '%', $login);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTiersPeer::LOGIN, $login, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTiersQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTiersPeer::PASSWORD, $password, $comparison);
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
     * @return CommonTiersQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTiersPeer::DENOMINATION, $denomination, $comparison);
    }

    /**
     * Filter the query on the fonctionnalite column
     *
     * Example usage:
     * <code>
     * $query->filterByFonctionnalite('fooValue');   // WHERE fonctionnalite = 'fooValue'
     * $query->filterByFonctionnalite('%fooValue%'); // WHERE fonctionnalite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fonctionnalite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTiersQuery The current query, for fluid interface
     */
    public function filterByFonctionnalite($fonctionnalite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fonctionnalite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fonctionnalite)) {
                $fonctionnalite = str_replace('*', '%', $fonctionnalite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTiersPeer::FONCTIONNALITE, $fonctionnalite, $comparison);
    }

    /**
     * Filter the query on the id_entite column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite('fooValue');   // WHERE id_entite = 'fooValue'
     * $query->filterByIdEntite('%fooValue%'); // WHERE id_entite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTiersQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idEntite)) {
                $idEntite = str_replace('*', '%', $idEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTiersPeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTiers $commonTiers Object to remove from the list of results
     *
     * @return CommonTiersQuery The current query, for fluid interface
     */
    public function prune($commonTiers = null)
    {
        if ($commonTiers) {
            $this->addUsingAlias(CommonTiersPeer::ID_TIERS, $commonTiers->getIdTiers(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
