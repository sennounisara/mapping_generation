<?php


/**
 * Base class that represents a query for the 't_param_dossier_formulaire' table.
 *
 * 
 *
 * @method CommonTParamDossierFormulaireQuery orderByIdParamDossierFormulaire($order = Criteria::ASC) Order by the id_param_dossier_formulaire column
 * @method CommonTParamDossierFormulaireQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTParamDossierFormulaireQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonTParamDossierFormulaireQuery orderByTypeEnveloppe($order = Criteria::ASC) Order by the type_enveloppe column
 * @method CommonTParamDossierFormulaireQuery orderByLibelleFormulaire($order = Criteria::ASC) Order by the libelle_formulaire column
 * @method CommonTParamDossierFormulaireQuery orderByCleExterneDispositif($order = Criteria::ASC) Order by the cle_externe_dispositif column
 *
 * @method CommonTParamDossierFormulaireQuery groupByIdParamDossierFormulaire() Group by the id_param_dossier_formulaire column
 * @method CommonTParamDossierFormulaireQuery groupByOrganisme() Group by the organisme column
 * @method CommonTParamDossierFormulaireQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonTParamDossierFormulaireQuery groupByTypeEnveloppe() Group by the type_enveloppe column
 * @method CommonTParamDossierFormulaireQuery groupByLibelleFormulaire() Group by the libelle_formulaire column
 * @method CommonTParamDossierFormulaireQuery groupByCleExterneDispositif() Group by the cle_externe_dispositif column
 *
 * @method CommonTParamDossierFormulaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTParamDossierFormulaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTParamDossierFormulaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTParamDossierFormulaireQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonTParamDossierFormulaireQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonTParamDossierFormulaireQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonTParamDossierFormulaire findOne(PropelPDO $con = null) Return the first CommonTParamDossierFormulaire matching the query
 * @method CommonTParamDossierFormulaire findOneOrCreate(PropelPDO $con = null) Return the first CommonTParamDossierFormulaire matching the query, or a new CommonTParamDossierFormulaire object populated from the query conditions when no match is found
 *
 * @method CommonTParamDossierFormulaire findOneByOrganisme(string $organisme) Return the first CommonTParamDossierFormulaire filtered by the organisme column
 * @method CommonTParamDossierFormulaire findOneByConsultationRef(int $consultation_ref) Return the first CommonTParamDossierFormulaire filtered by the consultation_ref column
 * @method CommonTParamDossierFormulaire findOneByTypeEnveloppe(int $type_enveloppe) Return the first CommonTParamDossierFormulaire filtered by the type_enveloppe column
 * @method CommonTParamDossierFormulaire findOneByLibelleFormulaire(string $libelle_formulaire) Return the first CommonTParamDossierFormulaire filtered by the libelle_formulaire column
 * @method CommonTParamDossierFormulaire findOneByCleExterneDispositif(int $cle_externe_dispositif) Return the first CommonTParamDossierFormulaire filtered by the cle_externe_dispositif column
 *
 * @method array findByIdParamDossierFormulaire(int $id_param_dossier_formulaire) Return CommonTParamDossierFormulaire objects filtered by the id_param_dossier_formulaire column
 * @method array findByOrganisme(string $organisme) Return CommonTParamDossierFormulaire objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonTParamDossierFormulaire objects filtered by the consultation_ref column
 * @method array findByTypeEnveloppe(int $type_enveloppe) Return CommonTParamDossierFormulaire objects filtered by the type_enveloppe column
 * @method array findByLibelleFormulaire(string $libelle_formulaire) Return CommonTParamDossierFormulaire objects filtered by the libelle_formulaire column
 * @method array findByCleExterneDispositif(int $cle_externe_dispositif) Return CommonTParamDossierFormulaire objects filtered by the cle_externe_dispositif column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTParamDossierFormulaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTParamDossierFormulaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTParamDossierFormulaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTParamDossierFormulaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTParamDossierFormulaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTParamDossierFormulaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTParamDossierFormulaireQuery) {
            return $criteria;
        }
        $query = new CommonTParamDossierFormulaireQuery();
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
     * @return   CommonTParamDossierFormulaire|CommonTParamDossierFormulaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTParamDossierFormulairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTParamDossierFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTParamDossierFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdParamDossierFormulaire($key, $con = null)
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
     * @return                 CommonTParamDossierFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_param_dossier_formulaire`, `organisme`, `consultation_ref`, `type_enveloppe`, `libelle_formulaire`, `cle_externe_dispositif` FROM `t_param_dossier_formulaire` WHERE `id_param_dossier_formulaire` = :p0';
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
            $obj = new CommonTParamDossierFormulaire();
            $obj->hydrate($row);
            CommonTParamDossierFormulairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTParamDossierFormulaire|CommonTParamDossierFormulaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTParamDossierFormulaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTParamDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTParamDossierFormulairePeer::ID_PARAM_DOSSIER_FORMULAIRE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTParamDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTParamDossierFormulairePeer::ID_PARAM_DOSSIER_FORMULAIRE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_param_dossier_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdParamDossierFormulaire(1234); // WHERE id_param_dossier_formulaire = 1234
     * $query->filterByIdParamDossierFormulaire(array(12, 34)); // WHERE id_param_dossier_formulaire IN (12, 34)
     * $query->filterByIdParamDossierFormulaire(array('min' => 12)); // WHERE id_param_dossier_formulaire >= 12
     * $query->filterByIdParamDossierFormulaire(array('max' => 12)); // WHERE id_param_dossier_formulaire <= 12
     * </code>
     *
     * @param     mixed $idParamDossierFormulaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTParamDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdParamDossierFormulaire($idParamDossierFormulaire = null, $comparison = null)
    {
        if (is_array($idParamDossierFormulaire)) {
            $useMinMax = false;
            if (isset($idParamDossierFormulaire['min'])) {
                $this->addUsingAlias(CommonTParamDossierFormulairePeer::ID_PARAM_DOSSIER_FORMULAIRE, $idParamDossierFormulaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParamDossierFormulaire['max'])) {
                $this->addUsingAlias(CommonTParamDossierFormulairePeer::ID_PARAM_DOSSIER_FORMULAIRE, $idParamDossierFormulaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTParamDossierFormulairePeer::ID_PARAM_DOSSIER_FORMULAIRE, $idParamDossierFormulaire, $comparison);
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
     * @return CommonTParamDossierFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTParamDossierFormulairePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonTParamDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonTParamDossierFormulairePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonTParamDossierFormulairePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTParamDossierFormulairePeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return CommonTParamDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByTypeEnveloppe($typeEnveloppe = null, $comparison = null)
    {
        if (is_array($typeEnveloppe)) {
            $useMinMax = false;
            if (isset($typeEnveloppe['min'])) {
                $this->addUsingAlias(CommonTParamDossierFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnveloppe['max'])) {
                $this->addUsingAlias(CommonTParamDossierFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTParamDossierFormulairePeer::TYPE_ENVELOPPE, $typeEnveloppe, $comparison);
    }

    /**
     * Filter the query on the libelle_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFormulaire('fooValue');   // WHERE libelle_formulaire = 'fooValue'
     * $query->filterByLibelleFormulaire('%fooValue%'); // WHERE libelle_formulaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFormulaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTParamDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByLibelleFormulaire($libelleFormulaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFormulaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFormulaire)) {
                $libelleFormulaire = str_replace('*', '%', $libelleFormulaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTParamDossierFormulairePeer::LIBELLE_FORMULAIRE, $libelleFormulaire, $comparison);
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
     * @return CommonTParamDossierFormulaireQuery The current query, for fluid interface
     */
    public function filterByCleExterneDispositif($cleExterneDispositif = null, $comparison = null)
    {
        if (is_array($cleExterneDispositif)) {
            $useMinMax = false;
            if (isset($cleExterneDispositif['min'])) {
                $this->addUsingAlias(CommonTParamDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, $cleExterneDispositif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cleExterneDispositif['max'])) {
                $this->addUsingAlias(CommonTParamDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, $cleExterneDispositif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTParamDossierFormulairePeer::CLE_EXTERNE_DISPOSITIF, $cleExterneDispositif, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTParamDossierFormulaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonTParamDossierFormulairePeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonTParamDossierFormulairePeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
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
     * @return CommonTParamDossierFormulaireQuery The current query, for fluid interface
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
     * @param   CommonTParamDossierFormulaire $commonTParamDossierFormulaire Object to remove from the list of results
     *
     * @return CommonTParamDossierFormulaireQuery The current query, for fluid interface
     */
    public function prune($commonTParamDossierFormulaire = null)
    {
        if ($commonTParamDossierFormulaire) {
            $this->addUsingAlias(CommonTParamDossierFormulairePeer::ID_PARAM_DOSSIER_FORMULAIRE, $commonTParamDossierFormulaire->getIdParamDossierFormulaire(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
