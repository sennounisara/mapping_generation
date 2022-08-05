<?php


/**
 * Base class that represents a query for the 'sso_entreprise' table.
 *
 * 
 *
 * @method CommonSsoEntrepriseQuery orderByIdSso($order = Criteria::ASC) Order by the id_sso column
 * @method CommonSsoEntrepriseQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonSsoEntrepriseQuery orderByDateConnexion($order = Criteria::ASC) Order by the date_connexion column
 * @method CommonSsoEntrepriseQuery orderByDateLastRequest($order = Criteria::ASC) Order by the date_last_request column
 * @method CommonSsoEntrepriseQuery orderByLogin($order = Criteria::ASC) Order by the login column
 *
 * @method CommonSsoEntrepriseQuery groupByIdSso() Group by the id_sso column
 * @method CommonSsoEntrepriseQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonSsoEntrepriseQuery groupByDateConnexion() Group by the date_connexion column
 * @method CommonSsoEntrepriseQuery groupByDateLastRequest() Group by the date_last_request column
 * @method CommonSsoEntrepriseQuery groupByLogin() Group by the login column
 *
 * @method CommonSsoEntrepriseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonSsoEntrepriseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonSsoEntrepriseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonSsoEntreprise findOne(PropelPDO $con = null) Return the first CommonSsoEntreprise matching the query
 * @method CommonSsoEntreprise findOneOrCreate(PropelPDO $con = null) Return the first CommonSsoEntreprise matching the query, or a new CommonSsoEntreprise object populated from the query conditions when no match is found
 *
 * @method CommonSsoEntreprise findOneByIdInscrit(int $id_inscrit) Return the first CommonSsoEntreprise filtered by the id_inscrit column
 * @method CommonSsoEntreprise findOneByDateConnexion(string $date_connexion) Return the first CommonSsoEntreprise filtered by the date_connexion column
 * @method CommonSsoEntreprise findOneByDateLastRequest(string $date_last_request) Return the first CommonSsoEntreprise filtered by the date_last_request column
 * @method CommonSsoEntreprise findOneByLogin(string $login) Return the first CommonSsoEntreprise filtered by the login column
 *
 * @method array findByIdSso(string $id_sso) Return CommonSsoEntreprise objects filtered by the id_sso column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonSsoEntreprise objects filtered by the id_inscrit column
 * @method array findByDateConnexion(string $date_connexion) Return CommonSsoEntreprise objects filtered by the date_connexion column
 * @method array findByDateLastRequest(string $date_last_request) Return CommonSsoEntreprise objects filtered by the date_last_request column
 * @method array findByLogin(string $login) Return CommonSsoEntreprise objects filtered by the login column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonSsoEntrepriseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonSsoEntrepriseQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonSsoEntreprise', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonSsoEntrepriseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonSsoEntrepriseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonSsoEntrepriseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonSsoEntrepriseQuery) {
            return $criteria;
        }
        $query = new CommonSsoEntrepriseQuery();
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
     * @return   CommonSsoEntreprise|CommonSsoEntreprise[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonSsoEntreprisePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonSsoEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSsoEntreprise A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdSso($key, $con = null)
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
     * @return                 CommonSsoEntreprise A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_sso`, `id_inscrit`, `date_connexion`, `date_last_request`, `login` FROM `sso_entreprise` WHERE `id_sso` = :p0';
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
            $obj = new CommonSsoEntreprise();
            $obj->hydrate($row);
            CommonSsoEntreprisePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonSsoEntreprise|CommonSsoEntreprise[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonSsoEntreprise[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonSsoEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonSsoEntreprisePeer::ID_SSO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonSsoEntrepriseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonSsoEntreprisePeer::ID_SSO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_sso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSso('fooValue');   // WHERE id_sso = 'fooValue'
     * $query->filterByIdSso('%fooValue%'); // WHERE id_sso LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idSso The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSsoEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdSso($idSso = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idSso)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idSso)) {
                $idSso = str_replace('*', '%', $idSso);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSsoEntreprisePeer::ID_SSO, $idSso, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSsoEntrepriseQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonSsoEntreprisePeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonSsoEntreprisePeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSsoEntreprisePeer::ID_INSCRIT, $idInscrit, $comparison);
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
     * @return CommonSsoEntrepriseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSsoEntreprisePeer::DATE_CONNEXION, $dateConnexion, $comparison);
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
     * @return CommonSsoEntrepriseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSsoEntreprisePeer::DATE_LAST_REQUEST, $dateLastRequest, $comparison);
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
     * @return CommonSsoEntrepriseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSsoEntreprisePeer::LOGIN, $login, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonSsoEntreprise $commonSsoEntreprise Object to remove from the list of results
     *
     * @return CommonSsoEntrepriseQuery The current query, for fluid interface
     */
    public function prune($commonSsoEntreprise = null)
    {
        if ($commonSsoEntreprise) {
            $this->addUsingAlias(CommonSsoEntreprisePeer::ID_SSO, $commonSsoEntreprise->getIdSso(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
