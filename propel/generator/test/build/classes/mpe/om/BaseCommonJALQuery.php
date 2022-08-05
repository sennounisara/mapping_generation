<?php


/**
 * Base class that represents a query for the 'JAL' table.
 *
 * 
 *
 * @method CommonJALQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonJALQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonJALQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonJALQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonJALQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonJALQuery orderByEmailAr($order = Criteria::ASC) Order by the email_ar column
 * @method CommonJALQuery orderByTelecopie($order = Criteria::ASC) Order by the telecopie column
 * @method CommonJALQuery orderByInformationFacturation($order = Criteria::ASC) Order by the information_facturation column
 *
 * @method CommonJALQuery groupById() Group by the id column
 * @method CommonJALQuery groupByOrganisme() Group by the organisme column
 * @method CommonJALQuery groupByIdService() Group by the id_service column
 * @method CommonJALQuery groupByNom() Group by the nom column
 * @method CommonJALQuery groupByEmail() Group by the email column
 * @method CommonJALQuery groupByEmailAr() Group by the email_ar column
 * @method CommonJALQuery groupByTelecopie() Group by the telecopie column
 * @method CommonJALQuery groupByInformationFacturation() Group by the information_facturation column
 *
 * @method CommonJALQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonJALQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonJALQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonJAL findOne(PropelPDO $con = null) Return the first CommonJAL matching the query
 * @method CommonJAL findOneOrCreate(PropelPDO $con = null) Return the first CommonJAL matching the query, or a new CommonJAL object populated from the query conditions when no match is found
 *
 * @method CommonJAL findOneById(int $id) Return the first CommonJAL filtered by the id column
 * @method CommonJAL findOneByOrganisme(string $organisme) Return the first CommonJAL filtered by the organisme column
 * @method CommonJAL findOneByIdService(int $id_service) Return the first CommonJAL filtered by the id_service column
 * @method CommonJAL findOneByNom(string $nom) Return the first CommonJAL filtered by the nom column
 * @method CommonJAL findOneByEmail(string $email) Return the first CommonJAL filtered by the email column
 * @method CommonJAL findOneByEmailAr(string $email_ar) Return the first CommonJAL filtered by the email_ar column
 * @method CommonJAL findOneByTelecopie(string $telecopie) Return the first CommonJAL filtered by the telecopie column
 * @method CommonJAL findOneByInformationFacturation(string $information_facturation) Return the first CommonJAL filtered by the information_facturation column
 *
 * @method array findById(int $id) Return CommonJAL objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonJAL objects filtered by the organisme column
 * @method array findByIdService(int $id_service) Return CommonJAL objects filtered by the id_service column
 * @method array findByNom(string $nom) Return CommonJAL objects filtered by the nom column
 * @method array findByEmail(string $email) Return CommonJAL objects filtered by the email column
 * @method array findByEmailAr(string $email_ar) Return CommonJAL objects filtered by the email_ar column
 * @method array findByTelecopie(string $telecopie) Return CommonJAL objects filtered by the telecopie column
 * @method array findByInformationFacturation(string $information_facturation) Return CommonJAL objects filtered by the information_facturation column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonJALQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonJALQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonJAL', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonJALQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonJALQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonJALQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonJALQuery) {
            return $criteria;
        }
        $query = new CommonJALQuery();
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
     * @return   CommonJAL|CommonJAL[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonJALPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonJALPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonJAL A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_service`, `nom`, `email`, `email_ar`, `telecopie`, `information_facturation` FROM `JAL` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonJAL();
            $obj->hydrate($row);
            CommonJALPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonJAL|CommonJAL[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonJAL[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonJALQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonJALPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonJALPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonJALQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonJALPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonJALPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonJALQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonJALPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonJALPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonJALPeer::ID, $id, $comparison);
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
     * @return CommonJALQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonJALPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonJALQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonJALPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonJALPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonJALPeer::ID_SERVICE, $idService, $comparison);
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
     * @return CommonJALQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonJALPeer::NOM, $nom, $comparison);
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
     * @return CommonJALQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonJALPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the email_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailAr('fooValue');   // WHERE email_ar = 'fooValue'
     * $query->filterByEmailAr('%fooValue%'); // WHERE email_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJALQuery The current query, for fluid interface
     */
    public function filterByEmailAr($emailAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailAr)) {
                $emailAr = str_replace('*', '%', $emailAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJALPeer::EMAIL_AR, $emailAr, $comparison);
    }

    /**
     * Filter the query on the telecopie column
     *
     * Example usage:
     * <code>
     * $query->filterByTelecopie('fooValue');   // WHERE telecopie = 'fooValue'
     * $query->filterByTelecopie('%fooValue%'); // WHERE telecopie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telecopie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJALQuery The current query, for fluid interface
     */
    public function filterByTelecopie($telecopie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telecopie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telecopie)) {
                $telecopie = str_replace('*', '%', $telecopie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJALPeer::TELECOPIE, $telecopie, $comparison);
    }

    /**
     * Filter the query on the information_facturation column
     *
     * Example usage:
     * <code>
     * $query->filterByInformationFacturation('fooValue');   // WHERE information_facturation = 'fooValue'
     * $query->filterByInformationFacturation('%fooValue%'); // WHERE information_facturation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $informationFacturation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJALQuery The current query, for fluid interface
     */
    public function filterByInformationFacturation($informationFacturation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($informationFacturation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $informationFacturation)) {
                $informationFacturation = str_replace('*', '%', $informationFacturation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJALPeer::INFORMATION_FACTURATION, $informationFacturation, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonJAL $commonJAL Object to remove from the list of results
     *
     * @return CommonJALQuery The current query, for fluid interface
     */
    public function prune($commonJAL = null)
    {
        if ($commonJAL) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonJALPeer::ID), $commonJAL->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonJALPeer::ORGANISME), $commonJAL->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
