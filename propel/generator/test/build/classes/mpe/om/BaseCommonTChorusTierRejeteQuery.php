<?php


/**
 * Base class that represents a query for the 't_chorus_tier_rejete' table.
 *
 * 
 *
 * @method CommonTChorusTierRejeteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTChorusTierRejeteQuery orderByIdEchange($order = Criteria::ASC) Order by the id_echange column
 * @method CommonTChorusTierRejeteQuery orderByIdTier($order = Criteria::ASC) Order by the id_tier column
 * @method CommonTChorusTierRejeteQuery orderByCodeRejet($order = Criteria::ASC) Order by the code_rejet column
 * @method CommonTChorusTierRejeteQuery orderByOrganisationAchat($order = Criteria::ASC) Order by the organisation_achat column
 * @method CommonTChorusTierRejeteQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method CommonTChorusTierRejeteQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 *
 * @method CommonTChorusTierRejeteQuery groupById() Group by the id column
 * @method CommonTChorusTierRejeteQuery groupByIdEchange() Group by the id_echange column
 * @method CommonTChorusTierRejeteQuery groupByIdTier() Group by the id_tier column
 * @method CommonTChorusTierRejeteQuery groupByCodeRejet() Group by the code_rejet column
 * @method CommonTChorusTierRejeteQuery groupByOrganisationAchat() Group by the organisation_achat column
 * @method CommonTChorusTierRejeteQuery groupByActive() Group by the active column
 * @method CommonTChorusTierRejeteQuery groupByDateCreation() Group by the date_creation column
 *
 * @method CommonTChorusTierRejeteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTChorusTierRejeteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTChorusTierRejeteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTChorusTierRejete findOne(PropelPDO $con = null) Return the first CommonTChorusTierRejete matching the query
 * @method CommonTChorusTierRejete findOneOrCreate(PropelPDO $con = null) Return the first CommonTChorusTierRejete matching the query, or a new CommonTChorusTierRejete object populated from the query conditions when no match is found
 *
 * @method CommonTChorusTierRejete findOneByIdEchange(int $id_echange) Return the first CommonTChorusTierRejete filtered by the id_echange column
 * @method CommonTChorusTierRejete findOneByIdTier(string $id_tier) Return the first CommonTChorusTierRejete filtered by the id_tier column
 * @method CommonTChorusTierRejete findOneByCodeRejet(string $code_rejet) Return the first CommonTChorusTierRejete filtered by the code_rejet column
 * @method CommonTChorusTierRejete findOneByOrganisationAchat(string $organisation_achat) Return the first CommonTChorusTierRejete filtered by the organisation_achat column
 * @method CommonTChorusTierRejete findOneByActive(string $active) Return the first CommonTChorusTierRejete filtered by the active column
 * @method CommonTChorusTierRejete findOneByDateCreation(string $date_creation) Return the first CommonTChorusTierRejete filtered by the date_creation column
 *
 * @method array findById(int $id) Return CommonTChorusTierRejete objects filtered by the id column
 * @method array findByIdEchange(int $id_echange) Return CommonTChorusTierRejete objects filtered by the id_echange column
 * @method array findByIdTier(string $id_tier) Return CommonTChorusTierRejete objects filtered by the id_tier column
 * @method array findByCodeRejet(string $code_rejet) Return CommonTChorusTierRejete objects filtered by the code_rejet column
 * @method array findByOrganisationAchat(string $organisation_achat) Return CommonTChorusTierRejete objects filtered by the organisation_achat column
 * @method array findByActive(string $active) Return CommonTChorusTierRejete objects filtered by the active column
 * @method array findByDateCreation(string $date_creation) Return CommonTChorusTierRejete objects filtered by the date_creation column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTChorusTierRejeteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTChorusTierRejeteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTChorusTierRejete', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTChorusTierRejeteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTChorusTierRejeteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTChorusTierRejeteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTChorusTierRejeteQuery) {
            return $criteria;
        }
        $query = new CommonTChorusTierRejeteQuery();
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
     * @return   CommonTChorusTierRejete|CommonTChorusTierRejete[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTChorusTierRejetePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTChorusTierRejetePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTChorusTierRejete A model object, or null if the key is not found
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
     * @return                 CommonTChorusTierRejete A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_echange`, `id_tier`, `code_rejet`, `organisation_achat`, `active`, `date_creation` FROM `t_chorus_tier_rejete` WHERE `id` = :p0';
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
            $obj = new CommonTChorusTierRejete();
            $obj->hydrate($row);
            CommonTChorusTierRejetePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTChorusTierRejete|CommonTChorusTierRejete[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTChorusTierRejete[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTChorusTierRejeteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTChorusTierRejetePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTChorusTierRejeteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTChorusTierRejetePeer::ID, $keys, Criteria::IN);
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
     * @return CommonTChorusTierRejeteQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTChorusTierRejetePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTChorusTierRejetePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTChorusTierRejetePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_echange column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEchange(1234); // WHERE id_echange = 1234
     * $query->filterByIdEchange(array(12, 34)); // WHERE id_echange IN (12, 34)
     * $query->filterByIdEchange(array('min' => 12)); // WHERE id_echange >= 12
     * $query->filterByIdEchange(array('max' => 12)); // WHERE id_echange <= 12
     * </code>
     *
     * @param     mixed $idEchange The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTChorusTierRejeteQuery The current query, for fluid interface
     */
    public function filterByIdEchange($idEchange = null, $comparison = null)
    {
        if (is_array($idEchange)) {
            $useMinMax = false;
            if (isset($idEchange['min'])) {
                $this->addUsingAlias(CommonTChorusTierRejetePeer::ID_ECHANGE, $idEchange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEchange['max'])) {
                $this->addUsingAlias(CommonTChorusTierRejetePeer::ID_ECHANGE, $idEchange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTChorusTierRejetePeer::ID_ECHANGE, $idEchange, $comparison);
    }

    /**
     * Filter the query on the id_tier column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTier('fooValue');   // WHERE id_tier = 'fooValue'
     * $query->filterByIdTier('%fooValue%'); // WHERE id_tier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idTier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTChorusTierRejeteQuery The current query, for fluid interface
     */
    public function filterByIdTier($idTier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idTier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idTier)) {
                $idTier = str_replace('*', '%', $idTier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTChorusTierRejetePeer::ID_TIER, $idTier, $comparison);
    }

    /**
     * Filter the query on the code_rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeRejet('fooValue');   // WHERE code_rejet = 'fooValue'
     * $query->filterByCodeRejet('%fooValue%'); // WHERE code_rejet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeRejet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTChorusTierRejeteQuery The current query, for fluid interface
     */
    public function filterByCodeRejet($codeRejet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeRejet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeRejet)) {
                $codeRejet = str_replace('*', '%', $codeRejet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTChorusTierRejetePeer::CODE_REJET, $codeRejet, $comparison);
    }

    /**
     * Filter the query on the organisation_achat column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisationAchat('fooValue');   // WHERE organisation_achat = 'fooValue'
     * $query->filterByOrganisationAchat('%fooValue%'); // WHERE organisation_achat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisationAchat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTChorusTierRejeteQuery The current query, for fluid interface
     */
    public function filterByOrganisationAchat($organisationAchat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisationAchat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisationAchat)) {
                $organisationAchat = str_replace('*', '%', $organisationAchat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTChorusTierRejetePeer::ORGANISATION_ACHAT, $organisationAchat, $comparison);
    }

    /**
     * Filter the query on the active column
     *
     * Example usage:
     * <code>
     * $query->filterByActive('fooValue');   // WHERE active = 'fooValue'
     * $query->filterByActive('%fooValue%'); // WHERE active LIKE '%fooValue%'
     * </code>
     *
     * @param     string $active The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTChorusTierRejeteQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($active)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $active)) {
                $active = str_replace('*', '%', $active);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTChorusTierRejetePeer::ACTIVE, $active, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTChorusTierRejeteQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTChorusTierRejetePeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTChorusTierRejete $commonTChorusTierRejete Object to remove from the list of results
     *
     * @return CommonTChorusTierRejeteQuery The current query, for fluid interface
     */
    public function prune($commonTChorusTierRejete = null)
    {
        if ($commonTChorusTierRejete) {
            $this->addUsingAlias(CommonTChorusTierRejetePeer::ID, $commonTChorusTierRejete->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
