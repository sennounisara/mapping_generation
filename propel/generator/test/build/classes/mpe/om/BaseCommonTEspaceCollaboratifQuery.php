<?php


/**
 * Base class that represents a query for the 't_espace_collaboratif' table.
 *
 * 
 *
 * @method CommonTEspaceCollaboratifQuery orderByIdAuto($order = Criteria::ASC) Order by the id_auto column
 * @method CommonTEspaceCollaboratifQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonTEspaceCollaboratifQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTEspaceCollaboratifQuery orderByNomEspace($order = Criteria::ASC) Order by the nom_espace column
 *
 * @method CommonTEspaceCollaboratifQuery groupByIdAuto() Group by the id_auto column
 * @method CommonTEspaceCollaboratifQuery groupByReference() Group by the reference column
 * @method CommonTEspaceCollaboratifQuery groupByOrganisme() Group by the organisme column
 * @method CommonTEspaceCollaboratifQuery groupByNomEspace() Group by the nom_espace column
 *
 * @method CommonTEspaceCollaboratifQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTEspaceCollaboratifQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTEspaceCollaboratifQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTEspaceCollaboratif findOne(PropelPDO $con = null) Return the first CommonTEspaceCollaboratif matching the query
 * @method CommonTEspaceCollaboratif findOneOrCreate(PropelPDO $con = null) Return the first CommonTEspaceCollaboratif matching the query, or a new CommonTEspaceCollaboratif object populated from the query conditions when no match is found
 *
 * @method CommonTEspaceCollaboratif findOneByReference(int $reference) Return the first CommonTEspaceCollaboratif filtered by the reference column
 * @method CommonTEspaceCollaboratif findOneByOrganisme(string $organisme) Return the first CommonTEspaceCollaboratif filtered by the organisme column
 * @method CommonTEspaceCollaboratif findOneByNomEspace(string $nom_espace) Return the first CommonTEspaceCollaboratif filtered by the nom_espace column
 *
 * @method array findByIdAuto(int $id_auto) Return CommonTEspaceCollaboratif objects filtered by the id_auto column
 * @method array findByReference(int $reference) Return CommonTEspaceCollaboratif objects filtered by the reference column
 * @method array findByOrganisme(string $organisme) Return CommonTEspaceCollaboratif objects filtered by the organisme column
 * @method array findByNomEspace(string $nom_espace) Return CommonTEspaceCollaboratif objects filtered by the nom_espace column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTEspaceCollaboratifQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTEspaceCollaboratifQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTEspaceCollaboratif', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTEspaceCollaboratifQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTEspaceCollaboratifQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTEspaceCollaboratifQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTEspaceCollaboratifQuery) {
            return $criteria;
        }
        $query = new CommonTEspaceCollaboratifQuery();
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
     * @return   CommonTEspaceCollaboratif|CommonTEspaceCollaboratif[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTEspaceCollaboratifPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTEspaceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTEspaceCollaboratif A model object, or null if the key is not found
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
     * @return                 CommonTEspaceCollaboratif A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_auto`, `reference`, `organisme`, `nom_espace` FROM `t_espace_collaboratif` WHERE `id_auto` = :p0';
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
            $obj = new CommonTEspaceCollaboratif();
            $obj->hydrate($row);
            CommonTEspaceCollaboratifPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTEspaceCollaboratif|CommonTEspaceCollaboratif[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTEspaceCollaboratif[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTEspaceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTEspaceCollaboratifPeer::ID_AUTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTEspaceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTEspaceCollaboratifPeer::ID_AUTO, $keys, Criteria::IN);
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
     * @return CommonTEspaceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByIdAuto($idAuto = null, $comparison = null)
    {
        if (is_array($idAuto)) {
            $useMinMax = false;
            if (isset($idAuto['min'])) {
                $this->addUsingAlias(CommonTEspaceCollaboratifPeer::ID_AUTO, $idAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAuto['max'])) {
                $this->addUsingAlias(CommonTEspaceCollaboratifPeer::ID_AUTO, $idAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEspaceCollaboratifPeer::ID_AUTO, $idAuto, $comparison);
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference(1234); // WHERE reference = 1234
     * $query->filterByReference(array(12, 34)); // WHERE reference IN (12, 34)
     * $query->filterByReference(array('min' => 12)); // WHERE reference >= 12
     * $query->filterByReference(array('max' => 12)); // WHERE reference <= 12
     * </code>
     *
     * @param     mixed $reference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEspaceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (is_array($reference)) {
            $useMinMax = false;
            if (isset($reference['min'])) {
                $this->addUsingAlias(CommonTEspaceCollaboratifPeer::REFERENCE, $reference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reference['max'])) {
                $this->addUsingAlias(CommonTEspaceCollaboratifPeer::REFERENCE, $reference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTEspaceCollaboratifPeer::REFERENCE, $reference, $comparison);
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
     * @return CommonTEspaceCollaboratifQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTEspaceCollaboratifPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the nom_espace column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEspace('fooValue');   // WHERE nom_espace = 'fooValue'
     * $query->filterByNomEspace('%fooValue%'); // WHERE nom_espace LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEspace The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTEspaceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByNomEspace($nomEspace = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEspace)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEspace)) {
                $nomEspace = str_replace('*', '%', $nomEspace);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTEspaceCollaboratifPeer::NOM_ESPACE, $nomEspace, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTEspaceCollaboratif $commonTEspaceCollaboratif Object to remove from the list of results
     *
     * @return CommonTEspaceCollaboratifQuery The current query, for fluid interface
     */
    public function prune($commonTEspaceCollaboratif = null)
    {
        if ($commonTEspaceCollaboratif) {
            $this->addUsingAlias(CommonTEspaceCollaboratifPeer::ID_AUTO, $commonTEspaceCollaboratif->getIdAuto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
