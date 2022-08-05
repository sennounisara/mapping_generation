<?php


/**
 * Base class that represents a query for the 'backup_Ordre_Du_Jour' table.
 *
 * 
 *
 * @method CommonBackupOrdreDuJourQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonBackupOrdreDuJourQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonBackupOrdreDuJourQuery orderByIdCommission($order = Criteria::ASC) Order by the id_commission column
 * @method CommonBackupOrdreDuJourQuery orderByRefConsultation($order = Criteria::ASC) Order by the ref_consultation column
 * @method CommonBackupOrdreDuJourQuery orderByRefLibre($order = Criteria::ASC) Order by the ref_libre column
 * @method CommonBackupOrdreDuJourQuery orderByIdEtape($order = Criteria::ASC) Order by the id_etape column
 * @method CommonBackupOrdreDuJourQuery orderByIntituleOrdreDuJour($order = Criteria::ASC) Order by the intitule_ordre_du_jour column
 * @method CommonBackupOrdreDuJourQuery orderByLotsOdjLibre($order = Criteria::ASC) Order by the lots_odj_libre column
 * @method CommonBackupOrdreDuJourQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 * @method CommonBackupOrdreDuJourQuery orderByTypeProcedureLibre($order = Criteria::ASC) Order by the type_procedure_libre column
 * @method CommonBackupOrdreDuJourQuery orderByDateCloture($order = Criteria::ASC) Order by the date_cloture column
 * @method CommonBackupOrdreDuJourQuery orderByTypeEnv($order = Criteria::ASC) Order by the type_env column
 * @method CommonBackupOrdreDuJourQuery orderBySousPli($order = Criteria::ASC) Order by the sous_pli column
 * @method CommonBackupOrdreDuJourQuery orderByHeure($order = Criteria::ASC) Order by the heure column
 * @method CommonBackupOrdreDuJourQuery orderByEtapeConsultation($order = Criteria::ASC) Order by the etape_consultation column
 * @method CommonBackupOrdreDuJourQuery orderByTypeConsultation($order = Criteria::ASC) Order by the type_consultation column
 * @method CommonBackupOrdreDuJourQuery orderByMinutes($order = Criteria::ASC) Order by the minutes column
 * @method CommonBackupOrdreDuJourQuery orderByService($order = Criteria::ASC) Order by the service column
 * @method CommonBackupOrdreDuJourQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonBackupOrdreDuJourQuery orderByDateDebut($order = Criteria::ASC) Order by the date_debut column
 *
 * @method CommonBackupOrdreDuJourQuery groupById() Group by the id column
 * @method CommonBackupOrdreDuJourQuery groupByOrganisme() Group by the organisme column
 * @method CommonBackupOrdreDuJourQuery groupByIdCommission() Group by the id_commission column
 * @method CommonBackupOrdreDuJourQuery groupByRefConsultation() Group by the ref_consultation column
 * @method CommonBackupOrdreDuJourQuery groupByRefLibre() Group by the ref_libre column
 * @method CommonBackupOrdreDuJourQuery groupByIdEtape() Group by the id_etape column
 * @method CommonBackupOrdreDuJourQuery groupByIntituleOrdreDuJour() Group by the intitule_ordre_du_jour column
 * @method CommonBackupOrdreDuJourQuery groupByLotsOdjLibre() Group by the lots_odj_libre column
 * @method CommonBackupOrdreDuJourQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 * @method CommonBackupOrdreDuJourQuery groupByTypeProcedureLibre() Group by the type_procedure_libre column
 * @method CommonBackupOrdreDuJourQuery groupByDateCloture() Group by the date_cloture column
 * @method CommonBackupOrdreDuJourQuery groupByTypeEnv() Group by the type_env column
 * @method CommonBackupOrdreDuJourQuery groupBySousPli() Group by the sous_pli column
 * @method CommonBackupOrdreDuJourQuery groupByHeure() Group by the heure column
 * @method CommonBackupOrdreDuJourQuery groupByEtapeConsultation() Group by the etape_consultation column
 * @method CommonBackupOrdreDuJourQuery groupByTypeConsultation() Group by the type_consultation column
 * @method CommonBackupOrdreDuJourQuery groupByMinutes() Group by the minutes column
 * @method CommonBackupOrdreDuJourQuery groupByService() Group by the service column
 * @method CommonBackupOrdreDuJourQuery groupByIdService() Group by the id_service column
 * @method CommonBackupOrdreDuJourQuery groupByDateDebut() Group by the date_debut column
 *
 * @method CommonBackupOrdreDuJourQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonBackupOrdreDuJourQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonBackupOrdreDuJourQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonBackupOrdreDuJour findOne(PropelPDO $con = null) Return the first CommonBackupOrdreDuJour matching the query
 * @method CommonBackupOrdreDuJour findOneOrCreate(PropelPDO $con = null) Return the first CommonBackupOrdreDuJour matching the query, or a new CommonBackupOrdreDuJour object populated from the query conditions when no match is found
 *
 * @method CommonBackupOrdreDuJour findOneById(int $id) Return the first CommonBackupOrdreDuJour filtered by the id column
 * @method CommonBackupOrdreDuJour findOneByOrganisme(string $organisme) Return the first CommonBackupOrdreDuJour filtered by the organisme column
 * @method CommonBackupOrdreDuJour findOneByIdCommission(int $id_commission) Return the first CommonBackupOrdreDuJour filtered by the id_commission column
 * @method CommonBackupOrdreDuJour findOneByRefConsultation(string $ref_consultation) Return the first CommonBackupOrdreDuJour filtered by the ref_consultation column
 * @method CommonBackupOrdreDuJour findOneByRefLibre(string $ref_libre) Return the first CommonBackupOrdreDuJour filtered by the ref_libre column
 * @method CommonBackupOrdreDuJour findOneByIdEtape(int $id_etape) Return the first CommonBackupOrdreDuJour filtered by the id_etape column
 * @method CommonBackupOrdreDuJour findOneByIntituleOrdreDuJour(string $intitule_ordre_du_jour) Return the first CommonBackupOrdreDuJour filtered by the intitule_ordre_du_jour column
 * @method CommonBackupOrdreDuJour findOneByLotsOdjLibre(string $lots_odj_libre) Return the first CommonBackupOrdreDuJour filtered by the lots_odj_libre column
 * @method CommonBackupOrdreDuJour findOneByIdTypeProcedure(int $id_type_procedure) Return the first CommonBackupOrdreDuJour filtered by the id_type_procedure column
 * @method CommonBackupOrdreDuJour findOneByTypeProcedureLibre(string $type_procedure_libre) Return the first CommonBackupOrdreDuJour filtered by the type_procedure_libre column
 * @method CommonBackupOrdreDuJour findOneByDateCloture(string $date_cloture) Return the first CommonBackupOrdreDuJour filtered by the date_cloture column
 * @method CommonBackupOrdreDuJour findOneByTypeEnv(int $type_env) Return the first CommonBackupOrdreDuJour filtered by the type_env column
 * @method CommonBackupOrdreDuJour findOneBySousPli(int $sous_pli) Return the first CommonBackupOrdreDuJour filtered by the sous_pli column
 * @method CommonBackupOrdreDuJour findOneByHeure(string $heure) Return the first CommonBackupOrdreDuJour filtered by the heure column
 * @method CommonBackupOrdreDuJour findOneByEtapeConsultation(string $etape_consultation) Return the first CommonBackupOrdreDuJour filtered by the etape_consultation column
 * @method CommonBackupOrdreDuJour findOneByTypeConsultation(string $type_consultation) Return the first CommonBackupOrdreDuJour filtered by the type_consultation column
 * @method CommonBackupOrdreDuJour findOneByMinutes(string $minutes) Return the first CommonBackupOrdreDuJour filtered by the minutes column
 * @method CommonBackupOrdreDuJour findOneByService(string $service) Return the first CommonBackupOrdreDuJour filtered by the service column
 * @method CommonBackupOrdreDuJour findOneByIdService(int $id_service) Return the first CommonBackupOrdreDuJour filtered by the id_service column
 * @method CommonBackupOrdreDuJour findOneByDateDebut(string $date_debut) Return the first CommonBackupOrdreDuJour filtered by the date_debut column
 *
 * @method array findById(int $id) Return CommonBackupOrdreDuJour objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonBackupOrdreDuJour objects filtered by the organisme column
 * @method array findByIdCommission(int $id_commission) Return CommonBackupOrdreDuJour objects filtered by the id_commission column
 * @method array findByRefConsultation(string $ref_consultation) Return CommonBackupOrdreDuJour objects filtered by the ref_consultation column
 * @method array findByRefLibre(string $ref_libre) Return CommonBackupOrdreDuJour objects filtered by the ref_libre column
 * @method array findByIdEtape(int $id_etape) Return CommonBackupOrdreDuJour objects filtered by the id_etape column
 * @method array findByIntituleOrdreDuJour(string $intitule_ordre_du_jour) Return CommonBackupOrdreDuJour objects filtered by the intitule_ordre_du_jour column
 * @method array findByLotsOdjLibre(string $lots_odj_libre) Return CommonBackupOrdreDuJour objects filtered by the lots_odj_libre column
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonBackupOrdreDuJour objects filtered by the id_type_procedure column
 * @method array findByTypeProcedureLibre(string $type_procedure_libre) Return CommonBackupOrdreDuJour objects filtered by the type_procedure_libre column
 * @method array findByDateCloture(string $date_cloture) Return CommonBackupOrdreDuJour objects filtered by the date_cloture column
 * @method array findByTypeEnv(int $type_env) Return CommonBackupOrdreDuJour objects filtered by the type_env column
 * @method array findBySousPli(int $sous_pli) Return CommonBackupOrdreDuJour objects filtered by the sous_pli column
 * @method array findByHeure(string $heure) Return CommonBackupOrdreDuJour objects filtered by the heure column
 * @method array findByEtapeConsultation(string $etape_consultation) Return CommonBackupOrdreDuJour objects filtered by the etape_consultation column
 * @method array findByTypeConsultation(string $type_consultation) Return CommonBackupOrdreDuJour objects filtered by the type_consultation column
 * @method array findByMinutes(string $minutes) Return CommonBackupOrdreDuJour objects filtered by the minutes column
 * @method array findByService(string $service) Return CommonBackupOrdreDuJour objects filtered by the service column
 * @method array findByIdService(int $id_service) Return CommonBackupOrdreDuJour objects filtered by the id_service column
 * @method array findByDateDebut(string $date_debut) Return CommonBackupOrdreDuJour objects filtered by the date_debut column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBackupOrdreDuJourQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonBackupOrdreDuJourQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonBackupOrdreDuJour', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonBackupOrdreDuJourQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonBackupOrdreDuJourQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonBackupOrdreDuJourQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonBackupOrdreDuJourQuery) {
            return $criteria;
        }
        $query = new CommonBackupOrdreDuJourQuery();
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
     * @return   CommonBackupOrdreDuJour|CommonBackupOrdreDuJour[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonBackupOrdreDuJourPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBackupOrdreDuJour A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_commission`, `ref_consultation`, `ref_libre`, `id_etape`, `intitule_ordre_du_jour`, `lots_odj_libre`, `id_type_procedure`, `type_procedure_libre`, `date_cloture`, `type_env`, `sous_pli`, `heure`, `etape_consultation`, `type_consultation`, `minutes`, `service`, `id_service`, `date_debut` FROM `backup_Ordre_Du_Jour` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonBackupOrdreDuJour();
            $obj->hydrate($row);
            CommonBackupOrdreDuJourPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonBackupOrdreDuJour|CommonBackupOrdreDuJour[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonBackupOrdreDuJour[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonBackupOrdreDuJourPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonBackupOrdreDuJourPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID, $id, $comparison);
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
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_commission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommission(1234); // WHERE id_commission = 1234
     * $query->filterByIdCommission(array(12, 34)); // WHERE id_commission IN (12, 34)
     * $query->filterByIdCommission(array('min' => 12)); // WHERE id_commission >= 12
     * $query->filterByIdCommission(array('max' => 12)); // WHERE id_commission <= 12
     * </code>
     *
     * @param     mixed $idCommission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByIdCommission($idCommission = null, $comparison = null)
    {
        if (is_array($idCommission)) {
            $useMinMax = false;
            if (isset($idCommission['min'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_COMMISSION, $idCommission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommission['max'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_COMMISSION, $idCommission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_COMMISSION, $idCommission, $comparison);
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
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::REF_CONSULTATION, $refConsultation, $comparison);
    }

    /**
     * Filter the query on the ref_libre column
     *
     * Example usage:
     * <code>
     * $query->filterByRefLibre('fooValue');   // WHERE ref_libre = 'fooValue'
     * $query->filterByRefLibre('%fooValue%'); // WHERE ref_libre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $refLibre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByRefLibre($refLibre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($refLibre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $refLibre)) {
                $refLibre = str_replace('*', '%', $refLibre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::REF_LIBRE, $refLibre, $comparison);
    }

    /**
     * Filter the query on the id_etape column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtape(1234); // WHERE id_etape = 1234
     * $query->filterByIdEtape(array(12, 34)); // WHERE id_etape IN (12, 34)
     * $query->filterByIdEtape(array('min' => 12)); // WHERE id_etape >= 12
     * $query->filterByIdEtape(array('max' => 12)); // WHERE id_etape <= 12
     * </code>
     *
     * @param     mixed $idEtape The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByIdEtape($idEtape = null, $comparison = null)
    {
        if (is_array($idEtape)) {
            $useMinMax = false;
            if (isset($idEtape['min'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_ETAPE, $idEtape['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtape['max'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_ETAPE, $idEtape['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_ETAPE, $idEtape, $comparison);
    }

    /**
     * Filter the query on the intitule_ordre_du_jour column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleOrdreDuJour('fooValue');   // WHERE intitule_ordre_du_jour = 'fooValue'
     * $query->filterByIntituleOrdreDuJour('%fooValue%'); // WHERE intitule_ordre_du_jour LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleOrdreDuJour The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByIntituleOrdreDuJour($intituleOrdreDuJour = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleOrdreDuJour)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleOrdreDuJour)) {
                $intituleOrdreDuJour = str_replace('*', '%', $intituleOrdreDuJour);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::INTITULE_ORDRE_DU_JOUR, $intituleOrdreDuJour, $comparison);
    }

    /**
     * Filter the query on the lots_odj_libre column
     *
     * Example usage:
     * <code>
     * $query->filterByLotsOdjLibre('fooValue');   // WHERE lots_odj_libre = 'fooValue'
     * $query->filterByLotsOdjLibre('%fooValue%'); // WHERE lots_odj_libre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lotsOdjLibre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByLotsOdjLibre($lotsOdjLibre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lotsOdjLibre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lotsOdjLibre)) {
                $lotsOdjLibre = str_replace('*', '%', $lotsOdjLibre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::LOTS_ODJ_LIBRE, $lotsOdjLibre, $comparison);
    }

    /**
     * Filter the query on the id_type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedure(1234); // WHERE id_type_procedure = 1234
     * $query->filterByIdTypeProcedure(array(12, 34)); // WHERE id_type_procedure IN (12, 34)
     * $query->filterByIdTypeProcedure(array('min' => 12)); // WHERE id_type_procedure >= 12
     * $query->filterByIdTypeProcedure(array('max' => 12)); // WHERE id_type_procedure <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
    }

    /**
     * Filter the query on the type_procedure_libre column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeProcedureLibre('fooValue');   // WHERE type_procedure_libre = 'fooValue'
     * $query->filterByTypeProcedureLibre('%fooValue%'); // WHERE type_procedure_libre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeProcedureLibre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByTypeProcedureLibre($typeProcedureLibre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeProcedureLibre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeProcedureLibre)) {
                $typeProcedureLibre = str_replace('*', '%', $typeProcedureLibre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::TYPE_PROCEDURE_LIBRE, $typeProcedureLibre, $comparison);
    }

    /**
     * Filter the query on the date_cloture column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCloture('2011-03-14'); // WHERE date_cloture = '2011-03-14'
     * $query->filterByDateCloture('now'); // WHERE date_cloture = '2011-03-14'
     * $query->filterByDateCloture(array('max' => 'yesterday')); // WHERE date_cloture > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCloture The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByDateCloture($dateCloture = null, $comparison = null)
    {
        if (is_array($dateCloture)) {
            $useMinMax = false;
            if (isset($dateCloture['min'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::DATE_CLOTURE, $dateCloture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCloture['max'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::DATE_CLOTURE, $dateCloture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::DATE_CLOTURE, $dateCloture, $comparison);
    }

    /**
     * Filter the query on the type_env column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnv(1234); // WHERE type_env = 1234
     * $query->filterByTypeEnv(array(12, 34)); // WHERE type_env IN (12, 34)
     * $query->filterByTypeEnv(array('min' => 12)); // WHERE type_env >= 12
     * $query->filterByTypeEnv(array('max' => 12)); // WHERE type_env <= 12
     * </code>
     *
     * @param     mixed $typeEnv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByTypeEnv($typeEnv = null, $comparison = null)
    {
        if (is_array($typeEnv)) {
            $useMinMax = false;
            if (isset($typeEnv['min'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::TYPE_ENV, $typeEnv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnv['max'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::TYPE_ENV, $typeEnv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::TYPE_ENV, $typeEnv, $comparison);
    }

    /**
     * Filter the query on the sous_pli column
     *
     * Example usage:
     * <code>
     * $query->filterBySousPli(1234); // WHERE sous_pli = 1234
     * $query->filterBySousPli(array(12, 34)); // WHERE sous_pli IN (12, 34)
     * $query->filterBySousPli(array('min' => 12)); // WHERE sous_pli >= 12
     * $query->filterBySousPli(array('max' => 12)); // WHERE sous_pli <= 12
     * </code>
     *
     * @param     mixed $sousPli The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterBySousPli($sousPli = null, $comparison = null)
    {
        if (is_array($sousPli)) {
            $useMinMax = false;
            if (isset($sousPli['min'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::SOUS_PLI, $sousPli['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sousPli['max'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::SOUS_PLI, $sousPli['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::SOUS_PLI, $sousPli, $comparison);
    }

    /**
     * Filter the query on the heure column
     *
     * Example usage:
     * <code>
     * $query->filterByHeure('fooValue');   // WHERE heure = 'fooValue'
     * $query->filterByHeure('%fooValue%'); // WHERE heure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $heure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByHeure($heure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($heure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $heure)) {
                $heure = str_replace('*', '%', $heure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::HEURE, $heure, $comparison);
    }

    /**
     * Filter the query on the etape_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByEtapeConsultation('fooValue');   // WHERE etape_consultation = 'fooValue'
     * $query->filterByEtapeConsultation('%fooValue%'); // WHERE etape_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etapeConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByEtapeConsultation($etapeConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etapeConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etapeConsultation)) {
                $etapeConsultation = str_replace('*', '%', $etapeConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ETAPE_CONSULTATION, $etapeConsultation, $comparison);
    }

    /**
     * Filter the query on the type_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeConsultation('fooValue');   // WHERE type_consultation = 'fooValue'
     * $query->filterByTypeConsultation('%fooValue%'); // WHERE type_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByTypeConsultation($typeConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeConsultation)) {
                $typeConsultation = str_replace('*', '%', $typeConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::TYPE_CONSULTATION, $typeConsultation, $comparison);
    }

    /**
     * Filter the query on the minutes column
     *
     * Example usage:
     * <code>
     * $query->filterByMinutes('fooValue');   // WHERE minutes = 'fooValue'
     * $query->filterByMinutes('%fooValue%'); // WHERE minutes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $minutes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByMinutes($minutes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($minutes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $minutes)) {
                $minutes = str_replace('*', '%', $minutes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::MINUTES, $minutes, $comparison);
    }

    /**
     * Filter the query on the service column
     *
     * Example usage:
     * <code>
     * $query->filterByService('fooValue');   // WHERE service = 'fooValue'
     * $query->filterByService('%fooValue%'); // WHERE service LIKE '%fooValue%'
     * </code>
     *
     * @param     string $service The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByService($service = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($service)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $service)) {
                $service = str_replace('*', '%', $service);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::SERVICE, $service, $comparison);
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
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the date_debut column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebut('fooValue');   // WHERE date_debut = 'fooValue'
     * $query->filterByDateDebut('%fooValue%'); // WHERE date_debut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDebut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function filterByDateDebut($dateDebut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDebut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDebut)) {
                $dateDebut = str_replace('*', '%', $dateDebut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupOrdreDuJourPeer::DATE_DEBUT, $dateDebut, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonBackupOrdreDuJour $commonBackupOrdreDuJour Object to remove from the list of results
     *
     * @return CommonBackupOrdreDuJourQuery The current query, for fluid interface
     */
    public function prune($commonBackupOrdreDuJour = null)
    {
        if ($commonBackupOrdreDuJour) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonBackupOrdreDuJourPeer::ID), $commonBackupOrdreDuJour->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonBackupOrdreDuJourPeer::ORGANISME), $commonBackupOrdreDuJour->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
