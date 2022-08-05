<?php


/**
 * Base class that represents a query for the 't_enveloppe_dossier_formulaire' table.
 *
 * 
 *
 * @method CommonTEnveloppeDossierFormulaireQuery orderByIdEnveloppeDossierFormulaire($order = Criteria::ASC) Order by the id_enveloppe_dossier_formulaire column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByIdDossierFormulaire($order = Criteria::ASC) Order by the id_dossier_formulaire column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByIdEnveloppe($order = Criteria::ASC) Order by the id_enveloppe column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByIdLot($order = Criteria::ASC) Order by the id_lot column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByTypeEnveloppe($order = Criteria::ASC) Order by the type_enveloppe column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByLibelleForrmulaire($order = Criteria::ASC) Order by the libelle_forrmulaire column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByCleExterneDispositif($order = Criteria::ASC) Order by the cle_externe_dispositif column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByCleExterneDossier($order = Criteria::ASC) Order by the cle_externe_dossier column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByStatutValidation($order = Criteria::ASC) Order by the statut_validation column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByDateValidation($order = Criteria::ASC) Order by the date_validation column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByStatutGenerationGlobale($order = Criteria::ASC) Order by the statut_generation_globale column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByTypeReponse($order = Criteria::ASC) Order by the type_reponse column
 * @method CommonTEnveloppeDossierFormulaireQuery orderByCleExterneFormulaire($order = Criteria::ASC) Order by the cle_externe_formulaire column
 *
 * @method CommonTEnveloppeDossierFormulaireQuery groupByIdEnveloppeDossierFormulaire() Group by the id_enveloppe_dossier_formulaire column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByIdDossierFormulaire() Group by the id_dossier_formulaire column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByIdEnveloppe() Group by the id_enveloppe column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByOrganisme() Group by the organisme column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByIdLot() Group by the id_lot column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByTypeEnveloppe() Group by the type_enveloppe column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByLibelleForrmulaire() Group by the libelle_forrmulaire column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByCleExterneDispositif() Group by the cle_externe_dispositif column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByCleExterneDossier() Group by the cle_externe_dossier column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByStatutValidation() Group by the statut_validation column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByDateCreation() Group by the date_creation column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByDateModif() Group by the date_modif column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByDateValidation() Group by the date_validation column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByStatutGenerationGlobale() Group by the statut_generation_globale column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByTypeReponse() Group by the type_reponse column
 * @method CommonTEnveloppeDossierFormulaireQuery groupByCleExterneFormulaire() Group by the cle_externe_formulaire column
 *
 * @method CommonTEnveloppeDossierFormulaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTEnveloppeDossierFormulaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTEnveloppeDossierFormulaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTEnveloppeDossierFormulaire findOne(PropelPDO $con = null) Return the first CommonTEnveloppeDossierFormulaire matching the query
 * @method CommonTEnveloppeDossierFormulaire findOneOrCreate(PropelPDO $con = null) Return the first CommonTEnveloppeDossierFormulaire matching the query, or a new CommonTEnveloppeDossierFormulaire object populated from the query conditions when no match is found
 *
 * @method CommonTEnveloppeDossierFormulaire findOneByIdDossierFormulaire(int $id_dossier_formulaire) Return the first CommonTEnveloppeDossierFormulaire filtered by the id_dossier_formulaire column
 * @method CommonTEnveloppeDossierFormulaire findOneByIdEnveloppe(int $id_enveloppe) Return the first CommonTEnveloppeDossierFormulaire filtered by the id_enveloppe column
 * @method CommonTEnveloppeDossierFormulaire findOneByOrganisme(string $organisme) Return the first CommonTEnveloppeDossierFormulaire filtered by the organisme column
 * @method CommonTEnveloppeDossierFormulaire findOneByIdLot(int $id_lot) Return the first CommonTEnveloppeDossierFormulaire filtered by the id_lot column
 * @method CommonTEnveloppeDossierFormulaire findOneByTypeEnveloppe(int $type_enveloppe) Return the first CommonTEnveloppeDossierFormulaire filtered by the type_enveloppe column
 * @method CommonTEnveloppeDossierFormulaire findOneByLibelleForrmulaire(string $libelle_forrmulaire) Return the first CommonTEnveloppeDossierFormulaire filtered by the libelle_forrmulaire column
 * @method CommonTEnveloppeDossierFormulaire findOneByCleExterneDispositif(int $cle_externe_dispositif) Return the first CommonTEnveloppeDossierFormulaire filtered by the cle_externe_dispositif column
 * @method CommonTEnveloppeDossierFormulaire findOneByCleExterneDossier(int $cle_externe_dossier) Return the first CommonTEnveloppeDossierFormulaire filtered by the cle_externe_dossier column
 * @method CommonTEnveloppeDossierFormulaire findOneByStatutValidation(string $statut_validation) Return the first CommonTEnveloppeDossierFormulaire filtered by the statut_validation column
 * @method CommonTEnveloppeDossierFormulaire findOneByDateCreation(string $date_creation) Return the first CommonTEnveloppeDossierFormulaire filtered by the date_creation column
 * @method CommonTEnveloppeDossierFormulaire findOneByDateModif(string $date_modif) Return the first CommonTEnveloppeDossierFormulaire filtered by the date_modif column
 * @method CommonTEnveloppeDossierFormulaire findOneByDateValidation(string $date_validation) Return the first CommonTEnveloppeDossierFormulaire filtered by the date_validation column
 * @method CommonTEnveloppeDossierFormulaire findOneByStatutGenerationGlobale(int $statut_generation_globale) Return the first CommonTEnveloppeDossierFormulaire filtered by the statut_generation_globale column
 * @method CommonTEnveloppeDossierFormulaire findOneByTypeReponse(int $type_reponse) Return the first CommonTEnveloppeDossierFormulaire filtered by the type_reponse column
 * @method CommonTEnveloppeDossierFormulaire findOneByCleExterneFormulaire(int $cle_externe_formulaire) Return the first CommonTEnveloppeDossierFormulaire filtered by the cle_externe_formulaire column
 *
 * @method array findByIdEnveloppeDossierFormulaire(int $id_enveloppe_dossier_formulaire) Return CommonTEnveloppeDossierFormulaire objects filtered by the id_enveloppe_dossier_formulaire column
 * @method array findByIdDossierFormulaire(int $id_dossier_formulaire) Return CommonTEnveloppeDossierFormulaire objects filtered by the id_dossier_formulaire column
 * @method array findByIdEnveloppe(int $id_enveloppe) Return CommonTEnveloppeDossierFormulaire objects filtered by the id_enveloppe column
 * @method array findByOrganisme(string $organisme) Return CommonTEnveloppeDossierFormulaire objects filtered by the organisme column
 * @method array findByIdLot(int $id_lot) Return CommonTEnveloppeDossierFormulaire objects filtered by the id_lot column
 * @method array findByTypeEnveloppe(int $type_enveloppe) Return CommonTEnveloppeDossierFormulaire objects filtered by the type_enveloppe column
 * @method array findByLibelleForrmulaire(string $libelle_forrmulaire) Return CommonTEnveloppeDossierFormulaire objects filtered by the libelle_forrmulaire column
 * @method array findByCleExterneDispositif(int $cle_externe_dispositif) Return CommonTEnveloppeDossierFormulaire objects filtered by the cle_externe_dispositif column
 * @method array findByCleExterneDossier(int $cle_externe_dossier) Return CommonTEnveloppeDossierFormulaire objects filtered by the cle_externe_dossier column
 * @method array findByStatutValidation(string $statut_validation) Return CommonTEnveloppeDossierFormulaire objects filtered by the statut_validation column
 * @method array findByDateCreation(string $date_creation) Return CommonTEnveloppeDossierFormulaire objects filtered by the date_creation column
 * @method array findByDateModif(string $date_modif) Return CommonTEnveloppeDossierFormulaire objects filtered by the date_modif column
 * @method array findByDateValidation(string $date_validation) Return CommonTEnveloppeDossierFormulaire objects filtered by the date_validation column
 * @method array findByStatutGenerationGlobale(int $statut_generation_globale) Return CommonTEnveloppeDossierFormulaire objects filtered by the statut_generation_globale column
 * @method array findByTypeReponse(int $type_reponse) Return CommonTEnveloppeDossierFormulaire objects filtered by the type_reponse column
 * @method array findByCleExterneFormulaire(int $cle_externe_formulaire) Return CommonTEnveloppeDossierFormulaire objects filtered by the cle_externe_formulaire column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTEnveloppeDossierFormulaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTEnveloppeDossierFormulaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTEnveloppeDossierFormulaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTEnveloppeDossierFormulaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTEnveloppeDossierFormulaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTEnveloppeDossierFormulaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTEnveloppeDossierFormulaireQuery) {
            return $criteria;
        }
        $query = new CommonTEnveloppeDossierFormulaireQuery();
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
     * @return   CommonTEnveloppeDossierFormulaire|CommonTEnveloppeDossierFormulaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTEnveloppeDossierFormulairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTEnveloppeDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTEnveloppeDossierFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdEnveloppeDossierFormulaire($key, $con = null)
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
     * @return                 CommonTEnveloppeDossierFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_enveloppe_dossier_formulaire`, `id_dossier_formulaire`, `id_enveloppe`, `organisme`, `id_lot`, `type_enveloppe`, `libelle_forrmulaire`, `cle_externe_dispositif`, `cle_externe_dossier`, `statut_validation`, `date_creation`, `date_modif`, `date_validation`, `statut_generation_globale`, `type_reponse`, `cle_externe_formulaire` FROM `t_enveloppe_dossier_formulaire` WHERE `id_enveloppe_dossier_formulaire` = :p0';
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
            $obj = new CommonTEnveloppeDossierFormulaire();
            $obj->hydrate($row);
            CommonTEnveloppeDossierFormulairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTEnveloppeDossierFormulaire|CommonTEnveloppeDossierFormulaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTEnveloppeDossierFormulaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_enveloppe_dossier_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnveloppeDossierFormulaire(1234); // WHERE id_enveloppe_dossier_formulaire = 1234
     * $query->filterByIdEnveloppeDossierFormulaire(array(12, 34)); // WHERE id_enveloppe_dossier_formulaire IN (12, 34)
     * $query->filterByIdEnveloppeDossierFormulaire(array('min' => 12)); // WHERE id_enveloppe_dossier_formulaire >= 12
     * $query->filterByIdEnveloppeDossierFormulaire(array('max' => 12)); // WHERE id_enveloppe_dossier_formulaire <= 12
     * </code>
     *
     * @param     mixed $idEnveloppeDossierFormulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdEnveloppeDossierFormulaire($idEnveloppeDossierFormulaire = null, $comparison = null)
    {
        if (is_array($idEnveloppeDossierFormulaire)) {
            $useMinMax = false;
            if (isset($idEnveloppeDossierFormulaire['min'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE, $idEnveloppeDossierFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEnveloppeDossierFormulaire['max'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE, $idEnveloppeDossierFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE, $idEnveloppeDossierFormulaire, $comparison);
    }

    /**
     * Filter the query on the id_dossier_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDossierFormulaire(1234); // WHERE id_dossier_formulaire = 1234
     * $query->filterByIdDossierFormulaire(array(12, 34)); // WHERE id_dossier_formulaire IN (12, 34)
     * $query->filterByIdDossierFormulaire(array('min' => 12)); // WHERE id_dossier_formulaire >= 12
     * $query->filterByIdDossierFormulaire(array('max' => 12)); // WHERE id_dossier_formulaire <= 12
     * </code>
     *
     * @param     mixed $idDossierFormulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdDossierFormulaire($idDossierFormulaire = null, $comparison = null)
    {
        if (is_array($idDossierFormulaire)) {
            $useMinMax = false;
            if (isset($idDossierFormulaire['min'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDossierFormulaire['max'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire, $comparison);
    }

    /**
     * Filter the query on the id_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnveloppe(1234); // WHERE id_enveloppe = 1234
     * $query->filterByIdEnveloppe(array(12, 34)); // WHERE id_enveloppe IN (12, 34)
     * $query->filterByIdEnveloppe(array('min' => 12)); // WHERE id_enveloppe >= 12
     * $query->filterByIdEnveloppe(array('max' => 12)); // WHERE id_enveloppe <= 12
     * </code>
     *
     * @param     mixed $idEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdEnveloppe($idEnveloppe = null, $comparison = null)
    {
        if (is_array($idEnveloppe)) {
            $useMinMax = false;
            if (isset($idEnveloppe['min'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE, $idEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEnveloppe['max'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE, $idEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE, $idEnveloppe, $comparison);
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
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_lot column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLot(1234); // WHERE id_lot = 1234
     * $query->filterByIdLot(array(12, 34)); // WHERE id_lot IN (12, 34)
     * $query->filterByIdLot(array('min' => 12)); // WHERE id_lot >= 12
     * $query->filterByIdLot(array('max' => 12)); // WHERE id_lot <= 12
     * </code>
     *
     * @param     mixed $idLot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdLot($idLot = null, $comparison = null)
    {
        if (is_array($idLot)) {
            $useMinMax = false;
            if (isset($idLot['min'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_LOT, $idLot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLot['max'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_LOT, $idLot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_LOT, $idLot, $comparison);
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
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByTypeEnveloppe($typeEnveloppe = null, $comparison = null)
    {
        if (is_array($typeEnveloppe)) {
            $useMinMax = false;
            if (isset($typeEnveloppe['min'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnveloppe['max'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe, $comparison);
    }

    /**
     * Filter the query on the libelle_forrmulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleForrmulaire('fooValue');   // WHERE libelle_forrmulaire = 'fooValue'
     * $query->filterByLibelleForrmulaire('%fooValue%'); // WHERE libelle_forrmulaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleForrmulaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByLibelleForrmulaire($libelleForrmulaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleForrmulaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleForrmulaire)) {
                $libelleForrmulaire = str_replace('*', '%', $libelleForrmulaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::LIBELLE_FORRMULAIRE, $libelleForrmulaire, $comparison);
    }

    /**
     * Filter the query on the cle_externe_dispositif column
     *
     * Example usage:
     * <code>
     * $query->filterByCleExterneDispositif(1234); // WHERE cle_externe_dispositif = 1234
     * $query->filterByCleExterneDispositif(array(12, 34)); // WHERE cle_externe_dispositif IN (12, 34)
     * $query->filterByCleExterneDispositif(array('min' => 12)); // WHERE cle_externe_dispositif >= 12
     * $query->filterByCleExterneDispositif(array('max' => 12)); // WHERE cle_externe_dispositif <= 12
     * </code>
     *
     * @param     mixed $cleExterneDispositif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByCleExterneDispositif($cleExterneDispositif = null, $comparison = null)
    {
        if (is_array($cleExterneDispositif)) {
            $useMinMax = false;
            if (isset($cleExterneDispositif['min'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, $cleExterneDispositif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cleExterneDispositif['max'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, $cleExterneDispositif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, $cleExterneDispositif, $comparison);
    }

    /**
     * Filter the query on the cle_externe_dossier column
     *
     * Example usage:
     * <code>
     * $query->filterByCleExterneDossier(1234); // WHERE cle_externe_dossier = 1234
     * $query->filterByCleExterneDossier(array(12, 34)); // WHERE cle_externe_dossier IN (12, 34)
     * $query->filterByCleExterneDossier(array('min' => 12)); // WHERE cle_externe_dossier >= 12
     * $query->filterByCleExterneDossier(array('max' => 12)); // WHERE cle_externe_dossier <= 12
     * </code>
     *
     * @param     mixed $cleExterneDossier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByCleExterneDossier($cleExterneDossier = null, $comparison = null)
    {
        if (is_array($cleExterneDossier)) {
            $useMinMax = false;
            if (isset($cleExterneDossier['min'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DOSSIER, $cleExterneDossier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cleExterneDossier['max'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DOSSIER, $cleExterneDossier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_DOSSIER, $cleExterneDossier, $comparison);
    }

    /**
     * Filter the query on the statut_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutValidation('fooValue');   // WHERE statut_validation = 'fooValue'
     * $query->filterByStatutValidation('%fooValue%'); // WHERE statut_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByStatutValidation($statutValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutValidation)) {
                $statutValidation = str_replace('*', '%', $statutValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::STATUT_VALIDATION, $statutValidation, $comparison);
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
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModif('fooValue');   // WHERE date_modif = 'fooValue'
     * $query->filterByDateModif('%fooValue%'); // WHERE date_modif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModif)) {
                $dateModif = str_replace('*', '%', $dateModif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::DATE_MODIF, $dateModif, $comparison);
    }

    /**
     * Filter the query on the date_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidation('fooValue');   // WHERE date_validation = 'fooValue'
     * $query->filterByDateValidation('%fooValue%'); // WHERE date_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateValidation)) {
                $dateValidation = str_replace('*', '%', $dateValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::DATE_VALIDATION, $dateValidation, $comparison);
    }

    /**
     * Filter the query on the statut_generation_globale column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutGenerationGlobale(1234); // WHERE statut_generation_globale = 1234
     * $query->filterByStatutGenerationGlobale(array(12, 34)); // WHERE statut_generation_globale IN (12, 34)
     * $query->filterByStatutGenerationGlobale(array('min' => 12)); // WHERE statut_generation_globale >= 12
     * $query->filterByStatutGenerationGlobale(array('max' => 12)); // WHERE statut_generation_globale <= 12
     * </code>
     *
     * @param     mixed $statutGenerationGlobale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByStatutGenerationGlobale($statutGenerationGlobale = null, $comparison = null)
    {
        if (is_array($statutGenerationGlobale)) {
            $useMinMax = false;
            if (isset($statutGenerationGlobale['min'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::STATUT_GENERATION_GLOBALE, $statutGenerationGlobale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutGenerationGlobale['max'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::STATUT_GENERATION_GLOBALE, $statutGenerationGlobale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::STATUT_GENERATION_GLOBALE, $statutGenerationGlobale, $comparison);
    }

    /**
     * Filter the query on the type_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeReponse(1234); // WHERE type_reponse = 1234
     * $query->filterByTypeReponse(array(12, 34)); // WHERE type_reponse IN (12, 34)
     * $query->filterByTypeReponse(array('min' => 12)); // WHERE type_reponse >= 12
     * $query->filterByTypeReponse(array('max' => 12)); // WHERE type_reponse <= 12
     * </code>
     *
     * @param     mixed $typeReponse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByTypeReponse($typeReponse = null, $comparison = null)
    {
        if (is_array($typeReponse)) {
            $useMinMax = false;
            if (isset($typeReponse['min'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::TYPE_REPONSE, $typeReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeReponse['max'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::TYPE_REPONSE, $typeReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::TYPE_REPONSE, $typeReponse, $comparison);
    }

    /**
     * Filter the query on the cle_externe_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCleExterneFormulaire(1234); // WHERE cle_externe_formulaire = 1234
     * $query->filterByCleExterneFormulaire(array(12, 34)); // WHERE cle_externe_formulaire IN (12, 34)
     * $query->filterByCleExterneFormulaire(array('min' => 12)); // WHERE cle_externe_formulaire >= 12
     * $query->filterByCleExterneFormulaire(array('max' => 12)); // WHERE cle_externe_formulaire <= 12
     * </code>
     *
     * @param     mixed $cleExterneFormulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByCleExterneFormulaire($cleExterneFormulaire = null, $comparison = null)
    {
        if (is_array($cleExterneFormulaire)) {
            $useMinMax = false;
            if (isset($cleExterneFormulaire['min'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE, $cleExterneFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cleExterneFormulaire['max'])) {
                $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE, $cleExterneFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE, $cleExterneFormulaire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTEnveloppeDossierFormulaire $commonTEnveloppeDossierFormulaire Object to remove from the list of results
     *
     * @return CommonTEnveloppeDossierFormulaireQuery The current query, for fluid interface
     */
    public function prune($commonTEnveloppeDossierFormulaire = null)
    {
        if ($commonTEnveloppeDossierFormulaire) {
            $this->addUsingAlias(CommonTEnveloppeDossierFormulairePeer::ID_ENVELOPPE_DOSSIER_FORMULAIRE, $commonTEnveloppeDossierFormulaire->getIdEnveloppeDossierFormulaire(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
