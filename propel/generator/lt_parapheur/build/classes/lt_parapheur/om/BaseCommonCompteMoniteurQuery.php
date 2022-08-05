<?php


/**
 * Base class that represents a query for the 'CompteMoniteur' table.
 *
 * 
 *
 * @method CommonCompteMoniteurQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCompteMoniteurQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonCompteMoniteurQuery orderByMoniteurLogin($order = Criteria::ASC) Order by the moniteur_login column
 * @method CommonCompteMoniteurQuery orderByMoniteurPassword($order = Criteria::ASC) Order by the moniteur_password column
 * @method CommonCompteMoniteurQuery orderByMoniteurMail($order = Criteria::ASC) Order by the moniteur_mail column
 * @method CommonCompteMoniteurQuery orderByMoniteurTarget($order = Criteria::ASC) Order by the moniteur_target column
 *
 * @method CommonCompteMoniteurQuery groupById() Group by the id column
 * @method CommonCompteMoniteurQuery groupByOrganisme() Group by the organisme column
 * @method CommonCompteMoniteurQuery groupByMoniteurLogin() Group by the moniteur_login column
 * @method CommonCompteMoniteurQuery groupByMoniteurPassword() Group by the moniteur_password column
 * @method CommonCompteMoniteurQuery groupByMoniteurMail() Group by the moniteur_mail column
 * @method CommonCompteMoniteurQuery groupByMoniteurTarget() Group by the moniteur_target column
 *
 * @method CommonCompteMoniteurQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCompteMoniteurQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCompteMoniteurQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCompteMoniteur findOne(PropelPDO $con = null) Return the first CommonCompteMoniteur matching the query
 * @method CommonCompteMoniteur findOneOrCreate(PropelPDO $con = null) Return the first CommonCompteMoniteur matching the query, or a new CommonCompteMoniteur object populated from the query conditions when no match is found
 *
 * @method CommonCompteMoniteur findOneById(int $id) Return the first CommonCompteMoniteur filtered by the id column
 * @method CommonCompteMoniteur findOneByOrganisme(string $organisme) Return the first CommonCompteMoniteur filtered by the organisme column
 * @method CommonCompteMoniteur findOneByMoniteurLogin(string $moniteur_login) Return the first CommonCompteMoniteur filtered by the moniteur_login column
 * @method CommonCompteMoniteur findOneByMoniteurPassword(string $moniteur_password) Return the first CommonCompteMoniteur filtered by the moniteur_password column
 * @method CommonCompteMoniteur findOneByMoniteurMail(string $moniteur_mail) Return the first CommonCompteMoniteur filtered by the moniteur_mail column
 * @method CommonCompteMoniteur findOneByMoniteurTarget(string $moniteur_target) Return the first CommonCompteMoniteur filtered by the moniteur_target column
 *
 * @method array findById(int $id) Return CommonCompteMoniteur objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonCompteMoniteur objects filtered by the organisme column
 * @method array findByMoniteurLogin(string $moniteur_login) Return CommonCompteMoniteur objects filtered by the moniteur_login column
 * @method array findByMoniteurPassword(string $moniteur_password) Return CommonCompteMoniteur objects filtered by the moniteur_password column
 * @method array findByMoniteurMail(string $moniteur_mail) Return CommonCompteMoniteur objects filtered by the moniteur_mail column
 * @method array findByMoniteurTarget(string $moniteur_target) Return CommonCompteMoniteur objects filtered by the moniteur_target column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCompteMoniteurQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCompteMoniteurQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCompteMoniteur', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCompteMoniteurQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCompteMoniteurQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCompteMoniteurQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCompteMoniteurQuery) {
            return $criteria;
        }
        $query = new CommonCompteMoniteurQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonCompteMoniteur|CommonCompteMoniteur[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCompteMoniteurPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCompteMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonCompteMoniteur A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `moniteur_login`, `moniteur_password`, `moniteur_mail`, `moniteur_target` FROM `CompteMoniteur` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonCompteMoniteur();
            $obj->hydrate($row);
            CommonCompteMoniteurPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonCompteMoniteur|CommonCompteMoniteur[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonCompteMoniteur[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCompteMoniteurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonCompteMoniteurPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonCompteMoniteurPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCompteMoniteurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonCompteMoniteurPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonCompteMoniteurPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonCompteMoniteurQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCompteMoniteurPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCompteMoniteurPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCompteMoniteurPeer::ID, $id, $comparison);
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
     * @return CommonCompteMoniteurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCompteMoniteurPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the moniteur_login column
     *
     * Example usage:
     * <code>
     * $query->filterByMoniteurLogin('fooValue');   // WHERE moniteur_login = 'fooValue'
     * $query->filterByMoniteurLogin('%fooValue%'); // WHERE moniteur_login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moniteurLogin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCompteMoniteurQuery The current query, for fluid interface
     */
    public function filterByMoniteurLogin($moniteurLogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moniteurLogin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moniteurLogin)) {
                $moniteurLogin = str_replace('*', '%', $moniteurLogin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCompteMoniteurPeer::MONITEUR_LOGIN, $moniteurLogin, $comparison);
    }

    /**
     * Filter the query on the moniteur_password column
     *
     * Example usage:
     * <code>
     * $query->filterByMoniteurPassword('fooValue');   // WHERE moniteur_password = 'fooValue'
     * $query->filterByMoniteurPassword('%fooValue%'); // WHERE moniteur_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moniteurPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCompteMoniteurQuery The current query, for fluid interface
     */
    public function filterByMoniteurPassword($moniteurPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moniteurPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moniteurPassword)) {
                $moniteurPassword = str_replace('*', '%', $moniteurPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCompteMoniteurPeer::MONITEUR_PASSWORD, $moniteurPassword, $comparison);
    }

    /**
     * Filter the query on the moniteur_mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMoniteurMail('fooValue');   // WHERE moniteur_mail = 'fooValue'
     * $query->filterByMoniteurMail('%fooValue%'); // WHERE moniteur_mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moniteurMail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCompteMoniteurQuery The current query, for fluid interface
     */
    public function filterByMoniteurMail($moniteurMail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moniteurMail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moniteurMail)) {
                $moniteurMail = str_replace('*', '%', $moniteurMail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCompteMoniteurPeer::MONITEUR_MAIL, $moniteurMail, $comparison);
    }

    /**
     * Filter the query on the moniteur_target column
     *
     * Example usage:
     * <code>
     * $query->filterByMoniteurTarget('fooValue');   // WHERE moniteur_target = 'fooValue'
     * $query->filterByMoniteurTarget('%fooValue%'); // WHERE moniteur_target LIKE '%fooValue%'
     * </code>
     *
     * @param     string $moniteurTarget The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCompteMoniteurQuery The current query, for fluid interface
     */
    public function filterByMoniteurTarget($moniteurTarget = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($moniteurTarget)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $moniteurTarget)) {
                $moniteurTarget = str_replace('*', '%', $moniteurTarget);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCompteMoniteurPeer::MONITEUR_TARGET, $moniteurTarget, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCompteMoniteur $commonCompteMoniteur Object to remove from the list of results
     *
     * @return CommonCompteMoniteurQuery The current query, for fluid interface
     */
    public function prune($commonCompteMoniteur = null)
    {
        if ($commonCompteMoniteur) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonCompteMoniteurPeer::ID), $commonCompteMoniteur->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonCompteMoniteurPeer::ORGANISME), $commonCompteMoniteur->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
