<?php


/**
 * Base class that represents a query for the 'pile_demande' table.
 *
 * 
 *
 * @method PileDemandeQuery orderByIdPileDemande($order = Criteria::ASC) Order by the ID_PILE_DEMANDE column
 * @method PileDemandeQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method PileDemandeQuery orderByIdEntiteOrigine($order = Criteria::ASC) Order by the ID_ENTITE_ORIGINE column
 * @method PileDemandeQuery orderByIdEntiteDesti($order = Criteria::ASC) Order by the ID_ENTITE_DESTI column
 * @method PileDemandeQuery orderByDateOperation($order = Criteria::ASC) Order by the DATE_OPERATION column
 *
 * @method PileDemandeQuery groupByIdPileDemande() Group by the ID_PILE_DEMANDE column
 * @method PileDemandeQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method PileDemandeQuery groupByIdEntiteOrigine() Group by the ID_ENTITE_ORIGINE column
 * @method PileDemandeQuery groupByIdEntiteDesti() Group by the ID_ENTITE_DESTI column
 * @method PileDemandeQuery groupByDateOperation() Group by the DATE_OPERATION column
 *
 * @method PileDemandeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PileDemandeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PileDemandeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PileDemande findOne(PropelPDO $con = null) Return the first PileDemande matching the query
 * @method PileDemande findOneOrCreate(PropelPDO $con = null) Return the first PileDemande matching the query, or a new PileDemande object populated from the query conditions when no match is found
 *
 * @method PileDemande findOneByIdDemande(int $ID_DEMANDE) Return the first PileDemande filtered by the ID_DEMANDE column
 * @method PileDemande findOneByIdEntiteOrigine(int $ID_ENTITE_ORIGINE) Return the first PileDemande filtered by the ID_ENTITE_ORIGINE column
 * @method PileDemande findOneByIdEntiteDesti(int $ID_ENTITE_DESTI) Return the first PileDemande filtered by the ID_ENTITE_DESTI column
 * @method PileDemande findOneByDateOperation(string $DATE_OPERATION) Return the first PileDemande filtered by the DATE_OPERATION column
 *
 * @method array findByIdPileDemande(int $ID_PILE_DEMANDE) Return PileDemande objects filtered by the ID_PILE_DEMANDE column
 * @method array findByIdDemande(int $ID_DEMANDE) Return PileDemande objects filtered by the ID_DEMANDE column
 * @method array findByIdEntiteOrigine(int $ID_ENTITE_ORIGINE) Return PileDemande objects filtered by the ID_ENTITE_ORIGINE column
 * @method array findByIdEntiteDesti(int $ID_ENTITE_DESTI) Return PileDemande objects filtered by the ID_ENTITE_DESTI column
 * @method array findByDateOperation(string $DATE_OPERATION) Return PileDemande objects filtered by the DATE_OPERATION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePileDemandeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePileDemandeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PileDemande', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PileDemandeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PileDemandeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PileDemandeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PileDemandeQuery) {
            return $criteria;
        }
        $query = new PileDemandeQuery();
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
     * @return   PileDemande|PileDemande[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PileDemandePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PileDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PileDemande A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPileDemande($key, $con = null)
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
     * @return                 PileDemande A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PILE_DEMANDE`, `ID_DEMANDE`, `ID_ENTITE_ORIGINE`, `ID_ENTITE_DESTI`, `DATE_OPERATION` FROM `pile_demande` WHERE `ID_PILE_DEMANDE` = :p0';
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
            $obj = new PileDemande();
            $obj->hydrate($row);
            PileDemandePeer::addInstanceToPool($obj, (string) $key);
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
     * @return PileDemande|PileDemande[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PileDemande[]|mixed the list of results, formatted by the current formatter
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
     * @return PileDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PileDemandePeer::ID_PILE_DEMANDE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PileDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PileDemandePeer::ID_PILE_DEMANDE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_PILE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPileDemande(1234); // WHERE ID_PILE_DEMANDE = 1234
     * $query->filterByIdPileDemande(array(12, 34)); // WHERE ID_PILE_DEMANDE IN (12, 34)
     * $query->filterByIdPileDemande(array('min' => 12)); // WHERE ID_PILE_DEMANDE >= 12
     * $query->filterByIdPileDemande(array('max' => 12)); // WHERE ID_PILE_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idPileDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PileDemandeQuery The current query, for fluid interface
     */
    public function filterByIdPileDemande($idPileDemande = null, $comparison = null)
    {
        if (is_array($idPileDemande)) {
            $useMinMax = false;
            if (isset($idPileDemande['min'])) {
                $this->addUsingAlias(PileDemandePeer::ID_PILE_DEMANDE, $idPileDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPileDemande['max'])) {
                $this->addUsingAlias(PileDemandePeer::ID_PILE_DEMANDE, $idPileDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PileDemandePeer::ID_PILE_DEMANDE, $idPileDemande, $comparison);
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
     * @return PileDemandeQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(PileDemandePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(PileDemandePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PileDemandePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_ORIGINE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteOrigine(1234); // WHERE ID_ENTITE_ORIGINE = 1234
     * $query->filterByIdEntiteOrigine(array(12, 34)); // WHERE ID_ENTITE_ORIGINE IN (12, 34)
     * $query->filterByIdEntiteOrigine(array('min' => 12)); // WHERE ID_ENTITE_ORIGINE >= 12
     * $query->filterByIdEntiteOrigine(array('max' => 12)); // WHERE ID_ENTITE_ORIGINE <= 12
     * </code>
     *
     * @param     mixed $idEntiteOrigine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PileDemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteOrigine($idEntiteOrigine = null, $comparison = null)
    {
        if (is_array($idEntiteOrigine)) {
            $useMinMax = false;
            if (isset($idEntiteOrigine['min'])) {
                $this->addUsingAlias(PileDemandePeer::ID_ENTITE_ORIGINE, $idEntiteOrigine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteOrigine['max'])) {
                $this->addUsingAlias(PileDemandePeer::ID_ENTITE_ORIGINE, $idEntiteOrigine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PileDemandePeer::ID_ENTITE_ORIGINE, $idEntiteOrigine, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_DESTI column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteDesti(1234); // WHERE ID_ENTITE_DESTI = 1234
     * $query->filterByIdEntiteDesti(array(12, 34)); // WHERE ID_ENTITE_DESTI IN (12, 34)
     * $query->filterByIdEntiteDesti(array('min' => 12)); // WHERE ID_ENTITE_DESTI >= 12
     * $query->filterByIdEntiteDesti(array('max' => 12)); // WHERE ID_ENTITE_DESTI <= 12
     * </code>
     *
     * @param     mixed $idEntiteDesti The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PileDemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteDesti($idEntiteDesti = null, $comparison = null)
    {
        if (is_array($idEntiteDesti)) {
            $useMinMax = false;
            if (isset($idEntiteDesti['min'])) {
                $this->addUsingAlias(PileDemandePeer::ID_ENTITE_DESTI, $idEntiteDesti['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteDesti['max'])) {
                $this->addUsingAlias(PileDemandePeer::ID_ENTITE_DESTI, $idEntiteDesti['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PileDemandePeer::ID_ENTITE_DESTI, $idEntiteDesti, $comparison);
    }

    /**
     * Filter the query on the DATE_OPERATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateOperation('2011-03-14'); // WHERE DATE_OPERATION = '2011-03-14'
     * $query->filterByDateOperation('now'); // WHERE DATE_OPERATION = '2011-03-14'
     * $query->filterByDateOperation(array('max' => 'yesterday')); // WHERE DATE_OPERATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateOperation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PileDemandeQuery The current query, for fluid interface
     */
    public function filterByDateOperation($dateOperation = null, $comparison = null)
    {
        if (is_array($dateOperation)) {
            $useMinMax = false;
            if (isset($dateOperation['min'])) {
                $this->addUsingAlias(PileDemandePeer::DATE_OPERATION, $dateOperation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateOperation['max'])) {
                $this->addUsingAlias(PileDemandePeer::DATE_OPERATION, $dateOperation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PileDemandePeer::DATE_OPERATION, $dateOperation, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PileDemande $pileDemande Object to remove from the list of results
     *
     * @return PileDemandeQuery The current query, for fluid interface
     */
    public function prune($pileDemande = null)
    {
        if ($pileDemande) {
            $this->addUsingAlias(PileDemandePeer::ID_PILE_DEMANDE, $pileDemande->getIdPileDemande(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
