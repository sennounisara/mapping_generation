<?php


/**
 * Base class that represents a query for the 'echange' table.
 *
 * 
 *
 * @method EchangeQuery orderByIdEchange($order = Criteria::ASC) Order by the ID_ECHANGE column
 * @method EchangeQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method EchangeQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method EchangeQuery orderByEmetteur($order = Criteria::ASC) Order by the EMETTEUR column
 * @method EchangeQuery orderByDestinataire($order = Criteria::ASC) Order by the DESTINATAIRE column
 * @method EchangeQuery orderByDateCreation($order = Criteria::ASC) Order by the DATE_CREATION column
 * @method EchangeQuery orderByIdPieceJointe($order = Criteria::ASC) Order by the ID_PIECE_JOINTE column
 * @method EchangeQuery orderByNomPieceJointe($order = Criteria::ASC) Order by the NOM_PIECE_JOINTE column
 * @method EchangeQuery orderByTypeEchange($order = Criteria::ASC) Order by the TYPE_ECHANGE column
 * @method EchangeQuery orderByFormat($order = Criteria::ASC) Order by the FORMAT column
 * @method EchangeQuery orderByCommentaire($order = Criteria::ASC) Order by the COMMENTAIRE column
 * @method EchangeQuery orderByDateEchange($order = Criteria::ASC) Order by the DATE_ECHANGE column
 * @method EchangeQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method EchangeQuery orderByReferenceCourrier($order = Criteria::ASC) Order by the REFERENCE_COURRIER column
 *
 * @method EchangeQuery groupByIdEchange() Group by the ID_ECHANGE column
 * @method EchangeQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method EchangeQuery groupByIdAgent() Group by the ID_AGENT column
 * @method EchangeQuery groupByEmetteur() Group by the EMETTEUR column
 * @method EchangeQuery groupByDestinataire() Group by the DESTINATAIRE column
 * @method EchangeQuery groupByDateCreation() Group by the DATE_CREATION column
 * @method EchangeQuery groupByIdPieceJointe() Group by the ID_PIECE_JOINTE column
 * @method EchangeQuery groupByNomPieceJointe() Group by the NOM_PIECE_JOINTE column
 * @method EchangeQuery groupByTypeEchange() Group by the TYPE_ECHANGE column
 * @method EchangeQuery groupByFormat() Group by the FORMAT column
 * @method EchangeQuery groupByCommentaire() Group by the COMMENTAIRE column
 * @method EchangeQuery groupByDateEchange() Group by the DATE_ECHANGE column
 * @method EchangeQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method EchangeQuery groupByReferenceCourrier() Group by the REFERENCE_COURRIER column
 *
 * @method EchangeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EchangeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EchangeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Echange findOne(PropelPDO $con = null) Return the first Echange matching the query
 * @method Echange findOneOrCreate(PropelPDO $con = null) Return the first Echange matching the query, or a new Echange object populated from the query conditions when no match is found
 *
 * @method Echange findOneByIdDemande(int $ID_DEMANDE) Return the first Echange filtered by the ID_DEMANDE column
 * @method Echange findOneByIdAgent(int $ID_AGENT) Return the first Echange filtered by the ID_AGENT column
 * @method Echange findOneByEmetteur(string $EMETTEUR) Return the first Echange filtered by the EMETTEUR column
 * @method Echange findOneByDestinataire(string $DESTINATAIRE) Return the first Echange filtered by the DESTINATAIRE column
 * @method Echange findOneByDateCreation(string $DATE_CREATION) Return the first Echange filtered by the DATE_CREATION column
 * @method Echange findOneByIdPieceJointe(int $ID_PIECE_JOINTE) Return the first Echange filtered by the ID_PIECE_JOINTE column
 * @method Echange findOneByNomPieceJointe(string $NOM_PIECE_JOINTE) Return the first Echange filtered by the NOM_PIECE_JOINTE column
 * @method Echange findOneByTypeEchange(string $TYPE_ECHANGE) Return the first Echange filtered by the TYPE_ECHANGE column
 * @method Echange findOneByFormat(string $FORMAT) Return the first Echange filtered by the FORMAT column
 * @method Echange findOneByCommentaire(string $COMMENTAIRE) Return the first Echange filtered by the COMMENTAIRE column
 * @method Echange findOneByDateEchange(string $DATE_ECHANGE) Return the first Echange filtered by the DATE_ECHANGE column
 * @method Echange findOneByIdEntite(int $ID_ENTITE) Return the first Echange filtered by the ID_ENTITE column
 * @method Echange findOneByReferenceCourrier(string $REFERENCE_COURRIER) Return the first Echange filtered by the REFERENCE_COURRIER column
 *
 * @method array findByIdEchange(int $ID_ECHANGE) Return Echange objects filtered by the ID_ECHANGE column
 * @method array findByIdDemande(int $ID_DEMANDE) Return Echange objects filtered by the ID_DEMANDE column
 * @method array findByIdAgent(int $ID_AGENT) Return Echange objects filtered by the ID_AGENT column
 * @method array findByEmetteur(string $EMETTEUR) Return Echange objects filtered by the EMETTEUR column
 * @method array findByDestinataire(string $DESTINATAIRE) Return Echange objects filtered by the DESTINATAIRE column
 * @method array findByDateCreation(string $DATE_CREATION) Return Echange objects filtered by the DATE_CREATION column
 * @method array findByIdPieceJointe(int $ID_PIECE_JOINTE) Return Echange objects filtered by the ID_PIECE_JOINTE column
 * @method array findByNomPieceJointe(string $NOM_PIECE_JOINTE) Return Echange objects filtered by the NOM_PIECE_JOINTE column
 * @method array findByTypeEchange(string $TYPE_ECHANGE) Return Echange objects filtered by the TYPE_ECHANGE column
 * @method array findByFormat(string $FORMAT) Return Echange objects filtered by the FORMAT column
 * @method array findByCommentaire(string $COMMENTAIRE) Return Echange objects filtered by the COMMENTAIRE column
 * @method array findByDateEchange(string $DATE_ECHANGE) Return Echange objects filtered by the DATE_ECHANGE column
 * @method array findByIdEntite(int $ID_ENTITE) Return Echange objects filtered by the ID_ENTITE column
 * @method array findByReferenceCourrier(string $REFERENCE_COURRIER) Return Echange objects filtered by the REFERENCE_COURRIER column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseEchangeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEchangeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Echange', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EchangeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EchangeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EchangeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EchangeQuery) {
            return $criteria;
        }
        $query = new EchangeQuery();
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
     * @return   Echange|Echange[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EchangePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Echange A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdEchange($key, $con = null)
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
     * @return                 Echange A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ECHANGE`, `ID_DEMANDE`, `ID_AGENT`, `EMETTEUR`, `DESTINATAIRE`, `DATE_CREATION`, `ID_PIECE_JOINTE`, `NOM_PIECE_JOINTE`, `TYPE_ECHANGE`, `FORMAT`, `COMMENTAIRE`, `DATE_ECHANGE`, `ID_ENTITE`, `REFERENCE_COURRIER` FROM `echange` WHERE `ID_ECHANGE` = :p0';
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
            $obj = new Echange();
            $obj->hydrate($row);
            EchangePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Echange|Echange[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Echange[]|mixed the list of results, formatted by the current formatter
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
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EchangePeer::ID_ECHANGE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EchangePeer::ID_ECHANGE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_ECHANGE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEchange(1234); // WHERE ID_ECHANGE = 1234
     * $query->filterByIdEchange(array(12, 34)); // WHERE ID_ECHANGE IN (12, 34)
     * $query->filterByIdEchange(array('min' => 12)); // WHERE ID_ECHANGE >= 12
     * $query->filterByIdEchange(array('max' => 12)); // WHERE ID_ECHANGE <= 12
     * </code>
     *
     * @param     mixed $idEchange The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByIdEchange($idEchange = null, $comparison = null)
    {
        if (is_array($idEchange)) {
            $useMinMax = false;
            if (isset($idEchange['min'])) {
                $this->addUsingAlias(EchangePeer::ID_ECHANGE, $idEchange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEchange['max'])) {
                $this->addUsingAlias(EchangePeer::ID_ECHANGE, $idEchange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangePeer::ID_ECHANGE, $idEchange, $comparison);
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
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(EchangePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(EchangePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangePeer::ID_DEMANDE, $idDemande, $comparison);
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
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(EchangePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(EchangePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangePeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the EMETTEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByEmetteur('fooValue');   // WHERE EMETTEUR = 'fooValue'
     * $query->filterByEmetteur('%fooValue%'); // WHERE EMETTEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emetteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByEmetteur($emetteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emetteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emetteur)) {
                $emetteur = str_replace('*', '%', $emetteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangePeer::EMETTEUR, $emetteur, $comparison);
    }

    /**
     * Filter the query on the DESTINATAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByDestinataire('fooValue');   // WHERE DESTINATAIRE = 'fooValue'
     * $query->filterByDestinataire('%fooValue%'); // WHERE DESTINATAIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $destinataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByDestinataire($destinataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($destinataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $destinataire)) {
                $destinataire = str_replace('*', '%', $destinataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangePeer::DESTINATAIRE, $destinataire, $comparison);
    }

    /**
     * Filter the query on the DATE_CREATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('2011-03-14'); // WHERE DATE_CREATION = '2011-03-14'
     * $query->filterByDateCreation('now'); // WHERE DATE_CREATION = '2011-03-14'
     * $query->filterByDateCreation(array('max' => 'yesterday')); // WHERE DATE_CREATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(EchangePeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(EchangePeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangePeer::DATE_CREATION, $dateCreation, $comparison);
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
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByIdPieceJointe($idPieceJointe = null, $comparison = null)
    {
        if (is_array($idPieceJointe)) {
            $useMinMax = false;
            if (isset($idPieceJointe['min'])) {
                $this->addUsingAlias(EchangePeer::ID_PIECE_JOINTE, $idPieceJointe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPieceJointe['max'])) {
                $this->addUsingAlias(EchangePeer::ID_PIECE_JOINTE, $idPieceJointe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangePeer::ID_PIECE_JOINTE, $idPieceJointe, $comparison);
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
     * @return EchangeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EchangePeer::NOM_PIECE_JOINTE, $nomPieceJointe, $comparison);
    }

    /**
     * Filter the query on the TYPE_ECHANGE column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEchange('fooValue');   // WHERE TYPE_ECHANGE = 'fooValue'
     * $query->filterByTypeEchange('%fooValue%'); // WHERE TYPE_ECHANGE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEchange The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByTypeEchange($typeEchange = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEchange)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEchange)) {
                $typeEchange = str_replace('*', '%', $typeEchange);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangePeer::TYPE_ECHANGE, $typeEchange, $comparison);
    }

    /**
     * Filter the query on the FORMAT column
     *
     * Example usage:
     * <code>
     * $query->filterByFormat('fooValue');   // WHERE FORMAT = 'fooValue'
     * $query->filterByFormat('%fooValue%'); // WHERE FORMAT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $format The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByFormat($format = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($format)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $format)) {
                $format = str_replace('*', '%', $format);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangePeer::FORMAT, $format, $comparison);
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
     * @return EchangeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(EchangePeer::COMMENTAIRE, $commentaire, $comparison);
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
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByDateEchange($dateEchange = null, $comparison = null)
    {
        if (is_array($dateEchange)) {
            $useMinMax = false;
            if (isset($dateEchange['min'])) {
                $this->addUsingAlias(EchangePeer::DATE_ECHANGE, $dateEchange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEchange['max'])) {
                $this->addUsingAlias(EchangePeer::DATE_ECHANGE, $dateEchange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangePeer::DATE_ECHANGE, $dateEchange, $comparison);
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
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(EchangePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(EchangePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EchangePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the REFERENCE_COURRIER column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceCourrier('fooValue');   // WHERE REFERENCE_COURRIER = 'fooValue'
     * $query->filterByReferenceCourrier('%fooValue%'); // WHERE REFERENCE_COURRIER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $referenceCourrier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EchangeQuery The current query, for fluid interface
     */
    public function filterByReferenceCourrier($referenceCourrier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($referenceCourrier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $referenceCourrier)) {
                $referenceCourrier = str_replace('*', '%', $referenceCourrier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EchangePeer::REFERENCE_COURRIER, $referenceCourrier, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Echange $echange Object to remove from the list of results
     *
     * @return EchangeQuery The current query, for fluid interface
     */
    public function prune($echange = null)
    {
        if ($echange) {
            $this->addUsingAlias(EchangePeer::ID_ECHANGE, $echange->getIdEchange(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
