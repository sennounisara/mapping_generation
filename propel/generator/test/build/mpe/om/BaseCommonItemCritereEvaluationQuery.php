<?php


/**
 * Base class that represents a query for the 'ItemCritereEvaluation' table.
 *
 * 
 *
 * @method CommonItemCritereEvaluationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonItemCritereEvaluationQuery orderByIdcritereevaluation($order = Criteria::ASC) Order by the idCritereEvaluation column
 * @method CommonItemCritereEvaluationQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonItemCritereEvaluationQuery orderByPrix($order = Criteria::ASC) Order by the prix column
 * @method CommonItemCritereEvaluationQuery orderByQuantite($order = Criteria::ASC) Order by the quantite column
 * @method CommonItemCritereEvaluationQuery orderByPonderation($order = Criteria::ASC) Order by the ponderation column
 * @method CommonItemCritereEvaluationQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method CommonItemCritereEvaluationQuery orderByRegleEvaluation($order = Criteria::ASC) Order by the regle_evaluation column
 * @method CommonItemCritereEvaluationQuery orderByTypeItem($order = Criteria::ASC) Order by the type_item column
 *
 * @method CommonItemCritereEvaluationQuery groupById() Group by the id column
 * @method CommonItemCritereEvaluationQuery groupByIdcritereevaluation() Group by the idCritereEvaluation column
 * @method CommonItemCritereEvaluationQuery groupByLibelle() Group by the libelle column
 * @method CommonItemCritereEvaluationQuery groupByPrix() Group by the prix column
 * @method CommonItemCritereEvaluationQuery groupByQuantite() Group by the quantite column
 * @method CommonItemCritereEvaluationQuery groupByPonderation() Group by the ponderation column
 * @method CommonItemCritereEvaluationQuery groupByNumero() Group by the numero column
 * @method CommonItemCritereEvaluationQuery groupByRegleEvaluation() Group by the regle_evaluation column
 * @method CommonItemCritereEvaluationQuery groupByTypeItem() Group by the type_item column
 *
 * @method CommonItemCritereEvaluationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonItemCritereEvaluationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonItemCritereEvaluationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonItemCritereEvaluationQuery leftJoinCommonCriteresEvaluation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCriteresEvaluation relation
 * @method CommonItemCritereEvaluationQuery rightJoinCommonCriteresEvaluation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCriteresEvaluation relation
 * @method CommonItemCritereEvaluationQuery innerJoinCommonCriteresEvaluation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCriteresEvaluation relation
 *
 * @method CommonItemCritereEvaluation findOne(PropelPDO $con = null) Return the first CommonItemCritereEvaluation matching the query
 * @method CommonItemCritereEvaluation findOneOrCreate(PropelPDO $con = null) Return the first CommonItemCritereEvaluation matching the query, or a new CommonItemCritereEvaluation object populated from the query conditions when no match is found
 *
 * @method CommonItemCritereEvaluation findOneByIdcritereevaluation(int $idCritereEvaluation) Return the first CommonItemCritereEvaluation filtered by the idCritereEvaluation column
 * @method CommonItemCritereEvaluation findOneByLibelle(string $libelle) Return the first CommonItemCritereEvaluation filtered by the libelle column
 * @method CommonItemCritereEvaluation findOneByPrix(string $prix) Return the first CommonItemCritereEvaluation filtered by the prix column
 * @method CommonItemCritereEvaluation findOneByQuantite(int $quantite) Return the first CommonItemCritereEvaluation filtered by the quantite column
 * @method CommonItemCritereEvaluation findOneByPonderation(int $ponderation) Return the first CommonItemCritereEvaluation filtered by the ponderation column
 * @method CommonItemCritereEvaluation findOneByNumero(int $numero) Return the first CommonItemCritereEvaluation filtered by the numero column
 * @method CommonItemCritereEvaluation findOneByRegleEvaluation(int $regle_evaluation) Return the first CommonItemCritereEvaluation filtered by the regle_evaluation column
 * @method CommonItemCritereEvaluation findOneByTypeItem(int $type_item) Return the first CommonItemCritereEvaluation filtered by the type_item column
 *
 * @method array findById(int $id) Return CommonItemCritereEvaluation objects filtered by the id column
 * @method array findByIdcritereevaluation(int $idCritereEvaluation) Return CommonItemCritereEvaluation objects filtered by the idCritereEvaluation column
 * @method array findByLibelle(string $libelle) Return CommonItemCritereEvaluation objects filtered by the libelle column
 * @method array findByPrix(string $prix) Return CommonItemCritereEvaluation objects filtered by the prix column
 * @method array findByQuantite(int $quantite) Return CommonItemCritereEvaluation objects filtered by the quantite column
 * @method array findByPonderation(int $ponderation) Return CommonItemCritereEvaluation objects filtered by the ponderation column
 * @method array findByNumero(int $numero) Return CommonItemCritereEvaluation objects filtered by the numero column
 * @method array findByRegleEvaluation(int $regle_evaluation) Return CommonItemCritereEvaluation objects filtered by the regle_evaluation column
 * @method array findByTypeItem(int $type_item) Return CommonItemCritereEvaluation objects filtered by the type_item column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonItemCritereEvaluationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonItemCritereEvaluationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonItemCritereEvaluation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonItemCritereEvaluationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonItemCritereEvaluationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonItemCritereEvaluationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonItemCritereEvaluationQuery) {
            return $criteria;
        }
        $query = new CommonItemCritereEvaluationQuery();
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
     * @return   CommonItemCritereEvaluation|CommonItemCritereEvaluation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonItemCritereEvaluationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonItemCritereEvaluation A model object, or null if the key is not found
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
     * @return                 CommonItemCritereEvaluation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `idCritereEvaluation`, `libelle`, `prix`, `quantite`, `ponderation`, `numero`, `regle_evaluation`, `type_item` FROM `ItemCritereEvaluation` WHERE `id` = :p0';
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
            $obj = new CommonItemCritereEvaluation();
            $obj->hydrate($row);
            CommonItemCritereEvaluationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonItemCritereEvaluation|CommonItemCritereEvaluation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonItemCritereEvaluation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonItemCritereEvaluationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonItemCritereEvaluationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemCritereEvaluationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the idCritereEvaluation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcritereevaluation(1234); // WHERE idCritereEvaluation = 1234
     * $query->filterByIdcritereevaluation(array(12, 34)); // WHERE idCritereEvaluation IN (12, 34)
     * $query->filterByIdcritereevaluation(array('min' => 12)); // WHERE idCritereEvaluation >= 12
     * $query->filterByIdcritereevaluation(array('max' => 12)); // WHERE idCritereEvaluation <= 12
     * </code>
     *
     * @see       filterByCommonCriteresEvaluation()
     *
     * @param     mixed $idcritereevaluation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByIdcritereevaluation($idcritereevaluation = null, $comparison = null)
    {
        if (is_array($idcritereevaluation)) {
            $useMinMax = false;
            if (isset($idcritereevaluation['min'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION, $idcritereevaluation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcritereevaluation['max'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION, $idcritereevaluation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION, $idcritereevaluation, $comparison);
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
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonItemCritereEvaluationPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the prix column
     *
     * Example usage:
     * <code>
     * $query->filterByPrix('fooValue');   // WHERE prix = 'fooValue'
     * $query->filterByPrix('%fooValue%'); // WHERE prix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByPrix($prix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prix)) {
                $prix = str_replace('*', '%', $prix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonItemCritereEvaluationPeer::PRIX, $prix, $comparison);
    }

    /**
     * Filter the query on the quantite column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantite(1234); // WHERE quantite = 1234
     * $query->filterByQuantite(array(12, 34)); // WHERE quantite IN (12, 34)
     * $query->filterByQuantite(array('min' => 12)); // WHERE quantite >= 12
     * $query->filterByQuantite(array('max' => 12)); // WHERE quantite <= 12
     * </code>
     *
     * @param     mixed $quantite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByQuantite($quantite = null, $comparison = null)
    {
        if (is_array($quantite)) {
            $useMinMax = false;
            if (isset($quantite['min'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::QUANTITE, $quantite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantite['max'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::QUANTITE, $quantite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemCritereEvaluationPeer::QUANTITE, $quantite, $comparison);
    }

    /**
     * Filter the query on the ponderation column
     *
     * Example usage:
     * <code>
     * $query->filterByPonderation(1234); // WHERE ponderation = 1234
     * $query->filterByPonderation(array(12, 34)); // WHERE ponderation IN (12, 34)
     * $query->filterByPonderation(array('min' => 12)); // WHERE ponderation >= 12
     * $query->filterByPonderation(array('max' => 12)); // WHERE ponderation <= 12
     * </code>
     *
     * @param     mixed $ponderation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByPonderation($ponderation = null, $comparison = null)
    {
        if (is_array($ponderation)) {
            $useMinMax = false;
            if (isset($ponderation['min'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::PONDERATION, $ponderation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ponderation['max'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::PONDERATION, $ponderation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemCritereEvaluationPeer::PONDERATION, $ponderation, $comparison);
    }

    /**
     * Filter the query on the numero column
     *
     * Example usage:
     * <code>
     * $query->filterByNumero(1234); // WHERE numero = 1234
     * $query->filterByNumero(array(12, 34)); // WHERE numero IN (12, 34)
     * $query->filterByNumero(array('min' => 12)); // WHERE numero >= 12
     * $query->filterByNumero(array('max' => 12)); // WHERE numero <= 12
     * </code>
     *
     * @param     mixed $numero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (is_array($numero)) {
            $useMinMax = false;
            if (isset($numero['min'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::NUMERO, $numero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numero['max'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::NUMERO, $numero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemCritereEvaluationPeer::NUMERO, $numero, $comparison);
    }

    /**
     * Filter the query on the regle_evaluation column
     *
     * Example usage:
     * <code>
     * $query->filterByRegleEvaluation(1234); // WHERE regle_evaluation = 1234
     * $query->filterByRegleEvaluation(array(12, 34)); // WHERE regle_evaluation IN (12, 34)
     * $query->filterByRegleEvaluation(array('min' => 12)); // WHERE regle_evaluation >= 12
     * $query->filterByRegleEvaluation(array('max' => 12)); // WHERE regle_evaluation <= 12
     * </code>
     *
     * @param     mixed $regleEvaluation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByRegleEvaluation($regleEvaluation = null, $comparison = null)
    {
        if (is_array($regleEvaluation)) {
            $useMinMax = false;
            if (isset($regleEvaluation['min'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::REGLE_EVALUATION, $regleEvaluation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($regleEvaluation['max'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::REGLE_EVALUATION, $regleEvaluation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemCritereEvaluationPeer::REGLE_EVALUATION, $regleEvaluation, $comparison);
    }

    /**
     * Filter the query on the type_item column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeItem(1234); // WHERE type_item = 1234
     * $query->filterByTypeItem(array(12, 34)); // WHERE type_item IN (12, 34)
     * $query->filterByTypeItem(array('min' => 12)); // WHERE type_item >= 12
     * $query->filterByTypeItem(array('max' => 12)); // WHERE type_item <= 12
     * </code>
     *
     * @param     mixed $typeItem The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function filterByTypeItem($typeItem = null, $comparison = null)
    {
        if (is_array($typeItem)) {
            $useMinMax = false;
            if (isset($typeItem['min'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::TYPE_ITEM, $typeItem['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeItem['max'])) {
                $this->addUsingAlias(CommonItemCritereEvaluationPeer::TYPE_ITEM, $typeItem['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonItemCritereEvaluationPeer::TYPE_ITEM, $typeItem, $comparison);
    }

    /**
     * Filter the query by a related CommonCriteresEvaluation object
     *
     * @param   CommonCriteresEvaluation|PropelObjectCollection $commonCriteresEvaluation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonItemCritereEvaluationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCriteresEvaluation($commonCriteresEvaluation, $comparison = null)
    {
        if ($commonCriteresEvaluation instanceof CommonCriteresEvaluation) {
            return $this
                ->addUsingAlias(CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION, $commonCriteresEvaluation->getId(), $comparison);
        } elseif ($commonCriteresEvaluation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonItemCritereEvaluationPeer::IDCRITEREEVALUATION, $commonCriteresEvaluation->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonCriteresEvaluation() only accepts arguments of type CommonCriteresEvaluation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCriteresEvaluation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function joinCommonCriteresEvaluation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCriteresEvaluation');

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
            $this->addJoinObject($join, 'CommonCriteresEvaluation');
        }

        return $this;
    }

    /**
     * Use the CommonCriteresEvaluation relation CommonCriteresEvaluation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCriteresEvaluationQuery A secondary query class using the current class as primary query
     */
    public function useCommonCriteresEvaluationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonCriteresEvaluation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCriteresEvaluation', 'CommonCriteresEvaluationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonItemCritereEvaluation $commonItemCritereEvaluation Object to remove from the list of results
     *
     * @return CommonItemCritereEvaluationQuery The current query, for fluid interface
     */
    public function prune($commonItemCritereEvaluation = null)
    {
        if ($commonItemCritereEvaluation) {
            $this->addUsingAlias(CommonItemCritereEvaluationPeer::ID, $commonItemCritereEvaluation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
