<?php


/**
 * Base class that represents a query for the 'exec_piece_type_contrat' table.
 *
 * 
 *
 * @method CommonExecPieceTypeContratQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecPieceTypeContratQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 * @method CommonExecPieceTypeContratQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecPieceTypeContratQuery orderByIdTypeContrat($order = Criteria::ASC) Order by the id_type_contrat column
 * @method CommonExecPieceTypeContratQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 *
 * @method CommonExecPieceTypeContratQuery groupById() Group by the id column
 * @method CommonExecPieceTypeContratQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 * @method CommonExecPieceTypeContratQuery groupByLibelle() Group by the libelle column
 * @method CommonExecPieceTypeContratQuery groupByIdTypeContrat() Group by the id_type_contrat column
 * @method CommonExecPieceTypeContratQuery groupByOrganisme() Group by the organisme column
 *
 * @method CommonExecPieceTypeContratQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecPieceTypeContratQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecPieceTypeContratQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecPieceTypeContrat findOne(PropelPDO $con = null) Return the first CommonExecPieceTypeContrat matching the query
 * @method CommonExecPieceTypeContrat findOneOrCreate(PropelPDO $con = null) Return the first CommonExecPieceTypeContrat matching the query, or a new CommonExecPieceTypeContrat object populated from the query conditions when no match is found
 *
 * @method CommonExecPieceTypeContrat findOneByIdTypeProcedure(int $id_type_procedure) Return the first CommonExecPieceTypeContrat filtered by the id_type_procedure column
 * @method CommonExecPieceTypeContrat findOneByLibelle(string $libelle) Return the first CommonExecPieceTypeContrat filtered by the libelle column
 * @method CommonExecPieceTypeContrat findOneByIdTypeContrat(int $id_type_contrat) Return the first CommonExecPieceTypeContrat filtered by the id_type_contrat column
 * @method CommonExecPieceTypeContrat findOneByOrganisme(string $organisme) Return the first CommonExecPieceTypeContrat filtered by the organisme column
 *
 * @method array findById(int $id) Return CommonExecPieceTypeContrat objects filtered by the id column
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonExecPieceTypeContrat objects filtered by the id_type_procedure column
 * @method array findByLibelle(string $libelle) Return CommonExecPieceTypeContrat objects filtered by the libelle column
 * @method array findByIdTypeContrat(int $id_type_contrat) Return CommonExecPieceTypeContrat objects filtered by the id_type_contrat column
 * @method array findByOrganisme(string $organisme) Return CommonExecPieceTypeContrat objects filtered by the organisme column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecPieceTypeContratQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecPieceTypeContratQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecPieceTypeContrat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecPieceTypeContratQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecPieceTypeContratQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecPieceTypeContratQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecPieceTypeContratQuery) {
            return $criteria;
        }
        $query = new CommonExecPieceTypeContratQuery();
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
     * @return   CommonExecPieceTypeContrat|CommonExecPieceTypeContrat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecPieceTypeContratPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPieceTypeContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPieceTypeContrat A model object, or null if the key is not found
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
     * @return                 CommonExecPieceTypeContrat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_type_procedure`, `libelle`, `id_type_contrat`, `organisme` FROM `exec_piece_type_contrat` WHERE `id` = :p0';
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
            $obj = new CommonExecPieceTypeContrat();
            $obj->hydrate($row);
            CommonExecPieceTypeContratPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecPieceTypeContrat|CommonExecPieceTypeContrat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecPieceTypeContrat[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecPieceTypeContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecPieceTypeContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecPieceTypeContratQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedure(1234); // WHERE id_type_procedure = 1234
     * $query->filterByIdTypeProcedure(array(12, 34)); // WHERE id_type_procedure IN (12, 34)
     * $query->filterByIdTypeProcedure(array('min' => 12)); // WHERE id_type_procedure >= 12
     * $query->filterByIdTypeProcedure(array('max' => 12)); // WHERE id_type_procedure <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceTypeContratQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
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
     * @return CommonExecPieceTypeContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecPieceTypeContratPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the id_type_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeContrat(1234); // WHERE id_type_contrat = 1234
     * $query->filterByIdTypeContrat(array(12, 34)); // WHERE id_type_contrat IN (12, 34)
     * $query->filterByIdTypeContrat(array('min' => 12)); // WHERE id_type_contrat >= 12
     * $query->filterByIdTypeContrat(array('max' => 12)); // WHERE id_type_contrat <= 12
     * </code>
     *
     * @param     mixed $idTypeContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceTypeContratQuery The current query, for fluid interface
     */
    public function filterByIdTypeContrat($idTypeContrat = null, $comparison = null)
    {
        if (is_array($idTypeContrat)) {
            $useMinMax = false;
            if (isset($idTypeContrat['min'])) {
                $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID_TYPE_CONTRAT, $idTypeContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeContrat['max'])) {
                $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID_TYPE_CONTRAT, $idTypeContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID_TYPE_CONTRAT, $idTypeContrat, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceTypeContratQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPieceTypeContratPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecPieceTypeContrat $commonExecPieceTypeContrat Object to remove from the list of results
     *
     * @return CommonExecPieceTypeContratQuery The current query, for fluid interface
     */
    public function prune($commonExecPieceTypeContrat = null)
    {
        if ($commonExecPieceTypeContrat) {
            $this->addUsingAlias(CommonExecPieceTypeContratPeer::ID, $commonExecPieceTypeContrat->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
