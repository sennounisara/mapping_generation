<?php


/**
 * Base class that represents a query for the 't_groupe_diffusion' table.
 *
 * 
 *
 * @method TGroupeDiffusionQuery orderByIdGroupe($order = Criteria::ASC) Order by the ID_GROUPE column
 * @method TGroupeDiffusionQuery orderByLibelleFr($order = Criteria::ASC) Order by the LIBELLE_FR column
 * @method TGroupeDiffusionQuery orderByLibelleAr($order = Criteria::ASC) Order by the LIBELLE_AR column
 * @method TGroupeDiffusionQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 *
 * @method TGroupeDiffusionQuery groupByIdGroupe() Group by the ID_GROUPE column
 * @method TGroupeDiffusionQuery groupByLibelleFr() Group by the LIBELLE_FR column
 * @method TGroupeDiffusionQuery groupByLibelleAr() Group by the LIBELLE_AR column
 * @method TGroupeDiffusionQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 *
 * @method TGroupeDiffusionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TGroupeDiffusionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TGroupeDiffusionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TGroupeDiffusion findOne(PropelPDO $con = null) Return the first TGroupeDiffusion matching the query
 * @method TGroupeDiffusion findOneOrCreate(PropelPDO $con = null) Return the first TGroupeDiffusion matching the query, or a new TGroupeDiffusion object populated from the query conditions when no match is found
 *
 * @method TGroupeDiffusion findOneByLibelleFr(string $LIBELLE_FR) Return the first TGroupeDiffusion filtered by the LIBELLE_FR column
 * @method TGroupeDiffusion findOneByLibelleAr(string $LIBELLE_AR) Return the first TGroupeDiffusion filtered by the LIBELLE_AR column
 * @method TGroupeDiffusion findOneByIdOrganisme(int $ID_ORGANISME) Return the first TGroupeDiffusion filtered by the ID_ORGANISME column
 *
 * @method array findByIdGroupe(int $ID_GROUPE) Return TGroupeDiffusion objects filtered by the ID_GROUPE column
 * @method array findByLibelleFr(string $LIBELLE_FR) Return TGroupeDiffusion objects filtered by the LIBELLE_FR column
 * @method array findByLibelleAr(string $LIBELLE_AR) Return TGroupeDiffusion objects filtered by the LIBELLE_AR column
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return TGroupeDiffusion objects filtered by the ID_ORGANISME column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTGroupeDiffusionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTGroupeDiffusionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TGroupeDiffusion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TGroupeDiffusionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TGroupeDiffusionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TGroupeDiffusionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TGroupeDiffusionQuery) {
            return $criteria;
        }
        $query = new TGroupeDiffusionQuery();
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
     * @return   TGroupeDiffusion|TGroupeDiffusion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TGroupeDiffusionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TGroupeDiffusionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TGroupeDiffusion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdGroupe($key, $con = null)
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
     * @return                 TGroupeDiffusion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_GROUPE`, `LIBELLE_FR`, `LIBELLE_AR`, `ID_ORGANISME` FROM `t_groupe_diffusion` WHERE `ID_GROUPE` = :p0';
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
            $obj = new TGroupeDiffusion();
            $obj->hydrate($row);
            TGroupeDiffusionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TGroupeDiffusion|TGroupeDiffusion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TGroupeDiffusion[]|mixed the list of results, formatted by the current formatter
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
     * @return TGroupeDiffusionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TGroupeDiffusionPeer::ID_GROUPE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TGroupeDiffusionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TGroupeDiffusionPeer::ID_GROUPE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_GROUPE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdGroupe(1234); // WHERE ID_GROUPE = 1234
     * $query->filterByIdGroupe(array(12, 34)); // WHERE ID_GROUPE IN (12, 34)
     * $query->filterByIdGroupe(array('min' => 12)); // WHERE ID_GROUPE >= 12
     * $query->filterByIdGroupe(array('max' => 12)); // WHERE ID_GROUPE <= 12
     * </code>
     *
     * @param     mixed $idGroupe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TGroupeDiffusionQuery The current query, for fluid interface
     */
    public function filterByIdGroupe($idGroupe = null, $comparison = null)
    {
        if (is_array($idGroupe)) {
            $useMinMax = false;
            if (isset($idGroupe['min'])) {
                $this->addUsingAlias(TGroupeDiffusionPeer::ID_GROUPE, $idGroupe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGroupe['max'])) {
                $this->addUsingAlias(TGroupeDiffusionPeer::ID_GROUPE, $idGroupe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TGroupeDiffusionPeer::ID_GROUPE, $idGroupe, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFr('fooValue');   // WHERE LIBELLE_FR = 'fooValue'
     * $query->filterByLibelleFr('%fooValue%'); // WHERE LIBELLE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TGroupeDiffusionQuery The current query, for fluid interface
     */
    public function filterByLibelleFr($libelleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFr)) {
                $libelleFr = str_replace('*', '%', $libelleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TGroupeDiffusionPeer::LIBELLE_FR, $libelleFr, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAr('fooValue');   // WHERE LIBELLE_AR = 'fooValue'
     * $query->filterByLibelleAr('%fooValue%'); // WHERE LIBELLE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TGroupeDiffusionQuery The current query, for fluid interface
     */
    public function filterByLibelleAr($libelleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAr)) {
                $libelleAr = str_replace('*', '%', $libelleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TGroupeDiffusionPeer::LIBELLE_AR, $libelleAr, $comparison);
    }

    /**
     * Filter the query on the ID_ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrganisme(1234); // WHERE ID_ORGANISME = 1234
     * $query->filterByIdOrganisme(array(12, 34)); // WHERE ID_ORGANISME IN (12, 34)
     * $query->filterByIdOrganisme(array('min' => 12)); // WHERE ID_ORGANISME >= 12
     * $query->filterByIdOrganisme(array('max' => 12)); // WHERE ID_ORGANISME <= 12
     * </code>
     *
     * @param     mixed $idOrganisme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TGroupeDiffusionQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(TGroupeDiffusionPeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(TGroupeDiffusionPeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TGroupeDiffusionPeer::ID_ORGANISME, $idOrganisme, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TGroupeDiffusion $tGroupeDiffusion Object to remove from the list of results
     *
     * @return TGroupeDiffusionQuery The current query, for fluid interface
     */
    public function prune($tGroupeDiffusion = null)
    {
        if ($tGroupeDiffusion) {
            $this->addUsingAlias(TGroupeDiffusionPeer::ID_GROUPE, $tGroupeDiffusion->getIdGroupe(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
