<?php


/**
 * Base class that represents a query for the 'interfacage_exec_parapheur_organisme' table.
 *
 * 
 *
 * @method CommonInterfacageExecParapheurOrganismeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonInterfacageExecParapheurOrganismeQuery orderByOrg($order = Criteria::ASC) Order by the org column
 * @method CommonInterfacageExecParapheurOrganismeQuery orderByIdEntiteParapheur($order = Criteria::ASC) Order by the id_entite_parapheur column
 *
 * @method CommonInterfacageExecParapheurOrganismeQuery groupById() Group by the id column
 * @method CommonInterfacageExecParapheurOrganismeQuery groupByOrg() Group by the org column
 * @method CommonInterfacageExecParapheurOrganismeQuery groupByIdEntiteParapheur() Group by the id_entite_parapheur column
 *
 * @method CommonInterfacageExecParapheurOrganismeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonInterfacageExecParapheurOrganismeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonInterfacageExecParapheurOrganismeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonInterfacageExecParapheurOrganisme findOne(PropelPDO $con = null) Return the first CommonInterfacageExecParapheurOrganisme matching the query
 * @method CommonInterfacageExecParapheurOrganisme findOneOrCreate(PropelPDO $con = null) Return the first CommonInterfacageExecParapheurOrganisme matching the query, or a new CommonInterfacageExecParapheurOrganisme object populated from the query conditions when no match is found
 *
 * @method CommonInterfacageExecParapheurOrganisme findOneByOrg(string $org) Return the first CommonInterfacageExecParapheurOrganisme filtered by the org column
 * @method CommonInterfacageExecParapheurOrganisme findOneByIdEntiteParapheur(int $id_entite_parapheur) Return the first CommonInterfacageExecParapheurOrganisme filtered by the id_entite_parapheur column
 *
 * @method array findById(int $id) Return CommonInterfacageExecParapheurOrganisme objects filtered by the id column
 * @method array findByOrg(string $org) Return CommonInterfacageExecParapheurOrganisme objects filtered by the org column
 * @method array findByIdEntiteParapheur(int $id_entite_parapheur) Return CommonInterfacageExecParapheurOrganisme objects filtered by the id_entite_parapheur column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonInterfacageExecParapheurOrganismeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonInterfacageExecParapheurOrganismeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonInterfacageExecParapheurOrganisme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonInterfacageExecParapheurOrganismeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonInterfacageExecParapheurOrganismeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonInterfacageExecParapheurOrganismeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonInterfacageExecParapheurOrganismeQuery) {
            return $criteria;
        }
        $query = new CommonInterfacageExecParapheurOrganismeQuery();
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
     * @return   CommonInterfacageExecParapheurOrganisme|CommonInterfacageExecParapheurOrganisme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonInterfacageExecParapheurOrganismePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonInterfacageExecParapheurOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonInterfacageExecParapheurOrganisme A model object, or null if the key is not found
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
     * @return                 CommonInterfacageExecParapheurOrganisme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `org`, `id_entite_parapheur` FROM `interfacage_exec_parapheur_organisme` WHERE `id` = :p0';
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
            $obj = new CommonInterfacageExecParapheurOrganisme();
            $obj->hydrate($row);
            CommonInterfacageExecParapheurOrganismePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonInterfacageExecParapheurOrganisme|CommonInterfacageExecParapheurOrganisme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonInterfacageExecParapheurOrganisme[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonInterfacageExecParapheurOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonInterfacageExecParapheurOrganismePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonInterfacageExecParapheurOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonInterfacageExecParapheurOrganismePeer::ID, $keys, Criteria::IN);
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
     * @return CommonInterfacageExecParapheurOrganismeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonInterfacageExecParapheurOrganismePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonInterfacageExecParapheurOrganismePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInterfacageExecParapheurOrganismePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the org column
     *
     * Example usage:
     * <code>
     * $query->filterByOrg('fooValue');   // WHERE org = 'fooValue'
     * $query->filterByOrg('%fooValue%'); // WHERE org LIKE '%fooValue%'
     * </code>
     *
     * @param     string $org The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInterfacageExecParapheurOrganismeQuery The current query, for fluid interface
     */
    public function filterByOrg($org = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($org)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $org)) {
                $org = str_replace('*', '%', $org);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInterfacageExecParapheurOrganismePeer::ORG, $org, $comparison);
    }

    /**
     * Filter the query on the id_entite_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteParapheur(1234); // WHERE id_entite_parapheur = 1234
     * $query->filterByIdEntiteParapheur(array(12, 34)); // WHERE id_entite_parapheur IN (12, 34)
     * $query->filterByIdEntiteParapheur(array('min' => 12)); // WHERE id_entite_parapheur >= 12
     * $query->filterByIdEntiteParapheur(array('max' => 12)); // WHERE id_entite_parapheur <= 12
     * </code>
     *
     * @param     mixed $idEntiteParapheur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInterfacageExecParapheurOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteParapheur($idEntiteParapheur = null, $comparison = null)
    {
        if (is_array($idEntiteParapheur)) {
            $useMinMax = false;
            if (isset($idEntiteParapheur['min'])) {
                $this->addUsingAlias(CommonInterfacageExecParapheurOrganismePeer::ID_ENTITE_PARAPHEUR, $idEntiteParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteParapheur['max'])) {
                $this->addUsingAlias(CommonInterfacageExecParapheurOrganismePeer::ID_ENTITE_PARAPHEUR, $idEntiteParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInterfacageExecParapheurOrganismePeer::ID_ENTITE_PARAPHEUR, $idEntiteParapheur, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonInterfacageExecParapheurOrganisme $commonInterfacageExecParapheurOrganisme Object to remove from the list of results
     *
     * @return CommonInterfacageExecParapheurOrganismeQuery The current query, for fluid interface
     */
    public function prune($commonInterfacageExecParapheurOrganisme = null)
    {
        if ($commonInterfacageExecParapheurOrganisme) {
            $this->addUsingAlias(CommonInterfacageExecParapheurOrganismePeer::ID, $commonInterfacageExecParapheurOrganisme->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
