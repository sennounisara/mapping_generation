<?php


/**
 * Base class that represents a query for the 'pieces_complement' table.
 *
 * 
 *
 * @method CommonPiecesComplementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonPiecesComplementQuery orderByIdDemandeComplement($order = Criteria::ASC) Order by the id_demande_complement column
 * @method CommonPiecesComplementQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonPiecesComplementQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonPiecesComplementQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonPiecesComplementQuery orderByType($order = Criteria::ASC) Order by the type column
 *
 * @method CommonPiecesComplementQuery groupById() Group by the id column
 * @method CommonPiecesComplementQuery groupByIdDemandeComplement() Group by the id_demande_complement column
 * @method CommonPiecesComplementQuery groupByLibelle() Group by the libelle column
 * @method CommonPiecesComplementQuery groupByTaille() Group by the taille column
 * @method CommonPiecesComplementQuery groupByIdBlob() Group by the id_blob column
 * @method CommonPiecesComplementQuery groupByType() Group by the type column
 *
 * @method CommonPiecesComplementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonPiecesComplementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonPiecesComplementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonPiecesComplement findOne(PropelPDO $con = null) Return the first CommonPiecesComplement matching the query
 * @method CommonPiecesComplement findOneOrCreate(PropelPDO $con = null) Return the first CommonPiecesComplement matching the query, or a new CommonPiecesComplement object populated from the query conditions when no match is found
 *
 * @method CommonPiecesComplement findOneByIdDemandeComplement(int $id_demande_complement) Return the first CommonPiecesComplement filtered by the id_demande_complement column
 * @method CommonPiecesComplement findOneByLibelle(string $libelle) Return the first CommonPiecesComplement filtered by the libelle column
 * @method CommonPiecesComplement findOneByTaille(string $taille) Return the first CommonPiecesComplement filtered by the taille column
 * @method CommonPiecesComplement findOneByIdBlob(int $id_blob) Return the first CommonPiecesComplement filtered by the id_blob column
 * @method CommonPiecesComplement findOneByType(string $type) Return the first CommonPiecesComplement filtered by the type column
 *
 * @method array findById(int $id) Return CommonPiecesComplement objects filtered by the id column
 * @method array findByIdDemandeComplement(int $id_demande_complement) Return CommonPiecesComplement objects filtered by the id_demande_complement column
 * @method array findByLibelle(string $libelle) Return CommonPiecesComplement objects filtered by the libelle column
 * @method array findByTaille(string $taille) Return CommonPiecesComplement objects filtered by the taille column
 * @method array findByIdBlob(int $id_blob) Return CommonPiecesComplement objects filtered by the id_blob column
 * @method array findByType(string $type) Return CommonPiecesComplement objects filtered by the type column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPiecesComplementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonPiecesComplementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonPiecesComplement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonPiecesComplementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonPiecesComplementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonPiecesComplementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonPiecesComplementQuery) {
            return $criteria;
        }
        $query = new CommonPiecesComplementQuery();
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
     * @return   CommonPiecesComplement|CommonPiecesComplement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonPiecesComplementPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesComplementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPiecesComplement A model object, or null if the key is not found
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
     * @return                 CommonPiecesComplement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_demande_complement`, `libelle`, `taille`, `id_blob`, `type` FROM `pieces_complement` WHERE `id` = :p0';
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
            $obj = new CommonPiecesComplement();
            $obj->hydrate($row);
            CommonPiecesComplementPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonPiecesComplement|CommonPiecesComplement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonPiecesComplement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonPiecesComplementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonPiecesComplementPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonPiecesComplementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonPiecesComplementPeer::ID, $keys, Criteria::IN);
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
     * @return CommonPiecesComplementQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonPiecesComplementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonPiecesComplementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesComplementPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_demande_complement column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemandeComplement(1234); // WHERE id_demande_complement = 1234
     * $query->filterByIdDemandeComplement(array(12, 34)); // WHERE id_demande_complement IN (12, 34)
     * $query->filterByIdDemandeComplement(array('min' => 12)); // WHERE id_demande_complement >= 12
     * $query->filterByIdDemandeComplement(array('max' => 12)); // WHERE id_demande_complement <= 12
     * </code>
     *
     * @param     mixed $idDemandeComplement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesComplementQuery The current query, for fluid interface
     */
    public function filterByIdDemandeComplement($idDemandeComplement = null, $comparison = null)
    {
        if (is_array($idDemandeComplement)) {
            $useMinMax = false;
            if (isset($idDemandeComplement['min'])) {
                $this->addUsingAlias(CommonPiecesComplementPeer::ID_DEMANDE_COMPLEMENT, $idDemandeComplement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemandeComplement['max'])) {
                $this->addUsingAlias(CommonPiecesComplementPeer::ID_DEMANDE_COMPLEMENT, $idDemandeComplement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesComplementPeer::ID_DEMANDE_COMPLEMENT, $idDemandeComplement, $comparison);
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
     * @return CommonPiecesComplementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonPiecesComplementPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonPiecesComplementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonPiecesComplementPeer::TAILLE, $taille, $comparison);
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
     * @return CommonPiecesComplementQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonPiecesComplementPeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonPiecesComplementPeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesComplementPeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesComplementQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPiecesComplementPeer::TYPE, $type, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonPiecesComplement $commonPiecesComplement Object to remove from the list of results
     *
     * @return CommonPiecesComplementQuery The current query, for fluid interface
     */
    public function prune($commonPiecesComplement = null)
    {
        if ($commonPiecesComplement) {
            $this->addUsingAlias(CommonPiecesComplementPeer::ID, $commonPiecesComplement->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
