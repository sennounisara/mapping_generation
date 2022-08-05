<?php


/**
 * Base class that represents a query for the 'Relation_Echange' table.
 *
 * 
 *
 * @method CommonRelationEchangeQuery orderByIdAuto($order = Criteria::ASC) Order by the id_auto column
 * @method CommonRelationEchangeQuery orderByIdEchange($order = Criteria::ASC) Order by the id_echange column
 * @method CommonRelationEchangeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonRelationEchangeQuery orderByIdExterne($order = Criteria::ASC) Order by the id_externe column
 * @method CommonRelationEchangeQuery orderByTypeRelation($order = Criteria::ASC) Order by the type_relation column
 * @method CommonRelationEchangeQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 *
 * @method CommonRelationEchangeQuery groupByIdAuto() Group by the id_auto column
 * @method CommonRelationEchangeQuery groupByIdEchange() Group by the id_echange column
 * @method CommonRelationEchangeQuery groupByOrganisme() Group by the organisme column
 * @method CommonRelationEchangeQuery groupByIdExterne() Group by the id_externe column
 * @method CommonRelationEchangeQuery groupByTypeRelation() Group by the type_relation column
 * @method CommonRelationEchangeQuery groupByDateEnvoi() Group by the date_envoi column
 *
 * @method CommonRelationEchangeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonRelationEchangeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonRelationEchangeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonRelationEchange findOne(PropelPDO $con = null) Return the first CommonRelationEchange matching the query
 * @method CommonRelationEchange findOneOrCreate(PropelPDO $con = null) Return the first CommonRelationEchange matching the query, or a new CommonRelationEchange object populated from the query conditions when no match is found
 *
 * @method CommonRelationEchange findOneByIdEchange(int $id_echange) Return the first CommonRelationEchange filtered by the id_echange column
 * @method CommonRelationEchange findOneByOrganisme(string $organisme) Return the first CommonRelationEchange filtered by the organisme column
 * @method CommonRelationEchange findOneByIdExterne(int $id_externe) Return the first CommonRelationEchange filtered by the id_externe column
 * @method CommonRelationEchange findOneByTypeRelation(int $type_relation) Return the first CommonRelationEchange filtered by the type_relation column
 * @method CommonRelationEchange findOneByDateEnvoi(string $date_envoi) Return the first CommonRelationEchange filtered by the date_envoi column
 *
 * @method array findByIdAuto(int $id_auto) Return CommonRelationEchange objects filtered by the id_auto column
 * @method array findByIdEchange(int $id_echange) Return CommonRelationEchange objects filtered by the id_echange column
 * @method array findByOrganisme(string $organisme) Return CommonRelationEchange objects filtered by the organisme column
 * @method array findByIdExterne(int $id_externe) Return CommonRelationEchange objects filtered by the id_externe column
 * @method array findByTypeRelation(int $type_relation) Return CommonRelationEchange objects filtered by the type_relation column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonRelationEchange objects filtered by the date_envoi column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonRelationEchangeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonRelationEchangeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonRelationEchange', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonRelationEchangeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonRelationEchangeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonRelationEchangeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonRelationEchangeQuery) {
            return $criteria;
        }
        $query = new CommonRelationEchangeQuery();
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
     * @return   CommonRelationEchange|CommonRelationEchange[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonRelationEchangePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonRelationEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonRelationEchange A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAuto($key, $con = null)
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
     * @return                 CommonRelationEchange A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_auto`, `id_echange`, `organisme`, `id_externe`, `type_relation`, `date_envoi` FROM `Relation_Echange` WHERE `id_auto` = :p0';
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
            $obj = new CommonRelationEchange();
            $obj->hydrate($row);
            CommonRelationEchangePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonRelationEchange|CommonRelationEchange[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonRelationEchange[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonRelationEchangeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonRelationEchangePeer::ID_AUTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonRelationEchangeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonRelationEchangePeer::ID_AUTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_auto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAuto(1234); // WHERE id_auto = 1234
     * $query->filterByIdAuto(array(12, 34)); // WHERE id_auto IN (12, 34)
     * $query->filterByIdAuto(array('min' => 12)); // WHERE id_auto >= 12
     * $query->filterByIdAuto(array('max' => 12)); // WHERE id_auto <= 12
     * </code>
     *
     * @param     mixed $idAuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRelationEchangeQuery The current query, for fluid interface
     */
    public function filterByIdAuto($idAuto = null, $comparison = null)
    {
        if (is_array($idAuto)) {
            $useMinMax = false;
            if (isset($idAuto['min'])) {
                $this->addUsingAlias(CommonRelationEchangePeer::ID_AUTO, $idAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAuto['max'])) {
                $this->addUsingAlias(CommonRelationEchangePeer::ID_AUTO, $idAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRelationEchangePeer::ID_AUTO, $idAuto, $comparison);
    }

    /**
     * Filter the query on the id_echange column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEchange(1234); // WHERE id_echange = 1234
     * $query->filterByIdEchange(array(12, 34)); // WHERE id_echange IN (12, 34)
     * $query->filterByIdEchange(array('min' => 12)); // WHERE id_echange >= 12
     * $query->filterByIdEchange(array('max' => 12)); // WHERE id_echange <= 12
     * </code>
     *
     * @param     mixed $idEchange The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRelationEchangeQuery The current query, for fluid interface
     */
    public function filterByIdEchange($idEchange = null, $comparison = null)
    {
        if (is_array($idEchange)) {
            $useMinMax = false;
            if (isset($idEchange['min'])) {
                $this->addUsingAlias(CommonRelationEchangePeer::ID_ECHANGE, $idEchange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEchange['max'])) {
                $this->addUsingAlias(CommonRelationEchangePeer::ID_ECHANGE, $idEchange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRelationEchangePeer::ID_ECHANGE, $idEchange, $comparison);
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
     * @return CommonRelationEchangeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRelationEchangePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdExterne(1234); // WHERE id_externe = 1234
     * $query->filterByIdExterne(array(12, 34)); // WHERE id_externe IN (12, 34)
     * $query->filterByIdExterne(array('min' => 12)); // WHERE id_externe >= 12
     * $query->filterByIdExterne(array('max' => 12)); // WHERE id_externe <= 12
     * </code>
     *
     * @param     mixed $idExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRelationEchangeQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (is_array($idExterne)) {
            $useMinMax = false;
            if (isset($idExterne['min'])) {
                $this->addUsingAlias(CommonRelationEchangePeer::ID_EXTERNE, $idExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExterne['max'])) {
                $this->addUsingAlias(CommonRelationEchangePeer::ID_EXTERNE, $idExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRelationEchangePeer::ID_EXTERNE, $idExterne, $comparison);
    }

    /**
     * Filter the query on the type_relation column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeRelation(1234); // WHERE type_relation = 1234
     * $query->filterByTypeRelation(array(12, 34)); // WHERE type_relation IN (12, 34)
     * $query->filterByTypeRelation(array('min' => 12)); // WHERE type_relation >= 12
     * $query->filterByTypeRelation(array('max' => 12)); // WHERE type_relation <= 12
     * </code>
     *
     * @param     mixed $typeRelation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRelationEchangeQuery The current query, for fluid interface
     */
    public function filterByTypeRelation($typeRelation = null, $comparison = null)
    {
        if (is_array($typeRelation)) {
            $useMinMax = false;
            if (isset($typeRelation['min'])) {
                $this->addUsingAlias(CommonRelationEchangePeer::TYPE_RELATION, $typeRelation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeRelation['max'])) {
                $this->addUsingAlias(CommonRelationEchangePeer::TYPE_RELATION, $typeRelation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRelationEchangePeer::TYPE_RELATION, $typeRelation, $comparison);
    }

    /**
     * Filter the query on the date_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('fooValue');   // WHERE date_envoi = 'fooValue'
     * $query->filterByDateEnvoi('%fooValue%'); // WHERE date_envoi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateEnvoi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRelationEchangeQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateEnvoi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateEnvoi)) {
                $dateEnvoi = str_replace('*', '%', $dateEnvoi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRelationEchangePeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonRelationEchange $commonRelationEchange Object to remove from the list of results
     *
     * @return CommonRelationEchangeQuery The current query, for fluid interface
     */
    public function prune($commonRelationEchange = null)
    {
        if ($commonRelationEchange) {
            $this->addUsingAlias(CommonRelationEchangePeer::ID_AUTO, $commonRelationEchange->getIdAuto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
