<?php


/**
 * Base class that represents a query for the 't_check_list_etape_demande' table.
 *
 * 
 *
 * @method TCheckListEtapeDemandeQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TCheckListEtapeDemandeQuery orderByIdEtapeCircuitDemande($order = Criteria::ASC) Order by the ID_ETAPE_CIRCUIT_DEMANDE column
 * @method TCheckListEtapeDemandeQuery orderByLibelleFr($order = Criteria::ASC) Order by the LIBELLE_FR column
 * @method TCheckListEtapeDemandeQuery orderByLibelleAr($order = Criteria::ASC) Order by the LIBELLE_AR column
 *
 * @method TCheckListEtapeDemandeQuery groupById() Group by the ID column
 * @method TCheckListEtapeDemandeQuery groupByIdEtapeCircuitDemande() Group by the ID_ETAPE_CIRCUIT_DEMANDE column
 * @method TCheckListEtapeDemandeQuery groupByLibelleFr() Group by the LIBELLE_FR column
 * @method TCheckListEtapeDemandeQuery groupByLibelleAr() Group by the LIBELLE_AR column
 *
 * @method TCheckListEtapeDemandeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TCheckListEtapeDemandeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TCheckListEtapeDemandeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TCheckListEtapeDemande findOne(PropelPDO $con = null) Return the first TCheckListEtapeDemande matching the query
 * @method TCheckListEtapeDemande findOneOrCreate(PropelPDO $con = null) Return the first TCheckListEtapeDemande matching the query, or a new TCheckListEtapeDemande object populated from the query conditions when no match is found
 *
 * @method TCheckListEtapeDemande findOneByIdEtapeCircuitDemande(int $ID_ETAPE_CIRCUIT_DEMANDE) Return the first TCheckListEtapeDemande filtered by the ID_ETAPE_CIRCUIT_DEMANDE column
 * @method TCheckListEtapeDemande findOneByLibelleFr(string $LIBELLE_FR) Return the first TCheckListEtapeDemande filtered by the LIBELLE_FR column
 * @method TCheckListEtapeDemande findOneByLibelleAr(string $LIBELLE_AR) Return the first TCheckListEtapeDemande filtered by the LIBELLE_AR column
 *
 * @method array findById(int $ID) Return TCheckListEtapeDemande objects filtered by the ID column
 * @method array findByIdEtapeCircuitDemande(int $ID_ETAPE_CIRCUIT_DEMANDE) Return TCheckListEtapeDemande objects filtered by the ID_ETAPE_CIRCUIT_DEMANDE column
 * @method array findByLibelleFr(string $LIBELLE_FR) Return TCheckListEtapeDemande objects filtered by the LIBELLE_FR column
 * @method array findByLibelleAr(string $LIBELLE_AR) Return TCheckListEtapeDemande objects filtered by the LIBELLE_AR column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTCheckListEtapeDemandeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTCheckListEtapeDemandeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TCheckListEtapeDemande', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TCheckListEtapeDemandeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TCheckListEtapeDemandeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TCheckListEtapeDemandeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TCheckListEtapeDemandeQuery) {
            return $criteria;
        }
        $query = new TCheckListEtapeDemandeQuery();
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
     * @return   TCheckListEtapeDemande|TCheckListEtapeDemande[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TCheckListEtapeDemandePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TCheckListEtapeDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TCheckListEtapeDemande A model object, or null if the key is not found
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
     * @return                 TCheckListEtapeDemande A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_ETAPE_CIRCUIT_DEMANDE`, `LIBELLE_FR`, `LIBELLE_AR` FROM `t_check_list_etape_demande` WHERE `ID` = :p0';
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
            $obj = new TCheckListEtapeDemande();
            $obj->hydrate($row);
            TCheckListEtapeDemandePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TCheckListEtapeDemande|TCheckListEtapeDemande[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TCheckListEtapeDemande[]|mixed the list of results, formatted by the current formatter
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
     * @return TCheckListEtapeDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TCheckListEtapeDemandePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TCheckListEtapeDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TCheckListEtapeDemandePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCheckListEtapeDemandeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TCheckListEtapeDemandePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TCheckListEtapeDemandePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCheckListEtapeDemandePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_ETAPE_CIRCUIT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtapeCircuitDemande(1234); // WHERE ID_ETAPE_CIRCUIT_DEMANDE = 1234
     * $query->filterByIdEtapeCircuitDemande(array(12, 34)); // WHERE ID_ETAPE_CIRCUIT_DEMANDE IN (12, 34)
     * $query->filterByIdEtapeCircuitDemande(array('min' => 12)); // WHERE ID_ETAPE_CIRCUIT_DEMANDE >= 12
     * $query->filterByIdEtapeCircuitDemande(array('max' => 12)); // WHERE ID_ETAPE_CIRCUIT_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idEtapeCircuitDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCheckListEtapeDemandeQuery The current query, for fluid interface
     */
    public function filterByIdEtapeCircuitDemande($idEtapeCircuitDemande = null, $comparison = null)
    {
        if (is_array($idEtapeCircuitDemande)) {
            $useMinMax = false;
            if (isset($idEtapeCircuitDemande['min'])) {
                $this->addUsingAlias(TCheckListEtapeDemandePeer::ID_ETAPE_CIRCUIT_DEMANDE, $idEtapeCircuitDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtapeCircuitDemande['max'])) {
                $this->addUsingAlias(TCheckListEtapeDemandePeer::ID_ETAPE_CIRCUIT_DEMANDE, $idEtapeCircuitDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCheckListEtapeDemandePeer::ID_ETAPE_CIRCUIT_DEMANDE, $idEtapeCircuitDemande, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFr('fooValue');   // WHERE LIBELLE_FR = 'fooValue'
     * $query->filterByLibelleFr('%fooValue%'); // WHERE LIBELLE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCheckListEtapeDemandeQuery The current query, for fluid interface
     */
    public function filterByLibelleFr($libelleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFr)) {
                $libelleFr = str_replace('*', '%', $libelleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TCheckListEtapeDemandePeer::LIBELLE_FR, $libelleFr, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAr('fooValue');   // WHERE LIBELLE_AR = 'fooValue'
     * $query->filterByLibelleAr('%fooValue%'); // WHERE LIBELLE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCheckListEtapeDemandeQuery The current query, for fluid interface
     */
    public function filterByLibelleAr($libelleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAr)) {
                $libelleAr = str_replace('*', '%', $libelleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TCheckListEtapeDemandePeer::LIBELLE_AR, $libelleAr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TCheckListEtapeDemande $tCheckListEtapeDemande Object to remove from the list of results
     *
     * @return TCheckListEtapeDemandeQuery The current query, for fluid interface
     */
    public function prune($tCheckListEtapeDemande = null)
    {
        if ($tCheckListEtapeDemande) {
            $this->addUsingAlias(TCheckListEtapeDemandePeer::ID, $tCheckListEtapeDemande->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
