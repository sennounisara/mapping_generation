<?php


/**
 * Base class that represents a query for the 'exec_piece_contrat' table.
 *
 * 
 *
 * @method CommonExecPieceContratQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecPieceContratQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecPieceContratQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecPieceContratQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecPieceContratQuery orderByDateCreat($order = Criteria::ASC) Order by the date_creat column
 * @method CommonExecPieceContratQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 * @method CommonExecPieceContratQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method CommonExecPieceContratQuery orderByAttached($order = Criteria::ASC) Order by the attached column
 * @method CommonExecPieceContratQuery orderByOriginal($order = Criteria::ASC) Order by the original column
 *
 * @method CommonExecPieceContratQuery groupById() Group by the id column
 * @method CommonExecPieceContratQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecPieceContratQuery groupByLibelle() Group by the libelle column
 * @method CommonExecPieceContratQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecPieceContratQuery groupByDateCreat() Group by the date_creat column
 * @method CommonExecPieceContratQuery groupByIdAgentModif() Group by the id_agent_modif column
 * @method CommonExecPieceContratQuery groupByDateModif() Group by the date_modif column
 * @method CommonExecPieceContratQuery groupByAttached() Group by the attached column
 * @method CommonExecPieceContratQuery groupByOriginal() Group by the original column
 *
 * @method CommonExecPieceContratQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecPieceContratQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecPieceContratQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecPieceContratQuery leftJoinCommonAgent($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgent relation
 * @method CommonExecPieceContratQuery rightJoinCommonAgent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgent relation
 * @method CommonExecPieceContratQuery innerJoinCommonAgent($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgent relation
 *
 * @method CommonExecPieceContratQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecPieceContratQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecPieceContratQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecPieceContrat findOne(PropelPDO $con = null) Return the first CommonExecPieceContrat matching the query
 * @method CommonExecPieceContrat findOneOrCreate(PropelPDO $con = null) Return the first CommonExecPieceContrat matching the query, or a new CommonExecPieceContrat object populated from the query conditions when no match is found
 *
 * @method CommonExecPieceContrat findOneByIdContrat(int $id_contrat) Return the first CommonExecPieceContrat filtered by the id_contrat column
 * @method CommonExecPieceContrat findOneByLibelle(string $libelle) Return the first CommonExecPieceContrat filtered by the libelle column
 * @method CommonExecPieceContrat findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecPieceContrat filtered by the id_agent_crea column
 * @method CommonExecPieceContrat findOneByDateCreat(string $date_creat) Return the first CommonExecPieceContrat filtered by the date_creat column
 * @method CommonExecPieceContrat findOneByIdAgentModif(int $id_agent_modif) Return the first CommonExecPieceContrat filtered by the id_agent_modif column
 * @method CommonExecPieceContrat findOneByDateModif(int $date_modif) Return the first CommonExecPieceContrat filtered by the date_modif column
 * @method CommonExecPieceContrat findOneByAttached(string $attached) Return the first CommonExecPieceContrat filtered by the attached column
 * @method CommonExecPieceContrat findOneByOriginal(string $original) Return the first CommonExecPieceContrat filtered by the original column
 *
 * @method array findById(int $id) Return CommonExecPieceContrat objects filtered by the id column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecPieceContrat objects filtered by the id_contrat column
 * @method array findByLibelle(string $libelle) Return CommonExecPieceContrat objects filtered by the libelle column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecPieceContrat objects filtered by the id_agent_crea column
 * @method array findByDateCreat(string $date_creat) Return CommonExecPieceContrat objects filtered by the date_creat column
 * @method array findByIdAgentModif(int $id_agent_modif) Return CommonExecPieceContrat objects filtered by the id_agent_modif column
 * @method array findByDateModif(int $date_modif) Return CommonExecPieceContrat objects filtered by the date_modif column
 * @method array findByAttached(string $attached) Return CommonExecPieceContrat objects filtered by the attached column
 * @method array findByOriginal(string $original) Return CommonExecPieceContrat objects filtered by the original column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecPieceContratQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecPieceContratQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecPieceContrat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecPieceContratQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecPieceContratQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecPieceContratQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecPieceContratQuery) {
            return $criteria;
        }
        $query = new CommonExecPieceContratQuery();
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
     * @return   CommonExecPieceContrat|CommonExecPieceContrat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecPieceContratPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPieceContrat A model object, or null if the key is not found
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
     * @return                 CommonExecPieceContrat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_contrat`, `libelle`, `id_agent_crea`, `date_creat`, `id_agent_modif`, `date_modif`, `attached`, `original` FROM `exec_piece_contrat` WHERE `id` = :p0';
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
            $obj = new CommonExecPieceContrat();
            $obj->hydrate($row);
            CommonExecPieceContratPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecPieceContrat|CommonExecPieceContrat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecPieceContrat[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecPieceContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecPieceContratPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecPieceContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecPieceContratPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecPieceContratQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceContratPeer::ID, $id, $comparison);
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
     * @return CommonExecPieceContratQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceContratPeer::ID_CONTRAT, $idContrat, $comparison);
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
     * @return CommonExecPieceContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecPieceContratPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonExecPieceContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceContratPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
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
     * @return CommonExecPieceContratQuery The current query, for fluid interface
     */
    public function filterByDateCreat($dateCreat = null, $comparison = null)
    {
        if (is_array($dateCreat)) {
            $useMinMax = false;
            if (isset($dateCreat['min'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::DATE_CREAT, $dateCreat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreat['max'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::DATE_CREAT, $dateCreat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceContratPeer::DATE_CREAT, $dateCreat, $comparison);
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
     * @return CommonExecPieceContratQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceContratPeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
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
     * @return CommonExecPieceContratQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonExecPieceContratPeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceContratPeer::DATE_MODIF, $dateModif, $comparison);
    }

    /**
     * Filter the query on the attached column
     *
     * Example usage:
     * <code>
     * $query->filterByAttached('fooValue');   // WHERE attached = 'fooValue'
     * $query->filterByAttached('%fooValue%'); // WHERE attached LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attached The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceContratQuery The current query, for fluid interface
     */
    public function filterByAttached($attached = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attached)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $attached)) {
                $attached = str_replace('*', '%', $attached);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPieceContratPeer::ATTACHED, $attached, $comparison);
    }

    /**
     * Filter the query on the original column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginal('fooValue');   // WHERE original = 'fooValue'
     * $query->filterByOriginal('%fooValue%'); // WHERE original LIKE '%fooValue%'
     * </code>
     *
     * @param     string $original The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceContratQuery The current query, for fluid interface
     */
    public function filterByOriginal($original = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($original)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $original)) {
                $original = str_replace('*', '%', $original);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPieceContratPeer::ORIGINAL, $original, $comparison);
    }

    /**
     * Filter the query by a related CommonAgent object
     *
     * @param   CommonAgent|PropelObjectCollection $commonAgent The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPieceContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgent($commonAgent, $comparison = null)
    {
        if ($commonAgent instanceof CommonAgent) {
            return $this
                ->addUsingAlias(CommonExecPieceContratPeer::ID_AGENT_CREA, $commonAgent->getId(), $comparison);
        } elseif ($commonAgent instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPieceContratPeer::ID_AGENT_CREA, $commonAgent->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return CommonExecPieceContratQuery The current query, for fluid interface
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
     * @return                 CommonExecPieceContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecPieceContratPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPieceContratPeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
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
     * @return CommonExecPieceContratQuery The current query, for fluid interface
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
     * @param   CommonExecPieceContrat $commonExecPieceContrat Object to remove from the list of results
     *
     * @return CommonExecPieceContratQuery The current query, for fluid interface
     */
    public function prune($commonExecPieceContrat = null)
    {
        if ($commonExecPieceContrat) {
            $this->addUsingAlias(CommonExecPieceContratPeer::ID, $commonExecPieceContrat->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
