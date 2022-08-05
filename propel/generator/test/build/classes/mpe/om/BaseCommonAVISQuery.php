<?php


/**
 * Base class that represents a query for the 'AVIS' table.
 *
 * 
 *
 * @method CommonAVISQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAVISQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAVISQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonAVISQuery orderByAvis($order = Criteria::ASC) Order by the avis column
 * @method CommonAVISQuery orderByIntituleAvis($order = Criteria::ASC) Order by the intitule_avis column
 * @method CommonAVISQuery orderByNomAvis($order = Criteria::ASC) Order by the nom_avis column
 * @method CommonAVISQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonAVISQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonAVISQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonAVISQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonAVISQuery orderByAgentId($order = Criteria::ASC) Order by the agent_id column
 * @method CommonAVISQuery orderByAvisTelechargeable($order = Criteria::ASC) Order by the avis_telechargeable column
 * @method CommonAVISQuery orderByUrl($order = Criteria::ASC) Order by the url column
 * @method CommonAVISQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonAVISQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonAVISQuery orderByDatePub($order = Criteria::ASC) Order by the date_pub column
 * @method CommonAVISQuery orderByTypeDocGenere($order = Criteria::ASC) Order by the type_doc_genere column
 * @method CommonAVISQuery orderByLangue($order = Criteria::ASC) Order by the langue column
 * @method CommonAVISQuery orderByTypeAvisPub($order = Criteria::ASC) Order by the type_avis_pub column
 *
 * @method CommonAVISQuery groupById() Group by the id column
 * @method CommonAVISQuery groupByOrganisme() Group by the organisme column
 * @method CommonAVISQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonAVISQuery groupByAvis() Group by the avis column
 * @method CommonAVISQuery groupByIntituleAvis() Group by the intitule_avis column
 * @method CommonAVISQuery groupByNomAvis() Group by the nom_avis column
 * @method CommonAVISQuery groupByStatut() Group by the statut column
 * @method CommonAVISQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonAVISQuery groupByHorodatage() Group by the horodatage column
 * @method CommonAVISQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonAVISQuery groupByAgentId() Group by the agent_id column
 * @method CommonAVISQuery groupByAvisTelechargeable() Group by the avis_telechargeable column
 * @method CommonAVISQuery groupByUrl() Group by the url column
 * @method CommonAVISQuery groupByType() Group by the type column
 * @method CommonAVISQuery groupByDateCreation() Group by the date_creation column
 * @method CommonAVISQuery groupByDatePub() Group by the date_pub column
 * @method CommonAVISQuery groupByTypeDocGenere() Group by the type_doc_genere column
 * @method CommonAVISQuery groupByLangue() Group by the langue column
 * @method CommonAVISQuery groupByTypeAvisPub() Group by the type_avis_pub column
 *
 * @method CommonAVISQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAVISQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAVISQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAVISQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonAVISQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonAVISQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonAVIS findOne(PropelPDO $con = null) Return the first CommonAVIS matching the query
 * @method CommonAVIS findOneOrCreate(PropelPDO $con = null) Return the first CommonAVIS matching the query, or a new CommonAVIS object populated from the query conditions when no match is found
 *
 * @method CommonAVIS findOneById(int $id) Return the first CommonAVIS filtered by the id column
 * @method CommonAVIS findOneByOrganisme(string $organisme) Return the first CommonAVIS filtered by the organisme column
 * @method CommonAVIS findOneByConsultationRef(int $consultation_ref) Return the first CommonAVIS filtered by the consultation_ref column
 * @method CommonAVIS findOneByAvis(int $avis) Return the first CommonAVIS filtered by the avis column
 * @method CommonAVIS findOneByIntituleAvis(int $intitule_avis) Return the first CommonAVIS filtered by the intitule_avis column
 * @method CommonAVIS findOneByNomAvis(string $nom_avis) Return the first CommonAVIS filtered by the nom_avis column
 * @method CommonAVIS findOneByStatut(string $statut) Return the first CommonAVIS filtered by the statut column
 * @method CommonAVIS findOneByNomFichier(string $nom_fichier) Return the first CommonAVIS filtered by the nom_fichier column
 * @method CommonAVIS findOneByHorodatage(resource $horodatage) Return the first CommonAVIS filtered by the horodatage column
 * @method CommonAVIS findOneByUntrusteddate(string $untrusteddate) Return the first CommonAVIS filtered by the untrusteddate column
 * @method CommonAVIS findOneByAgentId(int $agent_id) Return the first CommonAVIS filtered by the agent_id column
 * @method CommonAVIS findOneByAvisTelechargeable(int $avis_telechargeable) Return the first CommonAVIS filtered by the avis_telechargeable column
 * @method CommonAVIS findOneByUrl(string $url) Return the first CommonAVIS filtered by the url column
 * @method CommonAVIS findOneByType(string $type) Return the first CommonAVIS filtered by the type column
 * @method CommonAVIS findOneByDateCreation(string $date_creation) Return the first CommonAVIS filtered by the date_creation column
 * @method CommonAVIS findOneByDatePub(string $date_pub) Return the first CommonAVIS filtered by the date_pub column
 * @method CommonAVIS findOneByTypeDocGenere(int $type_doc_genere) Return the first CommonAVIS filtered by the type_doc_genere column
 * @method CommonAVIS findOneByLangue(string $langue) Return the first CommonAVIS filtered by the langue column
 * @method CommonAVIS findOneByTypeAvisPub(int $type_avis_pub) Return the first CommonAVIS filtered by the type_avis_pub column
 *
 * @method array findById(int $id) Return CommonAVIS objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonAVIS objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonAVIS objects filtered by the consultation_ref column
 * @method array findByAvis(int $avis) Return CommonAVIS objects filtered by the avis column
 * @method array findByIntituleAvis(int $intitule_avis) Return CommonAVIS objects filtered by the intitule_avis column
 * @method array findByNomAvis(string $nom_avis) Return CommonAVIS objects filtered by the nom_avis column
 * @method array findByStatut(string $statut) Return CommonAVIS objects filtered by the statut column
 * @method array findByNomFichier(string $nom_fichier) Return CommonAVIS objects filtered by the nom_fichier column
 * @method array findByHorodatage(resource $horodatage) Return CommonAVIS objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonAVIS objects filtered by the untrusteddate column
 * @method array findByAgentId(int $agent_id) Return CommonAVIS objects filtered by the agent_id column
 * @method array findByAvisTelechargeable(int $avis_telechargeable) Return CommonAVIS objects filtered by the avis_telechargeable column
 * @method array findByUrl(string $url) Return CommonAVIS objects filtered by the url column
 * @method array findByType(string $type) Return CommonAVIS objects filtered by the type column
 * @method array findByDateCreation(string $date_creation) Return CommonAVIS objects filtered by the date_creation column
 * @method array findByDatePub(string $date_pub) Return CommonAVIS objects filtered by the date_pub column
 * @method array findByTypeDocGenere(int $type_doc_genere) Return CommonAVIS objects filtered by the type_doc_genere column
 * @method array findByLangue(string $langue) Return CommonAVIS objects filtered by the langue column
 * @method array findByTypeAvisPub(int $type_avis_pub) Return CommonAVIS objects filtered by the type_avis_pub column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAVISQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAVISQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAVIS', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAVISQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAVISQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAVISQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAVISQuery) {
            return $criteria;
        }
        $query = new CommonAVISQuery();
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
     * @return   CommonAVIS|CommonAVIS[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAVISPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAVIS A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `avis`, `intitule_avis`, `nom_avis`, `statut`, `nom_fichier`, `horodatage`, `untrusteddate`, `agent_id`, `avis_telechargeable`, `url`, `type`, `date_creation`, `date_pub`, `type_doc_genere`, `langue`, `type_avis_pub` FROM `AVIS` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonAVIS();
            $obj->hydrate($row);
            CommonAVISPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonAVIS|CommonAVIS[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAVIS[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAVISPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAVISPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAVISPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAVISPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAVISPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAVISPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::ID, $id, $comparison);
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
     * @return CommonAVISQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAVISPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonAVISPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonAVISPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the avis column
     *
     * Example usage:
     * <code>
     * $query->filterByAvis(1234); // WHERE avis = 1234
     * $query->filterByAvis(array(12, 34)); // WHERE avis IN (12, 34)
     * $query->filterByAvis(array('min' => 12)); // WHERE avis >= 12
     * $query->filterByAvis(array('max' => 12)); // WHERE avis <= 12
     * </code>
     *
     * @param     mixed $avis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByAvis($avis = null, $comparison = null)
    {
        if (is_array($avis)) {
            $useMinMax = false;
            if (isset($avis['min'])) {
                $this->addUsingAlias(CommonAVISPeer::AVIS, $avis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($avis['max'])) {
                $this->addUsingAlias(CommonAVISPeer::AVIS, $avis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::AVIS, $avis, $comparison);
    }

    /**
     * Filter the query on the intitule_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleAvis(1234); // WHERE intitule_avis = 1234
     * $query->filterByIntituleAvis(array(12, 34)); // WHERE intitule_avis IN (12, 34)
     * $query->filterByIntituleAvis(array('min' => 12)); // WHERE intitule_avis >= 12
     * $query->filterByIntituleAvis(array('max' => 12)); // WHERE intitule_avis <= 12
     * </code>
     *
     * @param     mixed $intituleAvis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByIntituleAvis($intituleAvis = null, $comparison = null)
    {
        if (is_array($intituleAvis)) {
            $useMinMax = false;
            if (isset($intituleAvis['min'])) {
                $this->addUsingAlias(CommonAVISPeer::INTITULE_AVIS, $intituleAvis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($intituleAvis['max'])) {
                $this->addUsingAlias(CommonAVISPeer::INTITULE_AVIS, $intituleAvis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::INTITULE_AVIS, $intituleAvis, $comparison);
    }

    /**
     * Filter the query on the nom_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAvis('fooValue');   // WHERE nom_avis = 'fooValue'
     * $query->filterByNomAvis('%fooValue%'); // WHERE nom_avis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAvis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByNomAvis($nomAvis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAvis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAvis)) {
                $nomAvis = str_replace('*', '%', $nomAvis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::NOM_AVIS, $nomAvis, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE statut = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE statut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut)) {
                $statut = str_replace('*', '%', $statut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonAVISPeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('2011-03-14'); // WHERE untrusteddate = '2011-03-14'
     * $query->filterByUntrusteddate('now'); // WHERE untrusteddate = '2011-03-14'
     * $query->filterByUntrusteddate(array('max' => 'yesterday')); // WHERE untrusteddate > '2011-03-13'
     * </code>
     *
     * @param     mixed $untrusteddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (is_array($untrusteddate)) {
            $useMinMax = false;
            if (isset($untrusteddate['min'])) {
                $this->addUsingAlias(CommonAVISPeer::UNTRUSTEDDATE, $untrusteddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($untrusteddate['max'])) {
                $this->addUsingAlias(CommonAVISPeer::UNTRUSTEDDATE, $untrusteddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query on the agent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentId(1234); // WHERE agent_id = 1234
     * $query->filterByAgentId(array(12, 34)); // WHERE agent_id IN (12, 34)
     * $query->filterByAgentId(array('min' => 12)); // WHERE agent_id >= 12
     * $query->filterByAgentId(array('max' => 12)); // WHERE agent_id <= 12
     * </code>
     *
     * @param     mixed $agentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByAgentId($agentId = null, $comparison = null)
    {
        if (is_array($agentId)) {
            $useMinMax = false;
            if (isset($agentId['min'])) {
                $this->addUsingAlias(CommonAVISPeer::AGENT_ID, $agentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentId['max'])) {
                $this->addUsingAlias(CommonAVISPeer::AGENT_ID, $agentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::AGENT_ID, $agentId, $comparison);
    }

    /**
     * Filter the query on the avis_telechargeable column
     *
     * Example usage:
     * <code>
     * $query->filterByAvisTelechargeable(1234); // WHERE avis_telechargeable = 1234
     * $query->filterByAvisTelechargeable(array(12, 34)); // WHERE avis_telechargeable IN (12, 34)
     * $query->filterByAvisTelechargeable(array('min' => 12)); // WHERE avis_telechargeable >= 12
     * $query->filterByAvisTelechargeable(array('max' => 12)); // WHERE avis_telechargeable <= 12
     * </code>
     *
     * @param     mixed $avisTelechargeable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByAvisTelechargeable($avisTelechargeable = null, $comparison = null)
    {
        if (is_array($avisTelechargeable)) {
            $useMinMax = false;
            if (isset($avisTelechargeable['min'])) {
                $this->addUsingAlias(CommonAVISPeer::AVIS_TELECHARGEABLE, $avisTelechargeable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($avisTelechargeable['max'])) {
                $this->addUsingAlias(CommonAVISPeer::AVIS_TELECHARGEABLE, $avisTelechargeable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::AVIS_TELECHARGEABLE, $avisTelechargeable, $comparison);
    }

    /**
     * Filter the query on the url column
     *
     * Example usage:
     * <code>
     * $query->filterByUrl('fooValue');   // WHERE url = 'fooValue'
     * $query->filterByUrl('%fooValue%'); // WHERE url LIKE '%fooValue%'
     * </code>
     *
     * @param     string $url The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByUrl($url = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($url)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $url)) {
                $url = str_replace('*', '%', $url);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::URL, $url, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::TYPE, $type, $comparison);
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
     * @return CommonAVISQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAVISPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_pub column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePub('fooValue');   // WHERE date_pub = 'fooValue'
     * $query->filterByDatePub('%fooValue%'); // WHERE date_pub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datePub The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByDatePub($datePub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datePub)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datePub)) {
                $datePub = str_replace('*', '%', $datePub);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::DATE_PUB, $datePub, $comparison);
    }

    /**
     * Filter the query on the type_doc_genere column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDocGenere(1234); // WHERE type_doc_genere = 1234
     * $query->filterByTypeDocGenere(array(12, 34)); // WHERE type_doc_genere IN (12, 34)
     * $query->filterByTypeDocGenere(array('min' => 12)); // WHERE type_doc_genere >= 12
     * $query->filterByTypeDocGenere(array('max' => 12)); // WHERE type_doc_genere <= 12
     * </code>
     *
     * @param     mixed $typeDocGenere The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByTypeDocGenere($typeDocGenere = null, $comparison = null)
    {
        if (is_array($typeDocGenere)) {
            $useMinMax = false;
            if (isset($typeDocGenere['min'])) {
                $this->addUsingAlias(CommonAVISPeer::TYPE_DOC_GENERE, $typeDocGenere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeDocGenere['max'])) {
                $this->addUsingAlias(CommonAVISPeer::TYPE_DOC_GENERE, $typeDocGenere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::TYPE_DOC_GENERE, $typeDocGenere, $comparison);
    }

    /**
     * Filter the query on the langue column
     *
     * Example usage:
     * <code>
     * $query->filterByLangue('fooValue');   // WHERE langue = 'fooValue'
     * $query->filterByLangue('%fooValue%'); // WHERE langue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $langue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByLangue($langue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($langue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $langue)) {
                $langue = str_replace('*', '%', $langue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::LANGUE, $langue, $comparison);
    }

    /**
     * Filter the query on the type_avis_pub column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAvisPub(1234); // WHERE type_avis_pub = 1234
     * $query->filterByTypeAvisPub(array(12, 34)); // WHERE type_avis_pub IN (12, 34)
     * $query->filterByTypeAvisPub(array('min' => 12)); // WHERE type_avis_pub >= 12
     * $query->filterByTypeAvisPub(array('max' => 12)); // WHERE type_avis_pub <= 12
     * </code>
     *
     * @param     mixed $typeAvisPub The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function filterByTypeAvisPub($typeAvisPub = null, $comparison = null)
    {
        if (is_array($typeAvisPub)) {
            $useMinMax = false;
            if (isset($typeAvisPub['min'])) {
                $this->addUsingAlias(CommonAVISPeer::TYPE_AVIS_PUB, $typeAvisPub['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeAvisPub['max'])) {
                $this->addUsingAlias(CommonAVISPeer::TYPE_AVIS_PUB, $typeAvisPub['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAVISPeer::TYPE_AVIS_PUB, $typeAvisPub, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAVISQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonAVISPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonAVISPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAVIS $commonAVIS Object to remove from the list of results
     *
     * @return CommonAVISQuery The current query, for fluid interface
     */
    public function prune($commonAVIS = null)
    {
        if ($commonAVIS) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAVISPeer::ID), $commonAVIS->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAVISPeer::ORGANISME), $commonAVIS->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
