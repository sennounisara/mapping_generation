<?php


/**
 * Base class that represents a query for the 'Sso_Tiers' table.
 *
 * 
 *
 * @method CommonSsoTiersQuery orderByIdSsoTiers($order = Criteria::ASC) Order by the id_sso_tiers column
 * @method CommonSsoTiersQuery orderByIdTiers($order = Criteria::ASC) Order by the id_tiers column
 * @method CommonSsoTiersQuery orderByIdFonctionnalite($order = Criteria::ASC) Order by the id_fonctionnalite column
 * @method CommonSsoTiersQuery orderByDateConnexion($order = Criteria::ASC) Order by the date_connexion column
 * @method CommonSsoTiersQuery orderByDateLastRequest($order = Criteria::ASC) Order by the date_last_request column
 * @method CommonSsoTiersQuery orderByIdEntite($order = Criteria::ASC) Order by the id_entite column
 *
 * @method CommonSsoTiersQuery groupByIdSsoTiers() Group by the id_sso_tiers column
 * @method CommonSsoTiersQuery groupByIdTiers() Group by the id_tiers column
 * @method CommonSsoTiersQuery groupByIdFonctionnalite() Group by the id_fonctionnalite column
 * @method CommonSsoTiersQuery groupByDateConnexion() Group by the date_connexion column
 * @method CommonSsoTiersQuery groupByDateLastRequest() Group by the date_last_request column
 * @method CommonSsoTiersQuery groupByIdEntite() Group by the id_entite column
 *
 * @method CommonSsoTiersQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonSsoTiersQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonSsoTiersQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonSsoTiers findOne(PropelPDO $con = null) Return the first CommonSsoTiers matching the query
 * @method CommonSsoTiers findOneOrCreate(PropelPDO $con = null) Return the first CommonSsoTiers matching the query, or a new CommonSsoTiers object populated from the query conditions when no match is found
 *
 * @method CommonSsoTiers findOneByIdTiers(int $id_tiers) Return the first CommonSsoTiers filtered by the id_tiers column
 * @method CommonSsoTiers findOneByIdFonctionnalite(string $id_fonctionnalite) Return the first CommonSsoTiers filtered by the id_fonctionnalite column
 * @method CommonSsoTiers findOneByDateConnexion(string $date_connexion) Return the first CommonSsoTiers filtered by the date_connexion column
 * @method CommonSsoTiers findOneByDateLastRequest(string $date_last_request) Return the first CommonSsoTiers filtered by the date_last_request column
 * @method CommonSsoTiers findOneByIdEntite(string $id_entite) Return the first CommonSsoTiers filtered by the id_entite column
 *
 * @method array findByIdSsoTiers(string $id_sso_tiers) Return CommonSsoTiers objects filtered by the id_sso_tiers column
 * @method array findByIdTiers(int $id_tiers) Return CommonSsoTiers objects filtered by the id_tiers column
 * @method array findByIdFonctionnalite(string $id_fonctionnalite) Return CommonSsoTiers objects filtered by the id_fonctionnalite column
 * @method array findByDateConnexion(string $date_connexion) Return CommonSsoTiers objects filtered by the date_connexion column
 * @method array findByDateLastRequest(string $date_last_request) Return CommonSsoTiers objects filtered by the date_last_request column
 * @method array findByIdEntite(string $id_entite) Return CommonSsoTiers objects filtered by the id_entite column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonSsoTiersQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonSsoTiersQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonSsoTiers', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonSsoTiersQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonSsoTiersQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonSsoTiersQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonSsoTiersQuery) {
            return $criteria;
        }
        $query = new CommonSsoTiersQuery();
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
     * @return   CommonSsoTiers|CommonSsoTiers[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonSsoTiersPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonSsoTiersPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSsoTiers A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdSsoTiers($key, $con = null)
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
     * @return                 CommonSsoTiers A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_sso_tiers`, `id_tiers`, `id_fonctionnalite`, `date_connexion`, `date_last_request`, `id_entite` FROM `Sso_Tiers` WHERE `id_sso_tiers` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonSsoTiers();
            $obj->hydrate($row);
            CommonSsoTiersPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonSsoTiers|CommonSsoTiers[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonSsoTiers[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonSsoTiersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonSsoTiersPeer::ID_SSO_TIERS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonSsoTiersQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonSsoTiersPeer::ID_SSO_TIERS, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_sso_tiers column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSsoTiers('fooValue');   // WHERE id_sso_tiers = 'fooValue'
     * $query->filterByIdSsoTiers('%fooValue%'); // WHERE id_sso_tiers LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idSsoTiers The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSsoTiersQuery The current query, for fluid interface
     */
    public function filterByIdSsoTiers($idSsoTiers = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idSsoTiers)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idSsoTiers)) {
                $idSsoTiers = str_replace('*', '%', $idSsoTiers);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSsoTiersPeer::ID_SSO_TIERS, $idSsoTiers, $comparison);
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
     * @return CommonSsoTiersQuery The current query, for fluid interface
     */
    public function filterByIdTiers($idTiers = null, $comparison = null)
    {
        if (is_array($idTiers)) {
            $useMinMax = false;
            if (isset($idTiers['min'])) {
                $this->addUsingAlias(CommonSsoTiersPeer::ID_TIERS, $idTiers['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTiers['max'])) {
                $this->addUsingAlias(CommonSsoTiersPeer::ID_TIERS, $idTiers['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSsoTiersPeer::ID_TIERS, $idTiers, $comparison);
    }

    /**
     * Filter the query on the id_fonctionnalite column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFonctionnalite('fooValue');   // WHERE id_fonctionnalite = 'fooValue'
     * $query->filterByIdFonctionnalite('%fooValue%'); // WHERE id_fonctionnalite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idFonctionnalite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSsoTiersQuery The current query, for fluid interface
     */
    public function filterByIdFonctionnalite($idFonctionnalite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idFonctionnalite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idFonctionnalite)) {
                $idFonctionnalite = str_replace('*', '%', $idFonctionnalite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSsoTiersPeer::ID_FONCTIONNALITE, $idFonctionnalite, $comparison);
    }

    /**
     * Filter the query on the date_connexion column
     *
     * Example usage:
     * <code>
     * $query->filterByDateConnexion('fooValue');   // WHERE date_connexion = 'fooValue'
     * $query->filterByDateConnexion('%fooValue%'); // WHERE date_connexion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateConnexion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSsoTiersQuery The current query, for fluid interface
     */
    public function filterByDateConnexion($dateConnexion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateConnexion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateConnexion)) {
                $dateConnexion = str_replace('*', '%', $dateConnexion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSsoTiersPeer::DATE_CONNEXION, $dateConnexion, $comparison);
    }

    /**
     * Filter the query on the date_last_request column
     *
     * Example usage:
     * <code>
     * $query->filterByDateLastRequest('fooValue');   // WHERE date_last_request = 'fooValue'
     * $query->filterByDateLastRequest('%fooValue%'); // WHERE date_last_request LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateLastRequest The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSsoTiersQuery The current query, for fluid interface
     */
    public function filterByDateLastRequest($dateLastRequest = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateLastRequest)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateLastRequest)) {
                $dateLastRequest = str_replace('*', '%', $dateLastRequest);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSsoTiersPeer::DATE_LAST_REQUEST, $dateLastRequest, $comparison);
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
     * @return CommonSsoTiersQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSsoTiersPeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonSsoTiers $commonSsoTiers Object to remove from the list of results
     *
     * @return CommonSsoTiersQuery The current query, for fluid interface
     */
    public function prune($commonSsoTiers = null)
    {
        if ($commonSsoTiers) {
            $this->addUsingAlias(CommonSsoTiersPeer::ID_SSO_TIERS, $commonSsoTiers->getIdSsoTiers(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
