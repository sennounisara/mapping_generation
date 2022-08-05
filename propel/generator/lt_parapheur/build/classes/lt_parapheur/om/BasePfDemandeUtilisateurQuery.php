<?php


/**
 * Base class that represents a query for the 'pf_demande_utilisateur' table.
 *
 * 
 *
 * @method PfDemandeUtilisateurQuery orderByIdUtilisateur($order = Criteria::ASC) Order by the ID_UTILISATEUR column
 * @method PfDemandeUtilisateurQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 *
 * @method PfDemandeUtilisateurQuery groupByIdUtilisateur() Group by the ID_UTILISATEUR column
 * @method PfDemandeUtilisateurQuery groupByIdDemande() Group by the ID_DEMANDE column
 *
 * @method PfDemandeUtilisateurQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfDemandeUtilisateurQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfDemandeUtilisateurQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfDemandeUtilisateur findOne(PropelPDO $con = null) Return the first PfDemandeUtilisateur matching the query
 * @method PfDemandeUtilisateur findOneOrCreate(PropelPDO $con = null) Return the first PfDemandeUtilisateur matching the query, or a new PfDemandeUtilisateur object populated from the query conditions when no match is found
 *
 * @method PfDemandeUtilisateur findOneByIdUtilisateur(int $ID_UTILISATEUR) Return the first PfDemandeUtilisateur filtered by the ID_UTILISATEUR column
 * @method PfDemandeUtilisateur findOneByIdDemande(int $ID_DEMANDE) Return the first PfDemandeUtilisateur filtered by the ID_DEMANDE column
 *
 * @method array findByIdUtilisateur(int $ID_UTILISATEUR) Return PfDemandeUtilisateur objects filtered by the ID_UTILISATEUR column
 * @method array findByIdDemande(int $ID_DEMANDE) Return PfDemandeUtilisateur objects filtered by the ID_DEMANDE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfDemandeUtilisateurQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfDemandeUtilisateurQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PfDemandeUtilisateur', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfDemandeUtilisateurQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfDemandeUtilisateurQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfDemandeUtilisateurQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfDemandeUtilisateurQuery) {
            return $criteria;
        }
        $query = new PfDemandeUtilisateurQuery();
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
                         A Primary key composition: [$ID_UTILISATEUR, $ID_DEMANDE]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   PfDemandeUtilisateur|PfDemandeUtilisateur[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfDemandeUtilisateurPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfDemandeUtilisateurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfDemandeUtilisateur A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_UTILISATEUR`, `ID_DEMANDE` FROM `pf_demande_utilisateur` WHERE `ID_UTILISATEUR` = :p0 AND `ID_DEMANDE` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new PfDemandeUtilisateur();
            $obj->hydrate($row);
            PfDemandeUtilisateurPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return PfDemandeUtilisateur|PfDemandeUtilisateur[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfDemandeUtilisateur[]|mixed the list of results, formatted by the current formatter
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
     * @return PfDemandeUtilisateurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(PfDemandeUtilisateurPeer::ID_UTILISATEUR, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(PfDemandeUtilisateurPeer::ID_DEMANDE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfDemandeUtilisateurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(PfDemandeUtilisateurPeer::ID_UTILISATEUR, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(PfDemandeUtilisateurPeer::ID_DEMANDE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ID_UTILISATEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUtilisateur(1234); // WHERE ID_UTILISATEUR = 1234
     * $query->filterByIdUtilisateur(array(12, 34)); // WHERE ID_UTILISATEUR IN (12, 34)
     * $query->filterByIdUtilisateur(array('min' => 12)); // WHERE ID_UTILISATEUR >= 12
     * $query->filterByIdUtilisateur(array('max' => 12)); // WHERE ID_UTILISATEUR <= 12
     * </code>
     *
     * @param     mixed $idUtilisateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfDemandeUtilisateurQuery The current query, for fluid interface
     */
    public function filterByIdUtilisateur($idUtilisateur = null, $comparison = null)
    {
        if (is_array($idUtilisateur)) {
            $useMinMax = false;
            if (isset($idUtilisateur['min'])) {
                $this->addUsingAlias(PfDemandeUtilisateurPeer::ID_UTILISATEUR, $idUtilisateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUtilisateur['max'])) {
                $this->addUsingAlias(PfDemandeUtilisateurPeer::ID_UTILISATEUR, $idUtilisateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfDemandeUtilisateurPeer::ID_UTILISATEUR, $idUtilisateur, $comparison);
    }

    /**
     * Filter the query on the ID_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemande(1234); // WHERE ID_DEMANDE = 1234
     * $query->filterByIdDemande(array(12, 34)); // WHERE ID_DEMANDE IN (12, 34)
     * $query->filterByIdDemande(array('min' => 12)); // WHERE ID_DEMANDE >= 12
     * $query->filterByIdDemande(array('max' => 12)); // WHERE ID_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfDemandeUtilisateurQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(PfDemandeUtilisateurPeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(PfDemandeUtilisateurPeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfDemandeUtilisateurPeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfDemandeUtilisateur $pfDemandeUtilisateur Object to remove from the list of results
     *
     * @return PfDemandeUtilisateurQuery The current query, for fluid interface
     */
    public function prune($pfDemandeUtilisateur = null)
    {
        if ($pfDemandeUtilisateur) {
            $this->addCond('pruneCond0', $this->getAliasedColName(PfDemandeUtilisateurPeer::ID_UTILISATEUR), $pfDemandeUtilisateur->getIdUtilisateur(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(PfDemandeUtilisateurPeer::ID_DEMANDE), $pfDemandeUtilisateur->getIdDemande(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
