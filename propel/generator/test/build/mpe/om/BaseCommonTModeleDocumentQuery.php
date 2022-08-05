<?php


/**
 * Base class that represents a query for the 't_modele_document' table.
 *
 * 
 *
 * @method CommonTModeleDocumentQuery orderByIdModele($order = Criteria::ASC) Order by the id_modele column
 * @method CommonTModeleDocumentQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonTModeleDocumentQuery orderByUri($order = Criteria::ASC) Order by the uri column
 * @method CommonTModeleDocumentQuery orderByParam($order = Criteria::ASC) Order by the param column
 * @method CommonTModeleDocumentQuery orderByExtension($order = Criteria::ASC) Order by the extension column
 *
 * @method CommonTModeleDocumentQuery groupByIdModele() Group by the id_modele column
 * @method CommonTModeleDocumentQuery groupByLibelle() Group by the libelle column
 * @method CommonTModeleDocumentQuery groupByUri() Group by the uri column
 * @method CommonTModeleDocumentQuery groupByParam() Group by the param column
 * @method CommonTModeleDocumentQuery groupByExtension() Group by the extension column
 *
 * @method CommonTModeleDocumentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTModeleDocumentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTModeleDocumentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTModeleDocument findOne(PropelPDO $con = null) Return the first CommonTModeleDocument matching the query
 * @method CommonTModeleDocument findOneOrCreate(PropelPDO $con = null) Return the first CommonTModeleDocument matching the query, or a new CommonTModeleDocument object populated from the query conditions when no match is found
 *
 * @method CommonTModeleDocument findOneByLibelle(string $libelle) Return the first CommonTModeleDocument filtered by the libelle column
 * @method CommonTModeleDocument findOneByUri(string $uri) Return the first CommonTModeleDocument filtered by the uri column
 * @method CommonTModeleDocument findOneByParam(string $param) Return the first CommonTModeleDocument filtered by the param column
 * @method CommonTModeleDocument findOneByExtension(string $extension) Return the first CommonTModeleDocument filtered by the extension column
 *
 * @method array findByIdModele(int $id_modele) Return CommonTModeleDocument objects filtered by the id_modele column
 * @method array findByLibelle(string $libelle) Return CommonTModeleDocument objects filtered by the libelle column
 * @method array findByUri(string $uri) Return CommonTModeleDocument objects filtered by the uri column
 * @method array findByParam(string $param) Return CommonTModeleDocument objects filtered by the param column
 * @method array findByExtension(string $extension) Return CommonTModeleDocument objects filtered by the extension column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTModeleDocumentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTModeleDocumentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTModeleDocument', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTModeleDocumentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTModeleDocumentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTModeleDocumentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTModeleDocumentQuery) {
            return $criteria;
        }
        $query = new CommonTModeleDocumentQuery();
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
     * @return   CommonTModeleDocument|CommonTModeleDocument[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTModeleDocumentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTModeleDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTModeleDocument A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdModele($key, $con = null)
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
     * @return                 CommonTModeleDocument A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_modele`, `libelle`, `uri`, `param`, `extension` FROM `t_modele_document` WHERE `id_modele` = :p0';
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
            $obj = new CommonTModeleDocument();
            $obj->hydrate($row);
            CommonTModeleDocumentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTModeleDocument|CommonTModeleDocument[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTModeleDocument[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTModeleDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTModeleDocumentPeer::ID_MODELE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTModeleDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTModeleDocumentPeer::ID_MODELE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_modele column
     *
     * Example usage:
     * <code>
     * $query->filterByIdModele(1234); // WHERE id_modele = 1234
     * $query->filterByIdModele(array(12, 34)); // WHERE id_modele IN (12, 34)
     * $query->filterByIdModele(array('min' => 12)); // WHERE id_modele >= 12
     * $query->filterByIdModele(array('max' => 12)); // WHERE id_modele <= 12
     * </code>
     *
     * @param     mixed $idModele The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTModeleDocumentQuery The current query, for fluid interface
     */
    public function filterByIdModele($idModele = null, $comparison = null)
    {
        if (is_array($idModele)) {
            $useMinMax = false;
            if (isset($idModele['min'])) {
                $this->addUsingAlias(CommonTModeleDocumentPeer::ID_MODELE, $idModele['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idModele['max'])) {
                $this->addUsingAlias(CommonTModeleDocumentPeer::ID_MODELE, $idModele['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTModeleDocumentPeer::ID_MODELE, $idModele, $comparison);
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
     * @return CommonTModeleDocumentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTModeleDocumentPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the uri column
     *
     * Example usage:
     * <code>
     * $query->filterByUri('fooValue');   // WHERE uri = 'fooValue'
     * $query->filterByUri('%fooValue%'); // WHERE uri LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uri The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTModeleDocumentQuery The current query, for fluid interface
     */
    public function filterByUri($uri = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uri)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uri)) {
                $uri = str_replace('*', '%', $uri);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTModeleDocumentPeer::URI, $uri, $comparison);
    }

    /**
     * Filter the query on the param column
     *
     * Example usage:
     * <code>
     * $query->filterByParam('fooValue');   // WHERE param = 'fooValue'
     * $query->filterByParam('%fooValue%'); // WHERE param LIKE '%fooValue%'
     * </code>
     *
     * @param     string $param The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTModeleDocumentQuery The current query, for fluid interface
     */
    public function filterByParam($param = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($param)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $param)) {
                $param = str_replace('*', '%', $param);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTModeleDocumentPeer::PARAM, $param, $comparison);
    }

    /**
     * Filter the query on the extension column
     *
     * Example usage:
     * <code>
     * $query->filterByExtension('fooValue');   // WHERE extension = 'fooValue'
     * $query->filterByExtension('%fooValue%'); // WHERE extension LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extension The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTModeleDocumentQuery The current query, for fluid interface
     */
    public function filterByExtension($extension = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extension)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extension)) {
                $extension = str_replace('*', '%', $extension);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTModeleDocumentPeer::EXTENSION, $extension, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTModeleDocument $commonTModeleDocument Object to remove from the list of results
     *
     * @return CommonTModeleDocumentQuery The current query, for fluid interface
     */
    public function prune($commonTModeleDocument = null)
    {
        if ($commonTModeleDocument) {
            $this->addUsingAlias(CommonTModeleDocumentPeer::ID_MODELE, $commonTModeleDocument->getIdModele(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
