<?php


/**
 * Base class that represents a query for the 'partage' table.
 *
 * 
 *
 * @method PartageQuery orderByIdPartage($order = Criteria::ASC) Order by the ID_PARTAGE column
 * @method PartageQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method PartageQuery orderByIdAgentPartage($order = Criteria::ASC) Order by the ID_AGENT_PARTAGE column
 * @method PartageQuery orderByNomAgentPartageFr($order = Criteria::ASC) Order by the NOM_AGENT_PARTAGE_FR column
 * @method PartageQuery orderByNomAgentPartageAr($order = Criteria::ASC) Order by the NOM_AGENT_PARTAGE_AR column
 * @method PartageQuery orderByPrenomAgentPartageFr($order = Criteria::ASC) Order by the PRENOM_AGENT_PARTAGE_FR column
 * @method PartageQuery orderByPrenomAgentPartageAr($order = Criteria::ASC) Order by the PRENOM_AGENT_PARTAGE_AR column
 * @method PartageQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method PartageQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method PartageQuery orderByActionAttendue($order = Criteria::ASC) Order by the ACTION_ATTENDUE column
 * @method PartageQuery orderByCommentaire($order = Criteria::ASC) Order by the COMMENTAIRE column
 * @method PartageQuery orderByIdPieceJointe($order = Criteria::ASC) Order by the ID_PIECE_JOINTE column
 * @method PartageQuery orderByNomPieceJointe($order = Criteria::ASC) Order by the NOM_PIECE_JOINTE column
 * @method PartageQuery orderByDatePartage($order = Criteria::ASC) Order by the DATE_PARTAGE column
 * @method PartageQuery orderByDateRetrait($order = Criteria::ASC) Order by the DATE_RETRAIT column
 * @method PartageQuery orderByEtat($order = Criteria::ASC) Order by the ETAT column
 * @method PartageQuery orderByEtatPartage($order = Criteria::ASC) Order by the ETAT_PARTAGE column
 * @method PartageQuery orderByDateRetirerPartage($order = Criteria::ASC) Order by the DATE_RETIRER_PARTAGE column
 *
 * @method PartageQuery groupByIdPartage() Group by the ID_PARTAGE column
 * @method PartageQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method PartageQuery groupByIdAgentPartage() Group by the ID_AGENT_PARTAGE column
 * @method PartageQuery groupByNomAgentPartageFr() Group by the NOM_AGENT_PARTAGE_FR column
 * @method PartageQuery groupByNomAgentPartageAr() Group by the NOM_AGENT_PARTAGE_AR column
 * @method PartageQuery groupByPrenomAgentPartageFr() Group by the PRENOM_AGENT_PARTAGE_FR column
 * @method PartageQuery groupByPrenomAgentPartageAr() Group by the PRENOM_AGENT_PARTAGE_AR column
 * @method PartageQuery groupByIdAgent() Group by the ID_AGENT column
 * @method PartageQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method PartageQuery groupByActionAttendue() Group by the ACTION_ATTENDUE column
 * @method PartageQuery groupByCommentaire() Group by the COMMENTAIRE column
 * @method PartageQuery groupByIdPieceJointe() Group by the ID_PIECE_JOINTE column
 * @method PartageQuery groupByNomPieceJointe() Group by the NOM_PIECE_JOINTE column
 * @method PartageQuery groupByDatePartage() Group by the DATE_PARTAGE column
 * @method PartageQuery groupByDateRetrait() Group by the DATE_RETRAIT column
 * @method PartageQuery groupByEtat() Group by the ETAT column
 * @method PartageQuery groupByEtatPartage() Group by the ETAT_PARTAGE column
 * @method PartageQuery groupByDateRetirerPartage() Group by the DATE_RETIRER_PARTAGE column
 *
 * @method PartageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PartageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PartageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Partage findOne(PropelPDO $con = null) Return the first Partage matching the query
 * @method Partage findOneOrCreate(PropelPDO $con = null) Return the first Partage matching the query, or a new Partage object populated from the query conditions when no match is found
 *
 * @method Partage findOneByIdDemande(int $ID_DEMANDE) Return the first Partage filtered by the ID_DEMANDE column
 * @method Partage findOneByIdAgentPartage(int $ID_AGENT_PARTAGE) Return the first Partage filtered by the ID_AGENT_PARTAGE column
 * @method Partage findOneByNomAgentPartageFr(string $NOM_AGENT_PARTAGE_FR) Return the first Partage filtered by the NOM_AGENT_PARTAGE_FR column
 * @method Partage findOneByNomAgentPartageAr(string $NOM_AGENT_PARTAGE_AR) Return the first Partage filtered by the NOM_AGENT_PARTAGE_AR column
 * @method Partage findOneByPrenomAgentPartageFr(string $PRENOM_AGENT_PARTAGE_FR) Return the first Partage filtered by the PRENOM_AGENT_PARTAGE_FR column
 * @method Partage findOneByPrenomAgentPartageAr(string $PRENOM_AGENT_PARTAGE_AR) Return the first Partage filtered by the PRENOM_AGENT_PARTAGE_AR column
 * @method Partage findOneByIdAgent(int $ID_AGENT) Return the first Partage filtered by the ID_AGENT column
 * @method Partage findOneByIdEntite(int $ID_ENTITE) Return the first Partage filtered by the ID_ENTITE column
 * @method Partage findOneByActionAttendue(int $ACTION_ATTENDUE) Return the first Partage filtered by the ACTION_ATTENDUE column
 * @method Partage findOneByCommentaire(string $COMMENTAIRE) Return the first Partage filtered by the COMMENTAIRE column
 * @method Partage findOneByIdPieceJointe(int $ID_PIECE_JOINTE) Return the first Partage filtered by the ID_PIECE_JOINTE column
 * @method Partage findOneByNomPieceJointe(string $NOM_PIECE_JOINTE) Return the first Partage filtered by the NOM_PIECE_JOINTE column
 * @method Partage findOneByDatePartage(string $DATE_PARTAGE) Return the first Partage filtered by the DATE_PARTAGE column
 * @method Partage findOneByDateRetrait(string $DATE_RETRAIT) Return the first Partage filtered by the DATE_RETRAIT column
 * @method Partage findOneByEtat(string $ETAT) Return the first Partage filtered by the ETAT column
 * @method Partage findOneByEtatPartage(string $ETAT_PARTAGE) Return the first Partage filtered by the ETAT_PARTAGE column
 * @method Partage findOneByDateRetirerPartage(string $DATE_RETIRER_PARTAGE) Return the first Partage filtered by the DATE_RETIRER_PARTAGE column
 *
 * @method array findByIdPartage(int $ID_PARTAGE) Return Partage objects filtered by the ID_PARTAGE column
 * @method array findByIdDemande(int $ID_DEMANDE) Return Partage objects filtered by the ID_DEMANDE column
 * @method array findByIdAgentPartage(int $ID_AGENT_PARTAGE) Return Partage objects filtered by the ID_AGENT_PARTAGE column
 * @method array findByNomAgentPartageFr(string $NOM_AGENT_PARTAGE_FR) Return Partage objects filtered by the NOM_AGENT_PARTAGE_FR column
 * @method array findByNomAgentPartageAr(string $NOM_AGENT_PARTAGE_AR) Return Partage objects filtered by the NOM_AGENT_PARTAGE_AR column
 * @method array findByPrenomAgentPartageFr(string $PRENOM_AGENT_PARTAGE_FR) Return Partage objects filtered by the PRENOM_AGENT_PARTAGE_FR column
 * @method array findByPrenomAgentPartageAr(string $PRENOM_AGENT_PARTAGE_AR) Return Partage objects filtered by the PRENOM_AGENT_PARTAGE_AR column
 * @method array findByIdAgent(int $ID_AGENT) Return Partage objects filtered by the ID_AGENT column
 * @method array findByIdEntite(int $ID_ENTITE) Return Partage objects filtered by the ID_ENTITE column
 * @method array findByActionAttendue(int $ACTION_ATTENDUE) Return Partage objects filtered by the ACTION_ATTENDUE column
 * @method array findByCommentaire(string $COMMENTAIRE) Return Partage objects filtered by the COMMENTAIRE column
 * @method array findByIdPieceJointe(int $ID_PIECE_JOINTE) Return Partage objects filtered by the ID_PIECE_JOINTE column
 * @method array findByNomPieceJointe(string $NOM_PIECE_JOINTE) Return Partage objects filtered by the NOM_PIECE_JOINTE column
 * @method array findByDatePartage(string $DATE_PARTAGE) Return Partage objects filtered by the DATE_PARTAGE column
 * @method array findByDateRetrait(string $DATE_RETRAIT) Return Partage objects filtered by the DATE_RETRAIT column
 * @method array findByEtat(string $ETAT) Return Partage objects filtered by the ETAT column
 * @method array findByEtatPartage(string $ETAT_PARTAGE) Return Partage objects filtered by the ETAT_PARTAGE column
 * @method array findByDateRetirerPartage(string $DATE_RETIRER_PARTAGE) Return Partage objects filtered by the DATE_RETIRER_PARTAGE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePartageQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePartageQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Partage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PartageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PartageQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PartageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PartageQuery) {
            return $criteria;
        }
        $query = new PartageQuery();
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
     * @return   Partage|Partage[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PartagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PartagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Partage A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPartage($key, $con = null)
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
     * @return                 Partage A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PARTAGE`, `ID_DEMANDE`, `ID_AGENT_PARTAGE`, `NOM_AGENT_PARTAGE_FR`, `NOM_AGENT_PARTAGE_AR`, `PRENOM_AGENT_PARTAGE_FR`, `PRENOM_AGENT_PARTAGE_AR`, `ID_AGENT`, `ID_ENTITE`, `ACTION_ATTENDUE`, `COMMENTAIRE`, `ID_PIECE_JOINTE`, `NOM_PIECE_JOINTE`, `DATE_PARTAGE`, `DATE_RETRAIT`, `ETAT`, `ETAT_PARTAGE`, `DATE_RETIRER_PARTAGE` FROM `partage` WHERE `ID_PARTAGE` = :p0';
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
            $obj = new Partage();
            $obj->hydrate($row);
            PartagePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Partage|Partage[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Partage[]|mixed the list of results, formatted by the current formatter
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
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PartagePeer::ID_PARTAGE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PartagePeer::ID_PARTAGE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_PARTAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPartage(1234); // WHERE ID_PARTAGE = 1234
     * $query->filterByIdPartage(array(12, 34)); // WHERE ID_PARTAGE IN (12, 34)
     * $query->filterByIdPartage(array('min' => 12)); // WHERE ID_PARTAGE >= 12
     * $query->filterByIdPartage(array('max' => 12)); // WHERE ID_PARTAGE <= 12
     * </code>
     *
     * @param     mixed $idPartage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByIdPartage($idPartage = null, $comparison = null)
    {
        if (is_array($idPartage)) {
            $useMinMax = false;
            if (isset($idPartage['min'])) {
                $this->addUsingAlias(PartagePeer::ID_PARTAGE, $idPartage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPartage['max'])) {
                $this->addUsingAlias(PartagePeer::ID_PARTAGE, $idPartage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PartagePeer::ID_PARTAGE, $idPartage, $comparison);
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
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(PartagePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(PartagePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PartagePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_PARTAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentPartage(1234); // WHERE ID_AGENT_PARTAGE = 1234
     * $query->filterByIdAgentPartage(array(12, 34)); // WHERE ID_AGENT_PARTAGE IN (12, 34)
     * $query->filterByIdAgentPartage(array('min' => 12)); // WHERE ID_AGENT_PARTAGE >= 12
     * $query->filterByIdAgentPartage(array('max' => 12)); // WHERE ID_AGENT_PARTAGE <= 12
     * </code>
     *
     * @param     mixed $idAgentPartage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByIdAgentPartage($idAgentPartage = null, $comparison = null)
    {
        if (is_array($idAgentPartage)) {
            $useMinMax = false;
            if (isset($idAgentPartage['min'])) {
                $this->addUsingAlias(PartagePeer::ID_AGENT_PARTAGE, $idAgentPartage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentPartage['max'])) {
                $this->addUsingAlias(PartagePeer::ID_AGENT_PARTAGE, $idAgentPartage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PartagePeer::ID_AGENT_PARTAGE, $idAgentPartage, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_PARTAGE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentPartageFr('fooValue');   // WHERE NOM_AGENT_PARTAGE_FR = 'fooValue'
     * $query->filterByNomAgentPartageFr('%fooValue%'); // WHERE NOM_AGENT_PARTAGE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentPartageFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByNomAgentPartageFr($nomAgentPartageFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentPartageFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentPartageFr)) {
                $nomAgentPartageFr = str_replace('*', '%', $nomAgentPartageFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PartagePeer::NOM_AGENT_PARTAGE_FR, $nomAgentPartageFr, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_PARTAGE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentPartageAr('fooValue');   // WHERE NOM_AGENT_PARTAGE_AR = 'fooValue'
     * $query->filterByNomAgentPartageAr('%fooValue%'); // WHERE NOM_AGENT_PARTAGE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentPartageAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByNomAgentPartageAr($nomAgentPartageAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentPartageAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentPartageAr)) {
                $nomAgentPartageAr = str_replace('*', '%', $nomAgentPartageAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PartagePeer::NOM_AGENT_PARTAGE_AR, $nomAgentPartageAr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_PARTAGE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentPartageFr('fooValue');   // WHERE PRENOM_AGENT_PARTAGE_FR = 'fooValue'
     * $query->filterByPrenomAgentPartageFr('%fooValue%'); // WHERE PRENOM_AGENT_PARTAGE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentPartageFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentPartageFr($prenomAgentPartageFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentPartageFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentPartageFr)) {
                $prenomAgentPartageFr = str_replace('*', '%', $prenomAgentPartageFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PartagePeer::PRENOM_AGENT_PARTAGE_FR, $prenomAgentPartageFr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_PARTAGE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentPartageAr('fooValue');   // WHERE PRENOM_AGENT_PARTAGE_AR = 'fooValue'
     * $query->filterByPrenomAgentPartageAr('%fooValue%'); // WHERE PRENOM_AGENT_PARTAGE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentPartageAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentPartageAr($prenomAgentPartageAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentPartageAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentPartageAr)) {
                $prenomAgentPartageAr = str_replace('*', '%', $prenomAgentPartageAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PartagePeer::PRENOM_AGENT_PARTAGE_AR, $prenomAgentPartageAr, $comparison);
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
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(PartagePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(PartagePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PartagePeer::ID_AGENT, $idAgent, $comparison);
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
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(PartagePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(PartagePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PartagePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the ACTION_ATTENDUE column
     *
     * Example usage:
     * <code>
     * $query->filterByActionAttendue(1234); // WHERE ACTION_ATTENDUE = 1234
     * $query->filterByActionAttendue(array(12, 34)); // WHERE ACTION_ATTENDUE IN (12, 34)
     * $query->filterByActionAttendue(array('min' => 12)); // WHERE ACTION_ATTENDUE >= 12
     * $query->filterByActionAttendue(array('max' => 12)); // WHERE ACTION_ATTENDUE <= 12
     * </code>
     *
     * @param     mixed $actionAttendue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByActionAttendue($actionAttendue = null, $comparison = null)
    {
        if (is_array($actionAttendue)) {
            $useMinMax = false;
            if (isset($actionAttendue['min'])) {
                $this->addUsingAlias(PartagePeer::ACTION_ATTENDUE, $actionAttendue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actionAttendue['max'])) {
                $this->addUsingAlias(PartagePeer::ACTION_ATTENDUE, $actionAttendue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PartagePeer::ACTION_ATTENDUE, $actionAttendue, $comparison);
    }

    /**
     * Filter the query on the COMMENTAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE COMMENTAIRE = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE COMMENTAIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PartagePeer::COMMENTAIRE, $commentaire, $comparison);
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
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByIdPieceJointe($idPieceJointe = null, $comparison = null)
    {
        if (is_array($idPieceJointe)) {
            $useMinMax = false;
            if (isset($idPieceJointe['min'])) {
                $this->addUsingAlias(PartagePeer::ID_PIECE_JOINTE, $idPieceJointe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPieceJointe['max'])) {
                $this->addUsingAlias(PartagePeer::ID_PIECE_JOINTE, $idPieceJointe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PartagePeer::ID_PIECE_JOINTE, $idPieceJointe, $comparison);
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
     * @return PartageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PartagePeer::NOM_PIECE_JOINTE, $nomPieceJointe, $comparison);
    }

    /**
     * Filter the query on the DATE_PARTAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePartage('2011-03-14'); // WHERE DATE_PARTAGE = '2011-03-14'
     * $query->filterByDatePartage('now'); // WHERE DATE_PARTAGE = '2011-03-14'
     * $query->filterByDatePartage(array('max' => 'yesterday')); // WHERE DATE_PARTAGE > '2011-03-13'
     * </code>
     *
     * @param     mixed $datePartage The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByDatePartage($datePartage = null, $comparison = null)
    {
        if (is_array($datePartage)) {
            $useMinMax = false;
            if (isset($datePartage['min'])) {
                $this->addUsingAlias(PartagePeer::DATE_PARTAGE, $datePartage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datePartage['max'])) {
                $this->addUsingAlias(PartagePeer::DATE_PARTAGE, $datePartage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PartagePeer::DATE_PARTAGE, $datePartage, $comparison);
    }

    /**
     * Filter the query on the DATE_RETRAIT column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRetrait('2011-03-14'); // WHERE DATE_RETRAIT = '2011-03-14'
     * $query->filterByDateRetrait('now'); // WHERE DATE_RETRAIT = '2011-03-14'
     * $query->filterByDateRetrait(array('max' => 'yesterday')); // WHERE DATE_RETRAIT > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateRetrait The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByDateRetrait($dateRetrait = null, $comparison = null)
    {
        if (is_array($dateRetrait)) {
            $useMinMax = false;
            if (isset($dateRetrait['min'])) {
                $this->addUsingAlias(PartagePeer::DATE_RETRAIT, $dateRetrait['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRetrait['max'])) {
                $this->addUsingAlias(PartagePeer::DATE_RETRAIT, $dateRetrait['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PartagePeer::DATE_RETRAIT, $dateRetrait, $comparison);
    }

    /**
     * Filter the query on the ETAT column
     *
     * Example usage:
     * <code>
     * $query->filterByEtat('fooValue');   // WHERE ETAT = 'fooValue'
     * $query->filterByEtat('%fooValue%'); // WHERE ETAT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByEtat($etat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etat)) {
                $etat = str_replace('*', '%', $etat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PartagePeer::ETAT, $etat, $comparison);
    }

    /**
     * Filter the query on the ETAT_PARTAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatPartage('fooValue');   // WHERE ETAT_PARTAGE = 'fooValue'
     * $query->filterByEtatPartage('%fooValue%'); // WHERE ETAT_PARTAGE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatPartage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByEtatPartage($etatPartage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatPartage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatPartage)) {
                $etatPartage = str_replace('*', '%', $etatPartage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PartagePeer::ETAT_PARTAGE, $etatPartage, $comparison);
    }

    /**
     * Filter the query on the DATE_RETIRER_PARTAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRetirerPartage('2011-03-14'); // WHERE DATE_RETIRER_PARTAGE = '2011-03-14'
     * $query->filterByDateRetirerPartage('now'); // WHERE DATE_RETIRER_PARTAGE = '2011-03-14'
     * $query->filterByDateRetirerPartage(array('max' => 'yesterday')); // WHERE DATE_RETIRER_PARTAGE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateRetirerPartage The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function filterByDateRetirerPartage($dateRetirerPartage = null, $comparison = null)
    {
        if (is_array($dateRetirerPartage)) {
            $useMinMax = false;
            if (isset($dateRetirerPartage['min'])) {
                $this->addUsingAlias(PartagePeer::DATE_RETIRER_PARTAGE, $dateRetirerPartage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRetirerPartage['max'])) {
                $this->addUsingAlias(PartagePeer::DATE_RETIRER_PARTAGE, $dateRetirerPartage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PartagePeer::DATE_RETIRER_PARTAGE, $dateRetirerPartage, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Partage $partage Object to remove from the list of results
     *
     * @return PartageQuery The current query, for fluid interface
     */
    public function prune($partage = null)
    {
        if ($partage) {
            $this->addUsingAlias(PartagePeer::ID_PARTAGE, $partage->getIdPartage(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
