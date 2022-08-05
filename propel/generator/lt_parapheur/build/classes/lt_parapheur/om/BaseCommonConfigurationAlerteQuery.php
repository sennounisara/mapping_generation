<?php


/**
 * Base class that represents a query for the 'configuration_alerte' table.
 *
 * 
 *
 * @method CommonConfigurationAlerteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonConfigurationAlerteQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonConfigurationAlerteQuery orderByOperation($order = Criteria::ASC) Order by the operation column
 * @method CommonConfigurationAlerteQuery orderByBloquant($order = Criteria::ASC) Order by the bloquant column
 * @method CommonConfigurationAlerteQuery orderByActive($order = Criteria::ASC) Order by the active column
 * @method CommonConfigurationAlerteQuery orderByXml($order = Criteria::ASC) Order by the xml column
 * @method CommonConfigurationAlerteQuery orderByMessage($order = Criteria::ASC) Order by the message column
 * @method CommonConfigurationAlerteQuery orderByTypeObjet($order = Criteria::ASC) Order by the type_objet column
 *
 * @method CommonConfigurationAlerteQuery groupById() Group by the id column
 * @method CommonConfigurationAlerteQuery groupByLibelle() Group by the libelle column
 * @method CommonConfigurationAlerteQuery groupByOperation() Group by the operation column
 * @method CommonConfigurationAlerteQuery groupByBloquant() Group by the bloquant column
 * @method CommonConfigurationAlerteQuery groupByActive() Group by the active column
 * @method CommonConfigurationAlerteQuery groupByXml() Group by the xml column
 * @method CommonConfigurationAlerteQuery groupByMessage() Group by the message column
 * @method CommonConfigurationAlerteQuery groupByTypeObjet() Group by the type_objet column
 *
 * @method CommonConfigurationAlerteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonConfigurationAlerteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonConfigurationAlerteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonConfigurationAlerte findOne(PropelPDO $con = null) Return the first CommonConfigurationAlerte matching the query
 * @method CommonConfigurationAlerte findOneOrCreate(PropelPDO $con = null) Return the first CommonConfigurationAlerte matching the query, or a new CommonConfigurationAlerte object populated from the query conditions when no match is found
 *
 * @method CommonConfigurationAlerte findOneByLibelle(string $libelle) Return the first CommonConfigurationAlerte filtered by the libelle column
 * @method CommonConfigurationAlerte findOneByOperation(string $operation) Return the first CommonConfigurationAlerte filtered by the operation column
 * @method CommonConfigurationAlerte findOneByBloquant(string $bloquant) Return the first CommonConfigurationAlerte filtered by the bloquant column
 * @method CommonConfigurationAlerte findOneByActive(string $active) Return the first CommonConfigurationAlerte filtered by the active column
 * @method CommonConfigurationAlerte findOneByXml(string $xml) Return the first CommonConfigurationAlerte filtered by the xml column
 * @method CommonConfigurationAlerte findOneByMessage(string $message) Return the first CommonConfigurationAlerte filtered by the message column
 * @method CommonConfigurationAlerte findOneByTypeObjet(string $type_objet) Return the first CommonConfigurationAlerte filtered by the type_objet column
 *
 * @method array findById(int $id) Return CommonConfigurationAlerte objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonConfigurationAlerte objects filtered by the libelle column
 * @method array findByOperation(string $operation) Return CommonConfigurationAlerte objects filtered by the operation column
 * @method array findByBloquant(string $bloquant) Return CommonConfigurationAlerte objects filtered by the bloquant column
 * @method array findByActive(string $active) Return CommonConfigurationAlerte objects filtered by the active column
 * @method array findByXml(string $xml) Return CommonConfigurationAlerte objects filtered by the xml column
 * @method array findByMessage(string $message) Return CommonConfigurationAlerte objects filtered by the message column
 * @method array findByTypeObjet(string $type_objet) Return CommonConfigurationAlerte objects filtered by the type_objet column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonConfigurationAlerteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonConfigurationAlerteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonConfigurationAlerte', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonConfigurationAlerteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonConfigurationAlerteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonConfigurationAlerteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonConfigurationAlerteQuery) {
            return $criteria;
        }
        $query = new CommonConfigurationAlerteQuery();
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
     * @return   CommonConfigurationAlerte|CommonConfigurationAlerte[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonConfigurationAlertePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationAlertePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonConfigurationAlerte A model object, or null if the key is not found
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
     * @return                 CommonConfigurationAlerte A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `operation`, `bloquant`, `active`, `xml`, `message`, `type_objet` FROM `configuration_alerte` WHERE `id` = :p0';
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
            $obj = new CommonConfigurationAlerte();
            $obj->hydrate($row);
            CommonConfigurationAlertePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonConfigurationAlerte|CommonConfigurationAlerte[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonConfigurationAlerte[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonConfigurationAlerteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonConfigurationAlertePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonConfigurationAlerteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonConfigurationAlertePeer::ID, $keys, Criteria::IN);
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
     * @return CommonConfigurationAlerteQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonConfigurationAlertePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonConfigurationAlertePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConfigurationAlertePeer::ID, $id, $comparison);
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
     * @return CommonConfigurationAlerteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConfigurationAlertePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the operation column
     *
     * Example usage:
     * <code>
     * $query->filterByOperation('fooValue');   // WHERE operation = 'fooValue'
     * $query->filterByOperation('%fooValue%'); // WHERE operation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $operation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationAlerteQuery The current query, for fluid interface
     */
    public function filterByOperation($operation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($operation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $operation)) {
                $operation = str_replace('*', '%', $operation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationAlertePeer::OPERATION, $operation, $comparison);
    }

    /**
     * Filter the query on the bloquant column
     *
     * Example usage:
     * <code>
     * $query->filterByBloquant('fooValue');   // WHERE bloquant = 'fooValue'
     * $query->filterByBloquant('%fooValue%'); // WHERE bloquant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloquant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationAlerteQuery The current query, for fluid interface
     */
    public function filterByBloquant($bloquant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloquant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bloquant)) {
                $bloquant = str_replace('*', '%', $bloquant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationAlertePeer::BLOQUANT, $bloquant, $comparison);
    }

    /**
     * Filter the query on the active column
     *
     * Example usage:
     * <code>
     * $query->filterByActive('fooValue');   // WHERE active = 'fooValue'
     * $query->filterByActive('%fooValue%'); // WHERE active LIKE '%fooValue%'
     * </code>
     *
     * @param     string $active The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationAlerteQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($active)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $active)) {
                $active = str_replace('*', '%', $active);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationAlertePeer::ACTIVE, $active, $comparison);
    }

    /**
     * Filter the query on the xml column
     *
     * Example usage:
     * <code>
     * $query->filterByXml('fooValue');   // WHERE xml = 'fooValue'
     * $query->filterByXml('%fooValue%'); // WHERE xml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationAlerteQuery The current query, for fluid interface
     */
    public function filterByXml($xml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $xml)) {
                $xml = str_replace('*', '%', $xml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationAlertePeer::XML, $xml, $comparison);
    }

    /**
     * Filter the query on the message column
     *
     * Example usage:
     * <code>
     * $query->filterByMessage('fooValue');   // WHERE message = 'fooValue'
     * $query->filterByMessage('%fooValue%'); // WHERE message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $message The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationAlerteQuery The current query, for fluid interface
     */
    public function filterByMessage($message = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($message)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $message)) {
                $message = str_replace('*', '%', $message);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationAlertePeer::MESSAGE, $message, $comparison);
    }

    /**
     * Filter the query on the type_objet column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeObjet('fooValue');   // WHERE type_objet = 'fooValue'
     * $query->filterByTypeObjet('%fooValue%'); // WHERE type_objet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeObjet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConfigurationAlerteQuery The current query, for fluid interface
     */
    public function filterByTypeObjet($typeObjet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeObjet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeObjet)) {
                $typeObjet = str_replace('*', '%', $typeObjet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConfigurationAlertePeer::TYPE_OBJET, $typeObjet, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonConfigurationAlerte $commonConfigurationAlerte Object to remove from the list of results
     *
     * @return CommonConfigurationAlerteQuery The current query, for fluid interface
     */
    public function prune($commonConfigurationAlerte = null)
    {
        if ($commonConfigurationAlerte) {
            $this->addUsingAlias(CommonConfigurationAlertePeer::ID, $commonConfigurationAlerte->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
