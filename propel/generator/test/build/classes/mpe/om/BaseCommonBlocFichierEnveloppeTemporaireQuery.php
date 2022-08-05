<?php


/**
 * Base class that represents a query for the 'blocFichierEnveloppeTemporaire' table.
 *
 * 
 *
 * @method CommonBlocFichierEnveloppeTemporaireQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonBlocFichierEnveloppeTemporaireQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonBlocFichierEnveloppeTemporaireQuery orderByUid($order = Criteria::ASC) Order by the uid column
 * @method CommonBlocFichierEnveloppeTemporaireQuery orderByTypeEnv($order = Criteria::ASC) Order by the type_env column
 * @method CommonBlocFichierEnveloppeTemporaireQuery orderBySousPli($order = Criteria::ASC) Order by the sous_pli column
 * @method CommonBlocFichierEnveloppeTemporaireQuery orderByTypeFichier($order = Criteria::ASC) Order by the type_fichier column
 * @method CommonBlocFichierEnveloppeTemporaireQuery orderByNumeroOrdreFichier($order = Criteria::ASC) Order by the numero_ordre_fichier column
 * @method CommonBlocFichierEnveloppeTemporaireQuery orderByNumeroOrdreBloc($order = Criteria::ASC) Order by the numero_ordre_bloc column
 * @method CommonBlocFichierEnveloppeTemporaireQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 *
 * @method CommonBlocFichierEnveloppeTemporaireQuery groupById() Group by the id column
 * @method CommonBlocFichierEnveloppeTemporaireQuery groupByOrganisme() Group by the organisme column
 * @method CommonBlocFichierEnveloppeTemporaireQuery groupByUid() Group by the uid column
 * @method CommonBlocFichierEnveloppeTemporaireQuery groupByTypeEnv() Group by the type_env column
 * @method CommonBlocFichierEnveloppeTemporaireQuery groupBySousPli() Group by the sous_pli column
 * @method CommonBlocFichierEnveloppeTemporaireQuery groupByTypeFichier() Group by the type_fichier column
 * @method CommonBlocFichierEnveloppeTemporaireQuery groupByNumeroOrdreFichier() Group by the numero_ordre_fichier column
 * @method CommonBlocFichierEnveloppeTemporaireQuery groupByNumeroOrdreBloc() Group by the numero_ordre_bloc column
 * @method CommonBlocFichierEnveloppeTemporaireQuery groupByIdBlob() Group by the id_blob column
 *
 * @method CommonBlocFichierEnveloppeTemporaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonBlocFichierEnveloppeTemporaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonBlocFichierEnveloppeTemporaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonBlocFichierEnveloppeTemporaire findOne(PropelPDO $con = null) Return the first CommonBlocFichierEnveloppeTemporaire matching the query
 * @method CommonBlocFichierEnveloppeTemporaire findOneOrCreate(PropelPDO $con = null) Return the first CommonBlocFichierEnveloppeTemporaire matching the query, or a new CommonBlocFichierEnveloppeTemporaire object populated from the query conditions when no match is found
 *
 * @method CommonBlocFichierEnveloppeTemporaire findOneById(int $id) Return the first CommonBlocFichierEnveloppeTemporaire filtered by the id column
 * @method CommonBlocFichierEnveloppeTemporaire findOneByOrganisme(string $organisme) Return the first CommonBlocFichierEnveloppeTemporaire filtered by the organisme column
 * @method CommonBlocFichierEnveloppeTemporaire findOneByUid(string $uid) Return the first CommonBlocFichierEnveloppeTemporaire filtered by the uid column
 * @method CommonBlocFichierEnveloppeTemporaire findOneByTypeEnv(int $type_env) Return the first CommonBlocFichierEnveloppeTemporaire filtered by the type_env column
 * @method CommonBlocFichierEnveloppeTemporaire findOneBySousPli(int $sous_pli) Return the first CommonBlocFichierEnveloppeTemporaire filtered by the sous_pli column
 * @method CommonBlocFichierEnveloppeTemporaire findOneByTypeFichier(string $type_fichier) Return the first CommonBlocFichierEnveloppeTemporaire filtered by the type_fichier column
 * @method CommonBlocFichierEnveloppeTemporaire findOneByNumeroOrdreFichier(int $numero_ordre_fichier) Return the first CommonBlocFichierEnveloppeTemporaire filtered by the numero_ordre_fichier column
 * @method CommonBlocFichierEnveloppeTemporaire findOneByNumeroOrdreBloc(int $numero_ordre_bloc) Return the first CommonBlocFichierEnveloppeTemporaire filtered by the numero_ordre_bloc column
 * @method CommonBlocFichierEnveloppeTemporaire findOneByIdBlob(int $id_blob) Return the first CommonBlocFichierEnveloppeTemporaire filtered by the id_blob column
 *
 * @method array findById(int $id) Return CommonBlocFichierEnveloppeTemporaire objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonBlocFichierEnveloppeTemporaire objects filtered by the organisme column
 * @method array findByUid(string $uid) Return CommonBlocFichierEnveloppeTemporaire objects filtered by the uid column
 * @method array findByTypeEnv(int $type_env) Return CommonBlocFichierEnveloppeTemporaire objects filtered by the type_env column
 * @method array findBySousPli(int $sous_pli) Return CommonBlocFichierEnveloppeTemporaire objects filtered by the sous_pli column
 * @method array findByTypeFichier(string $type_fichier) Return CommonBlocFichierEnveloppeTemporaire objects filtered by the type_fichier column
 * @method array findByNumeroOrdreFichier(int $numero_ordre_fichier) Return CommonBlocFichierEnveloppeTemporaire objects filtered by the numero_ordre_fichier column
 * @method array findByNumeroOrdreBloc(int $numero_ordre_bloc) Return CommonBlocFichierEnveloppeTemporaire objects filtered by the numero_ordre_bloc column
 * @method array findByIdBlob(int $id_blob) Return CommonBlocFichierEnveloppeTemporaire objects filtered by the id_blob column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonBlocFichierEnveloppeTemporaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonBlocFichierEnveloppeTemporaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonBlocFichierEnveloppeTemporaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonBlocFichierEnveloppeTemporaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonBlocFichierEnveloppeTemporaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonBlocFichierEnveloppeTemporaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonBlocFichierEnveloppeTemporaireQuery) {
            return $criteria;
        }
        $query = new CommonBlocFichierEnveloppeTemporaireQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonBlocFichierEnveloppeTemporaire|CommonBlocFichierEnveloppeTemporaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonBlocFichierEnveloppeTemporairePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonBlocFichierEnveloppeTemporairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonBlocFichierEnveloppeTemporaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `uid`, `type_env`, `sous_pli`, `type_fichier`, `numero_ordre_fichier`, `numero_ordre_bloc`, `id_blob` FROM `blocFichierEnveloppeTemporaire` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonBlocFichierEnveloppeTemporaire();
            $obj->hydrate($row);
            CommonBlocFichierEnveloppeTemporairePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonBlocFichierEnveloppeTemporaire|CommonBlocFichierEnveloppeTemporaire[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonBlocFichierEnveloppeTemporaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonBlocFichierEnveloppeTemporairePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonBlocFichierEnveloppeTemporairePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::ID, $id, $comparison);
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
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the uid column
     *
     * Example usage:
     * <code>
     * $query->filterByUid('fooValue');   // WHERE uid = 'fooValue'
     * $query->filterByUid('%fooValue%'); // WHERE uid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
     */
    public function filterByUid($uid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uid)) {
                $uid = str_replace('*', '%', $uid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::UID, $uid, $comparison);
    }

    /**
     * Filter the query on the type_env column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnv(1234); // WHERE type_env = 1234
     * $query->filterByTypeEnv(array(12, 34)); // WHERE type_env IN (12, 34)
     * $query->filterByTypeEnv(array('min' => 12)); // WHERE type_env >= 12
     * $query->filterByTypeEnv(array('max' => 12)); // WHERE type_env <= 12
     * </code>
     *
     * @param     mixed $typeEnv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
     */
    public function filterByTypeEnv($typeEnv = null, $comparison = null)
    {
        if (is_array($typeEnv)) {
            $useMinMax = false;
            if (isset($typeEnv['min'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::TYPE_ENV, $typeEnv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnv['max'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::TYPE_ENV, $typeEnv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::TYPE_ENV, $typeEnv, $comparison);
    }

    /**
     * Filter the query on the sous_pli column
     *
     * Example usage:
     * <code>
     * $query->filterBySousPli(1234); // WHERE sous_pli = 1234
     * $query->filterBySousPli(array(12, 34)); // WHERE sous_pli IN (12, 34)
     * $query->filterBySousPli(array('min' => 12)); // WHERE sous_pli >= 12
     * $query->filterBySousPli(array('max' => 12)); // WHERE sous_pli <= 12
     * </code>
     *
     * @param     mixed $sousPli The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
     */
    public function filterBySousPli($sousPli = null, $comparison = null)
    {
        if (is_array($sousPli)) {
            $useMinMax = false;
            if (isset($sousPli['min'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::SOUS_PLI, $sousPli['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sousPli['max'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::SOUS_PLI, $sousPli['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::SOUS_PLI, $sousPli, $comparison);
    }

    /**
     * Filter the query on the type_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeFichier('fooValue');   // WHERE type_fichier = 'fooValue'
     * $query->filterByTypeFichier('%fooValue%'); // WHERE type_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
     */
    public function filterByTypeFichier($typeFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeFichier)) {
                $typeFichier = str_replace('*', '%', $typeFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::TYPE_FICHIER, $typeFichier, $comparison);
    }

    /**
     * Filter the query on the numero_ordre_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroOrdreFichier(1234); // WHERE numero_ordre_fichier = 1234
     * $query->filterByNumeroOrdreFichier(array(12, 34)); // WHERE numero_ordre_fichier IN (12, 34)
     * $query->filterByNumeroOrdreFichier(array('min' => 12)); // WHERE numero_ordre_fichier >= 12
     * $query->filterByNumeroOrdreFichier(array('max' => 12)); // WHERE numero_ordre_fichier <= 12
     * </code>
     *
     * @param     mixed $numeroOrdreFichier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
     */
    public function filterByNumeroOrdreFichier($numeroOrdreFichier = null, $comparison = null)
    {
        if (is_array($numeroOrdreFichier)) {
            $useMinMax = false;
            if (isset($numeroOrdreFichier['min'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_FICHIER, $numeroOrdreFichier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroOrdreFichier['max'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_FICHIER, $numeroOrdreFichier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_FICHIER, $numeroOrdreFichier, $comparison);
    }

    /**
     * Filter the query on the numero_ordre_bloc column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroOrdreBloc(1234); // WHERE numero_ordre_bloc = 1234
     * $query->filterByNumeroOrdreBloc(array(12, 34)); // WHERE numero_ordre_bloc IN (12, 34)
     * $query->filterByNumeroOrdreBloc(array('min' => 12)); // WHERE numero_ordre_bloc >= 12
     * $query->filterByNumeroOrdreBloc(array('max' => 12)); // WHERE numero_ordre_bloc <= 12
     * </code>
     *
     * @param     mixed $numeroOrdreBloc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
     */
    public function filterByNumeroOrdreBloc($numeroOrdreBloc = null, $comparison = null)
    {
        if (is_array($numeroOrdreBloc)) {
            $useMinMax = false;
            if (isset($numeroOrdreBloc['min'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_BLOC, $numeroOrdreBloc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroOrdreBloc['max'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_BLOC, $numeroOrdreBloc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::NUMERO_ORDRE_BLOC, $numeroOrdreBloc, $comparison);
    }

    /**
     * Filter the query on the id_blob column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlob(1234); // WHERE id_blob = 1234
     * $query->filterByIdBlob(array(12, 34)); // WHERE id_blob IN (12, 34)
     * $query->filterByIdBlob(array('min' => 12)); // WHERE id_blob >= 12
     * $query->filterByIdBlob(array('max' => 12)); // WHERE id_blob <= 12
     * </code>
     *
     * @param     mixed $idBlob The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlocFichierEnveloppeTemporairePeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonBlocFichierEnveloppeTemporaire $commonBlocFichierEnveloppeTemporaire Object to remove from the list of results
     *
     * @return CommonBlocFichierEnveloppeTemporaireQuery The current query, for fluid interface
     */
    public function prune($commonBlocFichierEnveloppeTemporaire = null)
    {
        if ($commonBlocFichierEnveloppeTemporaire) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonBlocFichierEnveloppeTemporairePeer::ID), $commonBlocFichierEnveloppeTemporaire->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonBlocFichierEnveloppeTemporairePeer::ORGANISME), $commonBlocFichierEnveloppeTemporaire->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
