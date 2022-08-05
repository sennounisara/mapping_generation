<?php


/**
 * Base class that represents a query for the 't_circuit_papier' table.
 *
 * 
 *
 * @method TCircuitPapierQuery orderByIdCircuit($order = Criteria::ASC) Order by the ID_CIRCUIT column
 * @method TCircuitPapierQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method TCircuitPapierQuery orderByIdAgentEmetteur($order = Criteria::ASC) Order by the ID_AGENT_EMETTEUR column
 * @method TCircuitPapierQuery orderByIdAgentDestinataire($order = Criteria::ASC) Order by the ID_AGENT_DESTINATAIRE column
 * @method TCircuitPapierQuery orderByIdEntiteDestinataire($order = Criteria::ASC) Order by the ID_ENTITE_DESTINATAIRE column
 * @method TCircuitPapierQuery orderByDateEnvoi($order = Criteria::ASC) Order by the DATE_ENVOI column
 * @method TCircuitPapierQuery orderByDateReception($order = Criteria::ASC) Order by the DATE_RECEPTION column
 * @method TCircuitPapierQuery orderByRecu($order = Criteria::ASC) Order by the RECU column
 * @method TCircuitPapierQuery orderByEmplacement($order = Criteria::ASC) Order by the EMPLACEMENT column
 *
 * @method TCircuitPapierQuery groupByIdCircuit() Group by the ID_CIRCUIT column
 * @method TCircuitPapierQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method TCircuitPapierQuery groupByIdAgentEmetteur() Group by the ID_AGENT_EMETTEUR column
 * @method TCircuitPapierQuery groupByIdAgentDestinataire() Group by the ID_AGENT_DESTINATAIRE column
 * @method TCircuitPapierQuery groupByIdEntiteDestinataire() Group by the ID_ENTITE_DESTINATAIRE column
 * @method TCircuitPapierQuery groupByDateEnvoi() Group by the DATE_ENVOI column
 * @method TCircuitPapierQuery groupByDateReception() Group by the DATE_RECEPTION column
 * @method TCircuitPapierQuery groupByRecu() Group by the RECU column
 * @method TCircuitPapierQuery groupByEmplacement() Group by the EMPLACEMENT column
 *
 * @method TCircuitPapierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TCircuitPapierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TCircuitPapierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TCircuitPapier findOne(PropelPDO $con = null) Return the first TCircuitPapier matching the query
 * @method TCircuitPapier findOneOrCreate(PropelPDO $con = null) Return the first TCircuitPapier matching the query, or a new TCircuitPapier object populated from the query conditions when no match is found
 *
 * @method TCircuitPapier findOneByIdDemande(int $ID_DEMANDE) Return the first TCircuitPapier filtered by the ID_DEMANDE column
 * @method TCircuitPapier findOneByIdAgentEmetteur(int $ID_AGENT_EMETTEUR) Return the first TCircuitPapier filtered by the ID_AGENT_EMETTEUR column
 * @method TCircuitPapier findOneByIdAgentDestinataire(int $ID_AGENT_DESTINATAIRE) Return the first TCircuitPapier filtered by the ID_AGENT_DESTINATAIRE column
 * @method TCircuitPapier findOneByIdEntiteDestinataire(int $ID_ENTITE_DESTINATAIRE) Return the first TCircuitPapier filtered by the ID_ENTITE_DESTINATAIRE column
 * @method TCircuitPapier findOneByDateEnvoi(string $DATE_ENVOI) Return the first TCircuitPapier filtered by the DATE_ENVOI column
 * @method TCircuitPapier findOneByDateReception(string $DATE_RECEPTION) Return the first TCircuitPapier filtered by the DATE_RECEPTION column
 * @method TCircuitPapier findOneByRecu(string $RECU) Return the first TCircuitPapier filtered by the RECU column
 * @method TCircuitPapier findOneByEmplacement(string $EMPLACEMENT) Return the first TCircuitPapier filtered by the EMPLACEMENT column
 *
 * @method array findByIdCircuit(int $ID_CIRCUIT) Return TCircuitPapier objects filtered by the ID_CIRCUIT column
 * @method array findByIdDemande(int $ID_DEMANDE) Return TCircuitPapier objects filtered by the ID_DEMANDE column
 * @method array findByIdAgentEmetteur(int $ID_AGENT_EMETTEUR) Return TCircuitPapier objects filtered by the ID_AGENT_EMETTEUR column
 * @method array findByIdAgentDestinataire(int $ID_AGENT_DESTINATAIRE) Return TCircuitPapier objects filtered by the ID_AGENT_DESTINATAIRE column
 * @method array findByIdEntiteDestinataire(int $ID_ENTITE_DESTINATAIRE) Return TCircuitPapier objects filtered by the ID_ENTITE_DESTINATAIRE column
 * @method array findByDateEnvoi(string $DATE_ENVOI) Return TCircuitPapier objects filtered by the DATE_ENVOI column
 * @method array findByDateReception(string $DATE_RECEPTION) Return TCircuitPapier objects filtered by the DATE_RECEPTION column
 * @method array findByRecu(string $RECU) Return TCircuitPapier objects filtered by the RECU column
 * @method array findByEmplacement(string $EMPLACEMENT) Return TCircuitPapier objects filtered by the EMPLACEMENT column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTCircuitPapierQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTCircuitPapierQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TCircuitPapier', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TCircuitPapierQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TCircuitPapierQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TCircuitPapierQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TCircuitPapierQuery) {
            return $criteria;
        }
        $query = new TCircuitPapierQuery();
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
     * @return   TCircuitPapier|TCircuitPapier[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TCircuitPapierPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TCircuitPapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TCircuitPapier A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdCircuit($key, $con = null)
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
     * @return                 TCircuitPapier A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_CIRCUIT`, `ID_DEMANDE`, `ID_AGENT_EMETTEUR`, `ID_AGENT_DESTINATAIRE`, `ID_ENTITE_DESTINATAIRE`, `DATE_ENVOI`, `DATE_RECEPTION`, `RECU`, `EMPLACEMENT` FROM `t_circuit_papier` WHERE `ID_CIRCUIT` = :p0';
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
            $obj = new TCircuitPapier();
            $obj->hydrate($row);
            TCircuitPapierPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TCircuitPapier|TCircuitPapier[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TCircuitPapier[]|mixed the list of results, formatted by the current formatter
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
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TCircuitPapierPeer::ID_CIRCUIT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TCircuitPapierPeer::ID_CIRCUIT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_CIRCUIT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCircuit(1234); // WHERE ID_CIRCUIT = 1234
     * $query->filterByIdCircuit(array(12, 34)); // WHERE ID_CIRCUIT IN (12, 34)
     * $query->filterByIdCircuit(array('min' => 12)); // WHERE ID_CIRCUIT >= 12
     * $query->filterByIdCircuit(array('max' => 12)); // WHERE ID_CIRCUIT <= 12
     * </code>
     *
     * @param     mixed $idCircuit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function filterByIdCircuit($idCircuit = null, $comparison = null)
    {
        if (is_array($idCircuit)) {
            $useMinMax = false;
            if (isset($idCircuit['min'])) {
                $this->addUsingAlias(TCircuitPapierPeer::ID_CIRCUIT, $idCircuit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCircuit['max'])) {
                $this->addUsingAlias(TCircuitPapierPeer::ID_CIRCUIT, $idCircuit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCircuitPapierPeer::ID_CIRCUIT, $idCircuit, $comparison);
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
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(TCircuitPapierPeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(TCircuitPapierPeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCircuitPapierPeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_EMETTEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentEmetteur(1234); // WHERE ID_AGENT_EMETTEUR = 1234
     * $query->filterByIdAgentEmetteur(array(12, 34)); // WHERE ID_AGENT_EMETTEUR IN (12, 34)
     * $query->filterByIdAgentEmetteur(array('min' => 12)); // WHERE ID_AGENT_EMETTEUR >= 12
     * $query->filterByIdAgentEmetteur(array('max' => 12)); // WHERE ID_AGENT_EMETTEUR <= 12
     * </code>
     *
     * @param     mixed $idAgentEmetteur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function filterByIdAgentEmetteur($idAgentEmetteur = null, $comparison = null)
    {
        if (is_array($idAgentEmetteur)) {
            $useMinMax = false;
            if (isset($idAgentEmetteur['min'])) {
                $this->addUsingAlias(TCircuitPapierPeer::ID_AGENT_EMETTEUR, $idAgentEmetteur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentEmetteur['max'])) {
                $this->addUsingAlias(TCircuitPapierPeer::ID_AGENT_EMETTEUR, $idAgentEmetteur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCircuitPapierPeer::ID_AGENT_EMETTEUR, $idAgentEmetteur, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_DESTINATAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentDestinataire(1234); // WHERE ID_AGENT_DESTINATAIRE = 1234
     * $query->filterByIdAgentDestinataire(array(12, 34)); // WHERE ID_AGENT_DESTINATAIRE IN (12, 34)
     * $query->filterByIdAgentDestinataire(array('min' => 12)); // WHERE ID_AGENT_DESTINATAIRE >= 12
     * $query->filterByIdAgentDestinataire(array('max' => 12)); // WHERE ID_AGENT_DESTINATAIRE <= 12
     * </code>
     *
     * @param     mixed $idAgentDestinataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function filterByIdAgentDestinataire($idAgentDestinataire = null, $comparison = null)
    {
        if (is_array($idAgentDestinataire)) {
            $useMinMax = false;
            if (isset($idAgentDestinataire['min'])) {
                $this->addUsingAlias(TCircuitPapierPeer::ID_AGENT_DESTINATAIRE, $idAgentDestinataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentDestinataire['max'])) {
                $this->addUsingAlias(TCircuitPapierPeer::ID_AGENT_DESTINATAIRE, $idAgentDestinataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCircuitPapierPeer::ID_AGENT_DESTINATAIRE, $idAgentDestinataire, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_DESTINATAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteDestinataire(1234); // WHERE ID_ENTITE_DESTINATAIRE = 1234
     * $query->filterByIdEntiteDestinataire(array(12, 34)); // WHERE ID_ENTITE_DESTINATAIRE IN (12, 34)
     * $query->filterByIdEntiteDestinataire(array('min' => 12)); // WHERE ID_ENTITE_DESTINATAIRE >= 12
     * $query->filterByIdEntiteDestinataire(array('max' => 12)); // WHERE ID_ENTITE_DESTINATAIRE <= 12
     * </code>
     *
     * @param     mixed $idEntiteDestinataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function filterByIdEntiteDestinataire($idEntiteDestinataire = null, $comparison = null)
    {
        if (is_array($idEntiteDestinataire)) {
            $useMinMax = false;
            if (isset($idEntiteDestinataire['min'])) {
                $this->addUsingAlias(TCircuitPapierPeer::ID_ENTITE_DESTINATAIRE, $idEntiteDestinataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteDestinataire['max'])) {
                $this->addUsingAlias(TCircuitPapierPeer::ID_ENTITE_DESTINATAIRE, $idEntiteDestinataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCircuitPapierPeer::ID_ENTITE_DESTINATAIRE, $idEntiteDestinataire, $comparison);
    }

    /**
     * Filter the query on the DATE_ENVOI column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('2011-03-14'); // WHERE DATE_ENVOI = '2011-03-14'
     * $query->filterByDateEnvoi('now'); // WHERE DATE_ENVOI = '2011-03-14'
     * $query->filterByDateEnvoi(array('max' => 'yesterday')); // WHERE DATE_ENVOI > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEnvoi The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (is_array($dateEnvoi)) {
            $useMinMax = false;
            if (isset($dateEnvoi['min'])) {
                $this->addUsingAlias(TCircuitPapierPeer::DATE_ENVOI, $dateEnvoi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEnvoi['max'])) {
                $this->addUsingAlias(TCircuitPapierPeer::DATE_ENVOI, $dateEnvoi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCircuitPapierPeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the DATE_RECEPTION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReception('2011-03-14'); // WHERE DATE_RECEPTION = '2011-03-14'
     * $query->filterByDateReception('now'); // WHERE DATE_RECEPTION = '2011-03-14'
     * $query->filterByDateReception(array('max' => 'yesterday')); // WHERE DATE_RECEPTION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateReception The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function filterByDateReception($dateReception = null, $comparison = null)
    {
        if (is_array($dateReception)) {
            $useMinMax = false;
            if (isset($dateReception['min'])) {
                $this->addUsingAlias(TCircuitPapierPeer::DATE_RECEPTION, $dateReception['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateReception['max'])) {
                $this->addUsingAlias(TCircuitPapierPeer::DATE_RECEPTION, $dateReception['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCircuitPapierPeer::DATE_RECEPTION, $dateReception, $comparison);
    }

    /**
     * Filter the query on the RECU column
     *
     * Example usage:
     * <code>
     * $query->filterByRecu('fooValue');   // WHERE RECU = 'fooValue'
     * $query->filterByRecu('%fooValue%'); // WHERE RECU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $recu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function filterByRecu($recu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($recu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $recu)) {
                $recu = str_replace('*', '%', $recu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TCircuitPapierPeer::RECU, $recu, $comparison);
    }

    /**
     * Filter the query on the EMPLACEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByEmplacement('fooValue');   // WHERE EMPLACEMENT = 'fooValue'
     * $query->filterByEmplacement('%fooValue%'); // WHERE EMPLACEMENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emplacement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function filterByEmplacement($emplacement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emplacement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emplacement)) {
                $emplacement = str_replace('*', '%', $emplacement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TCircuitPapierPeer::EMPLACEMENT, $emplacement, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TCircuitPapier $tCircuitPapier Object to remove from the list of results
     *
     * @return TCircuitPapierQuery The current query, for fluid interface
     */
    public function prune($tCircuitPapier = null)
    {
        if ($tCircuitPapier) {
            $this->addUsingAlias(TCircuitPapierPeer::ID_CIRCUIT, $tCircuitPapier->getIdCircuit(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
