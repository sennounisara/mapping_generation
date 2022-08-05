<?php


/**
 * Base class that represents a query for the 'reponse_citoyen' table.
 *
 * 
 *
 * @method ReponseCitoyenQuery orderByIdReponse($order = Criteria::ASC) Order by the ID_REPONSE column
 * @method ReponseCitoyenQuery orderByIdEchange($order = Criteria::ASC) Order by the ID_ECHANGE column
 * @method ReponseCitoyenQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method ReponseCitoyenQuery orderByIdPieceJointe($order = Criteria::ASC) Order by the ID_PIECE_JOINTE column
 * @method ReponseCitoyenQuery orderByNomPieceJointe($order = Criteria::ASC) Order by the NOM_PIECE_JOINTE column
 * @method ReponseCitoyenQuery orderByMessage($order = Criteria::ASC) Order by the MESSAGE column
 * @method ReponseCitoyenQuery orderByDateReponse($order = Criteria::ASC) Order by the DATE_REPONSE column
 * @method ReponseCitoyenQuery orderByVisualiser($order = Criteria::ASC) Order by the VISUALISER column
 * @method ReponseCitoyenQuery orderByLieAuxAnnexes($order = Criteria::ASC) Order by the LIE_AUX_ANNEXES column
 *
 * @method ReponseCitoyenQuery groupByIdReponse() Group by the ID_REPONSE column
 * @method ReponseCitoyenQuery groupByIdEchange() Group by the ID_ECHANGE column
 * @method ReponseCitoyenQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method ReponseCitoyenQuery groupByIdPieceJointe() Group by the ID_PIECE_JOINTE column
 * @method ReponseCitoyenQuery groupByNomPieceJointe() Group by the NOM_PIECE_JOINTE column
 * @method ReponseCitoyenQuery groupByMessage() Group by the MESSAGE column
 * @method ReponseCitoyenQuery groupByDateReponse() Group by the DATE_REPONSE column
 * @method ReponseCitoyenQuery groupByVisualiser() Group by the VISUALISER column
 * @method ReponseCitoyenQuery groupByLieAuxAnnexes() Group by the LIE_AUX_ANNEXES column
 *
 * @method ReponseCitoyenQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ReponseCitoyenQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ReponseCitoyenQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ReponseCitoyen findOne(PropelPDO $con = null) Return the first ReponseCitoyen matching the query
 * @method ReponseCitoyen findOneOrCreate(PropelPDO $con = null) Return the first ReponseCitoyen matching the query, or a new ReponseCitoyen object populated from the query conditions when no match is found
 *
 * @method ReponseCitoyen findOneByIdEchange(int $ID_ECHANGE) Return the first ReponseCitoyen filtered by the ID_ECHANGE column
 * @method ReponseCitoyen findOneByIdDemande(int $ID_DEMANDE) Return the first ReponseCitoyen filtered by the ID_DEMANDE column
 * @method ReponseCitoyen findOneByIdPieceJointe(int $ID_PIECE_JOINTE) Return the first ReponseCitoyen filtered by the ID_PIECE_JOINTE column
 * @method ReponseCitoyen findOneByNomPieceJointe(string $NOM_PIECE_JOINTE) Return the first ReponseCitoyen filtered by the NOM_PIECE_JOINTE column
 * @method ReponseCitoyen findOneByMessage(string $MESSAGE) Return the first ReponseCitoyen filtered by the MESSAGE column
 * @method ReponseCitoyen findOneByDateReponse(string $DATE_REPONSE) Return the first ReponseCitoyen filtered by the DATE_REPONSE column
 * @method ReponseCitoyen findOneByVisualiser(string $VISUALISER) Return the first ReponseCitoyen filtered by the VISUALISER column
 * @method ReponseCitoyen findOneByLieAuxAnnexes(string $LIE_AUX_ANNEXES) Return the first ReponseCitoyen filtered by the LIE_AUX_ANNEXES column
 *
 * @method array findByIdReponse(int $ID_REPONSE) Return ReponseCitoyen objects filtered by the ID_REPONSE column
 * @method array findByIdEchange(int $ID_ECHANGE) Return ReponseCitoyen objects filtered by the ID_ECHANGE column
 * @method array findByIdDemande(int $ID_DEMANDE) Return ReponseCitoyen objects filtered by the ID_DEMANDE column
 * @method array findByIdPieceJointe(int $ID_PIECE_JOINTE) Return ReponseCitoyen objects filtered by the ID_PIECE_JOINTE column
 * @method array findByNomPieceJointe(string $NOM_PIECE_JOINTE) Return ReponseCitoyen objects filtered by the NOM_PIECE_JOINTE column
 * @method array findByMessage(string $MESSAGE) Return ReponseCitoyen objects filtered by the MESSAGE column
 * @method array findByDateReponse(string $DATE_REPONSE) Return ReponseCitoyen objects filtered by the DATE_REPONSE column
 * @method array findByVisualiser(string $VISUALISER) Return ReponseCitoyen objects filtered by the VISUALISER column
 * @method array findByLieAuxAnnexes(string $LIE_AUX_ANNEXES) Return ReponseCitoyen objects filtered by the LIE_AUX_ANNEXES column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseReponseCitoyenQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseReponseCitoyenQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'ReponseCitoyen', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ReponseCitoyenQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ReponseCitoyenQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ReponseCitoyenQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ReponseCitoyenQuery) {
            return $criteria;
        }
        $query = new ReponseCitoyenQuery();
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
     * @return   ReponseCitoyen|ReponseCitoyen[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ReponseCitoyenPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ReponseCitoyenPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ReponseCitoyen A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdReponse($key, $con = null)
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
     * @return                 ReponseCitoyen A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_REPONSE`, `ID_ECHANGE`, `ID_DEMANDE`, `ID_PIECE_JOINTE`, `NOM_PIECE_JOINTE`, `MESSAGE`, `DATE_REPONSE`, `VISUALISER`, `LIE_AUX_ANNEXES` FROM `reponse_citoyen` WHERE `ID_REPONSE` = :p0';
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
            $obj = new ReponseCitoyen();
            $obj->hydrate($row);
            ReponseCitoyenPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ReponseCitoyen|ReponseCitoyen[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ReponseCitoyen[]|mixed the list of results, formatted by the current formatter
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
     * @return ReponseCitoyenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ReponseCitoyenPeer::ID_REPONSE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ReponseCitoyenQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ReponseCitoyenPeer::ID_REPONSE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdReponse(1234); // WHERE ID_REPONSE = 1234
     * $query->filterByIdReponse(array(12, 34)); // WHERE ID_REPONSE IN (12, 34)
     * $query->filterByIdReponse(array('min' => 12)); // WHERE ID_REPONSE >= 12
     * $query->filterByIdReponse(array('max' => 12)); // WHERE ID_REPONSE <= 12
     * </code>
     *
     * @param     mixed $idReponse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReponseCitoyenQuery The current query, for fluid interface
     */
    public function filterByIdReponse($idReponse = null, $comparison = null)
    {
        if (is_array($idReponse)) {
            $useMinMax = false;
            if (isset($idReponse['min'])) {
                $this->addUsingAlias(ReponseCitoyenPeer::ID_REPONSE, $idReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReponse['max'])) {
                $this->addUsingAlias(ReponseCitoyenPeer::ID_REPONSE, $idReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReponseCitoyenPeer::ID_REPONSE, $idReponse, $comparison);
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
     * @return ReponseCitoyenQuery The current query, for fluid interface
     */
    public function filterByIdEchange($idEchange = null, $comparison = null)
    {
        if (is_array($idEchange)) {
            $useMinMax = false;
            if (isset($idEchange['min'])) {
                $this->addUsingAlias(ReponseCitoyenPeer::ID_ECHANGE, $idEchange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEchange['max'])) {
                $this->addUsingAlias(ReponseCitoyenPeer::ID_ECHANGE, $idEchange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReponseCitoyenPeer::ID_ECHANGE, $idEchange, $comparison);
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
     * @return ReponseCitoyenQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(ReponseCitoyenPeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(ReponseCitoyenPeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReponseCitoyenPeer::ID_DEMANDE, $idDemande, $comparison);
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
     * @return ReponseCitoyenQuery The current query, for fluid interface
     */
    public function filterByIdPieceJointe($idPieceJointe = null, $comparison = null)
    {
        if (is_array($idPieceJointe)) {
            $useMinMax = false;
            if (isset($idPieceJointe['min'])) {
                $this->addUsingAlias(ReponseCitoyenPeer::ID_PIECE_JOINTE, $idPieceJointe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPieceJointe['max'])) {
                $this->addUsingAlias(ReponseCitoyenPeer::ID_PIECE_JOINTE, $idPieceJointe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReponseCitoyenPeer::ID_PIECE_JOINTE, $idPieceJointe, $comparison);
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
     * @return ReponseCitoyenQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ReponseCitoyenPeer::NOM_PIECE_JOINTE, $nomPieceJointe, $comparison);
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
     * @return ReponseCitoyenQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ReponseCitoyenPeer::MESSAGE, $message, $comparison);
    }

    /**
     * Filter the query on the DATE_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReponse('2011-03-14'); // WHERE DATE_REPONSE = '2011-03-14'
     * $query->filterByDateReponse('now'); // WHERE DATE_REPONSE = '2011-03-14'
     * $query->filterByDateReponse(array('max' => 'yesterday')); // WHERE DATE_REPONSE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateReponse The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReponseCitoyenQuery The current query, for fluid interface
     */
    public function filterByDateReponse($dateReponse = null, $comparison = null)
    {
        if (is_array($dateReponse)) {
            $useMinMax = false;
            if (isset($dateReponse['min'])) {
                $this->addUsingAlias(ReponseCitoyenPeer::DATE_REPONSE, $dateReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateReponse['max'])) {
                $this->addUsingAlias(ReponseCitoyenPeer::DATE_REPONSE, $dateReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ReponseCitoyenPeer::DATE_REPONSE, $dateReponse, $comparison);
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
     * @return ReponseCitoyenQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ReponseCitoyenPeer::VISUALISER, $visualiser, $comparison);
    }

    /**
     * Filter the query on the LIE_AUX_ANNEXES column
     *
     * Example usage:
     * <code>
     * $query->filterByLieAuxAnnexes('fooValue');   // WHERE LIE_AUX_ANNEXES = 'fooValue'
     * $query->filterByLieAuxAnnexes('%fooValue%'); // WHERE LIE_AUX_ANNEXES LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieAuxAnnexes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ReponseCitoyenQuery The current query, for fluid interface
     */
    public function filterByLieAuxAnnexes($lieAuxAnnexes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieAuxAnnexes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieAuxAnnexes)) {
                $lieAuxAnnexes = str_replace('*', '%', $lieAuxAnnexes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ReponseCitoyenPeer::LIE_AUX_ANNEXES, $lieAuxAnnexes, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ReponseCitoyen $reponseCitoyen Object to remove from the list of results
     *
     * @return ReponseCitoyenQuery The current query, for fluid interface
     */
    public function prune($reponseCitoyen = null)
    {
        if ($reponseCitoyen) {
            $this->addUsingAlias(ReponseCitoyenPeer::ID_REPONSE, $reponseCitoyen->getIdReponse(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
