<?php


/**
 * Base class that represents a query for the 't_depot_demande' table.
 *
 * 
 *
 * @method TDepotDemandeQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method TDepotDemandeQuery orderByIdDemandeur($order = Criteria::ASC) Order by the ID_DEMANDEUR column
 * @method TDepotDemandeQuery orderByIdEntiteDemandeur($order = Criteria::ASC) Order by the ID_ENTITE_DEMANDEUR column
 *
 * @method TDepotDemandeQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method TDepotDemandeQuery groupByIdDemandeur() Group by the ID_DEMANDEUR column
 * @method TDepotDemandeQuery groupByIdEntiteDemandeur() Group by the ID_ENTITE_DEMANDEUR column
 *
 * @method TDepotDemandeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TDepotDemandeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TDepotDemandeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TDepotDemande findOne(PropelPDO $con = null) Return the first TDepotDemande matching the query
 * @method TDepotDemande findOneOrCreate(PropelPDO $con = null) Return the first TDepotDemande matching the query, or a new TDepotDemande object populated from the query conditions when no match is found
 *
 * @method TDepotDemande findOneByIdDemande(int $ID_DEMANDE) Return the first TDepotDemande filtered by the ID_DEMANDE column
 * @method TDepotDemande findOneByIdDemandeur(int $ID_DEMANDEUR) Return the first TDepotDemande filtered by the ID_DEMANDEUR column
 * @method TDepotDemande findOneByIdEntiteDemandeur(string $ID_ENTITE_DEMANDEUR) Return the first TDepotDemande filtered by the ID_ENTITE_DEMANDEUR column
 *
 * @method array findByIdDemande(int $ID_DEMANDE) Return TDepotDemande objects filtered by the ID_DEMANDE column
 * @method array findByIdDemandeur(int $ID_DEMANDEUR) Return TDepotDemande objects filtered by the ID_DEMANDEUR column
 * @method array findByIdEntiteDemandeur(string $ID_ENTITE_DEMANDEUR) Return TDepotDemande objects filtered by the ID_ENTITE_DEMANDEUR column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTDepotDemandeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTDepotDemandeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TDepotDemande', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TDepotDemandeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TDepotDemandeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TDepotDemandeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TDepotDemandeQuery) {
            return $criteria;
        }
        $query = new TDepotDemandeQuery();
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
                         A Primary key composition: [$ID_DEMANDE, $ID_DEMANDEUR]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   TDepotDemande|TDepotDemande[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TDepotDemandePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TDepotDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TDepotDemande A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_DEMANDE`, `ID_DEMANDEUR`, `ID_ENTITE_DEMANDEUR` FROM `t_depot_demande` WHERE `ID_DEMANDE` = :p0 AND `ID_DEMANDEUR` = :p1';
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
            $obj = new TDepotDemande();
            $obj->hydrate($row);
            TDepotDemandePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return TDepotDemande|TDepotDemande[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TDepotDemande[]|mixed the list of results, formatted by the current formatter
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
     * @return TDepotDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(TDepotDemandePeer::ID_DEMANDE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(TDepotDemandePeer::ID_DEMANDEUR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TDepotDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(TDepotDemandePeer::ID_DEMANDE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(TDepotDemandePeer::ID_DEMANDEUR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return TDepotDemandeQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(TDepotDemandePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(TDepotDemandePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDepotDemandePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemandeur(1234); // WHERE ID_DEMANDEUR = 1234
     * $query->filterByIdDemandeur(array(12, 34)); // WHERE ID_DEMANDEUR IN (12, 34)
     * $query->filterByIdDemandeur(array('min' => 12)); // WHERE ID_DEMANDEUR >= 12
     * $query->filterByIdDemandeur(array('max' => 12)); // WHERE ID_DEMANDEUR <= 12
     * </code>
     *
     * @param     mixed $idDemandeur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDepotDemandeQuery The current query, for fluid interface
     */
    public function filterByIdDemandeur($idDemandeur = null, $comparison = null)
    {
        if (is_array($idDemandeur)) {
            $useMinMax = false;
            if (isset($idDemandeur['min'])) {
                $this->addUsingAlias(TDepotDemandePeer::ID_DEMANDEUR, $idDemandeur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemandeur['max'])) {
                $this->addUsingAlias(TDepotDemandePeer::ID_DEMANDEUR, $idDemandeur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDepotDemandePeer::ID_DEMANDEUR, $idDemandeur, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteDemandeur('fooValue');   // WHERE ID_ENTITE_DEMANDEUR = 'fooValue'
     * $query->filterByIdEntiteDemandeur('%fooValue%'); // WHERE ID_ENTITE_DEMANDEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idEntiteDemandeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDepotDemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteDemandeur($idEntiteDemandeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idEntiteDemandeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idEntiteDemandeur)) {
                $idEntiteDemandeur = str_replace('*', '%', $idEntiteDemandeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDepotDemandePeer::ID_ENTITE_DEMANDEUR, $idEntiteDemandeur, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TDepotDemande $tDepotDemande Object to remove from the list of results
     *
     * @return TDepotDemandeQuery The current query, for fluid interface
     */
    public function prune($tDepotDemande = null)
    {
        if ($tDepotDemande) {
            $this->addCond('pruneCond0', $this->getAliasedColName(TDepotDemandePeer::ID_DEMANDE), $tDepotDemande->getIdDemande(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(TDepotDemandePeer::ID_DEMANDEUR), $tDepotDemande->getIdDemandeur(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
