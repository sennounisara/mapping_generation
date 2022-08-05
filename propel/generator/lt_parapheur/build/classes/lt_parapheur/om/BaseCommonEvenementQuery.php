<?php


/**
 * Base class that represents a query for the 'Evenement' table.
 *
 * 
 *
 * @method CommonEvenementQuery orderByIdEvenement($order = Criteria::ASC) Order by the id_evenement column
 * @method CommonEvenementQuery orderByReferenceConsultation($order = Criteria::ASC) Order by the reference_consultation column
 * @method CommonEvenementQuery orderByReferenceUtilisateur($order = Criteria::ASC) Order by the reference_utilisateur column
 * @method CommonEvenementQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonEvenementQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEvenementQuery orderByObjetConsultation($order = Criteria::ASC) Order by the objet_consultation column
 * @method CommonEvenementQuery orderByTypeEvenement($order = Criteria::ASC) Order by the type_evenement column
 * @method CommonEvenementQuery orderByDateEvenement($order = Criteria::ASC) Order by the date_evenement column
 * @method CommonEvenementQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 *
 * @method CommonEvenementQuery groupByIdEvenement() Group by the id_evenement column
 * @method CommonEvenementQuery groupByReferenceConsultation() Group by the reference_consultation column
 * @method CommonEvenementQuery groupByReferenceUtilisateur() Group by the reference_utilisateur column
 * @method CommonEvenementQuery groupByIdService() Group by the id_service column
 * @method CommonEvenementQuery groupByOrganisme() Group by the organisme column
 * @method CommonEvenementQuery groupByObjetConsultation() Group by the objet_consultation column
 * @method CommonEvenementQuery groupByTypeEvenement() Group by the type_evenement column
 * @method CommonEvenementQuery groupByDateEvenement() Group by the date_evenement column
 * @method CommonEvenementQuery groupByDateCreation() Group by the date_creation column
 *
 * @method CommonEvenementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEvenementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEvenementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEvenement findOne(PropelPDO $con = null) Return the first CommonEvenement matching the query
 * @method CommonEvenement findOneOrCreate(PropelPDO $con = null) Return the first CommonEvenement matching the query, or a new CommonEvenement object populated from the query conditions when no match is found
 *
 * @method CommonEvenement findOneByReferenceConsultation(int $reference_consultation) Return the first CommonEvenement filtered by the reference_consultation column
 * @method CommonEvenement findOneByReferenceUtilisateur(string $reference_utilisateur) Return the first CommonEvenement filtered by the reference_utilisateur column
 * @method CommonEvenement findOneByIdService(int $id_service) Return the first CommonEvenement filtered by the id_service column
 * @method CommonEvenement findOneByOrganisme(string $organisme) Return the first CommonEvenement filtered by the organisme column
 * @method CommonEvenement findOneByObjetConsultation(string $objet_consultation) Return the first CommonEvenement filtered by the objet_consultation column
 * @method CommonEvenement findOneByTypeEvenement(string $type_evenement) Return the first CommonEvenement filtered by the type_evenement column
 * @method CommonEvenement findOneByDateEvenement(string $date_evenement) Return the first CommonEvenement filtered by the date_evenement column
 * @method CommonEvenement findOneByDateCreation(string $date_creation) Return the first CommonEvenement filtered by the date_creation column
 *
 * @method array findByIdEvenement(int $id_evenement) Return CommonEvenement objects filtered by the id_evenement column
 * @method array findByReferenceConsultation(int $reference_consultation) Return CommonEvenement objects filtered by the reference_consultation column
 * @method array findByReferenceUtilisateur(string $reference_utilisateur) Return CommonEvenement objects filtered by the reference_utilisateur column
 * @method array findByIdService(int $id_service) Return CommonEvenement objects filtered by the id_service column
 * @method array findByOrganisme(string $organisme) Return CommonEvenement objects filtered by the organisme column
 * @method array findByObjetConsultation(string $objet_consultation) Return CommonEvenement objects filtered by the objet_consultation column
 * @method array findByTypeEvenement(string $type_evenement) Return CommonEvenement objects filtered by the type_evenement column
 * @method array findByDateEvenement(string $date_evenement) Return CommonEvenement objects filtered by the date_evenement column
 * @method array findByDateCreation(string $date_creation) Return CommonEvenement objects filtered by the date_creation column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEvenementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEvenementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEvenement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEvenementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEvenementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEvenementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEvenementQuery) {
            return $criteria;
        }
        $query = new CommonEvenementQuery();
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
     * @return   CommonEvenement|CommonEvenement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEvenementPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEvenement A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdEvenement($key, $con = null)
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
     * @return                 CommonEvenement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_evenement`, `reference_consultation`, `reference_utilisateur`, `id_service`, `organisme`, `objet_consultation`, `type_evenement`, `date_evenement`, `date_creation` FROM `Evenement` WHERE `id_evenement` = :p0';
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
            $obj = new CommonEvenement();
            $obj->hydrate($row);
            CommonEvenementPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonEvenement|CommonEvenement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEvenement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEvenementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonEvenementPeer::ID_EVENEMENT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEvenementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonEvenementPeer::ID_EVENEMENT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_evenement column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEvenement(1234); // WHERE id_evenement = 1234
     * $query->filterByIdEvenement(array(12, 34)); // WHERE id_evenement IN (12, 34)
     * $query->filterByIdEvenement(array('min' => 12)); // WHERE id_evenement >= 12
     * $query->filterByIdEvenement(array('max' => 12)); // WHERE id_evenement <= 12
     * </code>
     *
     * @param     mixed $idEvenement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEvenementQuery The current query, for fluid interface
     */
    public function filterByIdEvenement($idEvenement = null, $comparison = null)
    {
        if (is_array($idEvenement)) {
            $useMinMax = false;
            if (isset($idEvenement['min'])) {
                $this->addUsingAlias(CommonEvenementPeer::ID_EVENEMENT, $idEvenement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEvenement['max'])) {
                $this->addUsingAlias(CommonEvenementPeer::ID_EVENEMENT, $idEvenement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEvenementPeer::ID_EVENEMENT, $idEvenement, $comparison);
    }

    /**
     * Filter the query on the reference_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceConsultation(1234); // WHERE reference_consultation = 1234
     * $query->filterByReferenceConsultation(array(12, 34)); // WHERE reference_consultation IN (12, 34)
     * $query->filterByReferenceConsultation(array('min' => 12)); // WHERE reference_consultation >= 12
     * $query->filterByReferenceConsultation(array('max' => 12)); // WHERE reference_consultation <= 12
     * </code>
     *
     * @param     mixed $referenceConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEvenementQuery The current query, for fluid interface
     */
    public function filterByReferenceConsultation($referenceConsultation = null, $comparison = null)
    {
        if (is_array($referenceConsultation)) {
            $useMinMax = false;
            if (isset($referenceConsultation['min'])) {
                $this->addUsingAlias(CommonEvenementPeer::REFERENCE_CONSULTATION, $referenceConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($referenceConsultation['max'])) {
                $this->addUsingAlias(CommonEvenementPeer::REFERENCE_CONSULTATION, $referenceConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEvenementPeer::REFERENCE_CONSULTATION, $referenceConsultation, $comparison);
    }

    /**
     * Filter the query on the reference_utilisateur column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceUtilisateur('fooValue');   // WHERE reference_utilisateur = 'fooValue'
     * $query->filterByReferenceUtilisateur('%fooValue%'); // WHERE reference_utilisateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referenceUtilisateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEvenementQuery The current query, for fluid interface
     */
    public function filterByReferenceUtilisateur($referenceUtilisateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referenceUtilisateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referenceUtilisateur)) {
                $referenceUtilisateur = str_replace('*', '%', $referenceUtilisateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEvenementPeer::REFERENCE_UTILISATEUR, $referenceUtilisateur, $comparison);
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
     * @return CommonEvenementQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonEvenementPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonEvenementPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEvenementPeer::ID_SERVICE, $idService, $comparison);
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
     * @return CommonEvenementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEvenementPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the objet_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetConsultation('fooValue');   // WHERE objet_consultation = 'fooValue'
     * $query->filterByObjetConsultation('%fooValue%'); // WHERE objet_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEvenementQuery The current query, for fluid interface
     */
    public function filterByObjetConsultation($objetConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetConsultation)) {
                $objetConsultation = str_replace('*', '%', $objetConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEvenementPeer::OBJET_CONSULTATION, $objetConsultation, $comparison);
    }

    /**
     * Filter the query on the type_evenement column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEvenement('fooValue');   // WHERE type_evenement = 'fooValue'
     * $query->filterByTypeEvenement('%fooValue%'); // WHERE type_evenement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEvenement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEvenementQuery The current query, for fluid interface
     */
    public function filterByTypeEvenement($typeEvenement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEvenement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEvenement)) {
                $typeEvenement = str_replace('*', '%', $typeEvenement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEvenementPeer::TYPE_EVENEMENT, $typeEvenement, $comparison);
    }

    /**
     * Filter the query on the date_evenement column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEvenement('2011-03-14'); // WHERE date_evenement = '2011-03-14'
     * $query->filterByDateEvenement('now'); // WHERE date_evenement = '2011-03-14'
     * $query->filterByDateEvenement(array('max' => 'yesterday')); // WHERE date_evenement > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEvenement The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEvenementQuery The current query, for fluid interface
     */
    public function filterByDateEvenement($dateEvenement = null, $comparison = null)
    {
        if (is_array($dateEvenement)) {
            $useMinMax = false;
            if (isset($dateEvenement['min'])) {
                $this->addUsingAlias(CommonEvenementPeer::DATE_EVENEMENT, $dateEvenement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEvenement['max'])) {
                $this->addUsingAlias(CommonEvenementPeer::DATE_EVENEMENT, $dateEvenement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEvenementPeer::DATE_EVENEMENT, $dateEvenement, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('2011-03-14'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation('now'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation(array('max' => 'yesterday')); // WHERE date_creation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEvenementQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(CommonEvenementPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(CommonEvenementPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEvenementPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEvenement $commonEvenement Object to remove from the list of results
     *
     * @return CommonEvenementQuery The current query, for fluid interface
     */
    public function prune($commonEvenement = null)
    {
        if ($commonEvenement) {
            $this->addUsingAlias(CommonEvenementPeer::ID_EVENEMENT, $commonEvenement->getIdEvenement(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
