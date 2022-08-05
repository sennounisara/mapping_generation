<?php


/**
 * Base class that represents a query for the 'SuiviAcces' table.
 *
 * 
 *
 * @method CommonSuiviAccesQuery orderByIdAuto($order = Criteria::ASC) Order by the id_auto column
 * @method CommonSuiviAccesQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonSuiviAccesQuery orderByDateAcces($order = Criteria::ASC) Order by the date_acces column
 * @method CommonSuiviAccesQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonSuiviAccesQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonSuiviAccesQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonSuiviAccesQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonSuiviAccesQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 *
 * @method CommonSuiviAccesQuery groupByIdAuto() Group by the id_auto column
 * @method CommonSuiviAccesQuery groupByIdAgent() Group by the id_agent column
 * @method CommonSuiviAccesQuery groupByDateAcces() Group by the date_acces column
 * @method CommonSuiviAccesQuery groupByIdService() Group by the id_service column
 * @method CommonSuiviAccesQuery groupByNom() Group by the nom column
 * @method CommonSuiviAccesQuery groupByPrenom() Group by the prenom column
 * @method CommonSuiviAccesQuery groupByEmail() Group by the email column
 * @method CommonSuiviAccesQuery groupByOrganisme() Group by the organisme column
 *
 * @method CommonSuiviAccesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonSuiviAccesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonSuiviAccesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonSuiviAcces findOne(PropelPDO $con = null) Return the first CommonSuiviAcces matching the query
 * @method CommonSuiviAcces findOneOrCreate(PropelPDO $con = null) Return the first CommonSuiviAcces matching the query, or a new CommonSuiviAcces object populated from the query conditions when no match is found
 *
 * @method CommonSuiviAcces findOneByIdAgent(int $id_agent) Return the first CommonSuiviAcces filtered by the id_agent column
 * @method CommonSuiviAcces findOneByDateAcces(string $date_acces) Return the first CommonSuiviAcces filtered by the date_acces column
 * @method CommonSuiviAcces findOneByIdService(int $id_service) Return the first CommonSuiviAcces filtered by the id_service column
 * @method CommonSuiviAcces findOneByNom(string $nom) Return the first CommonSuiviAcces filtered by the nom column
 * @method CommonSuiviAcces findOneByPrenom(string $prenom) Return the first CommonSuiviAcces filtered by the prenom column
 * @method CommonSuiviAcces findOneByEmail(string $email) Return the first CommonSuiviAcces filtered by the email column
 * @method CommonSuiviAcces findOneByOrganisme(string $organisme) Return the first CommonSuiviAcces filtered by the organisme column
 *
 * @method array findByIdAuto(int $id_auto) Return CommonSuiviAcces objects filtered by the id_auto column
 * @method array findByIdAgent(int $id_agent) Return CommonSuiviAcces objects filtered by the id_agent column
 * @method array findByDateAcces(string $date_acces) Return CommonSuiviAcces objects filtered by the date_acces column
 * @method array findByIdService(int $id_service) Return CommonSuiviAcces objects filtered by the id_service column
 * @method array findByNom(string $nom) Return CommonSuiviAcces objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonSuiviAcces objects filtered by the prenom column
 * @method array findByEmail(string $email) Return CommonSuiviAcces objects filtered by the email column
 * @method array findByOrganisme(string $organisme) Return CommonSuiviAcces objects filtered by the organisme column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonSuiviAccesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonSuiviAccesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonSuiviAcces', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonSuiviAccesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonSuiviAccesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonSuiviAccesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonSuiviAccesQuery) {
            return $criteria;
        }
        $query = new CommonSuiviAccesQuery();
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
     * @return   CommonSuiviAcces|CommonSuiviAcces[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonSuiviAccesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonSuiviAccesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSuiviAcces A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAuto($key, $con = null)
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
     * @return                 CommonSuiviAcces A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_auto`, `id_agent`, `date_acces`, `id_service`, `nom`, `prenom`, `email`, `organisme` FROM `SuiviAcces` WHERE `id_auto` = :p0';
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
            $obj = new CommonSuiviAcces();
            $obj->hydrate($row);
            CommonSuiviAccesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonSuiviAcces|CommonSuiviAcces[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonSuiviAcces[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonSuiviAccesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonSuiviAccesPeer::ID_AUTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonSuiviAccesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonSuiviAccesPeer::ID_AUTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_auto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAuto(1234); // WHERE id_auto = 1234
     * $query->filterByIdAuto(array(12, 34)); // WHERE id_auto IN (12, 34)
     * $query->filterByIdAuto(array('min' => 12)); // WHERE id_auto >= 12
     * $query->filterByIdAuto(array('max' => 12)); // WHERE id_auto <= 12
     * </code>
     *
     * @param     mixed $idAuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSuiviAccesQuery The current query, for fluid interface
     */
    public function filterByIdAuto($idAuto = null, $comparison = null)
    {
        if (is_array($idAuto)) {
            $useMinMax = false;
            if (isset($idAuto['min'])) {
                $this->addUsingAlias(CommonSuiviAccesPeer::ID_AUTO, $idAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAuto['max'])) {
                $this->addUsingAlias(CommonSuiviAccesPeer::ID_AUTO, $idAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSuiviAccesPeer::ID_AUTO, $idAuto, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSuiviAccesQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonSuiviAccesPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonSuiviAccesPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSuiviAccesPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the date_acces column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAcces('fooValue');   // WHERE date_acces = 'fooValue'
     * $query->filterByDateAcces('%fooValue%'); // WHERE date_acces LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAcces The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSuiviAccesQuery The current query, for fluid interface
     */
    public function filterByDateAcces($dateAcces = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAcces)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAcces)) {
                $dateAcces = str_replace('*', '%', $dateAcces);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSuiviAccesPeer::DATE_ACCES, $dateAcces, $comparison);
    }

    /**
     * Filter the query on the id_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE id_service = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE id_service IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE id_service >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE id_service <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSuiviAccesQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonSuiviAccesPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonSuiviAccesPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSuiviAccesPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSuiviAccesQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSuiviAccesPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE prenom = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSuiviAccesQuery The current query, for fluid interface
     */
    public function filterByPrenom($prenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenom)) {
                $prenom = str_replace('*', '%', $prenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSuiviAccesPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSuiviAccesQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSuiviAccesPeer::EMAIL, $email, $comparison);
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
     * @return CommonSuiviAccesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSuiviAccesPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonSuiviAcces $commonSuiviAcces Object to remove from the list of results
     *
     * @return CommonSuiviAccesQuery The current query, for fluid interface
     */
    public function prune($commonSuiviAcces = null)
    {
        if ($commonSuiviAcces) {
            $this->addUsingAlias(CommonSuiviAccesPeer::ID_AUTO, $commonSuiviAcces->getIdAuto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
