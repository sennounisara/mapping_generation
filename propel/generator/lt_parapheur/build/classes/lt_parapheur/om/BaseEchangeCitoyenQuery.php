<?php


/**
 * Base class that represents a query for the 'echange_citoyen' table.
 *
 * 
 *
 * @method EchangeCitoyenQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method EchangeCitoyenQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method EchangeCitoyenQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method EchangeCitoyenQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method EchangeCitoyenQuery orderByIdPieceJointe($order = Criteria::ASC) Order by the ID_PIECE_JOINTE column
 * @method EchangeCitoyenQuery orderByNomPieceJointe($order = Criteria::ASC) Order by the NOM_PIECE_JOINTE column
 * @method EchangeCitoyenQuery orderByMessage($order = Criteria::ASC) Order by the MESSAGE column
 * @method EchangeCitoyenQuery orderByDateEchange($order = Criteria::ASC) Order by the DATE_ECHANGE column
 * @method EchangeCitoyenQuery orderByVisualiser($order = Criteria::ASC) Order by the VISUALISER column
 * @method EchangeCitoyenQuery orderByDateVisualisation($order = Criteria::ASC) Order by the DATE_VISUALISATION column
 * @method EchangeCitoyenQuery orderByNomAgentFr($order = Criteria::ASC) Order by the NOM_AGENT_FR column
 * @method EchangeCitoyenQuery orderByNomAgentAr($order = Criteria::ASC) Order by the NOM_AGENT_AR column
 * @method EchangeCitoyenQuery orderByPrenomAgentFr($order = Criteria::ASC) Order by the PRENOM_AGENT_FR column
 * @method EchangeCitoyenQuery orderByPrenomAgentAr($order = Criteria::ASC) Order by the PRENOM_AGENT_AR column
 * @method EchangeCitoyenQuery orderByCanal($order = Criteria::ASC) Order by the CANAL column
 * @method EchangeCitoyenQuery orderByInfoCanal($order = Criteria::ASC) Order by the INFO_CANAL column
 * @method EchangeCitoyenQuery orderByRepondu($order = Criteria::ASC) Order by the REPONDU column
 *
 * @method EchangeCitoyenQuery groupById() Group by the ID column
 * @method EchangeCitoyenQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method EchangeCitoyenQuery groupByIdAgent() Group by the ID_AGENT column
 * @method EchangeCitoyenQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method EchangeCitoyenQuery groupByIdPieceJointe() Group by the ID_PIECE_JOINTE column
 * @method EchangeCitoyenQuery groupByNomPieceJointe() Group by the NOM_PIECE_JOINTE column
 * @method EchangeCitoyenQuery groupByMessage() Group by the MESSAGE column
 * @method EchangeCitoyenQuery groupByDateEchange() Group by the DATE_ECHANGE column
 * @method EchangeCitoyenQuery groupByVisualiser() Group by the VISUALISER column
 * @method EchangeCitoyenQuery groupByDateVisualisation() Group by the DATE_VISUALISATION column
 * @method EchangeCitoyenQuery groupByNomAgentFr() Group by the NOM_AGENT_FR column
 * @method EchangeCitoyenQuery groupByNomAgentAr() Group by the NOM_AGENT_AR column
 * @method EchangeCitoyenQuery groupByPrenomAgentFr() Group by the PRENOM_AGENT_FR column
 * @method EchangeCitoyenQuery groupByPrenomAgentAr() Group by the PRENOM_AGENT_AR column
 * @method EchangeCitoyenQuery groupByCanal() Group by the CANAL column
 * @method EchangeCitoyenQuery groupByInfoCanal() Group by the INFO_CANAL column
 * @method EchangeCitoyenQuery groupByRepondu() Group by the REPONDU column
 *
 * @method EchangeCitoyenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EchangeCitoyenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EchangeCitoyenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EchangeCitoyen findOne(PropelPDO $con = null) Return the first EchangeCitoyen matching the query
 * @method EchangeCitoyen findOneOrCreate(PropelPDO $con = null) Return the first EchangeCitoyen matching the query, or a new EchangeCitoyen object populated from the query conditions when no match is found
 *
 * @method EchangeCitoyen findOneByIdDemande(int $ID_DEMANDE) Return the first EchangeCitoyen filtered by the ID_DEMANDE column
 * @method EchangeCitoyen findOneByIdAgent(int $ID_AGENT) Return the first EchangeCitoyen filtered by the ID_AGENT column
 * @method EchangeCitoyen findOneByIdEntite(int $ID_ENTITE) Return the first EchangeCitoyen filtered by the ID_ENTITE column
 * @method EchangeCitoyen findOneByIdPieceJointe(int $ID_PIECE_JOINTE) Return the first EchangeCitoyen filtered by the ID_PIECE_JOINTE column
 * @method EchangeCitoyen findOneByNomPieceJointe(string $NOM_PIECE_JOINTE) Return the first EchangeCitoyen filtered by the NOM_PIECE_JOINTE column
 * @method EchangeCitoyen findOneByMessage(string $MESSAGE) Return the first EchangeCitoyen filtered by the MESSAGE column
 * @method EchangeCitoyen findOneByDateEchange(string $DATE_ECHANGE) Return the first EchangeCitoyen filtered by the DATE_ECHANGE column
 * @method EchangeCitoyen findOneByVisualiser(string $VISUALISER) Return the first EchangeCitoyen filtered by the VISUALISER column
 * @method EchangeCitoyen findOneByDateVisualisation(string $DATE_VISUALISATION) Return the first EchangeCitoyen filtered by the DATE_VISUALISATION column
 * @method EchangeCitoyen findOneByNomAgentFr(string $NOM_AGENT_FR) Return the first EchangeCitoyen filtered by the NOM_AGENT_FR column
 * @method EchangeCitoyen findOneByNomAgentAr(string $NOM_AGENT_AR) Return the first EchangeCitoyen filtered by the NOM_AGENT_AR column
 * @method EchangeCitoyen findOneByPrenomAgentFr(string $PRENOM_AGENT_FR) Return the first EchangeCitoyen filtered by the PRENOM_AGENT_FR column
 * @method EchangeCitoyen findOneByPrenomAgentAr(string $PRENOM_AGENT_AR) Return the first EchangeCitoyen filtered by the PRENOM_AGENT_AR column
 * @method EchangeCitoyen findOneByCanal(string $CANAL) Return the first EchangeCitoyen filtered by the CANAL column
 * @method EchangeCitoyen findOneByInfoCanal(string $INFO_CANAL) Return the first EchangeCitoyen filtered by the INFO_CANAL column
 * @method EchangeCitoyen findOneByRepondu(string $REPONDU) Return the first EchangeCitoyen filtered by the REPONDU column
 *
 * @method array findById(int $ID) Return EchangeCitoyen objects filtered by the ID column
 * @method array findByIdDemande(int $ID_DEMANDE) Return EchangeCitoyen objects filtered by the ID_DEMANDE column
 * @method array findByIdAgent(int $ID_AGENT) Return EchangeCitoyen objects filtered by the ID_AGENT column
 * @method array findByIdEntite(int $ID_ENTITE) Return EchangeCitoyen objects filtered by the ID_ENTITE column
 * @method array findByIdPieceJointe(int $ID_PIECE_JOINTE) Return EchangeCitoyen objects filtered by the ID_PIECE_JOINTE column
 * @method array findByNomPieceJointe(string $NOM_PIECE_JOINTE) Return EchangeCitoyen objects filtered by the NOM_PIECE_JOINTE column
 * @method array findByMessage(string $MESSAGE) Return EchangeCitoyen objects filtered by the MESSAGE column
 * @method array findByDateEchange(string $DATE_ECHANGE) Return EchangeCitoyen objects filtered by the DATE_ECHANGE column
 * @method array findByVisualiser(string $VISUALISER) Return EchangeCitoyen objects filtered by the VISUALISER column
 * @method array findByDateVisualisation(string $DATE_VISUALISATION) Return EchangeCitoyen objects filtered by the DATE_VISUALISATION column
 * @method array findByNomAgentFr(string $NOM_AGENT_FR) Return EchangeCitoyen objects filtered by the NOM_AGENT_FR column
 * @method array findByNomAgentAr(string $NOM_AGENT_AR) Return EchangeCitoyen objects filtered by the NOM_AGENT_AR column
 * @method array findByPrenomAgentFr(string $PRENOM_AGENT_FR) Return EchangeCitoyen objects filtered by the PRENOM_AGENT_FR column
 * @method array findByPrenomAgentAr(string $PRENOM_AGENT_AR) Return EchangeCitoyen objects filtered by the PRENOM_AGENT_AR column
 * @method array findByCanal(string $CANAL) Return EchangeCitoyen objects filtered by the CANAL column
 * @method array findByInfoCanal(string $INFO_CANAL) Return EchangeCitoyen objects filtered by the INFO_CANAL column
 * @method array findByRepondu(string $REPONDU) Return EchangeCitoyen objects filtered by the REPONDU column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseEchangeCitoyenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEchangeCitoyenQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'EchangeCitoyen', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EchangeCitoyenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EchangeCitoyenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EchangeCitoyenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EchangeCitoyenQuery) {
            return $criteria;
        }
        $query = new EchangeCitoyenQuery();
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
     * @return   EchangeCitoyen|EchangeCitoyen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EchangeCitoyenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EchangeCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 EchangeCitoyen A model object, or null if the key is not found
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
     * @return                 EchangeCitoyen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_DEMANDE`, `ID_AGENT`, `ID_ENTITE`, `ID_PIECE_JOINTE`, `NOM_PIECE_JOINTE`, `MESSAGE`, `DATE_ECHANGE`, `VISUALISER`, `DATE_VISUALISATION`, `NOM_AGENT_FR`, `NOM_AGENT_AR`, `PRENOM_AGENT_FR`, `PRENOM_AGENT_AR`, `CANAL`, `INFO_CANAL`, `REPONDU` FROM `echange_citoyen` WHERE `ID` = :p0';
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
            $obj = new EchangeCitoyen();
            $obj->hydrate($row);
            EchangeCitoyenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return EchangeCitoyen|EchangeCitoyen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|EchangeCitoyen[]|mixed the list of results, formatted by the current formatter
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
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EchangeCitoyenPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EchangeCitoyenPeer::ID, $keys, Criteria::IN);
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
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::ID, $id, $comparison);
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
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE ID_AGENT = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE ID_AGENT IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE ID_AGENT >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE ID_AGENT <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the ID_PIECE_JOINTE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPieceJointe(1234); // WHERE ID_PIECE_JOINTE = 1234
     * $query->filterByIdPieceJointe(array(12, 34)); // WHERE ID_PIECE_JOINTE IN (12, 34)
     * $query->filterByIdPieceJointe(array('min' => 12)); // WHERE ID_PIECE_JOINTE >= 12
     * $query->filterByIdPieceJointe(array('max' => 12)); // WHERE ID_PIECE_JOINTE <= 12
     * </code>
     *
     * @param     mixed $idPieceJointe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByIdPieceJointe($idPieceJointe = null, $comparison = null)
    {
        if (is_array($idPieceJointe)) {
            $useMinMax = false;
            if (isset($idPieceJointe['min'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::ID_PIECE_JOINTE, $idPieceJointe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPieceJointe['max'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::ID_PIECE_JOINTE, $idPieceJointe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::ID_PIECE_JOINTE, $idPieceJointe, $comparison);
    }

    /**
     * Filter the query on the NOM_PIECE_JOINTE column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPieceJointe('fooValue');   // WHERE NOM_PIECE_JOINTE = 'fooValue'
     * $query->filterByNomPieceJointe('%fooValue%'); // WHERE NOM_PIECE_JOINTE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPieceJointe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByNomPieceJointe($nomPieceJointe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomPieceJointe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomPieceJointe)) {
                $nomPieceJointe = str_replace('*', '%', $nomPieceJointe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::NOM_PIECE_JOINTE, $nomPieceJointe, $comparison);
    }

    /**
     * Filter the query on the MESSAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByMessage('fooValue');   // WHERE MESSAGE = 'fooValue'
     * $query->filterByMessage('%fooValue%'); // WHERE MESSAGE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $message The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByMessage($message = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($message)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $message)) {
                $message = str_replace('*', '%', $message);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::MESSAGE, $message, $comparison);
    }

    /**
     * Filter the query on the DATE_ECHANGE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEchange('2011-03-14'); // WHERE DATE_ECHANGE = '2011-03-14'
     * $query->filterByDateEchange('now'); // WHERE DATE_ECHANGE = '2011-03-14'
     * $query->filterByDateEchange(array('max' => 'yesterday')); // WHERE DATE_ECHANGE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEchange The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByDateEchange($dateEchange = null, $comparison = null)
    {
        if (is_array($dateEchange)) {
            $useMinMax = false;
            if (isset($dateEchange['min'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::DATE_ECHANGE, $dateEchange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEchange['max'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::DATE_ECHANGE, $dateEchange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::DATE_ECHANGE, $dateEchange, $comparison);
    }

    /**
     * Filter the query on the VISUALISER column
     *
     * Example usage:
     * <code>
     * $query->filterByVisualiser('fooValue');   // WHERE VISUALISER = 'fooValue'
     * $query->filterByVisualiser('%fooValue%'); // WHERE VISUALISER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visualiser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByVisualiser($visualiser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visualiser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visualiser)) {
                $visualiser = str_replace('*', '%', $visualiser);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::VISUALISER, $visualiser, $comparison);
    }

    /**
     * Filter the query on the DATE_VISUALISATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateVisualisation('2011-03-14'); // WHERE DATE_VISUALISATION = '2011-03-14'
     * $query->filterByDateVisualisation('now'); // WHERE DATE_VISUALISATION = '2011-03-14'
     * $query->filterByDateVisualisation(array('max' => 'yesterday')); // WHERE DATE_VISUALISATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateVisualisation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByDateVisualisation($dateVisualisation = null, $comparison = null)
    {
        if (is_array($dateVisualisation)) {
            $useMinMax = false;
            if (isset($dateVisualisation['min'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::DATE_VISUALISATION, $dateVisualisation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateVisualisation['max'])) {
                $this->addUsingAlias(EchangeCitoyenPeer::DATE_VISUALISATION, $dateVisualisation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::DATE_VISUALISATION, $dateVisualisation, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentFr('fooValue');   // WHERE NOM_AGENT_FR = 'fooValue'
     * $query->filterByNomAgentFr('%fooValue%'); // WHERE NOM_AGENT_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByNomAgentFr($nomAgentFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentFr)) {
                $nomAgentFr = str_replace('*', '%', $nomAgentFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::NOM_AGENT_FR, $nomAgentFr, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentAr('fooValue');   // WHERE NOM_AGENT_AR = 'fooValue'
     * $query->filterByNomAgentAr('%fooValue%'); // WHERE NOM_AGENT_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByNomAgentAr($nomAgentAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentAr)) {
                $nomAgentAr = str_replace('*', '%', $nomAgentAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::NOM_AGENT_AR, $nomAgentAr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentFr('fooValue');   // WHERE PRENOM_AGENT_FR = 'fooValue'
     * $query->filterByPrenomAgentFr('%fooValue%'); // WHERE PRENOM_AGENT_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentFr($prenomAgentFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentFr)) {
                $prenomAgentFr = str_replace('*', '%', $prenomAgentFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::PRENOM_AGENT_FR, $prenomAgentFr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentAr('fooValue');   // WHERE PRENOM_AGENT_AR = 'fooValue'
     * $query->filterByPrenomAgentAr('%fooValue%'); // WHERE PRENOM_AGENT_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentAr($prenomAgentAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentAr)) {
                $prenomAgentAr = str_replace('*', '%', $prenomAgentAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::PRENOM_AGENT_AR, $prenomAgentAr, $comparison);
    }

    /**
     * Filter the query on the CANAL column
     *
     * Example usage:
     * <code>
     * $query->filterByCanal('fooValue');   // WHERE CANAL = 'fooValue'
     * $query->filterByCanal('%fooValue%'); // WHERE CANAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $canal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByCanal($canal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($canal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $canal)) {
                $canal = str_replace('*', '%', $canal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::CANAL, $canal, $comparison);
    }

    /**
     * Filter the query on the INFO_CANAL column
     *
     * Example usage:
     * <code>
     * $query->filterByInfoCanal('fooValue');   // WHERE INFO_CANAL = 'fooValue'
     * $query->filterByInfoCanal('%fooValue%'); // WHERE INFO_CANAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $infoCanal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByInfoCanal($infoCanal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($infoCanal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $infoCanal)) {
                $infoCanal = str_replace('*', '%', $infoCanal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::INFO_CANAL, $infoCanal, $comparison);
    }

    /**
     * Filter the query on the REPONDU column
     *
     * Example usage:
     * <code>
     * $query->filterByRepondu('fooValue');   // WHERE REPONDU = 'fooValue'
     * $query->filterByRepondu('%fooValue%'); // WHERE REPONDU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repondu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function filterByRepondu($repondu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repondu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repondu)) {
                $repondu = str_replace('*', '%', $repondu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangeCitoyenPeer::REPONDU, $repondu, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   EchangeCitoyen $echangeCitoyen Object to remove from the list of results
     *
     * @return EchangeCitoyenQuery The current query, for fluid interface
     */
    public function prune($echangeCitoyen = null)
    {
        if ($echangeCitoyen) {
            $this->addUsingAlias(EchangeCitoyenPeer::ID, $echangeCitoyen->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
