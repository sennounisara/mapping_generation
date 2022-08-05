<?php


/**
 * Base class that represents a query for the 'exec_piece_avenant' table.
 *
 * 
 *
 * @method CommonExecPieceAvenantQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecPieceAvenantQuery orderByIdAvenant($order = Criteria::ASC) Order by the id_avenant column
 * @method CommonExecPieceAvenantQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecPieceAvenantQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecPieceAvenantQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonExecPieceAvenantQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecPieceAvenantQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecPieceAvenantQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 *
 * @method CommonExecPieceAvenantQuery groupById() Group by the id column
 * @method CommonExecPieceAvenantQuery groupByIdAvenant() Group by the id_avenant column
 * @method CommonExecPieceAvenantQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecPieceAvenantQuery groupByLibelle() Group by the libelle column
 * @method CommonExecPieceAvenantQuery groupByTaille() Group by the taille column
 * @method CommonExecPieceAvenantQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecPieceAvenantQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecPieceAvenantQuery groupByIdBlob() Group by the id_blob column
 *
 * @method CommonExecPieceAvenantQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecPieceAvenantQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecPieceAvenantQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecPieceAvenantQuery leftJoinCommonAgent($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgent relation
 * @method CommonExecPieceAvenantQuery rightJoinCommonAgent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgent relation
 * @method CommonExecPieceAvenantQuery innerJoinCommonAgent($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgent relation
 *
 * @method CommonExecPieceAvenantQuery leftJoinCommonExecAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecAvenant relation
 * @method CommonExecPieceAvenantQuery rightJoinCommonExecAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecAvenant relation
 * @method CommonExecPieceAvenantQuery innerJoinCommonExecAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecAvenant relation
 *
 * @method CommonExecPieceAvenantQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecPieceAvenantQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecPieceAvenantQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecPieceAvenant findOne(PropelPDO $con = null) Return the first CommonExecPieceAvenant matching the query
 * @method CommonExecPieceAvenant findOneOrCreate(PropelPDO $con = null) Return the first CommonExecPieceAvenant matching the query, or a new CommonExecPieceAvenant object populated from the query conditions when no match is found
 *
 * @method CommonExecPieceAvenant findOneByIdAvenant(int $id_avenant) Return the first CommonExecPieceAvenant filtered by the id_avenant column
 * @method CommonExecPieceAvenant findOneByIdContrat(int $id_contrat) Return the first CommonExecPieceAvenant filtered by the id_contrat column
 * @method CommonExecPieceAvenant findOneByLibelle(string $libelle) Return the first CommonExecPieceAvenant filtered by the libelle column
 * @method CommonExecPieceAvenant findOneByTaille(string $taille) Return the first CommonExecPieceAvenant filtered by the taille column
 * @method CommonExecPieceAvenant findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecPieceAvenant filtered by the id_agent_crea column
 * @method CommonExecPieceAvenant findOneByDateCrea(string $date_crea) Return the first CommonExecPieceAvenant filtered by the date_crea column
 * @method CommonExecPieceAvenant findOneByIdBlob(int $id_blob) Return the first CommonExecPieceAvenant filtered by the id_blob column
 *
 * @method array findById(int $id) Return CommonExecPieceAvenant objects filtered by the id column
 * @method array findByIdAvenant(int $id_avenant) Return CommonExecPieceAvenant objects filtered by the id_avenant column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecPieceAvenant objects filtered by the id_contrat column
 * @method array findByLibelle(string $libelle) Return CommonExecPieceAvenant objects filtered by the libelle column
 * @method array findByTaille(string $taille) Return CommonExecPieceAvenant objects filtered by the taille column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecPieceAvenant objects filtered by the id_agent_crea column
 * @method array findByDateCrea(string $date_crea) Return CommonExecPieceAvenant objects filtered by the date_crea column
 * @method array findByIdBlob(int $id_blob) Return CommonExecPieceAvenant objects filtered by the id_blob column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecPieceAvenantQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecPieceAvenantQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecPieceAvenant', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecPieceAvenantQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecPieceAvenantQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecPieceAvenantQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecPieceAvenantQuery) {
            return $criteria;
        }
        $query = new CommonExecPieceAvenantQuery();
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
     * @return   CommonExecPieceAvenant|CommonExecPieceAvenant[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecPieceAvenantPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPieceAvenant A model object, or null if the key is not found
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
     * @return                 CommonExecPieceAvenant A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_avenant`, `id_contrat`, `libelle`, `taille`, `id_agent_crea`, `date_crea`, `id_blob` FROM `exec_piece_avenant` WHERE `id` = :p0';
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
            $obj = new CommonExecPieceAvenant();
            $obj->hydrate($row);
            CommonExecPieceAvenantPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecPieceAvenant|CommonExecPieceAvenant[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecPieceAvenant[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecPieceAvenantPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecPieceAvenantPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceAvenantPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_avenant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAvenant(1234); // WHERE id_avenant = 1234
     * $query->filterByIdAvenant(array(12, 34)); // WHERE id_avenant IN (12, 34)
     * $query->filterByIdAvenant(array('min' => 12)); // WHERE id_avenant >= 12
     * $query->filterByIdAvenant(array('max' => 12)); // WHERE id_avenant <= 12
     * </code>
     *
     * @see       filterByCommonExecAvenant()
     *
     * @param     mixed $idAvenant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
     */
    public function filterByIdAvenant($idAvenant = null, $comparison = null)
    {
        if (is_array($idAvenant)) {
            $useMinMax = false;
            if (isset($idAvenant['min'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_AVENANT, $idAvenant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAvenant['max'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_AVENANT, $idAvenant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_AVENANT, $idAvenant, $comparison);
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
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_CONTRAT, $idContrat, $comparison);
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
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecPieceAvenantPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecPieceAvenantPeer::TAILLE, $taille, $comparison);
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
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
    }

    /**
     * Filter the query on the date_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCrea('2011-03-14'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea('now'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea(array('max' => 'yesterday')); // WHERE date_crea > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCrea The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceAvenantPeer::DATE_CREA, $dateCrea, $comparison);
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
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceAvenantPeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query by a related CommonAgent object
     *
     * @param   CommonAgent|PropelObjectCollection $commonAgent The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPieceAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgent($commonAgent, $comparison = null)
    {
        if ($commonAgent instanceof CommonAgent) {
            return $this
                ->addUsingAlias(CommonExecPieceAvenantPeer::ID_AGENT_CREA, $commonAgent->getId(), $comparison);
        } elseif ($commonAgent instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPieceAvenantPeer::ID_AGENT_CREA, $commonAgent->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
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
     * Filter the query by a related CommonExecAvenant object
     *
     * @param   CommonExecAvenant|PropelObjectCollection $commonExecAvenant The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPieceAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecAvenant($commonExecAvenant, $comparison = null)
    {
        if ($commonExecAvenant instanceof CommonExecAvenant) {
            return $this
                ->addUsingAlias(CommonExecPieceAvenantPeer::ID_AVENANT, $commonExecAvenant->getId(), $comparison);
        } elseif ($commonExecAvenant instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPieceAvenantPeer::ID_AVENANT, $commonExecAvenant->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecAvenant() only accepts arguments of type CommonExecAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
     */
    public function joinCommonExecAvenant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecAvenant');

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
            $this->addJoinObject($join, 'CommonExecAvenant');
        }

        return $this;
    }

    /**
     * Use the CommonExecAvenant relation CommonExecAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecAvenantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecAvenant', 'CommonExecAvenantQuery');
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPieceAvenantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecPieceAvenantPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPieceAvenantPeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
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
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
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
     * @param   CommonExecPieceAvenant $commonExecPieceAvenant Object to remove from the list of results
     *
     * @return CommonExecPieceAvenantQuery The current query, for fluid interface
     */
    public function prune($commonExecPieceAvenant = null)
    {
        if ($commonExecPieceAvenant) {
            $this->addUsingAlias(CommonExecPieceAvenantPeer::ID, $commonExecPieceAvenant->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
