<?php


/**
 * Base class that represents a query for the 'exec_penalite' table.
 *
 * 
 *
 * @method CommonExecPenaliteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecPenaliteQuery orderByIdDossierPaiement($order = Criteria::ASC) Order by the id_dossier_paiement column
 * @method CommonExecPenaliteQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecPenaliteQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonExecPenaliteQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonExecPenaliteQuery orderByMontantPenalite($order = Criteria::ASC) Order by the montant_penalite column
 *
 * @method CommonExecPenaliteQuery groupById() Group by the id column
 * @method CommonExecPenaliteQuery groupByIdDossierPaiement() Group by the id_dossier_paiement column
 * @method CommonExecPenaliteQuery groupByLibelle() Group by the libelle column
 * @method CommonExecPenaliteQuery groupByTaille() Group by the taille column
 * @method CommonExecPenaliteQuery groupByIdBlob() Group by the id_blob column
 * @method CommonExecPenaliteQuery groupByMontantPenalite() Group by the montant_penalite column
 *
 * @method CommonExecPenaliteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecPenaliteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecPenaliteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecPenaliteQuery leftJoinCommonExecDossierPaiement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecDossierPaiement relation
 * @method CommonExecPenaliteQuery rightJoinCommonExecDossierPaiement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecDossierPaiement relation
 * @method CommonExecPenaliteQuery innerJoinCommonExecDossierPaiement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecDossierPaiement relation
 *
 * @method CommonExecPenalite findOne(PropelPDO $con = null) Return the first CommonExecPenalite matching the query
 * @method CommonExecPenalite findOneOrCreate(PropelPDO $con = null) Return the first CommonExecPenalite matching the query, or a new CommonExecPenalite object populated from the query conditions when no match is found
 *
 * @method CommonExecPenalite findOneByIdDossierPaiement(int $id_dossier_paiement) Return the first CommonExecPenalite filtered by the id_dossier_paiement column
 * @method CommonExecPenalite findOneByLibelle(string $libelle) Return the first CommonExecPenalite filtered by the libelle column
 * @method CommonExecPenalite findOneByTaille(string $taille) Return the first CommonExecPenalite filtered by the taille column
 * @method CommonExecPenalite findOneByIdBlob(int $id_blob) Return the first CommonExecPenalite filtered by the id_blob column
 * @method CommonExecPenalite findOneByMontantPenalite(double $montant_penalite) Return the first CommonExecPenalite filtered by the montant_penalite column
 *
 * @method array findById(int $id) Return CommonExecPenalite objects filtered by the id column
 * @method array findByIdDossierPaiement(int $id_dossier_paiement) Return CommonExecPenalite objects filtered by the id_dossier_paiement column
 * @method array findByLibelle(string $libelle) Return CommonExecPenalite objects filtered by the libelle column
 * @method array findByTaille(string $taille) Return CommonExecPenalite objects filtered by the taille column
 * @method array findByIdBlob(int $id_blob) Return CommonExecPenalite objects filtered by the id_blob column
 * @method array findByMontantPenalite(double $montant_penalite) Return CommonExecPenalite objects filtered by the montant_penalite column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecPenaliteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecPenaliteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecPenalite', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecPenaliteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecPenaliteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecPenaliteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecPenaliteQuery) {
            return $criteria;
        }
        $query = new CommonExecPenaliteQuery();
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
     * @return   CommonExecPenalite|CommonExecPenalite[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecPenalitePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPenalitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPenalite A model object, or null if the key is not found
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
     * @return                 CommonExecPenalite A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_dossier_paiement`, `libelle`, `taille`, `id_blob`, `montant_penalite` FROM `exec_penalite` WHERE `id` = :p0';
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
            $obj = new CommonExecPenalite();
            $obj->hydrate($row);
            CommonExecPenalitePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecPenalite|CommonExecPenalite[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecPenalite[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecPenaliteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecPenalitePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecPenaliteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecPenalitePeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecPenaliteQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecPenalitePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecPenalitePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPenalitePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_dossier_paiement column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDossierPaiement(1234); // WHERE id_dossier_paiement = 1234
     * $query->filterByIdDossierPaiement(array(12, 34)); // WHERE id_dossier_paiement IN (12, 34)
     * $query->filterByIdDossierPaiement(array('min' => 12)); // WHERE id_dossier_paiement >= 12
     * $query->filterByIdDossierPaiement(array('max' => 12)); // WHERE id_dossier_paiement <= 12
     * </code>
     *
     * @see       filterByCommonExecDossierPaiement()
     *
     * @param     mixed $idDossierPaiement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPenaliteQuery The current query, for fluid interface
     */
    public function filterByIdDossierPaiement($idDossierPaiement = null, $comparison = null)
    {
        if (is_array($idDossierPaiement)) {
            $useMinMax = false;
            if (isset($idDossierPaiement['min'])) {
                $this->addUsingAlias(CommonExecPenalitePeer::ID_DOSSIER_PAIEMENT, $idDossierPaiement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDossierPaiement['max'])) {
                $this->addUsingAlias(CommonExecPenalitePeer::ID_DOSSIER_PAIEMENT, $idDossierPaiement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPenalitePeer::ID_DOSSIER_PAIEMENT, $idDossierPaiement, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPenaliteQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPenalitePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the taille column
     *
     * Example usage:
     * <code>
     * $query->filterByTaille('fooValue');   // WHERE taille = 'fooValue'
     * $query->filterByTaille('%fooValue%'); // WHERE taille LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPenaliteQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taille)) {
                $taille = str_replace('*', '%', $taille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPenalitePeer::TAILLE, $taille, $comparison);
    }

    /**
     * Filter the query on the id_blob column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlob(1234); // WHERE id_blob = 1234
     * $query->filterByIdBlob(array(12, 34)); // WHERE id_blob IN (12, 34)
     * $query->filterByIdBlob(array('min' => 12)); // WHERE id_blob >= 12
     * $query->filterByIdBlob(array('max' => 12)); // WHERE id_blob <= 12
     * </code>
     *
     * @param     mixed $idBlob The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPenaliteQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonExecPenalitePeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonExecPenalitePeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPenalitePeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the montant_penalite column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantPenalite(1234); // WHERE montant_penalite = 1234
     * $query->filterByMontantPenalite(array(12, 34)); // WHERE montant_penalite IN (12, 34)
     * $query->filterByMontantPenalite(array('min' => 12)); // WHERE montant_penalite >= 12
     * $query->filterByMontantPenalite(array('max' => 12)); // WHERE montant_penalite <= 12
     * </code>
     *
     * @param     mixed $montantPenalite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPenaliteQuery The current query, for fluid interface
     */
    public function filterByMontantPenalite($montantPenalite = null, $comparison = null)
    {
        if (is_array($montantPenalite)) {
            $useMinMax = false;
            if (isset($montantPenalite['min'])) {
                $this->addUsingAlias(CommonExecPenalitePeer::MONTANT_PENALITE, $montantPenalite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantPenalite['max'])) {
                $this->addUsingAlias(CommonExecPenalitePeer::MONTANT_PENALITE, $montantPenalite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPenalitePeer::MONTANT_PENALITE, $montantPenalite, $comparison);
    }

    /**
     * Filter the query by a related CommonExecDossierPaiement object
     *
     * @param   CommonExecDossierPaiement|PropelObjectCollection $commonExecDossierPaiement The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPenaliteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecDossierPaiement($commonExecDossierPaiement, $comparison = null)
    {
        if ($commonExecDossierPaiement instanceof CommonExecDossierPaiement) {
            return $this
                ->addUsingAlias(CommonExecPenalitePeer::ID_DOSSIER_PAIEMENT, $commonExecDossierPaiement->getId(), $comparison);
        } elseif ($commonExecDossierPaiement instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPenalitePeer::ID_DOSSIER_PAIEMENT, $commonExecDossierPaiement->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecDossierPaiement() only accepts arguments of type CommonExecDossierPaiement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecDossierPaiement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecPenaliteQuery The current query, for fluid interface
     */
    public function joinCommonExecDossierPaiement($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecDossierPaiement');

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
            $this->addJoinObject($join, 'CommonExecDossierPaiement');
        }

        return $this;
    }

    /**
     * Use the CommonExecDossierPaiement relation CommonExecDossierPaiement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecDossierPaiementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecDossierPaiementQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecDossierPaiement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecDossierPaiement', 'CommonExecDossierPaiementQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecPenalite $commonExecPenalite Object to remove from the list of results
     *
     * @return CommonExecPenaliteQuery The current query, for fluid interface
     */
    public function prune($commonExecPenalite = null)
    {
        if ($commonExecPenalite) {
            $this->addUsingAlias(CommonExecPenalitePeer::ID, $commonExecPenalite->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
