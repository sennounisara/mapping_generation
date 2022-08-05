<?php


/**
 * Base class that represents a query for the 't_dossier_formulaire' table.
 *
 * 
 *
 * @method CommonTDossierFormulaireQuery orderByIdDossierFormulaire($order = Criteria::ASC) Order by the id_dossier_formulaire column
 * @method CommonTDossierFormulaireQuery orderByIdReponseElecFormulaire($order = Criteria::ASC) Order by the id_reponse_elec_formulaire column
 * @method CommonTDossierFormulaireQuery orderByIdLot($order = Criteria::ASC) Order by the id_lot column
 * @method CommonTDossierFormulaireQuery orderByTypeEnveloppe($order = Criteria::ASC) Order by the type_enveloppe column
 * @method CommonTDossierFormulaireQuery orderByLibelleForrmulaire($order = Criteria::ASC) Order by the libelle_forrmulaire column
 * @method CommonTDossierFormulaireQuery orderByCleExterneDispositif($order = Criteria::ASC) Order by the cle_externe_dispositif column
 * @method CommonTDossierFormulaireQuery orderByCleExterneDossier($order = Criteria::ASC) Order by the cle_externe_dossier column
 * @method CommonTDossierFormulaireQuery orderByStatutValidation($order = Criteria::ASC) Order by the statut_validation column
 * @method CommonTDossierFormulaireQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonTDossierFormulaireQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method CommonTDossierFormulaireQuery orderByDateValidation($order = Criteria::ASC) Order by the date_validation column
 * @method CommonTDossierFormulaireQuery orderByStatutGenerationGlobale($order = Criteria::ASC) Order by the statut_generation_globale column
 * @method CommonTDossierFormulaireQuery orderByTypeReponse($order = Criteria::ASC) Order by the type_reponse column
 * @method CommonTDossierFormulaireQuery orderByCleExterneFormulaire($order = Criteria::ASC) Order by the cle_externe_formulaire column
 * @method CommonTDossierFormulaireQuery orderByFormulaireDepose($order = Criteria::ASC) Order by the formulaire_depose column
 * @method CommonTDossierFormulaireQuery orderByIdDossierPere($order = Criteria::ASC) Order by the id_dossier_pere column
 *
 * @method CommonTDossierFormulaireQuery groupByIdDossierFormulaire() Group by the id_dossier_formulaire column
 * @method CommonTDossierFormulaireQuery groupByIdReponseElecFormulaire() Group by the id_reponse_elec_formulaire column
 * @method CommonTDossierFormulaireQuery groupByIdLot() Group by the id_lot column
 * @method CommonTDossierFormulaireQuery groupByTypeEnveloppe() Group by the type_enveloppe column
 * @method CommonTDossierFormulaireQuery groupByLibelleForrmulaire() Group by the libelle_forrmulaire column
 * @method CommonTDossierFormulaireQuery groupByCleExterneDispositif() Group by the cle_externe_dispositif column
 * @method CommonTDossierFormulaireQuery groupByCleExterneDossier() Group by the cle_externe_dossier column
 * @method CommonTDossierFormulaireQuery groupByStatutValidation() Group by the statut_validation column
 * @method CommonTDossierFormulaireQuery groupByDateCreation() Group by the date_creation column
 * @method CommonTDossierFormulaireQuery groupByDateModif() Group by the date_modif column
 * @method CommonTDossierFormulaireQuery groupByDateValidation() Group by the date_validation column
 * @method CommonTDossierFormulaireQuery groupByStatutGenerationGlobale() Group by the statut_generation_globale column
 * @method CommonTDossierFormulaireQuery groupByTypeReponse() Group by the type_reponse column
 * @method CommonTDossierFormulaireQuery groupByCleExterneFormulaire() Group by the cle_externe_formulaire column
 * @method CommonTDossierFormulaireQuery groupByFormulaireDepose() Group by the formulaire_depose column
 * @method CommonTDossierFormulaireQuery groupByIdDossierPere() Group by the id_dossier_pere column
 *
 * @method CommonTDossierFormulaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTDossierFormulaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTDossierFormulaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTDossierFormulaireQuery leftJoinCommonTReponseElecFormulaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTReponseElecFormulaire relation
 * @method CommonTDossierFormulaireQuery rightJoinCommonTReponseElecFormulaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTReponseElecFormulaire relation
 * @method CommonTDossierFormulaireQuery innerJoinCommonTReponseElecFormulaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTReponseElecFormulaire relation
 *
 * @method CommonTDossierFormulaireQuery leftJoinCommonTEditionFormulaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTEditionFormulaire relation
 * @method CommonTDossierFormulaireQuery rightJoinCommonTEditionFormulaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTEditionFormulaire relation
 * @method CommonTDossierFormulaireQuery innerJoinCommonTEditionFormulaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTEditionFormulaire relation
 *
 * @method CommonTDossierFormulaire findOne(PropelPDO $con = null) Return the first CommonTDossierFormulaire matching the query
 * @method CommonTDossierFormulaire findOneOrCreate(PropelPDO $con = null) Return the first CommonTDossierFormulaire matching the query, or a new CommonTDossierFormulaire object populated from the query conditions when no match is found
 *
 * @method CommonTDossierFormulaire findOneByIdReponseElecFormulaire(int $id_reponse_elec_formulaire) Return the first CommonTDossierFormulaire filtered by the id_reponse_elec_formulaire column
 * @method CommonTDossierFormulaire findOneByIdLot(int $id_lot) Return the first CommonTDossierFormulaire filtered by the id_lot column
 * @method CommonTDossierFormulaire findOneByTypeEnveloppe(int $type_enveloppe) Return the first CommonTDossierFormulaire filtered by the type_enveloppe column
 * @method CommonTDossierFormulaire findOneByLibelleForrmulaire(string $libelle_forrmulaire) Return the first CommonTDossierFormulaire filtered by the libelle_forrmulaire column
 * @method CommonTDossierFormulaire findOneByCleExterneDispositif(int $cle_externe_dispositif) Return the first CommonTDossierFormulaire filtered by the cle_externe_dispositif column
 * @method CommonTDossierFormulaire findOneByCleExterneDossier(int $cle_externe_dossier) Return the first CommonTDossierFormulaire filtered by the cle_externe_dossier column
 * @method CommonTDossierFormulaire findOneByStatutValidation(string $statut_validation) Return the first CommonTDossierFormulaire filtered by the statut_validation column
 * @method CommonTDossierFormulaire findOneByDateCreation(string $date_creation) Return the first CommonTDossierFormulaire filtered by the date_creation column
 * @method CommonTDossierFormulaire findOneByDateModif(string $date_modif) Return the first CommonTDossierFormulaire filtered by the date_modif column
 * @method CommonTDossierFormulaire findOneByDateValidation(string $date_validation) Return the first CommonTDossierFormulaire filtered by the date_validation column
 * @method CommonTDossierFormulaire findOneByStatutGenerationGlobale(int $statut_generation_globale) Return the first CommonTDossierFormulaire filtered by the statut_generation_globale column
 * @method CommonTDossierFormulaire findOneByTypeReponse(int $type_reponse) Return the first CommonTDossierFormulaire filtered by the type_reponse column
 * @method CommonTDossierFormulaire findOneByCleExterneFormulaire(int $cle_externe_formulaire) Return the first CommonTDossierFormulaire filtered by the cle_externe_formulaire column
 * @method CommonTDossierFormulaire findOneByFormulaireDepose(string $formulaire_depose) Return the first CommonTDossierFormulaire filtered by the formulaire_depose column
 * @method CommonTDossierFormulaire findOneByIdDossierPere(int $id_dossier_pere) Return the first CommonTDossierFormulaire filtered by the id_dossier_pere column
 *
 * @method array findByIdDossierFormulaire(int $id_dossier_formulaire) Return CommonTDossierFormulaire objects filtered by the id_dossier_formulaire column
 * @method array findByIdReponseElecFormulaire(int $id_reponse_elec_formulaire) Return CommonTDossierFormulaire objects filtered by the id_reponse_elec_formulaire column
 * @method array findByIdLot(int $id_lot) Return CommonTDossierFormulaire objects filtered by the id_lot column
 * @method array findByTypeEnveloppe(int $type_enveloppe) Return CommonTDossierFormulaire objects filtered by the type_enveloppe column
 * @method array findByLibelleForrmulaire(string $libelle_forrmulaire) Return CommonTDossierFormulaire objects filtered by the libelle_forrmulaire column
 * @method array findByCleExterneDispositif(int $cle_externe_dispositif) Return CommonTDossierFormulaire objects filtered by the cle_externe_dispositif column
 * @method array findByCleExterneDossier(int $cle_externe_dossier) Return CommonTDossierFormulaire objects filtered by the cle_externe_dossier column
 * @method array findByStatutValidation(string $statut_validation) Return CommonTDossierFormulaire objects filtered by the statut_validation column
 * @method array findByDateCreation(string $date_creation) Return CommonTDossierFormulaire objects filtered by the date_creation column
 * @method array findByDateModif(string $date_modif) Return CommonTDossierFormulaire objects filtered by the date_modif column
 * @method array findByDateValidation(string $date_validation) Return CommonTDossierFormulaire objects filtered by the date_validation column
 * @method array findByStatutGenerationGlobale(int $statut_generation_globale) Return CommonTDossierFormulaire objects filtered by the statut_generation_globale column
 * @method array findByTypeReponse(int $type_reponse) Return CommonTDossierFormulaire objects filtered by the type_reponse column
 * @method array findByCleExterneFormulaire(int $cle_externe_formulaire) Return CommonTDossierFormulaire objects filtered by the cle_externe_formulaire column
 * @method array findByFormulaireDepose(string $formulaire_depose) Return CommonTDossierFormulaire objects filtered by the formulaire_depose column
 * @method array findByIdDossierPere(int $id_dossier_pere) Return CommonTDossierFormulaire objects filtered by the id_dossier_pere column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTDossierFormulaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTDossierFormulaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTDossierFormulaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTDossierFormulaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTDossierFormulaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTDossierFormulaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTDossierFormulaireQuery) {
            return $criteria;
        }
        $query = new CommonTDossierFormulaireQuery();
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
     * @return   CommonTDossierFormulaire|CommonTDossierFormulaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTDossierFormulairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDossierFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdDossierFormulaire($key, $con = null)
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
     * @return                 CommonTDossierFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_dossier_formulaire`, `id_reponse_elec_formulaire`, `id_lot`, `type_enveloppe`, `libelle_forrmulaire`, `cle_externe_dispositif`, `cle_externe_dossier`, `statut_validation`, `date_creation`, `date_modif`, `date_validation`, `statut_generation_globale`, `type_reponse`, `cle_externe_formulaire`, `formulaire_depose`, `id_dossier_pere` FROM `t_dossier_formulaire` WHERE `id_dossier_formulaire` = :p0';
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
            $obj = new CommonTDossierFormulaire();
            $obj->hydrate($row);
            CommonTDossierFormulairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTDossierFormulaire|CommonTDossierFormulaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTDossierFormulaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $keys, Criteria::IN);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdDossierFormulaire($idDossierFormulaire = null, $comparison = null)
    {
        if (is_array($idDossierFormulaire)) {
            $useMinMax = false;
            if (isset($idDossierFormulaire['min'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDossierFormulaire['max'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $idDossierFormulaire, $comparison);
    }

    /**
     * Filter the query on the id_reponse_elec_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdReponseElecFormulaire(1234); // WHERE id_reponse_elec_formulaire = 1234
     * $query->filterByIdReponseElecFormulaire(array(12, 34)); // WHERE id_reponse_elec_formulaire IN (12, 34)
     * $query->filterByIdReponseElecFormulaire(array('min' => 12)); // WHERE id_reponse_elec_formulaire >= 12
     * $query->filterByIdReponseElecFormulaire(array('max' => 12)); // WHERE id_reponse_elec_formulaire <= 12
     * </code>
     *
     * @see       filterByCommonTReponseElecFormulaire()
     *
     * @param     mixed $idReponseElecFormulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdReponseElecFormulaire($idReponseElecFormulaire = null, $comparison = null)
    {
        if (is_array($idReponseElecFormulaire)) {
            $useMinMax = false;
            if (isset($idReponseElecFormulaire['min'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $idReponseElecFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReponseElecFormulaire['max'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $idReponseElecFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $idReponseElecFormulaire, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdLot($idLot = null, $comparison = null)
    {
        if (is_array($idLot)) {
            $useMinMax = false;
            if (isset($idLot['min'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::ID_LOT, $idLot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLot['max'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::ID_LOT, $idLot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDossierFormulairePeer::ID_LOT, $idLot, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByTypeEnveloppe($typeEnveloppe = null, $comparison = null)
    {
        if (is_array($typeEnveloppe)) {
            $useMinMax = false;
            if (isset($typeEnveloppe['min'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnveloppe['max'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDossierFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDossierFormulairePeer::LIBELLE_FORRMULAIRE, $libelleForrmulaire, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByCleExterneDispositif($cleExterneDispositif = null, $comparison = null)
    {
        if (is_array($cleExterneDispositif)) {
            $useMinMax = false;
            if (isset($cleExterneDispositif['min'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, $cleExterneDispositif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cleExterneDispositif['max'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, $cleExterneDispositif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, $cleExterneDispositif, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByCleExterneDossier($cleExterneDossier = null, $comparison = null)
    {
        if (is_array($cleExterneDossier)) {
            $useMinMax = false;
            if (isset($cleExterneDossier['min'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::CLE_EXTERNE_DOSSIER, $cleExterneDossier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cleExterneDossier['max'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::CLE_EXTERNE_DOSSIER, $cleExterneDossier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDossierFormulairePeer::CLE_EXTERNE_DOSSIER, $cleExterneDossier, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDossierFormulairePeer::STATUT_VALIDATION, $statutValidation, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDossierFormulairePeer::DATE_CREATION, $dateCreation, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDossierFormulairePeer::DATE_MODIF, $dateModif, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDossierFormulairePeer::DATE_VALIDATION, $dateValidation, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByStatutGenerationGlobale($statutGenerationGlobale = null, $comparison = null)
    {
        if (is_array($statutGenerationGlobale)) {
            $useMinMax = false;
            if (isset($statutGenerationGlobale['min'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::STATUT_GENERATION_GLOBALE, $statutGenerationGlobale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutGenerationGlobale['max'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::STATUT_GENERATION_GLOBALE, $statutGenerationGlobale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDossierFormulairePeer::STATUT_GENERATION_GLOBALE, $statutGenerationGlobale, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByTypeReponse($typeReponse = null, $comparison = null)
    {
        if (is_array($typeReponse)) {
            $useMinMax = false;
            if (isset($typeReponse['min'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::TYPE_REPONSE, $typeReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeReponse['max'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::TYPE_REPONSE, $typeReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDossierFormulairePeer::TYPE_REPONSE, $typeReponse, $comparison);
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
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByCleExterneFormulaire($cleExterneFormulaire = null, $comparison = null)
    {
        if (is_array($cleExterneFormulaire)) {
            $useMinMax = false;
            if (isset($cleExterneFormulaire['min'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE, $cleExterneFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cleExterneFormulaire['max'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE, $cleExterneFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDossierFormulairePeer::CLE_EXTERNE_FORMULAIRE, $cleExterneFormulaire, $comparison);
    }

    /**
     * Filter the query on the formulaire_depose column
     *
     * Example usage:
     * <code>
     * $query->filterByFormulaireDepose('fooValue');   // WHERE formulaire_depose = 'fooValue'
     * $query->filterByFormulaireDepose('%fooValue%'); // WHERE formulaire_depose LIKE '%fooValue%'
     * </code>
     *
     * @param     string $formulaireDepose The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByFormulaireDepose($formulaireDepose = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($formulaireDepose)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $formulaireDepose)) {
                $formulaireDepose = str_replace('*', '%', $formulaireDepose);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDossierFormulairePeer::FORMULAIRE_DEPOSE, $formulaireDepose, $comparison);
    }

    /**
     * Filter the query on the id_dossier_pere column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDossierPere(1234); // WHERE id_dossier_pere = 1234
     * $query->filterByIdDossierPere(array(12, 34)); // WHERE id_dossier_pere IN (12, 34)
     * $query->filterByIdDossierPere(array('min' => 12)); // WHERE id_dossier_pere >= 12
     * $query->filterByIdDossierPere(array('max' => 12)); // WHERE id_dossier_pere <= 12
     * </code>
     *
     * @param     mixed $idDossierPere The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdDossierPere($idDossierPere = null, $comparison = null)
    {
        if (is_array($idDossierPere)) {
            $useMinMax = false;
            if (isset($idDossierPere['min'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::ID_DOSSIER_PERE, $idDossierPere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDossierPere['max'])) {
                $this->addUsingAlias(CommonTDossierFormulairePeer::ID_DOSSIER_PERE, $idDossierPere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDossierFormulairePeer::ID_DOSSIER_PERE, $idDossierPere, $comparison);
    }

    /**
     * Filter the query by a related CommonTReponseElecFormulaire object
     *
     * @param   CommonTReponseElecFormulaire|PropelObjectCollection $commonTReponseElecFormulaire The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTDossierFormulaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTReponseElecFormulaire($commonTReponseElecFormulaire, $comparison = null)
    {
        if ($commonTReponseElecFormulaire instanceof CommonTReponseElecFormulaire) {
            return $this
                ->addUsingAlias(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $commonTReponseElecFormulaire->getIdReponseElecFormulaire(), $comparison);
        } elseif ($commonTReponseElecFormulaire instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTDossierFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $commonTReponseElecFormulaire->toKeyValue('PrimaryKey', 'IdReponseElecFormulaire'), $comparison);
        } else {
            throw new PropelException('filterByCommonTReponseElecFormulaire() only accepts arguments of type CommonTReponseElecFormulaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTReponseElecFormulaire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function joinCommonTReponseElecFormulaire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTReponseElecFormulaire');

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
            $this->addJoinObject($join, 'CommonTReponseElecFormulaire');
        }

        return $this;
    }

    /**
     * Use the CommonTReponseElecFormulaire relation CommonTReponseElecFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTReponseElecFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonTReponseElecFormulaireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTReponseElecFormulaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTReponseElecFormulaire', 'CommonTReponseElecFormulaireQuery');
    }

    /**
     * Filter the query by a related CommonTEditionFormulaire object
     *
     * @param   CommonTEditionFormulaire|PropelObjectCollection $commonTEditionFormulaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTDossierFormulaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTEditionFormulaire($commonTEditionFormulaire, $comparison = null)
    {
        if ($commonTEditionFormulaire instanceof CommonTEditionFormulaire) {
            return $this
                ->addUsingAlias(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $commonTEditionFormulaire->getIdDossierFormulaire(), $comparison);
        } elseif ($commonTEditionFormulaire instanceof PropelObjectCollection) {
            return $this
                ->useCommonTEditionFormulaireQuery()
                ->filterByPrimaryKeys($commonTEditionFormulaire->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTEditionFormulaire() only accepts arguments of type CommonTEditionFormulaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTEditionFormulaire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function joinCommonTEditionFormulaire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTEditionFormulaire');

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
            $this->addJoinObject($join, 'CommonTEditionFormulaire');
        }

        return $this;
    }

    /**
     * Use the CommonTEditionFormulaire relation CommonTEditionFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTEditionFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonTEditionFormulaireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTEditionFormulaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTEditionFormulaire', 'CommonTEditionFormulaireQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTDossierFormulaire $commonTDossierFormulaire Object to remove from the list of results
     *
     * @return CommonTDossierFormulaireQuery The current query, for fluid interface
     */
    public function prune($commonTDossierFormulaire = null)
    {
        if ($commonTDossierFormulaire) {
            $this->addUsingAlias(CommonTDossierFormulairePeer::ID_DOSSIER_FORMULAIRE, $commonTDossierFormulaire->getIdDossierFormulaire(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
