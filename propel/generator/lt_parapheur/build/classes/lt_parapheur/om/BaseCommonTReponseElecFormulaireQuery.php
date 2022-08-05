<?php


/**
 * Base class that represents a query for the 't_reponse_elec_formulaire' table.
 *
 * 
 *
 * @method CommonTReponseElecFormulaireQuery orderByIdReponseElecFormulaire($order = Criteria::ASC) Order by the id_reponse_elec_formulaire column
 * @method CommonTReponseElecFormulaireQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTReponseElecFormulaireQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonTReponseElecFormulaireQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonTReponseElecFormulaireQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonTReponseElecFormulaireQuery orderByStatutValidationGlobale($order = Criteria::ASC) Order by the statut_validation_globale column
 *
 * @method CommonTReponseElecFormulaireQuery groupByIdReponseElecFormulaire() Group by the id_reponse_elec_formulaire column
 * @method CommonTReponseElecFormulaireQuery groupByOrganisme() Group by the organisme column
 * @method CommonTReponseElecFormulaireQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonTReponseElecFormulaireQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonTReponseElecFormulaireQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonTReponseElecFormulaireQuery groupByStatutValidationGlobale() Group by the statut_validation_globale column
 *
 * @method CommonTReponseElecFormulaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTReponseElecFormulaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTReponseElecFormulaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTReponseElecFormulaireQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonTReponseElecFormulaireQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonTReponseElecFormulaireQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonTReponseElecFormulaireQuery leftJoinCommonTDossierFormulaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTDossierFormulaire relation
 * @method CommonTReponseElecFormulaireQuery rightJoinCommonTDossierFormulaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTDossierFormulaire relation
 * @method CommonTReponseElecFormulaireQuery innerJoinCommonTDossierFormulaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTDossierFormulaire relation
 *
 * @method CommonTReponseElecFormulaire findOne(PropelPDO $con = null) Return the first CommonTReponseElecFormulaire matching the query
 * @method CommonTReponseElecFormulaire findOneOrCreate(PropelPDO $con = null) Return the first CommonTReponseElecFormulaire matching the query, or a new CommonTReponseElecFormulaire object populated from the query conditions when no match is found
 *
 * @method CommonTReponseElecFormulaire findOneByOrganisme(string $organisme) Return the first CommonTReponseElecFormulaire filtered by the organisme column
 * @method CommonTReponseElecFormulaire findOneByConsultationRef(int $consultation_ref) Return the first CommonTReponseElecFormulaire filtered by the consultation_ref column
 * @method CommonTReponseElecFormulaire findOneByIdEntreprise(int $id_entreprise) Return the first CommonTReponseElecFormulaire filtered by the id_entreprise column
 * @method CommonTReponseElecFormulaire findOneByIdInscrit(int $id_inscrit) Return the first CommonTReponseElecFormulaire filtered by the id_inscrit column
 * @method CommonTReponseElecFormulaire findOneByStatutValidationGlobale(int $statut_validation_globale) Return the first CommonTReponseElecFormulaire filtered by the statut_validation_globale column
 *
 * @method array findByIdReponseElecFormulaire(int $id_reponse_elec_formulaire) Return CommonTReponseElecFormulaire objects filtered by the id_reponse_elec_formulaire column
 * @method array findByOrganisme(string $organisme) Return CommonTReponseElecFormulaire objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonTReponseElecFormulaire objects filtered by the consultation_ref column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonTReponseElecFormulaire objects filtered by the id_entreprise column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonTReponseElecFormulaire objects filtered by the id_inscrit column
 * @method array findByStatutValidationGlobale(int $statut_validation_globale) Return CommonTReponseElecFormulaire objects filtered by the statut_validation_globale column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTReponseElecFormulaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTReponseElecFormulaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTReponseElecFormulaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTReponseElecFormulaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTReponseElecFormulaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTReponseElecFormulaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTReponseElecFormulaireQuery) {
            return $criteria;
        }
        $query = new CommonTReponseElecFormulaireQuery();
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
     * @return   CommonTReponseElecFormulaire|CommonTReponseElecFormulaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTReponseElecFormulairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTReponseElecFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTReponseElecFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdReponseElecFormulaire($key, $con = null)
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
     * @return                 CommonTReponseElecFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_reponse_elec_formulaire`, `organisme`, `consultation_ref`, `id_entreprise`, `id_inscrit`, `statut_validation_globale` FROM `t_reponse_elec_formulaire` WHERE `id_reponse_elec_formulaire` = :p0';
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
            $obj = new CommonTReponseElecFormulaire();
            $obj->hydrate($row);
            CommonTReponseElecFormulairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTReponseElecFormulaire|CommonTReponseElecFormulaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTReponseElecFormulaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTReponseElecFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTReponseElecFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $keys, Criteria::IN);
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
     * @param     mixed $idReponseElecFormulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTReponseElecFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdReponseElecFormulaire($idReponseElecFormulaire = null, $comparison = null)
    {
        if (is_array($idReponseElecFormulaire)) {
            $useMinMax = false;
            if (isset($idReponseElecFormulaire['min'])) {
                $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $idReponseElecFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReponseElecFormulaire['max'])) {
                $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $idReponseElecFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $idReponseElecFormulaire, $comparison);
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
     * @return CommonTReponseElecFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTReponseElecFormulairePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonTReponseElecFormulaireQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonTReponseElecFormulairePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonTReponseElecFormulairePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTReponseElecFormulairePeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTReponseElecFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTReponseElecFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the statut_validation_globale column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutValidationGlobale(1234); // WHERE statut_validation_globale = 1234
     * $query->filterByStatutValidationGlobale(array(12, 34)); // WHERE statut_validation_globale IN (12, 34)
     * $query->filterByStatutValidationGlobale(array('min' => 12)); // WHERE statut_validation_globale >= 12
     * $query->filterByStatutValidationGlobale(array('max' => 12)); // WHERE statut_validation_globale <= 12
     * </code>
     *
     * @param     mixed $statutValidationGlobale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTReponseElecFormulaireQuery The current query, for fluid interface
     */
    public function filterByStatutValidationGlobale($statutValidationGlobale = null, $comparison = null)
    {
        if (is_array($statutValidationGlobale)) {
            $useMinMax = false;
            if (isset($statutValidationGlobale['min'])) {
                $this->addUsingAlias(CommonTReponseElecFormulairePeer::STATUT_VALIDATION_GLOBALE, $statutValidationGlobale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutValidationGlobale['max'])) {
                $this->addUsingAlias(CommonTReponseElecFormulairePeer::STATUT_VALIDATION_GLOBALE, $statutValidationGlobale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTReponseElecFormulairePeer::STATUT_VALIDATION_GLOBALE, $statutValidationGlobale, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTReponseElecFormulaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonTReponseElecFormulairePeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonTReponseElecFormulairePeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
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
     * @return CommonTReponseElecFormulaireQuery The current query, for fluid interface
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
     * Filter the query by a related CommonTDossierFormulaire object
     *
     * @param   CommonTDossierFormulaire|PropelObjectCollection $commonTDossierFormulaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTReponseElecFormulaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTDossierFormulaire($commonTDossierFormulaire, $comparison = null)
    {
        if ($commonTDossierFormulaire instanceof CommonTDossierFormulaire) {
            return $this
                ->addUsingAlias(CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $commonTDossierFormulaire->getIdReponseElecFormulaire(), $comparison);
        } elseif ($commonTDossierFormulaire instanceof PropelObjectCollection) {
            return $this
                ->useCommonTDossierFormulaireQuery()
                ->filterByPrimaryKeys($commonTDossierFormulaire->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTDossierFormulaire() only accepts arguments of type CommonTDossierFormulaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTDossierFormulaire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTReponseElecFormulaireQuery The current query, for fluid interface
     */
    public function joinCommonTDossierFormulaire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTDossierFormulaire');

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
            $this->addJoinObject($join, 'CommonTDossierFormulaire');
        }

        return $this;
    }

    /**
     * Use the CommonTDossierFormulaire relation CommonTDossierFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTDossierFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonTDossierFormulaireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTDossierFormulaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTDossierFormulaire', 'CommonTDossierFormulaireQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTReponseElecFormulaire $commonTReponseElecFormulaire Object to remove from the list of results
     *
     * @return CommonTReponseElecFormulaireQuery The current query, for fluid interface
     */
    public function prune($commonTReponseElecFormulaire = null)
    {
        if ($commonTReponseElecFormulaire) {
            $this->addUsingAlias(CommonTReponseElecFormulairePeer::ID_REPONSE_ELEC_FORMULAIRE, $commonTReponseElecFormulaire->getIdReponseElecFormulaire(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
