<?php


/**
 * Base class that represents a query for the 't_affaire' table.
 *
 * 
 *
 * @method TAffaireQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TAffaireQuery orderByIdDoc1($order = Criteria::ASC) Order by the ID_DOC_1 column
 * @method TAffaireQuery orderByIdDoc2($order = Criteria::ASC) Order by the ID_DOC_2 column
 * @method TAffaireQuery orderByTitre($order = Criteria::ASC) Order by the TITRE column
 * @method TAffaireQuery orderByDescription($order = Criteria::ASC) Order by the DESCRIPTION column
 *
 * @method TAffaireQuery groupById() Group by the ID column
 * @method TAffaireQuery groupByIdDoc1() Group by the ID_DOC_1 column
 * @method TAffaireQuery groupByIdDoc2() Group by the ID_DOC_2 column
 * @method TAffaireQuery groupByTitre() Group by the TITRE column
 * @method TAffaireQuery groupByDescription() Group by the DESCRIPTION column
 *
 * @method TAffaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TAffaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TAffaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TAffaire findOne(PropelPDO $con = null) Return the first TAffaire matching the query
 * @method TAffaire findOneOrCreate(PropelPDO $con = null) Return the first TAffaire matching the query, or a new TAffaire object populated from the query conditions when no match is found
 *
 * @method TAffaire findOneByIdDoc1(int $ID_DOC_1) Return the first TAffaire filtered by the ID_DOC_1 column
 * @method TAffaire findOneByIdDoc2(int $ID_DOC_2) Return the first TAffaire filtered by the ID_DOC_2 column
 * @method TAffaire findOneByTitre(string $TITRE) Return the first TAffaire filtered by the TITRE column
 * @method TAffaire findOneByDescription(string $DESCRIPTION) Return the first TAffaire filtered by the DESCRIPTION column
 *
 * @method array findById(int $ID) Return TAffaire objects filtered by the ID column
 * @method array findByIdDoc1(int $ID_DOC_1) Return TAffaire objects filtered by the ID_DOC_1 column
 * @method array findByIdDoc2(int $ID_DOC_2) Return TAffaire objects filtered by the ID_DOC_2 column
 * @method array findByTitre(string $TITRE) Return TAffaire objects filtered by the TITRE column
 * @method array findByDescription(string $DESCRIPTION) Return TAffaire objects filtered by the DESCRIPTION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTAffaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTAffaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TAffaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TAffaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TAffaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TAffaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TAffaireQuery) {
            return $criteria;
        }
        $query = new TAffaireQuery();
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
     * @return   TAffaire|TAffaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TAffairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TAffairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TAffaire A model object, or null if the key is not found
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
     * @return                 TAffaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_DOC_1`, `ID_DOC_2`, `TITRE`, `DESCRIPTION` FROM `t_affaire` WHERE `ID` = :p0';
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
            $obj = new TAffaire();
            $obj->hydrate($row);
            TAffairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TAffaire|TAffaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TAffaire[]|mixed the list of results, formatted by the current formatter
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
     * @return TAffaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TAffairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TAffaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TAffairePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAffaireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TAffairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TAffairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAffairePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_DOC_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDoc1(1234); // WHERE ID_DOC_1 = 1234
     * $query->filterByIdDoc1(array(12, 34)); // WHERE ID_DOC_1 IN (12, 34)
     * $query->filterByIdDoc1(array('min' => 12)); // WHERE ID_DOC_1 >= 12
     * $query->filterByIdDoc1(array('max' => 12)); // WHERE ID_DOC_1 <= 12
     * </code>
     *
     * @param     mixed $idDoc1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAffaireQuery The current query, for fluid interface
     */
    public function filterByIdDoc1($idDoc1 = null, $comparison = null)
    {
        if (is_array($idDoc1)) {
            $useMinMax = false;
            if (isset($idDoc1['min'])) {
                $this->addUsingAlias(TAffairePeer::ID_DOC_1, $idDoc1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDoc1['max'])) {
                $this->addUsingAlias(TAffairePeer::ID_DOC_1, $idDoc1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAffairePeer::ID_DOC_1, $idDoc1, $comparison);
    }

    /**
     * Filter the query on the ID_DOC_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDoc2(1234); // WHERE ID_DOC_2 = 1234
     * $query->filterByIdDoc2(array(12, 34)); // WHERE ID_DOC_2 IN (12, 34)
     * $query->filterByIdDoc2(array('min' => 12)); // WHERE ID_DOC_2 >= 12
     * $query->filterByIdDoc2(array('max' => 12)); // WHERE ID_DOC_2 <= 12
     * </code>
     *
     * @param     mixed $idDoc2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAffaireQuery The current query, for fluid interface
     */
    public function filterByIdDoc2($idDoc2 = null, $comparison = null)
    {
        if (is_array($idDoc2)) {
            $useMinMax = false;
            if (isset($idDoc2['min'])) {
                $this->addUsingAlias(TAffairePeer::ID_DOC_2, $idDoc2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDoc2['max'])) {
                $this->addUsingAlias(TAffairePeer::ID_DOC_2, $idDoc2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAffairePeer::ID_DOC_2, $idDoc2, $comparison);
    }

    /**
     * Filter the query on the TITRE column
     *
     * Example usage:
     * <code>
     * $query->filterByTitre('fooValue');   // WHERE TITRE = 'fooValue'
     * $query->filterByTitre('%fooValue%'); // WHERE TITRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAffaireQuery The current query, for fluid interface
     */
    public function filterByTitre($titre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titre)) {
                $titre = str_replace('*', '%', $titre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TAffairePeer::TITRE, $titre, $comparison);
    }

    /**
     * Filter the query on the DESCRIPTION column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE DESCRIPTION = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE DESCRIPTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAffaireQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TAffairePeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TAffaire $tAffaire Object to remove from the list of results
     *
     * @return TAffaireQuery The current query, for fluid interface
     */
    public function prune($tAffaire = null)
    {
        if ($tAffaire) {
            $this->addUsingAlias(TAffairePeer::ID, $tAffaire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
