<?php


/**
 * Base class that represents a query for the 'Centrale_publication' table.
 *
 * 
 *
 * @method CommonCentralePublicationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCentralePublicationQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonCentralePublicationQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonCentralePublicationQuery orderByMail($order = Criteria::ASC) Order by the mail column
 * @method CommonCentralePublicationQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonCentralePublicationQuery orderByInformation($order = Criteria::ASC) Order by the information column
 *
 * @method CommonCentralePublicationQuery groupById() Group by the id column
 * @method CommonCentralePublicationQuery groupByOrganisme() Group by the organisme column
 * @method CommonCentralePublicationQuery groupByNom() Group by the nom column
 * @method CommonCentralePublicationQuery groupByMail() Group by the mail column
 * @method CommonCentralePublicationQuery groupByFax() Group by the fax column
 * @method CommonCentralePublicationQuery groupByInformation() Group by the information column
 *
 * @method CommonCentralePublicationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCentralePublicationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCentralePublicationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCentralePublication findOne(PropelPDO $con = null) Return the first CommonCentralePublication matching the query
 * @method CommonCentralePublication findOneOrCreate(PropelPDO $con = null) Return the first CommonCentralePublication matching the query, or a new CommonCentralePublication object populated from the query conditions when no match is found
 *
 * @method CommonCentralePublication findOneById(int $id) Return the first CommonCentralePublication filtered by the id column
 * @method CommonCentralePublication findOneByOrganisme(string $organisme) Return the first CommonCentralePublication filtered by the organisme column
 * @method CommonCentralePublication findOneByNom(string $nom) Return the first CommonCentralePublication filtered by the nom column
 * @method CommonCentralePublication findOneByMail(string $mail) Return the first CommonCentralePublication filtered by the mail column
 * @method CommonCentralePublication findOneByFax(string $fax) Return the first CommonCentralePublication filtered by the fax column
 * @method CommonCentralePublication findOneByInformation(string $information) Return the first CommonCentralePublication filtered by the information column
 *
 * @method array findById(int $id) Return CommonCentralePublication objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonCentralePublication objects filtered by the organisme column
 * @method array findByNom(string $nom) Return CommonCentralePublication objects filtered by the nom column
 * @method array findByMail(string $mail) Return CommonCentralePublication objects filtered by the mail column
 * @method array findByFax(string $fax) Return CommonCentralePublication objects filtered by the fax column
 * @method array findByInformation(string $information) Return CommonCentralePublication objects filtered by the information column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCentralePublicationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCentralePublicationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCentralePublication', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCentralePublicationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCentralePublicationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCentralePublicationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCentralePublicationQuery) {
            return $criteria;
        }
        $query = new CommonCentralePublicationQuery();
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
     * @return   CommonCentralePublication|CommonCentralePublication[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCentralePublicationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCentralePublicationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCentralePublication A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `nom`, `mail`, `fax`, `information` FROM `Centrale_publication` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonCentralePublication();
            $obj->hydrate($row);
            CommonCentralePublicationPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonCentralePublication|CommonCentralePublication[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCentralePublication[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCentralePublicationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonCentralePublicationPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonCentralePublicationPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCentralePublicationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonCentralePublicationPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonCentralePublicationPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonCentralePublicationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCentralePublicationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCentralePublicationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCentralePublicationPeer::ID, $id, $comparison);
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
     * @return CommonCentralePublicationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCentralePublicationPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonCentralePublicationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCentralePublicationPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the mail column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE mail = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE mail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCentralePublicationQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCentralePublicationPeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCentralePublicationQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCentralePublicationPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the information column
     *
     * Example usage:
     * <code>
     * $query->filterByInformation('fooValue');   // WHERE information = 'fooValue'
     * $query->filterByInformation('%fooValue%'); // WHERE information LIKE '%fooValue%'
     * </code>
     *
     * @param     string $information The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCentralePublicationQuery The current query, for fluid interface
     */
    public function filterByInformation($information = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($information)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $information)) {
                $information = str_replace('*', '%', $information);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCentralePublicationPeer::INFORMATION, $information, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCentralePublication $commonCentralePublication Object to remove from the list of results
     *
     * @return CommonCentralePublicationQuery The current query, for fluid interface
     */
    public function prune($commonCentralePublication = null)
    {
        if ($commonCentralePublication) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonCentralePublicationPeer::ID), $commonCentralePublication->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonCentralePublicationPeer::ORGANISME), $commonCentralePublication->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
