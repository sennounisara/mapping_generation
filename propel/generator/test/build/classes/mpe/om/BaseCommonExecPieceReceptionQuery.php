<?php


/**
 * Base class that represents a query for the 'exec_piece_reception' table.
 *
 * 
 *
 * @method CommonExecPieceReceptionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecPieceReceptionQuery orderByIdReception($order = Criteria::ASC) Order by the id_reception column
 * @method CommonExecPieceReceptionQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecPieceReceptionQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecPieceReceptionQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonExecPieceReceptionQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecPieceReceptionQuery orderByDateCreat($order = Criteria::ASC) Order by the date_creat column
 * @method CommonExecPieceReceptionQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonExecPieceReceptionQuery orderByDepuisParaph($order = Criteria::ASC) Order by the depuis_paraph column
 * @method CommonExecPieceReceptionQuery orderByAccesFournisseur($order = Criteria::ASC) Order by the acces_fournisseur column
 *
 * @method CommonExecPieceReceptionQuery groupById() Group by the id column
 * @method CommonExecPieceReceptionQuery groupByIdReception() Group by the id_reception column
 * @method CommonExecPieceReceptionQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecPieceReceptionQuery groupByLibelle() Group by the libelle column
 * @method CommonExecPieceReceptionQuery groupByTaille() Group by the taille column
 * @method CommonExecPieceReceptionQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecPieceReceptionQuery groupByDateCreat() Group by the date_creat column
 * @method CommonExecPieceReceptionQuery groupByIdBlob() Group by the id_blob column
 * @method CommonExecPieceReceptionQuery groupByDepuisParaph() Group by the depuis_paraph column
 * @method CommonExecPieceReceptionQuery groupByAccesFournisseur() Group by the acces_fournisseur column
 *
 * @method CommonExecPieceReceptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecPieceReceptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecPieceReceptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecPieceReception findOne(PropelPDO $con = null) Return the first CommonExecPieceReception matching the query
 * @method CommonExecPieceReception findOneOrCreate(PropelPDO $con = null) Return the first CommonExecPieceReception matching the query, or a new CommonExecPieceReception object populated from the query conditions when no match is found
 *
 * @method CommonExecPieceReception findOneByIdReception(int $id_reception) Return the first CommonExecPieceReception filtered by the id_reception column
 * @method CommonExecPieceReception findOneByIdContrat(int $id_contrat) Return the first CommonExecPieceReception filtered by the id_contrat column
 * @method CommonExecPieceReception findOneByLibelle(string $libelle) Return the first CommonExecPieceReception filtered by the libelle column
 * @method CommonExecPieceReception findOneByTaille(string $taille) Return the first CommonExecPieceReception filtered by the taille column
 * @method CommonExecPieceReception findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecPieceReception filtered by the id_agent_crea column
 * @method CommonExecPieceReception findOneByDateCreat(string $date_creat) Return the first CommonExecPieceReception filtered by the date_creat column
 * @method CommonExecPieceReception findOneByIdBlob(int $id_blob) Return the first CommonExecPieceReception filtered by the id_blob column
 * @method CommonExecPieceReception findOneByDepuisParaph(string $depuis_paraph) Return the first CommonExecPieceReception filtered by the depuis_paraph column
 * @method CommonExecPieceReception findOneByAccesFournisseur(string $acces_fournisseur) Return the first CommonExecPieceReception filtered by the acces_fournisseur column
 *
 * @method array findById(int $id) Return CommonExecPieceReception objects filtered by the id column
 * @method array findByIdReception(int $id_reception) Return CommonExecPieceReception objects filtered by the id_reception column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecPieceReception objects filtered by the id_contrat column
 * @method array findByLibelle(string $libelle) Return CommonExecPieceReception objects filtered by the libelle column
 * @method array findByTaille(string $taille) Return CommonExecPieceReception objects filtered by the taille column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecPieceReception objects filtered by the id_agent_crea column
 * @method array findByDateCreat(string $date_creat) Return CommonExecPieceReception objects filtered by the date_creat column
 * @method array findByIdBlob(int $id_blob) Return CommonExecPieceReception objects filtered by the id_blob column
 * @method array findByDepuisParaph(string $depuis_paraph) Return CommonExecPieceReception objects filtered by the depuis_paraph column
 * @method array findByAccesFournisseur(string $acces_fournisseur) Return CommonExecPieceReception objects filtered by the acces_fournisseur column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecPieceReceptionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecPieceReceptionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecPieceReception', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecPieceReceptionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecPieceReceptionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecPieceReceptionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecPieceReceptionQuery) {
            return $criteria;
        }
        $query = new CommonExecPieceReceptionQuery();
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
     * @return   CommonExecPieceReception|CommonExecPieceReception[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecPieceReceptionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceReceptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPieceReception A model object, or null if the key is not found
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
     * @return                 CommonExecPieceReception A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_reception`, `id_contrat`, `libelle`, `taille`, `id_agent_crea`, `date_creat`, `id_blob`, `depuis_paraph`, `acces_fournisseur` FROM `exec_piece_reception` WHERE `id` = :p0';
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
            $obj = new CommonExecPieceReception();
            $obj->hydrate($row);
            CommonExecPieceReceptionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecPieceReception|CommonExecPieceReception[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecPieceReception[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByIdReception(1234); // WHERE id_reception = 1234
     * $query->filterByIdReception(array(12, 34)); // WHERE id_reception IN (12, 34)
     * $query->filterByIdReception(array('min' => 12)); // WHERE id_reception >= 12
     * $query->filterByIdReception(array('max' => 12)); // WHERE id_reception <= 12
     * </code>
     *
     * @param     mixed $idReception The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
     */
    public function filterByIdReception($idReception = null, $comparison = null)
    {
        if (is_array($idReception)) {
            $useMinMax = false;
            if (isset($idReception['min'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_RECEPTION, $idReception['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReception['max'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_RECEPTION, $idReception['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_RECEPTION, $idReception, $comparison);
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
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_CONTRAT, $idContrat, $comparison);
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
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::TAILLE, $taille, $comparison);
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
     * @param     mixed $idAgentCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
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
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
     */
    public function filterByDateCreat($dateCreat = null, $comparison = null)
    {
        if (is_array($dateCreat)) {
            $useMinMax = false;
            if (isset($dateCreat['min'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::DATE_CREAT, $dateCreat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreat['max'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::DATE_CREAT, $dateCreat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::DATE_CREAT, $dateCreat, $comparison);
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
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the depuis_paraph column
     *
     * Example usage:
     * <code>
     * $query->filterByDepuisParaph('fooValue');   // WHERE depuis_paraph = 'fooValue'
     * $query->filterByDepuisParaph('%fooValue%'); // WHERE depuis_paraph LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depuisParaph The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
     */
    public function filterByDepuisParaph($depuisParaph = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depuisParaph)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depuisParaph)) {
                $depuisParaph = str_replace('*', '%', $depuisParaph);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::DEPUIS_PARAPH, $depuisParaph, $comparison);
    }

    /**
     * Filter the query on the acces_fournisseur column
     *
     * Example usage:
     * <code>
     * $query->filterByAccesFournisseur('fooValue');   // WHERE acces_fournisseur = 'fooValue'
     * $query->filterByAccesFournisseur('%fooValue%'); // WHERE acces_fournisseur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $accesFournisseur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
     */
    public function filterByAccesFournisseur($accesFournisseur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($accesFournisseur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $accesFournisseur)) {
                $accesFournisseur = str_replace('*', '%', $accesFournisseur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPieceReceptionPeer::ACCES_FOURNISSEUR, $accesFournisseur, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecPieceReception $commonExecPieceReception Object to remove from the list of results
     *
     * @return CommonExecPieceReceptionQuery The current query, for fluid interface
     */
    public function prune($commonExecPieceReception = null)
    {
        if ($commonExecPieceReception) {
            $this->addUsingAlias(CommonExecPieceReceptionPeer::ID, $commonExecPieceReception->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
