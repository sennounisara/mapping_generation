<?php


/**
 * Base class that represents a query for the 'Referentiel_contact' table.
 *
 * 
 *
 * @method CommonReferentielContactQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonReferentielContactQuery orderBySigle($order = Criteria::ASC) Order by the sigle column
 * @method CommonReferentielContactQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonReferentielContactQuery orderByContact($order = Criteria::ASC) Order by the contact column
 * @method CommonReferentielContactQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method CommonReferentielContactQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 *
 * @method CommonReferentielContactQuery groupById() Group by the id column
 * @method CommonReferentielContactQuery groupBySigle() Group by the sigle column
 * @method CommonReferentielContactQuery groupByLibelle() Group by the libelle column
 * @method CommonReferentielContactQuery groupByContact() Group by the contact column
 * @method CommonReferentielContactQuery groupByActif() Group by the actif column
 * @method CommonReferentielContactQuery groupByOrganisme() Group by the organisme column
 *
 * @method CommonReferentielContactQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReferentielContactQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReferentielContactQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReferentielContact findOne(PropelPDO $con = null) Return the first CommonReferentielContact matching the query
 * @method CommonReferentielContact findOneOrCreate(PropelPDO $con = null) Return the first CommonReferentielContact matching the query, or a new CommonReferentielContact object populated from the query conditions when no match is found
 *
 * @method CommonReferentielContact findOneBySigle(string $sigle) Return the first CommonReferentielContact filtered by the sigle column
 * @method CommonReferentielContact findOneByLibelle(string $libelle) Return the first CommonReferentielContact filtered by the libelle column
 * @method CommonReferentielContact findOneByContact(string $contact) Return the first CommonReferentielContact filtered by the contact column
 * @method CommonReferentielContact findOneByActif(string $actif) Return the first CommonReferentielContact filtered by the actif column
 * @method CommonReferentielContact findOneByOrganisme(string $organisme) Return the first CommonReferentielContact filtered by the organisme column
 *
 * @method array findById(int $id) Return CommonReferentielContact objects filtered by the id column
 * @method array findBySigle(string $sigle) Return CommonReferentielContact objects filtered by the sigle column
 * @method array findByLibelle(string $libelle) Return CommonReferentielContact objects filtered by the libelle column
 * @method array findByContact(string $contact) Return CommonReferentielContact objects filtered by the contact column
 * @method array findByActif(string $actif) Return CommonReferentielContact objects filtered by the actif column
 * @method array findByOrganisme(string $organisme) Return CommonReferentielContact objects filtered by the organisme column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonReferentielContactQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReferentielContactQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReferentielContact', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReferentielContactQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReferentielContactQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReferentielContactQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReferentielContactQuery) {
            return $criteria;
        }
        $query = new CommonReferentielContactQuery();
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
     * @return   CommonReferentielContact|CommonReferentielContact[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReferentielContactPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReferentielContact A model object, or null if the key is not found
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
     * @return                 CommonReferentielContact A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `sigle`, `libelle`, `contact`, `actif`, `organisme` FROM `Referentiel_contact` WHERE `id` = :p0';
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
            $obj = new CommonReferentielContact();
            $obj->hydrate($row);
            CommonReferentielContactPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonReferentielContact|CommonReferentielContact[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReferentielContact[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReferentielContactQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonReferentielContactPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReferentielContactQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonReferentielContactPeer::ID, $keys, Criteria::IN);
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
     * @return CommonReferentielContactQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonReferentielContactPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonReferentielContactPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielContactPeer::ID, $id, $comparison);
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
     * @return CommonReferentielContactQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonReferentielContactPeer::SIGLE, $sigle, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielContactQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielContactPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the contact column
     *
     * Example usage:
     * <code>
     * $query->filterByContact('fooValue');   // WHERE contact = 'fooValue'
     * $query->filterByContact('%fooValue%'); // WHERE contact LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contact The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielContactQuery The current query, for fluid interface
     */
    public function filterByContact($contact = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contact)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contact)) {
                $contact = str_replace('*', '%', $contact);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielContactPeer::CONTACT, $contact, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif('fooValue');   // WHERE actif = 'fooValue'
     * $query->filterByActif('%fooValue%'); // WHERE actif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielContactQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif)) {
                $actif = str_replace('*', '%', $actif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielContactPeer::ACTIF, $actif, $comparison);
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
     * @return CommonReferentielContactQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonReferentielContactPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReferentielContact $commonReferentielContact Object to remove from the list of results
     *
     * @return CommonReferentielContactQuery The current query, for fluid interface
     */
    public function prune($commonReferentielContact = null)
    {
        if ($commonReferentielContact) {
            $this->addUsingAlias(CommonReferentielContactPeer::ID, $commonReferentielContact->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
