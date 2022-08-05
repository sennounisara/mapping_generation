<?php


/**
 * Base class that represents a query for the 'exec_configuration_formulaire' table.
 *
 * 
 *
 * @method CommonExecConfigurationFormulaireQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecConfigurationFormulaireQuery orderByMontantAvance($order = Criteria::ASC) Order by the montant_avance column
 * @method CommonExecConfigurationFormulaireQuery orderByPanalite($order = Criteria::ASC) Order by the panalite column
 * @method CommonExecConfigurationFormulaireQuery orderByDelaiPartiel($order = Criteria::ASC) Order by the delai_partiel column
 * @method CommonExecConfigurationFormulaireQuery orderByOsParPhase($order = Criteria::ASC) Order by the os_par_phase column
 * @method CommonExecConfigurationFormulaireQuery orderByMontantCautionDefinitive($order = Criteria::ASC) Order by the montant_caution_definitive column
 * @method CommonExecConfigurationFormulaireQuery orderByRetenueGarantie($order = Criteria::ASC) Order by the retenue_garantie column
 * @method CommonExecConfigurationFormulaireQuery orderByPeriodeGarantie($order = Criteria::ASC) Order by the periode_garantie column
 * @method CommonExecConfigurationFormulaireQuery orderByDecompositionPhase($order = Criteria::ASC) Order by the decomposition_phase column
 * @method CommonExecConfigurationFormulaireQuery orderByChecklisteLivrable($order = Criteria::ASC) Order by the checkliste_livrable column
 * @method CommonExecConfigurationFormulaireQuery orderByDateAccusee($order = Criteria::ASC) Order by the date_accusee column
 * @method CommonExecConfigurationFormulaireQuery orderByDateNotification($order = Criteria::ASC) Order by the date_notification column
 *
 * @method CommonExecConfigurationFormulaireQuery groupById() Group by the id column
 * @method CommonExecConfigurationFormulaireQuery groupByMontantAvance() Group by the montant_avance column
 * @method CommonExecConfigurationFormulaireQuery groupByPanalite() Group by the panalite column
 * @method CommonExecConfigurationFormulaireQuery groupByDelaiPartiel() Group by the delai_partiel column
 * @method CommonExecConfigurationFormulaireQuery groupByOsParPhase() Group by the os_par_phase column
 * @method CommonExecConfigurationFormulaireQuery groupByMontantCautionDefinitive() Group by the montant_caution_definitive column
 * @method CommonExecConfigurationFormulaireQuery groupByRetenueGarantie() Group by the retenue_garantie column
 * @method CommonExecConfigurationFormulaireQuery groupByPeriodeGarantie() Group by the periode_garantie column
 * @method CommonExecConfigurationFormulaireQuery groupByDecompositionPhase() Group by the decomposition_phase column
 * @method CommonExecConfigurationFormulaireQuery groupByChecklisteLivrable() Group by the checkliste_livrable column
 * @method CommonExecConfigurationFormulaireQuery groupByDateAccusee() Group by the date_accusee column
 * @method CommonExecConfigurationFormulaireQuery groupByDateNotification() Group by the date_notification column
 *
 * @method CommonExecConfigurationFormulaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecConfigurationFormulaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecConfigurationFormulaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecConfigurationFormulaire findOne(PropelPDO $con = null) Return the first CommonExecConfigurationFormulaire matching the query
 * @method CommonExecConfigurationFormulaire findOneOrCreate(PropelPDO $con = null) Return the first CommonExecConfigurationFormulaire matching the query, or a new CommonExecConfigurationFormulaire object populated from the query conditions when no match is found
 *
 * @method CommonExecConfigurationFormulaire findOneByMontantAvance(string $montant_avance) Return the first CommonExecConfigurationFormulaire filtered by the montant_avance column
 * @method CommonExecConfigurationFormulaire findOneByPanalite(string $panalite) Return the first CommonExecConfigurationFormulaire filtered by the panalite column
 * @method CommonExecConfigurationFormulaire findOneByDelaiPartiel(string $delai_partiel) Return the first CommonExecConfigurationFormulaire filtered by the delai_partiel column
 * @method CommonExecConfigurationFormulaire findOneByOsParPhase(string $os_par_phase) Return the first CommonExecConfigurationFormulaire filtered by the os_par_phase column
 * @method CommonExecConfigurationFormulaire findOneByMontantCautionDefinitive(string $montant_caution_definitive) Return the first CommonExecConfigurationFormulaire filtered by the montant_caution_definitive column
 * @method CommonExecConfigurationFormulaire findOneByRetenueGarantie(string $retenue_garantie) Return the first CommonExecConfigurationFormulaire filtered by the retenue_garantie column
 * @method CommonExecConfigurationFormulaire findOneByPeriodeGarantie(string $periode_garantie) Return the first CommonExecConfigurationFormulaire filtered by the periode_garantie column
 * @method CommonExecConfigurationFormulaire findOneByDecompositionPhase(string $decomposition_phase) Return the first CommonExecConfigurationFormulaire filtered by the decomposition_phase column
 * @method CommonExecConfigurationFormulaire findOneByChecklisteLivrable(string $checkliste_livrable) Return the first CommonExecConfigurationFormulaire filtered by the checkliste_livrable column
 * @method CommonExecConfigurationFormulaire findOneByDateAccusee(string $date_accusee) Return the first CommonExecConfigurationFormulaire filtered by the date_accusee column
 * @method CommonExecConfigurationFormulaire findOneByDateNotification(string $date_notification) Return the first CommonExecConfigurationFormulaire filtered by the date_notification column
 *
 * @method array findById(int $id) Return CommonExecConfigurationFormulaire objects filtered by the id column
 * @method array findByMontantAvance(string $montant_avance) Return CommonExecConfigurationFormulaire objects filtered by the montant_avance column
 * @method array findByPanalite(string $panalite) Return CommonExecConfigurationFormulaire objects filtered by the panalite column
 * @method array findByDelaiPartiel(string $delai_partiel) Return CommonExecConfigurationFormulaire objects filtered by the delai_partiel column
 * @method array findByOsParPhase(string $os_par_phase) Return CommonExecConfigurationFormulaire objects filtered by the os_par_phase column
 * @method array findByMontantCautionDefinitive(string $montant_caution_definitive) Return CommonExecConfigurationFormulaire objects filtered by the montant_caution_definitive column
 * @method array findByRetenueGarantie(string $retenue_garantie) Return CommonExecConfigurationFormulaire objects filtered by the retenue_garantie column
 * @method array findByPeriodeGarantie(string $periode_garantie) Return CommonExecConfigurationFormulaire objects filtered by the periode_garantie column
 * @method array findByDecompositionPhase(string $decomposition_phase) Return CommonExecConfigurationFormulaire objects filtered by the decomposition_phase column
 * @method array findByChecklisteLivrable(string $checkliste_livrable) Return CommonExecConfigurationFormulaire objects filtered by the checkliste_livrable column
 * @method array findByDateAccusee(string $date_accusee) Return CommonExecConfigurationFormulaire objects filtered by the date_accusee column
 * @method array findByDateNotification(string $date_notification) Return CommonExecConfigurationFormulaire objects filtered by the date_notification column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecConfigurationFormulaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecConfigurationFormulaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecConfigurationFormulaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecConfigurationFormulaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecConfigurationFormulaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecConfigurationFormulaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecConfigurationFormulaireQuery) {
            return $criteria;
        }
        $query = new CommonExecConfigurationFormulaireQuery();
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
     * @return   CommonExecConfigurationFormulaire|CommonExecConfigurationFormulaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecConfigurationFormulairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecConfigurationFormulaire A model object, or null if the key is not found
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
     * @return                 CommonExecConfigurationFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `montant_avance`, `panalite`, `delai_partiel`, `os_par_phase`, `montant_caution_definitive`, `retenue_garantie`, `periode_garantie`, `decomposition_phase`, `checkliste_livrable`, `date_accusee`, `date_notification` FROM `exec_configuration_formulaire` WHERE `id` = :p0';
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
            $obj = new CommonExecConfigurationFormulaire();
            $obj->hydrate($row);
            CommonExecConfigurationFormulairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecConfigurationFormulaire|CommonExecConfigurationFormulaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecConfigurationFormulaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the montant_avance column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantAvance('fooValue');   // WHERE montant_avance = 'fooValue'
     * $query->filterByMontantAvance('%fooValue%'); // WHERE montant_avance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantAvance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByMontantAvance($montantAvance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantAvance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantAvance)) {
                $montantAvance = str_replace('*', '%', $montantAvance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::MONTANT_AVANCE, $montantAvance, $comparison);
    }

    /**
     * Filter the query on the panalite column
     *
     * Example usage:
     * <code>
     * $query->filterByPanalite('fooValue');   // WHERE panalite = 'fooValue'
     * $query->filterByPanalite('%fooValue%'); // WHERE panalite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $panalite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByPanalite($panalite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($panalite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $panalite)) {
                $panalite = str_replace('*', '%', $panalite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::PANALITE, $panalite, $comparison);
    }

    /**
     * Filter the query on the delai_partiel column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiPartiel('fooValue');   // WHERE delai_partiel = 'fooValue'
     * $query->filterByDelaiPartiel('%fooValue%'); // WHERE delai_partiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delaiPartiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByDelaiPartiel($delaiPartiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delaiPartiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delaiPartiel)) {
                $delaiPartiel = str_replace('*', '%', $delaiPartiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::DELAI_PARTIEL, $delaiPartiel, $comparison);
    }

    /**
     * Filter the query on the os_par_phase column
     *
     * Example usage:
     * <code>
     * $query->filterByOsParPhase('fooValue');   // WHERE os_par_phase = 'fooValue'
     * $query->filterByOsParPhase('%fooValue%'); // WHERE os_par_phase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $osParPhase The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByOsParPhase($osParPhase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($osParPhase)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $osParPhase)) {
                $osParPhase = str_replace('*', '%', $osParPhase);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::OS_PAR_PHASE, $osParPhase, $comparison);
    }

    /**
     * Filter the query on the montant_caution_definitive column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantCautionDefinitive('fooValue');   // WHERE montant_caution_definitive = 'fooValue'
     * $query->filterByMontantCautionDefinitive('%fooValue%'); // WHERE montant_caution_definitive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantCautionDefinitive The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByMontantCautionDefinitive($montantCautionDefinitive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantCautionDefinitive)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantCautionDefinitive)) {
                $montantCautionDefinitive = str_replace('*', '%', $montantCautionDefinitive);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE, $montantCautionDefinitive, $comparison);
    }

    /**
     * Filter the query on the retenue_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByRetenueGarantie('fooValue');   // WHERE retenue_garantie = 'fooValue'
     * $query->filterByRetenueGarantie('%fooValue%'); // WHERE retenue_garantie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $retenueGarantie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByRetenueGarantie($retenueGarantie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($retenueGarantie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $retenueGarantie)) {
                $retenueGarantie = str_replace('*', '%', $retenueGarantie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE, $retenueGarantie, $comparison);
    }

    /**
     * Filter the query on the periode_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodeGarantie('fooValue');   // WHERE periode_garantie = 'fooValue'
     * $query->filterByPeriodeGarantie('%fooValue%'); // WHERE periode_garantie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $periodeGarantie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByPeriodeGarantie($periodeGarantie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($periodeGarantie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $periodeGarantie)) {
                $periodeGarantie = str_replace('*', '%', $periodeGarantie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE, $periodeGarantie, $comparison);
    }

    /**
     * Filter the query on the decomposition_phase column
     *
     * Example usage:
     * <code>
     * $query->filterByDecompositionPhase('fooValue');   // WHERE decomposition_phase = 'fooValue'
     * $query->filterByDecompositionPhase('%fooValue%'); // WHERE decomposition_phase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decompositionPhase The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByDecompositionPhase($decompositionPhase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decompositionPhase)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decompositionPhase)) {
                $decompositionPhase = str_replace('*', '%', $decompositionPhase);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE, $decompositionPhase, $comparison);
    }

    /**
     * Filter the query on the checkliste_livrable column
     *
     * Example usage:
     * <code>
     * $query->filterByChecklisteLivrable('fooValue');   // WHERE checkliste_livrable = 'fooValue'
     * $query->filterByChecklisteLivrable('%fooValue%'); // WHERE checkliste_livrable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $checklisteLivrable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByChecklisteLivrable($checklisteLivrable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($checklisteLivrable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $checklisteLivrable)) {
                $checklisteLivrable = str_replace('*', '%', $checklisteLivrable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE, $checklisteLivrable, $comparison);
    }

    /**
     * Filter the query on the date_accusee column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAccusee('fooValue');   // WHERE date_accusee = 'fooValue'
     * $query->filterByDateAccusee('%fooValue%'); // WHERE date_accusee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAccusee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByDateAccusee($dateAccusee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAccusee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAccusee)) {
                $dateAccusee = str_replace('*', '%', $dateAccusee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::DATE_ACCUSEE, $dateAccusee, $comparison);
    }

    /**
     * Filter the query on the date_notification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateNotification('fooValue');   // WHERE date_notification = 'fooValue'
     * $query->filterByDateNotification('%fooValue%'); // WHERE date_notification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateNotification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByDateNotification($dateNotification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateNotification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateNotification)) {
                $dateNotification = str_replace('*', '%', $dateNotification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION, $dateNotification, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecConfigurationFormulaire $commonExecConfigurationFormulaire Object to remove from the list of results
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function prune($commonExecConfigurationFormulaire = null)
    {
        if ($commonExecConfigurationFormulaire) {
            $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $commonExecConfigurationFormulaire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
