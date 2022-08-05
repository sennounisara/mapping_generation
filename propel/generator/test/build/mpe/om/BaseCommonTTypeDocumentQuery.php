<?php


/**
 * Base class that represents a query for the 't_type_document' table.
 *
 * 
 *
 * @method CommonTTypeDocumentQuery orderByIdType($order = Criteria::ASC) Order by the id_type column
 * @method CommonTTypeDocumentQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonTTypeDocumentQuery orderByIdThemeParapheur($order = Criteria::ASC) Order by the id_theme_parapheur column
 *
 * @method CommonTTypeDocumentQuery groupByIdType() Group by the id_type column
 * @method CommonTTypeDocumentQuery groupByLibelle() Group by the libelle column
 * @method CommonTTypeDocumentQuery groupByIdThemeParapheur() Group by the id_theme_parapheur column
 *
 * @method CommonTTypeDocumentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTTypeDocumentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTTypeDocumentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTTypeDocument findOne(PropelPDO $con = null) Return the first CommonTTypeDocument matching the query
 * @method CommonTTypeDocument findOneOrCreate(PropelPDO $con = null) Return the first CommonTTypeDocument matching the query, or a new CommonTTypeDocument object populated from the query conditions when no match is found
 *
 * @method CommonTTypeDocument findOneByLibelle(string $libelle) Return the first CommonTTypeDocument filtered by the libelle column
 * @method CommonTTypeDocument findOneByIdThemeParapheur(int $id_theme_parapheur) Return the first CommonTTypeDocument filtered by the id_theme_parapheur column
 *
 * @method array findByIdType(int $id_type) Return CommonTTypeDocument objects filtered by the id_type column
 * @method array findByLibelle(string $libelle) Return CommonTTypeDocument objects filtered by the libelle column
 * @method array findByIdThemeParapheur(int $id_theme_parapheur) Return CommonTTypeDocument objects filtered by the id_theme_parapheur column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTTypeDocumentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTTypeDocumentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTTypeDocument', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTTypeDocumentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTTypeDocumentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTTypeDocumentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTTypeDocumentQuery) {
            return $criteria;
        }
        $query = new CommonTTypeDocumentQuery();
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
     * @return   CommonTTypeDocument|CommonTTypeDocument[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTTypeDocumentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTTypeDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTTypeDocument A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdType($key, $con = null)
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
     * @return                 CommonTTypeDocument A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_type`, `libelle`, `id_theme_parapheur` FROM `t_type_document` WHERE `id_type` = :p0';
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
            $obj = new CommonTTypeDocument();
            $obj->hydrate($row);
            CommonTTypeDocumentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTTypeDocument|CommonTTypeDocument[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTTypeDocument[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTTypeDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTTypeDocumentPeer::ID_TYPE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTTypeDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTTypeDocumentPeer::ID_TYPE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_type column
     *
     * Example usage:
     * <code>
     * $query->filterByIdType(1234); // WHERE id_type = 1234
     * $query->filterByIdType(array(12, 34)); // WHERE id_type IN (12, 34)
     * $query->filterByIdType(array('min' => 12)); // WHERE id_type >= 12
     * $query->filterByIdType(array('max' => 12)); // WHERE id_type <= 12
     * </code>
     *
     * @param     mixed $idType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTypeDocumentQuery The current query, for fluid interface
     */
    public function filterByIdType($idType = null, $comparison = null)
    {
        if (is_array($idType)) {
            $useMinMax = false;
            if (isset($idType['min'])) {
                $this->addUsingAlias(CommonTTypeDocumentPeer::ID_TYPE, $idType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idType['max'])) {
                $this->addUsingAlias(CommonTTypeDocumentPeer::ID_TYPE, $idType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTypeDocumentPeer::ID_TYPE, $idType, $comparison);
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
     * @return CommonTTypeDocumentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTTypeDocumentPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the id_theme_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdThemeParapheur(1234); // WHERE id_theme_parapheur = 1234
     * $query->filterByIdThemeParapheur(array(12, 34)); // WHERE id_theme_parapheur IN (12, 34)
     * $query->filterByIdThemeParapheur(array('min' => 12)); // WHERE id_theme_parapheur >= 12
     * $query->filterByIdThemeParapheur(array('max' => 12)); // WHERE id_theme_parapheur <= 12
     * </code>
     *
     * @param     mixed $idThemeParapheur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTypeDocumentQuery The current query, for fluid interface
     */
    public function filterByIdThemeParapheur($idThemeParapheur = null, $comparison = null)
    {
        if (is_array($idThemeParapheur)) {
            $useMinMax = false;
            if (isset($idThemeParapheur['min'])) {
                $this->addUsingAlias(CommonTTypeDocumentPeer::ID_THEME_PARAPHEUR, $idThemeParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idThemeParapheur['max'])) {
                $this->addUsingAlias(CommonTTypeDocumentPeer::ID_THEME_PARAPHEUR, $idThemeParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTypeDocumentPeer::ID_THEME_PARAPHEUR, $idThemeParapheur, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTTypeDocument $commonTTypeDocument Object to remove from the list of results
     *
     * @return CommonTTypeDocumentQuery The current query, for fluid interface
     */
    public function prune($commonTTypeDocument = null)
    {
        if ($commonTTypeDocument) {
            $this->addUsingAlias(CommonTTypeDocumentPeer::ID_TYPE, $commonTTypeDocument->getIdType(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
