<?php


/**
 * Base class that represents a query for the 'Marche' table.
 *
 * 
 *
 * @method CommonMarcheQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonMarcheQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonMarcheQuery orderByIdmarchetranchebudgetaire($order = Criteria::ASC) Order by the idMarcheTrancheBudgetaire column
 * @method CommonMarcheQuery orderByNumeromarcheannee($order = Criteria::ASC) Order by the numeroMarcheAnnee column
 * @method CommonMarcheQuery orderByIdservice($order = Criteria::ASC) Order by the idService column
 * @method CommonMarcheQuery orderByNomattributaire($order = Criteria::ASC) Order by the nomAttributaire column
 * @method CommonMarcheQuery orderByDatenotification($order = Criteria::ASC) Order by the dateNotification column
 * @method CommonMarcheQuery orderByCodepostal($order = Criteria::ASC) Order by the codePostal column
 * @method CommonMarcheQuery orderByNaturemarche($order = Criteria::ASC) Order by the natureMarche column
 * @method CommonMarcheQuery orderByObjetmarche($order = Criteria::ASC) Order by the objetMarche column
 * @method CommonMarcheQuery orderByMontantmarche($order = Criteria::ASC) Order by the montantMarche column
 * @method CommonMarcheQuery orderByValide($order = Criteria::ASC) Order by the valide column
 * @method CommonMarcheQuery orderByIsmanuel($order = Criteria::ASC) Order by the isManuel column
 * @method CommonMarcheQuery orderByPmepmi($order = Criteria::ASC) Order by the pmePmi column
 * @method CommonMarcheQuery orderByIdDecisionEnveloppe($order = Criteria::ASC) Order by the id_decision_enveloppe column
 * @method CommonMarcheQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonMarcheQuery orderByAcronymepaysAttributaire($order = Criteria::ASC) Order by the acronymePays_Attributaire column
 * @method CommonMarcheQuery orderByPaysAttributaire($order = Criteria::ASC) Order by the pays_Attributaire column
 * @method CommonMarcheQuery orderBySirenAttributaire($order = Criteria::ASC) Order by the siren_Attributaire column
 * @method CommonMarcheQuery orderByNicAttributaire($order = Criteria::ASC) Order by the nic_Attributaire column
 * @method CommonMarcheQuery orderByIdentifiantnationalAttributaire($order = Criteria::ASC) Order by the identifiantNational_Attributaire column
 * @method CommonMarcheQuery orderByRcVilleAttributaire($order = Criteria::ASC) Order by the rc_ville_attributaire column
 * @method CommonMarcheQuery orderByRcNumAttributaire($order = Criteria::ASC) Order by the rc_num_attributaire column
 *
 * @method CommonMarcheQuery groupById() Group by the id column
 * @method CommonMarcheQuery groupByOrganisme() Group by the organisme column
 * @method CommonMarcheQuery groupByIdmarchetranchebudgetaire() Group by the idMarcheTrancheBudgetaire column
 * @method CommonMarcheQuery groupByNumeromarcheannee() Group by the numeroMarcheAnnee column
 * @method CommonMarcheQuery groupByIdservice() Group by the idService column
 * @method CommonMarcheQuery groupByNomattributaire() Group by the nomAttributaire column
 * @method CommonMarcheQuery groupByDatenotification() Group by the dateNotification column
 * @method CommonMarcheQuery groupByCodepostal() Group by the codePostal column
 * @method CommonMarcheQuery groupByNaturemarche() Group by the natureMarche column
 * @method CommonMarcheQuery groupByObjetmarche() Group by the objetMarche column
 * @method CommonMarcheQuery groupByMontantmarche() Group by the montantMarche column
 * @method CommonMarcheQuery groupByValide() Group by the valide column
 * @method CommonMarcheQuery groupByIsmanuel() Group by the isManuel column
 * @method CommonMarcheQuery groupByPmepmi() Group by the pmePmi column
 * @method CommonMarcheQuery groupByIdDecisionEnveloppe() Group by the id_decision_enveloppe column
 * @method CommonMarcheQuery groupByVille() Group by the ville column
 * @method CommonMarcheQuery groupByAcronymepaysAttributaire() Group by the acronymePays_Attributaire column
 * @method CommonMarcheQuery groupByPaysAttributaire() Group by the pays_Attributaire column
 * @method CommonMarcheQuery groupBySirenAttributaire() Group by the siren_Attributaire column
 * @method CommonMarcheQuery groupByNicAttributaire() Group by the nic_Attributaire column
 * @method CommonMarcheQuery groupByIdentifiantnationalAttributaire() Group by the identifiantNational_Attributaire column
 * @method CommonMarcheQuery groupByRcVilleAttributaire() Group by the rc_ville_attributaire column
 * @method CommonMarcheQuery groupByRcNumAttributaire() Group by the rc_num_attributaire column
 *
 * @method CommonMarcheQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonMarcheQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonMarcheQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonMarche findOne(PropelPDO $con = null) Return the first CommonMarche matching the query
 * @method CommonMarche findOneOrCreate(PropelPDO $con = null) Return the first CommonMarche matching the query, or a new CommonMarche object populated from the query conditions when no match is found
 *
 * @method CommonMarche findOneById(int $id) Return the first CommonMarche filtered by the id column
 * @method CommonMarche findOneByOrganisme(string $organisme) Return the first CommonMarche filtered by the organisme column
 * @method CommonMarche findOneByIdmarchetranchebudgetaire(int $idMarcheTrancheBudgetaire) Return the first CommonMarche filtered by the idMarcheTrancheBudgetaire column
 * @method CommonMarche findOneByNumeromarcheannee(int $numeroMarcheAnnee) Return the first CommonMarche filtered by the numeroMarcheAnnee column
 * @method CommonMarche findOneByIdservice(int $idService) Return the first CommonMarche filtered by the idService column
 * @method CommonMarche findOneByNomattributaire(string $nomAttributaire) Return the first CommonMarche filtered by the nomAttributaire column
 * @method CommonMarche findOneByDatenotification(string $dateNotification) Return the first CommonMarche filtered by the dateNotification column
 * @method CommonMarche findOneByCodepostal(string $codePostal) Return the first CommonMarche filtered by the codePostal column
 * @method CommonMarche findOneByNaturemarche(string $natureMarche) Return the first CommonMarche filtered by the natureMarche column
 * @method CommonMarche findOneByObjetmarche(string $objetMarche) Return the first CommonMarche filtered by the objetMarche column
 * @method CommonMarche findOneByMontantmarche(string $montantMarche) Return the first CommonMarche filtered by the montantMarche column
 * @method CommonMarche findOneByValide(string $valide) Return the first CommonMarche filtered by the valide column
 * @method CommonMarche findOneByIsmanuel(string $isManuel) Return the first CommonMarche filtered by the isManuel column
 * @method CommonMarche findOneByPmepmi(int $pmePmi) Return the first CommonMarche filtered by the pmePmi column
 * @method CommonMarche findOneByIdDecisionEnveloppe(int $id_decision_enveloppe) Return the first CommonMarche filtered by the id_decision_enveloppe column
 * @method CommonMarche findOneByVille(string $ville) Return the first CommonMarche filtered by the ville column
 * @method CommonMarche findOneByAcronymepaysAttributaire(string $acronymePays_Attributaire) Return the first CommonMarche filtered by the acronymePays_Attributaire column
 * @method CommonMarche findOneByPaysAttributaire(string $pays_Attributaire) Return the first CommonMarche filtered by the pays_Attributaire column
 * @method CommonMarche findOneBySirenAttributaire(string $siren_Attributaire) Return the first CommonMarche filtered by the siren_Attributaire column
 * @method CommonMarche findOneByNicAttributaire(string $nic_Attributaire) Return the first CommonMarche filtered by the nic_Attributaire column
 * @method CommonMarche findOneByIdentifiantnationalAttributaire(string $identifiantNational_Attributaire) Return the first CommonMarche filtered by the identifiantNational_Attributaire column
 * @method CommonMarche findOneByRcVilleAttributaire(string $rc_ville_attributaire) Return the first CommonMarche filtered by the rc_ville_attributaire column
 * @method CommonMarche findOneByRcNumAttributaire(string $rc_num_attributaire) Return the first CommonMarche filtered by the rc_num_attributaire column
 *
 * @method array findById(int $id) Return CommonMarche objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonMarche objects filtered by the organisme column
 * @method array findByIdmarchetranchebudgetaire(int $idMarcheTrancheBudgetaire) Return CommonMarche objects filtered by the idMarcheTrancheBudgetaire column
 * @method array findByNumeromarcheannee(int $numeroMarcheAnnee) Return CommonMarche objects filtered by the numeroMarcheAnnee column
 * @method array findByIdservice(int $idService) Return CommonMarche objects filtered by the idService column
 * @method array findByNomattributaire(string $nomAttributaire) Return CommonMarche objects filtered by the nomAttributaire column
 * @method array findByDatenotification(string $dateNotification) Return CommonMarche objects filtered by the dateNotification column
 * @method array findByCodepostal(string $codePostal) Return CommonMarche objects filtered by the codePostal column
 * @method array findByNaturemarche(string $natureMarche) Return CommonMarche objects filtered by the natureMarche column
 * @method array findByObjetmarche(string $objetMarche) Return CommonMarche objects filtered by the objetMarche column
 * @method array findByMontantmarche(string $montantMarche) Return CommonMarche objects filtered by the montantMarche column
 * @method array findByValide(string $valide) Return CommonMarche objects filtered by the valide column
 * @method array findByIsmanuel(string $isManuel) Return CommonMarche objects filtered by the isManuel column
 * @method array findByPmepmi(int $pmePmi) Return CommonMarche objects filtered by the pmePmi column
 * @method array findByIdDecisionEnveloppe(int $id_decision_enveloppe) Return CommonMarche objects filtered by the id_decision_enveloppe column
 * @method array findByVille(string $ville) Return CommonMarche objects filtered by the ville column
 * @method array findByAcronymepaysAttributaire(string $acronymePays_Attributaire) Return CommonMarche objects filtered by the acronymePays_Attributaire column
 * @method array findByPaysAttributaire(string $pays_Attributaire) Return CommonMarche objects filtered by the pays_Attributaire column
 * @method array findBySirenAttributaire(string $siren_Attributaire) Return CommonMarche objects filtered by the siren_Attributaire column
 * @method array findByNicAttributaire(string $nic_Attributaire) Return CommonMarche objects filtered by the nic_Attributaire column
 * @method array findByIdentifiantnationalAttributaire(string $identifiantNational_Attributaire) Return CommonMarche objects filtered by the identifiantNational_Attributaire column
 * @method array findByRcVilleAttributaire(string $rc_ville_attributaire) Return CommonMarche objects filtered by the rc_ville_attributaire column
 * @method array findByRcNumAttributaire(string $rc_num_attributaire) Return CommonMarche objects filtered by the rc_num_attributaire column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonMarcheQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonMarcheQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonMarche', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonMarcheQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonMarcheQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonMarcheQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonMarcheQuery) {
            return $criteria;
        }
        $query = new CommonMarcheQuery();
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
     * @return   CommonMarche|CommonMarche[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonMarchePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonMarchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonMarche A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `idMarcheTrancheBudgetaire`, `numeroMarcheAnnee`, `idService`, `nomAttributaire`, `dateNotification`, `codePostal`, `natureMarche`, `objetMarche`, `montantMarche`, `valide`, `isManuel`, `pmePmi`, `id_decision_enveloppe`, `ville`, `acronymePays_Attributaire`, `pays_Attributaire`, `siren_Attributaire`, `nic_Attributaire`, `identifiantNational_Attributaire`, `rc_ville_attributaire`, `rc_num_attributaire` FROM `Marche` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonMarche();
            $obj->hydrate($row);
            CommonMarchePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonMarche|CommonMarche[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonMarche[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonMarchePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonMarchePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonMarchePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonMarchePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonMarchePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonMarchePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::ID, $id, $comparison);
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
     * @return CommonMarcheQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMarchePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the idMarcheTrancheBudgetaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmarchetranchebudgetaire(1234); // WHERE idMarcheTrancheBudgetaire = 1234
     * $query->filterByIdmarchetranchebudgetaire(array(12, 34)); // WHERE idMarcheTrancheBudgetaire IN (12, 34)
     * $query->filterByIdmarchetranchebudgetaire(array('min' => 12)); // WHERE idMarcheTrancheBudgetaire >= 12
     * $query->filterByIdmarchetranchebudgetaire(array('max' => 12)); // WHERE idMarcheTrancheBudgetaire <= 12
     * </code>
     *
     * @param     mixed $idmarchetranchebudgetaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByIdmarchetranchebudgetaire($idmarchetranchebudgetaire = null, $comparison = null)
    {
        if (is_array($idmarchetranchebudgetaire)) {
            $useMinMax = false;
            if (isset($idmarchetranchebudgetaire['min'])) {
                $this->addUsingAlias(CommonMarchePeer::IDMARCHETRANCHEBUDGETAIRE, $idmarchetranchebudgetaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmarchetranchebudgetaire['max'])) {
                $this->addUsingAlias(CommonMarchePeer::IDMARCHETRANCHEBUDGETAIRE, $idmarchetranchebudgetaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::IDMARCHETRANCHEBUDGETAIRE, $idmarchetranchebudgetaire, $comparison);
    }

    /**
     * Filter the query on the numeroMarcheAnnee column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeromarcheannee(1234); // WHERE numeroMarcheAnnee = 1234
     * $query->filterByNumeromarcheannee(array(12, 34)); // WHERE numeroMarcheAnnee IN (12, 34)
     * $query->filterByNumeromarcheannee(array('min' => 12)); // WHERE numeroMarcheAnnee >= 12
     * $query->filterByNumeromarcheannee(array('max' => 12)); // WHERE numeroMarcheAnnee <= 12
     * </code>
     *
     * @param     mixed $numeromarcheannee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByNumeromarcheannee($numeromarcheannee = null, $comparison = null)
    {
        if (is_array($numeromarcheannee)) {
            $useMinMax = false;
            if (isset($numeromarcheannee['min'])) {
                $this->addUsingAlias(CommonMarchePeer::NUMEROMARCHEANNEE, $numeromarcheannee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeromarcheannee['max'])) {
                $this->addUsingAlias(CommonMarchePeer::NUMEROMARCHEANNEE, $numeromarcheannee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::NUMEROMARCHEANNEE, $numeromarcheannee, $comparison);
    }

    /**
     * Filter the query on the idService column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservice(1234); // WHERE idService = 1234
     * $query->filterByIdservice(array(12, 34)); // WHERE idService IN (12, 34)
     * $query->filterByIdservice(array('min' => 12)); // WHERE idService >= 12
     * $query->filterByIdservice(array('max' => 12)); // WHERE idService <= 12
     * </code>
     *
     * @param     mixed $idservice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByIdservice($idservice = null, $comparison = null)
    {
        if (is_array($idservice)) {
            $useMinMax = false;
            if (isset($idservice['min'])) {
                $this->addUsingAlias(CommonMarchePeer::IDSERVICE, $idservice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservice['max'])) {
                $this->addUsingAlias(CommonMarchePeer::IDSERVICE, $idservice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::IDSERVICE, $idservice, $comparison);
    }

    /**
     * Filter the query on the nomAttributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByNomattributaire('fooValue');   // WHERE nomAttributaire = 'fooValue'
     * $query->filterByNomattributaire('%fooValue%'); // WHERE nomAttributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomattributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByNomattributaire($nomattributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomattributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomattributaire)) {
                $nomattributaire = str_replace('*', '%', $nomattributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::NOMATTRIBUTAIRE, $nomattributaire, $comparison);
    }

    /**
     * Filter the query on the dateNotification column
     *
     * Example usage:
     * <code>
     * $query->filterByDatenotification('2011-03-14'); // WHERE dateNotification = '2011-03-14'
     * $query->filterByDatenotification('now'); // WHERE dateNotification = '2011-03-14'
     * $query->filterByDatenotification(array('max' => 'yesterday')); // WHERE dateNotification > '2011-03-13'
     * </code>
     *
     * @param     mixed $datenotification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByDatenotification($datenotification = null, $comparison = null)
    {
        if (is_array($datenotification)) {
            $useMinMax = false;
            if (isset($datenotification['min'])) {
                $this->addUsingAlias(CommonMarchePeer::DATENOTIFICATION, $datenotification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datenotification['max'])) {
                $this->addUsingAlias(CommonMarchePeer::DATENOTIFICATION, $datenotification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::DATENOTIFICATION, $datenotification, $comparison);
    }

    /**
     * Filter the query on the codePostal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodepostal('fooValue');   // WHERE codePostal = 'fooValue'
     * $query->filterByCodepostal('%fooValue%'); // WHERE codePostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codepostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByCodepostal($codepostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codepostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codepostal)) {
                $codepostal = str_replace('*', '%', $codepostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::CODEPOSTAL, $codepostal, $comparison);
    }

    /**
     * Filter the query on the natureMarche column
     *
     * Example usage:
     * <code>
     * $query->filterByNaturemarche('fooValue');   // WHERE natureMarche = 'fooValue'
     * $query->filterByNaturemarche('%fooValue%'); // WHERE natureMarche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $naturemarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByNaturemarche($naturemarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($naturemarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $naturemarche)) {
                $naturemarche = str_replace('*', '%', $naturemarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::NATUREMARCHE, $naturemarche, $comparison);
    }

    /**
     * Filter the query on the objetMarche column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetmarche('fooValue');   // WHERE objetMarche = 'fooValue'
     * $query->filterByObjetmarche('%fooValue%'); // WHERE objetMarche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetmarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByObjetmarche($objetmarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetmarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetmarche)) {
                $objetmarche = str_replace('*', '%', $objetmarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::OBJETMARCHE, $objetmarche, $comparison);
    }

    /**
     * Filter the query on the montantMarche column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantmarche('fooValue');   // WHERE montantMarche = 'fooValue'
     * $query->filterByMontantmarche('%fooValue%'); // WHERE montantMarche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantmarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByMontantmarche($montantmarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantmarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantmarche)) {
                $montantmarche = str_replace('*', '%', $montantmarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::MONTANTMARCHE, $montantmarche, $comparison);
    }

    /**
     * Filter the query on the valide column
     *
     * Example usage:
     * <code>
     * $query->filterByValide('fooValue');   // WHERE valide = 'fooValue'
     * $query->filterByValide('%fooValue%'); // WHERE valide LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valide The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByValide($valide = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valide)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valide)) {
                $valide = str_replace('*', '%', $valide);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::VALIDE, $valide, $comparison);
    }

    /**
     * Filter the query on the isManuel column
     *
     * Example usage:
     * <code>
     * $query->filterByIsmanuel('fooValue');   // WHERE isManuel = 'fooValue'
     * $query->filterByIsmanuel('%fooValue%'); // WHERE isManuel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ismanuel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByIsmanuel($ismanuel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ismanuel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ismanuel)) {
                $ismanuel = str_replace('*', '%', $ismanuel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::ISMANUEL, $ismanuel, $comparison);
    }

    /**
     * Filter the query on the pmePmi column
     *
     * Example usage:
     * <code>
     * $query->filterByPmepmi(1234); // WHERE pmePmi = 1234
     * $query->filterByPmepmi(array(12, 34)); // WHERE pmePmi IN (12, 34)
     * $query->filterByPmepmi(array('min' => 12)); // WHERE pmePmi >= 12
     * $query->filterByPmepmi(array('max' => 12)); // WHERE pmePmi <= 12
     * </code>
     *
     * @param     mixed $pmepmi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByPmepmi($pmepmi = null, $comparison = null)
    {
        if (is_array($pmepmi)) {
            $useMinMax = false;
            if (isset($pmepmi['min'])) {
                $this->addUsingAlias(CommonMarchePeer::PMEPMI, $pmepmi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pmepmi['max'])) {
                $this->addUsingAlias(CommonMarchePeer::PMEPMI, $pmepmi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::PMEPMI, $pmepmi, $comparison);
    }

    /**
     * Filter the query on the id_decision_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDecisionEnveloppe(1234); // WHERE id_decision_enveloppe = 1234
     * $query->filterByIdDecisionEnveloppe(array(12, 34)); // WHERE id_decision_enveloppe IN (12, 34)
     * $query->filterByIdDecisionEnveloppe(array('min' => 12)); // WHERE id_decision_enveloppe >= 12
     * $query->filterByIdDecisionEnveloppe(array('max' => 12)); // WHERE id_decision_enveloppe <= 12
     * </code>
     *
     * @param     mixed $idDecisionEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByIdDecisionEnveloppe($idDecisionEnveloppe = null, $comparison = null)
    {
        if (is_array($idDecisionEnveloppe)) {
            $useMinMax = false;
            if (isset($idDecisionEnveloppe['min'])) {
                $this->addUsingAlias(CommonMarchePeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDecisionEnveloppe['max'])) {
                $this->addUsingAlias(CommonMarchePeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the acronymePays_Attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymepaysAttributaire('fooValue');   // WHERE acronymePays_Attributaire = 'fooValue'
     * $query->filterByAcronymepaysAttributaire('%fooValue%'); // WHERE acronymePays_Attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymepaysAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByAcronymepaysAttributaire($acronymepaysAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymepaysAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymepaysAttributaire)) {
                $acronymepaysAttributaire = str_replace('*', '%', $acronymepaysAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::ACRONYMEPAYS_ATTRIBUTAIRE, $acronymepaysAttributaire, $comparison);
    }

    /**
     * Filter the query on the pays_Attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByPaysAttributaire('fooValue');   // WHERE pays_Attributaire = 'fooValue'
     * $query->filterByPaysAttributaire('%fooValue%'); // WHERE pays_Attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $paysAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByPaysAttributaire($paysAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($paysAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $paysAttributaire)) {
                $paysAttributaire = str_replace('*', '%', $paysAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::PAYS_ATTRIBUTAIRE, $paysAttributaire, $comparison);
    }

    /**
     * Filter the query on the siren_Attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterBySirenAttributaire('fooValue');   // WHERE siren_Attributaire = 'fooValue'
     * $query->filterBySirenAttributaire('%fooValue%'); // WHERE siren_Attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sirenAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterBySirenAttributaire($sirenAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sirenAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sirenAttributaire)) {
                $sirenAttributaire = str_replace('*', '%', $sirenAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::SIREN_ATTRIBUTAIRE, $sirenAttributaire, $comparison);
    }

    /**
     * Filter the query on the nic_Attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByNicAttributaire('fooValue');   // WHERE nic_Attributaire = 'fooValue'
     * $query->filterByNicAttributaire('%fooValue%'); // WHERE nic_Attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nicAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByNicAttributaire($nicAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nicAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nicAttributaire)) {
                $nicAttributaire = str_replace('*', '%', $nicAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::NIC_ATTRIBUTAIRE, $nicAttributaire, $comparison);
    }

    /**
     * Filter the query on the identifiantNational_Attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantnationalAttributaire('fooValue');   // WHERE identifiantNational_Attributaire = 'fooValue'
     * $query->filterByIdentifiantnationalAttributaire('%fooValue%'); // WHERE identifiantNational_Attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantnationalAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByIdentifiantnationalAttributaire($identifiantnationalAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantnationalAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantnationalAttributaire)) {
                $identifiantnationalAttributaire = str_replace('*', '%', $identifiantnationalAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::IDENTIFIANTNATIONAL_ATTRIBUTAIRE, $identifiantnationalAttributaire, $comparison);
    }

    /**
     * Filter the query on the rc_ville_attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByRcVilleAttributaire('fooValue');   // WHERE rc_ville_attributaire = 'fooValue'
     * $query->filterByRcVilleAttributaire('%fooValue%'); // WHERE rc_ville_attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcVilleAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByRcVilleAttributaire($rcVilleAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcVilleAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rcVilleAttributaire)) {
                $rcVilleAttributaire = str_replace('*', '%', $rcVilleAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::RC_VILLE_ATTRIBUTAIRE, $rcVilleAttributaire, $comparison);
    }

    /**
     * Filter the query on the rc_num_attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByRcNumAttributaire('fooValue');   // WHERE rc_num_attributaire = 'fooValue'
     * $query->filterByRcNumAttributaire('%fooValue%'); // WHERE rc_num_attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rcNumAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function filterByRcNumAttributaire($rcNumAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rcNumAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rcNumAttributaire)) {
                $rcNumAttributaire = str_replace('*', '%', $rcNumAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePeer::RC_NUM_ATTRIBUTAIRE, $rcNumAttributaire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonMarche $commonMarche Object to remove from the list of results
     *
     * @return CommonMarcheQuery The current query, for fluid interface
     */
    public function prune($commonMarche = null)
    {
        if ($commonMarche) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonMarchePeer::ID), $commonMarche->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonMarchePeer::ORGANISME), $commonMarche->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
