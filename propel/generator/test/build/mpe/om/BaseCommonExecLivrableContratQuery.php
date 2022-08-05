<?php


/**
 * Base class that represents a query for the 'exec_livrable_contrat' table.
 *
 * 
 *
 * @method CommonExecLivrableContratQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecLivrableContratQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecLivrableContratQuery orderByIdPhase($order = Criteria::ASC) Order by the id_phase column
 * @method CommonExecLivrableContratQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecLivrableContratQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonExecLivrableContratQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecLivrableContratQuery orderByDateCreat($order = Criteria::ASC) Order by the date_creat column
 * @method CommonExecLivrableContratQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 * @method CommonExecLivrableContratQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method CommonExecLivrableContratQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonExecLivrableContratQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonExecLivrableContratQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonExecLivrableContratQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 *
 * @method CommonExecLivrableContratQuery groupById() Group by the id column
 * @method CommonExecLivrableContratQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecLivrableContratQuery groupByIdPhase() Group by the id_phase column
 * @method CommonExecLivrableContratQuery groupByLibelle() Group by the libelle column
 * @method CommonExecLivrableContratQuery groupByTaille() Group by the taille column
 * @method CommonExecLivrableContratQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecLivrableContratQuery groupByDateCreat() Group by the date_creat column
 * @method CommonExecLivrableContratQuery groupByIdAgentModif() Group by the id_agent_modif column
 * @method CommonExecLivrableContratQuery groupByDateModif() Group by the date_modif column
 * @method CommonExecLivrableContratQuery groupByIdBlob() Group by the id_blob column
 * @method CommonExecLivrableContratQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonExecLivrableContratQuery groupByStatut() Group by the statut column
 * @method CommonExecLivrableContratQuery groupByCommentaire() Group by the commentaire column
 *
 * @method CommonExecLivrableContratQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecLivrableContratQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecLivrableContratQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecLivrableContratQuery leftJoinCommonAgent($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgent relation
 * @method CommonExecLivrableContratQuery rightJoinCommonAgent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgent relation
 * @method CommonExecLivrableContratQuery innerJoinCommonAgent($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgent relation
 *
 * @method CommonExecLivrableContratQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecLivrableContratQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecLivrableContratQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecLivrableContrat findOne(PropelPDO $con = null) Return the first CommonExecLivrableContrat matching the query
 * @method CommonExecLivrableContrat findOneOrCreate(PropelPDO $con = null) Return the first CommonExecLivrableContrat matching the query, or a new CommonExecLivrableContrat object populated from the query conditions when no match is found
 *
 * @method CommonExecLivrableContrat findOneByIdContrat(int $id_contrat) Return the first CommonExecLivrableContrat filtered by the id_contrat column
 * @method CommonExecLivrableContrat findOneByIdPhase(int $id_phase) Return the first CommonExecLivrableContrat filtered by the id_phase column
 * @method CommonExecLivrableContrat findOneByLibelle(string $libelle) Return the first CommonExecLivrableContrat filtered by the libelle column
 * @method CommonExecLivrableContrat findOneByTaille(string $taille) Return the first CommonExecLivrableContrat filtered by the taille column
 * @method CommonExecLivrableContrat findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecLivrableContrat filtered by the id_agent_crea column
 * @method CommonExecLivrableContrat findOneByDateCreat(string $date_creat) Return the first CommonExecLivrableContrat filtered by the date_creat column
 * @method CommonExecLivrableContrat findOneByIdAgentModif(int $id_agent_modif) Return the first CommonExecLivrableContrat filtered by the id_agent_modif column
 * @method CommonExecLivrableContrat findOneByDateModif(int $date_modif) Return the first CommonExecLivrableContrat filtered by the date_modif column
 * @method CommonExecLivrableContrat findOneByIdBlob(int $id_blob) Return the first CommonExecLivrableContrat filtered by the id_blob column
 * @method CommonExecLivrableContrat findOneByNomFichier(string $nom_fichier) Return the first CommonExecLivrableContrat filtered by the nom_fichier column
 * @method CommonExecLivrableContrat findOneByStatut(string $statut) Return the first CommonExecLivrableContrat filtered by the statut column
 * @method CommonExecLivrableContrat findOneByCommentaire(string $commentaire) Return the first CommonExecLivrableContrat filtered by the commentaire column
 *
 * @method array findById(int $id) Return CommonExecLivrableContrat objects filtered by the id column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecLivrableContrat objects filtered by the id_contrat column
 * @method array findByIdPhase(int $id_phase) Return CommonExecLivrableContrat objects filtered by the id_phase column
 * @method array findByLibelle(string $libelle) Return CommonExecLivrableContrat objects filtered by the libelle column
 * @method array findByTaille(string $taille) Return CommonExecLivrableContrat objects filtered by the taille column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecLivrableContrat objects filtered by the id_agent_crea column
 * @method array findByDateCreat(string $date_creat) Return CommonExecLivrableContrat objects filtered by the date_creat column
 * @method array findByIdAgentModif(int $id_agent_modif) Return CommonExecLivrableContrat objects filtered by the id_agent_modif column
 * @method array findByDateModif(int $date_modif) Return CommonExecLivrableContrat objects filtered by the date_modif column
 * @method array findByIdBlob(int $id_blob) Return CommonExecLivrableContrat objects filtered by the id_blob column
 * @method array findByNomFichier(string $nom_fichier) Return CommonExecLivrableContrat objects filtered by the nom_fichier column
 * @method array findByStatut(string $statut) Return CommonExecLivrableContrat objects filtered by the statut column
 * @method array findByCommentaire(string $commentaire) Return CommonExecLivrableContrat objects filtered by the commentaire column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecLivrableContratQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecLivrableContratQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecLivrableContrat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecLivrableContratQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecLivrableContratQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecLivrableContratQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecLivrableContratQuery) {
            return $criteria;
        }
        $query = new CommonExecLivrableContratQuery();
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
     * @return   CommonExecLivrableContrat|CommonExecLivrableContrat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecLivrableContratPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecLivrableContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecLivrableContrat A model object, or null if the key is not found
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
     * @return                 CommonExecLivrableContrat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_contrat`, `id_phase`, `libelle`, `taille`, `id_agent_crea`, `date_creat`, `id_agent_modif`, `date_modif`, `id_blob`, `nom_fichier`, `statut`, `commentaire` FROM `exec_livrable_contrat` WHERE `id` = :p0';
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
            $obj = new CommonExecLivrableContrat();
            $obj->hydrate($row);
            CommonExecLivrableContratPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecLivrableContrat|CommonExecLivrableContrat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecLivrableContrat[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecLivrableContratPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecLivrableContratPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContrat(1234); // WHERE id_contrat = 1234
     * $query->filterByIdContrat(array(12, 34)); // WHERE id_contrat IN (12, 34)
     * $query->filterByIdContrat(array('min' => 12)); // WHERE id_contrat >= 12
     * $query->filterByIdContrat(array('max' => 12)); // WHERE id_contrat <= 12
     * </code>
     *
     * @see       filterByCommonExecContrat()
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the id_phase column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPhase(1234); // WHERE id_phase = 1234
     * $query->filterByIdPhase(array(12, 34)); // WHERE id_phase IN (12, 34)
     * $query->filterByIdPhase(array('min' => 12)); // WHERE id_phase >= 12
     * $query->filterByIdPhase(array('max' => 12)); // WHERE id_phase <= 12
     * </code>
     *
     * @param     mixed $idPhase The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByIdPhase($idPhase = null, $comparison = null)
    {
        if (is_array($idPhase)) {
            $useMinMax = false;
            if (isset($idPhase['min'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID_PHASE, $idPhase['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPhase['max'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID_PHASE, $idPhase['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::ID_PHASE, $idPhase, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the taille column
     *
     * Example usage:
     * <code>
     * $query->filterByTaille('fooValue');   // WHERE taille = 'fooValue'
     * $query->filterByTaille('%fooValue%'); // WHERE taille LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taille)) {
                $taille = str_replace('*', '%', $taille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::TAILLE, $taille, $comparison);
    }

    /**
     * Filter the query on the id_agent_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCrea(1234); // WHERE id_agent_crea = 1234
     * $query->filterByIdAgentCrea(array(12, 34)); // WHERE id_agent_crea IN (12, 34)
     * $query->filterByIdAgentCrea(array('min' => 12)); // WHERE id_agent_crea >= 12
     * $query->filterByIdAgentCrea(array('max' => 12)); // WHERE id_agent_crea <= 12
     * </code>
     *
     * @see       filterByCommonAgent()
     *
     * @param     mixed $idAgentCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
    }

    /**
     * Filter the query on the date_creat column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreat('2011-03-14'); // WHERE date_creat = '2011-03-14'
     * $query->filterByDateCreat('now'); // WHERE date_creat = '2011-03-14'
     * $query->filterByDateCreat(array('max' => 'yesterday')); // WHERE date_creat > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreat The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByDateCreat($dateCreat = null, $comparison = null)
    {
        if (is_array($dateCreat)) {
            $useMinMax = false;
            if (isset($dateCreat['min'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::DATE_CREAT, $dateCreat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreat['max'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::DATE_CREAT, $dateCreat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::DATE_CREAT, $dateCreat, $comparison);
    }

    /**
     * Filter the query on the id_agent_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentModif(1234); // WHERE id_agent_modif = 1234
     * $query->filterByIdAgentModif(array(12, 34)); // WHERE id_agent_modif IN (12, 34)
     * $query->filterByIdAgentModif(array('min' => 12)); // WHERE id_agent_modif >= 12
     * $query->filterByIdAgentModif(array('max' => 12)); // WHERE id_agent_modif <= 12
     * </code>
     *
     * @param     mixed $idAgentModif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
    }

    /**
     * Filter the query on the date_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModif(1234); // WHERE date_modif = 1234
     * $query->filterByDateModif(array(12, 34)); // WHERE date_modif IN (12, 34)
     * $query->filterByDateModif(array('min' => 12)); // WHERE date_modif >= 12
     * $query->filterByDateModif(array('max' => 12)); // WHERE date_modif <= 12
     * </code>
     *
     * @param     mixed $dateModif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::DATE_MODIF, $dateModif, $comparison);
    }

    /**
     * Filter the query on the id_blob column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlob(1234); // WHERE id_blob = 1234
     * $query->filterByIdBlob(array(12, 34)); // WHERE id_blob IN (12, 34)
     * $query->filterByIdBlob(array('min' => 12)); // WHERE id_blob >= 12
     * $query->filterByIdBlob(array('max' => 12)); // WHERE id_blob <= 12
     * </code>
     *
     * @param     mixed $idBlob The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonExecLivrableContratPeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE statut = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE statut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut)) {
                $statut = str_replace('*', '%', $statut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecLivrableContratPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecLivrableContratPeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query by a related CommonAgent object
     *
     * @param   CommonAgent|PropelObjectCollection $commonAgent The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecLivrableContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgent($commonAgent, $comparison = null)
    {
        if ($commonAgent instanceof CommonAgent) {
            return $this
                ->addUsingAlias(CommonExecLivrableContratPeer::ID_AGENT_CREA, $commonAgent->getId(), $comparison);
        } elseif ($commonAgent instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecLivrableContratPeer::ID_AGENT_CREA, $commonAgent->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonAgent() only accepts arguments of type CommonAgent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgent relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function joinCommonAgent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgent');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonAgent');
        }

        return $this;
    }

    /**
     * Use the CommonAgent relation CommonAgent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonAgent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgent', 'CommonAgentQuery');
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecLivrableContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecLivrableContratPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecLivrableContratPeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecContrat() only accepts arguments of type CommonExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function joinCommonExecContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContrat');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecContrat relation CommonExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContrat', 'CommonExecContratQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecLivrableContrat $commonExecLivrableContrat Object to remove from the list of results
     *
     * @return CommonExecLivrableContratQuery The current query, for fluid interface
     */
    public function prune($commonExecLivrableContrat = null)
    {
        if ($commonExecLivrableContrat) {
            $this->addUsingAlias(CommonExecLivrableContratPeer::ID, $commonExecLivrableContrat->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
