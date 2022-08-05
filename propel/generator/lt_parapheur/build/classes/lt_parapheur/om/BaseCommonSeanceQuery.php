<?php


/**
 * Base class that represents a query for the 'seance' table.
 *
 * 
 *
 * @method CommonSeanceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonSeanceQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonSeanceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonSeanceQuery orderByReport($order = Criteria::ASC) Order by the report column
 * @method CommonSeanceQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonSeanceQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonSeanceQuery orderByOuvertureEnvCandidature($order = Criteria::ASC) Order by the ouverture_env_candidature column
 * @method CommonSeanceQuery orderByOuvertureEnvOffreTechnique($order = Criteria::ASC) Order by the ouverture_env_offre_technique column
 * @method CommonSeanceQuery orderByOuvertureEnvOffreFinanciere($order = Criteria::ASC) Order by the ouverture_env_offre_financiere column
 * @method CommonSeanceQuery orderByJugementEnv1Administratif($order = Criteria::ASC) Order by the jugement_env1_administratif column
 * @method CommonSeanceQuery orderByJugementEnv1Technique($order = Criteria::ASC) Order by the jugement_env1_technique column
 * @method CommonSeanceQuery orderByJugementEnv1Echantillon($order = Criteria::ASC) Order by the jugement_env1_echantillon column
 * @method CommonSeanceQuery orderByJugementOffreTechnique($order = Criteria::ASC) Order by the jugement_offre_technique column
 * @method CommonSeanceQuery orderByJugementOffreFinanciere($order = Criteria::ASC) Order by the jugement_offre_financiere column
 * @method CommonSeanceQuery orderByJustificatif($order = Criteria::ASC) Order by the justificatif column
 * @method CommonSeanceQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonSeanceQuery orderByIdBlobPv($order = Criteria::ASC) Order by the id_blob_pv column
 *
 * @method CommonSeanceQuery groupById() Group by the id column
 * @method CommonSeanceQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonSeanceQuery groupByOrganisme() Group by the organisme column
 * @method CommonSeanceQuery groupByReport() Group by the report column
 * @method CommonSeanceQuery groupByDate() Group by the date column
 * @method CommonSeanceQuery groupByType() Group by the type column
 * @method CommonSeanceQuery groupByOuvertureEnvCandidature() Group by the ouverture_env_candidature column
 * @method CommonSeanceQuery groupByOuvertureEnvOffreTechnique() Group by the ouverture_env_offre_technique column
 * @method CommonSeanceQuery groupByOuvertureEnvOffreFinanciere() Group by the ouverture_env_offre_financiere column
 * @method CommonSeanceQuery groupByJugementEnv1Administratif() Group by the jugement_env1_administratif column
 * @method CommonSeanceQuery groupByJugementEnv1Technique() Group by the jugement_env1_technique column
 * @method CommonSeanceQuery groupByJugementEnv1Echantillon() Group by the jugement_env1_echantillon column
 * @method CommonSeanceQuery groupByJugementOffreTechnique() Group by the jugement_offre_technique column
 * @method CommonSeanceQuery groupByJugementOffreFinanciere() Group by the jugement_offre_financiere column
 * @method CommonSeanceQuery groupByJustificatif() Group by the justificatif column
 * @method CommonSeanceQuery groupByStatut() Group by the statut column
 * @method CommonSeanceQuery groupByIdBlobPv() Group by the id_blob_pv column
 *
 * @method CommonSeanceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonSeanceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonSeanceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonSeance findOne(PropelPDO $con = null) Return the first CommonSeance matching the query
 * @method CommonSeance findOneOrCreate(PropelPDO $con = null) Return the first CommonSeance matching the query, or a new CommonSeance object populated from the query conditions when no match is found
 *
 * @method CommonSeance findOneByConsultationRef(int $consultation_ref) Return the first CommonSeance filtered by the consultation_ref column
 * @method CommonSeance findOneByOrganisme(string $organisme) Return the first CommonSeance filtered by the organisme column
 * @method CommonSeance findOneByReport(string $report) Return the first CommonSeance filtered by the report column
 * @method CommonSeance findOneByDate(string $date) Return the first CommonSeance filtered by the date column
 * @method CommonSeance findOneByType(string $type) Return the first CommonSeance filtered by the type column
 * @method CommonSeance findOneByOuvertureEnvCandidature(string $ouverture_env_candidature) Return the first CommonSeance filtered by the ouverture_env_candidature column
 * @method CommonSeance findOneByOuvertureEnvOffreTechnique(string $ouverture_env_offre_technique) Return the first CommonSeance filtered by the ouverture_env_offre_technique column
 * @method CommonSeance findOneByOuvertureEnvOffreFinanciere(string $ouverture_env_offre_financiere) Return the first CommonSeance filtered by the ouverture_env_offre_financiere column
 * @method CommonSeance findOneByJugementEnv1Administratif(string $jugement_env1_administratif) Return the first CommonSeance filtered by the jugement_env1_administratif column
 * @method CommonSeance findOneByJugementEnv1Technique(string $jugement_env1_technique) Return the first CommonSeance filtered by the jugement_env1_technique column
 * @method CommonSeance findOneByJugementEnv1Echantillon(string $jugement_env1_echantillon) Return the first CommonSeance filtered by the jugement_env1_echantillon column
 * @method CommonSeance findOneByJugementOffreTechnique(string $jugement_offre_technique) Return the first CommonSeance filtered by the jugement_offre_technique column
 * @method CommonSeance findOneByJugementOffreFinanciere(string $jugement_offre_financiere) Return the first CommonSeance filtered by the jugement_offre_financiere column
 * @method CommonSeance findOneByJustificatif(string $justificatif) Return the first CommonSeance filtered by the justificatif column
 * @method CommonSeance findOneByStatut(int $statut) Return the first CommonSeance filtered by the statut column
 * @method CommonSeance findOneByIdBlobPv(int $id_blob_pv) Return the first CommonSeance filtered by the id_blob_pv column
 *
 * @method array findById(int $id) Return CommonSeance objects filtered by the id column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonSeance objects filtered by the consultation_ref column
 * @method array findByOrganisme(string $organisme) Return CommonSeance objects filtered by the organisme column
 * @method array findByReport(string $report) Return CommonSeance objects filtered by the report column
 * @method array findByDate(string $date) Return CommonSeance objects filtered by the date column
 * @method array findByType(string $type) Return CommonSeance objects filtered by the type column
 * @method array findByOuvertureEnvCandidature(string $ouverture_env_candidature) Return CommonSeance objects filtered by the ouverture_env_candidature column
 * @method array findByOuvertureEnvOffreTechnique(string $ouverture_env_offre_technique) Return CommonSeance objects filtered by the ouverture_env_offre_technique column
 * @method array findByOuvertureEnvOffreFinanciere(string $ouverture_env_offre_financiere) Return CommonSeance objects filtered by the ouverture_env_offre_financiere column
 * @method array findByJugementEnv1Administratif(string $jugement_env1_administratif) Return CommonSeance objects filtered by the jugement_env1_administratif column
 * @method array findByJugementEnv1Technique(string $jugement_env1_technique) Return CommonSeance objects filtered by the jugement_env1_technique column
 * @method array findByJugementEnv1Echantillon(string $jugement_env1_echantillon) Return CommonSeance objects filtered by the jugement_env1_echantillon column
 * @method array findByJugementOffreTechnique(string $jugement_offre_technique) Return CommonSeance objects filtered by the jugement_offre_technique column
 * @method array findByJugementOffreFinanciere(string $jugement_offre_financiere) Return CommonSeance objects filtered by the jugement_offre_financiere column
 * @method array findByJustificatif(string $justificatif) Return CommonSeance objects filtered by the justificatif column
 * @method array findByStatut(int $statut) Return CommonSeance objects filtered by the statut column
 * @method array findByIdBlobPv(int $id_blob_pv) Return CommonSeance objects filtered by the id_blob_pv column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonSeanceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonSeanceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonSeance', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonSeanceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonSeanceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonSeanceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonSeanceQuery) {
            return $criteria;
        }
        $query = new CommonSeanceQuery();
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
     * @return   CommonSeance|CommonSeance[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonSeancePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSeance A model object, or null if the key is not found
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
     * @return                 CommonSeance A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `consultation_ref`, `organisme`, `report`, `date`, `type`, `ouverture_env_candidature`, `ouverture_env_offre_technique`, `ouverture_env_offre_financiere`, `jugement_env1_administratif`, `jugement_env1_technique`, `jugement_env1_echantillon`, `jugement_offre_technique`, `jugement_offre_financiere`, `justificatif`, `statut`, `id_blob_pv` FROM `seance` WHERE `id` = :p0';
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
            $obj = new CommonSeance();
            $obj->hydrate($row);
            CommonSeancePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonSeance|CommonSeance[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonSeance[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonSeancePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonSeancePeer::ID, $keys, Criteria::IN);
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
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonSeancePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonSeancePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::ID, $id, $comparison);
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
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonSeancePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonSeancePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return CommonSeanceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSeancePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the report column
     *
     * Example usage:
     * <code>
     * $query->filterByReport('fooValue');   // WHERE report = 'fooValue'
     * $query->filterByReport('%fooValue%'); // WHERE report LIKE '%fooValue%'
     * </code>
     *
     * @param     string $report The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByReport($report = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($report)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $report)) {
                $report = str_replace('*', '%', $report);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::REPORT, $report, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CommonSeancePeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CommonSeancePeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::DATE, $date, $comparison);
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
     * @return CommonSeanceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSeancePeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the ouverture_env_candidature column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvertureEnvCandidature('fooValue');   // WHERE ouverture_env_candidature = 'fooValue'
     * $query->filterByOuvertureEnvCandidature('%fooValue%'); // WHERE ouverture_env_candidature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvertureEnvCandidature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByOuvertureEnvCandidature($ouvertureEnvCandidature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvertureEnvCandidature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvertureEnvCandidature)) {
                $ouvertureEnvCandidature = str_replace('*', '%', $ouvertureEnvCandidature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::OUVERTURE_ENV_CANDIDATURE, $ouvertureEnvCandidature, $comparison);
    }

    /**
     * Filter the query on the ouverture_env_offre_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvertureEnvOffreTechnique('fooValue');   // WHERE ouverture_env_offre_technique = 'fooValue'
     * $query->filterByOuvertureEnvOffreTechnique('%fooValue%'); // WHERE ouverture_env_offre_technique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvertureEnvOffreTechnique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByOuvertureEnvOffreTechnique($ouvertureEnvOffreTechnique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvertureEnvOffreTechnique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvertureEnvOffreTechnique)) {
                $ouvertureEnvOffreTechnique = str_replace('*', '%', $ouvertureEnvOffreTechnique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::OUVERTURE_ENV_OFFRE_TECHNIQUE, $ouvertureEnvOffreTechnique, $comparison);
    }

    /**
     * Filter the query on the ouverture_env_offre_financiere column
     *
     * Example usage:
     * <code>
     * $query->filterByOuvertureEnvOffreFinanciere('fooValue');   // WHERE ouverture_env_offre_financiere = 'fooValue'
     * $query->filterByOuvertureEnvOffreFinanciere('%fooValue%'); // WHERE ouverture_env_offre_financiere LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ouvertureEnvOffreFinanciere The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByOuvertureEnvOffreFinanciere($ouvertureEnvOffreFinanciere = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ouvertureEnvOffreFinanciere)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ouvertureEnvOffreFinanciere)) {
                $ouvertureEnvOffreFinanciere = str_replace('*', '%', $ouvertureEnvOffreFinanciere);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::OUVERTURE_ENV_OFFRE_FINANCIERE, $ouvertureEnvOffreFinanciere, $comparison);
    }

    /**
     * Filter the query on the jugement_env1_administratif column
     *
     * Example usage:
     * <code>
     * $query->filterByJugementEnv1Administratif('fooValue');   // WHERE jugement_env1_administratif = 'fooValue'
     * $query->filterByJugementEnv1Administratif('%fooValue%'); // WHERE jugement_env1_administratif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jugementEnv1Administratif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByJugementEnv1Administratif($jugementEnv1Administratif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jugementEnv1Administratif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jugementEnv1Administratif)) {
                $jugementEnv1Administratif = str_replace('*', '%', $jugementEnv1Administratif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::JUGEMENT_ENV1_ADMINISTRATIF, $jugementEnv1Administratif, $comparison);
    }

    /**
     * Filter the query on the jugement_env1_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByJugementEnv1Technique('fooValue');   // WHERE jugement_env1_technique = 'fooValue'
     * $query->filterByJugementEnv1Technique('%fooValue%'); // WHERE jugement_env1_technique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jugementEnv1Technique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByJugementEnv1Technique($jugementEnv1Technique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jugementEnv1Technique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jugementEnv1Technique)) {
                $jugementEnv1Technique = str_replace('*', '%', $jugementEnv1Technique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::JUGEMENT_ENV1_TECHNIQUE, $jugementEnv1Technique, $comparison);
    }

    /**
     * Filter the query on the jugement_env1_echantillon column
     *
     * Example usage:
     * <code>
     * $query->filterByJugementEnv1Echantillon('fooValue');   // WHERE jugement_env1_echantillon = 'fooValue'
     * $query->filterByJugementEnv1Echantillon('%fooValue%'); // WHERE jugement_env1_echantillon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jugementEnv1Echantillon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByJugementEnv1Echantillon($jugementEnv1Echantillon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jugementEnv1Echantillon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jugementEnv1Echantillon)) {
                $jugementEnv1Echantillon = str_replace('*', '%', $jugementEnv1Echantillon);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::JUGEMENT_ENV1_ECHANTILLON, $jugementEnv1Echantillon, $comparison);
    }

    /**
     * Filter the query on the jugement_offre_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByJugementOffreTechnique('fooValue');   // WHERE jugement_offre_technique = 'fooValue'
     * $query->filterByJugementOffreTechnique('%fooValue%'); // WHERE jugement_offre_technique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jugementOffreTechnique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByJugementOffreTechnique($jugementOffreTechnique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jugementOffreTechnique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jugementOffreTechnique)) {
                $jugementOffreTechnique = str_replace('*', '%', $jugementOffreTechnique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::JUGEMENT_OFFRE_TECHNIQUE, $jugementOffreTechnique, $comparison);
    }

    /**
     * Filter the query on the jugement_offre_financiere column
     *
     * Example usage:
     * <code>
     * $query->filterByJugementOffreFinanciere('fooValue');   // WHERE jugement_offre_financiere = 'fooValue'
     * $query->filterByJugementOffreFinanciere('%fooValue%'); // WHERE jugement_offre_financiere LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jugementOffreFinanciere The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByJugementOffreFinanciere($jugementOffreFinanciere = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jugementOffreFinanciere)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jugementOffreFinanciere)) {
                $jugementOffreFinanciere = str_replace('*', '%', $jugementOffreFinanciere);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::JUGEMENT_OFFRE_FINANCIERE, $jugementOffreFinanciere, $comparison);
    }

    /**
     * Filter the query on the justificatif column
     *
     * Example usage:
     * <code>
     * $query->filterByJustificatif('fooValue');   // WHERE justificatif = 'fooValue'
     * $query->filterByJustificatif('%fooValue%'); // WHERE justificatif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $justificatif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByJustificatif($justificatif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($justificatif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $justificatif)) {
                $justificatif = str_replace('*', '%', $justificatif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::JUSTIFICATIF, $justificatif, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonSeancePeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonSeancePeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the id_blob_pv column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobPv(1234); // WHERE id_blob_pv = 1234
     * $query->filterByIdBlobPv(array(12, 34)); // WHERE id_blob_pv IN (12, 34)
     * $query->filterByIdBlobPv(array('min' => 12)); // WHERE id_blob_pv >= 12
     * $query->filterByIdBlobPv(array('max' => 12)); // WHERE id_blob_pv <= 12
     * </code>
     *
     * @param     mixed $idBlobPv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function filterByIdBlobPv($idBlobPv = null, $comparison = null)
    {
        if (is_array($idBlobPv)) {
            $useMinMax = false;
            if (isset($idBlobPv['min'])) {
                $this->addUsingAlias(CommonSeancePeer::ID_BLOB_PV, $idBlobPv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobPv['max'])) {
                $this->addUsingAlias(CommonSeancePeer::ID_BLOB_PV, $idBlobPv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSeancePeer::ID_BLOB_PV, $idBlobPv, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonSeance $commonSeance Object to remove from the list of results
     *
     * @return CommonSeanceQuery The current query, for fluid interface
     */
    public function prune($commonSeance = null)
    {
        if ($commonSeance) {
            $this->addUsingAlias(CommonSeancePeer::ID, $commonSeance->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
