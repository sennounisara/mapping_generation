<?php


/**
 * Base class that represents a query for the 't_modele_document' table.
 *
 * 
 *
 * @method TModeleDocumentQuery orderByIdModele($order = Criteria::ASC) Order by the id_modele column
 * @method TModeleDocumentQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method TModeleDocumentQuery orderByParam($order = Criteria::ASC) Order by the param column
 * @method TModeleDocumentQuery orderByExtension($order = Criteria::ASC) Order by the extension column
 *
 * @method TModeleDocumentQuery groupByIdModele() Group by the id_modele column
 * @method TModeleDocumentQuery groupByLibelle() Group by the libelle column
 * @method TModeleDocumentQuery groupByParam() Group by the param column
 * @method TModeleDocumentQuery groupByExtension() Group by the extension column
 *
 * @method TModeleDocumentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TModeleDocumentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TModeleDocumentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TModeleDocument findOne(PropelPDO $con = null) Return the first TModeleDocument matching the query
 * @method TModeleDocument findOneOrCreate(PropelPDO $con = null) Return the first TModeleDocument matching the query, or a new TModeleDocument object populated from the query conditions when no match is found
 *
 * @method TModeleDocument findOneByLibelle(string $libelle) Return the first TModeleDocument filtered by the libelle column
 * @method TModeleDocument findOneByParam(string $param) Return the first TModeleDocument filtered by the param column
 * @method TModeleDocument findOneByExtension(string $extension) Return the first TModeleDocument filtered by the extension column
 *
 * @method array findByIdModele(int $id_modele) Return TModeleDocument objects filtered by the id_modele column
 * @method array findByLibelle(string $libelle) Return TModeleDocument objects filtered by the libelle column
 * @method array findByParam(string $param) Return TModeleDocument objects filtered by the param column
 * @method array findByExtension(string $extension) Return TModeleDocument objects filtered by the extension column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTModeleDocumentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTModeleDocumentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TModeleDocument', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TModeleDocumentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TModeleDocumentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TModeleDocumentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TModeleDocumentQuery) {
            return $criteria;
        }
        $query = new TModeleDocumentQuery();
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
     * @return   TModeleDocument|TModeleDocument[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TModeleDocumentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TModeleDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TModeleDocument A model object, or null if the key is not found
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
     * @return                 TModeleDocument A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_modele`, `libelle`, `param`, `extension` FROM `t_modele_document` WHERE `id_modele` = :p0';
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
            $obj = new TModeleDocument();
            $obj->hydrate($row);
            TModeleDocumentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TModeleDocument|TModeleDocument[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TModeleDocument[]|mixed the list of results, formatted by the current formatter
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
     * @return TModeleDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TModeleDocumentPeer::ID_MODELE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TModeleDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TModeleDocumentPeer::ID_MODELE, $keys, Criteria::IN);
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
     * @return TModeleDocumentQuery The current query, for fluid interface
     */
    public function filterByIdModele($idModele = null, $comparison = null)
    {
        if (is_array($idModele)) {
            $useMinMax = false;
            if (isset($idModele['min'])) {
                $this->addUsingAlias(TModeleDocumentPeer::ID_MODELE, $idModele['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idModele['max'])) {
                $this->addUsingAlias(TModeleDocumentPeer::ID_MODELE, $idModele['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TModeleDocumentPeer::ID_MODELE, $idModele, $comparison);
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
     * @return TModeleDocumentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TModeleDocumentPeer::LIBELLE, $libelle, $comparison);
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
     * @return TModeleDocumentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TModeleDocumentPeer::PARAM, $param, $comparison);
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
     * @return TModeleDocumentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TModeleDocumentPeer::EXTENSION, $extension, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TModeleDocument $tModeleDocument Object to remove from the list of results
     *
     * @return TModeleDocumentQuery The current query, for fluid interface
     */
    public function prune($tModeleDocument = null)
    {
        if ($tModeleDocument) {
            $this->addUsingAlias(TModeleDocumentPeer::ID_MODELE, $tModeleDocument->getIdModele(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
