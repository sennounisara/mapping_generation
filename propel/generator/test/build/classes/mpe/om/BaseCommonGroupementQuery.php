<?php


/**
 * Base class that represents a query for the 'groupement' table.
 *
 * 
 *
 * @method CommonGroupementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonGroupementQuery orderByRefConsultation($order = Criteria::ASC) Order by the ref_consultation column
 * @method CommonGroupementQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonGroupementQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonGroupementQuery orderByNomGroupement($order = Criteria::ASC) Order by the nom_groupement column
 * @method CommonGroupementQuery orderByTypeGroupement($order = Criteria::ASC) Order by the type_groupement column
 * @method CommonGroupementQuery orderByInvitationEnvoye($order = Criteria::ASC) Order by the invitation_envoye column
 *
 * @method CommonGroupementQuery groupById() Group by the id column
 * @method CommonGroupementQuery groupByRefConsultation() Group by the ref_consultation column
 * @method CommonGroupementQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonGroupementQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonGroupementQuery groupByNomGroupement() Group by the nom_groupement column
 * @method CommonGroupementQuery groupByTypeGroupement() Group by the type_groupement column
 * @method CommonGroupementQuery groupByInvitationEnvoye() Group by the invitation_envoye column
 *
 * @method CommonGroupementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonGroupementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonGroupementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonGroupementQuery leftJoinCommonMandataire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonMandataire relation
 * @method CommonGroupementQuery rightJoinCommonMandataire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonMandataire relation
 * @method CommonGroupementQuery innerJoinCommonMandataire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonMandataire relation
 *
 * @method CommonGroupement findOne(PropelPDO $con = null) Return the first CommonGroupement matching the query
 * @method CommonGroupement findOneOrCreate(PropelPDO $con = null) Return the first CommonGroupement matching the query, or a new CommonGroupement object populated from the query conditions when no match is found
 *
 * @method CommonGroupement findOneByRefConsultation(int $ref_consultation) Return the first CommonGroupement filtered by the ref_consultation column
 * @method CommonGroupement findOneByIdEntreprise(int $id_entreprise) Return the first CommonGroupement filtered by the id_entreprise column
 * @method CommonGroupement findOneByIdInscrit(int $id_inscrit) Return the first CommonGroupement filtered by the id_inscrit column
 * @method CommonGroupement findOneByNomGroupement(string $nom_groupement) Return the first CommonGroupement filtered by the nom_groupement column
 * @method CommonGroupement findOneByTypeGroupement(string $type_groupement) Return the first CommonGroupement filtered by the type_groupement column
 * @method CommonGroupement findOneByInvitationEnvoye(string $invitation_envoye) Return the first CommonGroupement filtered by the invitation_envoye column
 *
 * @method array findById(int $id) Return CommonGroupement objects filtered by the id column
 * @method array findByRefConsultation(int $ref_consultation) Return CommonGroupement objects filtered by the ref_consultation column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonGroupement objects filtered by the id_entreprise column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonGroupement objects filtered by the id_inscrit column
 * @method array findByNomGroupement(string $nom_groupement) Return CommonGroupement objects filtered by the nom_groupement column
 * @method array findByTypeGroupement(string $type_groupement) Return CommonGroupement objects filtered by the type_groupement column
 * @method array findByInvitationEnvoye(string $invitation_envoye) Return CommonGroupement objects filtered by the invitation_envoye column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonGroupementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonGroupementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonGroupement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonGroupementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonGroupementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonGroupementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonGroupementQuery) {
            return $criteria;
        }
        $query = new CommonGroupementQuery();
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
     * @return   CommonGroupement|CommonGroupement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonGroupementPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonGroupementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonGroupement A model object, or null if the key is not found
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
     * @return                 CommonGroupement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `ref_consultation`, `id_entreprise`, `id_inscrit`, `nom_groupement`, `type_groupement`, `invitation_envoye` FROM `groupement` WHERE `id` = :p0';
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
            $obj = new CommonGroupement();
            $obj->hydrate($row);
            CommonGroupementPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonGroupement|CommonGroupement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonGroupement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonGroupementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonGroupementPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonGroupementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonGroupementPeer::ID, $keys, Criteria::IN);
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
     * @return CommonGroupementQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonGroupementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonGroupementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGroupementPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ref_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByRefConsultation(1234); // WHERE ref_consultation = 1234
     * $query->filterByRefConsultation(array(12, 34)); // WHERE ref_consultation IN (12, 34)
     * $query->filterByRefConsultation(array('min' => 12)); // WHERE ref_consultation >= 12
     * $query->filterByRefConsultation(array('max' => 12)); // WHERE ref_consultation <= 12
     * </code>
     *
     * @param     mixed $refConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGroupementQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (is_array($refConsultation)) {
            $useMinMax = false;
            if (isset($refConsultation['min'])) {
                $this->addUsingAlias(CommonGroupementPeer::REF_CONSULTATION, $refConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refConsultation['max'])) {
                $this->addUsingAlias(CommonGroupementPeer::REF_CONSULTATION, $refConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGroupementPeer::REF_CONSULTATION, $refConsultation, $comparison);
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
     * @return CommonGroupementQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonGroupementPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonGroupementPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGroupementPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
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
     * @return CommonGroupementQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonGroupementPeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonGroupementPeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGroupementPeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the nom_groupement column
     *
     * Example usage:
     * <code>
     * $query->filterByNomGroupement('fooValue');   // WHERE nom_groupement = 'fooValue'
     * $query->filterByNomGroupement('%fooValue%'); // WHERE nom_groupement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomGroupement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGroupementQuery The current query, for fluid interface
     */
    public function filterByNomGroupement($nomGroupement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomGroupement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomGroupement)) {
                $nomGroupement = str_replace('*', '%', $nomGroupement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGroupementPeer::NOM_GROUPEMENT, $nomGroupement, $comparison);
    }

    /**
     * Filter the query on the type_groupement column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeGroupement('fooValue');   // WHERE type_groupement = 'fooValue'
     * $query->filterByTypeGroupement('%fooValue%'); // WHERE type_groupement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeGroupement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGroupementQuery The current query, for fluid interface
     */
    public function filterByTypeGroupement($typeGroupement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeGroupement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeGroupement)) {
                $typeGroupement = str_replace('*', '%', $typeGroupement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGroupementPeer::TYPE_GROUPEMENT, $typeGroupement, $comparison);
    }

    /**
     * Filter the query on the invitation_envoye column
     *
     * Example usage:
     * <code>
     * $query->filterByInvitationEnvoye('fooValue');   // WHERE invitation_envoye = 'fooValue'
     * $query->filterByInvitationEnvoye('%fooValue%'); // WHERE invitation_envoye LIKE '%fooValue%'
     * </code>
     *
     * @param     string $invitationEnvoye The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGroupementQuery The current query, for fluid interface
     */
    public function filterByInvitationEnvoye($invitationEnvoye = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($invitationEnvoye)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $invitationEnvoye)) {
                $invitationEnvoye = str_replace('*', '%', $invitationEnvoye);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGroupementPeer::INVITATION_ENVOYE, $invitationEnvoye, $comparison);
    }

    /**
     * Filter the query by a related CommonMandataire object
     *
     * @param   CommonMandataire|PropelObjectCollection $commonMandataire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonGroupementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonMandataire($commonMandataire, $comparison = null)
    {
        if ($commonMandataire instanceof CommonMandataire) {
            return $this
                ->addUsingAlias(CommonGroupementPeer::ID, $commonMandataire->getIdGroupement(), $comparison);
        } elseif ($commonMandataire instanceof PropelObjectCollection) {
            return $this
                ->useCommonMandataireQuery()
                ->filterByPrimaryKeys($commonMandataire->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonMandataire() only accepts arguments of type CommonMandataire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonMandataire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonGroupementQuery The current query, for fluid interface
     */
    public function joinCommonMandataire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonMandataire');

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
            $this->addJoinObject($join, 'CommonMandataire');
        }

        return $this;
    }

    /**
     * Use the CommonMandataire relation CommonMandataire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonMandataireQuery A secondary query class using the current class as primary query
     */
    public function useCommonMandataireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonMandataire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonMandataire', 'CommonMandataireQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonGroupement $commonGroupement Object to remove from the list of results
     *
     * @return CommonGroupementQuery The current query, for fluid interface
     */
    public function prune($commonGroupement = null)
    {
        if ($commonGroupement) {
            $this->addUsingAlias(CommonGroupementPeer::ID, $commonGroupement->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
