<?php


/**
 * Base class that represents a query for the 'bloc_notes' table.
 *
 * 
 *
 * @method BlocNotesQuery orderByIdNote($order = Criteria::ASC) Order by the ID_NOTE column
 * @method BlocNotesQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method BlocNotesQuery orderByTexteNote($order = Criteria::ASC) Order by the TEXTE_NOTE column
 * @method BlocNotesQuery orderByDateNote($order = Criteria::ASC) Order by the DATE_NOTE column
 * @method BlocNotesQuery orderByIdPieceJointe($order = Criteria::ASC) Order by the ID_PIECE_JOINTE column
 * @method BlocNotesQuery orderByNomPieceJointe($order = Criteria::ASC) Order by the NOM_PIECE_JOINTE column
 * @method BlocNotesQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method BlocNotesQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method BlocNotesQuery orderByNomAgentFr($order = Criteria::ASC) Order by the NOM_AGENT_FR column
 * @method BlocNotesQuery orderByNomAgentAr($order = Criteria::ASC) Order by the NOM_AGENT_AR column
 * @method BlocNotesQuery orderByPrenomAgentFr($order = Criteria::ASC) Order by the PRENOM_AGENT_FR column
 * @method BlocNotesQuery orderByPrenomAgentAr($order = Criteria::ASC) Order by the PRENOM_AGENT_AR column
 *
 * @method BlocNotesQuery groupByIdNote() Group by the ID_NOTE column
 * @method BlocNotesQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method BlocNotesQuery groupByTexteNote() Group by the TEXTE_NOTE column
 * @method BlocNotesQuery groupByDateNote() Group by the DATE_NOTE column
 * @method BlocNotesQuery groupByIdPieceJointe() Group by the ID_PIECE_JOINTE column
 * @method BlocNotesQuery groupByNomPieceJointe() Group by the NOM_PIECE_JOINTE column
 * @method BlocNotesQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method BlocNotesQuery groupByIdAgent() Group by the ID_AGENT column
 * @method BlocNotesQuery groupByNomAgentFr() Group by the NOM_AGENT_FR column
 * @method BlocNotesQuery groupByNomAgentAr() Group by the NOM_AGENT_AR column
 * @method BlocNotesQuery groupByPrenomAgentFr() Group by the PRENOM_AGENT_FR column
 * @method BlocNotesQuery groupByPrenomAgentAr() Group by the PRENOM_AGENT_AR column
 *
 * @method BlocNotesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BlocNotesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BlocNotesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method BlocNotes findOne(PropelPDO $con = null) Return the first BlocNotes matching the query
 * @method BlocNotes findOneOrCreate(PropelPDO $con = null) Return the first BlocNotes matching the query, or a new BlocNotes object populated from the query conditions when no match is found
 *
 * @method BlocNotes findOneByIdDemande(int $ID_DEMANDE) Return the first BlocNotes filtered by the ID_DEMANDE column
 * @method BlocNotes findOneByTexteNote(string $TEXTE_NOTE) Return the first BlocNotes filtered by the TEXTE_NOTE column
 * @method BlocNotes findOneByDateNote(string $DATE_NOTE) Return the first BlocNotes filtered by the DATE_NOTE column
 * @method BlocNotes findOneByIdPieceJointe(int $ID_PIECE_JOINTE) Return the first BlocNotes filtered by the ID_PIECE_JOINTE column
 * @method BlocNotes findOneByNomPieceJointe(string $NOM_PIECE_JOINTE) Return the first BlocNotes filtered by the NOM_PIECE_JOINTE column
 * @method BlocNotes findOneByIdEntite(int $ID_ENTITE) Return the first BlocNotes filtered by the ID_ENTITE column
 * @method BlocNotes findOneByIdAgent(int $ID_AGENT) Return the first BlocNotes filtered by the ID_AGENT column
 * @method BlocNotes findOneByNomAgentFr(string $NOM_AGENT_FR) Return the first BlocNotes filtered by the NOM_AGENT_FR column
 * @method BlocNotes findOneByNomAgentAr(string $NOM_AGENT_AR) Return the first BlocNotes filtered by the NOM_AGENT_AR column
 * @method BlocNotes findOneByPrenomAgentFr(string $PRENOM_AGENT_FR) Return the first BlocNotes filtered by the PRENOM_AGENT_FR column
 * @method BlocNotes findOneByPrenomAgentAr(string $PRENOM_AGENT_AR) Return the first BlocNotes filtered by the PRENOM_AGENT_AR column
 *
 * @method array findByIdNote(int $ID_NOTE) Return BlocNotes objects filtered by the ID_NOTE column
 * @method array findByIdDemande(int $ID_DEMANDE) Return BlocNotes objects filtered by the ID_DEMANDE column
 * @method array findByTexteNote(string $TEXTE_NOTE) Return BlocNotes objects filtered by the TEXTE_NOTE column
 * @method array findByDateNote(string $DATE_NOTE) Return BlocNotes objects filtered by the DATE_NOTE column
 * @method array findByIdPieceJointe(int $ID_PIECE_JOINTE) Return BlocNotes objects filtered by the ID_PIECE_JOINTE column
 * @method array findByNomPieceJointe(string $NOM_PIECE_JOINTE) Return BlocNotes objects filtered by the NOM_PIECE_JOINTE column
 * @method array findByIdEntite(int $ID_ENTITE) Return BlocNotes objects filtered by the ID_ENTITE column
 * @method array findByIdAgent(int $ID_AGENT) Return BlocNotes objects filtered by the ID_AGENT column
 * @method array findByNomAgentFr(string $NOM_AGENT_FR) Return BlocNotes objects filtered by the NOM_AGENT_FR column
 * @method array findByNomAgentAr(string $NOM_AGENT_AR) Return BlocNotes objects filtered by the NOM_AGENT_AR column
 * @method array findByPrenomAgentFr(string $PRENOM_AGENT_FR) Return BlocNotes objects filtered by the PRENOM_AGENT_FR column
 * @method array findByPrenomAgentAr(string $PRENOM_AGENT_AR) Return BlocNotes objects filtered by the PRENOM_AGENT_AR column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseBlocNotesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBlocNotesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'BlocNotes', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new BlocNotesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   BlocNotesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return BlocNotesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof BlocNotesQuery) {
            return $criteria;
        }
        $query = new BlocNotesQuery();
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
     * @return   BlocNotes|BlocNotes[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = BlocNotesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(BlocNotesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 BlocNotes A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdNote($key, $con = null)
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
     * @return                 BlocNotes A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_NOTE`, `ID_DEMANDE`, `TEXTE_NOTE`, `DATE_NOTE`, `ID_PIECE_JOINTE`, `NOM_PIECE_JOINTE`, `ID_ENTITE`, `ID_AGENT`, `NOM_AGENT_FR`, `NOM_AGENT_AR`, `PRENOM_AGENT_FR`, `PRENOM_AGENT_AR` FROM `bloc_notes` WHERE `ID_NOTE` = :p0';
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
            $obj = new BlocNotes();
            $obj->hydrate($row);
            BlocNotesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return BlocNotes|BlocNotes[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|BlocNotes[]|mixed the list of results, formatted by the current formatter
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
     * @return BlocNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BlocNotesPeer::ID_NOTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return BlocNotesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BlocNotesPeer::ID_NOTE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_NOTE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdNote(1234); // WHERE ID_NOTE = 1234
     * $query->filterByIdNote(array(12, 34)); // WHERE ID_NOTE IN (12, 34)
     * $query->filterByIdNote(array('min' => 12)); // WHERE ID_NOTE >= 12
     * $query->filterByIdNote(array('max' => 12)); // WHERE ID_NOTE <= 12
     * </code>
     *
     * @param     mixed $idNote The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlocNotesQuery The current query, for fluid interface
     */
    public function filterByIdNote($idNote = null, $comparison = null)
    {
        if (is_array($idNote)) {
            $useMinMax = false;
            if (isset($idNote['min'])) {
                $this->addUsingAlias(BlocNotesPeer::ID_NOTE, $idNote['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idNote['max'])) {
                $this->addUsingAlias(BlocNotesPeer::ID_NOTE, $idNote['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BlocNotesPeer::ID_NOTE, $idNote, $comparison);
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
     * @return BlocNotesQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(BlocNotesPeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(BlocNotesPeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BlocNotesPeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the TEXTE_NOTE column
     *
     * Example usage:
     * <code>
     * $query->filterByTexteNote('fooValue');   // WHERE TEXTE_NOTE = 'fooValue'
     * $query->filterByTexteNote('%fooValue%'); // WHERE TEXTE_NOTE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $texteNote The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlocNotesQuery The current query, for fluid interface
     */
    public function filterByTexteNote($texteNote = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($texteNote)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $texteNote)) {
                $texteNote = str_replace('*', '%', $texteNote);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BlocNotesPeer::TEXTE_NOTE, $texteNote, $comparison);
    }

    /**
     * Filter the query on the DATE_NOTE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateNote('2011-03-14'); // WHERE DATE_NOTE = '2011-03-14'
     * $query->filterByDateNote('now'); // WHERE DATE_NOTE = '2011-03-14'
     * $query->filterByDateNote(array('max' => 'yesterday')); // WHERE DATE_NOTE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateNote The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlocNotesQuery The current query, for fluid interface
     */
    public function filterByDateNote($dateNote = null, $comparison = null)
    {
        if (is_array($dateNote)) {
            $useMinMax = false;
            if (isset($dateNote['min'])) {
                $this->addUsingAlias(BlocNotesPeer::DATE_NOTE, $dateNote['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateNote['max'])) {
                $this->addUsingAlias(BlocNotesPeer::DATE_NOTE, $dateNote['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BlocNotesPeer::DATE_NOTE, $dateNote, $comparison);
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
     * @return BlocNotesQuery The current query, for fluid interface
     */
    public function filterByIdPieceJointe($idPieceJointe = null, $comparison = null)
    {
        if (is_array($idPieceJointe)) {
            $useMinMax = false;
            if (isset($idPieceJointe['min'])) {
                $this->addUsingAlias(BlocNotesPeer::ID_PIECE_JOINTE, $idPieceJointe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPieceJointe['max'])) {
                $this->addUsingAlias(BlocNotesPeer::ID_PIECE_JOINTE, $idPieceJointe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BlocNotesPeer::ID_PIECE_JOINTE, $idPieceJointe, $comparison);
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
     * @return BlocNotesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BlocNotesPeer::NOM_PIECE_JOINTE, $nomPieceJointe, $comparison);
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
     * @return BlocNotesQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(BlocNotesPeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(BlocNotesPeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BlocNotesPeer::ID_ENTITE, $idEntite, $comparison);
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
     * @return BlocNotesQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(BlocNotesPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(BlocNotesPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BlocNotesPeer::ID_AGENT, $idAgent, $comparison);
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
     * @return BlocNotesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BlocNotesPeer::NOM_AGENT_FR, $nomAgentFr, $comparison);
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
     * @return BlocNotesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BlocNotesPeer::NOM_AGENT_AR, $nomAgentAr, $comparison);
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
     * @return BlocNotesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BlocNotesPeer::PRENOM_AGENT_FR, $prenomAgentFr, $comparison);
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
     * @return BlocNotesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(BlocNotesPeer::PRENOM_AGENT_AR, $prenomAgentAr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   BlocNotes $blocNotes Object to remove from the list of results
     *
     * @return BlocNotesQuery The current query, for fluid interface
     */
    public function prune($blocNotes = null)
    {
        if ($blocNotes) {
            $this->addUsingAlias(BlocNotesPeer::ID_NOTE, $blocNotes->getIdNote(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
