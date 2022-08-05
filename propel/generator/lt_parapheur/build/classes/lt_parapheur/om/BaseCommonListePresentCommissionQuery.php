<?php


/**
 * Base class that represents a query for the 'liste_present_commission' table.
 *
 * 
 *
 * @method CommonListePresentCommissionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonListePresentCommissionQuery orderByRefConsultation($order = Criteria::ASC) Order by the ref_consultation column
 * @method CommonListePresentCommissionQuery orderByTypeEnveloppe($order = Criteria::ASC) Order by the type_enveloppe column
 * @method CommonListePresentCommissionQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonListePresentCommissionQuery orderByIdentifiant($order = Criteria::ASC) Order by the identifiant column
 * @method CommonListePresentCommissionQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonListePresentCommissionQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonListePresentCommissionQuery orderByDateConnexion($order = Criteria::ASC) Order by the date_connexion column
 *
 * @method CommonListePresentCommissionQuery groupById() Group by the id column
 * @method CommonListePresentCommissionQuery groupByRefConsultation() Group by the ref_consultation column
 * @method CommonListePresentCommissionQuery groupByTypeEnveloppe() Group by the type_enveloppe column
 * @method CommonListePresentCommissionQuery groupByIdAgent() Group by the id_agent column
 * @method CommonListePresentCommissionQuery groupByIdentifiant() Group by the identifiant column
 * @method CommonListePresentCommissionQuery groupByNom() Group by the nom column
 * @method CommonListePresentCommissionQuery groupByPrenom() Group by the prenom column
 * @method CommonListePresentCommissionQuery groupByDateConnexion() Group by the date_connexion column
 *
 * @method CommonListePresentCommissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonListePresentCommissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonListePresentCommissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonListePresentCommission findOne(PropelPDO $con = null) Return the first CommonListePresentCommission matching the query
 * @method CommonListePresentCommission findOneOrCreate(PropelPDO $con = null) Return the first CommonListePresentCommission matching the query, or a new CommonListePresentCommission object populated from the query conditions when no match is found
 *
 * @method CommonListePresentCommission findOneByRefConsultation(string $ref_consultation) Return the first CommonListePresentCommission filtered by the ref_consultation column
 * @method CommonListePresentCommission findOneByTypeEnveloppe(int $type_enveloppe) Return the first CommonListePresentCommission filtered by the type_enveloppe column
 * @method CommonListePresentCommission findOneByIdAgent(int $id_agent) Return the first CommonListePresentCommission filtered by the id_agent column
 * @method CommonListePresentCommission findOneByIdentifiant(string $identifiant) Return the first CommonListePresentCommission filtered by the identifiant column
 * @method CommonListePresentCommission findOneByNom(string $nom) Return the first CommonListePresentCommission filtered by the nom column
 * @method CommonListePresentCommission findOneByPrenom(string $prenom) Return the first CommonListePresentCommission filtered by the prenom column
 * @method CommonListePresentCommission findOneByDateConnexion(string $date_connexion) Return the first CommonListePresentCommission filtered by the date_connexion column
 *
 * @method array findById(int $id) Return CommonListePresentCommission objects filtered by the id column
 * @method array findByRefConsultation(string $ref_consultation) Return CommonListePresentCommission objects filtered by the ref_consultation column
 * @method array findByTypeEnveloppe(int $type_enveloppe) Return CommonListePresentCommission objects filtered by the type_enveloppe column
 * @method array findByIdAgent(int $id_agent) Return CommonListePresentCommission objects filtered by the id_agent column
 * @method array findByIdentifiant(string $identifiant) Return CommonListePresentCommission objects filtered by the identifiant column
 * @method array findByNom(string $nom) Return CommonListePresentCommission objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonListePresentCommission objects filtered by the prenom column
 * @method array findByDateConnexion(string $date_connexion) Return CommonListePresentCommission objects filtered by the date_connexion column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonListePresentCommissionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonListePresentCommissionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonListePresentCommission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonListePresentCommissionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonListePresentCommissionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonListePresentCommissionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonListePresentCommissionQuery) {
            return $criteria;
        }
        $query = new CommonListePresentCommissionQuery();
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
     * @return   CommonListePresentCommission|CommonListePresentCommission[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonListePresentCommissionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonListePresentCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonListePresentCommission A model object, or null if the key is not found
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
     * @return                 CommonListePresentCommission A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `ref_consultation`, `type_enveloppe`, `id_agent`, `identifiant`, `nom`, `prenom`, `date_connexion` FROM `liste_present_commission` WHERE `id` = :p0';
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
            $obj = new CommonListePresentCommission();
            $obj->hydrate($row);
            CommonListePresentCommissionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonListePresentCommission|CommonListePresentCommission[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonListePresentCommission[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonListePresentCommissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonListePresentCommissionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonListePresentCommissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonListePresentCommissionPeer::ID, $keys, Criteria::IN);
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
     * @return CommonListePresentCommissionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonListePresentCommissionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonListePresentCommissionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonListePresentCommissionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ref_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByRefConsultation('fooValue');   // WHERE ref_consultation = 'fooValue'
     * $query->filterByRefConsultation('%fooValue%'); // WHERE ref_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $refConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonListePresentCommissionQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($refConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $refConsultation)) {
                $refConsultation = str_replace('*', '%', $refConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonListePresentCommissionPeer::REF_CONSULTATION, $refConsultation, $comparison);
    }

    /**
     * Filter the query on the type_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnveloppe(1234); // WHERE type_enveloppe = 1234
     * $query->filterByTypeEnveloppe(array(12, 34)); // WHERE type_enveloppe IN (12, 34)
     * $query->filterByTypeEnveloppe(array('min' => 12)); // WHERE type_enveloppe >= 12
     * $query->filterByTypeEnveloppe(array('max' => 12)); // WHERE type_enveloppe <= 12
     * </code>
     *
     * @param     mixed $typeEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonListePresentCommissionQuery The current query, for fluid interface
     */
    public function filterByTypeEnveloppe($typeEnveloppe = null, $comparison = null)
    {
        if (is_array($typeEnveloppe)) {
            $useMinMax = false;
            if (isset($typeEnveloppe['min'])) {
                $this->addUsingAlias(CommonListePresentCommissionPeer::TYPE_ENVELOPPE, $typeEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnveloppe['max'])) {
                $this->addUsingAlias(CommonListePresentCommissionPeer::TYPE_ENVELOPPE, $typeEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonListePresentCommissionPeer::TYPE_ENVELOPPE, $typeEnveloppe, $comparison);
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
     * @return CommonListePresentCommissionQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonListePresentCommissionPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonListePresentCommissionPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonListePresentCommissionPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the identifiant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiant('fooValue');   // WHERE identifiant = 'fooValue'
     * $query->filterByIdentifiant('%fooValue%'); // WHERE identifiant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonListePresentCommissionQuery The current query, for fluid interface
     */
    public function filterByIdentifiant($identifiant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiant)) {
                $identifiant = str_replace('*', '%', $identifiant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonListePresentCommissionPeer::IDENTIFIANT, $identifiant, $comparison);
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
     * @return CommonListePresentCommissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonListePresentCommissionPeer::NOM, $nom, $comparison);
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
     * @return CommonListePresentCommissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonListePresentCommissionPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the date_connexion column
     *
     * Example usage:
     * <code>
     * $query->filterByDateConnexion('2011-03-14'); // WHERE date_connexion = '2011-03-14'
     * $query->filterByDateConnexion('now'); // WHERE date_connexion = '2011-03-14'
     * $query->filterByDateConnexion(array('max' => 'yesterday')); // WHERE date_connexion > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateConnexion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonListePresentCommissionQuery The current query, for fluid interface
     */
    public function filterByDateConnexion($dateConnexion = null, $comparison = null)
    {
        if (is_array($dateConnexion)) {
            $useMinMax = false;
            if (isset($dateConnexion['min'])) {
                $this->addUsingAlias(CommonListePresentCommissionPeer::DATE_CONNEXION, $dateConnexion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateConnexion['max'])) {
                $this->addUsingAlias(CommonListePresentCommissionPeer::DATE_CONNEXION, $dateConnexion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonListePresentCommissionPeer::DATE_CONNEXION, $dateConnexion, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonListePresentCommission $commonListePresentCommission Object to remove from the list of results
     *
     * @return CommonListePresentCommissionQuery The current query, for fluid interface
     */
    public function prune($commonListePresentCommission = null)
    {
        if ($commonListePresentCommission) {
            $this->addUsingAlias(CommonListePresentCommissionPeer::ID, $commonListePresentCommission->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
