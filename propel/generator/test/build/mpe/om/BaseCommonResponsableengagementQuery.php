<?php


/**
 * Base class that represents a query for the 'responsableengagement' table.
 *
 * 
 *
 * @method CommonResponsableengagementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonResponsableengagementQuery orderByEntrepriseId($order = Criteria::ASC) Order by the entreprise_id column
 * @method CommonResponsableengagementQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonResponsableengagementQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonResponsableengagementQuery orderByQualite($order = Criteria::ASC) Order by the qualite column
 * @method CommonResponsableengagementQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonResponsableengagementQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonResponsableengagementQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonResponsableengagementQuery orderByIdInitial($order = Criteria::ASC) Order by the id_initial column
 *
 * @method CommonResponsableengagementQuery groupById() Group by the id column
 * @method CommonResponsableengagementQuery groupByEntrepriseId() Group by the entreprise_id column
 * @method CommonResponsableengagementQuery groupByNom() Group by the nom column
 * @method CommonResponsableengagementQuery groupByPrenom() Group by the prenom column
 * @method CommonResponsableengagementQuery groupByQualite() Group by the qualite column
 * @method CommonResponsableengagementQuery groupByEmail() Group by the email column
 * @method CommonResponsableengagementQuery groupByTelephone() Group by the telephone column
 * @method CommonResponsableengagementQuery groupByFax() Group by the fax column
 * @method CommonResponsableengagementQuery groupByIdInitial() Group by the id_initial column
 *
 * @method CommonResponsableengagementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonResponsableengagementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonResponsableengagementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonResponsableengagement findOne(PropelPDO $con = null) Return the first CommonResponsableengagement matching the query
 * @method CommonResponsableengagement findOneOrCreate(PropelPDO $con = null) Return the first CommonResponsableengagement matching the query, or a new CommonResponsableengagement object populated from the query conditions when no match is found
 *
 * @method CommonResponsableengagement findOneById(int $id) Return the first CommonResponsableengagement filtered by the id column
 * @method CommonResponsableengagement findOneByEntrepriseId(int $entreprise_id) Return the first CommonResponsableengagement filtered by the entreprise_id column
 * @method CommonResponsableengagement findOneByNom(string $nom) Return the first CommonResponsableengagement filtered by the nom column
 * @method CommonResponsableengagement findOneByPrenom(string $prenom) Return the first CommonResponsableengagement filtered by the prenom column
 * @method CommonResponsableengagement findOneByQualite(string $qualite) Return the first CommonResponsableengagement filtered by the qualite column
 * @method CommonResponsableengagement findOneByEmail(string $email) Return the first CommonResponsableengagement filtered by the email column
 * @method CommonResponsableengagement findOneByTelephone(string $telephone) Return the first CommonResponsableengagement filtered by the telephone column
 * @method CommonResponsableengagement findOneByFax(string $fax) Return the first CommonResponsableengagement filtered by the fax column
 * @method CommonResponsableengagement findOneByIdInitial(int $id_initial) Return the first CommonResponsableengagement filtered by the id_initial column
 *
 * @method array findById(int $id) Return CommonResponsableengagement objects filtered by the id column
 * @method array findByEntrepriseId(int $entreprise_id) Return CommonResponsableengagement objects filtered by the entreprise_id column
 * @method array findByNom(string $nom) Return CommonResponsableengagement objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonResponsableengagement objects filtered by the prenom column
 * @method array findByQualite(string $qualite) Return CommonResponsableengagement objects filtered by the qualite column
 * @method array findByEmail(string $email) Return CommonResponsableengagement objects filtered by the email column
 * @method array findByTelephone(string $telephone) Return CommonResponsableengagement objects filtered by the telephone column
 * @method array findByFax(string $fax) Return CommonResponsableengagement objects filtered by the fax column
 * @method array findByIdInitial(int $id_initial) Return CommonResponsableengagement objects filtered by the id_initial column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonResponsableengagementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonResponsableengagementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonResponsableengagement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonResponsableengagementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonResponsableengagementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonResponsableengagementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonResponsableengagementQuery) {
            return $criteria;
        }
        $query = new CommonResponsableengagementQuery();
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
                         A Primary key composition: [$id, $entreprise_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonResponsableengagement|CommonResponsableengagement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonResponsableengagementPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonResponsableengagementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonResponsableengagement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `entreprise_id`, `nom`, `prenom`, `qualite`, `email`, `telephone`, `fax`, `id_initial` FROM `responsableengagement` WHERE `id` = :p0 AND `entreprise_id` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonResponsableengagement();
            $obj->hydrate($row);
            CommonResponsableengagementPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonResponsableengagement|CommonResponsableengagement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonResponsableengagement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonResponsableengagementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonResponsableengagementPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonResponsableengagementPeer::ENTREPRISE_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonResponsableengagementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonResponsableengagementPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonResponsableengagementPeer::ENTREPRISE_ID, $key[1], Criteria::EQUAL);
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
     * @return CommonResponsableengagementQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonResponsableengagementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonResponsableengagementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResponsableengagementPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the entreprise_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEntrepriseId(1234); // WHERE entreprise_id = 1234
     * $query->filterByEntrepriseId(array(12, 34)); // WHERE entreprise_id IN (12, 34)
     * $query->filterByEntrepriseId(array('min' => 12)); // WHERE entreprise_id >= 12
     * $query->filterByEntrepriseId(array('max' => 12)); // WHERE entreprise_id <= 12
     * </code>
     *
     * @param     mixed $entrepriseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResponsableengagementQuery The current query, for fluid interface
     */
    public function filterByEntrepriseId($entrepriseId = null, $comparison = null)
    {
        if (is_array($entrepriseId)) {
            $useMinMax = false;
            if (isset($entrepriseId['min'])) {
                $this->addUsingAlias(CommonResponsableengagementPeer::ENTREPRISE_ID, $entrepriseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entrepriseId['max'])) {
                $this->addUsingAlias(CommonResponsableengagementPeer::ENTREPRISE_ID, $entrepriseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResponsableengagementPeer::ENTREPRISE_ID, $entrepriseId, $comparison);
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
     * @return CommonResponsableengagementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonResponsableengagementPeer::NOM, $nom, $comparison);
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
     * @return CommonResponsableengagementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonResponsableengagementPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the qualite column
     *
     * Example usage:
     * <code>
     * $query->filterByQualite('fooValue');   // WHERE qualite = 'fooValue'
     * $query->filterByQualite('%fooValue%'); // WHERE qualite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qualite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResponsableengagementQuery The current query, for fluid interface
     */
    public function filterByQualite($qualite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qualite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $qualite)) {
                $qualite = str_replace('*', '%', $qualite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResponsableengagementPeer::QUALITE, $qualite, $comparison);
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
     * @return CommonResponsableengagementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonResponsableengagementPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResponsableengagementQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResponsableengagementPeer::TELEPHONE, $telephone, $comparison);
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
     * @return CommonResponsableengagementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonResponsableengagementPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the id_initial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInitial(1234); // WHERE id_initial = 1234
     * $query->filterByIdInitial(array(12, 34)); // WHERE id_initial IN (12, 34)
     * $query->filterByIdInitial(array('min' => 12)); // WHERE id_initial >= 12
     * $query->filterByIdInitial(array('max' => 12)); // WHERE id_initial <= 12
     * </code>
     *
     * @param     mixed $idInitial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResponsableengagementQuery The current query, for fluid interface
     */
    public function filterByIdInitial($idInitial = null, $comparison = null)
    {
        if (is_array($idInitial)) {
            $useMinMax = false;
            if (isset($idInitial['min'])) {
                $this->addUsingAlias(CommonResponsableengagementPeer::ID_INITIAL, $idInitial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInitial['max'])) {
                $this->addUsingAlias(CommonResponsableengagementPeer::ID_INITIAL, $idInitial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResponsableengagementPeer::ID_INITIAL, $idInitial, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonResponsableengagement $commonResponsableengagement Object to remove from the list of results
     *
     * @return CommonResponsableengagementQuery The current query, for fluid interface
     */
    public function prune($commonResponsableengagement = null)
    {
        if ($commonResponsableengagement) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonResponsableengagementPeer::ID), $commonResponsableengagement->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonResponsableengagementPeer::ENTREPRISE_ID), $commonResponsableengagement->getEntrepriseId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
